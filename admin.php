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

<div class="beranda">
<div class="title"><img src="gambar/koperasi.png">Koperasi Ulul Albab</div>
<table align="center">
<tr><td><img src="gambar/image.png" width="300px" height="150px"></td></tr>
</table>
<br />
Koperasi adalah organisasi bisnis yang dimiliki dan dioperasikan oleh orang-seorang demi kepentingan bersama. Koperasi melandaskan kegiatan berdasarkan prinsip gerakan ekonomi rakyat yang berdasarkan asas kekeluargaan.

Prinsip koperasi Ulul Albab<br /><br />

Prinsip koperasi adalah suatu sistem ide-ide abstrak yang merupakan petunjuk untuk membangun koperasi yang efektif dan tahan lama.Prinsip koperasi terbaru yang dikembangkan International Cooperative Alliance (Federasi koperasi non-pemerintah internasional) adalah

    Keanggotaan yang bersifat terbuka dan sukarela
    Pengelolaan yang demokratis,
    Partisipasi anggota dalam ekonomi,
    Kebebasan dan otonomi,
    Pengembangan pendidikan, pelatihan, dan informasi.<br /><br />

Di Indonesia sendiri telah dibuat UU no. 25 tahun 1992 tentang Perkoperasian. Prinsip koperasi menurut UU no. 25 tahun 1992 adalah:

    Keanggotaan bersifat sukarela dan terbuka
    Pengelolaan dilakukan secara demokrasi
    Pembagian SHU dilakukan secara adil sesuai dengan jasa usaha masing-masing anggota
    Pemberian balas jasa yang terbatas terhadap modal<br /><br />

	 Keunggulan koperasi Ulul Albab

Kemungkinan koperasi untuk memperoleh keunggulan komparatif dari perusahaan lain cukup besar mengingat koperasi mempunyai potensi kelebihan antara lain pada skala ekonomi, aktivitas yang nyata, faktor-faktor precuniary, dan lain-lain.

</div>


</div>

</div>

</body>
</html>
