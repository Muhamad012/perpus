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
// SELECT * FROM `t_peminjaman_detail` WHERE `id` = $id
$query = mysqli_query($conn, "SELECT * FROM t_peminjaman_detail WHERE id='$id'");
$data = mysqli_fetch_array($query);
?>
<body class="bg-secondary">
    <div class="min-vh-100 d-flex justify-content-center align-items-center">
        <div class="mx-auto p-4 bg-dark bg-opacity-50 rounded shadow">
            <h4>Form Pinjam Buku</h4>
            <!-- `id`, `id_buku`, `id_anggota`, `kode_transaksi`, `waktu_transaksi`, `waktu_pengembalian`, `denda` -->
            <form action="" class="form" method="POST">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="id" name="id" value="<?php echo $data['id']; ?>">
                    <label for="id">ID</label>
                </div>

                <!-- `isbn`dari table m_buku -->
                <div class="form-floating mb-3">
                    <select name="id_buku" id="id_buku" class="form-select" id="floatingSelect" aria-label="Floating label select">
                        <?php
                        $sql = mysqli_query($conn, "SELECT * FROM m_buku");
                        while ($rows = mysqli_fetch_array($sql)) {
                            echo "<option value='" . $rows['id'] . "'>" . $rows['isbn'] . "</option>";
                        }
                        ?>
                    </select>
                    <label for="id_buku">ID Buku</label> 
                </div>
                <!-- id_buku end -->

                <!-- `id_anggota`dari table m_anggota -->
                <div class="form-floating mb-3">
                    <select name="id_anggota" id="id_anggota" class="form-select" id="floatingSelect" aria-label="Floating label select">
                        <?php echo "<option value='" . $data['id_anggota'] . "'>" . $data['id_anggota'] . "</option>";?>
                    </select>
                    <label for="id_anggota">Id anggota</label>
                </div>
                <!-- id_anggota end -->

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="kode_transaksi" name="kode_transaksi" value="<?php echo $data['kode_transaksi']; ?>">
                    <label for="kode_transaksi">Kode transaksi</label>
                </div>

                <!-- `waktu_transaksi`, -->
                <div class="row">
                    <div class="col">
                        <div class="form-floating mb-3">
                            <input type="datetime" class="form-control" id="waktu_transaksi" name="waktu_transaksi" value="<?php echo $data['waktu_transaksi']; ?>">
                            <label for="waktu_transaksi">Waktu transaksi</label> 
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating mb-3">
                            <input type="datetime" class="form-control" id="waktu_pengembalian" name="waktu_pengembalian" value="<?php echo $data['waktu_pengembalian']; ?>">
                            <label for="waktu_pengembalian">Waktu Pengembalian</label> 
                        </div>
                    </div>
                </div>
                <!-- waktu_pengembalian end -->
                <!-- Denda -->
                <div class="form-floating mb-3">
                    <!-- lewat 3 hari = 1000/hari -->
                    <select name="denda" id="denda" class="form-select" id="floatingSelect" aria-label="Floating label select">
                        <option value="">Pilih</option>
                        <option value="0">RP.0</option>
                        <option value="1000">RP.1000</option>
                    </select>
                    <label for="denda">Denda</label> 
                </div>
                <!-- Denda END -->
                <div class="row">
                    <div class="col-auto mx-auto">
                        <button type="button" class="btn btn-warning" onclick="location.href='p_transaksi.php'">Kembali</button>
                    </div>
                    <div class="col-auto mx-auto">
                        <button type="submit" class="btn btn-primary" name="ubah">Ubah</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<!-- `id`, `id_buku`, `id_anggota`, `kode_transaksi`, `waktu_transaksi`, `waktu_pengembalian`, `denda` -->
<?php
if(isset($_POST['ubah'])){
    $id = $_POST['id'];
    $id_buku = $_POST['id_buku'];
    $id_anggota = $_POST['id_anggota'];
    $kode_transaksi = $_POST['kode_transaksi'];
    $waktu_transaksi = $_POST['waktu_transaksi'];
    $waktu_pengembalian = $_POST['waktu_pengembalian'];
    $denda = $_POST['denda'];
    $saved = mysqli_query($conn, "UPDATE t_peminjaman_detail SET id_buku='$id_buku', id_anggota='$id_anggota', kode_transaksi='$kode_transaksi', waktu_transaksi='$waktu_transaksi', waktu_pengembalian='$waktu_pengembalian', denda='$denda' WHERE id='$id'");
    if ($saved) {
        echo "<script>alert('Data berhasil diubah'); location.href='p_transaksi.php'</script>";
    }
}
?>
</body>
</html>