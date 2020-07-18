<?php
$date = '03/18/2015';
$today = date('m/d/Y', strtotime("Now"));

?>
<center><h2> Form Pemesanan</h2></center>

<div class="regis">
	<form action= "database/simpan.php" method="POST">
<div>
            <label>Nama </label>
            <input type="text" name="nama" id="nama" required />
        </div>
<div>
            <label>No. KTP / SIM </label>
            <input type="text" name="sim" id="sim" required />
        </div>
<div>
            <label>Alamat Rumah</label>
            <input type="text" name="alamat" id="alamat" />
        </div>
	
<div>
            <label>Nomor HP</label>
            <input type="text" name="hp" id="hp" />
        </div>
    
<div>
            <label>Email</label>
            <input type="email" name="email" id="email" />
        </div>

    
<div>
            <label>Paket</label>
            <input type="text" name="paket" id="paket" />
        </div>
<div>
    <label>Tanggal Acara</label>
    <input type="date" name="tanggal" >
</div>
<input type="hidden"  value="belum" name="berkas" id="berkas"  />

<input type="submit" value="submit" name="submit" class="tombol">

<input type="reset" name="delete" class="tombol">

<div style="position:absolute; left:50%; bottom: 115px;">
<a href="https://api.whatsapp.com/send?phone=+6281328455588&text=Hallo%20Cek%20pesanan%20saya%0ANama%20%20%20%20%3A%24nama%0ANo%20Hp%20%20%20%3A%24hp%0AEmail%20%20%20%3A%24email%0APaket%20%20%20%3A%24paket%0ATanggal%20%3A%24tanggal">
<button style="background:#3498db; vertical-align:center; padding : 5px 8px; margin: 20px 0px; border-radius: 1px">
<img src="https://web.whatsapp.com/img/favicon/1x/favicon.png"> Whatsapp Kami</button></a>
</div>
    
</div>
</form>
</pre>
</form>
</div>

