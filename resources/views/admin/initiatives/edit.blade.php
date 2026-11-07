@extends('admin.layouts.app')

@section('title', 'Edit Initiative')
@section('page_heading', 'Edit Initiative / Gallery Project')

@section('content')
<div class="row justify-content-center">
  <div class="col-lg-9">
    <div class="admin-card">
      <div class="admin-card-header">
        <h6 class="fw-bold mb-0">Edit Initiative: {{ $initiative->title }}</h6>
        <a href="{{ route('admin.initiatives.index') }}" class="btn btn-sm btn-outline-secondary">Back to List</a>
      </div>
      <div class="admin-card-body">
        <form action="{{ route('admin.initiatives.update', $initiative->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')

          <div class="row g-3 mb-3">
            <div class="col-md-8">
              <label class="form-label small fw-semibold">Initiative Title *</label>
              <input type="text" name="title" class="form-control" value="{{ old('title', $initiative->title) }}" required>
            </div>
            <div class="col-md-4">
              <label class="form-label small fw-semibold">Category (Filter Tab) *</label>
              <select name="category" class="form-select" required>
                @foreach($categories as $key => $label)
                  <option value="{{ $key }}" {{ old('category', $initiative->category) === $key ? 'selected' : '' }}>
                    {{ $label }}
                  </option>
                @endforeach
                @if(!empty($initiative->category) && !isset($categories[$initiative->category]))
                  <option value="{{ $initiative->category }}" selected>
                    {{ ucwords(str_replace(['-', '_'], ' ', $initiative->category)) }}
                  </option>
                @endif
              </select>
            </div>
          </div>

          <div class="row g-3 mb-3">
            <div class="col-md-6">
              <label class="form-label small fw-semibold">Badge / Location Info (Top-Left Badge)</label>
              <input type="text" name="meta" class="form-control" value="{{ old('meta', $initiative->meta) }}">
              <small class="text-muted">Displays as the dark badge on top-left of the photo card.</small>
            </div>
            <div class="col-md-3">
              <label class="form-label small fw-semibold">Display Order</label>
              <input type="number" name="order" class="form-control" value="{{ old('order', $initiative->order) }}">
            </div>
            <div class="col-md-3 d-flex align-items-end">
              <div class="form-check mb-2">
                <input class="form-check-input" type="checkbox" name="is_active" id="is_active" value="1" {{ $initiative->is_active ? 'checked' : '' }}>
                <label class="form-check-label small fw-semibold" for="is_active">Active on Site</label>
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label class="form-label small fw-semibold">Target URL or Anchor Link</label>
            <input type="text" name="link" class="form-control" value="{{ old('link', $initiative->link) }}">
            <small class="text-muted">Can be internal slug (e.g. <code>sustainable-research-development</code>) or external link (e.g. <code>https://...</code>).</small>
          </div>

          <div class="mb-3">
            <label class="form-label small fw-semibold">Short Summary / Description</label>
            <textarea name="short_description" class="form-control" rows="3">{{ old('short_description', $initiative->short_description) }}</textarea>
          </div>

          <div class="row g-3 mb-4">
            <div class="col-md-8">
              <label class="form-label small fw-semibold">Change Photo</label>
              <input type="file" name="image" class="form-control" accept="image/*">
              <small class="text-muted">Leave empty to keep current photo.</small>
            </div>
            <div class="col-md-4 text-center">
              <label class="form-label small fw-semibold d-block text-start">Current Photo</label>
              <div class="rounded border overflow-hidden d-inline-block" style="width: 130px; height: 80px; background: #e8eee9;">
                <img src="{{ $initiative->image_url }}" class="w-100 h-100 object-fit-cover" alt="Current Image">
              </div>
            </div>
          </div>

          <div class="text-end border-top pt-3">
            <a href="{{ route('admin.initiatives.index') }}" class="btn btn-light border me-2">Cancel</a>
            <button type="submit" class="btn btn-admin-forest">Update Initiative</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
