



<html>
<head>
<title>Report</title>
</head>
<link rel="stylesheet" type="text/css" href="css/rpt.css">
<body>

<?php

mysql_connect("localhost","root","");
mysql_select_db("koperasi_ujikom");
echo"
<table class='border' align='center'>
<tr><th>Tanggal Pinjaman</th><th>Tanggal Pelunasan</th><th>ID Pinjaman</th><th>Nama Pinjaman</th><th>Besar Pinjaman</th><th>Keterangan</th><th>ID Kategori Pinjaman</th><th>Besar Jasa</th><th>Lama Cicilan</th><th>Besar Pinjaman</th><th>ID Anggota</th></tr>
";
$selek=mysql_query("SELECT
    pinjaman.tanggal_pinjaman
    , pinjaman.tanggal_pelunasan
    , pinjaman.id_pinjaman
    , pinjaman.nama_pinjaman
    , pinjaman.besar_pinjaman
    , pinjaman.keterangan
    , pinjaman.id_kategori_pinjaman
    , pinjaman.besar_jasa
    , pinjaman.lama_cicilan
    , pinjaman.besar_angsuran
    , pinjaman.sisa_pinjaman
    , pinjaman.id_anggota
 
FROM
    koperasi_ujikom.pinjaman
    , koperasi_ujikom.anggota
GROUP BY pinjaman.id_pinjaman");
while($array=mysql_fetch_array($selek)){
echo"

<tr><td>$array[tanggal_pinjaman]</td><td>$array[tanggal_pelunasan]</td><td>$array[id_pinjaman]</td><td>$array[nama_pinjaman]</td><td>$array[besar_pinjaman]</td><td>$array[keterangan]</td><td>$array[id_kategori_pinjaman]</td><td>$array[besar_jasa]</td><td>$array[lama_cicilan]</td><td>$array[sisa_pinjaman]</td><td>$array[id_anggota]</td></tr>
";
}
?>

 <script>
 window.load = print_d();
 function print_d(){
 window.print();
 }
 </script>
</body>
</html>