<?php
mysql_connect("localhost","root","");
mysql_select_db("koperasi_ujikom");
mysql_query("insert into angsuran(id_angsuran,id_kategori,id_anggota,tanggal_pembayaran,angsuran_ke,besar_angsuran,keterangan,id_pinjaman)
values('$_POST[id_angsuran]','$_POST[id_kategori]','$_POST[id_anggota]','$_POST[tanggal_pembayaran]','$_POST[angsuran_ke]','$_POST[besar_angsuran]','$_POST[keterangan]','$_POST[id_pinjaman]')");
header('location:'.$_SERVER['HTTP_REFERER']);
?>