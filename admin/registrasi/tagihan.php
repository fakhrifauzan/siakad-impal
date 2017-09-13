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
                Tambah Tagihan Resgitrasi
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
                  <tr>
                    <td>111</td>
                    <td>1516/1</td>
                    <td>Rp. 4.500.000</td>
                    <td>Lunas</td>
                    <td>
                      <!-- <a href="#"><button type="button" class="btn btn-default">Edit</button></a> -->
                      <a href="#"><button type="button" class="btn btn-danger">Delete</button></a>
                    </td>
                  </tr>
                  <tr>
                    <td>222</td>
                    <td>1516/2</td>
                    <td>Rp. 4.500.000</td>
                    <td>Belum Lunas</td>
                    <td>
                      <!-- <a href="#"><button type="button" class="btn btn-default">Edit</button></a> -->
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
            <h5 class="modal-title" id="tambahModalLabel">Tambah Tagihan Registrasi</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="selectNIM" class="col-form-label">NIM</label>
                  <select id="selectNIM" class="form-control">
                    <option selected>Choose...</option>
                    <option value="111">111</option>
                    <option value="222">222</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="selectSmt" class="col-form-label">Semester</label>
                  <select id="selectSmt" class="form-control">
                    <option selected>Choose...</option>
                    <option value="1516/1">1516/1</option>
                    <option value="1516/2">1516/2</option>
                  </select>
                </div>
                <div class="form-group col-md-12">
                  <label for="tagihan" class="col-form-label">Tagihan</label>
                  <input type="text" class="form-control" name="tagihan" placeholder="Rp. 4.500.000">
                </div>
                <div class="form-group col-md-12">
                  <label for="selectSTatus" class="col-form-label">Status</label>
                  <select id="selectStatus" class="form-control">
                    <option value="Belum Lunas" selected>Belum Lunas</option>
                    <option value="Lunas">Lunas</option>
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
