 <?php
 //koneksi
 $server="localhost";
 $username="root";
 $password="";
 $database="data_wisata";

 $koneksi = mysqli_connect($server,$username,$password,$database);
 mysqli_connect($server,$username,$password,$database)or die("gagal, database tidak ditemukan");
 ?>
