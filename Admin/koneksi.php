<?php
	$hostname	= "localhost";
	$username	= "root";
	$password	= "";
	$database	= "register";
	
	$connect	= mysqli_connect($hostname, $username, $password, $database) or die ('Koneksi Gagal!');
	
?>