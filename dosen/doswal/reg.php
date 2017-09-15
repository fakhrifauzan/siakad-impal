<?php
session_start();
require "../../koneksi.php";
include "../function.php";

if (isset($_GET['nim'])) {
    $nim = $_GET['nim'];
}
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
            <i class="fa fa-pencil-square-o"></i>
            Jadwal Perkuliahan <?php echo $nim?>
          </div>
          <div class="card-body">
            <form method="post" action="../function.php">
            <div class="table-responsive">
              <table class="table table-bordered" width="100%" id="dataTable" cellspacing="0">
                <thead>
                  <tr>
                    <th>Matakuliah</th>
                    <th>Kelas</th>
                    <th>Hari</th>
                    <th>Jam</th>
                    <th>Ruangan</th>
                      <th>SKS</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                    getJadwalSementaraMhs($connect,$nim);
                ?>
                </tbody>
              </table>
            </div>
          </div>
            <div class="card-footer">
                <?php
                include_once '../../admin/function.php';

                if (cekSiapAccMhs($connect,$nim) == 'siap' AND getStatusRegistrasi($connect) == 'Aktif') {
                    echo '<input type="number" name="nim" value='.$nim.' hidden>';
                    echo '<button type="submit" class="btn btn-danger col-md-6" name="batal">Batalkan</button>';
                    echo '<button type="submit" class="btn btn-primary col-md-6" name="okeAcc">ACC Registrasi</button>';
                } else if (cekSiapAccMhs($connect,$nim) == 'simpan' AND getStatusRegistrasi($connect) == 'Aktif') {
                    echo '<p class="btn btn-warning btn-block">Mahasiswa Belum Siap ACC</p>';
                } else {
                    echo '<p class="btn btn-info btn-block">Sudah Anda ACC</p>';
                }
                ?>
            </div>
            </form>
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
