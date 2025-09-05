
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
  <h1 class="fw-bold">ACCOUNT</h1>
  <p class="text-muted mb-0">Login or create an account to manage your bookings.</p>
</section>

<section class="container my-4">
  <div class="row g-4">
    <div class="col-lg-6">
      <div class="card card-rounded shadow-sm h-100">
        <div class="card-body">
          <h5 class="fw-semibold mb-3">Login</h5>
          <form method="post" action="login.php" class="row g-3">
            <div class="col-12">
              <label class="form-label">Email</label>
              <input type="email" class="form-control" name="email" required>
            </div>
            <div class="col-12">
              <label class="form-label">Password</label>
              <input type="password" class="form-control" name="password" required>
            </div>
            <div class="col-12 d-flex justify-content-end">
              <button type="submit" class="btn brand-btn">Login</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="col-lg-6">
      <div class="card card-rounded shadow-sm h-100">
        <div class="card-body">
          <h5 class="fw-semibold mb-3">Sign Up</h5>
          <form method="post" action="register.php" class="row g-3">
            <div class="col-md-6">
              <label class="form-label">First Name</label>
              <input type="text" class="form-control" name="first_name" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Last Name</label>
              <input type="text" class="form-control" name="last_name" required>
            </div>
            <div class="col-12">
              <label class="form-label">Email</label>
              <input type="email" class="form-control" name="email" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Password</label>
              <input type="password" class="form-control" name="password" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Confirm Password</label>
              <input type="password" class="form-control" name="confirm_password" required>
            </div>
            <div class="col-12 form-check">
              <input class="form-check-input" type="checkbox" id="terms" required>
              <label class="form-check-label" for="terms">
                I agree to the Terms & Privacy Policy
              </label>
            </div>
            <div class="col-12 d-flex justify-content-end">
              <button type="submit" class="btn brand-btn">Create Account</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require ('footer.php')?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
