<?php
    require "../../koneksi.php";
    include "../function.php";
?>
<!DOCTYPE html>
<html lang="en">

  <?php include '../head.php'; ?>

  <body class="fixed-nav sticky-footer bg-dark" id="page-top">

    <!-- Navigation -->
    <?php include '../nav.php'; ?>

    <div class="content-wrapper">

      <div class="container-fluid">

        <!-- Example Tables Card -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-table"></i>
            Data Registrasi
          </div>
          <div class="card-body">
            <div class="col-md-12">
              <a class="btn btn-primary btn-block" href="tagihan.php">
                Data Tagihan Registrasi
              </a>
            </div>
            <br>
            <div class="table-responsive">
              <form method="post" action="../function.php">
              <div class="form-group">
                <label for="exampleFormControlSelect1">Status Registrasi</label>
                <select class="form-control" id="exampleFormControlSelect1" name="status_reg">
                    <?php
                    $status = ['Aktif', 'Tidak Aktif'];
                    foreach ($status as $value) {
                        echo "<option value='".$value."'";
                        if (getStatusRegistrasi($connect) == $value) {
                            echo "selected";
                        }
                        echo ">";
                        echo $value."</option>";
                    }
                    ?>
                </select>
              </div>
              <div class="form-group">
                  <label for="exampleFormControlSelect1">Tahun Ajaran</label>
                  <select class="form-control" id="exampleFormControlSelect1" name="tahun_ajar">
                      <?php
                      $tahun = ['1516/1', '1516/2', '1617/1', '1617/2', '1718/1', '1718/2'];
                      foreach ($tahun as $value) {
                          echo "<option value='".$value."'";
                          if (getTahunAjaran($connect) == $value) {
                              echo "selected";
                          }
                          echo ">";
                          echo $value."</option>";
                      }
                      ?>
                  </select>
              </div>
              <button type="submit" class="btn btn-primary" name="updateRegistrasi">Submit</button>
            </form>
            </div>
          </div>
        </div>

      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- /.content-wrapper -->

    <?php include '../../footer.php'; ?>

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
    <script src="../../asset/vendor/jquery/jquery.min.js"></script>
    <script src="../../asset/vendor/popper/popper.min.js"></script>
    <script src="../../asset/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../../asset/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="../../asset/vendor/chart.js/Chart.min.js"></script>
    <script src="../../asset/vendor/datatables/jquery.dataTables.js"></script>
    <script src="../../asset/vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for this template -->
    <script src="../../asset/js/sb-admin.min.js"></script>

  </body>

</html>
