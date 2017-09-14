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
            Data Tagihan Regitrasi
          </div>
          <div class="card-body">
            <div class="col-md-12">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahModal">
                Tambah Tagihan Regitrasi
              </button>
            </div>
            <br>
            <div class="table-responsive">
              <table class="table table-bordered" width="100%" id="dataTable" cellspacing="0">
                <thead>
                  <tr>
                    <th>NIM</th>
                    <th>Semester</th>
                    <th>Tagihan</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                        getDataTagihan($connect);
                    ?>
                </tbody>
              </table>
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

    <!-- Logout Modal -->
    <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="tambahModalLabel">Tambah Tagihan Registrasi</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="POST" action="../function.php">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="selectNIM" class="col-form-label">NIM</label>
                  <select id="selectNIM" class="form-control" name="nim">
                    <option selected>Choose...</option>
                      <?php
                        getListMahasiswa($connect);
                      ?>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="selectSmt" class="col-form-label">Semester</label>
                  <select id="selectSmt" class="form-control" name="semester">
                    <option selected>Choose...</option>
                      <?php
                      $tahun = ['1516/1', '1516/2', '1617/1', '1617/2', '1718/1', '1718/2'];
                      foreach ($tahun as $value) {
                          echo "<option value='$value'>$value</option>";
                      }
                      ?>
                  </select>
                </div>
                <div class="form-group col-md-12">
                  <label for="tagihan" class="col-form-label">Tagihan</label>
                  <input type="number" class="form-control" name="tagihan" placeholder="4500000">
                </div>
                <div class="form-group col-md-12">
                  <label for="selectSTatus" class="col-form-label">Status</label>
                  <select id="selectStatus" class="form-control" name="status">
                    <option value="Belum Lunas" selected>Belum Lunas</option>
                    <option value="Lunas">Lunas</option>
                  </select>
                </div>
              </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary" name="addTagihan">Submit</button>
          </div>
        </div>
          </form>
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
