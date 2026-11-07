@extends('admin.layouts.app')

@section('title', 'Add Initiative')
@section('page_heading', 'Add Initiative / Gallery Project')

@section('content')
<div class="row justify-content-center">
  <div class="col-lg-9">
    <div class="admin-card">
      <div class="admin-card-header">
        <h6 class="fw-bold mb-0">Create Initiative</h6>
        <a href="{{ route('admin.initiatives.index') }}" class="btn btn-sm btn-outline-secondary">Back to List</a>
      </div>
      <div class="admin-card-body">
        <form action="{{ route('admin.initiatives.store') }}" method="POST" enctype="multipart/form-data">
          @csrf

          <div class="row g-3 mb-3">
            <div class="col-md-8">
              <label class="form-label small fw-semibold">Initiative Title *</label>
              <input type="text" name="title" class="form-control" value="{{ old('title') }}" required placeholder="e.g. Patented HRP Material Innovation">
            </div>
            <div class="col-md-4">
              <label class="form-label small fw-semibold">Category (Filter Tab) *</label>
              <select name="category" class="form-select" required>
                @foreach($categories as $key => $label)
                  <option value="{{ $key }}" {{ old('category', 'community') === $key ? 'selected' : '' }}>
                    {{ $label }}
                  </option>
                @endforeach
              </select>
            </div>
          </div>

          <div class="row g-3 mb-3">
            <div class="col-md-6">
              <label class="form-label small fw-semibold">Badge / Location Info (Top-Left Badge)</label>
              <input type="text" name="meta" class="form-control" value="{{ old('meta') }}" placeholder="e.g. New Delhi · Patented HRP">
              <small class="text-muted">Displays as the dark badge on top-left of the photo card.</small>
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
            <label class="form-label small fw-semibold">Target URL or Anchor Link</label>
            <input type="text" name="link" class="form-control" value="{{ old('link') }}" placeholder="e.g. sustainable-research-development or https://example.com">
            <small class="text-muted">Can be internal slug (e.g. <code>sustainable-trade</code>) or external link (e.g. <code>https://...</code>).</small>
          </div>

          <div class="mb-3">
            <label class="form-label small fw-semibold">Short Summary / Description</label>
            <textarea name="short_description" class="form-control" rows="3" placeholder="Brief summary describing the initiative...">{{ old('short_description') }}</textarea>
          </div>

          <div class="mb-4">
            <label class="form-label small fw-semibold">Initiative Card Photo</label>
            <input type="file" name="image" class="form-control" accept="image/*">
            <small class="text-muted">Recommended: Landscape photo (approx 800x500px, JPG/PNG/WEBP).</small>
          </div>

          <div class="text-end border-top pt-3">
            <a href="{{ route('admin.initiatives.index') }}" class="btn btn-light border me-2">Cancel</a>
            <button type="submit" class="btn btn-admin-forest">Save Initiative</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
