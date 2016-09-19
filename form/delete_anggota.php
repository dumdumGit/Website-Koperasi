<?php
mysql_connect("localhost","root","");
mysql_select_db("koperasi_ujikom");
mysql_query("delete from anggota where id_anggota='$_GET[id]' ");
mysql_query("delete from user where id='$_GET[id]' ");
mysql_query("delete from angsuran where id_anggota='$_GET[id]' ");
mysql_query("delete from pinjaman where id_anggota='$_GET[id]' ");
mysql_query("delete from simpanan where id_anggota='$_GET[id]' ");
header('location:'.$_SERVER['HTTP_REFERER']);
?>
