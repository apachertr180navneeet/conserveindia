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

  <!-- Google Fonts: Manrope for headlines, Inter for body text -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Manrope:wght@400;500;600;700;800&family=Playfair+Display:ital,wght@0,500;0,600;1,400&family=Plus+Jakarta+Sans:wght@400;500;600&display=swap" rel="stylesheet">


  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/style.css?v=<?php echo file_exists(__DIR__ . '/../css/style.css') ? filemtime(__DIR__ . '/../css/style.css') : time(); ?>">
</head>
<body>

  <!-- Top Navigation Bar -->
  <nav class="navbar navbar-expand-lg bg-white border-bottom border-1 border-light-subtle py-3 sticky-top">
    <div class="container px-lg-4">
      <!-- Brand Logo -->
      <a class="navbar-brand-conserve py-1" href="index.php" aria-label="Conserve India - People, Planet, Products">
        <img src="assets/images/conserve-logo.png" alt="Conserve - People, Planet, Products" class="brand-logo-img" width="165" height="52">
      </a>

      <!-- Mobile Toggle Button -->
      <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#conserveNavbar" aria-controls="conserveNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Nav Links & Dropdowns -->
      <div class="collapse navbar-collapse" id="conserveNavbar">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
          
          <!-- 1. Home -->
          <li class="nav-item">
            <a class="nav-link custom-nav-link <?php echo ($current_page === 'home') ? 'active text-success fw-bold' : ''; ?>" href="index.php">Home</a>
          </li>

          <!-- 2. About Us -->
          <li class="nav-item">
            <a class="nav-link custom-nav-link <?php echo ($current_page === 'about') ? 'active text-success fw-bold' : ''; ?>" href="about-us.php">About Us</a>
          </li>
          
          <!-- 3. Our Work Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link custom-nav-link dropdown-toggle <?php echo ($current_page === 'our-work') ? 'active text-success fw-bold' : ''; ?>" href="our-work.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Our Work
            </a>
            <ul class="dropdown-menu dropdown-menu-conserve shadow">
              <li><a class="dropdown-item fw-semibold" href="our-work.php">Our Work Overview</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="capacity-building.php">Circular Livelihoods &amp; Artisans</a></li>
              <li><a class="dropdown-item" href="capacity-building.php#recyclers">Grassroot Recyclers Training</a></li>
              <li><a class="dropdown-item" href="capacity-building.php#refugees">Refugee Livelihoods (Akseer)</a></li>
              <li><a class="dropdown-item" href="sustainable-research-development.php">Research &amp; Informed Making (Patented HRP)</a></li>
              <li><a class="dropdown-item" href="advocacy-and-lobbying.php">Events &amp; Policy Advocacy</a></li>
              <li><a class="dropdown-item" href="our-work.php#zero-waste">Zero Waste Communities</a></li>
              <li><a class="dropdown-item" href="sustainable-trade.php">Sustainable Trade &amp; B2B</a></li>
              <li><a class="dropdown-item" href="covid-relief-project-sahyog.php">Community Relief (Project Sahyog)</a></li>
            </ul>
          </li>

          <!-- 4. Our Services Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link custom-nav-link dropdown-toggle <?php echo ($current_page === 'services') ? 'active text-success fw-bold' : ''; ?>" href="services.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Our Services
            </a>
            <ul class="dropdown-menu dropdown-menu-conserve shadow">
              <li><a class="dropdown-item fw-semibold" href="services.php">Services Overview</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="services.php#consulting">Consulting &amp; Advisory</a></li>
              <li><a class="dropdown-item" href="services.php#events-outreach">Events and Outreach</a></li>
              <li><a class="dropdown-item" href="services.php#education-training">Education and Training (Incubator)</a></li>
              <li><a class="dropdown-item" href="services.php#immersion-tours">Stay &amp; Learn: Immersion Tours</a></li>
            </ul>
          </li>

          <!-- 5. Latest Updates -->
          <li class="nav-item">
            <a class="nav-link custom-nav-link <?php echo ($current_page === 'updates') ? 'active text-success fw-bold' : ''; ?>" href="latest-updates.php">
              Latest Updates
            </a>
          </li>

          <!-- 6. Gallery -->
          <li class="nav-item">
            <a class="nav-link custom-nav-link <?php echo ($current_page === 'gallery') ? 'active text-success fw-bold' : ''; ?>" href="gallery.php">
              Gallery
            </a>
          </li>

          <!-- 7. Connect With Us -->
          <li class="nav-item">
            <a class="nav-link custom-nav-link <?php echo ($current_page === 'connect') ? 'active text-success fw-bold' : ''; ?>" href="connect-with-us.php">
              Connect With Us
            </a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
