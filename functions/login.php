<?php
    include "koneksi.php";

    session_start();
    $username = $_POST['user'];
    $password = $_POST['pass'];

    $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";

    $result = $conn->query($sql);

    if ($result->num_rows>0){
        $row = $result->fetch_array();
        $_SESSION['user'] = $username;
        $_SESSION['pass'] = $password;
        echo "<script>alert('Anda Berhasil Login!!'); location.href = '../main.php';</script>";
    }

    else{
        echo "<script>alert('Gagal Melakukan Login!! (Username/Password Salah)'); location.href = '../index.php';</script>";
    }
?>