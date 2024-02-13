<?php
include "../../functions/koneksi.php";
$del = $_GET['id'];
$query = mysqli_query($conn, "DELETE FROM m_anggota WHERE id='$del'");
if ($query) {
    header("location:p_anggota.php");
}
?>