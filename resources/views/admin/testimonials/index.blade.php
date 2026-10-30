@extends('admin.layouts.app')

@section('title', 'Testimonials')
@section('page_heading', 'Partner Testimonials & Endorsements')

@section('content')
<div class="d-flex align-items-center justify-content-between mb-3">
  <div>
    <h5 class="fw-bold mb-0" style="color: var(--admin-forest);">Partner Testimonials</h5>
    <p class="text-muted small mb-0">Manage partner endorsements displayed on the homepage</p>
  </div>
  <a href="{{ route('admin.testimonials.create') }}" class="btn btn-admin-forest">
    <i class="bi bi-plus-lg me-1"></i> Add Testimonial
  </a>
</div>

<div class="admin-card">
  <div class="table-responsive">
    <table class="table align-middle mb-0">
      <thead class="table-light small text-muted">
        <tr>
          <th style="width: 70px;">Order</th>
          <th style="width: 100px;">Logo</th>
          <th>Author &amp; Organization</th>
          <th>Quote</th>
          <th>Status</th>
          <th class="text-end" style="width: 130px;">Actions</th>
        </tr>
      </thead>
      <tbody>
        @forelse($testimonials as $item)
          <tr>
            <td class="fw-bold text-muted">#{{ $item->order }}</td>
            <td>
              <div class="rounded border p-1 bg-white text-center" style="width: 80px; height: 50px;">
                @if($item->logo)
                  <img src="{{ asset('website/' . $item->logo) }}" class="w-100 h-100 object-fit-contain" alt="{{ $item->author }}">
                @else
                  <span class="text-muted small">No Logo</span>
                @endif
              </div>
            </td>
            <td>
              <div class="fw-bold text-dark">{{ $item->author }}</div>
              <div class="text-muted small">{{ $item->designation }}</div>
            </td>
            <td class="small text-muted">
              &ldquo;{{ Str::limit($item->quote, 95) }}&rdquo;
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
                <a href="{{ route('admin.testimonials.edit', $item->id) }}" class="btn btn-light border" title="Edit">
                  <i class="bi bi-pencil-square"></i>
                </a>
                <form action="{{ route('admin.testimonials.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Delete this testimonial?');" class="d-inline">
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
            <td colspan="6" class="text-center py-4 text-muted">No testimonials added yet.</td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>
@endsection

