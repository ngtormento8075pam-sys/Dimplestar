
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
    .navbar-brand img{ height:48px; }
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


<section class="container page-header">
  <h1 class="fw-bold">BOOK A TRIP</h1>
  <p class="text-muted mb-0">Fill in your travel details to reserve a seat.</p>
</section>

<section class="container my-4">
  <div class="card card-rounded shadow-sm">
    <div class="card-body">
      <form method="post" action="process_booking.php" class="row g-3">
        <div class="col-md-4">
          <label class="form-label">Origin</label>
          <input type="text" class="form-control" name="origin" required>
        </div>
        <div class="col-md-4">
          <label class="form-label">Destination</label>
          <input type="text" class="form-control" name="destination" required>
        </div>
        <div class="col-md-4">
          <label class="form-label">Travel Date</label>
          <input type="date" class="form-control" name="date" required>
        </div>
        <div class="col-md-4">
          <label class="form-label">Departure Time</label>
          <input type="time" class="form-control" name="time" required>
        </div>
        <div class="col-md-4">
          <label class="form-label">Passengers</label>
          <input type="number" min="1" value="1" class="form-control" name="passengers" required>
        </div>
        <div class="col-md-4">
          <label class="form-label">Seat Preference</label>
          <select class="form-select" name="seat_pref">
            <option value="Any">Any</option>
            <option value="Window">Window</option>
            <option value="Aisle">Aisle</option>
          </select>
        </div>
        <div class="col-12 d-flex justify-content-end gap-2">
          <button type="reset" class="btn btn-outline-secondary">Clear</button>
          <button type="submit" class="btn brand-btn">Reserve Seat</button>
        </div>
      </form>
    </div>
  </div>
</section>

<?php require ('footer.php')?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
