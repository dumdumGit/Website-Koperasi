<htmL>
<title>Koperasi</title>
<head>
<link type="text/css" rel="stylesheet" href="css/data.css" media="screen">
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
<li><a href="petugas-data_anggota.php">Input Data Anggota</a></li>
<li><a href="petugas-data_user_anggota.php">Data Anggota</a></li>
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
<table align="right">
<tr>
<td><tulisan><h4>Welcome ,(<?php session_start(); echo $_SESSION['username'] ; ?>)</h4></tulisan></td><td><a href="logout.php"><h3>Logout</h3></a></td>
</tr>
</table>

</div>

<div class="isi_konten">


<div class="isi">
<div class="title"><img src="gambar/add_user.png">Data Anggota</div>
<form method="post" action="anggota_cari.php">
<table align="right">
<tr><td><input type="text" id="textfield" name="cari" size="30" placeholder="Cari Anggota"></td><td><input type="submit" id="textfield" value="Cari"></td></tr>

</table>

</form>

<?php
mysql_connect("localhost","root","");
mysql_select_db("koperasi_ujikom");

echo"<table border='2' >

<tr bgcolor='#009999' ><th>ID Anggota</th><th>Nama Anggota</th><th>Alamat Anggota</th><th>Tanggal Lahir</th><th>Tempat Lahir</th><th>Jenis Kelamin</th><th>Status</th><th>No Telepon</th><th>Keterangan</th><th>Username</th></tr>
";

$hasil=mysql_query("select * from anggota where id_anggota like '%$_POST[cari]%' OR nama like '%$_POST[cari]%'");
while($h=mysql_fetch_array($hasil)){

echo"<tr><td>$h[id_anggota]</td><td>$h[nama]</td><td>$h[alamat]</td><td>$h[tanggal_lahir]</td><td>$h[tempat_lahir]</td><td>$h[jenis_kelamin]</td><td>$h[status]</td><td>$h[no_telepon]</td><td>$h[keterangan]</td><td>$h[username]</td></tr>";
}
?>




</div>

</div>

</div>

</div>

</body>
</html>