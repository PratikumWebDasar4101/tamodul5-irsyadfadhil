<!DOCTYPE html>
<html>
<head>
	<title>Registrasi</title>
</head>
<body>
<center><h1>REGISTRASI</h1></center>
<hr>
<table align="center">
	<form action="prosesregis.php" method="POST" enctype="multipart/form-data">
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama" maxlength="25" placeholder="Masukkan Nama anda" required></td>
		</tr>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="text" name="nim" maxlength="10" pattern="\d*" placeholder="Masukkan NIM anda" required></td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td><input type="Email" name="email" placeholder="EmailAnda@gmail.com" required></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><input type="radio" name="jeniskelamin" value="Laki-Laki">Laki Laki
				<input type="radio" name="jeniskelamin" value="Perempuan">Perempuan</td>
		</tr>
		<tr>
			<td>Program Studi</td>
			<td>:</td>
			<td><select name="prodi">
				<option value="D3MI">D3 MI</option>
				<option value="D3MP">D3 MP</option>
				<option value="D3IF">D3 IF</option>
				<option value="D3TT">D3 TT</option>
				<option value="D3PH">D3 PH</option>
				<option value="D4SM">D4 SM</option>
			</select></td>
		</tr>
		<tr>
			<td>Fakultas</td>
			<td>:</td>
			<td><select name="fakultas">
				<option value="FIT">FIT</option>
				<option value="FIK">FIK</option>
				<option value="FEB">FEB</option>
				<option value="FKB">FKB</option>
				<option value="FRI">FRI</option>
				<option value="FTE">FTE</option>
			</select></td>
		</tr>
		<tr>
			<td>Hobi</td>
			<td>:</td>
			<td><input type="checkbox" name="hobi[]" value="Membaca">Membaca<br>
				<input type="checkbox" name="hobi[]" value="Nonton">Nonton<br>
				<input type="checkbox" name="hobi[]" value="Menulis">Menulis<br>
				</td>
		</tr>
		<tr>
			<td>Upload Gambar Anda</td>
			<td>:</td>
			<td><input type="file" name="gambar"></td>
		</tr>
		<tr>
			<td colspan="3"><input type="submit" name="submit" value="Submit"></td>
		</tr>
	</form>
</table>
<hr>
</body>
</html>
