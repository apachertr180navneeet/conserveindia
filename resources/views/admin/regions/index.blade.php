@extends('admin.layouts.app')

@section('title', 'Where We Have Worked - Regions')
@section('page_heading', 'Where We Have Worked / Regions')

@section('content')
<div class="d-flex align-items-center justify-content-between mb-3">
  <div>
    <h5 class="fw-bold mb-0" style="color: var(--admin-forest);">Where We Have Worked: Regional Hubs</h5>
    <p class="text-muted small mb-0">Manage the 4 regional impact cards shown under the geographic map</p>
  </div>
  <a href="{{ route('admin.regions.create') }}" class="btn btn-admin-forest">
    <i class="bi bi-plus-lg me-1"></i> Add Regional Hub
  </a>
</div>

<div class="admin-card">
  <div class="table-responsive">
    <table class="table align-middle mb-0">
      <thead class="table-light small text-muted">
        <tr>
          <th style="width: 70px;">Order</th>
          <th style="width: 100px;">Photo</th>
          <th>Region &amp; Hub</th>
          <th>Impact Badge</th>
          <th>Status</th>
          <th class="text-end" style="width: 130px;">Actions</th>
        </tr>
      </thead>
      <tbody>
        @forelse($regions as $item)
          <tr>
            <td class="fw-bold text-muted">#{{ $item->order }}</td>
            <td>
              <div class="rounded border overflow-hidden" style="width: 80px; height: 50px;">
                @if($item->image)
                  <img src="{{ asset('website/' . $item->image) }}" class="w-100 h-100 object-fit-cover" alt="{{ $item->name }}">
                @else
                  <div class="w-100 h-100 bg-light d-flex align-items-center justify-content-center text-muted small">No Img</div>
                @endif
              </div>
            </td>
            <td>
              <div class="d-flex align-items-center gap-2">
                <i class="bi {{ $item->icon ?? 'bi-geo-alt-fill' }} text-success"></i>
                <div>
                  <div class="fw-bold text-dark">{{ $item->name }}</div>
                  <div class="text-muted small">{{ $item->subtitle }}</div>
                </div>
              </div>
              <div class="text-muted small mt-1">{{ Str::limit($item->description, 80) }}</div>
            </td>
            <td>
              <span class="badge bg-light text-success border border-success-subtle">{{ $item->badge }}</span>
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
                <a href="{{ route('admin.regions.edit', $item->id) }}" class="btn btn-light border" title="Edit">
                  <i class="bi bi-pencil-square"></i>
                </a>
                <form action="{{ route('admin.regions.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Delete this regional hub?');" class="d-inline">
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
            <td colspan="6" class="text-center py-4 text-muted">No regional hubs added yet.</td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>
@endsection

