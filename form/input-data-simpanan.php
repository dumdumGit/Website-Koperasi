<?php
mysql_connect("localhost","root","");
mysql_select_db("koperasi_ujikom");
mysql_query("insert into simpanan(id_simpanan,nama_simpanan,id_petugas,id_anggota,tanggal_simpanan,besar_simpanan,keterangan)
values('$_POST[id_simpanan]','$_POST[nama_simpanan]','$_POST[id_petugas]','$_POST[id_anggota]','$_POST[tanggal_simpanan]','$_POST[besar_simpanan]','$_POST[keterangan]')");
header('location:'.$_SERVER['HTTP_REFERER']);
?>