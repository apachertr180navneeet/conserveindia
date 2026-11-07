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

          <h6 class="fw-bold pb-2 border-bottom mb-3" style="color: var(--admin-forest);">About Us &amp; Impact Figures</h6>
          <div class="mb-4">
            <label class="form-label small fw-semibold">About Us Editorial Intro Lead</label>
            <textarea name="about_intro_lead" class="form-control" rows="3" placeholder="Conserve India operates at the intersection of environmental conservation and social justice...">{{ old('about_intro_lead', $settings['about_intro_lead'] ?? 'Conserve India operates at the intersection of environmental conservation and social justice—diverting urban plastic waste while empowering marginalized waste pickers and refugee women with dignified, employable opportunities.') }}</textarea>
            <small class="text-muted">Displayed prominently under the page title on the About Us page.</small>
          </div>

          <div class="row g-3 mb-4">
            <div class="col-md-3">
              <label class="form-label small fw-semibold">Plastic Diverted</label>
              <input type="text" name="impact_plastic_tons" class="form-control" value="{{ old('impact_plastic_tons', $settings['impact_plastic_tons'] ?? '500+ Tons') }}" placeholder="500+ Tons">
              <small class="text-muted">Landfill diversion stat</small>
            </div>
            <div class="col-md-3">
              <label class="form-label small fw-semibold">Ragpickers Organized</label>
              <input type="text" name="impact_ragpickers" class="form-control" value="{{ old('impact_ragpickers', $settings['impact_ragpickers'] ?? '3,000+') }}" placeholder="3,000+">
              <small class="text-muted">Waste collectors count</small>
            </div>
            <div class="col-md-3">
              <label class="form-label small fw-semibold">Women Recyclers Trained</label>
              <input type="text" name="impact_women_trained" class="form-control" value="{{ old('impact_women_trained', $settings['impact_women_trained'] ?? '100+') }}" placeholder="100+">
              <small class="text-muted">Women empowered</small>
            </div>
            <div class="col-md-3">
              <label class="form-label small fw-semibold">Retail Partners Worldwide</label>
              <input type="text" name="impact_retail_partners" class="form-control" value="{{ old('impact_retail_partners', $settings['impact_retail_partners'] ?? '1,000+') }}" placeholder="1,000+">
              <small class="text-muted">Export stockists</small>
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

