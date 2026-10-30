@extends('admin.layouts.app')

@section('title', 'Hero Sliders')
@section('page_heading', 'Hero Carousel Sliders')

@section('content')
<div class="d-flex align-items-center justify-content-between mb-3">
  <div>
    <h5 class="fw-bold mb-0" style="color: var(--admin-forest);">Hero Sliders</h5>
    <p class="text-muted small mb-0">Manage slides shown in the homepage header banner</p>
  </div>
  <a href="{{ route('admin.sliders.create') }}" class="btn btn-admin-forest">
    <i class="bi bi-plus-lg me-1"></i> Add New Slide
  </a>
</div>

<div class="admin-card">
  <div class="table-responsive">
    <table class="table align-middle mb-0">
      <thead class="table-light small text-muted">
        <tr>
          <th style="width: 70px;">Order</th>
          <th style="width: 120px;">Image</th>
          <th>Title &amp; Subtitle</th>
          <th>Buttons</th>
          <th>Status</th>
          <th class="text-end" style="width: 140px;">Actions</th>
        </tr>
      </thead>
      <tbody>
        @forelse($sliders as $slider)
          <tr>
            <td class="fw-bold text-muted">#{{ $slider->order }}</td>
            <td>
              <div class="rounded border overflow-hidden" style="width: 100px; height: 60px;">
                <img src="{{ asset('website/' . $slider->image) }}" alt="{{ $slider->title }}" class="w-100 h-100 object-fit-cover">
              </div>
            </td>
            <td>
              @if($slider->tag)
                <span class="badge bg-success bg-opacity-10 text-success small mb-1">{{ $slider->tag }}</span>
              @endif
              <div class="fw-bold text-dark">{{ $slider->title }}</div>
              <div class="text-muted small">{{ Str::limit($slider->subtitle, 85) }}</div>
            </td>
            <td class="small">
              @if($slider->button_text)
                <div><i class="bi bi-link-45deg"></i> {{ $slider->button_text }} &rarr; <code>{{ $slider->button_link }}</code></div>
              @endif
              @if($slider->secondary_button_text)
                <div class="text-muted"><i class="bi bi-link-45deg"></i> {{ $slider->secondary_button_text }} &rarr; <code>{{ $slider->secondary_button_link }}</code></div>
              @endif
            </td>
            <td>
              @if($slider->is_active)
                <span class="badge bg-success">Active</span>
              @else
                <span class="badge bg-secondary">Inactive</span>
              @endif
            </td>
            <td class="text-end">
              <div class="btn-group btn-group-sm">
                <a href="{{ route('admin.sliders.edit', $slider->id) }}" class="btn btn-light border" title="Edit">
                  <i class="bi bi-pencil-square"></i>
                </a>
                <form action="{{ route('admin.sliders.destroy', $slider->id) }}" method="POST" onsubmit="return confirm('Delete this slide?');" class="d-inline">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-light border text-danger" title="Delete">
                    <i class="bi bi-trash"></i>
                  </button>
                </form>
              </div>
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="6" class="text-center py-4 text-muted">No sliders configured yet.</td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>
@endsection

