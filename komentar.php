<?php
include ("koneksi.php");

$id_komentar = $_POST["id_komentar"];
$id_artikel = $_POST["id_artikel"];
$nama      = $_POST["nama"];
$email    = $_POST["email"];
$komentar     = $_POST["komentar"];

mysqli_query($koneksi,"INSERT INTO komentar VALUES
('$id_komentar','$id_artikel','$nama','$email','$komentar')");
header("location:tampil.php?id_wisata='$id_artikel'");


 ?>
