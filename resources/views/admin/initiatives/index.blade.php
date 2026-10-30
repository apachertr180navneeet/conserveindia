@extends('admin.layouts.app')

@section('title', 'Flagship Initiatives')
@section('page_heading', 'Our Work & Initiatives')

@section('content')
<div class="d-flex align-items-center justify-content-between mb-3">
  <div>
    <h5 class="fw-bold mb-0" style="color: var(--admin-forest);">Flagship Initiatives</h5>
    <p class="text-muted small mb-0">Manage featured project cards shown across homepage and work sections</p>
  </div>
  <a href="{{ route('admin.initiatives.create') }}" class="btn btn-admin-forest">
    <i class="bi bi-plus-lg me-1"></i> Add Initiative
  </a>
</div>

<div class="admin-card">
  <div class="table-responsive">
    <table class="table align-middle mb-0">
      <thead class="table-light small text-muted">
        <tr>
          <th style="width: 70px;">Order</th>
          <th style="width: 110px;">Image</th>
          <th>Initiative Details</th>
          <th>Link Path</th>
          <th>Status</th>
          <th class="text-end" style="width: 130px;">Actions</th>
        </tr>
      </thead>
      <tbody>
        @forelse($initiatives as $item)
          <tr>
            <td class="fw-bold text-muted">#{{ $item->order }}</td>
            <td>
              <div class="rounded border overflow-hidden" style="width: 90px; height: 56px;">
                <img src="{{ asset('website/' . $item->image) }}" class="w-100 h-100 object-fit-cover" alt="{{ $item->title }}">
              </div>
            </td>
            <td>
              <span class="badge bg-light text-success border border-success-subtle small mb-1">{{ $item->meta }}</span>
              <div class="fw-bold text-dark">{{ $item->title }}</div>
              <div class="text-muted small">{{ Str::limit($item->short_description, 80) }}</div>
            </td>
            <td class="small"><code>{{ $item->link }}</code></td>
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
            <td colspan="6" class="text-center py-4 text-muted">No initiatives recorded yet.</td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>
@endsection

