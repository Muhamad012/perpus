<?php
include "../../functions/koneksi.php";
$id = $_GET['id'];
$query = mysqli_query($conn, "DELETE FROM t_peminjaman_detail WHERE id='$id'");
if ($query) {
    header("location:p_transaksi.php");
}
?>