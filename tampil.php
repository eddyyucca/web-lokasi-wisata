<!DOCTYPE html>
<html >
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.8.7, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
  <meta name="description" content="Web Generator Description">
  <title>Wisata</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/gallery/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">

  <link rel="stylesheet" href="dasbut/css/lib/datatables-net/datatables.min.css">
  <link rel="stylesheet" href="dasbut/css/separate/vendor/datatables-net.min.css">
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDHAa_3hfdcfrx_nOYfKh314xPbmfQNsZE&libraries=places"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDHAa_3hfdcfrx_nOYfKh314xPbmfQNsZE" type="text/javascript"></script>



</head>
<body>
  <section class="menu cid-qTkzRZLJNu" once="menu" id="menu1-e">



    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-caption-wrap">
                    <a class="navbar-caption text-white display-4" href="index.php">
                        Pariwisata Banua
                    </a>
                </span>
            </div>
        </div>

    </nav>
</section>
<section class="engine"><a href="">responsive website templates</a></section><section class="carousel slide cid-rbtCw9WUuO" data-interval="false" id="slider1-o">


                          <?php

                          include("koneksi.php");

                          // kalau tidak ada id di query string

                          //ambil id dari query string
                          $id_wisata = $_GET['id_wisata'];

                          // buat query untuk ambil data dari database
                          $sql = "SELECT * FROM db_wisata WHERE id_wisata=$id_wisata";
                          $query = mysqli_query($koneksi, $sql);
                          $kol = mysqli_fetch_assoc($query);{
                            echo '<br>';
                            echo '<br>';
                            echo '<br>';
                            echo '<br>';
                            echo '<center><table width="900px" >';
                            echo '<tr>';

                            echo '<th>';
                            echo '<h1 align=center>'.$kol['nm_wisata'].'</h1>';
                            echo '<br>';
                            echo '</th>';
                            echo '</tr>';
                            echo '<br>';
                            echo '<td>';
                            echo '<p align=justify >'.$kol['deskripsi'].'</p>';
                            echo '</td>';

                            echo '</table>';
                            echo "<img src='dasbut/gambar/".$kol['gambar1']."' width='300' height='300'>&nbsp";
                            echo "<img src='dasbut/gambar/".$kol['gambar2']."' width='300' height='300'>&nbsp";
                            echo "<img src='dasbut/gambar/".$kol['gambar3']."' width='300' height='300'><br>";
echo "<br>";
}
?></center>
  <br>

 <script>
 function initialize() {
   var propertiPeta = {
     center:new google.maps.LatLng(-2.992526, 115.351237),
     zoom:7,
     mapTypeId:google.maps.MapTypeId.ROADMAP
   };

   var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);

   // membuat Marker
   var marker=new google.maps.Marker({
       position: new google.maps.LatLng(<?php echo $kol['lat'] ?>,<?php echo $kol['lng'] ?>),
       map: peta,
       title : "klik Untuk Menampilkan Posisi Peta"
          });
          var contentinfo =
            '<h1>Link Menampilkan Map</h1>'+
            '<p><a href="http://www.google.com/maps/place/<?php echo $kol['lat'] ?>,<?php echo $kol['lng'] ?>">This is a link</a></p>';

          var infowindow = new google.maps.InfoWindow({
            content : contentinfo
          });

          google.maps.event.addListener(marker,'click',function(){
            infowindow.open(peta,marker);
          });

        }

 // event jendela di-load
 google.maps.event.addDomListener(window, 'load', initialize);
 </script>



   <div id="googleMap" style="width:100%;height:380px;"></div>

<br>
<div class="page-content">
  <div class="container-fluid">
<section class="card">
  <div class="card-block">
<form   method="POST" action="komentar.php">
  <input type="hidden" name="id_artikel" value="<?php echo $kol['id_wisata'] ?>">
<br>
<br>
      <h1>Berikan Komentar Anda</h1>
<br>
  <div class="input-group mb-3">
<input type="text" name="nama"  placeholder="Nama" class="form-control" aria-label="Nama Wisata" aria-describedby="basic-addon1" required>
</div>
<div class="input-group mb-3">
  <input type="email" name="email" placeholder="Email" class="form-control" aria-label="Nama Wisata" aria-describedby="basic-addon1" required>
</div>

<div class="input-group">
      <textarea type="text" name="komentar" placeholder="komentar" class="form-control" aria-label="With textarea" required></textarea>
  </div>
<br>
   <button type="submit" value="simpan" class="btn btn-primary">Kirim</button>


</form>
</section>
</div>
</div>
</div>


<br>
<?php

$id_wisata = $_GET['id_wisata'];
// buat query untuk ambil data dari database
$sql = "SELECT * FROM komentar WHERE id_artikel=$id_wisata";
$query = mysqli_query($koneksi, $sql);

while ($komentar = mysqli_fetch_array($query)){
?>
<div class="card">
  <div class="card-header">
<h5><?php echo $komentar['nama'] ?></h5>
<small><?php echo $komentar['email'] ?></small>
</div>
<div class="card-body">
<?php echo $komentar['komentar'] ?>
<hr>
</div>
</div>

  <br>

<?php } ?>
</table>


 <section once="" class="cid-rbtCewvpUN" id="footer6-n">
     <div class="container">
         <div class="media-container-row align-center mbr-white">
             <div class="col-12">
                 <p class="mbr-text mb-0 mbr-fonts-style display-7">
                     © Copyright 2018 Kismis development - All Rights Reserved
                 </p>
             </div>
         </div>
     </div>
 </section>



<script src="assets/web/assets/jquery/jquery.min.js"></script>
<script src="assets/popper/popper.min.js"></script>
<script src="assets/tether/tether.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/smoothscroll/smooth-scroll.js"></script>
<script src="assets/dropdown/js/script.min.js"></script>
<script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
<script src="assets/ytplayer/jquery.mb.ytplayer.min.js"></script>
<script src="assets/mbr-clients-slider/mbr-clients-slider.js"></script>
<script src="assets/masonry/masonry.pkgd.min.js"></script>
<script src="assets/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js"></script>
<script src="assets/vimeoplayer/jquery.mb.vimeo_player.js"></script>
<script src="assets/theme/js/script.js"></script>
<script src="assets/slidervideo/script.js"></script>
<script src="assets/gallery/player.min.js"></script>
<script src="assets/gallery/script.js"></script>



<script src="dasbut/js/app.js"></script>


</body>
</html>
