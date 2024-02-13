<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<?php
include '../../functions/koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM m_buku WHERE id='$id'");
$data = mysqli_fetch_array($query);
?>
<body class="bg-secondary">
    <div class="min-vh-100 d-flex justify-content-center align-items-center">
        <div class="mx-auto p-4 bg-dark bg-opacity-50 rounded shadow">
            <h4>Form Tambah Buku</h4>
            <!-- id	isbn	judul	pengarang -->
            <form action="" class="form" method="POST">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="id" name="id" value="<?php echo $data['id']; ?>">
                    <label for="id">ID</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="kode_buku" name="kode_buku" value="<?php echo $data['kode_buku']; ?>">
                    <label for="kode_buku">Kode Buku</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="judul" name="judul" value="<?php echo $data['judul']; ?>">
                    <label for="judul">Judul</label> 
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="pengarang" name="pengarang" value="<?php echo $data['pengarang']; ?>">
                    <label for="pengarang">Pengarang</label> 
                </div>
                <div class="row">
                    <div class="col-auto mx-auto">
                        <button type="button" class="btn btn-warning" onclick="location.href='p_buku.php'">Kembali</button>
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
    $kode_buku = $_POST['kode_buku'];
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    
    $query = mysqli_query($conn, "UPDATE m_buku SET kode_buku='$kode_buku', judul='$judul', pengarang='$pengarang' WHERE id='$id'");
    if ($query) {
        header("location:p_buku.php");
    }
}
?>
</body>
</html>