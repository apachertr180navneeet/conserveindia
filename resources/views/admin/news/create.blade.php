@extends('admin.layouts.app')

@section('title', 'Create News Article')
@section('page_heading', 'Add News Article')

@section('content')
<div class="container-fluid px-0">
  <div class="card border-0 shadow-sm rounded-3">
    <div class="card-body p-4 p-md-5">

      @if($errors->any())
        <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
          <ul class="mb-0 small">
            @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
          <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
      @endif

      <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data" id="newsForm">
        @csrf

        <!-- Title -->
        <div class="row mb-4 align-items-start">
          <label class="col-md-3 col-lg-2 col-form-label fw-semibold text-secondary" for="title">
            Title <span class="text-danger">*</span>
          </label>
          <div class="col-md-9 col-lg-10">
            <input type="text" name="title" id="title" class="form-control form-control-lg fs-6" 
                   value="{{ old('title') }}" required placeholder="e.g. New Fair Trade Upcycled Collection Launched">
            <small class="text-muted d-block mt-1">This title your projects title.</small>
          </div>
        </div>

        <!-- Slug -->
        <div class="row mb-4 align-items-start">
          <label class="col-md-3 col-lg-2 col-form-label fw-semibold text-secondary" for="slug">
            Slug <span class="text-danger">*</span>
          </label>
          <div class="col-md-9 col-lg-10">
            <input type="text" name="slug" id="slug" class="form-control" 
                   value="{{ old('slug') }}" placeholder="e.g. new-fair-trade-upcycled-collection-launched">
            <small class="text-muted d-block mt-1">create a slug from your title.</small>
          </div>
        </div>

        <!-- Select Category -->
        <div class="row mb-4 align-items-start">
          <label class="col-md-3 col-lg-2 col-form-label fw-semibold text-secondary" for="category">
            Select Category
          </label>
          <div class="col-md-9 col-lg-10">
            <select name="category" id="category" class="form-select">
              <option value="Research & Innovation" {{ old('category') == 'Research & Innovation' ? 'selected' : '' }}>Research & Innovation</option>
              <option value="Circular Economy & Upcycling" {{ old('category') == 'Circular Economy & Upcycling' ? 'selected' : '' }}>Circular Economy & Upcycling</option>
              <option value="Grassroots & Artisan Empowerment" {{ old('category') == 'Grassroots & Artisan Empowerment' ? 'selected' : '' }}>Grassroots & Artisan Empowerment</option>
              <option value="Sustainable Trade & Global Export" {{ old('category') == 'Sustainable Trade & Global Export' ? 'selected' : '' }}>Sustainable Trade & Global Export</option>
              <option value="Project Sahyog & Relief" {{ old('category') == 'Project Sahyog & Relief' ? 'selected' : '' }}>Project Sahyog & Relief</option>
              <option value="Advocacy & Policy" {{ old('category') == 'Advocacy & Policy' ? 'selected' : '' }}>Advocacy & Policy</option>
              <option value="Media & Recognition" {{ old('category') == 'Media & Recognition' ? 'selected' : '' }}>Media & Recognition</option>
            </select>
          </div>
        </div>

        <!-- Image -->
        <div class="row mb-4 align-items-start">
          <label class="col-md-3 col-lg-2 col-form-label fw-semibold text-secondary" for="imageInput">
            Image
          </label>
          <div class="col-md-9 col-lg-10">
            <input type="file" name="image" id="imageInput" class="form-control" accept="image/*" onchange="previewSelectedImage(event)">
            
            <!-- Live Preview Card -->
            <div id="previewContainer" class="d-none mt-2">
              <div class="position-relative d-inline-block p-1 bg-white border rounded shadow-sm text-center" style="width: 110px;">
                <button type="button" class="btn btn-secondary btn-sm position-absolute top-0 end-0 translate-middle rounded-circle p-0 d-flex align-items-center justify-content-center" 
                        style="width: 22px; height: 22px; font-size: 13px;" onclick="clearChosenImage()" title="Remove image">
                  <i class="bi bi-x"></i>
                </button>
                <img id="imagePreview" src="#" alt="Preview" class="img-fluid rounded" style="width: 100px; height: 75px; object-fit: cover;">
                <small id="previewFilename" class="d-block text-truncate text-muted mt-1 px-1" style="font-size: 11px;">Selected</small>
              </div>
            </div>

            <small class="text-muted d-block mt-1">This Image show in your projects Image section.</small>
          </div>
        </div>

        <!-- Short Description -->
        <div class="row mb-4 align-items-start">
          <label class="col-md-3 col-lg-2 col-form-label fw-semibold text-secondary" for="summary">
            Short Description
          </label>
          <div class="col-md-9 col-lg-10">
            <textarea name="summary" id="summary" class="form-control" rows="3" 
                      placeholder="Brief excerpt or overview of the article...">{{ old('summary') }}</textarea>
            <small class="text-muted d-block mt-1">Brief summary shown in article listing cards and teasers.</small>
          </div>
        </div>

        <!-- Full Description -->
        <div class="row mb-4 align-items-start">
          <label class="col-md-3 col-lg-2 col-form-label fw-semibold text-secondary" for="full_description">
            Full Description
          </label>
          <div class="col-md-9 col-lg-10">
            <textarea name="content" id="full_description" class="form-control" rows="10">{{ old('content') }}</textarea>
          </div>
        </div>

        <!-- SEO Meta Information Section Header -->
        <div class="pt-4 mt-4 border-top">
          <h4 class="fw-bold mb-4" style="color: #1f2937;">SEO Meta Information</h4>
        </div>

        <!-- SEO Title (Meta Title) -->
        <div class="row mb-4 align-items-start">
          <label class="col-md-3 col-lg-2 col-form-label fw-semibold text-secondary" for="meta_title">
            SEO Title (Meta Title)
          </label>
          <div class="col-md-9 col-lg-10">
            <input type="text" name="meta_title" id="meta_title" class="form-control" 
                   value="{{ old('meta_title') }}" placeholder="e.g. New Fair Trade Upcycled Collection | Conserve India">
            <small class="text-muted d-block mt-1">Title tag used for search engines and browser title.</small>
          </div>
        </div>

        <!-- SEO Keywords (Meta Keywords) -->
        <div class="row mb-4 align-items-start">
          <label class="col-md-3 col-lg-2 col-form-label fw-semibold text-secondary" for="meta_keywords">
            SEO Keywords (Meta Keywords)
          </label>
          <div class="col-md-9 col-lg-10">
            <textarea name="meta_keywords" id="meta_keywords" class="form-control" rows="3" 
                      placeholder="e.g. Fair Trade, Upcycled Fashion, Plastic Recycling, Eco Design">{{ old('meta_keywords') }}</textarea>
            <small class="text-muted d-block mt-1">Keywords for search engines separated by commas.</small>
          </div>
        </div>

        <!-- SEO Description (Meta Description) -->
        <div class="row mb-5 align-items-start">
          <label class="col-md-3 col-lg-2 col-form-label fw-semibold text-secondary" for="meta_description">
            SEO Description (Meta Description)
          </label>
          <div class="col-md-9 col-lg-10">
            <textarea name="meta_description" id="meta_description" class="form-control" rows="3" 
                      placeholder="e.g. Discover Conserve India's latest milestone in empowering informal waste communities through circular design.">{{ old('meta_description') }}</textarea>
            <small class="text-muted d-block mt-1">Summary description used in search engine snippet results.</small>
          </div>
        </div>

        <!-- Action Buttons -->
        <div class="row">
          <div class="col-md-9 col-lg-10 offset-md-3 offset-lg-2">
            <button type="submit" class="btn text-white px-4 py-2 fw-semibold rounded-2 shadow-sm" style="background-color: #22c55e; border-color: #22c55e; min-width: 110px;">
              Submit
            </button>
            <a href="{{ route('admin.news.index') }}" class="btn text-white px-4 py-2 fw-semibold rounded-2 ms-2 shadow-sm" style="background-color: #ef4444; border-color: #ef4444; min-width: 110px;">
              Cancel
            </a>
          </div>
        </div>

      </form>
    </div>
  </div>
</div>
@endsection

@push('scripts')
<!-- TinyMCE Rich Text Editor -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.8.3/tinymce.min.js" referrerpolicy="origin"></script>
<script>
  // Initialize TinyMCE
  tinymce.init({
    selector: '#full_description',
    height: 340,
    menubar: false,
    plugins: 'advlist autolink lists link image charmap preview anchor searchreplace visualblocks code fullscreen insertdatetime media table help wordcount',
    toolbar: 'undo redo | blocks | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link | removeformat',
    branding: true,
    promotion: false,
    content_style: 'body { font-family: Inter, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif; font-size: 14px; color: #374151; line-height: 1.6; }'
  });

  // Auto-generate slug from title
  var titleInput = document.getElementById('title');
  var slugInput = document.getElementById('slug');
  var userEditedSlug = false;

  slugInput.addEventListener('input', function() {
    userEditedSlug = true;
  });

  titleInput.addEventListener('input', function() {
    if (!userEditedSlug) {
      var slug = titleInput.value
        .toLowerCase()
        .trim()
        .replace(/[^\w\s-]/g, '')
        .replace(/[\s_-]+/g, '-')
        .replace(/^-+|-+$/g, '');
      slugInput.value = slug;
    }
  });

  // Image preview handler
  function previewSelectedImage(event) {
    var file = event.target.files[0];
    if (file) {
      var reader = new FileReader();
      reader.onload = function(e) {
        document.getElementById('imagePreview').src = e.target.result;
        document.getElementById('previewFilename').textContent = file.name;
        document.getElementById('previewContainer').classList.remove('d-none');
      };
      reader.readAsDataURL(file);
    }
  }

  function clearChosenImage() {
    var input = document.getElementById('imageInput');
    input.value = '';
    document.getElementById('imagePreview').src = '#';
    document.getElementById('previewContainer').classList.add('d-none');
  }
</script>
@endpush
