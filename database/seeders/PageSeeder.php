<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Page;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pages = [
            [
                'page_key' => 'home',
                'page_name' => 'Homepage',
                'slug' => '/',
                'subtitle' => 'CIRCULAR ECONOMY IN ACTION',
                'title' => 'Turning Waste Plastic into Dignified Livelihoods',
                'lead_text' => 'Conserve India pioneers patented Handmade Recycled Plastic (HRP), uplifting grassroots waste pickers and transforming consumer waste into high-fashion exports.',
                'banner_image' => 'assets/images/hero-artisan.jpg',
            ],
            [
                'page_key' => 'about-us',
                'page_name' => 'About Us',
                'slug' => 'about-us',
                'subtitle' => 'ORGANIZATIONAL HERITAGE',
                'title' => 'Pioneering Circularity Since 1997',
                'lead_text' => 'Conserve India operates at the intersection of environmental conservation and social justice—diverting urban plastic waste while empowering marginalized waste pickers and refugee women with dignified, employable opportunities.',
                'banner_image' => 'assets/images/hero-artisan.jpg',
            ],
            [
                'page_key' => 'our-work',
                'page_name' => 'Our Work',
                'slug' => 'our-work',
                'subtitle' => 'INITIATIVES & INTERVENTIONS',
                'title' => 'Pioneering Circular Ecology & Social Justice',
                'lead_text' => 'From patented plastic recycling technologies to empowering thousands of informal waste pickers and UNHCR refugee women, explore how we connect waste abatement with human dignity.',
                'banner_image' => 'assets/images/upcycling-innovation.jpg',
            ],
            [
                'page_key' => 'services',
                'page_name' => 'Our Services',
                'slug' => 'services',
                'subtitle' => 'CIRCULAR CAPABILITIES',
                'title' => 'Services & Advisory Solutions',
                'lead_text' => 'Partnering with corporations, academic institutions, municipal bodies, and eco-conscious travelers to deliver circular innovation, vocational education, and high-impact immersion experiences.',
                'banner_image' => 'assets/images/plastic-bottles-sorting.jpg',
            ],
            [
                'page_key' => 'capacity-building',
                'page_name' => 'Capacity Building',
                'slug' => 'capacity-building',
                'subtitle' => 'LIVELIHOOD RESTORATION',
                'title' => 'Empowering Grassroots Recyclers & Refugee Artisans',
                'lead_text' => 'Transitioning informal ragpickers and UNHCR Afghan refugees into skilled craftspeople through certified vocational training, fair living wages, and health support.',
                'banner_image' => 'assets/images/artisan-livelihoods.jpg',
            ],
            [
                'page_key' => 'sustainable-research-development',
                'page_name' => 'Research & Development (HRP)',
                'slug' => 'sustainable-research-development',
                'subtitle' => 'MATERIAL SCIENCE INNOVATION',
                'title' => 'Patented Handmade Recycled Plastic (HRP)',
                'lead_text' => 'Our proprietary thermal-compression technology turns post-consumer plastic bags into chemical-free, leather-like sustainable textiles.',
                'banner_image' => 'assets/images/upcycling-innovation.jpg',
            ],
            [
                'page_key' => 'advocacy-and-lobbying',
                'page_name' => 'Events & Policy Advocacy',
                'slug' => 'advocacy-and-lobbying',
                'subtitle' => 'POLICY ADVOCACY & OUTREACH',
                'title' => 'Advocating Systems-Level Environmental Reform',
                'lead_text' => 'Championing informal sector integration into municipal frameworks and corporate Extended Producer Responsibility (EPR) mandates.',
                'banner_image' => 'assets/images/belief-sapling.jpg',
            ],
            [
                'page_key' => 'sustainable-trade',
                'page_name' => 'Sustainable Trade & B2B',
                'slug' => 'sustainable-trade',
                'subtitle' => 'FAIR TRADE EXPORTS',
                'title' => 'Global Fair Trade & Ethical B2B Supply Chains',
                'lead_text' => 'Supplying certified eco-design products to Whole Foods Market nationwide and over 1,000 independent retailers across the US, UK, and Europe.',
                'banner_image' => 'assets/images/product-apron.jpg',
            ],
            [
                'page_key' => 'covid-relief-project-sahyog',
                'page_name' => 'Covid Relief (Project Sahyog)',
                'slug' => 'covid-relief-project-sahyog',
                'subtitle' => 'CRISIS RESPONSE',
                'title' => 'Project Sahyog: Emergency Community Relief',
                'lead_text' => 'Ranked in India\'s top 50 COVID-19 last-mile emergency responders, providing community kitchens, dry rations, and health support to waste-picking colonies.',
                'banner_image' => 'assets/images/circular-communities.jpg',
            ],
            [
                'page_key' => 'latest-updates',
                'page_name' => 'Latest Updates',
                'slug' => 'latest-updates',
                'subtitle' => 'NEWSROOM & ARCHIVE',
                'title' => 'Awards, Stories & Publications',
                'lead_text' => 'Track our latest institutional milestones, field dispatches from artisan ateliers, and research publications shaping circular economy policies across India.',
                'banner_image' => 'assets/images/story-farming.jpg',
            ],
            [
                'page_key' => 'gallery',
                'page_name' => 'Visual Gallery',
                'slug' => 'gallery',
                'subtitle' => 'PROJECT REPOSITORY',
                'title' => 'Gallery of Milestones & Grassroots Action',
                'lead_text' => 'A visual showcase of the foundational initiatives shaping our journey—from patented material discoveries to cooperative waste collectors associations and refugee ateliers.',
                'banner_image' => 'assets/images/product-apron.jpg',
            ],
            [
                'page_key' => 'green-stories',
                'page_name' => 'Green Stories',
                'slug' => 'green-stories',
                'subtitle' => 'DISPATCHES & ESSAYS',
                'title' => 'Green Stories & Field Dispatches',
                'lead_text' => 'In-depth essays, artisan profiles, and circular design methodologies written from our New Delhi ateliers and grassroots communities.',
                'banner_image' => 'assets/images/story-textile.jpg',
            ],
            [
                'page_key' => 'connect-with-us',
                'page_name' => 'Connect With Us',
                'slug' => 'connect-with-us',
                'subtitle' => 'COLLABORATION & SOLIDARITY',
                'title' => 'Connect, Partner & Support',
                'lead_text' => 'Whether you want to partner on circular supply chains, volunteer your creative talents, make a tax-deductible contribution, or visit our Delhi atelier, there is a place for you in our movement.',
                'banner_image' => 'assets/images/story-farming.jpg',
            ],
            [
                'page_key' => 'contact-us',
                'page_name' => 'Contact Us',
                'slug' => 'contact-us',
                'subtitle' => 'GET IN TOUCH',
                'title' => 'Contact Conserve India',
                'lead_text' => 'Inquire about corporate partnerships, wholesale orders, research collaborations, workshop visits, or media interviews.',
                'banner_image' => 'assets/images/hero-artisan.jpg',
            ],
        ];

        foreach ($pages as $data) {
            Page::updateOrCreate(
                ['page_key' => $data['page_key']],
                $data
            );
        }
    }
}

