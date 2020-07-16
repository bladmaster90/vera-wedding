<body bgcolor="#CCCCCC">
<h2>
<p align="center">EDIT DATA
<?php
    include('koneksi.php');
    if(isset($_GET['no'])){
        $ni     = $_GET['no'];
        $query  = mysqli_query($koneksi,'select * from data_siswa where no = "'.$ni.'"');
        $data   = mysqli_fetch_array($query);
        $Nama   = $data['Nama'];
        $Posisi   = $data['Posisi'];
        $Kelompok_umur  = $data['Kelompok_umur'];
    }
    else{
    $Nama = '';
    $Posisi = '';
    $Kelompok_umur = '';
    }
?>
</p></h2>
<form method="post" name="frm" action="edit.php">
<table width="546" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" align="center">
  <!--DWLayoutTable-->
  <tr>
    <td width="189" height="20"> </td>
    <td width="26"> </td>
    <td width="331"> </td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">No</td>
    <td align="center" valign="top">:</td>
    <td valign="middle">
      <input type="text" name="no" value="<?php echo $_GET['no']; ?>" readonly="readonly"> 
    </td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Nama</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input type="text" name="Nama" value="<?php echo $Nama; ?>">
    </label></td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Posisi</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input name="Posisi" type="text" size="50" value="<?php echo $Posisi; ?>">
    </label></td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Kelompok Umur</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
    <input type="varchar" Name="Kelompok_umur" size="10" value="<?php echo $Kelompok_umur; ?>">
    </label></td>
  </tr>
  <tr>
    <td height="42"> </td>
    <td> </td>
    <td><input type="submit" name="tedit" value="EDIT"></td>
  </tr>
</table>
</form>