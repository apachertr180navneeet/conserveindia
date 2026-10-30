<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\Initiative;
use App\Models\Service;
use App\Models\Region;
use App\Models\Testimonial;
use App\Models\NewsArticle;

class ConserveCmsSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Admin User
        User::updateOrCreate(
            ['email' => 'admin@conserveindia.org'],
            [
                'name' => 'Conserve Admin',
                'password' => Hash::make('admin123'),
                'email_verified_at' => now(),
            ]
        );

        // 2. Settings
        $settings = [
            'site_title' => 'Conserve India',
            'contact_email' => 'info@conserveindia.org',
            'contact_phone' => '+91 98100 12345',
            'contact_address' => 'Conserve HRP, New Delhi, India',
            'footprint_map_image' => 'assets/images/india-map-footprint.jpg',
            'facebook_url' => 'https://facebook.com',
            'instagram_url' => 'https://instagram.com/conserveindia',
            'linkedin_url' => 'https://linkedin.com',
            'youtube_url' => 'https://youtube.com',
        ];
        foreach ($settings as $key => $val) {
            Setting::set($key, $val);
        }

        // 3. Sliders
        Slider::truncate();
        Slider::create([
            'tag' => 'CIRCULAR ECONOMY IN ACTION',
            'title' => 'Turning Waste Plastic into Dignified Livelihoods',
            'subtitle' => 'Conserve India pioneers patented Handmade Recycled Plastic (HRP), uplifting grassroots waste pickers and transforming consumer waste into high-fashion exports.',
            'button_text' => 'Discover Our Mission',
            'button_link' => 'our-work',
            'secondary_button_text' => 'Explore Upcycled Collections',
            'secondary_button_link' => 'services',
            'image' => 'assets/images/hero-artisan.jpg',
            'order' => 1,
            'is_active' => true,
        ]);
        Slider::create([
            'tag' => 'COMMUNITY-LED RECYCLING',
            'title' => 'Empowering Grassroots Artisans & Refugee Families',
            'subtitle' => 'Over 25 years of fair-wage employment, health coverage, and dignity for informal waste workers across Delhi-NCR and partner clusters.',
            'button_text' => 'Our Community Programs',
            'button_link' => 'capacity-building',
            'secondary_button_text' => 'Meet the Artisans',
            'secondary_button_link' => 'about-us',
            'image' => 'assets/images/artisan-livelihoods.jpg',
            'order' => 2,
            'is_active' => true,
        ]);
        Slider::create([
            'tag' => 'MATERIAL INNOVATION',
            'title' => 'Patented HRP Material Science for Global Brands',
            'subtitle' => 'Supplying ethically engineered recycled plastics to over 1,000 independent retailers and international partners like Whole Foods Market.',
            'button_text' => 'Explore Research & Tech',
            'button_link' => 'sustainable-research-development',
            'secondary_button_text' => 'Partner With Us',
            'secondary_button_link' => 'connect-with-us',
            'image' => 'assets/images/upcycling-innovation.jpg',
            'order' => 3,
            'is_active' => true,
        ]);

        // 4. Initiatives
        Initiative::truncate();
        Initiative::create([
            'title' => 'Patented HRP Material Innovation',
            'meta' => 'New Delhi · Patented HRP',
            'short_description' => 'Converting post-consumer plastic bags and vinyl scrap into durable, leather-like materials without chemical dyes.',
            'image' => 'assets/images/upcycling-innovation.jpg',
            'link' => 'sustainable-research-development',
            'order' => 1,
            'is_active' => true,
        ]);
        Initiative::create([
            'title' => 'Artisan Capacity & Refugee Livelihoods',
            'meta' => 'UNHCR Partner · 25+ Artisans',
            'short_description' => 'Training Delhi\'s informal recyclers and Afghani refugee women in stitching, Fair Trade standards, and micro-enterprises.',
            'image' => 'assets/images/artisan-livelihoods.jpg',
            'link' => 'capacity-building',
            'order' => 2,
            'is_active' => true,
        ]);
        Initiative::create([
            'title' => 'Project Sahyog Community Relief',
            'meta' => 'National Relief · Top 50 India',
            'short_description' => 'Mobilized emergency community kitchens, nutrition, and sanitary kits for vulnerable migrant waste-picking families.',
            'image' => 'assets/images/circular-communities.jpg',
            'link' => 'covid-relief-project-sahyog',
            'order' => 3,
            'is_active' => true,
        ]);
        Initiative::create([
            'title' => 'Sustainable Trade & EPR Advocacy',
            'meta' => 'Global B2B · 1,000+ Retailers',
            'short_description' => 'Advocating Extended Producer Responsibility (EPR) while supplying certified Fair Trade goods to international partners.',
            'image' => 'assets/images/belief-sapling.jpg',
            'link' => 'sustainable-trade',
            'order' => 4,
            'is_active' => true,
        ]);

        // 5. Services
        Service::truncate();
        Service::create([
            'title' => 'Consulting and Advisory',
            'description' => 'Diagnostic waste stream audits, corporate zero-waste roadmaps, and Extended Producer Responsibility (EPR) compliance support.',
            'image' => 'assets/images/plastic-bottles-sorting.jpg',
            'action_text' => 'Learn More &rarr;',
            'link' => 'services#consulting',
            'order' => 1,
            'is_active' => true,
        ]);
        Service::create([
            'title' => 'Events and Outreach',
            'description' => 'Community environmental campaigns, interactive schools upcycling drives, corporate CSR zero-waste days, and seminars.',
            'image' => 'assets/images/story-farming.jpg',
            'action_text' => 'Learn More &rarr;',
            'link' => 'services#events-outreach',
            'order' => 2,
            'is_active' => true,
        ]);
        Service::create([
            'title' => 'Education and Training',
            'description' => 'Youth design incubator, artisan stitching labs, micro-enterprise training for waste collectors, and vocational workshops.',
            'image' => 'assets/images/artisan-livelihoods.jpg',
            'action_text' => 'Learn More &rarr;',
            'link' => 'services#education-training',
            'order' => 3,
            'is_active' => true,
        ]);
        Service::create([
            'title' => 'Stay & Learn: Immersion Tours',
            'description' => 'Hands-on circular design workshops, informal sector waste mapping tours, eco-stay experiences, and live factory ateliers.',
            'image' => 'assets/images/circular-communities.jpg',
            'action_text' => 'Learn More &rarr;',
            'link' => 'services#immersion-tours',
            'order' => 4,
            'is_active' => true,
        ]);

        // 6. Regional Footprint
        Region::truncate();
        Region::create([
            'name' => 'Delhi-NCR',
            'subtitle' => 'Central Innovation Hub',
            'description' => 'Flagship HRP material innovation atelier, Highbrow Crafts initiative, and Afghan refugee women training center (Akseer) in collaboration with UNHCR.',
            'badge' => '3,000+ Waste Collectors',
            'icon' => 'bi-geo-alt-fill',
            'image' => 'assets/images/regions/delhi-ncr.jpg',
            'order' => 1,
            'is_active' => true,
        ]);
        Region::create([
            'name' => 'Ghaziabad & Noida',
            'subtitle' => 'Upcycling & Relief Hub',
            'description' => 'Roosh Upcycle Project, Wastepreneurs training hub, material washing & compression facilities, and emergency kitchens during Project Sahyog.',
            'badge' => 'Wastepreneurs Hub',
            'icon' => 'bi-buildings-fill',
            'image' => 'assets/images/regions/ghaziabad-noida.jpg',
            'order' => 2,
            'is_active' => true,
        ]);
        Region::create([
            'name' => 'Haryana Clusters',
            'subtitle' => 'Faridabad & Gurugram',
            'description' => 'Footprints Project empowering grassroots waste pickers, health checkups, sanitation workshops, and financial literacy training for women recyclers.',
            'badge' => '100+ Women Recyclers',
            'icon' => 'bi-people-fill',
            'image' => 'assets/images/regions/haryana-clusters.jpg',
            'order' => 3,
            'is_active' => true,
        ]);
        Region::create([
            'name' => 'Global Reach',
            'subtitle' => 'USA, UK & Europe',
            'description' => 'Certified Fair Trade upcycled fashion exported to Whole Foods Market nationwide in the USA and over 1,000 independent eco-design retail boutiques.',
            'badge' => '1,000+ Retail Outlets',
            'icon' => 'bi-globe2',
            'image' => 'assets/images/regions/global-reach.jpg',
            'order' => 4,
            'is_active' => true,
        ]);

        // 7. Testimonials
        Testimonial::truncate();
        Testimonial::create([
            'author' => 'Whole Foods Market Buyer',
            'designation' => 'National Eco-Retail Partner, USA',
            'quote' => 'Conserve India proved that waste can be crafted into luxurious, durable products. Their patented HRP line resonated tremendously with our conscious consumers across the US.',
            'logo' => 'assets/images/partners/whole-foods.svg',
            'order' => 1,
            'is_active' => true,
        ]);
        Testimonial::create([
            'author' => 'Environmental Conservation Council',
            'designation' => 'Regional Advisory Member',
            'quote' => 'Their grassroots model directly bridges environmental cleanup with human dignity. The community kitchens and artisan livelihood programs are a national benchmark.',
            'logo' => 'assets/images/partners/eco-council.svg',
            'order' => 2,
            'is_active' => true,
        ]);
        Testimonial::create([
            'author' => 'Community Leadership Alliance',
            'designation' => 'Field Coordinator, NCR',
            'quote' => 'Empowering informal waste collectors into certified artisans has brought lasting economic stability to hundreds of families in our informal settlement networks.',
            'logo' => 'assets/images/partners/community-alliance.svg',
            'order' => 3,
            'is_active' => true,
        ]);

        // 8. News / Updates
        NewsArticle::truncate();
        NewsArticle::create([
            'title' => 'Scaling Plastic Upcycling Across Northern India',
            'slug' => 'scaling-plastic-upcycling-across-northern-india',
            'category' => 'Research & Innovation',
            'summary' => 'How patented thermal compression is preventing hundreds of tons of single-use polybags from entering Delhi landfills each year.',
            'content' => 'Conserve India continues to expand its patented Handmade Recycled Plastic technology to support circular economy goals across Indian municipalities...',
            'image' => 'assets/images/plastic-bottles-sorting2.jpg',
            'published_date' => now()->subDays(5),
            'is_active' => true,
        ]);
        NewsArticle::create([
            'title' => 'UNHCR Collaboration: Empowering Refugee Artisans',
            'slug' => 'unhcr-collaboration-empowering-refugee-artisans',
            'category' => 'Artisan Stories',
            'summary' => 'Through Project Akseer, Afghan refugee women in New Delhi receive vocational tailoring training and earn sustainable, fair wages.',
            'content' => 'In close partnership with UNHCR, Conserve India has established sustainable training workshops that bridge emergency relief and long-term economic independence...',
            'image' => 'assets/images/artisan-livelihoods.jpg',
            'published_date' => now()->subDays(12),
            'is_active' => true,
        ]);
    }
}

