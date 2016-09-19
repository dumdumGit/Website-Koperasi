<?php
mysql_connect("localhost","root","");
mysql_select_db("koperasi_ujikom");
$besar=$_POST['besar_pinjaman'];
$jasa=$_POST['besar_jasa'];
$lama=$_POST['lama_cicilan'];
$sisa=$besar + (($besar/100)*$jasa);
$angsuran= $sisa/$lama;
mysql_query("insert into pinjaman(id_pinjaman,nama_pinjaman,id_anggota,besar_pinjaman,tanggal_pengajuan_pinjaman,tanggal_acc_peminjam,tanggal_pinjaman,keterangan,id_kategori_pinjaman,id_petugas,besar_jasa,lama_cicilan,besar_angsuran,sisa_pinjaman)
values('$_POST[id_pinjaman]','$_POST[nama_pinjaman]','$_POST[id_anggota]','$_POST[besar_pinjaman]','$_POST[tanggal_pengajuan_pinjaman]','$_POST[tanggal_acc_peminjam]','$_POST[tanggal_pinjaman]','$_POST[keterangan]','$_POST[id_kategori_pinjaman]','$_POST[id_petugas]','$_POST[besar_jasa]','$_POST[lama_cicilan]','$angsuran','$sisa')");
header('location:'.$_SERVER['HTTP_REFERER']);
?>