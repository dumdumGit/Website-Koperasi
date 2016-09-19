



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
<tr><th>Tanggal Simpanan</th><th>ID Simpanan</th><th>Nama Simpanan</th><th>ID Anggota</th><th>Jenis Kelamin</th><th>Besar Simpanan</th></tr>
";
$selek=mysql_query("SELECT
    simpanan.tanggal_simpanan
    , simpanan.id_simpanan
    , simpanan.nama_simpanan
    , simpanan.id_anggota
    , anggota.jenis_kelamin
    , simpanan.besar_simpanan
FROM
    koperasi_ujikom.anggota
    , koperasi_ujikom.simpanan
GROUP BY simpanan.tanggal_simpanan");
while($array=mysql_fetch_array($selek)){
echo"

<tr><td>$array[tanggal_simpanan]</td><td>$array[id_simpanan]</td><td>$array[nama_simpanan]</td><td>$array[id_anggota]</td><td>$array[jenis_kelamin]</td><td>$array[besar_simpanan]</td></tr>
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