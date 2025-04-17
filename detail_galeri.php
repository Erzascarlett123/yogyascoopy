<?php 
include "header.php";

// Ambil ID dari URL
$id = $_GET["id"];

// Ambil data galeri berdasarkan ID
$ambil_galeri = $koneksi->query("SELECT * FROM galeri WHERE id_galeri = '$id'");
$galeri = $ambil_galeri->fetch_assoc();

// Ambil 4 galeri terbaru (untuk ditampilkan di samping)
$ambil_galeri1 = $koneksi->query("SELECT * FROM galeri ORDER BY id_galeri DESC LIMIT 4");
$galeri_terbaru = array();
while ($tiap = $ambil_galeri1->fetch_assoc()) {
	$galeri_terbaru[] = $tiap;
}
?>

<div class="container">
	<h3 class="text-center my-5" data-aos="fade-right"><?php echo $galeri["nama_galeri"]; ?></h3>
	<div class="row">
		<div class="col-md-8" data-aos="fade-up">
			<div class="text-center">
				<img src="assets/file/<?php echo $galeri["foto_galeri"]; ?>" class="img-fluid mb-3" style="max-width: 100%; height: 400px; object-fit: cover;">
			</div>
		</div>

		<div class="col-md-4" data-aos="fade-left">
			<div class="card px-3">
				<h5 class="text-center mt-3 fw-bold">Galeri Terbaru</h5>
				<hr>	
				<div class="row mb-3">
					<?php foreach ($galeri_terbaru as $key => $value): ?>
						<a href="detail_galeri.php?id=<?php echo $value["id_galeri"] ?>" class="text-decoration-none text-dark">
							<div class="samping d-flex p-3">
								<div class="col-3 text-center">
									<img src="assets/file/<?php echo $value["foto_galeri"]; ?>" width="75" style="object-fit: cover; height: 60px;">
								</div>
								<div class="col-9">
									<h6 class="mb-0"><?php echo $value["nama_galeri"]; ?></h6>
									<hr>
								</div>
							</div>
						</a>
					<?php endforeach ?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php 
include "footer.php";
?>
