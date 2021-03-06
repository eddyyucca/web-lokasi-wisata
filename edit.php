<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Edit Data WIsata</title>

	<link href="img/favicon.144x144.png" rel="apple-touch-icon" type="image/png" sizes="144x144">
	<link href="img/favicon.114x114.png" rel="apple-touch-icon" type="image/png" sizes="114x114">
	<link href="img/favicon.72x72.png" rel="apple-touch-icon" type="image/png" sizes="72x72">
	<link href="img/favicon.57x57.png" rel="apple-touch-icon" type="image/png">
	<link href="img/favicon.png" rel="icon" type="image/png">
	<link href="img/favicon.ico" rel="shortcut icon">

  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDHAa_3hfdcfrx_nOYfKh314xPbmfQNsZE&libraries=places"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDHAa_3hfdcfrx_nOYfKh314xPbmfQNsZE" type="text/javascript"></script>


	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
<link rel="stylesheet" href="css/lib/lobipanel/lobipanel.min.css">
<link rel="stylesheet" href="css/separate/vendor/lobipanel.min.css">
<link rel="stylesheet" href="css/lib/jqueryui/jquery-ui.min.css">
<link rel="stylesheet" href="css/separate/pages/widgets.min.css">
    <link rel="stylesheet" href="css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="css/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body class="with-side-menu control-panel control-panel-compact">

	<header class="site-header">
	    <div class="container-fluid">
	        <a href="index.php" class="site-logo">
	            <img class="hidden-md-down" src="img/logo-2.png" alt="">
	            <img class="hidden-lg-down" src="img/logo-2-mob.png" alt="">
	        </a>

	        <button id="show-hide-sidebar-toggle" class="show-hide-sidebar">
	            <span>toggle menu</span>
	        </button>

	        <button class="hamburger hamburger--htla">
	            <span>toggle menu</span>
	        </button>
	        <div class="site-header-content">
	            <div class="site-header-content-in">
	                <div class="site-header-shown">
	                    <div class="dropdown dropdown-notification notif">

	                    </div>
	                    <div class="dropdown user-menu">
	                        <button class="dropdown-toggle" id="dd-user-menu" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                            <img src="img/avatar-2-64.png" alt="">
	                        </button>
	                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd-user-menu">
	                            <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-user"></span>Profile</a>
	                            <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-cog"></span>Settings</a>
	                            <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-question-sign"></span>Help</a>
	                            <div class="dropdown-divider"></div>
	                            <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-log-out"></span>Logout</a>
	                        </div>
	                    </div>

	                    <button type="button" class="burger-right">
	                        <i class="font-icon-menu-addl"></i>
	                    </button>
	                </div><!--.site-header-shown-->





	                            </form>
	                        </div>
	                    </div><!--.site-header-collapsed-in-->
	                </div><!--.site-header-collapsed-->
	            </div><!--site-header-content-in-->
	        </div><!--.site-header-content-->
	    </div><!--.container-fluid-->
	</header><!--.site-header-->

					<div class="mobile-menu-left-overlay"></div>
					<nav class="side-menu">
					    <ul class="side-menu-list">
					        <li class="grey with-sub">
										<a href="index.php">
											 <i class="font-icon font-icon-dashboard"></i>
												<span class="lbl">Home</span>
										</a>
													</li>
													<li class="magenta with-sub">
																<a href="input.php">
																		<i class="glyphicon glyphicon-th"></i>
																		<span class="lbl">Masukkan Data Table</span>
																</a>
														</li>

														<li class="red">
																	<a href="data.php">
																			<i class="glyphicon glyphicon-list-alt"></i>
																			<span class="lbl">Tampilkan Data table</span>
																	</a>
															</li>
															<li class="red">
																		<a href="filterkomentar.php">
																				<i class="glyphicon glyphicon-list-alt"></i>
																				<span class="lbl">Filter Komentar</span>
																		</a>
																</li>
											</ul>

                      	</nav><!--.side-menu-->

                        <?php

                        include("koneksi.php");

                        // kalau tidak ada id di query string
                        if( !isset($_GET['id_wisata']) ){
                            header('Location: data.php');
                        }

                        //ambil id dari query string
                        $id_wisata = $_GET['id_wisata'];

                        // buat query untuk ambil data dari database
                        $sql = "SELECT * FROM db_wisata WHERE id_wisata=$id_wisata";
                        $query = mysqli_query($koneksi, $sql);
                        $kol = mysqli_fetch_assoc($query);{

                        ?>

												<div class="page-content">
													<div class="container-fluid">
														<header class="section-header">
																<h1>Edit Data Wisata</h1>
															</header>
															<section class="card">
																<div class="card-block">
                                <form method="POST" action="update.php" enctype="multipart/form-data">


 																 <div class="input-group mb-3">
 																    <div class="input-group-prepend">
 																      <span class="input-group-text" id="basic-addon1">Nama Wisata</span>
 																    </div>
                                      <input type="text"  name="nm_wisata" class="form-control" placeholder="Nama Wisata" aria-label="Nama Wisata" aria-describedby="basic-addon1" value="<?php echo $kol['nm_wisata'] ?>" />
                                    </div>
                                 <br>


															<div class="input-group mb-3">
																<div class="input-group-prepend">
																	<label class="input-group-text" for="inputGroupSelect01">kabupaten</label>
																</div>
                                      <?php  $kab = $kol['wisata']; ?>
                                       <select  name="kab" class="custom-select" id="inputGroupSelect01">
                                         <option <?php echo ($kab == 'Kabupaten Balangan') ? "selected": "" ?>>Kabupaten Balangan</option>
                                         <option <?php echo ($kab == 'Kabupaten Banjar') ? "selected": "" ?>>Kabupaten Banjar</option>
                                         <option <?php echo ($kab == 'Kabupaten Barito Kuala') ? "selected": "" ?>>	Kabupaten Barito Kuala</option>
                                         <option <?php echo ($kab == 'Kabupaten Hulu Sungai Selatan') ? "selected": "" ?>>Kabupaten Hulu Sungai Selatan</option>
                                         <option <?php echo ($kab == 'Kabupaten Hulu Sungai Tengah') ? "selected": "" ?>>Kabupaten Hulu Sungai Tengah</option>
                                         <option <?php echo ($kab == 'Kabupaten Hulu Sungai Utara') ? "selected": "" ?>>Kabupaten Hulu Sungai Utara</option>
                                         <option <?php echo ($kab == 'Kabupaten Kotabaru') ? "selected": "" ?>>Kabupaten Kotabaru</option>
                                         <option <?php echo ($kab == 'Kabupaten Tabalong') ? "selected": "" ?>>Kabupaten Tabalong</option>
                                         <option <?php echo ($kab == 'Kabupaten Tanah Bumbu') ? "selected": "" ?>>Kabupaten Tanah Bumbu</option>
                                         <option <?php echo ($kab == 'Kabupaten Tanah Laut') ? "selected": "" ?>>	Kabupaten Tanah Laut</option>
                                         <option <?php echo ($kab == 'Kabupaten Tapin') ? "selected": "" ?>>Kabupaten Tapin</option>
                                         <option <?php echo ($kab == 'Kota Banjarbaru') ? "selected": "" ?>>Kota Banjarbaru</option>
                                         <option <?php echo ($kab == 'Kota Banjarmasin') ? "selected": "" ?>>Kota Banjarmasin</option>
                                       </select>
                                     </div> <br>

																		 <div class="input-group mb-3">
																			 <div class="input-group-prepend">
																				 <label class="input-group-text" for="inputGroupSelect01">Wisata</label>
																			 </div>
																			<?php  $wisata = $kol['wisata']; ?>
																			<select name="wisata" class="custom-select" id="inputGroupSelect01">
																				<option <?php echo ($wisata == 'wisata pantai') ?                 "selected": "" ?>>wisata pantai</option>
																				<option <?php echo ($wisata == 'wisata budaya,sejarah & agama') ? "selected": "" ?>>wisata budaya,sejarah & agama</option>
																				<option <?php echo ($wisata == 'wisata alam') ?                   "selected": "" ?>>wisata alam</option>
																				<option <?php echo ($wisata == 'wisata museum') ?                 "selected": "" ?>>wisata museum</option>
																			</select>
																		</div>
																	 <br>

																		 <div class="input-group">
			 																<div class="input-group-prepend">
			 																	<span class="input-group-text">Deskripsi Wisata</span>
			 																</div>
                               <textarea type="text" name="deskripsi"  class="form-control" aria-label="With textarea" style="width:100%;height:380px;"><?php echo $kol['deskripsi'] ?></textarea>
                             </div>
                             <br>

														 Pilih 3 Foto untuk di upload :<br>
														 <div class="input-group mb-3">
															 <div class="input-group-prepend">
																 <span class="input-group-text">Upload Gambar</span>
															 </div>
															 <div class="custom-file">
                                 <input type="file" name="gambar[]" multiple class="custom-file-input" id="inputGroupFile01">
																 <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                               </div>
                             </div>

                              <input type="text" class="form-control"  aria-label="Nama Wisata" aria-describedby="basic-addon1" id="lat" name="lat" value="<?php echo $kol['lat'] ?>" />
                              <input type="text" class="form-control"  aria-label="Nama Wisata" aria-describedby="basic-addon1" id="lng" name="lng" value="<?php echo $kol['lng'] ?>" />

                              <div id="map"></div>
                                <br>
                              <script>


                             var marker;
                             var geocoder = new google.maps.Geocoder();



                               function taruhMarker(peta, posisiTitik){
                                   if( marker ){
                                     // pindahkan marker
                                     marker.setPosition(posisiTitik);
                                   } else {
                                     // buat marker baru
                                     marker = new google.maps.Marker({
                                       position: posisiTitik,
                                       map: peta,
                                       draggable: true
                                      });
                                      var contentString = '<h2>Hello Dunia!</h2>';
                                      var infowindow = new google.maps.InfoWindow({
                                       content: contentString
                                     });

                                      marker.addListener('click', function() {
                                      infowindow.open(peta, marker);
                               });

                             }

                             function init() {
                                var map = new google.maps.Map(document.getElementById('map-canvas'), {
                                  center: {
                                    lat: 12.9715987,
                                    lng: 77.59456269999998
                                  },
                                  zoom: 12
                                });


                                var searchBox = new google.maps.places.SearchBox(document.getElementById('pac-input'));
                                map.controls[google.maps.ControlPosition.TOP_CENTER].push(document.getElementById('pac-input'));
                                google.maps.event.addListener(searchBox, 'places_changed', function() {
                                  searchBox.set('map', null);


                                  var places = searchBox.getPlaces();

                                  var bounds = new google.maps.LatLngBounds();
                                  var i, place;
                                  for (i = 0; place = places[i]; i++) {
                                    (function(place) {
                                      var marker = new google.maps.Marker({

                                        position: place.geometry.location
                                      });
                                      marker.bindTo('map', searchBox, 'map');
                                      google.maps.event.addListener(marker, 'map_changed', function() {
                                        if (!this.getMap()) {
                                          this.unbindAll();
                                        }
                                      });
                                      bounds.extend(place.geometry.location);


                                    }(place));

                                  }
                                  map.fitBounds(bounds);
                                  searchBox.set('map', map);
                                  map.setZoom(Math.min(map.getZoom(),12));

                                });
                              }

                                 document.getElementById("lat").value = posisiTitik.lat();
                                 document.getElementById("lng").value = posisiTitik.lng();
                               }
                             function initialize() {
                                 var propertiPeta = {
                                   center:new google.maps.LatLng(-2.992526, 115.351237),
                                   zoom:9,
                                   mapTypeId:google.maps.MapTypeId.ROADMAP,

                                 };
                                 var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
                                 // even listner ketika peta diklik
                                 google.maps.event.addListener(peta, 'click', function(event) {
                                   taruhMarker(this, event.latLng);
                                 });

                               }
                               // event jendela di-load
                               google.maps.event.addDomListener(window, 'load', initialize);
                             </script>

                                 <div id="googleMap" style="width:100%;height:380px;"></div>
 															 <br>
																 <button type="submit" value="simpan" class="btn btn-primary btn-lg btn-block">Perbarui Data</button>
                                 </form>
                               </section>
                             </div>
                          </div>
                        </div>
<?php
}
?>



	<script src="js/lib/jquery/jquery-3.2.1.min.js"></script>
	<script src="js/lib/popper/popper.min.js"></script>
	<script src="js/lib/tether/tether.min.js"></script>
	<script src="js/lib/bootstrap/bootstrap.min.js"></script>
	<script src="js/plugins.js"></script>

	<script type="text/javascript" src="js/lib/jqueryui/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/lib/lobipanel/lobipanel.min.js"></script>
	<script type="text/javascript" src="js/lib/match-height/jquery.matchHeight.min.js"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script>
		$(document).ready(function() {
            $('.panel').each(function () {
                try {
                    $(this).lobiPanel({
                        sortable: true
                    }).on('dragged.lobiPanel', function(ev, lobiPanel){
                        $('.dahsboard-column').matchHeight();
                    });
                } catch (err) {}
            });

			google.charts.load('current', {'packages':['corechart']});
			google.charts.setOnLoadCallback(drawChart);
			function drawChart() {
				var dataTable = new google.visualization.DataTable();
				dataTable.addColumn('string', 'Day');
				dataTable.addColumn('number', 'Values');
				// A column for custom tooltip content
				dataTable.addColumn({type: 'string', role: 'tooltip', 'p': {'html': true}});
				dataTable.addRows([
					['MON',  130, ' '],
					['TUE',  130, '130'],
					['WED',  180, '180'],
					['THU',  175, '175'],
					['FRI',  200, '200'],
					['SAT',  170, '170'],
					['SUN',  250, '250'],
					['MON',  220, '220'],
					['TUE',  220, ' ']
				]);

				var options = {
					height: 314,
					legend: 'none',
					areaOpacity: 0.18,
					axisTitlesPosition: 'out',
					hAxis: {
						title: '',
						textStyle: {
							color: '#fff',
							fontName: 'Proxima Nova',
							fontSize: 11,
							bold: true,
							italic: false
						},
						textPosition: 'out'
					},
					vAxis: {
						minValue: 0,
						textPosition: 'out',
						textStyle: {
							color: '#fff',
							fontName: 'Proxima Nova',
							fontSize: 11,
							bold: true,
							italic: false
						},
						baselineColor: '#16b4fc',
						ticks: [0,25,50,75,100,125,150,175,200,225,250,275,300,325,350],
						gridlines: {
							color: '#1ba0fc',
							count: 15
						}
					},
					lineWidth: 2,
					colors: ['#fff'],
					curveType: 'function',
					pointSize: 5,
					pointShapeType: 'circle',
					pointFillColor: '#f00',
					backgroundColor: {
						fill: '#008ffb',
						strokeWidth: 0,
					},
					chartArea:{
						left:0,
						top:0,
						width:'100%',
						height:'100%'
					},
					fontSize: 11,
					fontName: 'Proxima Nova',
					tooltip: {
						trigger: 'selection',
						isHtml: true
					}
				};

				var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
				chart.draw(dataTable, options);
			}
			$(window).resize(function(){
				drawChart();
				setTimeout(function(){
				}, 1000);
			});
		});
	</script>
<script src="js/app.js"></script>
</body>
</html>
