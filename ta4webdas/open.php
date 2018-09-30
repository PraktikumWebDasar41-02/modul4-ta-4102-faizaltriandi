<?php 
session_start();
$isi = $_SESSION['isi'];
$g = $_SESSION['g'];
$x = $_SESSION['x'];

	echo "Nama :".$isi[0];
	echo "<br>";
	echo "<img src='".$isi[1]."'width='500px'><br>";

	echo "genre : <br>";
	foreach ($g as $key) {
		echo $key."<br>";
	}
	foreach ($x as $ky) {
		echo $ky."<br>";
	}
?>