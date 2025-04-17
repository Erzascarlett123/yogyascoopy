<?php 
include "header.php";

// Ambil semua galeri
$ambil_galeri = $koneksi->query("SELECT * FROM galeri");
$galeri = array();
while ($tiap_galeri = $ambil_galeri->fetch_assoc()) {
	$galeri[] = $tiap_galeri;
}
?>

<div class="container mt-5">
	<h3 data-aos="fade-right">Galeri </h3>
	<hr>
	<?php foreach ($galeri as $key => $value): ?>
		<div class="row mb-4" data-aos="fade-down">
			<a href="detail_galeri.php?id=<?php echo $value["id_galeri"]; ?>" class="text-decoration-none text-dark">
				<div class="d-flex align-items-center border rounded p-3 galeri">
					<div class="col-md-4">
						<img src="assets/file/<?php echo $value["foto_galeri"]; ?>" class="img-fluid" style="width: 100%; height: 250px; object-fit: cover;">
					</div>
					<div class="col-md-8 d-flex align-items-center ps-4">
						<h5 class="mb-0"><?php echo $value["nama_galeri"]; ?></h5>
					</div>
				</div>
			</a>
		</div>
	<?php endforeach ?>
</div>

<?php 
include "footer.php";
?>
