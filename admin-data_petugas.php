<htmL>
<title>Koperasi</title>
<head>
<link type="text/css" rel="stylesheet" href="css/style-admin.css" media="screen">
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
<label for="ac-1"><img src="gambar/admin.png">Beranda</label>
<article class="artikel-1">
<li><a href="admin.php">Home</a></li>
</article>
</div>

<div>
<input id="ac-2"  type="checkbox">
<label for="ac-2"><img src="gambar/user.png">User</label>
<article class="artikel-2">
<li><a href="admin-data_petugas.php">Input Petugas</a></li>
<li><a href="admin-data_user_petugas.php">Data Petugas</a></li>
<li><a href="admin-data_anggota.php">Input Anggota</a></li>
<li><a href="admin-data_user_anggota.php">Data Anggota</a></li>
</article>
</div>


<div>
<input id="ac-3"  type="checkbox" >
<label for="ac-3"><img src="gambar/laporan.png">Laporan</label>
<article class="artikel-3">
<li><a href="admin-laporan_simpanan.php">Simpanan</a></li>
<li><a href="admin-laporan_pinjaman.php">Pinjaman</a></li>
<li><a href="admin-laporan_angsuran.php">Angsuran</a></li>

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
<div class="title"><img src="gambar/petugas.png">Data Petugas</div>
<?php
mysql_connect("localhost","root","");
mysql_select_db("koperasi_ujikom");
$h=mysql_query("select max(id_petugas) as id_petugas from petugas_koperasi");
	$data=mysql_fetch_array($h);
	$no=$data['id_petugas'];
	$nourut=(int) substr($no, 3, 2);
	$nourut++;
	$char="PTG";
	$idbaru =$char. sprintf("%02s", $nourut);
	?>
<form method="post" action="form/input_petugas.php">
<table>
<tr>
<td><span>ID_Petugas</span></td><td>:</td><td><input type="text" id="textfield" value="<?php echo"$idbaru"; ?>" name="id_petugas" size="25"></td>
</tr>
<tr><td><span>Nama</span></td><td>:</td><td><input type="text" id="textfield" name="nama" size="40"></td></tr>
<tr><td><span>Alamat</span></td><td>:</td><td><textarea name="alamat" id="textfield" rows="5" cols="20"></textarea></td></tr>
<tr><td><span>No Telepon</span></td><td>:</td><td><input type="text" id="textfield" name="no_telepon" size="25"></td></tr>
<tr><td><span>Tempat Lahir</span></td><td>:</td><td><input type="text" id="textfield" name="tempat_lahir" size="25"></td></tr>
<tr><td><span>Tanggal Lahir</span></td><td>:</td><td><input type="date" id="textfield" name="tanggal_lahir" size="25"></td></tr>
<tr><td><span>keterangan</span></td><td>:</td><td><textarea name="keterangan" id="textfield" rows="5" cols="20"></textarea></td>
</tr>
</table>

</div>

<div class="isi">
<div class="title"><img src="gambar/add_user.png"> User Login</div>

<table>

<tr>
<td><span>Username</span></td><td>:</td><td><input type="text" id="textfield" name="username" size="35"></td></tr>
<tr><td><span>Password</span></td><td>:</td><td><input type="password" id="textfield" name="password" size="35"></td></tr>
<tr><td><span>Level</span></td><td>:</td><td><select name="level" id="textfield">
                                                 <option>petugas</option>
												 <option>admin</option>
                                                 </select></td>
												 </tr>
<tr><td><input type="submit" id="textfield" value="Simpan"></td><td><input type="submit" id="textfield" value="Cancel"></td></tr>
												</table>

</div>
<div class="isi">
<div class="title"><img src="gambar/add_user.png"> User Login</div>

<?php
mysql_connect("localhost","root","");
mysql_select_db("koperasi_ujikom");

echo"
<table class='border' align='center'>
<tr><th>Username</th><th>Level</th><th>ID</th></tr>
";
$selek=mysql_query("SELECT * FROM user
WHERE level = 'petugas' order by id desc");

while($array=mysql_fetch_array($selek)){
echo"

<tr><td>$array[username]</td><td>$array[level]</td><td>$array[id]</td><td></tr>
";
}
?>
</div>
</div>

</div>

</body>
</html>