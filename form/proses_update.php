<?php
mysql_connect("localhost","root","");
mysql_select_db("koperasi_ujikom");
mysql_query("update petugas_koperasi set nama='$_POST[nama]', alamat='$_POST[alamat]',no_telepon='$_POST[no_telepon]',tempat_lahir='$_POST[tempat_lahir]',tanggal_lahir='$_POST[tanggal_lahir]',keterangan='$_POST[keterangan]' where id_petugas='$_POST[id_petugas]'");
mysql_query("update user set  username='$_POST[username]',password='$_POST[password]',level='$_POST[level]' where id='$_POST[id_petugas]'");

header ('location:../admin-data_petugas.php');
?>