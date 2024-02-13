<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="./assets/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-secondary bg-img">
<?php
    require_once "./functions/koneksi.php";
    session_start();
    if(!$_SESSION){
      echo "<script>alert('Silahkan Lakukan Login Terlebih Dahulu!!'); location.href = 'index.php';</script>";
    }
?>
<!-- Header -->
<div class="collapse" id="navbarToggleExternalContent" data-bs-theme="dark">
  <div class="bg-dark p-4">
    <h5 class="text-body-emphasis h4">HomePage</h5>
    <span class="text-body-secondary">- Ayyub Muhammad.</span>
  </div>
</div>
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="link-offset-2 link-offset-3-hover link-underline-warning link-underline-opacity-0 link-underline-opacity-75-hover" href="./functions/logout.php">Logout</a>
  </div>
</nav>
<!-- Header -->

    <div class="min-vh-100 d-flex justify-content-center align-items-center">
        <div class="mx-auto p-4">
<!-- CARD -->
<div class="card border-info text-bg-dark shadow">
  <div class="card-header">
    Menu 1
  </div>
  <div class="card-body">
    <h5 class="card-title text-info">Kelola Data Anggota</h5>
    <p class="card-text">Data anggota yang tersedia. Tambah, edit dan hapus data.</p>
    <a href="pages/anggota/p_anggota.php" class="btn btn-primary">Buka Data Anggota</a>
  </div>
</div>
<!-- CARD Divider -->
<div class="card my-3 border-warning text-bg-dark shadow">
  <div class="card-header">
    Menu 2
  </div>
  <div class="card-body">
    <h5 class="card-title text-warning">Kelola Data Buku</h5>
    <p class="card-text">Kelola Data Buku yang tersedia. Tambah, edit dan hapus data yang ada.</p>
    <a href="pages/buku/p_buku.php" class="btn btn-primary">Buka Data Buku</a>
  </div>
</div>
<!-- CARD Divider -->
<div class="card shadow">
  <div class="card-header">
    Menu 3
  </div>
  <div class="card-body">
    <h5 class="card-title">Transaksi</h5>
    <p class="card-text">Kelola Transaksi, data pinjaman buku, denda dan pengembalian buku.</p>
    <a href="pages/transaksi/p_transaksi.php" class="btn btn-primary">Buka Transaksi</a>
  </div>
</div>
<!-- CARD END -->
        </div>
    </div>
</body>
</html>