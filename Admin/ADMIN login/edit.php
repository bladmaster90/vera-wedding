<?php
    include('koneksi.php');
    if(isset($_POST['tedit'])){
    $no  = $_POST['no'];
    $Nama   = $_POST['Nama'];
    $Posisi   = $_POST['Posisi'];
    $Kelompok_umur  = $_POST['Kelompok_umur'];
    
    $sql    = 'update data_siswa set Nama="'.$Nama.'", Posisi="'.$Posisi.'", Kelompok_umur="'.$Kelompok_umur.'" where no="'.$no.'"';
    $query  = mysqli_query($koneksi,$sql);
    
    if($query){
        header('location: edit_siswa.php');
    }
    else{
        echo 'Gagal';
    }
}
?>