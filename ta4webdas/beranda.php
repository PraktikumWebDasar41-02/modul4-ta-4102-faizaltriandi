<form method="POST">
	<table>
		<tr>
			<td>Genre Film</td>
		</tr>
		<tr>
			<td>
				<input type="checkbox" name="g[]" value="horor">Horor <br>
				<input type="checkbox" name="g[]" value="action">Action <br>
				<input type="checkbox" name="g[]" value="drama">Drama <br>
				<input type="checkbox" name="g[]" value="thriller">Thriller <br>
				<input type="checkbox" name="g[]" value="animation">Animation <br>
			</td>
		</tr>
		<tr>
			<td>
				
			</td>
		</tr>
		<tr>
			<td>Destinasi Wisata</td>
		</tr>
		<tr>
			<td>
				<input type="checkbox" name="x" value="bali">Bali <br>
				<input type="checkbox" name="x" value="rajaampat">Raja Ampat <br>
				<input type="checkbox" name="x" value="pulaudewata">Pulau Dewata <br>
				<input type="checkbox" name="x" value="pulausamosir">Pulau Samosir <br>
				<input type="checkbox" name="x"	value="labuancermin">Labuan Cermin <br>
			</td>
		</tr>
		<tr>
			<td>
				
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="submit" value="submit">
			</td>
		</tr>
	</table>
</form>

<?php 
	if (isset($_POST['submit'])) {
		session_start();
		$g = $_POST['g'];
		$x = $_POST['x'];
			$_SESSION['g'] =$g;
			$_SESSION['x'] =$x;
		header("location:open.php");
	}
 ?>