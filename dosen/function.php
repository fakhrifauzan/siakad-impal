<?php
/**
 * Created by PhpStorm.
 * User: Fakhri Fauzan
 * Date: 14/09/2017
 * Time: 22:53
 */
    function cek_dsn() {
        session_start();
        if ($_SESSION) {
            $level = $_SESSION['level'];
            if ($level == "admin") {
                    header("Location: ../../admin");
            } else if ($level == "dosen") {
//                header("Location: ../../dosen");
            } else if ($level == "mahasiswa") {
                header("Location: ../../mahasiswa");
            } else {
                header("Location: ../../paycheck");
            }
        } else {
            header("Location: ../../index.php");
        }
    }

    function getDataJadwalDosen($connect) {
//        session_start();
        $kode_dosen = $_SESSION['kode_dosen'];
        $sql = "SELECT * FROM jadwal WHERE kode_dosen='$kode_dosen'";
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
                    </tr>
                    ";
            }
        }
    }

    function getDataKelasDoswal($connect) {
//        session_start();
        $kode_dosen = $_SESSION['kode_dosen'];

        $sql = "SELECT * FROM kelas WHERE doswal='$kode_dosen'";
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
                        <td><a href='detail.php?kode=$value[kode_kelas]'>
                                <button type='button' class='btn btn-default'>Detail Kelas</button>
                            </a></td>
                    </tr>
                    ";
            }
        }
    }

    function getDataMahasiswaDoswal($connect, $kode) {
        $sql = "SELECT * FROM mahasiswa WHERE kelas='$kode'";
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
                            <td><a href='reg.php?nim=$value[nim]'>
                                <button type='button' class='btn btn-primary'>Detail Registrasi</button>
                            </a></td>
                        </tr>
                        ";
            }
        }
    }

    function getJadwalSementaraMhs($connect, $nim) {
        include_once "../../admin/function.php";

        $status_reg = getStatusRegistrasi($connect);
        $tahun_ajaran = getTahunAjaran($connect);

        if ($status_reg == 'Tidak Aktif') {
            echo "<tr><td colspan='8'>Maaf, Waktu Registrasi belum Dimulai!</td></tr>";
        } else {
            $sql = "SELECT * FROM jadwal JOIN matkul USING (kode_matkul) JOIN reg_matkul_detail USING (id_jadwal) JOIN reg_matkul USING (id_reg_matkul) WHERE reg_matkul.semester='$tahun_ajaran' AND nim='$nim' ";
            $jadwalSementara = mysqli_query($connect, $sql);

            if(mysqli_num_rows($jadwalSementara) == 0){
                //echo '<tr><td colspan="4"><center>Data Tidak Tersedia</center></td></tr>';
            } else {
                foreach ($jadwalSementara as $value) {
                    echo "
                        <tr>
                            <td>".$value['kode_matkul']."</td>
                            <td>".$value['kode_kelas']."</td>
                            <td>".$value['hari']."</td>
                            <td>".$value['jam']."</td>
                            <td>".$value['ruangan']."</td>
                            <td>".$value['sks']."</td>
                        </tr>";
                }
            }
        }
    }

    function cekSiapAccMhs($connect,$nim) {
        $sql = "SELECT * FROM reg_matkul WHERE nim = '$nim'";
        $query = mysqli_query($connect, $sql);
        $registrasi = mysqli_fetch_array($query);

        return $registrasi['status'];
    }

    if (isset($_POST["okeAcc"])) {
        include_once '../koneksi.php';
        $nim = $_POST['nim'];
        setAccRegistrasi($connect, $nim);
    }

    function setAccRegistrasi($connect, $nim) {
        include_once "../admin/function.php";
        $semester = getTahunAjaran($connect);

        $sql = "UPDATE reg_matkul SET status = 'ok' WHERE nim='$nim' AND semester='$semester'";
        $query = mysqli_query($connect, $sql);
        if ($query) {
            echo "<script>alert('Registasi telah di ACC!');window.location.href='doswal/reg.php?nim=$nim';</script>";
        } else {
            echo "<script>alert('Registrasi gagal di ACC!');window.location.href='doswal/reg.php?nim=$nim';</script>";
        }
    }

    if (isset($_POST["batal"])) {
        include_once '../koneksi.php';
        $nim = $_POST['nim'];
        setCancelRegistrasi($connect, $nim);
    }
    function setCancelRegistrasi($connect, $nim) {
        include_once "../admin/function.php";
        $semester = getTahunAjaran($connect);

        $sql = "UPDATE reg_matkul SET status = 'simpan' WHERE nim='$nim' AND semester='$semester'";
        $query = mysqli_query($connect, $sql);
        if ($query) {
            echo "<script>alert('Registasi dibatalkan!');window.location.href='doswal/reg.php?nim=$nim';</script>";
        } else {
            echo "<script>alert('Registrasi gagal dibatalkan!');window.location.href='doswal/reg.php?nim=$nim';</script>";
        }
    }


?>