<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anggota</title>
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
            <h4>Form Tambah Anggota</h4>
            <form action="" class="form" method="POST">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="id" name="id">
                    <label for="id">ID</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="no_anggota" name="no_anggota">
                    <label for="no_anggota">No. Anggota</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="nama" name="nama">
                    <label for="nama">Nama</label> 
                </div>
                <div class="row">
                    <div class="col-auto mx-auto">
                        <button type="button" class="btn btn-warning" onclick="location.href='p_anggota.php'">Kembali</button>
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
    $no_anggota1 = $_POST['no_anggota'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    
    $query = mysqli_query($conn, "INSERT INTO m_anggota (id, no_anggota, nama) VALUES ('$id', '$no_anggota1', '$nama')");
    if ($query) {
        header("location:p_anggota.php");
    }
} else {
  echo "Error";  
}

?>
</body>
</html>