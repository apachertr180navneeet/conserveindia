@extends('admin.layouts.app')

@section('title', 'Add Regional Hub')
@section('page_heading', 'Add Regional Location')

@section('content')
<div class="row justify-content-center">
  <div class="col-lg-9">
    <div class="admin-card">
      <div class="admin-card-header">
        <h6 class="fw-bold mb-0">Create Regional Hub</h6>
        <a href="{{ route('admin.regions.index') }}" class="btn btn-sm btn-outline-secondary">Back to List</a>
      </div>
      <div class="admin-card-body">
        <form action="{{ route('admin.regions.store') }}" method="POST" enctype="multipart/form-data">
          @csrf

          <div class="row g-3 mb-3">
            <div class="col-md-6">
              <label class="form-label small fw-semibold">Region Name *</label>
              <input type="text" name="name" class="form-control" value="{{ old('name') }}" required placeholder="e.g. Delhi-NCR">
            </div>
            <div class="col-md-6">
              <label class="form-label small fw-semibold">Hub Type / Subtitle</label>
              <input type="text" name="subtitle" class="form-control" value="{{ old('subtitle') }}" placeholder="e.g. Central Innovation Hub">
            </div>
          </div>

          <div class="row g-3 mb-3">
            <div class="col-md-4">
              <label class="form-label small fw-semibold">Impact Badge</label>
              <input type="text" name="badge" class="form-control" value="{{ old('badge') }}" placeholder="e.g. 3,000+ Waste Collectors">
            </div>
            <div class="col-md-4">
              <label class="form-label small fw-semibold">Bootstrap Icon Class</label>
              <input type="text" name="icon" class="form-control" value="{{ old('icon', 'bi-geo-alt-fill') }}" placeholder="e.g. bi-geo-alt-fill">
            </div>
            <div class="col-md-2">
              <label class="form-label small fw-semibold">Display Order</label>
              <input type="number" name="order" class="form-control" value="{{ old('order', 0) }}">
            </div>
            <div class="col-md-2 d-flex align-items-end">
              <div class="form-check mb-2">
                <input class="form-check-input" type="checkbox" name="is_active" id="is_active" value="1" checked>
                <label class="form-check-label small fw-semibold" for="is_active">Active</label>
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label class="form-label small fw-semibold">Description</label>
            <textarea name="description" class="form-control" rows="3" placeholder="Summary of grassroots programs in this cluster...">{{ old('description') }}</textarea>
          </div>

          <div class="mb-4">
            <label class="form-label small fw-semibold">Card Photo (Optional)</label>
            <input type="file" name="image" class="form-control" accept="image/*">
            <small class="text-muted">Will be displayed on top of the regional card.</small>
          </div>

          <div class="text-end border-top pt-3">
            <a href="{{ route('admin.regions.index') }}" class="btn btn-light border me-2">Cancel</a>
            <button type="submit" class="btn btn-admin-forest">Save Regional Hub</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

