<?php
    require_once "koneksi.php";
    session_start();
    session_destroy();
    echo "<script>alert('Anda Berhasil Logout!!'); location.href = '../index.php';</script>";
?>