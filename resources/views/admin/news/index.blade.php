@extends('admin.layouts.app')

@section('title', 'News & Stories')
@section('page_heading', 'News, Stories & Publications')

@section('content')
<div class="d-flex align-items-center justify-content-between mb-3">
  <div>
    <h5 class="fw-bold mb-0" style="color: var(--admin-forest);">News &amp; Green Stories</h5>
    <p class="text-muted small mb-0">Publish circular economy updates, artisan interviews, and impact reports</p>
  </div>
  <a href="{{ route('admin.news.create') }}" class="btn btn-admin-forest">
    <i class="bi bi-plus-lg me-1"></i> Post New Article
  </a>
</div>

<div class="admin-card">
  <div class="table-responsive">
    <table class="table align-middle mb-0">
      <thead class="table-light small text-muted">
        <tr>
          <th style="width: 100px;">Photo</th>
          <th>Article Title &amp; Category</th>
          <th>Date</th>
          <th>Status</th>
          <th class="text-end" style="width: 130px;">Actions</th>
        </tr>
      </thead>
      <tbody>
        @forelse($articles as $item)
          <tr>
            <td>
              <div class="rounded border overflow-hidden" style="width: 80px; height: 50px;">
                @if($item->image)
                  <img src="{{ asset('website/' . $item->image) }}" class="w-100 h-100 object-fit-cover" alt="{{ $item->title }}">
                @else
                  <div class="w-100 h-100 bg-light d-flex align-items-center justify-content-center text-muted small">No Img</div>
                @endif
              </div>
            </td>
            <td>
              <span class="badge bg-light text-secondary border small mb-1">{{ $item->category }}</span>
              <div class="fw-bold text-dark">{{ $item->title }}</div>
              <div class="text-muted small">{{ Str::limit($item->summary, 85) }}</div>
            </td>
            <td class="small text-muted text-nowrap">
              {{ $item->published_date ? $item->published_date->format('M d, Y') : 'Draft' }}
            </td>
            <td>
              @if($item->is_active)
                <span class="badge bg-success">Published</span>
              @else
                <span class="badge bg-secondary">Draft</span>
              @endif
            </td>
            <td class="text-end">
              <div class="btn-group btn-group-sm">
                <a href="{{ route('admin.news.edit', $item->id) }}" class="btn btn-light border" title="Edit">
                  <i class="bi bi-pencil-square"></i>
                </a>
                <form action="{{ route('admin.news.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Delete this article?');" class="d-inline">
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
            <td colspan="5" class="text-center py-4 text-muted">No news articles published yet.</td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>
@endsection

