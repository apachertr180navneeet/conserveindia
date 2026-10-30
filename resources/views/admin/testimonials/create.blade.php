@extends('admin.layouts.app')

@section('title', 'Add Testimonial')
@section('page_heading', 'Add Partner Testimonial')

@section('content')
<div class="row justify-content-center">
  <div class="col-lg-9">
    <div class="admin-card">
      <div class="admin-card-header">
        <h6 class="fw-bold mb-0">Create Testimonial</h6>
        <a href="{{ route('admin.testimonials.index') }}" class="btn btn-sm btn-outline-secondary">Back to List</a>
      </div>
      <div class="admin-card-body">
        <form action="{{ route('admin.testimonials.store') }}" method="POST" enctype="multipart/form-data">
          @csrf

          <div class="row g-3 mb-3">
            <div class="col-md-6">
              <label class="form-label small fw-semibold">Author / Organization Name *</label>
              <input type="text" name="author" class="form-control" value="{{ old('author') }}" required placeholder="e.g. Whole Foods Market Buyer">
            </div>
            <div class="col-md-6">
              <label class="form-label small fw-semibold">Designation / Role</label>
              <input type="text" name="designation" class="form-control" value="{{ old('designation') }}" placeholder="e.g. National Eco-Retail Partner, USA">
            </div>
          </div>

          <div class="row g-3 mb-3">
            <div class="col-md-3">
              <label class="form-label small fw-semibold">Display Order</label>
              <input type="number" name="order" class="form-control" value="{{ old('order', 0) }}">
            </div>
            <div class="col-md-3 d-flex align-items-end">
              <div class="form-check mb-2">
                <input class="form-check-input" type="checkbox" name="is_active" id="is_active" value="1" checked>
                <label class="form-check-label small fw-semibold" for="is_active">Active on Site</label>
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label class="form-label small fw-semibold">Quote / Testimonial Text *</label>
            <textarea name="quote" class="form-control" rows="4" required placeholder="Endorsement quote...">{{ old('quote') }}</textarea>
          </div>

          <div class="mb-4">
            <label class="form-label small fw-semibold">Partner / Organization Logo (SVG or PNG)</label>
            <input type="file" name="logo" class="form-control" accept="image/*">
          </div>

          <div class="text-end border-top pt-3">
            <a href="{{ route('admin.testimonials.index') }}" class="btn btn-light border me-2">Cancel</a>
            <button type="submit" class="btn btn-admin-forest">Save Testimonial</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

