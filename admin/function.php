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

    function getListDosen($connect) {
        $sql = "SELECT * FROM dosen";
        $dosen = mysqli_query($connect, $sql);
        if(mysqli_num_rows($dosen) == 0){
            //echo '<tr><td colspan="4"><center>Data Tidak Tersedia</center></td></tr>';
        } else {
            foreach ($dosen as $value) {
                echo "
                    <option value='".$value['kode_dosen']."'>
                        ".$value['kode_dosen']." || ".$value['nama_dosen']."
                    </option>
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

    function getListKelas($connect) {
        $sql = "SELECT * FROM kelas";
        $kelas = mysqli_query($connect, $sql);
        if(mysqli_num_rows($kelas) == 0){
            //echo '<tr><td colspan="4"><center>Data Tidak Tersedia</center></td></tr>';
        } else {
            foreach ($kelas as $value) {
                echo "
                        <option value='".$value['kode_kelas']."'>
                            ".$value['kode_kelas']."
                        </option>
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

    function getListMahasiswa($connect) {
        $sql = "SELECT * FROM mahasiswa";
        $mahasiswa = mysqli_query($connect, $sql);
        if(mysqli_num_rows($mahasiswa) == 0){
            //echo '<tr><td colspan="4"><center>Data Tidak Tersedia</center></td></tr>';
        } else {
            foreach ($mahasiswa as $value) {
                echo "
                        <option value='".$value['nim']."'>
                            ".$value['nim']." || ".$value['nama']."
                        </option>
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

    function getListMatkul($connect) {
        $sql = "SELECT * FROM matkul";
        $matkul = mysqli_query($connect, $sql);
        if(mysqli_num_rows($matkul) == 0){
            //echo '<tr><td colspan="4"><center>Data Tidak Tersedia</center></td></tr>';
        } else {
            foreach ($matkul as $value) {
                echo "
                    <option value='".$value['kode_matkul']."'>
                        ".$value['nama_matkul']."
                    </option>
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
        include_once '../koneksi.php';
        updateRegistrasi($connect);
    }

    function updateRegistrasi($connect) {
        $status_reg = $_POST['status_reg'];
        $tahun_ajar = $_POST['tahun_ajar'];
        $sql1 = "UPDATE config SET value = '$status_reg' WHERE config ='status_reg'";
        $sql2 = "UPDATE config SET value = '$tahun_ajar' WHERE config ='tahun_ajar'";

        $query1 = mysqli_query($connect,$sql1);
        $query2 = mysqli_query($connect,$sql2);

        if ($query1 && $query2) {
            echo"<script>alert('Registrasi berhasil di update!');window.location.href = 'registrasi';</script>";
        } else {
            echo"<script>alert('Registrasi GAGAL di update!');window.location.href = 'registrasi';</script>";
        }
    }

    function getDataTagihan($connect) {
        $sql = "SELECT * FROM registrasi";
        $registrasi = mysqli_query($connect, $sql);
        if(mysqli_num_rows($registrasi) == 0){
            //echo '<tr><td colspan="4"><center>Data Tidak Tersedia</center></td></tr>';
        } else {
            foreach ($registrasi as $value) {
                echo "
                    <tr>
                        <td>".$value['nim']."</td>
                        <td>".$value['semester']."</td>
                        <td>".$value['tagihan']."</td>
                        <td>".$value['status']."</td>
                        <td>
                            <a href='../function.php?del=tagihan&id=$value[id_registrasi]'>
                                <button type='button' class='btn btn-danger'>Delete</button>
                            </a>
                        </td>
                    </tr>
                    ";
            }
        }
    }


    if (isset($_GET["del"]) && $_GET["del"] == "tagihan"){
        include_once '../koneksi.php';
        deleteTagihan($connect);
        echo"<script>alert('Tagihan telah dihapus!');window.location.href = 'registrasi/tagihan.php';</script>";
    }

    function deleteTagihan($connect){
        $id = $_GET["id"];
        $sql = "DELETE FROM registrasi WHERE id_registrasi='$id'";

        mysqli_query($connect,$sql);
    }

    if (isset($_POST["addTagihan"])) {
        include_once '../koneksi.php';
        addTagihan($connect);
        echo"<script>alert('Tagihan telah ditambah!');window.location.href = 'registrasi/tagihan.php';</script>";
    }

    function addTagihan($connect) {
        $nim = $_POST['nim'];
        $semester = $_POST['semester'];
        $tagihan = $_POST['tagihan'];
        $status = $_POST['status'];

        $sql = "INSERT INTO registrasi VALUES (NULL, '$nim', '$semester', '$tagihan', '$status')";
        mysqli_query($connect,$sql);
    }

    function getDataJadwal($connect) {
        $sql = "SELECT * FROM jadwal";
        $jadwal = mysqli_query($connect, $sql);
        if(mysqli_num_rows($jadwal) == 0){
            //echo '<tr><td colspan="4"><center>Data Tidak Tersedia</center></td></tr>';
        } else {
            foreach ($jadwal as $value) {
                echo "
                    <tr>
                        <td>".$value['kode_dosen']."</td>
                        <td>".$value['kode_matkul']."</td>
                        <td>".$value['kode_kelas']."</td>
                        <td>".$value['hari']."</td>
                        <td>".$value['jam']."</td>
                        <td>".$value['ruangan']."</td>
                        <td>".$value['semester']."</td>
                        <td>
                            <a href='../function.php?edit=jadwal&id=$value[id_jadwal]'>
                                <button type='button' class='btn btn-warning'>Edit</button>
                            </a>
                            <a href='../function.php?del=jadwal&id=$value[id_jadwal]'>
                                <button type='button' class='btn btn-danger'>Delete</button>
                            </a>
                        </td>
                    </tr>
                    ";
            }
        }
    }

    if (isset($_POST["addJadwal"])) {
        include_once '../koneksi.php';
        addJadwal($connect);
    }

    function addJadwal($connect) {
        $kode_dosen = $_POST['kode_dosen'];
        $kode_matkul = $_POST['kode_matkul'];
        $kode_kelas = $_POST['kode_kelas'];
        $hari = $_POST['hari'];
        $jam = $_POST['jam'];
        $ruangan = $_POST['ruangan'];
        $semester = $_POST['semester'];

        $sql = "INSERT INTO jadwal VALUES (NULL, '$kode_dosen', '$kode_matkul', '$kode_kelas', '$hari', '$jam', '$ruangan', '$semester')";
        mysqli_query($connect,$sql);
        echo"<script>alert('Jadwal telah ditambah!');window.location.href = 'jadwal';</script>";

//        if (cekRuanganAvailable($connect, $ruangan, $hari, $jam, $semester)){
//            if (cekDosenAvailable($connect, $kode_dosen, $hari, $jam, $semester)) {
//                $sql = "INSERT INTO jadwal VALUES (NULL, '$kode_dosen', '$kode_matkul', '$kode_kelas', '$hari', '$jam', '$ruangan', '$semester')";
//                mysqli_query($connect,$sql);
//                echo"<script>alert('Jadwal telah ditambah!');window.location.href = 'jadwal';</script>";
//            } else {
//                echo"<script>alert('Dosen tidak tersedia!');window.location.href = 'jadwal';</script>";
//            }
//        } else {
//            echo"<script>alert('Ruangan tidak tersedia!');window.location.href = 'jadwal';</script>";
//        }


    }

    function cekDosenAvailable($connect, $kode_dosen, $hari, $jam, $semester) {
        $cek = "SELECT * FROM jadwal WHERE kode_dosen = '$kode_dosen' AND hari='$hari' AND jam ='$jam' AND semester = '$semester'";
        $status = mysqli_query($connect, $cek);
        if (mysqli_num_rows($status) >= 1) {
            return true;
        }
        return false;
    }

    function cekRuanganAvailable($connect, $ruangan, $hari, $jam, $semester) {
        $cek = "SELECT * FROM jadwal WHERE ruangan = '$ruangan' AND hari='$hari' AND jam ='$jam' AND semester = '$semester'";
        $status = mysqli_query($connect, $cek);
        if (mysqli_num_rows($status) >= 1) {
            return true;
        }
        return false;
    }

    if (isset($_GET["del"]) && $_GET["del"] == "jadwal"){
        include_once '../koneksi.php';
        deleteJadwal($connect);
        echo"<script>alert('Jadwal telah dihapus!');window.location.href = 'jadwal';</script>";
    }

    function deleteJadwal($connect){
        $id = $_GET["id"];
        $sql = "DELETE FROM jadwal WHERE id_jadwal='$id'";

        mysqli_query($connect,$sql);
    }

//    mysqli_close($connect);

?>
