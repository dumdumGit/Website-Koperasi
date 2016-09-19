



<html>
<head>
<title>Report</title>
</head>
<link rel="stylesheet" type="text/css" href="css/rpt.css">
<body>
<br />
<br />
<br />
<?php

mysql_connect("localhost","root","");
mysql_select_db("koperasi_ujikom");
echo"
<table class='border' align='center'>
<tr><th>ID Angsuran</th><th>ID Kategori</th><th>ID Anggota</th><th>Tanggal Pembayaran</th><th>Angsuran Ke-</th><th>Besar Angsuran</th><th>Keterangan</th><th>ID Pinjaman</th></tr>
";
$selek=mysql_query("SELECT
    id_angsuran
    , id_kategori
    , id_anggota
    , tanggal_pembayaran
    , angsuran_ke
    , besar_angsuran
    , keterangan
    , id_pinjaman
FROM
    koperasi_ujikom.angsuran;");
while($array=mysql_fetch_array($selek)){
echo"

<tr><td>$array[id_angsuran]</td><td>$array[id_kategori]</td><td>$array[id_anggota]</td><td>$array[tanggal_pembayaran]</td><td>$array[angsuran_ke]</td><td>$array[besar_angsuran]</td><td>$array[keterangan]</td><td>$array[id_pinjaman]</td></tr>
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