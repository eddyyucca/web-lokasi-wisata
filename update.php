<?php
 include ("koneksi.php");

 //$nm_wisata = $_POST["nm_wisata"];


  $id_wisata = $_POST['id_wisata'];
  $nm_wisata = $_POST['nm_wisata'];
  $deskripsi = $_POST['deskripsi'];
  $kab       = $_POST['kab'];
  $lat       = $_POST['lat'];
  $lng       = $_POST['lng'];
  $wisata    = $_POST['wisata'];

  $jumlah = count($_FILES['gambar']['name']);
  if ($jumlah > 0) {
    $gambar = array();
    for ($i=0; $i < $jumlah; $i++) {
      $file_name = $_FILES['gambar']['name'][$i];
      $tmp_name = $_FILES['gambar']['tmp_name'][$i];
      move_uploaded_file($tmp_name, "gambar/".$file_name);
      $gambar[$i] = $file_name;
    }

  mysqli_query($koneksi,"UPDATE db_wisata SET
    nm_wisata='$nm_wisata',
    deskripsi='$deskripsi',
    kab='$kab',
    lat='$lat',
    lng='$lng',
    gambar1='$gambar[0]',
    gambar2='$gambar[1]',
    gambar3='$gambar[2]',
    wisata='$wisata'
    where
    id_wisata='$id_wisata'");

  header("location:data.php");
}
  ?>
