<?php
mysql_connect("localhost","root","");
mysql_select_db("koperasi_ujikom");
mysql_query("insert into anggota(id_anggota,nama,alamat,tanggal_lahir,tempat_lahir,jenis_kelamin,status,no_telepon,keterangan)
values('$_POST[id_anggota]','$_POST[nama]','$_POST[alamat]','$_POST[tanggal_lahir]','$_POST[tempat_lahir]','$_POST[jenis_kelamin]','$_POST[status]','$_POST[no_telepon]','$_POST[keterangan]')");


$user=$_POST['username'];
$pass=$_POST['password'];
$lvl=$_POST['level'];
$id= $_POST['id_anggota'];



$sql="insert into user(username,password,level,id)values('$user','$pass','$lvl','$id')";
mysql_query($sql)
or die("Gagal query simpan: ".mysql_error());


header('location:'.$_SERVER['HTTP_REFERER']);

?>