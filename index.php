<!DOCTYPE html>
<html>
<head>
	<title> vera wedding</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="js/jquery-3.5.1.js"></script>
</head>
<body>
<div class="content">
	<header>
		<h4 class="logo"><img src="aaa" width="300" height="200" /></h4>
		<h2 align="center">Vera Wedding Organizer</h2>
<div class="menu">
	<nav>
	<ul>
		<li><a href="index.php?page=menu1">menu 1</a></li>
		<li><a href="index.php?page=menu2">menu 2</a></li>
		<li><a href="index.php?page=menu3">menu 3</a></li>
		<li><a href="index.php?page=menu4">menu 4</a></li>
		<li><a href="index.php?page=menu5">menu 5</a></li>
		<li><a href="index.php?page=menu6">menu 6</a></li>
	</ul>
</nav>
</div> 
<div class="badan">

<?php
if(isset($_GET['page'])){
	$page = $_GET['page'];

	switch ($page) {
		case 'menu 1':
			include "menu 1";
			break;
		case 'menu 2':
			include " menu 2";
			break;
		case 'menu 3':
			include "menu 3";
			break;
		case 'menu 4':
			include"menu 4";
			break;
		case 'menu 5';
			include"menu 5";
			break;
		case 'menu 6';
			include"menu 6";
			break;

		default:
			echo "<Center><h3>kondisi tidak menemukan halaman </h3></Center> ";
			break;
	}
}else{
include "isi di dalam wrap main, atau tengah";
}
?>

<div class="konten">
	<footer>
		
<h6> <p>| Telp : 0813 - 2845 - 5588|</p>
 <p>| Vera Wedding Organizer | </p>
 <p>| Jln Rawa Kuning Rt1/Rw16 No 15B, Pulo Gebang, Kec. Cakung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta | <p></h6>

 
 	<hr>
<h3 align="center"> Vera Wedding Organizer  </h3>
<hr>
<p>footer info 1</p>
<p>footer info 2</p>
<h6 align="center"> copyright: Febry </h6>
</footer>

</div>
</div>
</div>
</div>
</body>
</html>

