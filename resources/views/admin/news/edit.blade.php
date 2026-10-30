@extends('admin.layouts.app')

@section('title', 'Edit Article')
@section('page_heading', 'Edit News Article')

@section('content')
<div class="row justify-content-center">
  <div class="col-lg-9">
    <div class="admin-card">
      <div class="admin-card-header">
        <h6 class="fw-bold mb-0">Edit: {{ $news->title }}</h6>
        <a href="{{ route('admin.news.index') }}" class="btn btn-sm btn-outline-secondary">Back to List</a>
      </div>
      <div class="admin-card-body">
        <form action="{{ route('admin.news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')

          <div class="mb-3">
            <label class="form-label small fw-semibold">Article Headline / Title *</label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $news->title) }}" required>
          </div>

          <div class="row g-3 mb-3">
            <div class="col-md-5">
              <label class="form-label small fw-semibold">Category</label>
              <input type="text" name="category" class="form-control" value="{{ old('category', $news->category) }}">
            </div>
            <div class="col-md-4">
              <label class="form-label small fw-semibold">Publish Date</label>
              <input type="date" name="published_date" class="form-control" value="{{ old('published_date', $news->published_date ? $news->published_date->format('Y-m-d') : '') }}">
            </div>
            <div class="col-md-3 d-flex align-items-end">
              <div class="form-check mb-2">
                <input class="form-check-input" type="checkbox" name="is_active" id="is_active" value="1" {{ $news->is_active ? 'checked' : '' }}>
                <label class="form-check-label small fw-semibold" for="is_active">Publish Live</label>
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label class="form-label small fw-semibold">Brief Summary / Excerpt</label>
            <textarea name="summary" class="form-control" rows="2">{{ old('summary', $news->summary) }}</textarea>
          </div>

          <div class="mb-3">
            <label class="form-label small fw-semibold">Full Story Content</label>
            <textarea name="content" class="form-control" rows="6">{{ old('content', $news->content) }}</textarea>
          </div>

          <div class="row g-3 mb-4">
            <div class="col-md-8">
              <label class="form-label small fw-semibold">Change Featured Image</label>
              <input type="file" name="image" class="form-control" accept="image/*">
              <small class="text-muted">Leave empty to keep current image.</small>
            </div>
            <div class="col-md-4 text-center">
              <label class="form-label small fw-semibold d-block text-start">Current Image</label>
              @if($news->image)
                <div class="rounded border overflow-hidden d-inline-block" style="width: 120px; height: 75px;">
                  <img src="{{ asset('website/' . $news->image) }}" class="w-100 h-100 object-fit-cover" alt="Current Article Image">
                </div>
              @else
                <span class="text-muted small">No image uploaded</span>
              @endif
            </div>
          </div>

          <div class="text-end border-top pt-3">
            <a href="{{ route('admin.news.index') }}" class="btn btn-light border me-2">Cancel</a>
            <button type="submit" class="btn btn-admin-forest">Update Article</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

