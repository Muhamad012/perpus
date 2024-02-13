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
    <h5 class="text-body-emphasis h4">Buku</h5>
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
        <a class="btn btn-primary" href="tambah.php">Tambah Buku</a>
            <div class="table-reponsive overflow-auto">
                <table class="table table-dark table-striped table-bordered align-middle caption-top">
                    <caption class="text-start">
                        <h4>Data Buku</h4>
                    </caption>
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Kode Buku</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Pengarang</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                         $sql = "SELECT * FROM m_buku";
                         $result = mysqli_query($conn, $sql);
                         while($row = mysqli_fetch_assoc($result)){
                        ?>
                        <tr>
                            <td scope="row"><?php echo $row['id']; ?></td>
                            <td><?php echo $row['kode_buku']; ?></td>
                            <td><?php echo $row['judul']; ?></td>
                            <td><?php echo $row['pengarang']; ?></td>
                            <td>
                                <a class="btn btn-warning" href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                                <a class="btn btn-danger" href="hapus.php?id=<?php echo $row['id']; ?>">Hapus</a>
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