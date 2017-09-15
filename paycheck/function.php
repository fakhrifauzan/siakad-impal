<?php
/**
 * Created by PhpStorm.
 * User: Fakhri Fauzan
 * Date: 15/09/2017
 * Time: 8:28
 */

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
                            <td>".$value['status']."</td>";
                if ($value['status'] == 'Lunas') {
                    echo "<td>
                            <a href='../function.php?print=bukti&id=$value[id_registrasi]'>
                                <button type='button' class='btn btn-default'>Cetak Kwitansi</button>
                            </a>
                        </td>";
                } else {
                    echo "<td>
                            <a href='bukti.php?bukti=ok&id=$value[id_registrasi]'>
                                <button type='button' class='btn btn-primary'>Lihat Bukti Pembayaran</button>
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

    if (isset($_POST["verifikasiBukti"])) {
        include_once '../koneksi.php';
        verifikasiBuktiPembayaran($connect);
        echo"<script>alert('Bukti telah diverifikasi!');window.location.href = 'registrasi';</script>";
    }

    function verifikasiBuktiPembayaran($connect) {
        $id_registrasi = $_POST['id_registrasi'];

        $sql = "UPDATE registrasi SET status = 'Lunas' WHERE id_registrasi = '$id_registrasi'";
        mysqli_query($connect,$sql);
    }

?>