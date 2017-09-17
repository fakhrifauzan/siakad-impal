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
                            <td>".$value['fakultas']."</td>
                            <td>".$value['prodi']."</td>
                            <td>".$value['kelas']."</td>
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

    function getDataJadwalDosenSmtIni($connect) {
    //        session_start();
        $kode_dosen = $_SESSION['kode_dosen'];

        include_once "../../admin/function.php";
        $semester = getTahunAjaran($connect);

        $sql = "SELECT * FROM jadwal WHERE kode_dosen='$kode_dosen' AND semester='$semester'";
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
                            <td><a href='detail.php?id=$value[id_jadwal]'>
                                    <button type='button' class='btn btn-default'>Detail Kelas</button>
                                </a></td>
                        </tr>
                        ";
            }
        }
    }

    function getDataNilaiMahasiswaKelas($connect, $id) {
        $sql = "SELECT nim, nama, kelas, kuis, uts, uas, indeks FROM mahasiswa
                  JOIN reg_matkul USING (nim)
                  JOIN reg_matkul_detail USING (id_reg_matkul)
                  JOIN nilai USING (nim)
                WHERE nilai.id_jadwal='$id' AND reg_matkul_detail.id_jadwal = '$id' AND status='ok'";
        $mahasiswa = mysqli_query($connect, $sql);
        if(mysqli_num_rows($mahasiswa) == 0){
            //echo '<tr><td colspan="4"><center>Data Tidak Tersedia</center></td></tr>';
        } else {
            foreach ($mahasiswa as $value) {
                echo "
                    <tr>
                        <td><input type='hidden' value='".$value['nim']."' name='nim[]'>".$value['nim']."</td>
                        <td>".$value['nama']."</td>
                        <td>".$value['kelas']."</td>
                        <td><input type='number' min='0' max='100' class='form-control' style='width: 50px' value='$value[kuis]' name='kuis[]'></td>
                        <td><input type='number' min='0' max='100' class='form-control' style='width: 50px' value='$value[uts]' name='uts[]'></td>
                        <td><input type='number' min='0' max='100' class='form-control' style='width: 50px' value='$value[uas]' name='uas[]'></td>
                        <td>".$value['indeks']."</td>
                    </tr>
                    ";
            }
        }
    }

    if (isset($_POST["simpanNilai"])) {
        include_once '../koneksi.php';
        simpanNilai($connect);
    }

    function simpanNilai($connect) {
//        session_start();
        $id_jadwal = $_POST['id_jadwal'];
        $kuis = $_POST['kuis'];
        $uts = $_POST['uts'];
        $uas = $_POST['uas'];
        $nim = $_POST['nim'];

        $check = "SELECT * FROM nilai WHERE id_jadwal='$id_jadwal'";
        $cari = mysqli_query($connect, $check);
        if (mysqli_num_rows($cari) >= 1) {
            $sql = "DELETE FROM nilai WHERE id_jadwal='$id_jadwal'";
            mysqli_query($connect, $sql);
        }

        $i = 0;
        foreach ($nim as $nim) {
            $rata = ($kuis[$i]+$uts[$i]+$uas[$i])/3;

            $indeks = gradingNilai($rata);

            $sql_data = "INSERT INTO nilai VALUES (NULL, '$id_jadwal', '$nim', '$kuis[$i]', '$uts[$i]', '$uas[$i]', '$indeks')";
            $query_data = mysqli_query($connect,$sql_data);
            $i++;
        }

        if ($query_data) {
            echo '<script>alert("Data Berhasil disimpan");window.location.href=\'nilai/detail.php?id='.$id_jadwal.'\';</script>';
        } else {
            echo '<script>alert("Data Gagal disimpan");window.location.href=\'nilai/detail.php?id='.$id_jadwal.'\';</script>';
        }
    }

    function gradingNilai($rata) {
        if ($rata > 80) {
            return 'A';
        } else if ($rata > 70 and $rata <= 80) {
            return 'AB';
        } else if ($rata > 65 and $rata <= 70) {
            return 'B';
        } else if ($rata > 60 and $rata <= 65) {
            return 'BC';
        } else if ($rata > 50 and $rata <= 60) {
            return 'C';
        } else if ($rata > 40 and $rata <= 50) {
            return 'D';
        } else {
            return 'E';
        }
    }




?>