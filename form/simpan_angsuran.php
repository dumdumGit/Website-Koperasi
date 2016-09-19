<?php
mysql_connect("localhost","root","");
mysql_select_db("koperasi_ujikom");

$s = $_POST['sisa_pinjaman']-$_POST['besar_angsuran'];
$mfa = mysql_fetch_array(mysql_query("select * from angsuran where id_pinjaman = '$_POST[id_pinjaman]'"));
$ak = $mfa['angsuran_ke']+1;

mysql_query("insert into angsuran(id_angsuran,id_kategori,id_anggota,angsuran_ke,besar_angsuran,keterangan,id_pinjaman)
values('$_POST[id_angsuran]','$_POST[id_kategori]','$_POST[id_anggota]','$ak','$_POST[besar_angsuran]','$_POST[keterangan]','$_POST[id_pinjaman]')");

if($s==0){
mysql_query("update pinjaman set sisa_pinjaman='0', keterangan='lunas' where id_pinjaman = '$_POST[id_pinjaman]' ");
mysql_query("update angsuran set keterangan='lunas' where id_pinjaman= '$_POST[id_pinjaman]'");
}
else{
mysql_query("update pinjaman set sisa_pinjaman='$s' where id_pinjaman = '$_POST[id_pinjaman]' ");
}

if($ak>=1){
mysql_query("update angsuran set angsuran_ke='$ak' where id_pinjaman = '$_POST[id_pinjaman]' ");
}
header('location:../petugas_cari_angsuran.php');
?>