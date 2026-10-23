<?php
$page_title = "Gallery — Conserve India | 13 Milestone Circular Projects & Artisans";
$page_description = "Explore Conserve India's photo and project gallery: 13 groundbreaking initiatives from patented HRP technology to ragpicker associations and refugee empowerment.";
$current_page = "gallery";
require_once __DIR__ . '/includes/header.php';

// Array of 13 projects defined on the Miro Whiteboard
$projects = [
    [
        'id' => 'lifaffa',
        'category' => 'products',
        'title' => 'Lifaffa (Crafting Change)',
        'location' => 'New Delhi',
        'tag' => 'Circular Retail & Brand',
        'desc' => 'Conserve\'s dedicated upcycled retail brand creating functional everyday bags, lifestyle goods, and accessories directly from post-consumer waste.',
        'image' => 'assets/images/product-apron.jpg',
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
        'image' => 'assets/images/hero-artisan.jpg',
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
        'image' => 'assets/images/upcycling-innovation.jpg',
        'stat' => 'Patented HRP',
        'link' => 'sustainable-research-development.php'
    ],
    [
        'id' => 'roosh',
        'category' => 'products',
        'title' => 'Roosh Upcycle Project',
        'location' => 'Noida',
        'tag' => 'Design Atelier',
        'desc' => 'Specialized upcycling unit focused on recovering industrial vinyl, banners, and billboard flex into ultra-durable messenger bags and totes.',
        'image' => 'assets/images/plastic-bottles-sorting.jpg',
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
        'image' => 'assets/images/artisan-livelihoods.jpg',
        'stat' => 'Refugee Women Artisans',
        'link' => 'capacity-building.php#refugees'
    ],
    [
        'id' => 'footprints',
        'category' => 'livelihoods',
        'title' => 'Footprints Project',
        'location' => 'Delhi - Haryana',
        'tag' => 'Ragpicker Training',
        'desc' => 'Comprehensive vocational training and social safety net program equipping marginalized ragpickers with certified craft and machine skills.',
        'image' => 'assets/images/belief-sapling.jpg',
        'stat' => 'Informal Recyclers',
        'link' => 'capacity-building.php#recyclers'
    ],
    [
        'id' => 'wastepreneurs',
        'category' => 'livelihoods',
        'title' => 'Wastepreneurs Hub',
        'location' => 'Delhi - Ghaziabad',
        'tag' => 'Micro-Enterprise Incubation',
        'desc' => 'Incubating waste collectors into independent micro-entrepreneurs who run their own waste collection points and sorting micro-depots.',
        'image' => 'assets/images/circular-communities.jpg',
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
        'image' => 'assets/images/plastic-bottles-pile.jpg',
        'stat' => 'Zero Landfill Model',
        'link' => 'our-work.php#zero-waste'
    ],
    [
        'id' => 'press-thehindu',
        'category' => 'community',
        'title' => '"Ragpickers Turn Fashion Designers"',
        'location' => 'National Media Feature',
        'tag' => 'The Hindu Spotlight',
        'desc' => 'Featured internationally: how Conserve transforms Delhi\'s ragpickers into celebrated fashion designers creating products sold in Paris and New York.',
        'image' => 'assets/images/story-textile.jpg',
        'stat' => 'The Hindu Feature',
        'link' => 'https://www.thehindu.com/features/metroplus/ragpickers-turn-fashion-designers/article6810237.ece'
    ],
    [
        'id' => 'association',
        'category' => 'community',
        'title' => 'Delhi/Haryana Waste Collectors Association',
        'location' => 'Delhi &amp; Haryana',
        'tag' => 'Worker Union &amp; Formalization',
        'desc' => 'Officially registered by Conserve India, providing collective bargaining, ID cards, legal representation, and dignity to over 3,000 member ragpickers.',
        'image' => 'assets/images/plastic-bottles-sorting2.jpg',
        'stat' => '3,000 Registered Members',
        'link' => 'advocacy-and-lobbying.php'
    ],
    [
        'id' => 'women-training',
        'category' => 'livelihoods',
        'title' => '100 Waste Collecting Women Hygiene &amp; Literacy',
        'location' => 'Haryana &amp; Delhi Clusters',
        'tag' => 'Health &amp; Banking Literacy',
        'desc' => 'Targeted health checkup camps, sanitary education, and formal banking/UPI enrollment for 100+ frontline women waste sorters.',
        'image' => 'assets/images/story-farming.jpg',
        'stat' => '100+ Women Enrolled',
        'link' => null
    ],
    [
        'id' => 'patent-2008',
        'category' => 'patent',
        'title' => 'Patented Plastic Recycling Technology',
        'location' => 'WIPO / Govt. of India (2008)',
        'tag' => 'Invention &amp; IP',
        'desc' => 'Pioneering patent for mechanical thermocompression of waste plastic film without chemical dyes, recognizing Conserve as an eco-tech innovator.',
        'image' => 'assets/images/upcycling-innovation.jpg',
        'stat' => 'Patent Granted 2008',
        'link' => 'sustainable-research-development.php'
    ],
    [
        'id' => 'incubator-ddugky',
        'category' => 'youth',
        'title' => 'Design-Led Upcycling Incubator (DDU-GKY)',
        'location' => 'New Delhi (2017–2024)',
        'tag' => 'Youth Skill Mission',
        'desc' => 'Multi-year incubation curriculum under Deen Dayal Upadhyaya Grameen Kaushalya Yojana training underprivileged rural and urban youth in circular crafts.',
        'image' => 'assets/images/artisan-livelihoods.jpg',
        'stat' => '2017 &ndash; 2024 Cohorts',
        'link' => 'services.php#education-training'
    ]
];
?>

  <!-- Page Header -->
  <header class="ed-page-header">
    <div class="container px-lg-4">
      <nav class="ed-breadcrumbs" aria-label="Breadcrumb">
        <a href="index.php">Home</a> <span>/</span> Gallery
      </nav>
      <span class="ed-section-tag">PROJECT REPOSITORY</span>
      <h1 class="ed-page-title">Gallery of Milestones &amp; Grassroots Action</h1>
      <p class="ed-page-lead">
        A visual showcase of the 13 foundational initiatives shaping our journey—from patented material discoveries to cooperative waste collectors associations and refugee ateliers.
      </p>
    </div>
  </header>

  <!-- Gallery Filter & Grid Section -->
  <section class="ed-content-section" style="background: #fff;">
    <div class="container px-lg-4">
      
      <!-- Filter Bar -->
      <div class="d-flex flex-wrap justify-content-center gap-2 mb-5" id="galleryFilters">
        <button type="button" class="btn btn-sm btn-outline-success active px-3 py-2 filter-btn" data-filter="all">All Initiatives (13)</button>
        <button type="button" class="btn btn-sm btn-outline-success px-3 py-2 filter-btn" data-filter="livelihoods">Livelihoods &amp; Artisans</button>
        <button type="button" class="btn btn-sm btn-outline-success px-3 py-2 filter-btn" data-filter="patent">Patents &amp; Material R&amp;D</button>
        <button type="button" class="btn btn-sm btn-outline-success px-3 py-2 filter-btn" data-filter="community">Community &amp; Advocacy</button>
        <button type="button" class="btn btn-sm btn-outline-success px-3 py-2 filter-btn" data-filter="products">Brands &amp; Products</button>
        <button type="button" class="btn btn-sm btn-outline-success px-3 py-2 filter-btn" data-filter="youth">Youth Incubator</button>
      </div>

      <!-- Projects Grid -->
      <div class="row g-4" id="galleryGrid">
        <?php foreach ($projects as $item): ?>
          <div class="col-md-6 col-lg-4 gallery-item" data-category="<?php echo htmlspecialchars($item['category']); ?>">
            <div class="ed-work-card h-100 bg-white border border-light-subtle d-flex flex-column" style="border-radius: 14px; overflow: hidden; transition: transform 0.25s ease, box-shadow 0.25s ease;">
              
              <!-- Image Box -->
              <div class="position-relative overflow-hidden" style="height: 220px; background: #e8eee9;">
                <img src="<?php echo htmlspecialchars($item['image']); ?>" alt="<?php echo htmlspecialchars($item['title']); ?>" class="w-100 h-100 object-fit-cover" loading="lazy">
                <span class="position-absolute top-0 start-0 m-3 badge bg-dark bg-opacity-75 text-white small px-2 py-1">
                  <?php echo htmlspecialchars($item['location']); ?>
                </span>
                <span class="position-absolute bottom-0 end-0 m-3 badge bg-success text-white small px-2 py-1">
                  <?php echo htmlspecialchars($item['stat']); ?>
                </span>
              </div>

              <!-- Body -->
              <div class="p-4 d-flex flex-column justify-content-between flex-grow-1">
                <div>
                  <span class="text-success small fw-semibold text-uppercase tracking-wider d-block mb-1">
                    <?php echo htmlspecialchars($item['tag']); ?>
                  </span>
                  <h3 class="h5 fw-bold mb-2" style="color: var(--primary-forest);">
                    <?php echo htmlspecialchars($item['title']); ?>
                  </h3>
                  <p class="text-secondary small mb-3" style="line-height: 1.65;">
                    <?php echo htmlspecialchars($item['desc']); ?>
                  </p>
                </div>

                <div class="pt-3 border-top border-light-subtle d-flex justify-content-between align-items-center">
                  <?php if (!empty($item['link'])): ?>
                    <?php if (str_starts_with($item['link'], 'http')): ?>
                      <a href="<?php echo htmlspecialchars($item['link']); ?>" target="_blank" rel="noopener noreferrer" class="text-success fw-semibold small text-decoration-none">
                        External Feature &nearr;
                      </a>
                    <?php else: ?>
                      <a href="<?php echo htmlspecialchars($item['link']); ?>" class="text-success fw-semibold small text-decoration-none">
                        Explore Initiative &rarr;
                      </a>
                    <?php endif; ?>
                  <?php else: ?>
                    <span class="text-muted small"><i class="bi bi-shield-check text-success me-1"></i> Conserve Archive</span>
                  <?php endif; ?>
                  
                  <span class="badge bg-light text-secondary border small">#<?php echo htmlspecialchars($item['category']); ?></span>
                </div>
              </div>

            </div>
          </div>
        <?php endforeach; ?>
      </div>

    </div>
  </section>

  <!-- Interactive JavaScript for Filtering -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const filterButtons = document.querySelectorAll('.filter-btn');
      const galleryItems = document.querySelectorAll('.gallery-item');

      filterButtons.forEach(btn => {
        btn.addEventListener('click', function() {
          filterButtons.forEach(b => b.classList.remove('active', 'btn-success', 'text-white'));
          this.classList.add('active', 'btn-success', 'text-white');

          const filter = this.getAttribute('data-filter');

          galleryItems.forEach(item => {
            const cat = item.getAttribute('data-category');
            if (filter === 'all' || cat === filter) {
              item.style.display = 'block';
            } else {
              item.style.display = 'none';
            }
          });
        });
      });
    });
  </script>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
