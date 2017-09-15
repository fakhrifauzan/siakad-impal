<?php
require "../../koneksi.php";
include "../function.php";

cek_login();
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
            Data Jadwal Perkuliahan
          </div>
          <div class="card-body">
            <div class="col-md-12">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahModal">
                Tambah Jadwal Perkuliahan
              </button>
            </div>
            <br>
            <div class="table-responsive">
              <table class="table table-bordered" width="100%" id="dataTable" cellspacing="0">
                <thead>
                  <tr>
                    <th>Kode Dosen</th>
                    <th>Matakuliah</th>
                    <th>Kelas</th>
                    <th>Hari</th>
                    <th>Jam</th>
                    <th>Ruangan</th>
                    <th>Semester</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                    getDataJadwal($connect);
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

    <!-- Input Modal -->
    <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="tambahModalLabel">Tambah Jadwal Perkuliahan</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="../function.php" method="post">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="selectDosen" class="col-form-label">Kode Dosen</label>
                  <select id="selectDosen" class="form-control" name="kode_dosen">
                    <option selected>Choose...</option>
                      <?php
                        getListDosen($connect);
                      ?>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="selectMatkul" class="col-form-label">Mata Kuliah</label>
                  <select id="selectMatkul" class="form-control" name="kode_matkul">
                    <option selected>Choose...</option>
                      <?php
                        getListMatkul($connect);
                      ?>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="selectKelas" class="col-form-label">Kelas</label>
                  <select id="selectKelas" class="form-control" name="kode_kelas">
                    <option selected>Choose...</option>
                      <?php
                        getListKelas($connect);
                      ?>
                  </select>
                </div>
                  <div class="form-group col-md-6">
                      <label for="tahun_ajar" class="col-form-label">Semester</label>
                      <select class="form-control" name="semester">
                          <option selected>Choose...</option>
                          <?php
                              $tahun = ['1516/1', '1516/2', '1617/1', '1617/2', '1718/1', '1718/2'];
                              foreach ($tahun as $value) {
                                  echo "<option value='".$value."'>".$value."</option>";
                              }
                          ?>
                      </select>
                  </div>

              </div>
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="selectHari" class="col-form-label">Hari</label>
                  <select id="selectHari" class="form-control" name="hari">
                    <option selected>Choose...</option>
                      <?php
                      $hari = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
                      foreach ($hari as $value) {
                          echo "<option value='".$value."'>".$value."</option>";
                      }
                      ?>
                  </select>
                </div>
                <div class="form-group col-md-4">
                  <label for="selectJam" class="col-form-label">Jam</label>
                  <select id="selectJam" class="form-control" name="jam">
                    <option selected>Choose...</option>
                      <?php
                      $jam = ['06.30 - 09.30', '09.30 - 12.30', '12.30 - 15.30', '15.30 - 18.30'];
                      foreach ($jam as $value) {
                          echo "<option value='".$value."'>".$value."</option>";
                      }
                      ?>
                  </select>
                </div>
                <div class="form-group col-md-4">
                  <label for="selectRuangan" class="col-form-label">Ruangan</label>
                  <select id="selectRuangan" class="form-control" name="ruangan">
                    <option selected>Choose...</option>
                      <?php
                      $ruangan = ['A307', 'A207B', 'B105', 'E302', 'E301', 'B208'];
                      foreach ($ruangan as $value) {
                          echo "<option value='".$value."'>".$value."</option>";
                      }
                      ?>
                  </select>
                </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-primary" name="addJadwal">Submit</button>
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
