<?php
if (!isset($page_title)) {
    $page_title = "CONSERVE INDIA — Waste has a future. So do we.";
}
if (!isset($page_description)) {
    $page_description = "Conserve India - Renewing the world from people to planet. Discover our patented Handmade Recycled Plastic (HRP), artisan capacity building, and circular economy initiatives.";
}
if (!isset($current_page)) {
    $current_page = "home";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($page_title); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">

  <!-- Bootstrap 5.3 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&family=Caveat:wght@600;700&display=swap" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <!-- Top Navigation Bar -->
  <nav class="navbar navbar-expand-lg bg-white border-bottom border-1 border-light-subtle py-3 sticky-top">
    <div class="container px-lg-4">
      <!-- Brand Logo -->
      <a class="navbar-brand-conserve" href="index.php">
        <span class="brand-title">
          C<span class="brand-o">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" class="align-middle mx-1" xmlns="http://www.w3.org/2000/svg">
              <circle cx="12" cy="12" r="9.5" stroke="#173829" stroke-width="2.5" fill="none"/>
              <path d="M7 16.5 C 7.5 10.5, 13.5 7.5, 17 8 C 16.5 14, 10.5 17, 7 16.5 Z" fill="#2f704b"/>
              <path d="M7 16.5 C 11 13.5, 14 10.5, 17 8" stroke="#ffffff" stroke-width="0.9" stroke-linecap="round"/>
            </svg>
          </span>NSERVE
        </span>
        <span class="brand-subtitle">PEOPLE &middot; PLANET &middot; POSSIBILITY</span>
      </a>

      <!-- Mobile Toggle Button -->
      <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#conserveNavbar" aria-controls="conserveNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Nav Links & Dropdowns -->
      <div class="collapse navbar-collapse" id="conserveNavbar">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0 align-items-center">
          <li class="nav-item">
            <a class="nav-link custom-nav-link <?php echo ($current_page === 'about') ? 'active text-success fw-bold' : ''; ?>" href="about-us.php">About Us</a>
          </li>
          
          <!-- Our Work Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link custom-nav-link dropdown-toggle <?php echo ($current_page === 'our-work') ? 'active text-success fw-bold' : ''; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Our Work
            </a>
            <ul class="dropdown-menu dropdown-menu-conserve shadow">
              <li><a class="dropdown-item" href="capacity-building.php">Capacity Building</a></li>
              <li><a class="dropdown-item" href="capacity-building.php#recyclers">Grassroot Recyclers</a></li>
              <li><a class="dropdown-item" href="capacity-building.php#refugees">Refugee Livelihoods (Akseer)</a></li>
              <li><a class="dropdown-item" href="advocacy-and-lobbying.php">Advocacy + Lobbying</a></li>
              <li><a class="dropdown-item" href="sustainable-research-development.php">Sustainable R&amp;D (Patented HRP)</a></li>
              <li><a class="dropdown-item" href="sustainable-trade.php">Sustainable Trade</a></li>
              <li><a class="dropdown-item" href="consulting.php">Consulting &amp; Sensitization</a></li>
              <li><a class="dropdown-item" href="covid-relief-project-sahyog.php">COVID Relief (Project Sahyog)</a></li>
            </ul>
          </li>

          <!-- Buy Products Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link custom-nav-link dropdown-toggle <?php echo ($current_page === 'wholesale') ? 'active text-success fw-bold' : ''; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Buy Our Products
            </a>
            <ul class="dropdown-menu dropdown-menu-conserve shadow">
              <li><a class="dropdown-item" href="wholesale.php">Wholesale Catalog</a></li>
              <li><a class="dropdown-item" href="wholesale.php#bags">Bags &amp; Pouches (Upcycled Goodness)</a></li>
              <li><a class="dropdown-item" href="wholesale.php#handmade">Organically Handmade</a></li>
              <li><a class="dropdown-item" href="wholesale.php#aprons">Aprons &amp; Scarves</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item text-success fw-semibold" href="https://www.lifaffa.com" target="_blank" rel="noopener">Retail Store (Lifaffa.com) &nearr;</a></li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link custom-nav-link <?php echo ($current_page === 'impact') ? 'active text-success fw-bold' : ''; ?>" href="index.php#impact">Our Impact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link custom-nav-link <?php echo ($current_page === 'stories') ? 'active text-success fw-bold' : ''; ?>" href="green-stories.php">Green Stories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link custom-nav-link <?php echo ($current_page === 'contact') ? 'active text-success fw-bold' : ''; ?>" href="contact-us.php">Contact</a>
          </li>
        </ul>

        <div class="d-flex align-items-center mt-3 mt-lg-0">
          <a href="contact-us.php" class="btn-primary-forest">
            Partner With Us 
            <svg width="15" height="15" viewBox="0 0 16 16" fill="currentColor">
              <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </nav>
