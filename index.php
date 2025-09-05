
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Dimple Star Transport</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="icon" href="images/icon.ico" type="image/x-icon">
  <style>
    :root{
      --brand:#ffc107;
    }
    body{ background-color:#f8f9fa; }
    .hero{ background:linear-gradient(rgba(0,0,0,.55),rgba(0,0,0,.55)), url('slide/images/b1.png') center/cover no-repeat; color:#fff; padding:100px 20px; text-align:center; }
    .page-header{ padding:64px 0 24px; background:linear-gradient(180deg, rgba(0,0,0,.05), rgba(0,0,0,0)); }
    .brand-btn{ background:var(--brand); border-color:var(--brand); color:#000; }
    .brand-btn:hover{ filter:brightness(.95); color:#000; }
    footer{ background:#212529; color:#fff; margin-top:56px; }
    footer a{ color:#adb5bd; text-decoration:none; }
    .card-rounded{ border-radius:1rem; }
    .table thead th{ background:#fffbe6; }
  </style>
</head>
<body>
<?php require('navbar.php')?>

<header class="hero">
  <h1 class="display-5 fw-bold">Safe. Reliable. Comfortable.</h1>
  <p class="lead mb-3">Travel across the Philippines with confidence.</p>
  <?php if(!isset($_SESSION['email'])): ?>
    <a href="signlog.php" class="btn brand-btn btn-lg">Sign Up / Login</a>
  <?php else: ?>
    <a href="book.php" class="btn brand-btn btn-lg">Book a Trip</a>
  <?php endif; ?>
</header>

<br>
<br>
<br>
 

<div id="mainCarousel" class="carousel slide container shadow-lg rounded" data-bs-ride="carousel" style="border: 3px solid yellow;">
  <div class="carousel-inner">
    <div class="carousel-item active"><img src="slide/images/BX1.png" class="d-block w-100 rounded" alt="Bus 1"></div>
    <div class="carousel-item"><img src="slide/images/BX2.png" class="d-block w-100 rounded" alt="Bus 2"></div>
    <div class="carousel-item"><img src="slide/images/BX3.png" class="d-block w-100 rounded" alt="Bus 3"></div>
    <div class="carousel-item"><img src="slide/images/BX4.png" class="d-block w-100 rounded" alt="Bus 4"></div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>


<section class="container my-5">
  <div class="row g-4">
    <div class="col-md-4">
      <div class="card card-rounded h-100 shadow-sm">
        <div class="card-body">
          <h5 class="card-title">Modern Fleet</h5>
          <p class="card-text">Air-conditioned buses with monitored maintenance for a smooth ride.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card card-rounded h-100 shadow-sm">
        <div class="card-body">
          <h5 class="card-title">Nationwide Routes</h5>
          <p class="card-text">Convenient terminals and routes that connect key cities and provinces.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card card-rounded h-100 shadow-sm">
        <div class="card-body">
          <h5 class="card-title">Easy Booking</h5>
          <p class="card-text">Reserve seats online and manage your trips with a few clicks.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require ('footer.php')?>
  </body>
