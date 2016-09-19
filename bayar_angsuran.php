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

<div class="isi_konten">

<div class="isi">
<div class="title"><img src="gambar/simpanan.png">Angsuran</div>
*Periksa Kembali sebelum klik tombol simpan karena data tidak bisa di edit
<?php
mysql_connect("localhost","root","");
mysql_select_db("koperasi_ujikom");
$h=mysql_query("select max(id_angsuran) as id_angsuran from angsuran");
	$data=mysql_fetch_array($h);
	$no=$data['id_angsuran'];
	$nourut=(int) substr($no, 2, 2);
	$nourut++;
	$char="AS";
	$idbaruu =$char. sprintf("%02s", $nourut);
	?>
<?php 
mysql_connect("localhost","root","");
mysql_select_db("koperasi_ujikom");
$pinjam=$_GET['id_pinjaman'];
$mq = mysql_query("select id_kategori_pinjaman,id_anggota,besar_angsuran,keterangan,id_pinjaman,sisa_pinjaman from pinjaman where id_pinjaman='$pinjam' ");
$mfa=mysql_fetch_array($mq);
?>
<form method="post" action="form/simpan_angsuran.php" >
<table>
<tr>
<td><span>ID Angsuran</span></td><td>:</td><td><input type="text" id="textfield" name="id_angsuran" readonly="true" size="25" value="<?php echo"$idbaruu"; ?>"></td>
</tr>
<tr><td><span>ID Kategori</span></td><td>:</td><td><input type="text" id="textfield" name="id_kategori" size="25" value="<?php echo $mfa['id_kategori_pinjaman'];?>"></td></tr>
<tr><td><span>ID Anggota</span></td><td>:</td><td><input type="text" id="textfield" name="id_anggota" size="25" value="<?php echo $mfa['id_anggota'];?>"> </td></tr>

<tr><td><span>Besar Angsuran</span></td><td>:</td><td><input type="text" id="textfield" name="besar_angsuran" ></td></tr>
                                                     </td>
</tr>
<tr><td><span>Keterangan</span></td><td>:</td><td><input type="text" id="textfield" name="keterangan" value="<?php echo $mfa['keterangan'];?>"></td></tr>
<tr><td><span>ID Pinjaman</span></td><td>:</td><td><input type="text" id="textfield" name="id_pinjaman" value="<?php echo $mfa['id_pinjaman'];?>"></td></tr>
<tr><td><span>Sisa Pinjaman Anda</span></td><td>:</td><td><input type="text"  id="textfield" name="sisa_pinjaman" value="<?php echo $mfa['sisa_pinjaman'];?>"></td></tr>

<tr>
<td><input type="submit" id="textfield" value="Simpan"></td>
</tr>
</table>
</form>

</div>



</div>

</div>
</div>

</div>

</div>

</body>
</html>