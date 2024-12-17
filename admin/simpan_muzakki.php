<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Simpan User</title>
</head>

<body>
    <?php
    // $id_muzakki=$_POST['id_muzakki']; //iduser di input dari input muzakki melalui form dengan id iduser
	$nama=$_POST['nama'];
	$jk=$_POST['jk'];
	$alamat=$_POST['alamat'];
	$NoHP=$_POST['nohp'];
	$email=$_POST['email'];
    include "koneksi.php";
    
    //untuk simpan user
    $simpan="INSERT INTO muzakki(
id_muzakki,nama_lengkap,jenis_kelamin,alamat,nomor,email) values(' ','$nama','$jk','$alamat','$NoHP','$email')";
	if(mysqli_query($konek,$simpan)){
		echo "<h2>User Berhasil Disimpan</h2><br>";
		echo "<a href=?page=tampil_user>Back</a>";
	} else {
		echo "<h2>USER GAGAL Disimpan</h2><br>";
		echo "<a href=?page=tampil_user>Back</a>";
		
	}	
    ?>
</body>
</html>