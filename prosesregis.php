<?php 
session_start();
if (isset($_POST['nama'])) {
	$gambar = $_FILES['gambar']['name'];
	$tmp_gambar = $_FILES['gambar']['tmp_name'];
	$dir = "gambar/";
	$target = $dir.$gambar;
	$_SESSION['gambar'] = $target;

	if (!move_uploaded_file($tmp_gambar, $target)) {
		die("Upload Registrasi Gagal!");
	}
	$_SESSION['nim'] = $_POST['nim'];
	$_SESSION['nama'] = $_POST['nama'];
	$_SESSION['email'] = $_POST['email'];
	$_SESSION['jeniskelamin'] = $_POST['jeniskelamin'];
	$_SESSION['prodi'] = $_POST['prodi'];
	$_SESSION['fakultas'] = $_POST['fakultas'];
	$_SESSION['hobi'] = $_POST['hobi'];
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HasilRegistrasis</title>
</head>
<body>
<center><h1>DATA DIRI ANDA</h1></center>
<hr>
	<table align="center">
	<tr>
 		<td colspan="3"><img src="<?php echo $_SESSION['gambar'];?>" width="500px"></td>
 	</tr>
 	<tr>
 		<td>Nama</td>
 		<td>:</td>
 		<td>
 			<?php 
 				echo $_SESSION['nama'];
 			 ?>
 		</td>
 	</tr>
 	 <tr>
 		<td>NIM</td>
 		<td>:</td>
 		<td>
 			<?php 
 				echo $_SESSION['nim'];
 			 ?>
 		</td>
 	</tr>
 	<tr>
 		<td>Email</td>
 		<td>:</td>
 		<td>
 			<?php 
 				echo $_SESSION['email'];
 			 ?>
 		</td>
 	</tr>
 	<tr>
 		<td>Jenis Kelamin</td>
 		<td>:</td>
 		<td>
 			<?php 
 				echo $_SESSION['jeniskelamin'];
 			 ?>
 		</td>
 	</tr>
 	<tr>
 		<td>Program Studi</td>
 		<td>:</td>
 		<td>
 			<?php 
 				echo $_SESSION['prodi'];
 			 ?>
 		</td>
 	</tr>
 	<tr>
 		<td>Fakultas</td>
 		<td>:</td>
 		<td>
 			<?php 
 				echo $_SESSION['fakultas'];
 			 ?>
 		</td>
 	</tr>
 	<tr>
 		<td>Hobi</td>
 		<td>:</td>
 		<td>
 			<?php 
 				foreach ($_SESSION['hobi'] as $data) {
 					echo $data."<br>";
 				}
 			 ?>
 		</td>
 	</tr>
 	</table>
 	<hr>
</body>
</html>
