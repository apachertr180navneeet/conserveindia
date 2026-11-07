@extends('admin.layouts.app')

@section('title', 'Edit Page: ' . $page->page_name)
@section('page_heading', 'Edit Page Content')

@section('content')
<div class="row justify-content-center">
  <div class="col-lg-10">
    <div class="admin-card">
      <div class="admin-card-header">
        <div>
          <h6 class="fw-bold mb-0" style="color: var(--admin-forest);">Editing: {{ $page->page_name }}</h6>
          <span class="text-muted small">Route: <code>/{{ ltrim($page->slug, '/') }}</code> &middot; Key: <code>{{ $page->page_key }}</code></span>
        </div>
        <div class="d-flex align-items-center gap-2">
          <a href="{{ url($page->slug ?: '/') }}" target="_blank" class="btn btn-sm btn-outline-success">
            <i class="bi bi-box-arrow-up-right me-1"></i> View Live
          </a>
          <a href="{{ route('admin.pages.index') }}" class="btn btn-sm btn-outline-secondary">Back to Pages</a>
        </div>
      </div>

      <div class="admin-card-body">
        <form action="{{ route('admin.pages.update', $page->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')

          <input type="hidden" name="remove_banner" id="remove_banner" value="0">

          <!-- Section Tag / Subtitle -->
          <div class="row mb-3 align-items-start">
            <label class="col-md-3 col-form-label fw-semibold small text-secondary">
              Category Tag / Subtitle
            </label>
            <div class="col-md-9">
              <input type="text" name="subtitle" class="form-control" value="{{ old('subtitle', $page->subtitle) }}" placeholder="e.g. ORGANIZATIONAL HERITAGE">
              <small class="text-muted">Small badge or category tag displayed right above the main title.</small>
            </div>
          </div>

          <!-- Main Page Title / Heading -->
          <div class="row mb-3 align-items-start">
            <label class="col-md-3 col-form-label fw-semibold small text-secondary">
              Main Page Headline *
            </label>
            <div class="col-md-9">
              <input type="text" name="title" class="form-control form-control-lg fs-6" value="{{ old('title', $page->title) }}" required placeholder="e.g. Pioneering Circularity Since 1997">
              <small class="text-muted">Primary H1 heading shown in the top header banner of this page.</small>
            </div>
          </div>

          <!-- Lead Introduction Paragraph -->
          <div class="row mb-4 align-items-start">
            <label class="col-md-3 col-form-label fw-semibold small text-secondary">
              Lead Introduction Paragraph
            </label>
            <div class="col-md-9">
              <textarea name="lead_text" class="form-control" rows="3" placeholder="Prominent introduction paragraph under the title...">{{ old('lead_text', $page->lead_text) }}</textarea>
              <small class="text-muted">Featured bold lead summary introducing this page to visitors.</small>
            </div>
          </div>

          <!-- Banner / Featured Image -->
          <div class="row mb-4 align-items-start">
            <label class="col-md-3 col-form-label fw-semibold small text-secondary">
              Banner / Featured Image
            </label>
            <div class="col-md-9">
              <input type="file" name="banner_image" id="bannerInput" class="form-control" accept="image/*" onchange="previewSelectedBanner(event)">
              
              <!-- Preview Card -->
              <div id="bannerPreviewContainer" class="{{ $page->banner_image ? '' : 'd-none' }} mt-2">
                <div class="position-relative d-inline-block p-1 bg-white border rounded shadow-sm text-center" style="width: 140px;">
                  <button type="button" class="btn btn-secondary btn-sm position-absolute top-0 end-0 translate-middle rounded-circle p-0 d-flex align-items-center justify-content-center" 
                          style="width: 22px; height: 22px; font-size: 13px;" onclick="removeBannerImage()" title="Remove image">
                    <i class="bi bi-x"></i>
                  </button>
                  <img id="bannerPreview" src="{{ $page->banner_image ? (str_starts_with($page->banner_image, 'http') ? $page->banner_image : asset('website/' . $page->banner_image)) : '#' }}" alt="Banner Preview" class="img-fluid rounded" style="width: 130px; height: 80px; object-fit: cover;">
                  <small id="bannerFilename" class="d-block text-truncate text-muted mt-1 px-1" style="font-size: 11px;">
                    {{ $page->banner_image ? basename($page->banner_image) : 'Selected' }}
                  </small>
                </div>
              </div>
              <small class="text-muted d-block mt-1">Recommended high-resolution landscape image (1600x900 or 1920x1080).</small>
            </div>
          </div>

          <!-- Editorial Body Content (Rich Text) -->
          <div class="row mb-4 align-items-start">
            <label class="col-md-3 col-form-label fw-semibold small text-secondary">
              Editorial Content / Body
            </label>
            <div class="col-md-9">
              <textarea name="content" id="page_content" class="form-control" rows="10">{{ old('content', $page->content) }}</textarea>
              <small class="text-muted">Additional detailed editorial narrative, HTML sections, or custom text.</small>
            </div>
          </div>

          <!-- Active Toggle -->
          <div class="row mb-4 align-items-center">
            <label class="col-md-3 col-form-label fw-semibold small text-secondary">
              Page Visibility
            </label>
            <div class="col-md-9">
              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" name="is_active" id="is_active" value="1" {{ old('is_active', $page->is_active) ? 'checked' : '' }}>
                <label class="form-check-label small fw-semibold" for="is_active">
                  Active &amp; Accessible on Live Site
                </label>
              </div>
            </div>
          </div>

          <!-- Action Buttons -->
          <div class="row pt-3 border-top">
            <div class="col-md-9 offset-md-3 d-flex align-items-center gap-2">
              <button type="submit" class="btn btn-admin-forest px-4">
                <i class="bi bi-save me-1"></i> Save Changes
              </button>
              <a href="{{ route('admin.pages.index') }}" class="btn btn-light border px-3">
                Cancel
              </a>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>
@endsection

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.8.3/tinymce.min.js" referrerpolicy="origin"></script>
<script>
  tinymce.init({
    selector: '#page_content',
    height: 320,
    menubar: false,
    plugins: 'advlist autolink lists link charmap preview searchreplace visualblocks code insertdatetime media table help wordcount',
    toolbar: 'undo redo | blocks | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link | removeformat',
    branding: false,
    promotion: false,
    content_style: 'body { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif; font-size: 14px; color: #374151; line-height: 1.6; }'
  });

  function previewSelectedBanner(event) {
    var file = event.target.files[0];
    if (file) {
      var reader = new FileReader();
      reader.onload = function(e) {
        document.getElementById('bannerPreview').src = e.target.result;
        document.getElementById('bannerFilename').textContent = file.name;
        document.getElementById('bannerPreviewContainer').classList.remove('d-none');
        document.getElementById('remove_banner').value = '0';
      };
      reader.readAsDataURL(file);
    }
  }

  function removeBannerImage() {
    document.getElementById('bannerInput').value = '';
    document.getElementById('bannerPreview').src = '#';
    document.getElementById('bannerPreviewContainer').classList.add('d-none');
    document.getElementById('remove_banner').value = '1';
  }
</script>
@endpush

