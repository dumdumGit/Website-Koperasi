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
<div class="title"><img src="gambar/laporan.png">Laporan Pinjaman</div>
<?php

mysql_connect("localhost","root","");
mysql_select_db("koperasi_ujikom");
echo"
<table class='border' align='center'>
<tr><th>Tanggal Pinjaman</th><th>Tanggal Pelunasan</th><th>ID Pinjaman</th><th>Nama Pinjaman</th><th>Besar Pinjaman</th><th>Keterangan</th><th>ID Kategori Pinjaman</th><th>Besar Jasa</th><th>Lama Cicilan</th><th>Besar Pinjaman</th><th>ID Anggota</th></tr>
";
$selek=mysql_query("SELECT
    pinjaman.tanggal_pinjaman
    , pinjaman.tanggal_pelunasan
    , pinjaman.id_pinjaman
    , pinjaman.nama_pinjaman
    , pinjaman.besar_pinjaman
    , pinjaman.keterangan
    , pinjaman.id_kategori_pinjaman
    , pinjaman.besar_jasa
    , pinjaman.lama_cicilan
    , pinjaman.besar_angsuran
    , pinjaman.sisa_pinjaman
    , pinjaman.id_anggota
 
FROM
    koperasi_ujikom.pinjaman
    , koperasi_ujikom.anggota
GROUP BY pinjaman.id_pinjaman");
while($array=mysql_fetch_array($selek)){
echo"

<tr><td>$array[tanggal_pinjaman]</td><td>$array[tanggal_pelunasan]</td><td>$array[id_pinjaman]</td><td>$array[nama_pinjaman]</td><td>$array[besar_pinjaman]</td><td>$array[keterangan]</td><td>$array[id_kategori_pinjaman]</td><td>$array[besar_jasa]</td><td>$array[lama_cicilan]</td><td>$array[sisa_pinjaman]</td><td>$array[id_anggota]</td></tr>
";
}
?>
<div id="posisi"><button style="margin-left:5%" onClick="print_d()"><img src="gambar/print.png" width="50" height="50"></button></div>

 <script>
 function print_d(){
 window.open("print.php","_blank");
 }
 </script>

</div>
</div>

</div>

</body>
</html>