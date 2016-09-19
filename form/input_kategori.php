<?php
mysql_connect("localhost","root","");
mysql_select_db("koperasi_ujikom");
mysql_query("insert into kategori_pinjaman(id_kategori_pinjaman,nama_pinjaman)
             values('$_POST[id_kategori_pinjaman]','$_POST[nama_pinjaman]')");
header('location:'.$_SERVER['HTTP_REFERER']);
?>