@extends('admin.layouts.app')

@section('title', 'All Pages SEO Management')
@section('page_heading', 'Dynamic SEO Management')

@section('content')
<div class="d-flex align-items-center justify-content-between mb-3">
  <div>
    <h5 class="fw-bold mb-0" style="color: var(--admin-forest);">Page SEO Configurations</h5>
    <p class="text-muted small mb-0">Control meta titles, descriptions, OpenGraph tags, canonicals, and indexing directives for all pages</p>
  </div>
</div>

<div class="admin-card">
  <div class="table-responsive">
    <table class="table align-middle mb-0">
      <thead class="table-light small text-muted">
        <tr>
          <th style="width: 200px;">Page Name</th>
          <th style="width: 160px;">URL Path</th>
          <th>Meta Title &amp; Description</th>
          <th style="width: 120px;">Robots</th>
          <th class="text-end" style="width: 100px;">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach($pages as $item)
          <tr>
            <td>
              <div class="fw-bold text-dark">{{ $item->page_name }}</div>
              <span class="badge bg-light text-muted border small">Key: {{ $item->page_key }}</span>
            </td>
            <td>
              <a href="{{ url($item->url_path) }}" target="_blank" class="small text-decoration-none text-muted">
                <code>{{ $item->url_path }}</code> <i class="bi bi-box-arrow-up-right" style="font-size: 11px;"></i>
              </a>
            </td>
            <td>
              <div class="fw-semibold text-primary mb-1 small">{{ $item->meta_title }}</div>
              <div class="text-muted small" style="font-size: 12px; line-height: 1.4;">
                {{ Str::limit($item->meta_description, 95) }}
              </div>
            </td>
            <td>
              @if(str_contains($item->robots ?? '', 'noindex'))
                <span class="badge bg-danger-subtle text-danger border border-danger-subtle">noindex</span>
              @else
                <span class="badge bg-success-subtle text-success border border-success-subtle">index, follow</span>
              @endif
            </td>
            <td class="text-end">
              <a href="{{ route('admin.seo.edit', $item->id) }}" class="btn btn-sm btn-admin-forest">
                <i class="bi bi-pencil-square me-1"></i> Edit SEO
              </a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection

