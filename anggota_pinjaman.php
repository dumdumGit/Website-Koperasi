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
<div class="title"><img src="gambar/laporan.png">Pinjaman Anda :</div>
<div id="data_user_wrap">
<?php
mysql_connect("localhost","root","");
mysql_select_db("koperasi_ujikom");
echo"

";
echo"
<table class='border' align='center'>
<tr><th>Tanggal Pinjaman</th><th>Tanggal Pelunasan</th><th>ID Pinjaman</th><th>Nama Pinjaman</th><th>Besar Pinjaman</th><th>Keterangan</th><th>ID Kategori Pinjaman</th><th>Besar Jasa</th><th>Lama Cicilan</th><th>Besar Pinjaman</th><th>ID Anggota</th></tr>
";
$selek=mysql_query("SELECT * FROM pinjaman
WHERE id_anggota =$_SESSION[id]");

while($array=mysql_fetch_array($selek)){
echo"

<tr><td>$array[tanggal_pinjaman]</td><td>$array[tanggal_pelunasan]</td><td>$array[id_pinjaman]</td><td>$array[nama_pinjaman]</td><td>$array[besar_pinjaman]</td><td>$array[keterangan]</td><td>$array[id_kategori_pinjaman]</td><td>$array[besar_jasa]</td><td>$array[lama_cicilan]</td><td>$array[sisa_pinjaman]</td><td>$array[id_anggota]</td></tr>
";
}
?>
</div>

</div>

</div>

</div>

</body>
</html>