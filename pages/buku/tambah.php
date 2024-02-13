<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-secondary">
<?php
    include "../../functions/koneksi.php";
    session_start();
    if(!$_SESSION){
      echo "<script>alert('Silahkan Lakukan Login Terlebih Dahulu!!'); location.href = '../../index.php';</script>";
    }
?>
    <div class="min-vh-100 d-flex justify-content-center align-items-center">
        <div class="mx-auto p-4 bg-dark bg-opacity-50 rounded shadow">
            <h4>Form Tambah Buku</h4>
            <!-- id	isbn	judul	pengarang -->
            <form action="" class="form" method="POST">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="id" name="id">
                    <label for="id">ID</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="kode_buku" name="kode_buku">
                    <label for="kode_buku">Kode Buku</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="judul" name="judul">
                    <label for="judul">Judul</label> 
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="pengarang" name="pengarang">
                    <label for="pengarang">Pengarang</label> 
                </div>
                <div class="row">
                    <div class="col-auto mx-auto">
                        <button type="button" class="btn btn-warning" onclick="location.href='p_buku.php'">Kembali</button>
                    </div>
                    <div class="col-auto mx-auto">
                        <button type="submit" class="btn btn-primary" name="tambah">Tambah</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php
if (isset($_POST['tambah'])) {
    $id = $_POST['id'];
    $kode_buku = $_POST['kode_buku'];
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    
    $query = mysqli_query($conn, "INSERT INTO m_buku (id, kode_buku, judul, pengarang) VALUES ('$id', '$kode_buku', '$judul', '$pengarang')");
    if ($query) {
        header("location:p_buku.php");
    }
} else {
  echo "Error";
}
?>
</body>
</html>