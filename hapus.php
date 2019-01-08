<?php
 include "koneksi.php";
$id_wisata = $_GET['id_wisata'];
$sql = "DELETE FROM db_wisata WHERE id_wisata='$id_wisata'";
$query = mysqli_query($koneksi,$sql);

header("location:data.php?pesan=hapus");
?>
