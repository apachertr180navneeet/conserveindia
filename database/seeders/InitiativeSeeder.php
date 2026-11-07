<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Initiative;

class InitiativeSeeder extends Seeder
{
    /**
     * Run the database seeds for all 17 initiatives.
     */
    public function run(): void
    {
        $initiatives = [
            [
                'title' => 'Patented HRP Material Innovation',
                'category' => 'patent',
                'meta' => 'New Delhi · Patented HRP',
                'short_description' => 'Converting post-consumer plastic bags and vinyl scrap into durable, leather-like materials without chemical dyes.',
                'image' => 'assets/images/upcycling-innovation.jpg',
                'link' => 'sustainable-research-development',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'Artisan Capacity & Refugee Livelihoods',
                'category' => 'livelihoods',
                'meta' => 'UNHCR Partner · 25+ Artisans',
                'short_description' => 'Training Delhi\'s informal recyclers and Afghani refugee women in stitching, Fair Trade standards, and micro-enterprises.',
                'image' => 'assets/images/artisan-livelihoods.jpg',
                'link' => 'capacity-building',
                'order' => 2,
                'is_active' => true,
            ],
            [
                'title' => 'Project Sahyog Community Relief',
                'category' => 'community',
                'meta' => 'National Relief · Top 50 India',
                'short_description' => 'Mobilized emergency community kitchens, nutrition, and sanitary kits for vulnerable migrant waste-picking families.',
                'image' => 'assets/images/circular-communities.jpg',
                'link' => 'covid-relief-project-sahyog',
                'order' => 3,
                'is_active' => true,
            ],
            [
                'title' => 'Sustainable Trade & EPR Advocacy',
                'category' => 'community',
                'meta' => 'Global B2B · 1,000+ Retailers',
                'short_description' => 'Advocating Extended Producer Responsibility (EPR) while supplying certified Fair Trade goods to international partners.',
                'image' => 'assets/images/belief-sapling.jpg',
                'link' => 'sustainable-trade',
                'order' => 4,
                'is_active' => true,
            ],
            [
                'title' => 'Lifaffa (Crafting Change)',
                'category' => 'products',
                'meta' => 'New Delhi',
                'short_description' => 'Conserve\'s dedicated upcycled retail brand creating functional everyday bags, lifestyle goods, and accessories directly from post-consumer waste.',
                'image' => 'assets/images/product-apron.jpg',
                'link' => 'https://www.lifaffa.com',
                'order' => 5,
                'is_active' => true,
            ],
            [
                'title' => 'Highbrow Crafts Project',
                'category' => 'livelihoods',
                'meta' => 'Delhi',
                'short_description' => 'Elevating traditional craft techniques with upcycled plastic sheets, pairing informal craftswomen with professional fashion designers for bespoke collections.',
                'image' => 'assets/images/hero-artisan.jpg',
                'link' => 'about-us',
                'order' => 6,
                'is_active' => true,
            ],
            [
                'title' => 'Haptic (HRP Project)',
                'category' => 'patent',
                'meta' => 'Delhi-NCR',
                'short_description' => 'Advanced tactile research turning low-density polyethylene (LDPE) into textured, pliable leather substitutes with zero chemical colorants.',
                'image' => 'assets/images/upcycling-innovation.jpg',
                'link' => 'sustainable-research-development',
                'order' => 7,
                'is_active' => true,
            ],
            [
                'title' => 'Roosh Upcycle Project',
                'category' => 'products',
                'meta' => 'Noida',
                'short_description' => 'Specialized upcycling unit focused on recovering industrial vinyl, banners, and billboard flex into ultra-durable messenger bags and totes.',
                'image' => 'assets/images/plastic-bottles-sorting.jpg',
                'link' => 'services',
                'order' => 8,
                'is_active' => true,
            ],
            [
                'title' => 'Akseer Refugee Empowerment',
                'category' => 'livelihoods',
                'meta' => 'New Delhi (UNHCR)',
                'short_description' => 'In partnership with UNHCR, training Afghan refugee women in master stitching, financial independence, and psycho-social integration in Delhi.',
                'image' => 'assets/images/artisan-livelihoods.jpg',
                'link' => 'capacity-building',
                'order' => 9,
                'is_active' => true,
            ],
            [
                'title' => 'Footprints Project',
                'category' => 'livelihoods',
                'meta' => 'Delhi - Haryana',
                'short_description' => 'Comprehensive vocational training and social safety net program equipping marginalized ragpickers with certified craft and machine skills.',
                'image' => 'assets/images/belief-sapling.jpg',
                'link' => 'capacity-building',
                'order' => 10,
                'is_active' => true,
            ],
            [
                'title' => 'Wastepreneurs Hub',
                'category' => 'livelihoods',
                'meta' => 'Delhi - Ghaziabad',
                'short_description' => 'Incubating waste collectors into independent micro-entrepreneurs who run their own waste collection points and sorting micro-depots.',
                'image' => 'assets/images/circular-communities.jpg',
                'link' => 'our-work',
                'order' => 11,
                'is_active' => true,
            ],
            [
                'title' => 'Zero Waste Communities',
                'category' => 'community',
                'meta' => 'Northern India',
                'short_description' => 'Citizen-led neighborhood waste segregation networks diverting organic waste for composting and channeling dry plastic directly into upcycling.',
                'image' => 'assets/images/plastic-bottles-pile.jpg',
                'link' => 'our-work',
                'order' => 12,
                'is_active' => true,
            ],
            [
                'title' => 'Press Spotlight: Ragpickers Turn Fashion Designers',
                'category' => 'community',
                'meta' => 'The Hindu / National Press',
                'short_description' => 'National spotlight on Conserve India\'s groundbreaking social business model transitioning informal scavengers into recognized artisans.',
                'image' => 'assets/images/story-farming.jpg',
                'link' => 'green-stories',
                'order' => 13,
                'is_active' => true,
            ],
            [
                'title' => 'DDU-GKY Skill Development Hub',
                'category' => 'youth',
                'meta' => 'Govt. of India Collaboration',
                'short_description' => 'Accredited national skilling scheme delivering certified training in pattern making, master cutting, and leather-substitute sewing.',
                'image' => 'assets/images/upcycling-innovation.jpg',
                'link' => 'capacity-building',
                'order' => 14,
                'is_active' => true,
            ],
            [
                'title' => 'Fair Trade India Alliance',
                'category' => 'community',
                'meta' => 'FTF-I / WFTO Member',
                'short_description' => 'Upholding strict living wage guarantees, gender parity, and environmental stewardship across all manufacturing nodes.',
                'image' => 'assets/images/hero-artisan.jpg',
                'link' => 'sustainable-trade',
                'order' => 15,
                'is_active' => true,
            ],
            [
                'title' => 'Lifaffa Upcycled Messenger & Travel Totes',
                'category' => 'products',
                'meta' => 'Global Retail Export',
                'short_description' => 'High-tensile, waterproof lifestyle folios engineered from washed post-consumer packaging, sold in over 1,000 boutiques worldwide.',
                'image' => 'assets/images/plastic-bottles-sorting2.jpg',
                'link' => 'https://www.lifaffa.com',
                'order' => 16,
                'is_active' => true,
            ],
            [
                'title' => 'Decentralized Waste Recovery Hubs',
                'category' => 'community',
                'meta' => 'Delhi-NCR Urban Clusters',
                'short_description' => 'Decentralized recovery points equipping informal waste workers with clean sorting spaces, safety equipment, and dignified fair pricing.',
                'image' => 'assets/images/plastic-bottles-sorting.jpg',
                'link' => 'our-work',
                'order' => 17,
                'is_active' => true,
            ],
        ];

        foreach ($initiatives as $item) {
            Initiative::updateOrCreate(
                ['title' => $item['title']],
                $item
            );
        }
    }
}

