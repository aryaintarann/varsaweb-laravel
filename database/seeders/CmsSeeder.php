<?php

namespace Database\Seeders;

use App\Models\AboutSetting;
use App\Models\AdminUser;
use App\Models\ContactSetting;
use App\Models\FooterSetting;
use App\Models\HomeSetting;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\ServicePageSetting;
use App\Models\TeamMember;
use App\Models\WorkProcess;
use Illuminate\Database\Seeder;

class CmsSeeder extends Seeder
{
    public function run(): void
    {
        AdminUser::firstOrCreate(
            ['email' => 'admin@varsaweb.com'],
            [
                'name' => 'Admin',
                'password' => 'password',
            ]
        );

        HomeSetting::firstOrCreate(['id' => 1], [
            'hero_title' => 'Weaving the Web of Tomorrow',
            'hero_description' => 'We craft high-performance, visually stunning digital experiences that elevate brands and drive measurable growth in a connected world.',
            'hero_image_url' => 'https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
        ]);

        AboutSetting::firstOrCreate(['id' => 1], [
            'title' => 'About Us',
            'description' => '<p>Selamat datang di VarsaWeb. Sejak berdiri, kami berkomitmen membantu bisnis memiliki website modern yang cepat, mudah diakses, dan siap digunakan sebagai fondasi pertumbuhan digital.</p><p>Di VarsaWeb, kami menggabungkan strategi, desain, dan teknologi dalam satu proses kerja yang terarah. Didukung tim berpengalaman, kami memastikan setiap proyek dikerjakan dengan standar kualitas profesional.</p>',
            'image_path' => 'logo.webp',
        ]);

        $members = [
            ['name' => 'Adit', 'position' => 'Project Lead', 'sort_order' => 1],
            ['name' => 'Nisa', 'position' => 'UI/UX Designer', 'sort_order' => 2],
            ['name' => 'Rafi', 'position' => 'Frontend Engineer', 'sort_order' => 3],
            ['name' => 'Dewi', 'position' => 'Backend Engineer', 'sort_order' => 4],
        ];
        foreach ($members as $member) {
            TeamMember::firstOrCreate(
                ['name' => $member['name']],
                $member
            );
        }

        $socialLinks = [
            ['platform' => 'Instagram', 'url' => 'https://instagram.com', 'sort_order' => 1],
            ['platform' => 'LinkedIn', 'url' => 'https://linkedin.com', 'sort_order' => 2],
            ['platform' => 'Twitter', 'url' => 'https://twitter.com', 'sort_order' => 3],
        ];
        foreach ($socialLinks as $link) {
            \App\Models\SocialLink::firstOrCreate(
                ['platform' => $link['platform']],
                $link
            );
        }

        $services = [
            ['title' => 'Web Development', 'description' => 'Pembuatan website company profile, landing page, dan portal bisnis yang cepat, aman, dan responsif.', 'sort_order' => 1],
            ['title' => 'UI/UX Design', 'description' => 'Desain antarmuka modern dengan alur pengguna yang jelas untuk meningkatkan engagement dan conversion.', 'sort_order' => 2],
            ['title' => 'Performance Optimization', 'description' => 'Optimasi loading, struktur teknis SEO, dan quality tuning agar website tetap cepat di semua perangkat.', 'sort_order' => 3],
            ['title' => 'Maintenance & Support', 'description' => 'Monitoring, perawatan, dan pengembangan lanjutan setelah launch agar website tetap relevan dan stabil.', 'sort_order' => 4],
        ];
        foreach ($services as $service) {
            Service::firstOrCreate(
                ['title' => $service['title']],
                $service
            );
        }

        ContactSetting::firstOrCreate(['id' => 1], [
            'badge_text' => "Let's Collaborate",
            'title' => 'Get in Touch',
            'description' => 'Ceritakan kebutuhan website Anda, dan tim kami akan membantu menyiapkan strategi, desain, serta implementasi terbaik untuk bisnis Anda.',
            'email' => 'hello@varsaweb.com',
            'phone' => '+1 (555) 123-4567',
            'operating_hours' => 'Senin - Jumat 09.00 - 18.00 · Sabtu 09.00 - 13.00',
            'badge_1' => 'Response Cepat',
            'badge_2' => 'Konsultasi Gratis',
            'badge_3' => 'Tim Remote',
        ]);

        FooterSetting::firstOrCreate(['id' => 1], [
            'tagline' => 'Weaving the web of tomorrow through innovative design and cutting-edge technology.',
            'address' => '123 Tech Lane, Innovation City, CA',
            'email' => 'hello@varsaweb.com',
            'phone' => '+1 (555) 123-4567',
            'twitter_url' => '#',
            'linkedin_url' => '#',
            'instagram_url' => '#',
            'copyright_text' => '© 2026 VarsaWeb Agency. All rights reserved.',
        ]);

        ServicePageSetting::firstOrCreate(['id' => 1], [
            'badge_text' => 'Digital Service Studio',
            'title' => 'Our Services',
            'description' => 'Kami merancang website yang tidak hanya indah, tetapi juga terukur hasilnya. Dari strategi hingga implementasi, semua layanan kami dibangun untuk mendorong pertumbuhan bisnis Anda.',
            'tag_1' => 'Fast Delivery',
            'tag_2' => 'Scalable System',
            'tag_3' => 'Conversion Focused',
            'stat_1_label' => 'Projects',
            'stat_1_value' => '120+',
            'stat_2_label' => 'Avg Launch',
            'stat_2_value' => '21 Hari',
            'approach_text' => 'Strategy-first process: riset kebutuhan, desain terarah, development cepat, dan optimasi performa berkelanjutan.',
        ]);

        $processes = [
            ['step_label' => 'Step 1', 'title' => 'Discovery', 'sort_order' => 1],
            ['step_label' => 'Step 2', 'title' => 'Design Sprint', 'sort_order' => 2],
            ['step_label' => 'Step 3', 'title' => 'Build & Integrate', 'sort_order' => 3],
            ['step_label' => 'Step 4', 'title' => 'Launch & Scale', 'sort_order' => 4],
        ];
        foreach ($processes as $process) {
            WorkProcess::firstOrCreate(
                ['step_label' => $process['step_label']],
                $process
            );
        }

        $portfolios = [
            ['title' => 'Corporate Website', 'slug' => 'corporate-website', 'short_description' => 'Website profil perusahaan dengan fokus branding dan performa.', 'description' => 'Proyek website company profile untuk perusahaan multinasional dengan fokus pada brand identity yang kuat dan performa loading yang optimal. Menggunakan teknologi modern untuk memastikan pengalaman pengguna yang responsif di semua perangkat.', 'sort_order' => 1],
            ['title' => 'Product Landing Page', 'slug' => 'product-landing-page', 'short_description' => 'Landing page kampanye produk dengan struktur konversi yang kuat.', 'description' => 'Landing page kampanye produk dengan struktur konversi yang dioptimasi. Dilengkapi dengan A/B testing, analytics tracking, dan desain yang dirancang khusus untuk meningkatkan conversion rate secara signifikan.', 'sort_order' => 2],
            ['title' => 'Business Portal', 'slug' => 'business-portal', 'short_description' => 'Portal internal bisnis dengan dashboard informatif dan user-friendly.', 'description' => 'Portal internal bisnis dengan dashboard informatif yang memudahkan tim dalam mengelola data dan workflow harian. Fitur termasuk role management, reporting real-time, dan integrasi dengan berbagai sistem yang sudah ada.', 'sort_order' => 3],
        ];
        foreach ($portfolios as $portfolio) {
            Portfolio::firstOrCreate(
                ['title' => $portfolio['title']],
                $portfolio
            );
        }
    }
}
