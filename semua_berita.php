<?php 
include "header.php";
$ambil_berita = $koneksi -> query("SELECT * FROM berita");
$berita = array();
while ($tiap_berita = $ambil_berita->fetch_assoc())
{
	$berita[] = $tiap_berita;
}
?>
<div class="container mt-5">
	<h3 data-aos="fade-right">Info Berita Pesantren</h3>
	<hr>
	<?php foreach ($berita as $key => $value): ?>
		<div class="row">
			<a href="detail_berita.php?id=<?php echo $value["id_berita"]; ?>" class="text-decoration-none text-dark">
				<div class="card mb-3 p-3 berita" data-aos="fade-down">
					<div class="row g-0">
						<div class="col-md-4 position-relative">
							<img src="assets/file/<?php echo $value["foto_berita"]; ?>" class="img-fluid" style="width: 100%; height: 250px; object-fit: cover;">
							
							<!-- Icon di pinggir gambar -->
							<a href="https://www.lazada.co.id/catalog/?spm=a2o4j.homepage.search.d_go&q=sparepart%20scoopy%20honda" class="text-decoration-none position-absolute top-50 start-100 translate-middle p-2 bg-dark rounded-circle">
								<span class="bi bi-cart4 text-white"></span>
							</a>
						</div>
						<div class="col-md-8">
							<div class="card-body">
								<h5 class="card-title"><?php echo $value["nama_berita"]; ?></h5>
							</div>
						</div>
					</div>
				</div>
			</a>
		</div>
	<?php endforeach ?>
</div>

<?php 
include "footer.php";
?>