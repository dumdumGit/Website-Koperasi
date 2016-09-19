<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

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

<?php
mysql_connect("localhost","root","");
mysql_select_db("koperasi_ujikom");
$petugas=$_GET['id_petugas'];
$mfa=mysql_fetch_array(mysql_query("select * from petugas_koperasi where id_petugas='$petugas'"));
?>


<div class="isi">
<div class="title">Data Petugas</div>

<form method="post" action="form/proses_update.php">
<table>
<tr>
<td><span>ID_Petugas</span></td><td>:</td><td><input type="text" id="textfield" name="id_petugas" size="25" value="<?php echo $mfa['id_petugas'];?>"></td>
</tr>
<tr><td><span>Nama</span></td><td>:</td><td><input type="text" id="textfield" name="nama" size="40" value="<?php echo $mfa['nama'];?>"></td></tr>
<tr><td><span>Alamat</span></td><td>:</td><td><textarea name="alamat" id="textfield" rows="5" cols="20" ><?php echo $mfa['alamat'];?></textarea></td></tr>
<tr><td><span>No Telepon</span></td><td>:</td><td><input type="text" id="textfield" name="no_telepon" size="25" value="<?php echo $mfa['no_telepon'];?>"></td></tr>
<tr><td><span>Tempat Lahir</span></td><td>:</td><td><input type="text" id="textfield" name="tempat_lahir" size="25" value="<?php echo $mfa['tempat_lahir'];?>"></td></tr>
<tr><td><span>Tanggal Lahir</span></td><td>:</td><td><input type="date" id="textfield" name="tanggal_lahir" size="25" value="<?php echo $mfa['tanggal_lahir'];?>"></td></tr>
<tr><td><span>keterangan</span></td><td>:</td><td><textarea name="keterangan" id="textfield" rows="5" cols="20" ><?php echo $mfa['keterangan'];?></textarea></td>
</tr>

</table>

</div>

<div class="isi">
<div class="title">Data User</div>
<?php
mysql_connect("localhost","root","");
mysql_select_db("koperasi_ujikom");
$id=$_GET['id_petugas'];
$query=mysql_query("select * from user where id='$id'");
$mfa=mysql_fetch_array($query);
?>

<table>
<tr>
<td><span>ID</span></td><td>:</td><td><input type="text" id="textfield" name="id_petugas"  value="<?php echo $mfa['id'];?>"></td>
</tr>

<tr>
<td><span>Username</span></td><td>:</td><td><input type="text" id="textfield" name="username" size="35"  value="<?php echo $mfa['username'];?>"></td></tr>
<tr><td><span>Password</span></td><td>:</td><td><input type="password" id="textfield" name="password" size="35"  value="<?php echo $mfa['password'];?>"></td></tr>
<tr><td><span>Level</span></td><td>:</td><td><select name="level" id="textfield"  value="<?php echo $mfa['level'];?>">
                                                 
                                                 <option> Petugas</option></select></td>
												 </tr>
											<tr><td><input type="submit" id="textfield" value="Simpan"></td><td><input type="submit" id="textfield" value="Cancel"></td></tr>
	
												</table>
</form>

</div>

</div>

</div>

</div>

</body>
</html>

</body>
</html>