<?php
  require '../koneksi.php';

  function getDataDosen($connect) {
    $sql = "SELECT * FROM dosen";
    $dosen = mysqli_query($connect, $sql);
    print_r($dosen);
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

  //
  // function getDataKelas() {
  //
  // }
  //
  // function getDataMahasiswa() {
  //
  // }
  //
  // function getDataMatkul() {
  //
  // }

?>
