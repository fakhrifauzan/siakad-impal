<?php
    require 'koneksi.php';
    include 'function.php';

    cek_auth();
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">
    <title>Sistem Informasi Akademik</title>

    <!-- Bootstrap core CSS -->
    <link href="asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="asset/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="asset/css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-dark">

    <div class="container">

      <div class="card card-login mx-auto mt-5">
        <div class="card-header text-center">
            Sistem Informasi Akademik
        </div>
        <div class="card-body">
          <form action="function.php" method="post">
            <div class="form-group">
              <label for="exampleInputEmail1">Username</label>
              <input type="text" class="form-control" placeholder="Enter Username" name="username" required>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" placeholder="Password" name="password" required>
            </div>
              <div class="form-group">
                  <label for="level">User Level</label>
                  <select class="form-control" name="level" required>
                      <option selected>Choose..</option>
                      <option value="mahasiswa">Mahasiswa</option>
                      <option value="dosen">Dosen</option>
                      <option value="paycheck">Payment Checker</option>
                      <option value="admin">Administrator</option>
                  </select>
              </div>
              <button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
          </form>
        </div>
          <div class="text-center">
             <p>Copyright © Sistem Informasi Akademik 2017</p>
          </div>
      </div>

    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  </body>

</html>
