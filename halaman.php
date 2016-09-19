<htmL>
<title>Koperasi</title>
<head>
<link type="text/css" rel="stylesheet" href="css/style.css" media="screen">
</head>
<body>

<div id="wrapper">

<div class="sidebar">

<div class="head_sidebar">

<h3 class="kop">Koperasi</h3><span>Ulul Albab</span>
</div>

<div class="isi_sidebar">
 
<img src="gambar/koperasi.png" class="img"><br>
<span>Ulul</span><h3 class="logo">Albab</h3>

<div class="menu">
<div>
<input id="ac-1"  type="checkbox" checked>
<label for="ac-1"><img src="gambar/admin.png">Profile</label>
<article class="artikel-1">
<li><a href="#">Edit Profile</a></li>
</article>
</div>

<div>
<input id="ac-2"  type="checkbox">
<label for="ac-2"><img src="gambar/user.png">User</label>
<article class="artikel-2">
<li><a href="halaman.php">Data Petugas</a></li>
<li><a href="#">Input User</a></li>
<li><a href="data_anggota.php">Input Data Anggota</a></li>
</article>
</div>
<div>
<input id="ac-3"  type="checkbox" >
<label for="ac-3"><img src="gambar/simpan.png">Simpanan</label>
<article class="artikel-3">
<li><a href="simpanan.php">Simpanan</a></li>
</article>
</div>

<div>
<input id="ac-4"  type="checkbox" >
<label for="ac-4"><img src="gambar/pinjam.png">Pinjaman</label>
<article class="artikel-4">
<li><a href="simpanan.php">Pinjaman</a></li>
</article>
</div>

<div>
<input id="ac-5"  type="checkbox" >
<label for="ac-5"><img src="gambar/angsuran.png">Angsuran</label>
<article class="artikel-5">
<li><a href="simpanan.php">Angsuran</a></li>
</article>
</div>

<div>
<input id="ac-6"  type="checkbox" >
<label for="ac-6"><img src="gambar/laporan.png">Laporan</label>
<article class="artikel-6">
<p> </p>
</article>
</div>
				
</div>		

</div>

</div>



<div class="konten">

<div class="head_konten">
<span><?php echo date("l, d F Y"); ?></span>
</div>

<div class="isi_konten">

<div class="isi">
<div class="title"><img src="gambar/petugas.png">Data Petugas</div>

<form method="post" action="input-data-petugas.php" enctype="multipart/form-data">
<table>
<tr>
<td><span>ID_Petugas</span></td><td>:</td><td><input type="text" id="textfield" name="id_petugas" size="25"></td>
</tr>
<tr><td><span>Nama</span></td><td>:</td><td><input type="text" id="textfield" name="nama" size="38"></td></tr>
<tr><td><span>Alamat</span></td><td>:</td><td><textarea name="alamat" id="textfield" rows="5" cols="20"></textarea></td></tr>
<tr><td><span>No Telepon</span></td><td>:</td><td><input type="text" id="textfield" name="no_telepon" size="25"></td></tr>
<tr><td><span>Tempat Lahir</span></td><td>:</td><td><input type="text" id="textfield" name="tempat_lahir" size="25"></td></tr>
<tr><td><span>Tanggal Lahir</span></td><td>:</td><td><input type="date" id="textfield" name="tanggal_lahir" size="25"></td></tr>
<tr><td><span>keterangan</span></td><td>:</td><td><textarea name="keterangan" id="textfield" rows="5" cols="20"></textarea></td>
</tr>
<tr>
<td><input type="submit" id="textfield" value="Simpan"></td>
</tr>
</table>
</form>

</div>

<div class="isi">
<div class="title"><img src="gambar/add_user.png">Input User</div>

<form method="post" action="input-level.php" enctype="multipart/form-data">
<table>
<tr>
<td><span>Username</span></td><td>:</td><td><input type="text" id="textfield" name="username" size="35"></td></tr>
<tr><td><span>Password</span></td><td>:</td><td><input type="password" id="textfield" name="password" size="35"></td></tr>
<tr><td><span>Level</span></td><td>:</td><td><select name="level" id="textfield"><option>Admin</option>
                                                 <option>Petugas</option>
                                                 <option>Anggota</option></select></td>
												 </tr>
												<tr><td><input type="submit" id="textfield" value="Simpan"></td></tr>
												</table>
</form>
</div>

<div class="isi">
<div class="title"><img src="gambar/add_user.png">Data Petugas</div>

<?php
mysql_connect("localhost","root","");
mysql_select_db("koperasi_ujikom");
echo"<table border='0'>
<th>ID Petugas</th><th>Nama Petugas</th><th>Alamat Petugas</th><th>No Telepon</th><th>Tempat Lahir</th><th>Tanggal Lahir</th><th>Keterangan</th><th>Username</th>
";
$query=mysql_query("select * from petugas_koperasi");
while($a=mysql_fetch_array($query)){
echo"<tr><td>$a[id_petugas]</td><td>$a[nama]</td><td>$a[alamat]</td><td>$a[no_telepon]</td><td>$a[tempat_lahir]</td><td>$a[tanggal_lahir]</td><td>$a[keterangan]</td><td>$a[username]</td></tr>";
}
?>


</div>

</div>

</div>

</div>

</body>
</html>