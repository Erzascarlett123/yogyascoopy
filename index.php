<?php 
include "header.php";
$ambil_berita = $koneksi -> query("SELECT * FROM berita ORDER BY id_berita DESC LIMIT 3");
$berita = array();
while ($tiap_berita = $ambil_berita->fetch_assoc())
{
	$berita[] = $tiap_berita;
}

$ambil_kegiatan = $koneksi -> query("SELECT * FROM kegiatan ORDER BY id_kegiatan DESC LIMIT 3");
$kegiatan = array();
while ($tiap_kegiatan = $ambil_kegiatan -> fetch_assoc()) 
{
	$kegiatan[] = $tiap_kegiatan;
}

$ambil_galeri = $koneksi -> query("SELECT * FROM galeri ORDER BY id_galeri DESC LIMIT 6");
$galeri = array();
while ($tiap_galeri = $ambil_galeri -> fetch_assoc()) 
{
	$galeri[] = $tiap_galeri;
}
?>
<img src="assets/file/logo ysoc 1.jpeg" style="width: 100%;">
<section class="container my-5">
	<div class="text-center">
		<h3 class="mb-5 fw-bold" data-aos="fade-right">Product</h3>
	</div>
	<div class="row">
		<?php foreach ($berita as $key => $value): ?>
			<div class="col-md-4 mb-3" data-aos="fade-down">
				<a href="detail_berita.php?id=<?php echo $value["id_berita"]; ?>" class="text-decoration-none text-dark">
					<div class="card py-2 px-2 kartu" style="height: 400px;">
						<img src="assets/file/<?php echo $value["foto_berita"]; ?>" style="width: 100%; height: 300px;" class="card-img-top">
						<div class="card-body">
							<h5 class="card-title">
								<?php echo $value["nama_berita"]; ?>
							</h5>
						</div>
					</div>
				</a>
			</div>
		<?php endforeach ?>
	</div>
	<div class="text-center mt-3">
		<a href="semua_berita.php" class="btn fw-bold text-white" style="background-color: #008080;">Semua Product</a>
	</div>
</section>

<section class="mb-5 p-5">
	<div class="container">
		<h3 class="mb-5 text-center fw-bold" data-aos="fade-right">Event</h3>
		<div class="row">
			<?php foreach ($kegiatan as $kk => $vk): ?>
				<div class="col-md-4 text-center" data-aos="fade-down" style="text-align :justify;">
					<a href="detail_kegiatan.php?id=<?php echo $vk["id_kegiatan"]; ?>" class="text-decoration-none text-dark">	
						<div class="card kartu py-2 px-2">
							<img src="assets/file/<?php echo $vk["foto_kegiatan"]; ?>" class="img-fluid mb-2 card-img-top" style=" height:350px;" >
							<div class="card-body">
								<h4 class="card-title"><?php echo $vk["nama_kegiatan"]; ?></h4>
							</div>
						</div>
					</a>
				</div>
			<?php endforeach ?>
			<div class="text-center mt-3">
				<a href="semua_kegiatan.php" class="btn fw-bold text-white" style="background-color: #008080;">SEMUA Event</a>
			</div>
		</div>
	</div>
</section>


<?php 
include "footer.php";
?>