<?php 
include "header.php";
$id_galeri = $_GET["id"];
$ambil_galeri = $koneksi->query("SELECT * FROM galeri WHERE id_galeri = '$id_galeri'");
$galeri = $ambil_galeri->fetch_assoc();
?>
<h4>Ubah Galeri</h4>
<hr>
<div class="row">
	<div class="col-md-8">
		<form method="post" enctype="multipart/form-data">
			<div class="mb-3">
				<label class="form-label">Nama Galeri</label>
				<input type="text" class="form-control" name="nama_galeri" value="<?php echo $galeri["nama_galeri"]; ?>" required>
			</div>
			<div class="mb-3">
				<label class="form-label">Foto</label><br>
				<img src="../assets/file/<?php echo $galeri["foto_galeri"]; ?>" width="100" class="rounded mb-2">
				<input type="file" class="form-control mt-2" name="foto_galeri">
			</div>
			<div class="mb-3">
				<button class="btn btn-primary" name="simpan">Simpan</button>
			</div>
		</form>
	</div>
</div>

<?php 
if (isset($_POST["simpan"])) {
	$nama = $_POST["nama_galeri"];
	$foto = $_FILES["foto_galeri"]["name"];
	$file = $_FILES["foto_galeri"]["tmp_name"];

	// Cek apakah ada file yang diupload
	if (!empty($foto)) {
		$waktu = date("YmdHis");
		$upload = $waktu . $foto;
		move_uploaded_file($file, "../assets/file/$upload");

		$koneksi->query("UPDATE galeri SET nama_galeri = '$nama', foto_galeri = '$upload' WHERE id_galeri = '$id_galeri'");
	} else {
		// Kalau tidak ada upload baru, hanya update nama galeri
		$koneksi->query("UPDATE galeri SET nama_galeri = '$nama' WHERE id_galeri = '$id_galeri'");
	}

	echo "<script>alert('Data berhasil diubah');</script>";
	echo "<script>location = 'galleri_tampil.php';</script>";
}

include "footer.php";
?>
