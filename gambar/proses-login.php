<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("koperasi_ujikom");
$check=mysql_num_rows(mysql_query("select * from user where username='$_POST[username]' AND password='$_POST[password]'"));
echo "$check";
if($check == 0){
header('location:index.php');
}
else{$array=mysql_fetch_array(mysql_query("select * from user where username='$_POST[username]' AND password='$_POST[password]' "));

$_SESSION['username']= $array['username'];
$_SESSION['level']= $array['level'];

if($_SESSION['level']=='admin')
{header('location:halaman.php');}
else if($_SESSION['level']=='petugas')
{header('location:petugas.php');}
}
?>