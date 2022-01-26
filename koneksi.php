<?php
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'hafecs';

    $con = mysqli_connect($server,$username,$password) or die("Koneksi Gagal!"); 
    mysqli_select_db($con, $database) or die("Database belum ada, silahkan import database!");
?>