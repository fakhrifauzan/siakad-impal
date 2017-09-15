<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">
    <title>Dosen</title>

    <!-- Bootstrap core CSS -->
    <link href="../asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="../asset/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="../asset/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../asset/css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="fixed-nav sticky-footer bg-dark" id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <a class="navbar-brand" href="#">Sistem Informasi Akademik</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
          <li class="nav-item active" data-toggle="tooltip" data-placement="right" title="Dashboard">
            <a class="nav-link" href="../admin">
              <i class="fa fa-fw fa-home"></i>
              <span class="nav-link-text">
                Dashboard</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
            <a class="nav-link" href="dosen">
              <i class="fa fa-fw fa-user-circle-o"></i>
              <span class="nav-link-text">
                Dosen</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
            <a class="nav-link" href="jadwal">
              <i class="fa fa-fw fa-calendar"></i>
              <span class="nav-link-text">
                Jadwal Perkuliahan</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
            <a class="nav-link" href="kelas">
              <i class="fa fa-fw fa-graduation-cap"></i>
              <span class="nav-link-text">
                Kelas</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
            <a class="nav-link" href="mahasiswa">
              <i class="fa fa-fw fa-user"></i>
              <span class="nav-link-text">
                Mahasiswa</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
            <a class="nav-link" href="matkul">
              <i class="fa fa-fw fa-book"></i>
              <span class="nav-link-text">
               Mata Kuliah</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
            <a class="nav-link" href="registrasi">
              <i class="fa fa-fw fa-pencil-square-o"></i>
              <span class="nav-link-text">
                Registasi</span>
            </a>
          </li>
        </ul>
        <ul class="navbar-nav sidenav-toggler">
          <li class="nav-item">
            <a class="nav-link text-center" id="sidenavToggler">
              <i class="fa fa-fw fa-angle-left"></i>
            </a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
              <i class="fa fa-fw fa-sign-out"></i>
              Logout</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="content-wrapper">

      <div class="container-fluid">

          <!-- Breadcrumbs -->
          <ol class="breadcrumb">
              <li class="breadcrumb-item">
                  <a href="#">Dashboard</a>
              </li>
              <li class="breadcrumb-item active">My Dashboard</li>
          </ol>

          <!-- Icon Cards -->
          <div class="row">
              <div class="col-xl-3 col-sm-6 mb-3">
                  <div class="card text-white bg-primary o-hidden h-100">
                      <div class="card-body">
                          <div class="card-body-icon">
                              <i class="fa fa-fw fa-comments"></i>
                          </div>
                          <div class="mr-5">
                              26 New Messages!
                          </div>
                      </div>
                      <a href="#" class="card-footer text-white clearfix small z-1">
                          <span class="float-left">View Details</span>
                          <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
                      </a>
                  </div>
              </div>
              <div class="col-xl-3 col-sm-6 mb-3">
                  <div class="card text-white bg-warning o-hidden h-100">
                      <div class="card-body">
                          <div class="card-body-icon">
                              <i class="fa fa-fw fa-list"></i>
                          </div>
                          <div class="mr-5">
                              11 New Tasks!
                          </div>
                      </div>
                      <a href="#" class="card-footer text-white clearfix small z-1">
                          <span class="float-left">View Details</span>
                          <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
                      </a>
                  </div>
              </div>
              <div class="col-xl-3 col-sm-6 mb-3">
                  <div class="card text-white bg-success o-hidden h-100">
                      <div class="card-body">
                          <div class="card-body-icon">
                              <i class="fa fa-fw fa-shopping-cart"></i>
                          </div>
                          <div class="mr-5">
                              123 New Orders!
                          </div>
                      </div>
                      <a href="#" class="card-footer text-white clearfix small z-1">
                          <span class="float-left">View Details</span>
                          <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
                      </a>
                  </div>
              </div>
              <div class="col-xl-3 col-sm-6 mb-3">
                  <div class="card text-white bg-danger o-hidden h-100">
                      <div class="card-body">
                          <div class="card-body-icon">
                              <i class="fa fa-fw fa-support"></i>
                          </div>
                          <div class="mr-5">
                              13 New Tickets!
                          </div>
                      </div>
                      <a href="#" class="card-footer text-white clearfix small z-1">
                          <span class="float-left">View Details</span>
                          <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
                      </a>
                  </div>
              </div>
          </div>
      </div>


    </div>
    <!-- /.content-wrapper -->

    <?php include '../footer.php'; ?>

    <!-- Scroll to Top Button -->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>

    <!-- Logout Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Select "Logout" below if you are ready to end your current session.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="../asset/vendor/jquery/jquery.min.js"></script>
    <script src="../asset/vendor/popper/popper.min.js"></script>
    <script src="../asset/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../asset/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="../asset/vendor/chart.js/Chart.min.js"></script>
    <script src="../asset/vendor/datatables/jquery.dataTables.js"></script>
    <script src="../asset/vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for this template -->
    <script src="../asset/js/sb-admin.min.js"></script>

  </body>

</html>
