@extends('website.layouts.app')

@section('title', ($article->meta_title ?: $article->title) . ' — Conserve India')
@section('description', $article->meta_description ?: ($article->summary ?: Str::limit(strip_tags($article->content), 155)))

@section('content')
  <!-- Editorial Page Header -->
  <header class="ed-page-header">
    <div class="container px-lg-4">
      <nav class="ed-breadcrumbs" aria-label="Breadcrumb">
        <a href="{{ url('/') }}">Home</a> <span>/</span> <a href="{{ url('/green-stories') }}">Green Stories</a> <span>/</span> {{ Str::limit($article->title, 40) }}
      </nav>
      <span class="ed-section-tag">{{ $article->category ?? 'CIRCULAR ECONOMY & RESEARCH' }}</span>
      <h1 class="ed-page-title" style="max-width: 900px;">{{ $article->title }}</h1>
      <div class="d-flex align-items-center gap-3 text-muted small mt-3 flex-wrap">
        <span><i class="bi bi-calendar3 text-success me-1"></i> {{ $article->published_date ? \Carbon\Carbon::parse($article->published_date)->format('F d, Y') : $article->created_at->format('F d, Y') }}</span>
        <span>&bull;</span>
        <span><i class="bi bi-person-fill text-success me-1"></i> Conserve India Editorial Desk</span>
        <span>&bull;</span>
        <span><i class="bi bi-clock me-1"></i> 5 Min Read</span>
      </div>
    </div>
  </header>

  <!-- Article Body Section -->
  <article class="ed-content-section" style="background: #fff; padding: 60px 0 90px;">
    <div class="container px-lg-4">
      <div class="row g-5 justify-content-center">
        
        <div class="col-lg-8">
          @if($article->image)
            <div class="ed-media-box mb-4" style="aspect-ratio: 16 / 9; border-radius: 14px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.06);">
              <img src="{{ str_starts_with($article->image, 'http') ? $article->image : asset('website/' . $article->image) }}" alt="{{ $article->title }}" class="ed-media-img" style="object-fit: cover; width: 100%; height: 100%;">
            </div>
          @endif

          @if($article->summary)
            <div class="p-4 rounded-3 mb-4" style="background: #fbfaf6; border-left: 4px solid var(--primary-forest); font-size: 16.5px; line-height: 1.7; color: var(--text-primary); font-style: italic;">
              {{ $article->summary }}
            </div>
          @endif

          <div class="article-rich-content" style="font-size: 16px; line-height: 1.85; color: #374151;">
            @if(strip_tags($article->content) != $article->content)
              {!! $article->content !!}
            @else
              {!! nl2br(e($article->content)) !!}
            @endif
          </div>

          <!-- Share Strip -->
          <div class="pt-4 mt-5 border-top border-light-subtle d-flex flex-wrap align-items-center justify-content-between gap-3">
            <div class="d-flex align-items-center gap-2">
              <span class="fw-bold small text-muted text-uppercase" style="letter-spacing: 1px;">Share this story:</span>
              <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(url()->current()) }}" target="_blank" rel="noopener noreferrer" class="btn btn-sm btn-outline-secondary rounded-circle" style="width: 36px; height: 36px; display: inline-flex; align-items: center; justify-content: center;" title="Share on LinkedIn">
                <i class="bi bi-linkedin"></i>
              </a>
              <a href="https://twitter.com/intent/tweet?text={{ urlencode($article->title) }}&url={{ urlencode(url()->current()) }}" target="_blank" rel="noopener noreferrer" class="btn btn-sm btn-outline-secondary rounded-circle" style="width: 36px; height: 36px; display: inline-flex; align-items: center; justify-content: center;" title="Share on X">
                <i class="bi bi-twitter-x"></i>
              </a>
              <a href="https://api.whatsapp.com/send?text={{ urlencode($article->title . ' ' . url()->current()) }}" target="_blank" rel="noopener noreferrer" class="btn btn-sm btn-outline-secondary rounded-circle" style="width: 36px; height: 36px; display: inline-flex; align-items: center; justify-content: center;" title="Share on WhatsApp">
                <i class="bi bi-whatsapp text-success"></i>
              </a>
              <button type="button" class="btn btn-sm btn-outline-secondary rounded-circle" style="width: 36px; height: 36px; display: inline-flex; align-items: center; justify-content: center;" title="Copy Link" onclick="navigator.clipboard.writeText(window.location.href); alert('Article link copied to clipboard!');">
                <i class="bi bi-link-45deg"></i>
              </button>
            </div>

            <a href="{{ url('/green-stories') }}" class="ed-link-arrow">
              &larr; Back to All Green Stories
            </a>
          </div>
        </div>

        <!-- Sidebar -->
        <div class="col-lg-4">
          <div class="position-sticky" style="top: 100px;">
            
            <!-- Quick About Conserve Box -->
            <div class="p-4 rounded-3 border border-light-subtle mb-4" style="background: #fbfaf6;">
              <span class="ed-section-tag mb-2">ABOUT CONSERVE INDIA</span>
              <h4 class="h6 fw-bold mb-2" style="color: var(--primary-forest);">Renewing From People to Planet</h4>
              <p class="text-secondary small mb-3" style="line-height: 1.6;">
                Pioneering patented plastic recycling and dignified livelihoods for India's informal waste collectors and refugee women since 1997.
              </p>
              <a href="{{ url('/about-us') }}" class="ed-btn-outline w-100 text-center py-2">
                Discover Our Heritage &rarr;
              </a>
            </div>

            <!-- Recent Stories -->
            @if($recentArticles->isNotEmpty())
              <div class="p-4 rounded-3 border border-light-subtle" style="background: #ffffff;">
                <h4 class="h6 fw-bold mb-3" style="color: var(--primary-forest); text-transform: uppercase; letter-spacing: 1px;">Recent Field Stories</h4>
                <div class="d-flex flex-column gap-3">
                  @foreach($recentArticles as $recent)
                    <div class="d-flex gap-3 align-items-center">
                      @if($recent->image)
                        <img src="{{ str_starts_with($recent->image, 'http') ? $recent->image : asset('website/' . $recent->image) }}" alt="{{ $recent->title }}" class="rounded" style="width: 64px; height: 64px; object-fit: cover; flex-shrink: 0;">
                      @endif
                      <div>
                        <span class="badge bg-light text-success border small mb-1">{{ $recent->category ?? 'Story' }}</span>
                        <a href="{{ route('story.detail', $recent->slug) }}" class="text-decoration-none d-block fw-semibold" style="font-size: 13.5px; color: var(--primary-forest); line-height: 1.4;">
                          {{ Str::limit($recent->title, 55) }}
                        </a>
                      </div>
                    </div>
                  @endforeach
                </div>
              </div>
            @endif

          </div>
        </div>

      </div>
    </div>
  </article>

  <!-- CTA Banner -->
  <section class="ed-content-section-muted" style="border-top: 1px solid var(--border-subtle);">
    <div class="container px-lg-4 text-center">
      <span class="ed-section-tag">COLLABORATE WITH US</span>
      <h2 class="ed-section-title mb-3">Interested in Our Research or Upcycled Products?</h2>
      <p class="ed-section-desc mx-auto mb-4">
        We partner with corporations, universities, and conscious global brands to advance circular economy models.
      </p>
      <div class="d-flex justify-content-center gap-3 flex-wrap">
        <a href="{{ url('/contact-us') }}" class="btn-primary-forest px-4 py-2">
          Contact Our Team &rarr;
        </a>
        <a href="{{ url('/services') }}" class="ed-btn-outline px-4 py-2">
          Explore Services
        </a>
      </div>
    </div>
  </section>
@endsection

