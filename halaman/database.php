<?php

include 'Koneksi.php';

$conn = OpenCon();

echo "Koneksi berhasil !";

CloseCon($conn);

?>