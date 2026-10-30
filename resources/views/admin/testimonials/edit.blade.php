@extends('admin.layouts.app')

@section('title', 'Edit Testimonial')
@section('page_heading', 'Edit Partner Testimonial')

@section('content')
<div class="row justify-content-center">
  <div class="col-lg-9">
    <div class="admin-card">
      <div class="admin-card-header">
        <h6 class="fw-bold mb-0">Edit Testimonial: {{ $testimonial->author }}</h6>
        <a href="{{ route('admin.testimonials.index') }}" class="btn btn-sm btn-outline-secondary">Back to List</a>
      </div>
      <div class="admin-card-body">
        <form action="{{ route('admin.testimonials.update', $testimonial->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')

          <div class="row g-3 mb-3">
            <div class="col-md-6">
              <label class="form-label small fw-semibold">Author / Organization Name *</label>
              <input type="text" name="author" class="form-control" value="{{ old('author', $testimonial->author) }}" required>
            </div>
            <div class="col-md-6">
              <label class="form-label small fw-semibold">Designation / Role</label>
              <input type="text" name="designation" class="form-control" value="{{ old('designation', $testimonial->designation) }}">
            </div>
          </div>

          <div class="row g-3 mb-3">
            <div class="col-md-3">
              <label class="form-label small fw-semibold">Display Order</label>
              <input type="number" name="order" class="form-control" value="{{ old('order', $testimonial->order) }}">
            </div>
            <div class="col-md-3 d-flex align-items-end">
              <div class="form-check mb-2">
                <input class="form-check-input" type="checkbox" name="is_active" id="is_active" value="1" {{ $testimonial->is_active ? 'checked' : '' }}>
                <label class="form-check-label small fw-semibold" for="is_active">Active on Site</label>
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label class="form-label small fw-semibold">Quote / Testimonial Text *</label>
            <textarea name="quote" class="form-control" rows="4" required>{{ old('quote', $testimonial->quote) }}</textarea>
          </div>

          <div class="row g-3 mb-4">
            <div class="col-md-8">
              <label class="form-label small fw-semibold">Change Logo</label>
              <input type="file" name="logo" class="form-control" accept="image/*">
              <small class="text-muted">Leave empty to keep current logo.</small>
            </div>
            <div class="col-md-4 text-center">
              <label class="form-label small fw-semibold d-block text-start">Current Logo</label>
              @if($testimonial->logo)
                <div class="rounded border p-2 bg-light d-inline-block">
                  <img src="{{ asset('website/' . $testimonial->logo) }}" style="max-height: 50px; max-width: 100px; object-fit: contain;" alt="Current Logo">
                </div>
              @else
                <span class="text-muted small">No logo</span>
              @endif
            </div>
          </div>

          <div class="text-end border-top pt-3">
            <a href="{{ route('admin.testimonials.index') }}" class="btn btn-light border me-2">Cancel</a>
            <button type="submit" class="btn btn-admin-forest">Update Testimonial</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

