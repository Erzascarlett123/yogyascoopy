<?php 
include "../koneksi.php";
if (!isset($_SESSION["admin"])) 
{
	echo "<script>alert('anda harus login!')</script>";
	echo "<script>location = '../login.php'</script>";
}

$id = $_SESSION['admin'] ['id_admin'];
$aa = $koneksi -> query("SELECT * FROM admin WHERE id_admin = '$id'");
$admin = $aa->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>OWNER CLUB SCOOPY </title>
	<link rel="icon" type="text/css" href="../assets/file/ysoc11.png">
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/dashboard.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/dataTables.bootstrap5.min.css">
</head>
<body>
	<header class="navbar navbar-dark bg-dark sticky-top">
		<button class="navbar-toggler d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar">
			<span class="navbar-toggler-icon"></span>
		</button>
		<a class="navbar-brand px-3" href="">OWNER CLUB SCOOPY </a>
		<div class="navbar-nav">
			<div class="nav-item">
				<a class="nav-link px-3" href="logout.php">
					<i class="bi bi-box-arrow-right"></i>
					Sign Out
				</a>
			</div>
		</div>
	</header>
	<div class="container-fluid">
		<div class="row">
			<nav id="sidebar" class="col-md-3 col-lg-2 bg-white position-fixed start-0 top-0 bottom-0 py-5 collapse d-md-block sidebar">
				<a href="profil_admin.php" class="text-decoration-none">
					<div class="container text-center pt-4">
						<span class="bi bi-person-circle display-5 text-dark"></span>
						<h6 class="pt-2 text-dark"><?php echo $admin["nama_admin"]; ?></h6>
					</div>
				</a>
				<div class="pt-3">
					<ul class="nav flex-column">
						<li class="nav-item">
							<a class="nav-link text-dark" href="index.php">
								<i class="bi bi-house-door"></i>
								Beranda
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-dark" href="profil_admin.php">
								<i class="bi bi-person-circle"></i>
								Profil
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-dark" href="kegiatan_tampil.php">
								<i class="bi bi-clipboard"></i>
								Event
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-dark" href="berita_tampil.php">
								<i class="bi bi-journal-bookmark-fill"></i>
								Product
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-dark" href="galleri_tampil.php">
								<i class="bi bi-card-image"></i>
								Galleri
							</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<main class="col-lg-10 col-md-9 ms-sm-auto px-sm-4 py-3 vh-100 bg-light">
		<div class="card">
			<div class="card-body">

