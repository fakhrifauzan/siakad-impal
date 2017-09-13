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
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>AAA</td>
                    <td>DAP</td>
                    <td>IF-39-10</td>
                    <td>Senin</td>
                    <td>07.30 - 10.30</td>
                    <td>A207B</td>
                    <td>
                      <a href="#"><button type="button" class="btn btn-default">Edit</button></a>
                      <a href="#"><button type="button" class="btn btn-danger">Delete</button></a>
                    </td>
                  </tr>
                  <tr>
                    <td>ABC</td>
                    <td>MPB</td>
                    <td>MB-39-10</td>
                    <td>Selasa</td>
                    <td>07.30 - 10.30</td>
                    <td>A207B</td>
                    <td>
                      <a href="#"><button type="button" class="btn btn-default">Edit</button></a>
                      <a href="#"><button type="button" class="btn btn-danger">Delete</button></a>
                    </td>
                  </tr>
                  <tr>
                    <td>ARK</td>
                    <td>MPB</td>
                    <td>IF-39-10</td>
                    <td>Rabu</td>
                    <td>10.30 - 12.30</td>
                    <td>B105</td>
                    <td>
                      <a href="#"><button type="button" class="btn btn-default">Edit</button></a>
                      <a href="#"><button type="button" class="btn btn-danger">Delete</button></a>
                    </td>
                  </tr>
                  <tr>
                    <td>REZ</td>
                    <td>NIR</td>
                    <td>DS-39-9</td>
                    <td>Rabu</td>
                    <td>12.30 - 15.30</td>
                    <td>A203</td>
                    <td>
                      <a href="#"><button type="button" class="btn btn-default">Edit</button></a>
                      <a href="#"><button type="button" class="btn btn-danger">Delete</button></a>
                    </td>
                  </tr>
                  <tr>
                    <td>ZZZ</td>
                    <td>PBO</td>
                    <td>IF-39-10</td>
                    <td>Rabu</td>
                    <td>12.30 - 15.30</td>
                    <td>A306</td>
                    <td>
                      <a href="#"><button type="button" class="btn btn-default">Edit</button></a>
                      <a href="#"><button type="button" class="btn btn-danger">Delete</button></a>
                    </td>
                  </tr>
                  <tr>
                    <td>ZZZ</td>
                    <td>DAP</td>
                    <td>IF-39-10</td>
                    <td>Kamis</td>
                    <td>12.30 - 15.30</td>
                    <td>A207B</td>
                    <td>
                      <a href="#"><button type="button" class="btn btn-default">Edit</button></a>
                      <a href="#"><button type="button" class="btn btn-danger">Delete</button></a>
                    </td>
                  </tr>
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
            <h5 class="modal-title" id="tambahModalLabel">Tambah Jadwal Perkuliahan</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-row">
                <!-- <div class="form-group col-md-6">
                  <label for="selectFakultas" class="col-form-label">Fakultas</label>
                  <select id="selectFakultas" class="form-control">
                    <option selected>Choose...</option>
                    <option value="1">Informatika</option>
                    <option value="2">Manajemen</option>
                    <option value="3">Industri Kreatif</option>
                  </select>
                </div> -->
                <div class="form-group col-md-6">
                  <label for="selectDosen" class="col-form-label">Kode Dosen</label>
                  <select id="selectDosen" class="form-control">
                    <option selected>Choose...</option>
                    <option value="1">AAA</option>
                    <option value="2">ABC</option>
                    <option value="3">ARK</option>
                    <option value="4">REZ</option>
                    <option value="5">ZZZ</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="selectMatkul" class="col-form-label">Mata Kuliah</label>
                  <select id="selectMatkul" class="form-control">
                    <option selected>Choose...</option>
                    <option value="DAP">Dasar Algoritma dan Pemograman</option>
                    <option value="STD">Struktur Data</option>
                    <option value="MPB">Manajemen Pemasaran Bisnis</option>
                    <option value="NIR">Nirmana</option>
                    <option value="PBO">Pemograman Berorientasi Objek</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="selectKelas" class="col-form-label">Kelas</label>
                  <select id="selectKelas" class="form-control">
                    <option selected>Choose...</option>
                    <option value="IF-39-10">IF-39-10</option>
                    <option value="MB-39-10">MB-39-10</option>
                  </select>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="selectHari" class="col-form-label">Hari</label>
                  <select id="selectHari" class="form-control">
                    <option selected>Choose...</option>
                    <option value="senin">Senin</option>
                    <option value="selasa">Selasa</option>
                    <option value="rabu">Rabu</option>
                    <option value="kamis">Kamis</option>
                    <option value="jumat">Jumat</option>
                    <option value="sabtu">Sabtu</option>
                  </select>
                </div>
                <div class="form-group col-md-4">
                  <label for="selectJam" class="col-form-label">Jam</label>
                  <select id="selectJam" class="form-control">
                    <option selected>Choose...</option>
                    <option value="1">07.30 - 10.30</option>
                    <option value="2">10.30 - 13.30</option>
                    <option value="3">13.30 - 16.30</option>
                  </select>
                </div>
                <div class="form-group col-md-4">
                  <label for="selectRuangan" class="col-form-label">Ruangan</label>
                  <select id="selectRuangan" class="form-control">
                    <option selected>Choose...</option>
                    <option value="a207b">A207B</option>
                    <option value="a306">A306</option>
                    <option value="b105">B105</option>
                  </select>
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Submit</a>
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
