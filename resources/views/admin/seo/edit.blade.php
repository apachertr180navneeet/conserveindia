@extends('admin.layouts.app')

@section('title', 'Edit SEO: ' . $seo->page_name)
@section('page_heading', 'Edit Page SEO')

@section('content')
<div class="row justify-content-center">
  <div class="col-lg-10">

    <!-- Google Search Live Simulator Preview -->
    <div class="admin-card mb-4 border-primary border-opacity-25 shadow-sm">
      <div class="admin-card-header bg-light py-2">
        <div class="d-flex align-items-center gap-2">
          <i class="bi bi-google text-primary"></i>
          <span class="small fw-bold text-secondary">Google Search Result Preview (Live Simulator)</span>
        </div>
      </div>
      <div class="admin-card-body p-4 bg-white">
        <div style="font-family: Arial, sans-serif; max-width: 650px;">
          <div class="d-flex align-items-center gap-2 mb-1">
            <div class="rounded-circle bg-light border d-flex align-items-center justify-content-center" style="width: 24px; height: 24px; font-size: 11px;">
              <i class="bi bi-globe text-muted"></i>
            </div>
            <div style="font-size: 12px; color: #202124; line-height: 1.3;">
              <span class="fw-semibold">Conserve India</span><br>
              <span class="text-muted" style="font-size: 11px;">{{ url($seo->url_path) }}</span>
            </div>
          </div>
          <h5 id="previewTitle" class="mb-1" style="color: #1a0dab; font-size: 20px; font-weight: 400; line-height: 1.3; cursor: pointer;">
            {{ $seo->meta_title ?? 'Page Title' }}
          </h5>
          <p id="previewDesc" class="mb-0" style="color: #4d5156; font-size: 14px; line-height: 1.58;">
            {{ $seo->meta_description ?? 'Page meta description will appear here...' }}
          </p>
        </div>
      </div>
    </div>

    <!-- SEO Edit Form -->
    <div class="admin-card">
      <div class="admin-card-header">
        <div>
          <h6 class="fw-bold mb-0" style="color: var(--admin-forest);">SEO Configuration for: {{ $seo->page_name }}</h6>
          <span class="text-muted small">Route: <code>{{ $seo->url_path }}</code> &middot; Identifier: <code>{{ $seo->page_key }}</code></span>
        </div>
        <a href="{{ route('admin.seo.index') }}" class="btn btn-sm btn-outline-secondary">Back to SEO List</a>
      </div>
      <div class="admin-card-body">
        <form action="{{ route('admin.seo.update', $seo->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')

          <h6 class="fw-bold pb-2 border-bottom mb-3 text-secondary">Search Engine Meta Tags</h6>

          <!-- Meta Title -->
          <div class="mb-3">
            <div class="d-flex align-items-center justify-content-between mb-1">
              <label class="form-label small fw-semibold mb-0">Meta Title *</label>
              <span class="small text-muted" id="titleCount">0 / 60 chars (Recommended: 50-60)</span>
            </div>
            <input type="text" name="meta_title" id="inputMetaTitle" class="form-control" value="{{ old('meta_title', $seo->meta_title) }}" required maxlength="255">
            <small class="text-muted">The main clickable title displayed in Google search results and browser tabs.</small>
          </div>

          <!-- Meta Description -->
          <div class="mb-3">
            <div class="d-flex align-items-center justify-content-between mb-1">
              <label class="form-label small fw-semibold mb-0">Meta Description</label>
              <span class="small text-muted" id="descCount">0 / 160 chars (Recommended: 120-160)</span>
            </div>
            <textarea name="meta_description" id="inputMetaDesc" class="form-control" rows="3" maxlength="320">{{ old('meta_description', $seo->meta_description) }}</textarea>
            <small class="text-muted">Brief summary shown below your title in Google search results.</small>
          </div>

          <!-- Keywords & Robots -->
          <div class="row g-3 mb-4">
            <div class="col-md-7">
              <label class="form-label small fw-semibold">Meta Keywords (Comma separated)</label>
              <input type="text" name="meta_keywords" class="form-control" value="{{ old('meta_keywords', $seo->meta_keywords) }}" placeholder="e.g. circular economy, recycled plastic, fair trade">
            </div>
            <div class="col-md-5">
              <label class="form-label small fw-semibold">Robots Indexing Directive</label>
              <select name="robots" class="form-select">
                <option value="index, follow" {{ ($seo->robots == 'index, follow') ? 'selected' : '' }}>index, follow (Standard: Visible to search engines)</option>
                <option value="noindex, follow" {{ ($seo->robots == 'noindex, follow') ? 'selected' : '' }}>noindex, follow (Hide page, follow links)</option>
                <option value="index, nofollow" {{ ($seo->robots == 'index, nofollow') ? 'selected' : '' }}>index, nofollow (Show page, ignore links)</option>
                <option value="noindex, nofollow" {{ ($seo->robots == 'noindex, nofollow') ? 'selected' : '' }}>noindex, nofollow (Completely ignore page)</option>
              </select>
            </div>
          </div>

          <!-- Canonical URL -->
          <div class="mb-4">
            <label class="form-label small fw-semibold">Canonical URL (Optional override)</label>
            <input type="url" name="canonical_url" class="form-control" value="{{ old('canonical_url', $seo->canonical_url) }}" placeholder="{{ url($seo->url_path) }}">
            <small class="text-muted">Leave empty to default to the current page canonical URL.</small>
          </div>

          <h6 class="fw-bold pb-2 border-bottom mb-3 text-secondary">Social Media Sharing (OpenGraph &amp; Twitter)</h6>

          <div class="row g-3 mb-3">
            <div class="col-md-6">
              <label class="form-label small fw-semibold">OpenGraph Title</label>
              <input type="text" name="og_title" class="form-control" value="{{ old('og_title', $seo->og_title) }}" placeholder="Defaults to Meta Title if blank">
            </div>
            <div class="col-md-6">
              <label class="form-label small fw-semibold">OpenGraph Description</label>
              <textarea name="og_description" class="form-control" rows="2" placeholder="Defaults to Meta Description if blank">{{ old('og_description', $seo->og_description) }}</textarea>
            </div>
          </div>

          <div class="row g-3 mb-4">
            <div class="col-md-8">
              <label class="form-label small fw-semibold">Social Share Preview Image (OG Image)</label>
              <input type="file" name="og_image" class="form-control" accept="image/*">
              <small class="text-muted">Recommended dimension: 1200x630px for Facebook, WhatsApp, LinkedIn, and Twitter cards.</small>
            </div>
            <div class="col-md-4 text-center">
              <label class="form-label small fw-semibold d-block text-start">Current Share Image</label>
              @if($seo->og_image)
                <div class="rounded border p-1 bg-light d-inline-block" style="width: 140px; height: 80px; overflow: hidden;">
                  <img src="{{ asset('website/' . $seo->og_image) }}" class="w-100 h-100 object-fit-cover" alt="OG Preview">
                </div>
              @else
                <span class="text-muted small">Using default logo</span>
              @endif
            </div>
          </div>

          <h6 class="fw-bold pb-2 border-bottom mb-3 text-secondary">Structured Data / Schema Markup</h6>
          <div class="mb-4">
            <label class="form-label small fw-semibold">JSON-LD Schema Markup (Optional)</label>
            <textarea name="schema_markup" class="form-control font-monospace" rows="4" placeholder='<script type="application/ld+json"> ... </script>'>{{ old('schema_markup', $seo->schema_markup) }}</textarea>
            <small class="text-muted">Paste custom JSON-LD schema (e.g. Organization, NGO, Article, BreadcrumbList) for rich snippets.</small>
          </div>

          <div class="text-end border-top pt-3">
            <a href="{{ route('admin.seo.index') }}" class="btn btn-light border me-2">Cancel</a>
            <button type="submit" class="btn btn-admin-forest px-4">
              <i class="bi bi-save me-1"></i> Update SEO Settings
            </button>
          </div>
        </form>
      </div>
    </div>

  </div>
</div>
@endsection

@push('scripts')
<script>
  const titleInput = document.getElementById('inputMetaTitle');
  const descInput = document.getElementById('inputMetaDesc');
  const previewTitle = document.getElementById('previewTitle');
  const previewDesc = document.getElementById('previewDesc');
  const titleCount = document.getElementById('titleCount');
  const descCount = document.getElementById('descCount');

  function updatePreview() {
    // Title
    const tVal = titleInput.value.trim();
    previewTitle.textContent = tVal ? tVal : 'Page Title';
    titleCount.textContent = titleInput.value.length + ' / 60 chars (Recommended: 50-60)';
    titleCount.className = (titleInput.value.length >= 50 && titleInput.value.length <= 60) ? 'small text-success fw-bold' : 'small text-muted';

    // Description
    const dVal = descInput.value.trim();
    previewDesc.textContent = dVal ? dVal : 'Page meta description will appear here...';
    descCount.textContent = descInput.value.length + ' / 160 chars (Recommended: 120-160)';
    descCount.className = (descInput.value.length >= 120 && descInput.value.length <= 160) ? 'small text-success fw-bold' : 'small text-muted';
  }

  titleInput.addEventListener('input', updatePreview);
  descInput.addEventListener('input', updatePreview);
  updatePreview();
</script>
@endpush

