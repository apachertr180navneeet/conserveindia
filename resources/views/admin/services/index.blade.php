@extends('admin.layouts.app')

@section('title', 'Action Services')
@section('page_heading', 'Action & Consulting Services')

@section('content')
<div class="d-flex align-items-center justify-content-between mb-3">
  <div>
    <h5 class="fw-bold mb-0" style="color: var(--admin-forest);">Services &amp; Action Cards</h5>
    <p class="text-muted small mb-0">Manage services featured on the homepage and services portal</p>
  </div>
  <a href="{{ route('admin.services.create') }}" class="btn btn-admin-forest">
    <i class="bi bi-plus-lg me-1"></i> Add Service
  </a>
</div>

<div class="admin-card">
  <div class="table-responsive">
    <table class="table align-middle mb-0">
      <thead class="table-light small text-muted">
        <tr>
          <th style="width: 70px;">Order</th>
          <th style="width: 110px;">Image</th>
          <th>Service Title &amp; Description</th>
          <th>Link Path</th>
          <th>Status</th>
          <th class="text-end" style="width: 130px;">Actions</th>
        </tr>
      </thead>
      <tbody>
        @forelse($services as $item)
          <tr>
            <td class="fw-bold text-muted">#{{ $item->order }}</td>
            <td>
              <div class="rounded border overflow-hidden" style="width: 90px; height: 56px;">
                <img src="{{ asset('website/' . $item->image) }}" class="w-100 h-100 object-fit-cover" alt="{{ $item->title }}">
              </div>
            </td>
            <td>
              <div class="fw-bold text-dark">{{ $item->title }}</div>
              <div class="text-muted small">{{ Str::limit($item->description, 85) }}</div>
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
                <a href="{{ route('admin.services.edit', $item->id) }}" class="btn btn-light border" title="Edit">
                  <i class="bi bi-pencil-square"></i>
                </a>
                <form action="{{ route('admin.services.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Delete this service?');" class="d-inline">
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
            <td colspan="6" class="text-center py-4 text-muted">No services created yet.</td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>
@endsection

