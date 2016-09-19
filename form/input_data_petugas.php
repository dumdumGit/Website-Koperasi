<?php
mysql_connect("localhost","root","");
mysql_select_db("koperasi_ujikom");
mysql_query("insert into petugas_koperasi(id_petugas,nama,alamat,no_telepon,tempat_lahir,tanggal_lahir,keterangan)
values('$_POST[id_petugas]','$_POST[nama]','$_POST[alamat]','$_POST[no_telepon]','$_POST[tempat_lahir]','$_POST[tanggal_lahir]','$_POST[keterangan]')");
header('location:'.$_SERVER['HTTP_REFERER']);
?>