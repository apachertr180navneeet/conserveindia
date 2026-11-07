@extends('website.layouts.app')

@section('title', 'Gallery — Conserve India | Milestone Circular Projects & Artisans')
@section('description', 'Explore Conserve India\'s photo and project gallery: groundbreaking initiatives from patented HRP technology to ragpicker associations and refugee empowerment.')

@section('content')
<!-- Page Header -->
  <header class="ed-page-header">
    <div class="container px-lg-4">
      <nav class="ed-breadcrumbs" aria-label="Breadcrumb">
        <a href="{{ url('/') }}">Home</a> <span>/</span> Gallery
      </nav>
      <span class="ed-section-tag">{{ $page->subtitle ?? 'PROJECT REPOSITORY' }}</span>
      <h1 class="ed-page-title">{{ $page->title ?? 'Gallery of Milestones & Grassroots Action' }}</h1>
      <p class="ed-page-lead">
        {{ $page->lead_text ?? 'A visual showcase of the foundational initiatives shaping our journey—from patented material discoveries to cooperative waste collectors associations and refugee ateliers.' }}
      </p>
      @if(!empty($page->content))
        <div class="mt-4 p-4 bg-white rounded-3 border border-light-subtle shadow-sm text-secondary" style="line-height: 1.8;">
          {!! $page->content !!}
        </div>
      @endif
    </div>
  </header>

  <!-- Gallery Filter & Grid Section -->
  <section class="ed-content-section" style="background: #fff;">
    <div class="container px-lg-4">
      
      @php
        $categoryDefinitions = [
          'livelihoods' => 'Livelihoods & Artisans',
          'patent'      => 'Patents & Material R&D',
          'community'   => 'Community & Advocacy',
          'products'    => 'Brands & Products',
          'youth'       => 'Youth Incubator',
        ];

        $counts = ['all' => count($projects)];
        foreach ($projects as $p) {
          $rawCat = is_array($p) ? ($p['category'] ?? 'community') : ($p->category ?? 'community');
          $c = strtolower(trim($rawCat ?: 'community'));
          $counts[$c] = ($counts[$c] ?? 0) + 1;
        }
      @endphp

      <!-- Filter Bar -->
      <div class="d-flex flex-wrap justify-content-center gap-2 mb-5" id="galleryFilters">
        <button type="button" class="btn btn-sm btn-outline-success active px-3 py-2 filter-btn" data-filter="all">
          All Initiatives ({{ $counts['all'] }})
        </button>
        @foreach($categoryDefinitions as $slug => $label)
          @if(isset($counts[$slug]) && $counts[$slug] > 0)
            <button type="button" class="btn btn-sm btn-outline-success px-3 py-2 filter-btn" data-filter="{{ $slug }}">
              {{ $label }} ({{ $counts[$slug] }})
            </button>
          @endif
        @endforeach
        {{-- Render any custom category created by admin --}}
        @foreach($counts as $slug => $cnt)
          @if($slug !== 'all' && !isset($categoryDefinitions[$slug]) && $cnt > 0)
            <button type="button" class="btn btn-sm btn-outline-success px-3 py-2 filter-btn" data-filter="{{ $slug }}">
              {{ ucwords(str_replace(['-', '_'], ' ', $slug)) }} ({{ $cnt }})
            </button>
          @endif
        @endforeach
      </div>

      <!-- Projects Grid -->
      <div class="row g-4" id="galleryGrid">
        @forelse($projects as $item)
          @php
            $isObj = is_object($item);
            $rawCat = $isObj ? ($item->category ?? 'community') : ($item['category'] ?? 'community');
            $cat = strtolower(trim($rawCat ?: 'community'));
            
            $title = $isObj ? ($item->title ?? '') : ($item['title'] ?? '');
            $loc = $isObj ? ($item->meta ?: 'Conserve India') : ($item['location'] ?? 'Conserve India');
            $isActive = $isObj ? ($item->is_active ?? true) : true;
            $stat = $isObj ? ($isActive ? 'Active Initiative' : 'Archived') : ($item['stat'] ?? 'Active Initiative');
            
            $tag = $categoryDefinitions[$cat] ?? (
              $isObj && !empty($item->category) 
                ? ucwords(str_replace(['-', '_'], ' ', $item->category)) 
                : ($item['tag'] ?? 'Flagship Initiative')
            );
            
            $desc = $isObj 
              ? ($item->short_description ?: \Illuminate\Support\Str::limit(strip_tags($item->content ?? ''), 130))
              : ($item['desc'] ?? '');

            // Image handling
            if ($isObj && method_exists($item, 'getImageUrlAttribute')) {
              $imgSrc = $item->image_url;
            } else {
              $img = $isObj ? ($item->image ?? '') : ($item['image'] ?? '');
              $imgSrc = empty($img) 
                ? asset('website/assets/images/upcycling-innovation.jpg')
                : (str_starts_with($img, 'http') ? $img : (str_starts_with($img, '/') ? asset(ltrim($img, '/')) : asset('website/' . $img)));
            }

            // Link handling
            $rawLink = $isObj ? ($item->link ?? null) : ($item['link'] ?? null);
            $link = null;
            if (!empty($rawLink)) {
              if (str_starts_with($rawLink, 'http') || str_starts_with($rawLink, '#')) {
                $link = $rawLink;
              } else {
                $link = url(ltrim($rawLink, '/'));
              }
            }
          @endphp
          <div class="col-md-6 col-lg-4 gallery-item" data-category="{{ $cat }}">
            <div class="ed-work-card h-100 bg-white border border-light-subtle d-flex flex-column" style="border-radius: 14px; overflow: hidden; transition: transform 0.25s ease, box-shadow 0.25s ease;">
              
              <!-- Image Box -->
              <div class="position-relative overflow-hidden" style="height: 220px; background: #e8eee9;">
                <img src="{{ $imgSrc }}" alt="{{ $title }}" class="w-100 h-100 object-fit-cover" loading="lazy">
                @if($loc)
                  <span class="position-absolute top-0 start-0 m-3 badge bg-dark bg-opacity-75 text-white small px-2 py-1">
                    {{ $loc }}
                  </span>
                @endif
                <span class="position-absolute bottom-0 end-0 m-3 badge bg-success text-white small px-2 py-1">
                  {{ $stat }}
                </span>
              </div>

              <!-- Body -->
              <div class="p-4 d-flex flex-column justify-content-between flex-grow-1">
                <div>
                  <span class="text-success small fw-semibold text-uppercase tracking-wider d-block mb-1">
                    {{ $tag }}
                  </span>
                  <h3 class="h5 fw-bold mb-2" style="color: var(--primary-forest);">
                    {{ $title }}
                  </h3>
                  <p class="text-secondary small mb-3" style="line-height: 1.65;">
                    {{ $desc }}
                  </p>
                </div>

                <div class="pt-3 border-top border-light-subtle d-flex justify-content-between align-items-center">
                  @if(!empty($link))
                    @if(str_starts_with($rawLink ?? '', 'http'))
                      <a href="{{ $link }}" target="_blank" rel="noopener noreferrer" class="text-success fw-semibold small text-decoration-none">
                        External Feature &nearr;
                      </a>
                    @else
                      <a href="{{ $link }}" class="text-success fw-semibold small text-decoration-none">
                        Explore Initiative &rarr;
                      </a>
                    @endif
                  @else
                    <span class="text-muted small"><i class="bi bi-shield-check text-success me-1"></i> Conserve Initiative</span>
                  @endif
                  
                  <span class="badge bg-light text-secondary border small">#{{ $cat }}</span>
                </div>
              </div>

            </div>
          </div>
        @empty
          <div class="col-12 text-center py-5">
            <div class="text-muted py-4">No initiatives available at this moment.</div>
          </div>
        @endforelse
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
