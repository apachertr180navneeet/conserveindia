@extends('admin.layouts.app')

@section('title', 'Edit Slide')
@section('page_heading', 'Edit Hero Slide')

@section('content')
<div class="row justify-content-center">
  <div class="col-lg-9">
    <div class="admin-card">
      <div class="admin-card-header">
        <h6 class="fw-bold mb-0">Edit Slide #{{ $slider->id }}</h6>
        <a href="{{ route('admin.sliders.index') }}" class="btn btn-sm btn-outline-secondary">Back to List</a>
      </div>
      <div class="admin-card-body">
        <form action="{{ route('admin.sliders.update', $slider->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')

          <div class="mb-3">
            <label class="form-label small fw-semibold">Slide Headline / Title *</label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $slider->title) }}" required>
          </div>

          <div class="row g-3 mb-3">
            <div class="col-md-6">
              <label class="form-label small fw-semibold">Category Tag</label>
              <input type="text" name="tag" class="form-control" value="{{ old('tag', $slider->tag) }}">
            </div>
            <div class="col-md-3">
              <label class="form-label small fw-semibold">Display Order</label>
              <input type="number" name="order" class="form-control" value="{{ old('order', $slider->order) }}">
            </div>
            <div class="col-md-3 d-flex align-items-end">
              <div class="form-check mb-2">
                <input class="form-check-input" type="checkbox" name="is_active" id="is_active" value="1" {{ $slider->is_active ? 'checked' : '' }}>
                <label class="form-check-label small fw-semibold" for="is_active">Active on Site</label>
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label class="form-label small fw-semibold">Subtitle / Paragraph Description</label>
            <textarea name="subtitle" class="form-control" rows="3">{{ old('subtitle', $slider->subtitle) }}</textarea>
          </div>

          <div class="row g-3 mb-3">
            <div class="col-md-6">
              <label class="form-label small fw-semibold">Primary Button Text</label>
              <input type="text" name="button_text" class="form-control" value="{{ old('button_text', $slider->button_text) }}">
            </div>
            <div class="col-md-6">
              <label class="form-label small fw-semibold">Primary Button Link</label>
              <input type="text" name="button_link" class="form-control" value="{{ old('button_link', $slider->button_link) }}">
            </div>
          </div>

          <div class="row g-3 mb-3">
            <div class="col-md-6">
              <label class="form-label small fw-semibold">Secondary Button Text</label>
              <input type="text" name="secondary_button_text" class="form-control" value="{{ old('secondary_button_text', $slider->secondary_button_text) }}">
            </div>
            <div class="col-md-6">
              <label class="form-label small fw-semibold">Secondary Button Link</label>
              <input type="text" name="secondary_button_link" class="form-control" value="{{ old('secondary_button_link', $slider->secondary_button_link) }}">
            </div>
          </div>

          <div class="row g-3 mb-4">
            <div class="col-md-8">
              <label class="form-label small fw-semibold">Change Background Image</label>
              <input type="file" name="image" class="form-control" accept="image/*">
              <small class="text-muted">Leave empty to keep existing image.</small>
            </div>
            <div class="col-md-4 text-center">
              <label class="form-label small fw-semibold d-block text-start">Current Image</label>
              <div class="rounded border overflow-hidden d-inline-block" style="width: 140px; height: 80px;">
                <img src="{{ asset('website/' . $slider->image) }}" class="w-100 h-100 object-fit-cover" alt="Current Slide">
              </div>
            </div>
          </div>

          <div class="text-end border-top pt-3">
            <a href="{{ route('admin.sliders.index') }}" class="btn btn-light border me-2">Cancel</a>
            <button type="submit" class="btn btn-admin-forest">Update Slide</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

