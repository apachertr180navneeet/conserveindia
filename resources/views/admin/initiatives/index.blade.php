@extends('admin.layouts.app')

@section('title', 'Flagship Initiatives & Gallery')
@section('page_heading', 'Our Work & Gallery Initiatives')

@section('content')
<div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-3">
  <div>
    <h5 class="fw-bold mb-0" style="color: var(--admin-forest);">Initiatives & Gallery Projects</h5>
    <p class="text-muted small mb-0">Manage project cards and filter categories displayed on the Gallery and Work pages</p>
  </div>
  <div class="d-flex gap-2">
    <a href="{{ url('/gallery') }}" target="_blank" class="btn btn-outline-secondary">
      <i class="bi bi-box-arrow-up-right me-1"></i> Preview Gallery
    </a>
    <a href="{{ route('admin.initiatives.create') }}" class="btn btn-admin-forest">
      <i class="bi bi-plus-lg me-1"></i> Add Initiative
    </a>
  </div>
</div>

<div class="admin-card">
  <div class="table-responsive">
    <table class="table align-middle mb-0">
      <thead class="table-light small text-muted">
        <tr>
          <th style="width: 70px;">Order</th>
          <th style="width: 90px;">Image</th>
          <th>Initiative Details</th>
          <th>Category / Filter</th>
          <th>Link Path</th>
          <th>Status</th>
          <th class="text-end" style="width: 110px;">Actions</th>
        </tr>
      </thead>
      <tbody>
        @forelse($initiatives as $item)
          <tr>
            <td class="fw-bold text-muted">#{{ $item->order }}</td>
            <td>
              <div class="rounded border overflow-hidden" style="width: 75px; height: 50px; background: #e8eee9;">
                <img src="{{ $item->image_url }}" class="w-100 h-100 object-fit-cover" alt="{{ $item->title }}">
              </div>
            </td>
            <td>
              @if($item->meta)
                <span class="badge bg-light text-dark border small mb-1">{{ $item->meta }}</span>
              @endif
              <div class="fw-bold text-dark">{{ $item->title }}</div>
              <div class="text-muted small">{{ Str::limit($item->short_description, 75) }}</div>
            </td>
            <td>
              <span class="badge bg-success-subtle text-success border border-success-subtle">
                {{ $item->category_label }}
              </span>
              <div class="text-muted" style="font-size: 11px;">#{{ $item->category }}</div>
            </td>
            <td class="small">
              @if($item->link)
                <code class="text-secondary">{{ Str::limit($item->link, 25) }}</code>
              @else
                <span class="text-muted">—</span>
              @endif
            </td>
            <td>
              @if($item->is_active)
                <span class="badge bg-success">Active</span>
              @else
                <span class="badge bg-secondary">Inactive</span>
              @endif
            </td>
            <td class="text-end">
              <div class="btn-group btn-group-sm">
                <a href="{{ route('admin.initiatives.edit', $item->id) }}" class="btn btn-light border" title="Edit">
                  <i class="bi bi-pencil-square"></i>
                </a>
                <form action="{{ route('admin.initiatives.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Delete this initiative?');" class="d-inline">
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
            <td colspan="7" class="text-center py-4 text-muted">No initiatives recorded yet. Click "Add Initiative" or run seeders to populate.</td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>
@endsection
