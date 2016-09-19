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
<label for="ac-1"><img src="gambar/admin.png">Profile</label>
<article class="artikel-1">
<li><a href="#">Edit Profile</a></li>
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
<input id="ac-6"  type="checkbox" >
<label for="ac-6"><img src="gambar/laporan.png">Laporan</label>
<article class="artikel-3">
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
<div class="title"><img src="gambar/member.png">Data Anggota</div>


<?php
mysql_connect("localhost","root","");
mysql_select_db("koperasi_ujikom");
$anggota=$_GET['id_anggota'];
$query=mysql_query("select * from anggota where id_anggota='$anggota'");
$mfa=mysql_fetch_array($query);
?>
<?php
if($mfa['jenis_kelamin']=="laki-laki"){
$radio="<input type='radio' name='jenis_kelamin' value='laki-laki' checked>";
$radio2="<input type='radio' name='jenis_kelamin' value='perempuan'>";
}
else if ($mfa['jenis_kelamin']=="perempuan"){
$radio="<input type='radio' name='jenis_kelamin' value='laki-laki' >";
$radio2="<input type='radio' name='jenis_kelamin' value='perempuan' checked>";

}
?>
<form method="post" action="form/proses_update_anggota.php" >


<table>
<tr>
<td><span>ID_Anggota</span></td><td>:</td><td><input type="text" id="textfield" name="id_anggota" size="25" value="<?php echo $mfa['id_anggota'];?>"></td>
</tr>
<tr><td><span>Nama</span></td><td>:</td><td><input type="text" id="textfield" name="nama" size="40" value="<?php echo $mfa['nama'];?>"></td></tr>
<tr><td><span>Alamat</span></td><td>:</td><td><textarea name="alamat"  id="textfield" rows="5" cols="20" ><?php echo $mfa['alamat'];?></textarea></td></tr>
<tr><td><span>Tanggal Lahir</span></td><td>:</td><td><input type="date" id="textfield" name="tanggal_lahir" size="25" value="<?php echo $mfa['tanggal_lahir'];?>"></td></tr>
<tr><td><span>Tempat Lahir</span></td><td>:</td><td><input type="text" id="textfield" name="tempat_lahir" size="25" value="<?php echo $mfa['tanggal_lahir'];?>"></td></tr>
<tr><td><span>Jenis Kelamin</span></td><td>:</td><td><?php echo"$radio laki-laki $radio2 perempuan";?></tr>
<tr><td><span>Status</span></td><td>:</td><td><select id="textfield" name="status"><option><?php echo $mfa['status'];?></option>
                                             
</tr>
<tr><td><span>No_Telepon</span></td><td>:</td><td><input  id="textfield" type="text" name="no_telepon" size="25" value="<?php echo $mfa['no_telepon'];?>"></td></tr>
<tr><td><span>Keterangan</span></td><td>:</td><td><input id="textfield" type="text" name="keterangan" size="35" value="<?php echo $mfa['keterangan'];?>"></td></tr>
<tr><td><input type="submit" id="textfield" value="Simpan"></td><td><input type="submit" id="textfield" value="Cancel"></td></tr>
</table>


</div>




</div>

</div>

</div>

</body>
</html>