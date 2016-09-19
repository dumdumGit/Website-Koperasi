<?php
mysql_connect("localhost","root","");
mysql_select_db("koperasi_ujikom");


$sql="insert into petugas_koperasi(id_petugas,nama,alamat,no_telepon,tempat_lahir,tanggal_lahir,keterangan)

values('$_POST[id_petugas]','$_POST[nama]','$_POST[alamat]','$_POST[no_telepon]','$_POST[tempat_lahir]','$_POST[tanggal_lahir]','$_POST[keterangan]')";
mysql_query($sql);

$user=$_POST['username'];
$pass=$_POST['password'];
$lvl=$_POST['level'];
$id=$_POST['id_petugas'];

$sql="insert into user(username,password,level,id)values('$user','$pass','$lvl','$id')";
mysql_query($sql);

header('location:'.$_SERVER['HTTP_REFERER']);


?>