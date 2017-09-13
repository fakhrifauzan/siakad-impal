<?php

  //Konfigurasi Database
  $host = "localhost";
  $user = "admin";
  $password = "root";
  $database = "lalalala";

  $connect = mysqli_connect($host, $user, $password, $database);

  if (mysqli_connect_errno()){
      echo "Gagal Terhubung. ".mysqli_connect_error();
  } else {
  	  echo "Koneksi Berhasil";
  }

?>
