# VarsaWeb Laravel CMS — Copilot Instructions

> **Always use Context7 MCP when writing code.** Fetch up-to-date Laravel, Tailwind CSS, and related docs via Context7 rather than relying on training data alone.

## Project Overview

Laravel 12 company-profile CMS with a public-facing website (Home, About, Services, Portfolio, Contact) and a custom admin panel for managing all content. No third-party CMS packages — all admin UI is hand-rolled Blade.

- **Stack**: PHP 8.2+, Laravel 12, MySQL, Tailwind CSS v4, Vite 7, TinyMCE 7 (rich-text editor), mews/purifier (HTML sanitization)
- **Default DB**: MySQL (`varsaweb`). SQLite used only in tests (in-memory).

---

## Commands

```bash
# Full dev environment (serves app + queue + logs + vite concurrently)
composer run dev

# Run all tests
composer run test

# Run a single test file
php artisan test tests/Feature/ExampleTest.php

# Run a single test method
php artisan test --filter=ExampleTest::test_the_application_returns_a_successful_response

# Frontend dev / build
npm run dev
npm run build

# Fresh install with seed data
composer run setup
php artisan migrate:fresh --seed
php artisan storage:link
```

Default seeded admin: `admin@varsaweb.com` / `password`

---

## Architecture

### Authentication: Two separate guards

The app has **two independent auth guards** in `config/auth.php`:

- `web` — standard Laravel guard using `users` table (unused by the app itself)
- `admin` — session guard using `App\Models\AdminUser` (the `admin_users` table)

All admin routes are protected by `App\Http\Middleware\AdminAuthenticate`, which checks `Auth::guard('admin')->check()`. Always use `Auth::guard('admin')` (not `Auth::`) when working with admin authentication.

### Singleton vs. collection models

CMS models fall into two categories:

- **Singletons** (one row, fetched with `firstOrCreate([])`): `HomeSetting`, `AboutSetting`, `ServicePageSetting`, `ContactSetting`, `FooterSetting`
- **Collections** (multiple rows, sortable): `TeamMember`, `Service`, `WorkProcess`, `Portfolio`, `SocialLink`

Sortable collection models have a `sort_order` integer column. New records auto-increment `sort_order` to `(max + 1)`.

### View composer

`AppServiceProvider` registers a view composer that automatically injects `$socialLinks` (ordered by `sort_order`) into both `partials.footer` and `contact` views. Do not query `SocialLink` manually in those views.

### Portfolio routing

`Portfolio` uses `slug` as its route key (`getRouteKeyName()` returns `'slug'`). The model auto-generates a slug from `title` on creation and updates it when `title` changes. Public URL: `/portfolio/{portfolio:slug}`.

### File uploads

All uploaded files go to the `public` disk under named subdirectories:

| Entity | Path |
|---|---|
| Home hero image | `uploads/home/` |
| About image | `uploads/about/` |
| Team member photo | `uploads/team/` |
| Portfolio image | `uploads/portfolio/` |

Allowed types: `jpg`, `jpeg`, `png`, `webp` (max 2 MB). Controllers handle deletion of the old file before storing the new one using `Storage::disk('public')->delete(...)`.

### No public controllers

There are **no dedicated public-facing controllers**. Public routes in `routes/web.php` use inline closures that query models directly and return Blade views. All controller classes live under `app/Http/Controllers/Admin/`.

### Rich text & HTML sanitization

Portfolio descriptions and other admin-entered HTML (description fields) are edited via **TinyMCE 7** (loaded from CDN). All rich-text fields **must** be sanitized with `Purifier::clean()` before saving:

```php
use Mews\Purifier\Facades\Purifier;

$model->description = Purifier::clean($validated['description']);
```

The purifier config is in `config/purifier.php`. The `default` profile allows safe HTML elements (headings, lists, links, images, tables, etc.) and strips `<script>`, event handlers, and dangerous protocols.

When rendering saved HTML in Blade, `{!! $model->description !!}` is safe **only** because content was purified on save.

### Security conventions

- **Rate limiting**: The admin login POST route uses `throttle:5,1` (5 attempts per minute). Do not remove it.
- **Social link URLs**: Must match `regex:/^https?:\/\//i` — this is enforced in all `storeSocialLink`/`updateSocialLink` validation rules.
- **Security headers**: `App\Http\Middleware\SecurityHeaders` is registered globally in `bootstrap/app.php` and adds `X-Frame-Options`, `X-Content-Type-Options`, `X-XSS-Protection`, `Referrer-Policy`, and `Permissions-Policy` to every response.
- **Session encryption**: `.env.example` ships with `SESSION_ENCRYPT=true`. Keep this enabled in production.

---

## Key Conventions

- **Blade layouts**: Admin views extend `admin.layouts.app`. Public views have no shared layout — each is a standalone Blade file.
- **Validation**: Done inline in controller methods using `$request->validate([...])`, not in separate Form Request classes.
- **Image handling pattern**: Check `$request->hasFile('image')` → delete old file from storage → store new file → save path to DB.
- **No Eloquent relationships**: Models have no `hasMany`/`belongsTo` definitions. Related data is loaded via separate `::all()` or `::orderBy()` queries in the controller.
- **Tailwind CSS v4**: Uses the Vite plugin (`@tailwindcss/vite`) — there is no `tailwind.config.js`. CSS configuration is handled in `resources/css/app.css`.
- **Tests use in-memory SQLite**: Configured in `phpunit.xml`. The production app uses MySQL. Do not assume DB-specific syntax will work the same in both.
