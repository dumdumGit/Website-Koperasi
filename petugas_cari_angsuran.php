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
<label for="ac-1"><img src="gambar/admin.png">Beranda</label>
<article class="artikel-1">
<li><a href="petugas.php">Home</a></li>
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
<li><a href="pinjaman.php">Pinjaman</a></li>
</article>
</div>

<div>
<input id="ac-5"  type="checkbox" >
<label for="ac-5"><img src="gambar/angsuran.png">Angsuran</label>
<article class="artikel-5">
<li><a href="petugas_cari_angsuran.php">Bayar Angsuran</a></li>
</article>
</div>

<div>
<input id="ac-6"  type="checkbox" >
<label for="ac-6"><img src="gambar/laporan.png">Laporan</label>
<article class="artikel-6">
<li><a href="laporan_simpanan.php">Simpanan</a></li>
<li><a href="laporan_pinjaman.php">Pinjaman</a></li>
<li><a href="laporan_angsuran.php">Angsuran</a></li>

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
<div class="title"><img src="gambar/data.png">Data Pinjaman</div>
<div id="data_user_wrap">
<form method="post" action="pinjaman_cari.php">
<table>
<tr><td><input type="submit" name="cari" value="Cari"></td><td><input type="text" name="cari" size="30"></td></tr>
</table>
</form>
<?php

mysql_connect("localhost","root","");
mysql_select_db("koperasi_ujikom");
echo"
<table class='border'>
<tr><th>ID Pinjaman</th><th>ID Anggota</th><th>Besar pinjaman</th><th>Tanggal pinjaman</th><th>Tanggal Pelunasan</th><th>Keterangan</th><th>Lama Cicilan</th><th>Sisa Pinjaman</th><th>Aksi</th></tr>
";
$selek=mysql_query("select id_pinjaman,id_anggota,besar_pinjaman,tanggal_pinjaman,tanggal_pelunasan,keterangan,lama_cicilan,sisa_pinjaman from pinjaman");
while($array=mysql_fetch_array($selek)){
echo"

<tr><td>$array[id_pinjaman]</td><td>$array[id_anggota]</td><td>$array[besar_pinjaman]</td><td>$array[tanggal_pinjaman]</td><td>$array[tanggal_pelunasan]</td><td>$array[keterangan]</td><td>$array[lama_cicilan]</td><td>$array[sisa_pinjaman]</td><td><a href='bayar_angsuran.php?id_pinjaman=$array[id_pinjaman]>Bayar</td></tr>
";
}
?>
</div>

</div>
</div>

</div>

</div>

</body>
</html>