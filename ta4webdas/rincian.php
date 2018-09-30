<table>
	<form method="POST" enctype="multipart/form-data ">
		<tr>
			<td>
				Nama : <input type="text" name="nama">
			</td>
		</tr>
		<tr>
			<td>
				Upload File <br>
				<input type="file" name="file">
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="submit">
			</td>
		</tr>
	</form>
</table>

</body>
</html>

<?php 
	if (isset($_POST['submit'])) {
		$nama = $_POST['nama'];
		$file = "gambar/".basename($_FILES["file"]["name"]);

		if (move_uploaded_file($_FILES["file"]["tmp_name"], $file)) {
			echo "sukses";
			$isi = array($nama, $file);
			session_start();
			$_SESSION['isi'] = $isi;
			header("location:beranda.php");
		}
	}
 ?>