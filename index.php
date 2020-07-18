<!DOCTYPE html>
<html>
<head>
	<title> Vera Wedding Organizer </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="js/jquery-3.5.1.js"></script>
	<script>
$(document).ready(function(){
$(".preloader").fadeOut();
})
</script>
</head>
<body>
<div class="preloader">
  <div class="loading">
    <img src="foto/2/logo1.png" width="300" height="200">
    <p>Harap Tunggu</p>
  </div>
</div>
<div class="content">
	<header>
		<h4 class="logo"><img src="foto/menu/logo.png" width="300" height="200" /></h4>
		<h2 align="center">Vera Wedding Organizer</h2>
<div class="menu">
	<nav>
	<ul>
		<li><a href="index.php?page=home">Beranda</a></li>
        <li><a href="index.php?page=galeri">Galeri</a></li>
        <li><a href="index.php?page=paket">Daftar Paket</a></li>
		<li><a href="index.php?page=booking">Booking</a></li>
		<li><a href="index.php?page=tentang">Tentang</a></li>
		 <!--<li><a href="index.php?page=Staff">menu 6</a></li>-->
	</ul>
</nav>
</div> 
<div class="badan">

<?php
if(isset($_GET['page'])){
	$page = $_GET['page'];

	switch ($page) {
		case 'home':
			include "halaman/home.php";
			break;
		case 'tentang':
			include"halaman/tentang.php";
			break;
		case 'booking':
			include"halaman/booking.php";
			break;
        case 'paket':
            include"halaman/paket.php";
            break;
		case 'Staff':
			include"halaman/galeri.php";
			break;
		case 'Jadwal_latihan';
			include"halaman/menu 5.php";
			break;
		case 'galeri';
			include"halaman/galeri.php";
			break;

		default:
			echo "<Center><h3>maaf. halaman tidak ditemukan ! </h3></Center> ";
			break;
	}
}else{
include "halaman/home.php";
}
?>
<br><br><br><br><br>
<div class="konten">
	<footer>
		
<h6> <p>| Telp : 0813 - 2845 - 5588|</p>
 <p>| Vera Wedding Organizer | </p>
 <p>| Jln Rawa Kuning gg.Kemun Rt001/Rw016 No 15B, Pulo Gebang, Kec. Cakung, Kota Jakarta Timur | <p></h6>

 
 	<hr>
<h3 align="center"> Vera Wedding Organizer  </h3>
<hr>
<p>Berdiri sejak tahun 2011</p>
<p>Vera Wedding Organizer Adalah salah satu wedding organizer yang bertempat di daerah Jakarta Timur, dengan menyediakan paket wedding berupa Rias pengantin adat jawa, sunda, nasional, dan tradisional </p>
<h6 align="center"> copyright: Febry </h6>
</footer>

</div>
</div>
</div>
</div>
</body>
</html>

