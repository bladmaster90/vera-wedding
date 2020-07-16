<!doctype html>
<html>
    <head>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>ADMIN</title>
        <link href="http://fonts.googleapis.com/css?family=Bitter" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
		<div id="bg">
			<div id="outer">
				<div id="header">
					<div id="logo"><center>
						<h1>
							Admin Badminton Djarum Indonesia
						</h1>
					</div>
					<div id="">
					</div>
					<div id="nav">
                    <ul class="linkedList">
							<li class="first">
                            <a href="index.php">BERANDA</a>
                            </li>
                            <li>
                            </li>
                            <li>
								<a href="Data Customer.php">DATA PENDAFTARAN</a>
							</li>
							<li>
							</li>
					
								<li>
							</li>
							<li>
								
							
								
						</ul>
        
                    <h4 align="right"><a href="../logout.php">LOGOUT</a></h4>
                    
						<ul>
						</ul>
						<br class="clear" />
					</div>
				</div>
				<div id="main">
					
					<div id="content">
						<div id="box1">
							<table >
  <tbody>
    <thead>
    <tr>
      
     <th> No</th>
      <th>Nama Orangtua</th>
      <th>No Identitas</th>
      <th>Alamat</th>
      <th>No hp</th>
      <th>email</th>
      <th>Nama Anak</th>
      <th>Tanggal Lahir</th>
      <th> Berkas </th>
         <th> </th>
          </tr>
          </thead>
    </tbody>
<tbody>
 <?php
	include('koneksi.php');
	 $sql	= $sql	= 'select * from registerr';
    //query ke database dg SELECT table siswa diurutkan berdasarkan NIS paling besar
    $query = mysqli_query($koneksi,$sql) or die(mysqli_error());
    
    //cek, apakakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
    if(mysqli_num_rows($query) == 0){  //ini artinya jika data hasil query di atas kosong
      
      //jika data kosong, maka akan menampilkan row kosong
      echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
      
    }else{  //else ini artinya jika data hasil query ada (data diu database tidak kosong)
      
      //jika data tidak kosong, maka akan melakukan perulangan while
      $no = 1 ;  //membuat variabel $no untuk membuat nomor urut
      while($data = mysqli_fetch_assoc($query)){ //perulangan while dg membuat variabel $data yang akan mengambil data di database

                echo '<tr>';
          
          
		  echo '<td>'.$data['no'].'</td>'; 
          echo '<td>'.$data['nama_ortu'].'</td>'; 
          echo '<td>'.$data['no_sim'].'</td>'; 
          echo '<td>'.$data['alamat'].'</td>';
		  echo '<td>'.$data['no_hp'].'</td>';
		  echo '<td>'.$data['email'].'</td>';
		  echo '<td>'.$data['nama_anak'].'</td>';
		  echo '<td>'.$data['tanggal_lahir'].'</td>'; 
		  echo '<td>'.$data['berkas'].'</td>'; 
		  echo '<td align="center"><a href="hapus_customer.php?no='.$data['no'].'" onclick="return confirm(\'Yakin?\')">Hapus</a>  
		  <a href="update_data.php?no='.$data['no'].'" onclick="return confirm(\'Yakin?\')">Verifikasi</a></td>';
	        
        echo '</tr>';
        
        $no++;  
        
      }
      
    }
	?>  
</tbody>
</table>

						</div>
                        </ul>
						</div>
						<br class="clear" />
					</div>
					<br class="clear" />
				</div>
			</div>
			</div>
		</div>
    </body>
</html>
