<?php
mysql_connect("localhost","root","");
mysql_select_db("koperasi_ujikom");
mysql_query("update user set  username='$_POST[username]',password='$_POST[password]',level='$_POST[level]' where id='$_POST[id_anggota]'");
header('location:../petugas-data_anggota.php');
?>