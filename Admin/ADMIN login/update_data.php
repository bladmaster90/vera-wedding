<?php
// buka koneksi dengan MySQL
  include("koneksi.php");

  $no  = $_GET['no'];
  
  
  $sql 	= 'update  registerr set berkas= "selesai" where no="'.$no.'"';

  $query	= mysqli_query($koneksi,$sql);
header('location: data customer.php');
?>