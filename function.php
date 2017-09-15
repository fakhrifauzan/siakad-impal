<?php
/**
 * Created by PhpStorm.
 * User: Fakhri Fauzan
 * Date: 14/09/2017
 * Time: 21:38
 */

    function cek_login() {
        session_start();
        if ($_SESSION) {
            $level = $_SESSION['level'];
            if ($level == "admin") {
                header("Location: admin");
            } else if ($level == "dosen") {
                header("Location: dosen");
            } else if ($level == "mahasiswa") {
                header("Location: mahasiswa");
            } else {
                header("Location: paycheck");
            }
        }
    }

    if (isset($_POST["login"])) {
        include_once 'koneksi.php';
        $username = $_POST['username'];
        $password = $_POST['password'];
        $level = $_POST['level'];

        pros_login($connect, $username, $password, $level);
    }

    function pros_login($connect, $username, $password, $level) {
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['level'] = $level;
        $_SESSION['status'] = 'login';
        if ($level == 'mahasiswa') {
            $sql = "SELECT * FROM mahasiswa WHERE username='$username' AND password='$password'";
            $query = mysqli_query($connect, $sql);
            if (mysqli_num_rows($query) >= 1) {
                $mhs = mysqli_fetch_assoc($query);
                $_SESSION['nim'] = $mhs['nim'];
                $_SESSION['nama'] = $mhs['nama'];
                echo"<script>window.location.href = 'mahasiswa';</script>";
            } else {
                loginFailed();
            }
        }
        if ($level == 'dosen') {
            $sql = "SELECT * FROM dosen WHERE username='$username' AND password='$password'";
            $query = mysqli_query($connect, $sql);
            if (mysqli_num_rows($query) >= 1) {
                $dosen = mysqli_fetch_assoc($query);
                $_SESSION['kode_dosen'] = $dosen['kode_dosen'];
                $_SESSION['nama_dosen'] = $dosen['nama_dosen'];
                echo"<script>window.location.href = 'dosen';</script>";
            } else {
                loginFailed();
            }
        }
        if ($level == 'paycheck') {
            $sql = "SELECT * FROM paycheck WHERE username='$username' AND password='$password'";
            $query = mysqli_query($connect, $sql);
            if (mysqli_num_rows($query) >= 1) {
                $paycheck = mysqli_fetch_assoc($query);
                echo"<script>window.location.href = 'paycheck';</script>";
            } else {
                loginFailed();
            }
        }
        if ($level == 'admin') {
            $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
            $query = mysqli_query($connect, $sql);
            if (mysqli_num_rows($query) >= 1) {
                $admin = mysqli_fetch_assoc($query);
                echo"<script>window.location.href = 'admin';</script>";
            } else {
                loginFailed();
            }
        }
    }

    function loginFailed() {
        session_start();
        session_destroy();
        echo"<script>alert('Username atau Password Salah!');window.location.href = 'index.php';</script>";
    }

    if (isset($_GET["act"]) && $_GET["act"] == "logout"){
        session_start();
        session_destroy();
        echo"<script>window.location.href = 'index.php';</script>";
    }
?>