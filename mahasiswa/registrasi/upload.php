<?php
/**
 * Created by PhpStorm.
 * User: Fakhri Fauzan
 * Date: 15/09/2017
 * Time: 7:58
 */

    session_start();

    if (isset($_GET['upload']) && $_GET['upload'] == 'bukti') {
        $id_registrasi = $_GET['id'];
        $nim = $_SESSION['nim'];
        $nama = $_SESSION['nama'];


        include_once "../../koneksi.php";

        $sql = "SELECT * FROM registrasi WHERE id_registrasi = '$id_registrasi'";
        $query = mysqli_query($connect, $sql);
        $registrasi = mysqli_fetch_array($query);

    }

    include_once '../head.php';

?>


<div class='modal-body'>
    <h2>Detail Tagihan</h2>
    <div class='form-row'>
        <div class='form-group col-md-6'>
            <label for='selectNIM' class='col-form-label'>NIM</label>
            <input type='text' id='selectNIM' class='form-control' name='nim' value='<?php echo $nim ?>' readonly>
            </input>
        </div>
        <div class='form-group col-md-6'>
            <label for='selectNama' class='col-form-label'>Nama</label>
            <input type='text' id='selectNIM' class='form-control' name='nama' value='<?php echo $nama ?>' readonly>
            </input>
        </div>
        <div class='form-group col-md-6'>
            <label for='selectSmt' class='col-form-label'>Semester</label>
            <input type='text' id='selectSmt' class='form-control' name='semester'  value='<?php echo $registrasi["semester"] ?>' readonly>
            </input>
        </div>
        <div class='form-group col-md-6'>
            <label for='tagihan' class='col-form-label'>Tagihan</label>
            <input type='number' class='form-control' name='tagihan' placeholder='4500000'  value='<?php echo $registrasi["tagihan"] ?>' readonly>
        </div>
    </div>

    <form action="../function.php" method="post">
    <h2>Detail Pembayaran</h2>
    <div class='form-row'>
        <input type="number" class="form-control" name="id_registrasi" value="<?php echo $id_registrasi?>" hidden>
        <div class='form-group col-md-6'>
            <label class='col-form-label'>Tanggal Transfer</label>
            <input type='date' class='form-control' name='tgl_transfer' required>

            </input>
        </div>
        <div class='form-group col-md-6'>
            <label for='selectNama' class='col-form-label'>Bank Tujuan</label>
            <select class="form-control" name="bank" required>
                <option value="Mandiri">Bank Mandiri</option>
                <option value="BNI">Bank BNI</option>
            </select>
        </div>
        <div class='form-group col-md-6'>
            <label for='selectSmt' class='col-form-label'>Jumlah Dana yang Di Transfer</label>
            <input type='number' class='form-control' name='jumlah' required>
            </input>
        </div>
        <div class='form-group col-md-6'>
            <label for='tagihan' class='col-form-label'>Nama Pemilik Rekening</label>
            <input type='text' class='form-control' name='pemilik_rek' required>
        </div>
    </div>
</div>
<div class='modal-footer'>
    <button type='submit' class='btn btn-primary' name='uploadBukti'>Submit</button>
</div>
</form>

