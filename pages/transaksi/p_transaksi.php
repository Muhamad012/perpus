<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Anggota</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-secondary">
<?php
    include '../../functions/koneksi.php';
    session_start();
    if(!$_SESSION){
      echo "<script>alert('Silahkan Lakukan Login Terlebih Dahulu!!'); location.href = '../../index.php';</script>";
    }
?>
<!-- Header -->
<div class="collapse" id="navbarToggleExternalContent" data-bs-theme="dark">
  <div class="bg-dark p-4">
    <h5 class="text-body-emphasis h4">Transaksi</h5>
    <span class="text-body-secondary">- Ayyub Muhammad.</span>
  </div>
</div>
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="link-offset-2 link-offset-3-hover link-underline-warning link-underline-opacity-0 link-underline-opacity-75-hover" href="../../functions/logout.php">Logout</a>
  </div>
</nav>
<!-- Header -->

<div class="min-vh-100 d-flex flex-column justify-content-center align-items-center">
    <div class="container-sm p-4 bg-dark bg-opacity-50 rounded shadow">
        <!-- Table 2 -->
        <a class="btn btn-warning" href="../../main.php">Kembali</a>
        <a class="btn btn-primary" href="p_pinjam.php">Pinjam Buku</a>
            <div class="table-reponsive overflow-auto">
                <table class="table table-dark table-striped table-bordered align-middle caption-top">
                    <caption class="text-start">
                        <h4>Data Transaksi</h4>
                    </caption>
                    <thead>
                        <tr>
                          <!-- `id`, `id_buku`, `id_anggota`, `kode_transaksi`, `waktu_transaksi`, `waktu_pengembalian`, `denda` -->
                            <th scope="col">#</th>
                            <th scope="col">ID Buku</th>
                            <th scope="col">ID Anggota</th>
                            <th scope="col">Kode Transaksi</th>
                            <th scope="col">Waktu Transaksi</th>
                            <th scope="col">Waktu Pengembalian</th>
                            <th scope="col">Denda</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php
                      $sql = "SELECT * FROM t_peminjaman_detail";
                      $result = mysqli_query($conn, $sql);
                      foreach($result as $row){
                        // Hitung Denda
                            $selisih = strtotime($row["waktu_pengembalian"]) - strtotime($row["waktu_transaksi"]);
                            $hari = floor($selisih / (60 * 60 * 24)); // hitung selisih hari
                            $denda = $row["denda"];
                            $totaldenda = 0;
                            if ($hari > 3) {
                              $totaldenda = ($hari - 3) * $denda;
                            }
                      ?>
                        <tr>
                            <td scope="row"><?php echo $row['id']; ?></td>
                            <td><?php echo $row['id_buku']; ?></td>
                            <td><?php echo $row['id_anggota']; ?></td>
                            <td><?php echo $row['kode_transaksi']; ?></td>
                            <td><?php echo $row['waktu_transaksi']; ?></td>
                            <td><?php echo $row['waktu_pengembalian']; ?></td>
                            <td><?php echo $totaldenda ?></td>
                            <td>
                              <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Edit</a>
                              <a href="hapus.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                      <?php
                      }
                      ?>
                    </tbody>
                </table>
            </div>
            <!-- Table 2 END -->
    </div>
</div>
</body>
</html>