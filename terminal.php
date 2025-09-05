
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
  <h1 class="fw-bold">TERMINALS</h1>
  <p class="text-muted mb-0">Find the nearest Dimple Star terminal.</p>
</section>

<section class="container my-4">
  <div class="table-responsive shadow-sm rounded bg-white p-2">
    <table class="table align-middle mb-0">
      <thead>
        <tr>
          <th>City / Province</th>
          <th>Address</th>
          <th>Contact</th>
          <th>Hours</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Quezon City</td>
          <td>Block 1 Lot 10, Southpoint Subd., Brgy Baesa</td>
          <td>0929 209 0712</td>
          <td>6:00 AM – 10:00 PM</td>
        </tr>
        <tr>
          <td>Manila</td>
          <td>Taft Ave. corner Sen. Gil Puyat Ave.</td>
          <td>(02) 1234 5678</td>
          <td>6:00 AM – 10:00 PM</td>
        </tr>
        <tr>
          <td>Batangas</td>
          <td>Barangay Halang, Lipa City</td>
          <td>0917 222 3333</td>
          <td>5:00 AM – 9:00 PM</td>
        </tr>
      </tbody>
    </table>
  </div>
</section>

<?php require ('footer.php')?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
