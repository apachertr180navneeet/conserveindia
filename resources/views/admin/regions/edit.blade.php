@extends('admin.layouts.app')

@section('title', 'Edit Regional Hub')
@section('page_heading', 'Edit Regional Location')

@section('content')
<div class="row justify-content-center">
  <div class="col-lg-9">
    <div class="admin-card">
      <div class="admin-card-header">
        <h6 class="fw-bold mb-0">Edit Region: {{ $region->name }}</h6>
        <a href="{{ route('admin.regions.index') }}" class="btn btn-sm btn-outline-secondary">Back to List</a>
      </div>
      <div class="admin-card-body">
        <form action="{{ route('admin.regions.update', $region->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')

          <div class="row g-3 mb-3">
            <div class="col-md-6">
              <label class="form-label small fw-semibold">Region Name *</label>
              <input type="text" name="name" class="form-control" value="{{ old('name', $region->name) }}" required>
            </div>
            <div class="col-md-6">
              <label class="form-label small fw-semibold">Hub Type / Subtitle</label>
              <input type="text" name="subtitle" class="form-control" value="{{ old('subtitle', $region->subtitle) }}">
            </div>
          </div>

          <div class="row g-3 mb-3">
            <div class="col-md-4">
              <label class="form-label small fw-semibold">Impact Badge</label>
              <input type="text" name="badge" class="form-control" value="{{ old('badge', $region->badge) }}">
            </div>
            <div class="col-md-4">
              <label class="form-label small fw-semibold">Bootstrap Icon Class</label>
              <input type="text" name="icon" class="form-control" value="{{ old('icon', $region->icon) }}">
            </div>
            <div class="col-md-2">
              <label class="form-label small fw-semibold">Display Order</label>
              <input type="number" name="order" class="form-control" value="{{ old('order', $region->order) }}">
            </div>
            <div class="col-md-2 d-flex align-items-end">
              <div class="form-check mb-2">
                <input class="form-check-input" type="checkbox" name="is_active" id="is_active" value="1" {{ $region->is_active ? 'checked' : '' }}>
                <label class="form-check-label small fw-semibold" for="is_active">Active</label>
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label class="form-label small fw-semibold">Description</label>
            <textarea name="description" class="form-control" rows="3">{{ old('description', $region->description) }}</textarea>
          </div>

          <div class="row g-3 mb-4">
            <div class="col-md-8">
              <label class="form-label small fw-semibold">Change Card Photo</label>
              <input type="file" name="image" class="form-control" accept="image/*">
              <small class="text-muted">Leave empty to keep current photo.</small>
            </div>
            <div class="col-md-4 text-center">
              <label class="form-label small fw-semibold d-block text-start">Current Photo</label>
              @if($region->image)
                <div class="rounded border overflow-hidden d-inline-block" style="width: 120px; height: 75px;">
                  <img src="{{ asset('website/' . $region->image) }}" class="w-100 h-100 object-fit-cover" alt="Current Photo">
                </div>
              @else
                <span class="text-muted small">No photo uploaded</span>
              @endif
            </div>
          </div>

          <div class="text-end border-top pt-3">
            <a href="{{ route('admin.regions.index') }}" class="btn btn-light border me-2">Cancel</a>
            <button type="submit" class="btn btn-admin-forest">Update Regional Hub</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

