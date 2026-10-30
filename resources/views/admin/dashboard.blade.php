@extends('admin.layouts.app')

@section('title', 'Admin Dashboard')
@section('page_heading', 'Dashboard Overview')

@section('content')
<div class="row g-3 mb-4">
  <!-- Stat 1: Sliders -->
  <div class="col-sm-6 col-xl-3">
    <div class="admin-card p-3 h-100">
      <div class="d-flex align-items-center justify-content-between mb-2">
        <span class="text-muted small fw-semibold">Hero Sliders</span>
        <div class="bg-primary bg-opacity-10 text-primary p-2 rounded">
          <i class="bi bi-images fs-5"></i>
        </div>
      </div>
      <h3 class="fw-bold mb-1">{{ $stats['sliders'] }}</h3>
      <a href="{{ route('admin.sliders.index') }}" class="text-decoration-none small text-primary fw-semibold">Manage Sliders &rarr;</a>
    </div>
  </div>

  <!-- Stat 2: Initiatives -->
  <div class="col-sm-6 col-xl-3">
    <div class="admin-card p-3 h-100">
      <div class="d-flex align-items-center justify-content-between mb-2">
        <span class="text-muted small fw-semibold">Initiatives (Our Work)</span>
        <div class="bg-success bg-opacity-10 text-success p-2 rounded">
          <i class="bi bi-flower1 fs-5"></i>
        </div>
      </div>
      <h3 class="fw-bold mb-1">{{ $stats['initiatives'] }}</h3>
      <a href="{{ route('admin.initiatives.index') }}" class="text-decoration-none small text-success fw-semibold">View Initiatives &rarr;</a>
    </div>
  </div>

  <!-- Stat 3: Regions -->
  <div class="col-sm-6 col-xl-3">
    <div class="admin-card p-3 h-100">
      <div class="d-flex align-items-center justify-content-between mb-2">
        <span class="text-muted small fw-semibold">Where We Worked</span>
        <div class="bg-warning bg-opacity-10 text-warning p-2 rounded">
          <i class="bi bi-geo-alt-fill fs-5"></i>
        </div>
      </div>
      <h3 class="fw-bold mb-1">{{ $stats['regions'] }}</h3>
      <a href="{{ route('admin.regions.index') }}" class="text-decoration-none small text-warning fw-semibold">Manage Regions &rarr;</a>
    </div>
  </div>

  <!-- Stat 4: Inquiries -->
  <div class="col-sm-6 col-xl-3">
    <div class="admin-card p-3 h-100">
      <div class="d-flex align-items-center justify-content-between mb-2">
        <span class="text-muted small fw-semibold">Contact Inquiries</span>
        <div class="bg-danger bg-opacity-10 text-danger p-2 rounded">
          <i class="bi bi-envelope-fill fs-5"></i>
        </div>
      </div>
      <div class="d-flex align-items-baseline gap-2 mb-1">
        <h3 class="fw-bold mb-0">{{ $stats['inquiries'] }}</h3>
        @if($stats['unread_inquiries'] > 0)
          <span class="badge bg-danger rounded-pill">{{ $stats['unread_inquiries'] }} unread</span>
        @endif
      </div>
      <a href="{{ route('admin.inquiries.index') }}" class="text-decoration-none small text-danger fw-semibold">Review Inquiries &rarr;</a>
    </div>
  </div>
</div>

<div class="row g-4">
  <!-- Recent Inquiries Table -->
  <div class="col-lg-8">
    <div class="admin-card">
      <div class="admin-card-header">
        <h6 class="fw-bold mb-0" style="color: var(--admin-forest);">Recent Contact Form Inquiries</h6>
        <a href="{{ route('admin.inquiries.index') }}" class="btn btn-sm btn-outline-secondary">View All</a>
      </div>
      <div class="table-responsive">
        <table class="table align-middle mb-0">
          <thead class="table-light small text-muted">
            <tr>
              <th>Sender</th>
              <th>Subject</th>
              <th>Date</th>
              <th>Status</th>
              <th class="text-end">Action</th>
            </tr>
          </thead>
          <tbody>
            @forelse($recentInquiries as $inquiry)
              <tr>
                <td>
                  <div class="fw-semibold text-dark">{{ $inquiry->name }}</div>
                  <div class="text-muted small">{{ $inquiry->email }}</div>
                </td>
                <td class="small">{{ Str::limit($inquiry->subject ?? 'General Inquiry', 25) }}</td>
                <td class="small text-muted">{{ $inquiry->created_at->format('M d, Y') }}</td>
                <td>
                  @if($inquiry->is_read)
                    <span class="badge bg-light text-muted border">Read</span>
                  @else
                    <span class="badge bg-danger-subtle text-danger border border-danger-subtle">New</span>
                  @endif
                </td>
                <td class="text-end">
                  <a href="{{ route('admin.inquiries.show', $inquiry->id) }}" class="btn btn-sm btn-light border">
                    <i class="bi bi-eye"></i> View
                  </a>
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="5" class="text-center py-4 text-muted small">
                  No inquiries received yet. Contact form submissions from the live site will appear here.
                </td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Quick Actions & Links -->
  <div class="col-lg-4">
    <div class="admin-card">
      <div class="admin-card-header">
        <h6 class="fw-bold mb-0" style="color: var(--admin-forest);">Quick Management</h6>
      </div>
      <div class="admin-card-body d-flex flex-column gap-2">
        <a href="{{ route('admin.sliders.create') }}" class="btn btn-light border text-start d-flex align-items-center justify-content-between p-2">
          <span><i class="bi bi-plus-circle text-success me-2"></i> Add New Slide</span>
          <i class="bi bi-chevron-right text-muted small"></i>
        </a>
        <a href="{{ route('admin.initiatives.create') }}" class="btn btn-light border text-start d-flex align-items-center justify-content-between p-2">
          <span><i class="bi bi-plus-circle text-success me-2"></i> Add Flagship Initiative</span>
          <i class="bi bi-chevron-right text-muted small"></i>
        </a>
        <a href="{{ route('admin.regions.create') }}" class="btn btn-light border text-start d-flex align-items-center justify-content-between p-2">
          <span><i class="bi bi-plus-circle text-success me-2"></i> Add Regional Location</span>
          <i class="bi bi-chevron-right text-muted small"></i>
        </a>
        <a href="{{ route('admin.testimonials.create') }}" class="btn btn-light border text-start d-flex align-items-center justify-content-between p-2">
          <span><i class="bi bi-plus-circle text-success me-2"></i> Add Partner Testimonial</span>
          <i class="bi bi-chevron-right text-muted small"></i>
        </a>
        <a href="{{ route('admin.news.create') }}" class="btn btn-light border text-start d-flex align-items-center justify-content-between p-2">
          <span><i class="bi bi-plus-circle text-success me-2"></i> Post News Article</span>
          <i class="bi bi-chevron-right text-muted small"></i>
        </a>
        <a href="{{ route('admin.settings.index') }}" class="btn btn-light border text-start d-flex align-items-center justify-content-between p-2">
          <span><i class="bi bi-gear-fill text-secondary me-2"></i> Edit Site Information</span>
          <i class="bi bi-chevron-right text-muted small"></i>
        </a>
      </div>
    </div>
  </div>
</div>
@endsection

