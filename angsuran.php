


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
<li><a href="bayar_angsuran.php">Angsuran</a></li>
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
<div class="title"><img src="gambar/petugas.png">Angsuran</div>

<form method="post" action="form/input-angsuran.php" enctype="multipart/form-data">
<table>
<tr>
<td><span>ID_Angsuran</span></td><td>:</td><td><input type="text" id="textfield" name="id_angsuran" size="25"></td>
</tr>
<tr><td><span>ID Kategori</span></td><td>:</td><td><input type="text" id="textfield" name="id_kategori" size="40"></td></tr>
<tr><td><span>ID Anggota</span></td><td>:</td><td><input type="text" id="textfield" name="id_anggota" size="25"> </td></tr>
<tr><td><span>Tanggal Pembayaran</span></td><td>:</td><td><input id="textfield" type="date" name="tanggal_pembayaran" size="25"></td></tr>
<tr><td><span>Angsuran Ke-</span></td><td>:</td><td><input id="textfield" type="text" name="angsuran_ke" size="25"></td></tr>
<tr><td><span>Besar Angsuran</span></td><td>:</td><td><input type="text" id="textfield" name="besar_angsuran"></td></tr>
<tr><td><span>Keterangan</span></td><td>:</td><td><input type="text" id="textfield" name="keterangan" size="40"></td>
</tr>
<tr><td><span>ID Pinjaman</span></td><td>:</td><td><input type="text" id="textfield" name="id_pinjaman" size="25"></td>
</tr>
<tr>
<td><input type="submit" id="textfield" value="Simpan"></td>
</tr>
</table>
</form>

</div>



</div>

</div>

</div>

</body>
</html>