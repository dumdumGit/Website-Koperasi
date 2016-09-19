<?php
mysql_connect("localhost","root","");
mysql_select_db("koperasi_ujikom");
mysql_query("UPDATE anggota SET nama='$_POST[nama]', alamat='$_POST[alamat]',tanggal_lahir='$_POST[tanggal_lahir]',tempat_lahir='$_POST[tempat_lahir]',jenis_kelamin='$_POST[jenis_kelamin]',status='$_POST[status]',no_telepon='$_POST[no_telepon]',keterangan='$_POST[keterangan]' where id_anggota='$_POST[id_anggota]'");
header ('location:'.$_SERVER['HTTP_REFERER']);
?>