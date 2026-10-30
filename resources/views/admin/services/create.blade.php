@extends('admin.layouts.app')

@section('title', 'Add Service')
@section('page_heading', 'Add Action Service')

@section('content')
<div class="row justify-content-center">
  <div class="col-lg-9">
    <div class="admin-card">
      <div class="admin-card-header">
        <h6 class="fw-bold mb-0">Create Service</h6>
        <a href="{{ route('admin.services.index') }}" class="btn btn-sm btn-outline-secondary">Back to List</a>
      </div>
      <div class="admin-card-body">
        <form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data">
          @csrf

          <div class="mb-3">
            <label class="form-label small fw-semibold">Service Title *</label>
            <input type="text" name="title" class="form-control" value="{{ old('title') }}" required placeholder="e.g. Consulting and Advisory">
          </div>

          <div class="row g-3 mb-3">
            <div class="col-md-6">
              <label class="form-label small fw-semibold">Action Button Text</label>
              <input type="text" name="action_text" class="form-control" value="{{ old('action_text', 'Learn More &rarr;') }}">
            </div>
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
            <label class="form-label small fw-semibold">Target Link / URL</label>
            <input type="text" name="link" class="form-control" value="{{ old('link', 'services') }}" placeholder="e.g. services#consulting">
          </div>

          <div class="mb-3">
            <label class="form-label small fw-semibold">Description</label>
            <textarea name="description" class="form-control" rows="3" placeholder="Brief outline of this service...">{{ old('description') }}</textarea>
          </div>

          <div class="mb-4">
            <label class="form-label small fw-semibold">Service Card Photo *</label>
            <input type="file" name="image" class="form-control" accept="image/*" required>
          </div>

          <div class="text-end border-top pt-3">
            <a href="{{ route('admin.services.index') }}" class="btn btn-light border me-2">Cancel</a>
            <button type="submit" class="btn btn-admin-forest">Save Service</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

