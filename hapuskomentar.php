<?php
 include "koneksi.php";
$id_komentar = $_GET['id_komentar'];

$sql = "DELETE FROM komentar WHERE id_komentar=$id_komentar";
$query = mysqli_query($koneksi,$sql);


header("location:filterkomentar.php?pesan=sukses");

?>
