<?php
session_start();
if (isset($_SESSION['admin_logged_in'])) {
    // header('Location:../dashboard/index.php');
        echo "
         <script>
            alert(' Anda sudah login');
            window.location.href = '../../pages/dashboard/index.php';
         </script>
         ";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login Admin</title>
  <link rel="stylesheet" href="../../tamplate-admin/css/styles.css">
  <link rel="shortcut icon" href="../../tamplate-admin/assets/img/0.svg">
</head>
<body class="bg-light d-flex justify-content-center align-items-center" style="min-height:100vh;">

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 col-lg-5">
        <div class="card shadow p-4">
          <h4 class="mb-4 text-center"> Login</h4>

          <form action="../../actions/auth/login_proses.php" method="POST">
         
            <!-- Email -->
            <div class="mb-3">
              <label for="emailInput" class="form-label"> Email</label>
              <input type="email" class="form-control" name="email" id="emailInput" placeholder="Masukkan email..." required>
            </div>

            <!-- Password -->
            <div class="mb-3">
              <label for="passwordInput" class="form-label"> Password</label>
              <input type="password" class="form-control" name="password" id="passwordInput" placeholder="Masukkan password..." required>
            </div>

            <!-- Tombol -->
            <div class="d-grid">
              <button class="btn btn-primary" type="submit"> Login</button>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>

</body>
</html>

<!-- JS -->
<?php

include '../../partials/script.php';
?>
