<?php
/**
 * Created by PhpStorm.
 * User: Fakhri Fauzan
 * Date: 14/09/2017
 * Time: 22:53
 */
    function getDataJadwalDosen($connect) {
        session_start();
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
?>