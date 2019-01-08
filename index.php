<!DOCTYPE html>
<html >
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.8.7, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
  <meta name="description" content="Web Generator Description">
  <title>Pariwisata Banua</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/gallery/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">

  <link rel="stylesheet" href="dasbut/css/lib/datatables-net/datatables.min.css">
  <link rel="stylesheet" href="dasbut/css/separate/vendor/datatables-net.min.css">




</head>
<body>
  <section class="menu cid-qTkzRZLJNu" once="menu" id="menu1-e">



    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm bg-color transparent">
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
                        <h2>Pariwisata Banua</h2>
                    </a>
                </span>
            </div>
        </div>

    </nav>
</section>

<section class="engine"><a href="">responsive website templates</a></section><section class="carousel slide cid-rbtCw9WUuO" data-interval="false" id="slider1-o">



    <div class="full-screen"><div class="mbr-slider slide carousel" data-pause="true" data-keyboard="false" data-ride="carousel" data-interval="4000"><ol class="carousel-indicators"><li data-app-prevent-settings="" data-target="#slider1-o" data-slide-to="0"></li><li data-app-prevent-settings="" data-target="#slider1-o" class=" active" data-slide-to="1"></li><li data-app-prevent-settings="" data-target="#slider1-o" data-slide-to="2"></li></ol><div class="carousel-inner" role="listbox"><div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(assets/images/drawan.jpg);"><div class="container container-slide"><div class="image_wrapper"><div class="mbr-overlay"></div><img src="assets/images/1.jpg"><div class="carousel-caption justify-content-center"><div class="col-10 align-center"><h2 class="mbr-fonts-style display-1">Alam Yang Terjaga</h2><p class="lead mbr-text mbr-fonts-style display-5">testetetajhsjhajshjahhsjhajhsjbjbdkajbdjhabsdhjabdashdbsdjahdbjsahbdjbkhd</p></div></div></div></div></div><div class="carousel-item slider-fullscreen-image active" data-bg-video-slide="false" style="background-image: url(assets/images/tes.jpg);"><div class="container container-slide"><div class="image_wrapper"><div class="mbr-overlay"></div><img src="assets/images/2.jpg"><div class="carousel-caption justify-content-center"><div class="col-10 align-left"><h2 class="mbr-fonts-style display-1">Rasakan Keramahan Kami</h2><p class="lead mbr-text mbr-fonts-style display-5">Dalam Adat Dan Budaya</p></div></div></div></div></div><div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(assets/images/bekantan.jpg);"><div class="container container-slide"><div class="image_wrapper"><div class="mbr-overlay" style="opacity: 0.5;"></div><img src="assets/images/3.jpg"><div class="carousel-caption justify-content-center"><div class="col-10 align-right"><h2 class="mbr-fonts-style display-1">Tempat Yang Indah</h2><p class="lead mbr-text mbr-fonts-style display-5">Nikmati Tempat Yang Nyaman Untuk Berlibur Di Banjarmasin</p></div></div></div></div></div></div><a data-app-prevent-settings="" class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#slider1-o"><span aria-hidden="true" class="mbri-left mbr-iconfont"></span><span class="sr-only">Previous</span></a><a data-app-prevent-settings="" class="carousel-control carousel-control-next" role="button" data-slide="next" href="#slider1-o"><span aria-hidden="true" class="mbri-right mbr-iconfont"></span><span class="sr-only">Next</span></a></div></div>

</section><br>
<!--disini-->
            <?php
             include "koneksi.php";
            $sql = mysqli_query($koneksi,"SELECT * FROM db_wisata");


             $perpage = 3;
             $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
             $start = ($page > 1) ? ($page * $perpage) - $perpage : 0;

             $articles = "SELECT * FROM db_wisata LIMIT $start, $perpage";
             $result2 = mysqli_query($koneksi, $articles);

            $total = mysqli_num_rows($sql);
            $pages = ceil($total/$perpage);
            ?>

            <?php while ($row = mysqli_fetch_assoc($result2)) { ?>
                <div class="container">
      <div class="rom-btm">
        <div class="row">
				<div class="col-md-4">
					<img src="dasbut/gambar/<?php echo $row['gambar1']?>" class="img-thumbnail">
				</div>
        <div class="col-md-6">
          <br>
					<h4><a href="tampil.php?id_wisata=<?php echo $row['id_wisata']?>"><?php echo $row['nm_wisata'] ?></a></h4>
					<p>Wisata : <?php echo $row['wisata'] ?></p>
          <h6><?php echo $deskripsi = substr($row['deskripsi'], 0, 150);?><small> ........</small></h6><br>
				</div>
      </div>
    </div>
  </div>

    </div>
    <br>
          <div>
            <?php } ?>
            <nav aria-label="Page navigation example">
               <ul class="pagination justify-content-center">
            <?php for($i=1; $i<=$pages; $i++){ ?>
              <li class="page-item"><a class="page-link" href="?halaman=<?php echo $i?>"><?php echo $i?></a></li>
            <?php } ?>
          </ul>
        </nav>
      </div>
        </div>






<section class="mbr-section article content9 cid-rbtIKHNY2R" id="content9-u">



    <div class="container">
        <div class="inner-container" style="width: 100%;">
            <hr class="line" style="width: 25%;">
            <div class="section-text align-center mbr-fonts-style display-5">
                    Mobirise is one of the easiest website development tools available today. It also gives you the freedom to develop as many websites as you like given the fact that it is a desktop app.
                </div>
            <hr class="line" style="width: 25%;">
        </div>
        </div>
</section>


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


	<script src="dasbut/js/lib/datatables-net/datatables.min.js"></script>
	<script>
		$(function() {
			$('#example').DataTable();
		});
	</script>

<script src="dasbut/js/app.js"></script>


</body>
</html>
