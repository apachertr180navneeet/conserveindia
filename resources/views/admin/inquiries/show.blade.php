@extends('admin.layouts.app')

@section('title', 'View Inquiry')
@section('page_heading', 'Inquiry Details')

@section('content')
<div class="row justify-content-center">
  <div class="col-lg-8">
    <div class="admin-card">
      <div class="admin-card-header">
        <h6 class="fw-bold mb-0">Message from: {{ $inquiry->name }}</h6>
        <a href="{{ route('admin.inquiries.index') }}" class="btn btn-sm btn-outline-secondary">Back to Inquiries</a>
      </div>
      <div class="admin-card-body">
        <div class="row g-3 pb-3 mb-3 border-bottom">
          <div class="col-sm-6">
            <span class="text-muted small d-block">Sender Name</span>
            <span class="fw-bold fs-6">{{ $inquiry->name }}</span>
          </div>
          <div class="col-sm-6">
            <span class="text-muted small d-block">Email Address</span>
            <a href="mailto:{{ $inquiry->email }}" class="text-decoration-none fw-semibold">
              <i class="bi bi-envelope"></i> {{ $inquiry->email }}
            </a>
          </div>
          <div class="col-sm-6">
            <span class="text-muted small d-block">Phone Number</span>
            <span class="fw-semibold">{{ $inquiry->phone ?? 'Not provided' }}</span>
          </div>
          <div class="col-sm-6">
            <span class="text-muted small d-block">Received On</span>
            <span class="text-muted">{{ $inquiry->created_at->format('F d, Y · h:i A') }}</span>
          </div>
        </div>

        <div class="mb-4">
          <span class="text-muted small d-block mb-1">Subject</span>
          <div class="fw-bold fs-5 text-dark">{{ $inquiry->subject ?? 'General Website Inquiry' }}</div>
        </div>

        <div class="mb-4">
          <span class="text-muted small d-block mb-2">Message Content</span>
          <div class="p-3 bg-light rounded border text-secondary" style="line-height: 1.7; white-space: pre-wrap;">{{ $inquiry->message }}</div>
        </div>

        <div class="d-flex align-items-center justify-content-between pt-3 border-top">
          <a href="mailto:{{ $inquiry->email }}?subject=Re: {{ rawurlencode($inquiry->subject ?? 'Conserve India Inquiry') }}" class="btn btn-admin-forest">
            <i class="bi bi-reply-fill me-1"></i> Reply via Email
          </a>
          <form action="{{ route('admin.inquiries.destroy', $inquiry->id) }}" method="POST" onsubmit="return confirm('Permanently delete this inquiry?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-outline-danger btn-sm">
              <i class="bi bi-trash me-1"></i> Delete Inquiry
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

