@extends('admin.layouts.app')

@section('title', 'Post Article')
@section('page_heading', 'Post News Article / Green Story')

@section('content')
<div class="row justify-content-center">
  <div class="col-lg-9">
    <div class="admin-card">
      <div class="admin-card-header">
        <h6 class="fw-bold mb-0">Create Article</h6>
        <a href="{{ route('admin.news.index') }}" class="btn btn-sm btn-outline-secondary">Back to List</a>
      </div>
      <div class="admin-card-body">
        <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data">
          @csrf

          <div class="mb-3">
            <label class="form-label small fw-semibold">Article Headline / Title *</label>
            <input type="text" name="title" class="form-control" value="{{ old('title') }}" required placeholder="e.g. Scaling Plastic Upcycling Across Northern India">
          </div>

          <div class="row g-3 mb-3">
            <div class="col-md-5">
              <label class="form-label small fw-semibold">Category</label>
              <input type="text" name="category" class="form-control" value="{{ old('category', 'Research & Innovation') }}" placeholder="e.g. Circular Economy">
            </div>
            <div class="col-md-4">
              <label class="form-label small fw-semibold">Publish Date</label>
              <input type="date" name="published_date" class="form-control" value="{{ old('published_date', date('Y-m-d')) }}">
            </div>
            <div class="col-md-3 d-flex align-items-end">
              <div class="form-check mb-2">
                <input class="form-check-input" type="checkbox" name="is_active" id="is_active" value="1" checked>
                <label class="form-check-label small fw-semibold" for="is_active">Publish Live</label>
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label class="form-label small fw-semibold">Brief Summary / Excerpt</label>
            <textarea name="summary" class="form-control" rows="2" placeholder="Short intro shown in cards...">{{ old('summary') }}</textarea>
          </div>

          <div class="mb-3">
            <label class="form-label small fw-semibold">Full Story Content</label>
            <textarea name="content" class="form-control" rows="6" placeholder="Full article body content...">{{ old('content') }}</textarea>
          </div>

          <div class="mb-4">
            <label class="form-label small fw-semibold">Featured Article Image</label>
            <input type="file" name="image" class="form-control" accept="image/*">
          </div>

          <div class="text-end border-top pt-3">
            <a href="{{ route('admin.news.index') }}" class="btn btn-light border me-2">Cancel</a>
            <button type="submit" class="btn btn-admin-forest">Publish Article</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

