@extends('admin.layouts.app')

@section('title', 'Edit Service')
@section('page_heading', 'Edit Action Service')

@section('content')
<div class="row justify-content-center">
  <div class="col-lg-9">
    <div class="admin-card">
      <div class="admin-card-header">
        <h6 class="fw-bold mb-0">Edit Service: {{ $service->title }}</h6>
        <a href="{{ route('admin.services.index') }}" class="btn btn-sm btn-outline-secondary">Back to List</a>
      </div>
      <div class="admin-card-body">
        <form action="{{ route('admin.services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')

          <div class="mb-3">
            <label class="form-label small fw-semibold">Service Title *</label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $service->title) }}" required>
          </div>

          <div class="row g-3 mb-3">
            <div class="col-md-6">
              <label class="form-label small fw-semibold">Action Button Text</label>
              <input type="text" name="action_text" class="form-control" value="{{ old('action_text', $service->action_text) }}">
            </div>
            <div class="col-md-3">
              <label class="form-label small fw-semibold">Display Order</label>
              <input type="number" name="order" class="form-control" value="{{ old('order', $service->order) }}">
            </div>
            <div class="col-md-3 d-flex align-items-end">
              <div class="form-check mb-2">
                <input class="form-check-input" type="checkbox" name="is_active" id="is_active" value="1" {{ $service->is_active ? 'checked' : '' }}>
                <label class="form-check-label small fw-semibold" for="is_active">Active on Site</label>
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label class="form-label small fw-semibold">Target Link / URL</label>
            <input type="text" name="link" class="form-control" value="{{ old('link', $service->link) }}">
          </div>

          <div class="mb-3">
            <label class="form-label small fw-semibold">Description</label>
            <textarea name="description" class="form-control" rows="3">{{ old('description', $service->description) }}</textarea>
          </div>

          <div class="row g-3 mb-4">
            <div class="col-md-8">
              <label class="form-label small fw-semibold">Change Photo</label>
              <input type="file" name="image" class="form-control" accept="image/*">
              <small class="text-muted">Leave empty to keep current photo.</small>
            </div>
            <div class="col-md-4 text-center">
              <label class="form-label small fw-semibold d-block text-start">Current Photo</label>
              <div class="rounded border overflow-hidden d-inline-block" style="width: 130px; height: 80px;">
                <img src="{{ asset('website/' . $service->image) }}" class="w-100 h-100 object-fit-cover" alt="Current Image">
              </div>
            </div>
          </div>

          <div class="text-end border-top pt-3">
            <a href="{{ route('admin.services.index') }}" class="btn btn-light border me-2">Cancel</a>
            <button type="submit" class="btn btn-admin-forest">Update Service</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

