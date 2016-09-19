<?php
mysql_connect("localhost","root","");
mysql_select_db("koperasi_ujikom");
mysql_query("delete from petugas_koperasi where id_petugas='$_GET[id_petugas]' ");
mysql_query("delete from user where id='$_GET[id]' ");
header('location:'.$_SERVER['HTTP_REFERER']);
?>
