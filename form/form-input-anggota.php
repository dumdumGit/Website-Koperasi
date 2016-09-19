<html>
<title></title>
<head></head>
<body>

<form method="post" action="input-level.php" enctype="multipart/form-data">
<table>
<tr>
<td>Username</td><td>:</td><td><input type="text" name="username" size="40"></td></tr>
<tr><td>Password</td><td>:</td><td><input type="password" name="password" size="40"></td></tr>
<tr><td>Level</td><td>:</td><td><select name="level"><option>Admin</option>
                                                 <option>Petugas</option>
                                                 <option>Anggota</option></select></td>
												 </tr>
												<tr><td><input type="submit" value="Simpan"></td></tr>
												</table>
</form>

<form method="post" action="input-data-anggota.php" enctype="multipart/form-data">
<table>
<tr>
<td>ID_Anggota</td><td>:</td><td><input type="text" name="id_anggota" size="25"></td>
</tr>
<tr><td>Nama</td><td>:</td><td><input type="text" name="nama" size="40"></td></tr>
<tr><td>Alamat</td><td>:</td><td><textarea name="alamat" rows="20" cols="20"></textarea></td></tr>
<tr><td>Tanggal Lahir</td><td>:</td><td><input type="date" name="tanggal_lahir" size="25"></td></tr>
<tr><td>Tempat Lahir</td><td>:</td><td><input type="text" name="tempat_lahir" size="25"></td></tr>
<tr><td>Jenis Kelamin</td><td>:</td><td><input type="radio" name="jenis_kelamin" value="laki-laki">Laki-Laki
                                        <input type="radio" name="jenis_kelamin" value="perempuan">Perempuan</td></tr>
<tr><td>Status</td><td>:</td><td><select name="status"><option>Menikah</option>
                                                       <option>Belum Menikah</option></select></td>
</tr>
<tr><td>No_Telepon</td><td>:</td><td><input type="text" name="no_telepon" size="25"></td></tr>
<tr><td>Keterangan</td><td>:</td><td><input type="text" name="keterangan" size="35"></td></tr>
<tr><td>Username</td><td>:</td><td><input type="text" name="username" size="25"></td></tr>
<tr>
<td><input type="submit" value="Simpan"></td>
</tr>
</table>
</form>

</body>
</html>