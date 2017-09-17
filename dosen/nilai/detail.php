<?php
    require "../../koneksi.php";
    include "../function.php";

    cek_dsn();

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
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
            <i class="fa fa-table"></i>
            Data Nilai
          </div>
          <div class="card-body">
              <form method="post" action="../function.php">
            <div class="table-responsive">
              <table class="table table-bordered" width="100%" id="dataTable" cellspacing="0">
                <thead>
                  <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Kuis</th>
                    <th>UTS</th>
                    <th>UAS</th>
                    <th>Indeks</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                    getDataNilaiMahasiswaKelas($connect,$id);
                ?>
                </tbody>
              </table>
            </div>
          </div>
            <div class="card-footer">
                <?php
                include_once '../../admin/function.php';

                if (getStatusRegistrasi($connect) == 'Tidak Aktif') {
                    echo '<input type="hidden" name="id_jadwal" value="'.$id.'">';
                    echo '<button type="submit" class="btn btn-dark btn-block" name="simpanNilai">Simpan</button>';
                } else {
                    echo '<p class="btn btn-danger btn-block">Sedang berlangsung proses Registrasi</p>';
                }
                ?>
            </div>
        </div>
          </form>

      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- /.content-wrapper -->

    <?php include '../../footer.php'; ?>

    <!-- Scroll to Top Button -->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>

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
