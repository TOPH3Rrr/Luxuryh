<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>New Luxury Tourism</title>

<!-- MDB -->
<link rel="stylesheet" href="css/mdb.min.css" />

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>

<style>

/* ✅ FIX overflow issue */
html, body {
  overflow-x: hidden;
}

/* Navbar dropdown */
.dropdown-menu {
  background-color: transparent;
}

.dropdown-item {
  color: #fff;
}

.dropdown-item:hover {
  background-color: #2e2b2b;
  color: #fff;
}

/* Logo */
.logo-img {
  height: 50px;
  transform: scale(2.2);
}

/* Body logo */
.body-logo {
  max-width: 300px;
  height: auto;
  display: block;
  margin: 0 auto;
}

/* Title */
.margin-top {
  margin-top: 10px;
  font-family: 'Poppins', sans-serif;
  color: #c19a6b;
  font-weight: 600;
}

/* Card icon */
.island-icon {
  font-size: 60px;
  color: #d4af37;
  margin-bottom: 10px;
}

/* Card fix */
.card {
  border: none;
  box-shadow: 0 4px 15px rgba(0,0,0,0.08);
}
.full-img {
  max-height: 550px;
  width: 100%;
  height: auto;
  display: block;
}
.overlap-cards {
  margin-top: -100px; /* about 1 inch feel */
  position: relative;
  z-index: 10;
}
.card-img-top {
  height: 300px;
  object-fit: cover;
}


</style>

</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    

    <a class="navbar-brand" href="#">
      <img src="img/LOGO5.png" class="logo-img" alt="Logo">
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav ms-auto">

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Tours</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">City Tour</a></li>
            <li><a class="dropdown-item" href="#">Desert Safari-Half Day</a></li>
            <li><a class="dropdown-item" href="#">North of Qatar Tour</a></li>
            <li><a class="dropdown-item" href="#">West of Qatar Tour</a></li>
            <li><a class="dropdown-item" href="#">Desert Safari-Full Day</a></li>
            <li><a class="dropdown-item" href="#">Overnight Desert Safari Tour</a></li>
          </ul>
        </li>

        <li class="nav-item"><a class="nav-link">Home</a></li>
        <li class="nav-item"><a class="nav-link">About Us</a></li>

      </ul>

    </div>

  </div>
</nav>


<div class="position-relative text-center">

  <img src="img/qback.jpg" class="img-fluid full-img" alt="...">

  <div class="position-absolute top-50 start-50 translate-middle text-white">
    <h1>Welcome to New Luxury Tourism</h1>
    <p>Experience Luxury Travel in Qatar and Beyond</p>
  </div>
</div>

<div class="container py-4 text-center overlap-cards">
  <!-- CARDS -->
  <div class="row row-cols-1 row-cols-md-4 g-3 mt-0">

    <div class="col">
      <div class="card">
        <div class="card-body text-center">
          <i class="fas fa-umbrella-beach island-icon"></i>
          <h5>Local Tours</h5>
          <p>Qatar Experiences</p>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card">
        <div class="card-body text-center">
          <i class="fas fa-plane island-icon"></i>
          <h5>International</h5>
          <p>Travel Packages</p>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card">
        <div class="card-body text-center">
          <i class="fas fa-hotel island-icon"></i>
          <h5>Hotels</h5>
          <p>Reservations</p>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card">
        <div class="card-body text-center">
          <i class="fas fa-car island-icon"></i>
          <h5>Transfers</h5>
          <p>Car Rentals & Airport</p>
        </div>
      </div>
    </div>

  </div>

</div>


<div class="container py-4 text-center">
<h2 class="mb-4">Featured Destinations</h2>

<div class="row row-cols-1 row-cols-md-4 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="img/doha1.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Doha Corniche</h5>
        <p class="card-text">Enjoy scenic waterfront walks, relaxing dhow cruises, and breathtaking views of the modern Doha Skyline along the coast.</p>
      </div>
      <div class="card-footer">
          <a href="#" class="btn btn-primary" style="background-color: #d4af37;">View more</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="img/safari.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Doha Desert</h5>
        <p class="card-text">Experience thrilling desert adventures with dune bashing, camel rides, sandboarding, and breathtaking views of endless golden dunes.</p>
      </div>
      <div class="card-footer">
         <a href="#" class="btn btn-primary" style="background-color: #d4af37;">View more</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="img/dohakatara.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Kaltara Cultural Village</h5>
        <p class="card-text">Explore a vibrant cultural hub featuring art galleries, live performances, traditional architecture, and diverse dining experiences.</p>
      </div>
      <div class="card-footer">
         <a href="#" class="btn btn-primary" style="background-color: #d4af37;">View more</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="img/doha8.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Souq Waqif</h5>
        <p class="card-text">Discover a lively traditional market with local shops, authentic cuisine, cultural performances, and a rich glimpse of Qataru heritage.</p>
      </div>
     <div class="card-footer">
         <a href="#" class="btn btn-primary" style="background-color: #d4af37;">View more</a>
      </div>
    </div>
  </div>
  
</div>

  <p class="text-muted">
    New Luxury Tourism was founded in Doha in 2026. We specialize in curated travel experiences across Qatar and international destinations.
  </p>
</div>



<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/mdb.umd.min.js"></script>

</body>
</html>
