<?php
include "../../functions/koneksi.php";
$id = $_GET['id'];
$query = mysqli_query($conn, "DELETE FROM m_buku WHERE id='$id'");
if ($query) {
    header("location:p_buku.php");
}
?>