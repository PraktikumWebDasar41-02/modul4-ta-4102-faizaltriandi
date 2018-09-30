<form method="POST">
	<table>
		<tr>
			<td>
				LOGIN
			</td>
		</tr>
		<tr>
			<td>
				Username
			</td>
			<td>
				<input type="text" name="username">
			</td>
		</tr>
		<tr>
			<td>
				Password
			</td>
			<td>
				<input type="Password" name="password">
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="submit">
			</td>
		</tr>
	</table>
</form>\

<?php 
if (isset($_POST['submit'])) {
	$opsi = array();
		$opsi['faizal'] = "123" ;
		$opsi['triandi'] = "456" ;
	$username = $_POST['username'];
	$password = $_POST['password'];

foreach ($opsi as $opsi1 => $opsi2) {
	if ($username == $opsi1 && $password == $opsi2) {
		header("location:rincian.php");
	}else{
		echo "Password Kurang Tepat";
	}
}
}
 ?>

