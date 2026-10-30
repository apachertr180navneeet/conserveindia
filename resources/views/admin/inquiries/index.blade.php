@extends('admin.layouts.app')

@section('title', 'Inquiries')
@section('page_heading', 'Contact Form Inquiries')

@section('content')
<div class="d-flex align-items-center justify-content-between mb-3">
  <div>
    <h5 class="fw-bold mb-0" style="color: var(--admin-forest);">Contact Form Inquiries</h5>
    <p class="text-muted small mb-0">Messages submitted by visitors through the website contact and partnership forms</p>
  </div>
</div>

<div class="admin-card">
  <div class="table-responsive">
    <table class="table align-middle mb-0">
      <thead class="table-light small text-muted">
        <tr>
          <th>Sender Info</th>
          <th>Subject &amp; Snippet</th>
          <th>Received Date</th>
          <th>Status</th>
          <th class="text-end" style="width: 130px;">Actions</th>
        </tr>
      </thead>
      <tbody>
        @forelse($inquiries as $inquiry)
          <tr class="{{ !$inquiry->is_read ? 'table-warning bg-opacity-25' : '' }}">
            <td>
              <div class="fw-bold text-dark">{{ $inquiry->name }}</div>
              <div class="text-muted small">
                <i class="bi bi-envelope"></i> {{ $inquiry->email }}
                @if($inquiry->phone)
                  &middot; <i class="bi bi-telephone"></i> {{ $inquiry->phone }}
                @endif
              </div>
            </td>
            <td>
              <div class="fw-semibold text-dark">{{ $inquiry->subject ?? 'General Inquiry' }}</div>
              <div class="text-muted small">{{ Str::limit($inquiry->message, 70) }}</div>
            </td>
            <td class="small text-muted text-nowrap">
              {{ $inquiry->created_at->format('M d, Y · h:i A') }}
            </td>
            <td>
              @if($inquiry->is_read)
                <span class="badge bg-light text-muted border">Read</span>
              @else
                <span class="badge bg-danger rounded-pill">Unread</span>
              @endif
            </td>
            <td class="text-end">
              <div class="btn-group btn-group-sm">
                <a href="{{ route('admin.inquiries.show', $inquiry->id) }}" class="btn btn-light border" title="View Message">
                  <i class="bi bi-eye"></i> View
                </a>
                <form action="{{ route('admin.inquiries.destroy', $inquiry->id) }}" method="POST" onsubmit="return confirm('Delete this message?');" class="d-inline">
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
            <td colspan="5" class="text-center py-4 text-muted">
              No inquiries received yet.
            </td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>
  @if($inquiries->hasPages())
    <div class="p-3 border-top">
      {{ $inquiries->links() }}
    </div>
  @endif
</div>
@endsection

