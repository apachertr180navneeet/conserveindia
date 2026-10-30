<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $seo->meta_title ?? 'CONSERVE INDIA — Circular Economy, Patented Materials & Artisan Livelihoods' }}</title>
  <meta name="description" content="{{ $seo->meta_description ?? 'Conserve India - Renewing the world from people to planet. Discover our patented Handmade Recycled Plastic (HRP), artisan capacity building, and circular economy initiatives.' }}">
  @if(!empty($seo->meta_keywords))
    <meta name="keywords" content="{{ $seo->meta_keywords }}">
  @endif
  <meta name="robots" content="{{ $seo->robots ?? 'index, follow' }}">
  <link rel="canonical" href="{{ !empty($seo->canonical_url) ? $seo->canonical_url : url()->current() }}">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:locale" content="en_US">
  <meta property="og:site_name" content="Conserve India">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:title" content="{{ $seo->og_title ?: ($seo->meta_title ?? 'Conserve India') }}">
  <meta property="og:description" content="{{ $seo->og_description ?: ($seo->meta_description ?? '') }}">
  <meta property="og:image" content="{{ !empty($seo->og_image) ? (str_starts_with($seo->og_image, 'http') ? $seo->og_image : asset('website/' . $seo->og_image)) : asset('website/assets/images/conserve-logo.png') }}">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:url" content="{{ url()->current() }}">
  <meta name="twitter:title" content="{{ $seo->og_title ?: ($seo->meta_title ?? 'Conserve India') }}">
  <meta name="twitter:description" content="{{ $seo->og_description ?: ($seo->meta_description ?? '') }}">
  <meta name="twitter:image" content="{{ !empty($seo->og_image) ? (str_starts_with($seo->og_image, 'http') ? $seo->og_image : asset('website/' . $seo->og_image)) : asset('website/assets/images/conserve-logo.png') }}">

  @if(!empty($seo->schema_markup))
    {!! $seo->schema_markup !!}
  @endif

  <!-- Bootstrap 5.3 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <!-- Google Fonts: Manrope for headlines, Inter for body text -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Manrope:wght@400;500;600;700;800&family=Playfair+Display:ital,wght@0,500;0,600;1,400&family=Plus+Jakarta+Sans:wght@400;500;600&display=swap" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{ asset('website/css/style.css') }}">
  @stack('styles')
</head>
<body>

  @include('website.layouts.header')

  @yield('content')

  @include('website.layouts.footer')

  <!-- Bootstrap 5.3 Bundle JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  @stack('scripts')
</body>
</html>

