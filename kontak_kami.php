<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aplikasi_uts";  // Ganti dengan nama database Anda

// Membuat koneksi
$koneksi = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Proses ketika form dikirim
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];

    // Query untuk memasukkan data ke tabel kontak
    $query = "INSERT INTO kontak (nama_kontak, email_kontak, pesan) 
              VALUES ('$nama', '$email', '$pesan')";
    
    // Mengeksekusi query
    if ($koneksi->query($query) === TRUE) {
        echo "<script>alert('Pesan berhasil dikirim!');</script>";
    } else {
        echo "Error: " . $query . "<br>" . $koneksi->error;
    }
}

// Menutup koneksi
$koneksi->close();
?>

<?php include "header.php"; ?>

<!-- Kontak Kami Section -->
<div class="container my-5">
    <h3 class="text-center mb-4" data-aos="fade-up">Kontak Kami</h3>
    
    
	<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="row w-100">
        <div class="col-md-8 offset-md-2">
            <form method="post">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama:</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="pesan" class="form-label">Pesan:</label>
                    <textarea class="form-control" id="pesan" name="pesan" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-success w-100">Kirim Pesan</button>
            </form>
        </div>
    </div>
</div>


<?php include "footer.php"; ?>
