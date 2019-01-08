<?php
session_start();

if(!isset($_SESSION['email'])) {
   header('location:../login/login.php');
} else {
   $email = $_SESSION['email'];
}
?>
<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Data</title>

	<link href="img/favicon.144x144.png" rel="apple-touch-icon" type="image/png" sizes="144x144">
	<link href="img/favicon.114x114.png" rel="apple-touch-icon" type="image/png" sizes="114x114">
	<link href="img/favicon.72x72.png" rel="apple-touch-icon" type="image/png" sizes="72x72">
	<link href="img/favicon.57x57.png" rel="apple-touch-icon" type="image/png">
	<link href="img/favicon.png" rel="icon" type="image/png">
	<link href="img/favicon.ico" rel="shortcut icon">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
<link rel="stylesheet" href="css/lib/datatables-net/datatables.min.css">
<link rel="stylesheet" href="css/separate/vendor/datatables-net.min.css">
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
		                            <a class="dropdown-item"href="../login/logout.php"><span class="font-icon glyphicon glyphicon-log-out"></span>Logout</a>
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


	<div class="page-content">
		<div class="container-fluid">
			<header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h2>Data Wisata</h2>
						</div>
					</div>
				</div>
			</header>
			<section class="card">
				<div class="card-block">
					<table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
						<tr>
							<th>Nama Wisata</th>
							<th>Kabupaten</th>
							<th>Edit</th>
							<th>Hapus</th>
						</tr>
						</thead>

						<tbody>
              <script type="text/javascript" language="JavaScript">
function konfirmasi()
{
tanya = confirm("Anda Yakin Akan Menghapus Data ?");
if (tanya == true) return true;
else return false;
}</script>
							<?php
							 include "koneksi.php";


							$sql = "SELECT * FROM db_wisata";
							$query = mysqli_query($koneksi, $sql);
							      // mengeluarkan query dengan array

							while ($row = mysqli_fetch_array($query)){

							            echo '<tr>';
							           	echo '<td>'.$row['nm_wisata'].'</td>';

													echo '<td>'.$row['kab'].'</td>';
													echo '<td> <a class="btn btn-success" href="edit.php?id_wisata='.$row['id_wisata'].'" role="button"</a> EDIT  <td>';
													echo '<a class="btn btn-danger" onclick="return konfirmasi()"  href="hapus.php?id_wisata='.$row['id_wisata'].'" role="button"</a>HAPUS';
													echo '</tr>';
							          }


							?>

						</tbody>
					</table>
				</div>
			</section>
		</div><!--.container-fluid-->
	</div><!--.page-content-->

	<script src="js/lib/jquery/jquery-3.2.1.min.js"></script>
	<script src="js/lib/popper/popper.min.js"></script>
	<script src="js/lib/tether/tether.min.js"></script>
	<script src="js/lib/bootstrap/bootstrap.min.js"></script>
	<script src="js/plugins.js"></script>

	<script src="js/lib/datatables-net/datatables.min.js"></script>
	<script>
		$(function() {
			$('#example').DataTable();
		});
	</script>

<script src="js/app.js"></script>
</body>
</html>
