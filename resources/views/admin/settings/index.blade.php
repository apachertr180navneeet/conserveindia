@extends('admin.layouts.app')

@section('title', 'Site Settings')
@section('page_heading', 'Website Settings & Configuration')

@section('content')
<div class="row justify-content-center">
  <div class="col-lg-10">
    <div class="admin-card">
      <div class="admin-card-header">
        <h6 class="fw-bold mb-0" style="color: var(--admin-forest);">General Website Settings</h6>
      </div>
      <div class="admin-card-body">
        <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data">
          @csrf

          <div class="row g-3 mb-4">
            <div class="col-md-6">
              <label class="form-label small fw-semibold">Website Title</label>
              <input type="text" name="site_title" class="form-control" value="{{ old('site_title', $settings['site_title'] ?? 'Conserve India') }}" required>
            </div>
            <div class="col-md-6">
              <label class="form-label small fw-semibold">Official Contact Email</label>
              <input type="email" name="contact_email" class="form-control" value="{{ old('contact_email', $settings['contact_email'] ?? 'info@conserveindia.org') }}" required>
            </div>
            <div class="col-md-6">
              <label class="form-label small fw-semibold">Contact Phone Number</label>
              <input type="text" name="contact_phone" class="form-control" value="{{ old('contact_phone', $settings['contact_phone'] ?? '+91 98100 12345') }}">
            </div>
            <div class="col-md-6">
              <label class="form-label small fw-semibold">Headquarters / Physical Address</label>
              <input type="text" name="contact_address" class="form-control" value="{{ old('contact_address', $settings['contact_address'] ?? 'Conserve HRP, New Delhi, India') }}">
            </div>
          </div>

          <h6 class="fw-bold pb-2 border-bottom mb-3" style="color: var(--admin-forest);">Social Media Links</h6>
          <div class="row g-3 mb-4">
            <div class="col-md-6">
              <label class="form-label small fw-semibold"><i class="bi bi-facebook text-primary me-1"></i> Facebook URL</label>
              <input type="url" name="facebook_url" class="form-control" value="{{ old('facebook_url', $settings['facebook_url'] ?? '') }}">
            </div>
            <div class="col-md-6">
              <label class="form-label small fw-semibold"><i class="bi bi-instagram text-danger me-1"></i> Instagram URL</label>
              <input type="url" name="instagram_url" class="form-control" value="{{ old('instagram_url', $settings['instagram_url'] ?? '') }}">
            </div>
            <div class="col-md-6">
              <label class="form-label small fw-semibold"><i class="bi bi-linkedin text-info me-1"></i> LinkedIn URL</label>
              <input type="url" name="linkedin_url" class="form-control" value="{{ old('linkedin_url', $settings['linkedin_url'] ?? '') }}">
            </div>
            <div class="col-md-6">
              <label class="form-label small fw-semibold"><i class="bi bi-youtube text-danger me-1"></i> YouTube URL</label>
              <input type="url" name="youtube_url" class="form-control" value="{{ old('youtube_url', $settings['youtube_url'] ?? '') }}">
            </div>
          </div>

          <h6 class="fw-bold pb-2 border-bottom mb-3" style="color: var(--admin-forest);">Where We Have Worked: Map Graphic</h6>
          <div class="row g-3 mb-4">
            <div class="col-md-6">
              <label class="form-label small fw-semibold">Upload New Map Graphic</label>
              <input type="file" name="footprint_map_image" class="form-control" accept="image/*">
              <small class="text-muted">Upload an infographic map image for the "Where We Have Worked" homepage section.</small>
            </div>
            <div class="col-md-6 text-center">
              <label class="form-label small fw-semibold d-block text-start">Current Active Map</label>
              <div class="p-2 border rounded bg-light d-inline-block">
                <img src="{{ asset('website/' . ($settings['footprint_map_image'] ?? 'assets/images/india-map-footprint.jpg')) }}" alt="Current Map" style="max-height: 140px; max-width: 100%; object-fit: contain;">
              </div>
            </div>
          </div>

          <div class="text-end border-top pt-3">
            <button type="submit" class="btn btn-admin-forest px-4">
              <i class="bi bi-save me-1"></i> Save Settings
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

