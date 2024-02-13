<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anggota</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<?php
include "../../functions/koneksi.php";
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM m_anggota WHERE id='$id'");
$data = mysqli_fetch_array($query);
?>
<body class="bg-secondary">
    <div class="min-vh-100 d-flex justify-content-center align-items-center">
        <div class="mx-auto p-4 bg-dark bg-opacity-50 rounded shadow">
            <h4>Form EDIT Anggota</h4>
            <form action="" class="form" method="POST">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="id" name="id" value="<?php echo $data['id']; ?>">
                    <label for="id">ID</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="no_anggota" name="no_anggota" value="<?php echo $data['no_anggota']; ?>">
                    <label for="no_anggota">No. Anggota</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data['nama']; ?>">
                    <label for="nama">Nama</label> 
                </div>
                <div class="row">
                    <div class="col-auto mx-auto">
                        <button type="button" class="btn btn-warning" onclick="location.href='p_anggota.php'">Kembali</button>
                    </div>
                    <div class="col-auto mx-auto">
                        <button type="submit" class="btn btn-primary" name="ubah">Ubah</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php
if(isset($_POST['ubah'])){
    $id = $_POST['id'];
    $no_anggota1 = $_POST['no_anggota'];
    $nama = $_POST['nama'];
    
    $query = mysqli_query($conn, "UPDATE m_anggota SET no_anggota='$no_anggota1', nama='$nama' WHERE id='$id'");
    if ($query) {
        header("location:p_anggota.php");
    }
}
?>
</body>
</html>