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
<input id="ac-1"  type="checkbox" >
<label for="ac-1"><img src="gambar/home.png">Beranda</label>
<article class="artikel-1">
<li><a href="anggota.php">Home</a></li>
</article>
</div>

<div>
<input id="ac-3"  type="checkbox" >
<label for="ac-3"><img src="gambar/simpan.png">Simpanan</label>
<article class="artikel-3">
<li><a href="anggota_simpanan.php">Simpanan</a></li>
</article>
</div>

<div>
<input id="ac-4"  type="checkbox" >
<label for="ac-4"><img src="gambar/pinjam.png">Pinjaman</label>
<article class="artikel-4">
<li><a href="anggota_pinjaman.php">Pinjaman</a></li>
</article>
</div>

<div>
<input id="ac-5"  type="checkbox" >
<label for="ac-5"><img src="gambar/angsuran.png">Angsuran</label>
<article class="artikel-5">
<li><a href="anggota_angsuran.php">Data Angsuran</a></li>
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

<div class="data_user">
<div class="title"><img src="gambar/laporan.png">Simpanan Anda :</div>
<div id="data_user_wrap">
<?php
mysql_connect("localhost","root","");
mysql_select_db("koperasi_ujikom");
$a=mysql_query("select id_anggota from anggota where username=$_SESSION[username]");
echo"
<table class='border' align='center'>
<tr><th>ID Simpanan</th><th>Nama Simpanan</th><th>Petugas</th><th>ID Anggota</th><th>Tanggal</th><th>Simpanan</th><th>Keterangan</th></tr>
";
$selek=mysql_query("SELECT * FROM
   simpanan where id_anggota=$_SESSION[id]");
while($array=mysql_fetch_array($selek)){
echo"

<tr><td>$array[id_simpanan]</td><td>$array[nama_simpanan]</td><td>$array[id_petugas]</td><td>$array[id_anggota]</td><td>$array[tanggal_simpanan]</td><td>$array[besar_simpanan]</td><td>$array[keterangan]</td></tr>
";
}
?>
</div>

</div>

</div>

</div>

</body>
</html>