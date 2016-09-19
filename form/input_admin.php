<?php
mysql_connect("localhost","root","");
mysql_select_db("koperasi_ujikom");

$user=$_POST['username'];
$pass=$_POST['password'];
$lvl=$_POST['level'];
$id= $_POST['id'];



$sql="insert into user(username,password,level,id)values('$user','$pass','$lvl','$id')";
mysql_query($sql)
or die("Gagal query simpan: ".mysql_error());
header('location:../admin-data_admin.php');



?>