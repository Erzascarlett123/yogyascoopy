<?php 
include "header.php";
//echo "<pre>";
//print_r($koneksi);
//echo "</pre>";
?>


<div class="container">
	<div class="mt-5 row justify-content-center">
		<div class="col-4 mt-5">
			<form method="post" class="mt-5 bg-white p-3 rounded shadow">
				<div class="text-center">
					<img src="assets/file/ysoc11png" width="100">
				</div>
				<div class="mb-3">
					<label class="form-label fw-bold">Username</label>
					<input type="text" class="form-control" name="login_username" placeholder="username">
				</div>
				<div class="mb-3">
					<label class="form-label fw-bold">Password</label>
					<input type="password" class="form-control" name="login_password" placeholder="password">
				</div>
				<div class="mb-3">
					<button class="btn btn-primary" name="login">Masuk</button>
				</div>
			</form>
		</div>
	</div>
</div>

<?php 
	//inti dari login adalah membandingkan data yang di input di formulir dengan yang ada di database
	//dapatkan data yang di input di forfulir
if (isset($_POST['login'])) 
{
	$username = $_POST['login_username'];
	$password = $_POST['login_password'];

	$cek = $koneksi -> query("SELECT * FROM admin WHERE username_admin = '$username' AND password_admin = '$password'");
		//hitung data yang diketik di formulir ada berapa di database
	$hitung = $cek->num_rows;

		//jika $hitung == 1 maka lanjut login
	if ($hitung==1) 
	{
		$data_login = $cek -> fetch_assoc();
			//masukkan data login ke dalam session yang namanya admin
		$_SESSION['admin'] = $data_login;
		

		echo "<script>alert('Login berhasil !')</script>";
		echo "<script>location = 'admin/'</script>";
	}

	else{
		echo "<script>alert('Username atau password salah!')</script>";
		echo "<script>location = 'login.php'</script>";
	}
}

	//echo "<pre>";
	//print_r($hitung);
	//echo "</pre>";
include "footer.php";
?>
