@extends('website.layouts.app')

@section('title', 'Gallery — Conserve India | 13 Milestone Circular Projects & Artisans')
@section('description', 'Explore Conserve India\'s photo and project gallery: 13 groundbreaking initiatives from patented HRP technology to ragpicker associations and refugee empowerment.')

@section('content')
<!-- Page Header -->
  <header class="ed-page-header">
    <div class="container px-lg-4">
      <nav class="ed-breadcrumbs" aria-label="Breadcrumb">
        <a href="{{ url('/') }}">Home</a> <span>/</span> Gallery
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
@endsection
