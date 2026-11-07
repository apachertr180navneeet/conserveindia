<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\Initiative;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\NewsArticle;
use App\Models\Inquiry;
use App\Models\PageSeo;

class WebsiteController extends Controller
{
    private function getSettings()
    {
        return Setting::all()->pluck('value', 'key');
    }

    private function getSeo($pageKey, $defaultTitle = null, $defaultDesc = null)
    {
        try {
            $seo = PageSeo::where('page_key', $pageKey)->orWhere('url_path', '/' . ltrim($pageKey, '/'))->first();
            if ($seo) {
                return $seo;
            }
        } catch (\Throwable $e) {}

        return (object)[
            'meta_title' => $defaultTitle ?? 'Conserve India — Circular Economy & Artisan Livelihoods',
            'meta_description' => $defaultDesc ?? 'Conserve India transforms urban plastic waste into patented materials and empowers informal waste pickers and refugee women.',
            'meta_keywords' => '',
            'og_title' => $defaultTitle ?? 'Conserve India',
            'og_description' => $defaultDesc ?? '',
            'og_image' => 'assets/images/conserve-logo.png',
            'robots' => 'index, follow',
            'canonical_url' => url()->current(),
            'schema_markup' => null,
        ];
    }

    public function home()
    {
        $settings = $this->getSettings();
        $seo = $this->getSeo('home');
        $sliders = Slider::where('is_active', true)->orderBy('order')->get();
        $initiatives = Initiative::where('is_active', true)->orderBy('order')->get();
        $services = Service::where('is_active', true)->orderBy('order')->get();
        $testimonials = Testimonial::where('is_active', true)->orderBy('order')->get();
        $newsArticles = NewsArticle::where('is_active', true)->latest()->take(3)->get();

        return view('website.home', compact('settings', 'seo', 'sliders', 'initiatives', 'services', 'testimonials', 'newsArticles'));
    }

    public function about()
    {
        $settings = $this->getSettings();
        $seo = $this->getSeo('about-us', 'About Us — Conserve India | Our Mission, Founders & Heritage');
        $testimonials = Testimonial::where('is_active', true)->orderBy('order')->get();
        $initiatives = Initiative::where('is_active', true)->orderBy('order')->get();
        $recentStories = NewsArticle::where('is_active', true)->latest()->take(3)->get();

        return view('website.about-us', compact('settings', 'seo', 'testimonials', 'initiatives', 'recentStories'));
    }

    public function services()
    {
        $settings = $this->getSettings();
        $seo = $this->getSeo('services');
        $services = Service::where('is_active', true)->orderBy('order')->get();
        return view('website.services', compact('settings', 'seo', 'services'));
    }

    public function ourWork()
    {
        $settings = $this->getSettings();
        $seo = $this->getSeo('our-work');
        $initiatives = Initiative::where('is_active', true)->orderBy('order')->get();
        return view('website.our-work', compact('settings', 'seo', 'initiatives'));
    }

    public function capacityBuilding()
    {
        $settings = $this->getSettings();
        $seo = $this->getSeo('capacity-building');
        $initiatives = Initiative::where('is_active', true)->orderBy('order')->get();
        return view('website.capacity-building', compact('settings', 'seo', 'initiatives'));
    }

    public function sustainableResearch()
    {
        $settings = $this->getSettings();
        $seo = $this->getSeo('sustainable-research-development');
        $initiatives = Initiative::where('is_active', true)->orderBy('order')->get();
        return view('website.sustainable-research-development', compact('settings', 'seo', 'initiatives'));
    }

    public function advocacy()
    {
        $settings = $this->getSettings();
        $seo = $this->getSeo('advocacy-and-lobbying');
        $initiatives = Initiative::where('is_active', true)->orderBy('order')->get();
        return view('website.advocacy-and-lobbying', compact('settings', 'seo', 'initiatives'));
    }

    public function sustainableTrade()
    {
        $settings = $this->getSettings();
        $seo = $this->getSeo('sustainable-trade');
        $initiatives = Initiative::where('is_active', true)->orderBy('order')->get();
        return view('website.sustainable-trade', compact('settings', 'seo', 'initiatives'));
    }

    public function covidRelief()
    {
        $settings = $this->getSettings();
        $seo = $this->getSeo('covid-relief-project-sahyog');
        return view('website.covid-relief-project-sahyog', compact('settings', 'seo'));
    }

    public function latestUpdates()
    {
        $settings = $this->getSettings();
        $seo = $this->getSeo('latest-updates');
        $newsArticles = NewsArticle::where('is_active', true)->latest()->paginate(9);
        return view('website.latest-updates', compact('settings', 'seo', 'newsArticles'));
    }

    public function gallery()
    {
        $settings = $this->getSettings();
        $seo = $this->getSeo('gallery');
        $projects = $this->getGalleryProjects();
        return view('website.gallery', compact('settings', 'seo', 'projects'));
    }

    public function greenStories()
    {
        $settings = $this->getSettings();
        $seo = $this->getSeo('green-stories');
        $newsArticles = NewsArticle::where('is_active', true)->latest()->get();
        return view('website.green-stories', compact('settings', 'seo', 'newsArticles'));
    }

    public function storyDetail($slug)
    {
        $settings = $this->getSettings();
        $article = NewsArticle::where('slug', $slug)->first();

        if (!$article) {
            // Fallback: check by ID or title slug match
            $article = NewsArticle::where('id', $slug)->firstOrFail();
        }

        $seo = (object)[
            'meta_title' => $article->meta_title ?: ($article->title . ' — Conserve India'),
            'meta_description' => $article->meta_description ?: ($article->summary ?: Str::limit(strip_tags($article->content), 150)),
            'meta_keywords' => $article->meta_keywords ?: '',
            'og_title' => $article->title,
            'og_description' => $article->summary ?: Str::limit(strip_tags($article->content), 150),
            'og_image' => $article->image ?: 'assets/images/conserve-logo.png',
            'robots' => 'index, follow',
            'canonical_url' => route('story.detail', $article->slug),
            'schema_markup' => null,
        ];

        $recentArticles = NewsArticle::where('is_active', true)
            ->where('id', '!=', $article->id)
            ->latest()
            ->take(3)
            ->get();

        return view('website.story-detail', compact('settings', 'seo', 'article', 'recentArticles'));
    }

    public function connectWithUs()
    {
        $settings = $this->getSettings();
        $seo = $this->getSeo('connect-with-us');
        return view('website.connect-with-us', compact('settings', 'seo'));
    }

    public function contactUs()
    {
        $settings = $this->getSettings();
        $seo = $this->getSeo('contact-us');
        return view('website.contact-us', compact('settings', 'seo'));
    }

    public function submitInquiry(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'subject' => 'nullable|string|max:255',
            'message' => 'nullable|string',
            'organization' => 'nullable|string|max:255',
            'scope' => 'nullable|string|max:255',
            'volume' => 'nullable|string|max:255',
        ]);

        // Construct message if submitted from partnership or specialized inquiry form
        $finalMessage = $validated['message'] ?? '';
        if (!empty($validated['organization'])) {
            $finalMessage .= "\nOrganization / Brand: " . $validated['organization'];
        }
        if (!empty($validated['scope'])) {
            $finalMessage .= "\nCollaboration Scope: " . $validated['scope'];
        }
        if (!empty($validated['volume'])) {
            $finalMessage .= "\nEstimated Volume / Timeline: " . $validated['volume'];
        }

        if (empty(trim($finalMessage))) {
            $finalMessage = 'General Inquiry submitted via Conserve India portal.';
        }

        Inquiry::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'] ?? null,
            'subject' => $validated['subject'] ?? ($validated['scope'] ?? 'General Inquiry'),
            'message' => trim($finalMessage),
        ]);

        return redirect()->back()->with('inquiry_success', 'Thank you! Your message has been received. Our leadership team will review and get back to you shortly.');
    }

    /**
     * Get dynamic gallery initiatives combined with catalog items.
     */
    private function getGalleryProjects(): array
    {
        $dbInitiatives = Initiative::where('is_active', true)->orderBy('order')->get();

        $defaultProjects = [
            [
                'id' => 'lifaffa',
                'category' => 'products',
                'title' => 'Lifaffa (Crafting Change)',
                'location' => 'New Delhi',
                'tag' => 'Circular Retail & Brand',
                'desc' => 'Conserve\'s dedicated upcycled retail brand creating functional everyday bags, lifestyle goods, and accessories directly from post-consumer waste.',
                'image' => asset('website/assets/images/product-apron.jpg'),
                'stat' => 'Everyday Upcycling',
                'link' => 'https://www.lifaffa.com'
            ],
            [
                'id' => 'highbrow',
                'category' => 'livelihoods',
                'title' => 'Highbrow Crafts Project',
                'location' => 'Delhi',
                'tag' => 'Artisan Innovation',
                'desc' => 'Elevating traditional craft techniques with upcycled plastic sheets, pairing informal craftswomen with professional fashion designers for bespoke collections.',
                'image' => asset('website/assets/images/hero-artisan.jpg'),
                'stat' => 'Master Artisans',
                'link' => null
            ],
            [
                'id' => 'haptic',
                'category' => 'patent',
                'title' => 'Haptic (HRP Project)',
                'location' => 'Delhi-NCR',
                'tag' => 'Patented Material Science',
                'desc' => 'Advanced tactile research turning low-density polyethylene (LDPE) into textured, pliable leather substitutes with zero chemical colorants.',
                'image' => asset('website/assets/images/upcycling-innovation.jpg'),
                'stat' => 'Patented HRP',
                'link' => url('/sustainable-research-development')
            ],
            [
                'id' => 'roosh',
                'category' => 'products',
                'title' => 'Roosh Upcycle Project',
                'location' => 'Noida',
                'tag' => 'Design Atelier',
                'desc' => 'Specialized upcycling unit focused on recovering industrial vinyl, banners, and billboard flex into ultra-durable messenger bags and totes.',
                'image' => asset('website/assets/images/plastic-bottles-sorting.jpg'),
                'stat' => 'Industrial Vinyl Scrap',
                'link' => null
            ],
            [
                'id' => 'akseer',
                'category' => 'livelihoods',
                'title' => 'Akseer Refugee Empowerment',
                'location' => 'New Delhi (UNHCR)',
                'tag' => 'Humanitarian Livelihoods',
                'desc' => 'In partnership with UNHCR, training Afghan refugee women in master stitching, financial independence, and psycho-social integration in Delhi.',
                'image' => asset('website/assets/images/artisan-livelihoods.jpg'),
                'stat' => 'Refugee Women Artisans',
                'link' => url('/capacity-building#refugees')
            ],
            [
                'id' => 'footprints',
                'category' => 'livelihoods',
                'title' => 'Footprints Project',
                'location' => 'Delhi - Haryana',
                'tag' => 'Ragpicker Training',
                'desc' => 'Comprehensive vocational training and social safety net program equipping marginalized ragpickers with certified craft and machine skills.',
                'image' => asset('website/assets/images/belief-sapling.jpg'),
                'stat' => 'Informal Recyclers',
                'link' => url('/capacity-building#recyclers')
            ],
            [
                'id' => 'wastepreneurs',
                'category' => 'livelihoods',
                'title' => 'Wastepreneurs Hub',
                'location' => 'Delhi - Ghaziabad',
                'tag' => 'Micro-Enterprise Incubation',
                'desc' => 'Incubating waste collectors into independent micro-entrepreneurs who run their own waste collection points and sorting micro-depots.',
                'image' => asset('website/assets/images/circular-communities.jpg'),
                'stat' => 'Decentralized Hubs',
                'link' => null
            ],
            [
                'id' => 'zero-waste',
                'category' => 'community',
                'title' => 'Zero Waste Communities',
                'location' => 'Northern India',
                'tag' => 'Grassroots Segregation',
                'desc' => 'Citizen-led neighborhood waste segregation networks diverting organic waste for composting and channeling dry plastic directly into upcycling.',
                'image' => asset('website/assets/images/plastic-bottles-pile.jpg'),
                'stat' => 'Zero Landfill Model',
                'link' => url('/our-work#zero-waste')
            ],
            [
                'id' => 'press-thehindu',
                'category' => 'community',
                'title' => '"Ragpickers Turn Fashion Designers"',
                'location' => 'The Hindu / National Press',
                'tag' => 'Press & Documentaries',
                'desc' => 'National spotlight on Conserve India\'s groundbreaking social business model transitioning informal scavengers into recognized artisans.',
                'image' => asset('website/assets/images/story-farming.jpg'),
                'stat' => 'Featured Media',
                'link' => 'https://conserveindia.org'
            ],
            [
                'id' => 'ddu-gky',
                'category' => 'youth',
                'title' => 'DDU-GKY Skill Development Hub',
                'location' => 'Govt. of India Collaboration',
                'tag' => 'National Youth Incubation',
                'desc' => 'Accredited national skilling scheme delivering certified training in pattern making, master cutting, and leather-substitute sewing.',
                'image' => asset('website/assets/images/upcycling-innovation.jpg'),
                'stat' => 'Govt. Accredited',
                'link' => null
            ],
            [
                'id' => 'project-sahyog',
                'category' => 'community',
                'title' => 'Project Sahyog (Emergency Relief)',
                'location' => 'Delhi-NCR Slum Clusters',
                'tag' => 'Humanitarian Relief',
                'desc' => 'COVID-19 relief effort delivering daily emergency food ration kits and medical safety materials to vulnerable waste-picking households.',
                'image' => asset('website/assets/images/circular-communities.jpg'),
                'stat' => 'Top 50 National Relief',
                'link' => url('/covid-relief-project-sahyog')
            ],
            [
                'id' => 'fair-trade-forum',
                'category' => 'community',
                'title' => 'Fair Trade India Alliance',
                'location' => 'FTF-I / WFTO Member',
                'tag' => 'Ethical Standards',
                'desc' => 'Upholding strict living wage guarantees, gender parity, and environmental stewardship across all manufacturing nodes.',
                'image' => asset('website/assets/images/hero-artisan.jpg'),
                'stat' => 'WFTO Certified',
                'link' => url('/sustainable-trade')
            ],
            [
                'id' => 'lifaffa-bags',
                'category' => 'products',
                'title' => 'Upcycled Messenger & Travel Totes',
                'location' => 'Global Retail Export',
                'tag' => 'Sustainable Fashion',
                'desc' => 'High-tensile, waterproof lifestyle folios engineered from washed post-consumer packaging, sold in over 1,000 boutiques worldwide.',
                'image' => asset('website/assets/images/plastic-bottles-sorting2.jpg'),
                'stat' => '1,000+ Stockists',
                'link' => 'https://www.lifaffa.com'
            ],
        ];

        // If CMS initiatives exist, merge them at the top
        if ($dbInitiatives->isNotEmpty()) {
            $cmsProjects = [];
            foreach ($dbInitiatives as $init) {
                $category = strtolower($init->category ?: 'community');
                if (str_contains($category, 'livelihood') || str_contains($category, 'artisan')) {
                    $categoryKey = 'livelihoods';
                } elseif (str_contains($category, 'patent') || str_contains($category, 'research') || str_contains($category, 'hrp')) {
                    $categoryKey = 'patent';
                } elseif (str_contains($category, 'product') || str_contains($category, 'retail')) {
                    $categoryKey = 'products';
                } elseif (str_contains($category, 'youth') || str_contains($category, 'training')) {
                    $categoryKey = 'youth';
                } else {
                    $categoryKey = 'community';
                }

                $cmsProjects[] = [
                    'id' => 'init-' . $init->id,
                    'category' => $categoryKey,
                    'title' => $init->title,
                    'location' => $init->meta ?: 'Conserve Atelier',
                    'tag' => $init->category ?: 'Flagship Initiative',
                    'desc' => $init->short_description ?: Str::limit(strip_tags($init->content), 140),
                    'image' => $init->image ? (str_starts_with($init->image, 'http') ? $init->image : asset('website/' . $init->image)) : asset('website/assets/images/upcycling-innovation.jpg'),
                    'stat' => 'Active Initiative',
                    'link' => $init->link ? (str_starts_with($init->link, 'http') ? $init->link : url($init->link)) : null,
                ];
            }

            // Return CMS projects with defaults
            return array_merge($cmsProjects, $defaultProjects);
        }

        return $defaultProjects;
    }
}
