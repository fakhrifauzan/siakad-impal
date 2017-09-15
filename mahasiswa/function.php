<?php
/**
 * Created by PhpStorm.
 * User: Fakhri Fauzan
 * Date: 15/09/2017
 * Time: 7:21
 */

    function getDataTagihanMahasiswa($connect) {
        $nim = $_SESSION['nim'];
        $sql = "SELECT * FROM registrasi WHERE nim='$nim'";
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
                            <td>".$value['status']."</td>";
                if ($value['status'] == 'Lunas') {
                    echo "<td>
                            <a href='../function.php?print=bukti&id=$value[id_registrasi]'>
                                <button type='button' class='btn btn-default'>Cetak Kwitansi</button>
                            </a>
                        </td>";
                } else {
                    echo "<td>
                            <a href='upload.php?upload=bukti&id=$value[id_registrasi]'>
                                <button type='button' class='btn btn-primary'>Upload Bukti Pembayaran</button>
                            </a>
                        </td>";

                }
                echo "</tr>";
            }
        }
    }

    if (isset($_GET["print"]) && $_GET['print'] == 'bukti') {
        echo"<script>alert('Fitur belum Tersedia!');window.location.href = 'registrasi';</script>";
    }

    if (isset($_POST["uploadBukti"])) {
        include_once '../koneksi.php';
        uploadBuktiPembayaran($connect);
        echo"<script>alert('Bukti telah ditambahkan!');window.location.href = 'registrasi/index.php';</script>";
    }

    function uploadBuktiPembayaran($connect) {
        $id_registrasi = $_POST['id_registrasi'];
        $tanggal = $_POST['tgl_transfer'];
        $bank = $_POST['bank'];
        $jumlah = $_POST['jumlah'];
        $pemilik_norek = $_POST['pemilik_rek'];

        $sql = "INSERT INTO bukti_pembayaran VALUES (NULL, '$id_registrasi', '$tanggal', '$bank', '$jumlah', '$pemilik_norek')";
        mysqli_query($connect,$sql);
    }

?>