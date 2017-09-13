<?php
    if (isset($_GET["data"]) && $_GET["data"] == "dosen"){
        getDataDosen($connect);
    }

    function getDataDosen($connect) {
        $sql = "SELECT * FROM dosen";
        $dosen = mysqli_query($connect, $sql);
        if(mysqli_num_rows($dosen) == 0){
            //echo '<tr><td colspan="4"><center>Data Tidak Tersedia</center></td></tr>';
        } else {
            foreach ($dosen as $value) {
                echo "
                <tr>
                    <td>".$value['kode_dosen']."</td>
                    <td>".$value['nama_dosen']."</td>
                    <td>".$value['fakultas']."</td>
                    <td>".$value['status']."</td>
                </tr>
                ";
            }
        }
    }

    function getDataKelas($connect) {
        $sql = "SELECT * FROM kelas";
        $kelas = mysqli_query($connect, $sql);
        if(mysqli_num_rows($kelas) == 0){
            //echo '<tr><td colspan="4"><center>Data Tidak Tersedia</center></td></tr>';
        } else {
            foreach ($kelas as $value) {
                echo "
                <tr>
                    <td>".$value['kode_kelas']."</td>
                    <td>".$value['fakultas']."</td>
                    <td>".$value['prodi']."</td>
                    <td>".$value['doswal']."</td>
                </tr>
                ";
            }
        }
    }

    function getDataMahasiswa($connect) {
        $sql = "SELECT * FROM mahasiswa";
        $mahasiswa = mysqli_query($connect, $sql);
        if(mysqli_num_rows($mahasiswa) == 0){
            //echo '<tr><td colspan="4"><center>Data Tidak Tersedia</center></td></tr>';
        } else {
            foreach ($mahasiswa as $value) {
                echo "
                    <tr>
                        <td>".$value['nim']."</td>
                        <td>".$value['nama']."</td>
                        <td>".$value['kelas']."</td>
                        <td>".$value['fakultas']."</td>
                        <td>".$value['prodi']."</td>
                        <td>".$value['tahun_masuk']."</td>
                    </tr>
                    ";
            }
        }
    }

    function getDataMatkul($connect) {
        $sql = "SELECT * FROM matkul";
        $matkul = mysqli_query($connect, $sql);
        if(mysqli_num_rows($matkul) == 0){
            //echo '<tr><td colspan="4"><center>Data Tidak Tersedia</center></td></tr>';
        } else {
            foreach ($matkul as $value) {
                echo "
                <tr>
                    <td>".$value['kode_matkul']."</td>
                    <td>".$value['nama_matkul']."</td>
                    <td>".$value['sks']."</td>
                    <td>".$value['fakultas']."</td>
                </tr>
                ";
            }
        }
    }

    function getStatusRegistrasi($connect) {
        $sql = "SELECT * FROM config WHERE config = 'status_reg'";
        $query = mysqli_query($connect, $sql);
        $registrasi = mysqli_fetch_array($query);

        return $registrasi['value'];
    }

    function getTahunAjaran($connect) {
        $sql = "SELECT * FROM config WHERE config = 'tahun_ajar'";
        $query = mysqli_query($connect, $sql);
        $tahun = mysqli_fetch_array($query);

        return $tahun['value'];
    }

    if (isset($_POST["updateRegistrasi"])) {
       updateRegistrasi();
    }

    function updateRegistrasi() {
        $status_reg = $_POST['status_reg'];
        $tahun_ajar = $_POST['tahun_ajar'];
        $sql1 = "UPDATE config SET value = '$status_reg' WHERE config ='status_reg'";
        $sql2 = "UPDATE config SET value = '$tahun_ajar' WHERE config ='tahun_ajar'";

        $query1 = mysqli_query($connect,$sql1);
        $query2 = mysqli_query($connect,$sql2);

        if ($query1 && $query2) {
            echo"<script>window.location.href = 'registrasi';</script>";
        } else {
            echo"<script>window.location.href = 'registrasi';</script>";
        }



    }




?>
