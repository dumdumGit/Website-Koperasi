<?php
mysql_connect("localhost","root","");
mysql_select_db("koperasi_ujikom");


mysql_query("insert into petugas_koperasi(id_petugas,nama,alamat,no_telepon,tempat_lahir,tanggal_lahir,keterangan,username)
values('$_POST[id_petugas]','$_POST[nama]','$_POST[alamat]','$_POST[no_telepon]','$_POST[tempat_lahir]','$_POST[tanggal_lahir]','$_POST[keterangan]','$_POST[username]')");
?>
<?php

mysql_connect("localhost","root","");
mysql_select_db("koperasi_ujikom");

$user=$_POST['username'];
$pass=$_POST['password'];
$lvl=$_POST['level'];

$sql="insert into user(username,password,level)values('$user','$pass','$lvl')";
mysql_query($sql)
or die("Gagal query simpan: ".mysql_error());

header('location:'.$_SERVER['HTTP_REFERER']);


?>