<?php

use App\Http\Controllers\Admin\AboutSettingController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\ContactSettingController;
use App\Http\Controllers\Admin\FooterSettingController;
use App\Http\Controllers\Admin\HomeSettingController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Middleware\AdminAuthenticate;
use App\Models\AboutSetting;
use App\Models\ContactSetting;
use App\Models\FooterSetting;
use App\Models\HomeSetting;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\ServicePageSetting;
use App\Models\TeamMember;
use App\Models\WorkProcess;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $homeSetting = HomeSetting::firstOrCreate(['id' => 1], [
        'hero_title'       => 'Weaving the Web of Tomorrow',
        'hero_description' => '',
    ]);
    $footerSetting = FooterSetting::firstOrCreate(['id' => 1], [
        'tagline'        => '',
        'copyright_text' => '© ' . date('Y') . ' VarsaWeb',
    ]);
    return view('company-profile', compact('homeSetting', 'footerSetting'));
})->name('home');

Route::get('/about', function () {
    $aboutSetting = AboutSetting::firstOrCreate(['id' => 1], [
        'title'       => 'About Us',
        'description' => '',
    ]);
    $teamMembers = TeamMember::orderBy('sort_order')->get();
    $footerSetting = FooterSetting::firstOrCreate(['id' => 1], [
        'tagline'        => '',
        'copyright_text' => '© ' . date('Y') . ' VarsaWeb',
    ]);
    return view('about', compact('aboutSetting', 'teamMembers', 'footerSetting'));
})->name('about');

Route::get('/services', function () {
    $services = Service::orderBy('sort_order')->get();
    $pageSetting = ServicePageSetting::firstOrCreate(['id' => 1], [
        'badge_text'  => '',
        'title'       => 'Our Services',
        'description' => '',
    ]);
    $workProcesses = WorkProcess::orderBy('sort_order')->get();
    $portfolios = Portfolio::orderBy('sort_order')->get();
    $footerSetting = FooterSetting::firstOrCreate(['id' => 1], [
        'tagline'        => '',
        'copyright_text' => '© ' . date('Y') . ' VarsaWeb',
    ]);
    return view('services', compact('services', 'pageSetting', 'workProcesses', 'portfolios', 'footerSetting'));
})->name('services');

Route::get('/portfolio/{portfolio}', function (Portfolio $portfolio) {
    $footerSetting = FooterSetting::firstOrCreate(['id' => 1], [
        'tagline'        => '',
        'copyright_text' => '© ' . date('Y') . ' VarsaWeb',
    ]);
    return view('portfolio-detail', compact('portfolio', 'footerSetting'));
})->name('portfolio.show');

Route::get('/contact', function () {
    $contactSetting = ContactSetting::firstOrCreate(['id' => 1], [
        'badge_text'  => '',
        'title'       => 'Get in Touch',
        'description' => '',
        'email'       => '',
        'phone'       => '',
    ]);
    $footerSetting = FooterSetting::firstOrCreate(['id' => 1], [
        'tagline'        => '',
        'copyright_text' => '© ' . date('Y') . ' VarsaWeb',
    ]);
    return view('contact', compact('contactSetting', 'footerSetting'));
})->name('contact');

Route::prefix('admin')->group(function () {
    Route::get('login', [AdminAuthController::class, 'showLogin'])->name('admin.login');
    Route::post('login', [AdminAuthController::class, 'login'])->name('admin.login.submit')->middleware('throttle:5,1');
});

Route::prefix('admin')->middleware(AdminAuthenticate::class)->group(function () {
    Route::post('logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

    Route::get('/', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

    Route::get('home', [HomeSettingController::class, 'edit'])->name('admin.home.edit');
    Route::put('home', [HomeSettingController::class, 'update'])->name('admin.home.update');

    Route::get('about', [AboutSettingController::class, 'edit'])->name('admin.about.edit');
    Route::put('about', [AboutSettingController::class, 'update'])->name('admin.about.update');
    Route::post('about/member', [AboutSettingController::class, 'storeMember'])->name('admin.about.member.store');
    Route::put('about/member/{member}', [AboutSettingController::class, 'updateMember'])->name('admin.about.member.update');
    Route::delete('about/member/{member}', [AboutSettingController::class, 'destroyMember'])->name('admin.about.member.destroy');

    Route::get('services', [ServiceController::class, 'index'])->name('admin.services.index');
    Route::get('services/create', [ServiceController::class, 'create'])->name('admin.services.create');
    Route::post('services', [ServiceController::class, 'store'])->name('admin.services.store');
    Route::get('services/{service}/edit', [ServiceController::class, 'edit'])->name('admin.services.edit');
    Route::put('services/{service}', [ServiceController::class, 'update'])->name('admin.services.update');
    Route::delete('services/{service}', [ServiceController::class, 'destroy'])->name('admin.services.destroy');

    Route::put('services-page-setting', [ServiceController::class, 'updatePageSetting'])->name('admin.services.page-setting.update');

    Route::post('services/process', [ServiceController::class, 'storeProcess'])->name('admin.services.process.store');
    Route::put('services/process/{process}', [ServiceController::class, 'updateProcess'])->name('admin.services.process.update');
    Route::delete('services/process/{process}', [ServiceController::class, 'destroyProcess'])->name('admin.services.process.destroy');

    Route::post('services/portfolio', [ServiceController::class, 'storePortfolio'])->name('admin.services.portfolio.store');
    Route::put('services/portfolio/{portfolio:id}', [ServiceController::class, 'updatePortfolio'])->name('admin.services.portfolio.update');
    Route::delete('services/portfolio/{portfolio:id}', [ServiceController::class, 'destroyPortfolio'])->name('admin.services.portfolio.destroy');

    Route::get('contact', [ContactSettingController::class, 'edit'])->name('admin.contact.edit');
    Route::put('contact', [ContactSettingController::class, 'update'])->name('admin.contact.update');
    Route::post('contact/social', [ContactSettingController::class, 'storeSocialLink'])->name('admin.contact.social.store');
    Route::put('contact/social/{socialLink}', [ContactSettingController::class, 'updateSocialLink'])->name('admin.contact.social.update');
    Route::delete('contact/social/{socialLink}', [ContactSettingController::class, 'destroySocialLink'])->name('admin.contact.social.destroy');

    Route::get('footer', [FooterSettingController::class, 'edit'])->name('admin.footer.edit');
    Route::put('footer', [FooterSettingController::class, 'update'])->name('admin.footer.update');
    Route::post('footer/social', [FooterSettingController::class, 'storeSocialLink'])->name('admin.footer.social.store');
    Route::put('footer/social/{socialLink}', [FooterSettingController::class, 'updateSocialLink'])->name('admin.footer.social.update');
    Route::delete('footer/social/{socialLink}', [FooterSettingController::class, 'destroySocialLink'])->name('admin.footer.social.destroy');
});
