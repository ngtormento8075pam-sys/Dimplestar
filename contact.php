
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
  <h1 class="fw-bold">CONTACT US</h1>
  <p class="text-muted mb-0">We'd love to hear from you.</p>
</section>

<section class="container my-4">
  <div class="row g-4">
    <div class="col-lg-6">
      <div class="card card-rounded shadow-sm h-100">
        <div class="card-body">
          <form method="post" action="sendmessage.php">
            <div class="mb-3">
              <label class="form-label">Full Name</label>
              <input type="text" class="form-control" name="name" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Email</label>
              <input type="email" class="form-control" name="email" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Message</label>
              <textarea class="form-control" name="message" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn brand-btn">Send Message</button>
          </form>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="card card-rounded shadow-sm h-100">
        <div class="card-body">
          <h5 class="fw-semibold">Head Office</h5>
          <p class="mb-1">Block 1 Lot 10, Southpoint Subd., Brgy Baesa, Quezon City</p>
          <p class="mb-1">📞 0929 209 0712</p>
          <p class="mb-0">✉️ support@dimplestar.example</p>
          <hr>
          <h6 class="fw-semibold">Hours</h6>
          <p class="mb-0">Mon–Sun: 6:00 AM – 10:00 PM</p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require ('footer.php')?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
