@extends('admin.layouts.app')

@section('title', 'Dynamic Pages Management')
@section('page_heading', 'Dynamic Pages & Content Management')

@section('content')
<div class="d-flex align-items-center justify-content-between mb-3">
  <div>
    <h5 class="fw-bold mb-0" style="color: var(--admin-forest);">Dynamic Website Pages</h5>
    <p class="text-muted small mb-0">Control titles, subtitles, editorial text, banner imagery, and body content for all frontend pages</p>
  </div>
</div>

<div class="admin-card">
  <div class="table-responsive">
    <table class="table align-middle mb-0">
      <thead class="table-light small text-muted">
        <tr>
          <th style="width: 220px;">Page Name</th>
          <th style="width: 140px;">URL Path</th>
          <th style="width: 110px;">Banner</th>
          <th>Headline &amp; Subtitle</th>
          <th style="width: 100px;">Status</th>
          <th class="text-end" style="width: 130px;">Actions</th>
        </tr>
      </thead>
      <tbody>
        @forelse($pages as $item)
          <tr>
            <td>
              <div class="fw-bold text-dark">{{ $item->page_name }}</div>
              <span class="badge bg-light text-muted border small">Key: {{ $item->page_key }}</span>
            </td>
            <td>
              <a href="{{ url($item->slug ?: '/') }}" target="_blank" class="small text-decoration-none text-muted">
                <code>/{{ ltrim($item->slug, '/') }}</code> <i class="bi bi-box-arrow-up-right" style="font-size: 11px;"></i>
              </a>
            </td>
            <td>
              <div class="rounded border overflow-hidden" style="width: 80px; height: 48px; background: #f1f5f2;">
                @if($item->banner_image)
                  <img src="{{ str_starts_with($item->banner_image, 'http') ? $item->banner_image : asset('website/' . $item->banner_image) }}" class="w-100 h-100 object-fit-cover" alt="{{ $item->page_name }}">
                @else
                  <div class="w-100 h-100 d-flex align-items-center justify-content-center text-muted" style="font-size: 10px;">Default</div>
                @endif
              </div>
            </td>
            <td>
              @if($item->subtitle)
                <span class="badge bg-success-subtle text-success small mb-1">{{ $item->subtitle }}</span>
              @endif
              <div class="fw-semibold text-dark small">{{ $item->title ?: 'No Headline Set' }}</div>
              <div class="text-muted small" style="font-size: 12px;">
                {{ Str::limit($item->lead_text, 85) }}
              </div>
            </td>
            <td>
              @if($item->is_active)
                <span class="badge bg-success">Active</span>
              @else
                <span class="badge bg-secondary">Hidden</span>
              @endif
            </td>
            <td class="text-end">
              <a href="{{ route('admin.pages.edit', $item->id) }}" class="btn btn-sm btn-admin-forest">
                <i class="bi bi-pencil-square me-1"></i> Edit Page
              </a>
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="6" class="text-center py-4 text-muted">
              No dynamic pages found. Run migrations and seeders via <code>/run-migration?seed=1</code>.
            </td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>
@endsection

