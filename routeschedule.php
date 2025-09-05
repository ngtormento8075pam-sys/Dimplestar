
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


<section class="container page-header">
  <h1 class="fw-bold">Routes & Schedules</h1>
  <p class="text-muted mb-0">Plan your trip with our daily departures.</p>
</section>

<section class="container my-4">
  <div class="card card-rounded shadow-sm mb-3">
    <div class="card-body">
      <form class="row g-3">
        <div class="col-md-4">
          <label class="form-label">Origin</label>
          <input type="text" class="form-control" placeholder="e.g., Quezon City">
        </div>
        <div class="col-md-4">
          <label class="form-label">Destination</label>
          <input type="text" class="form-control" placeholder="e.g., Batangas">
        </div>
        <div class="col-md-3">
          <label class="form-label">Date</label>
          <input type="date" class="form-control">
        </div>
        <div class="col-md-1 d-grid">
          <label class="form-label invisible">Search</label>
          <button type="button" class="btn brand-btn">Search</button>
        </div>
      </form>
    </div>
  </div>

  <div class="table-responsive shadow-sm rounded bg-white p-2">
    <table class="table align-middle mb-0">
      <thead>
        <tr>
          <th>Route</th>
          <th>Departure</th>
          <th>Arrival</th>
          <th>Fare</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Quezon City → Batangas</td>
          <td>07:00</td>
          <td>10:00</td>
          <td>₱280</td>
          <td><a href="book.php" class="btn btn-sm brand-btn">Book</a></td>
        </tr>
        <tr>
          <td>Manila → Lipa</td>
          <td>09:00</td>
          <td>12:00</td>
          <td>₱260</td>
          <td><a href="book.php" class="btn btn-sm brand-btn">Book</a></td>
        </tr>
        <tr>
          <td>Quezon City → Manila</td>
          <td>11:00</td>
          <td>12:30</td>
          <td>₱120</td>
          <td><a href="book.php" class="btn btn-sm brand-btn">Book</a></td>
        </tr>
      </tbody>
    </table>
  </div>
</section>

<?php require ('footer.php')?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
