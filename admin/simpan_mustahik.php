<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nama = $_POST['nama'];
        $jk = $_POST['jk'];
        $alamat = $_POST['alamat'];
        $nomor = $_POST['nohp'];
        $kategori = $_POST['kategori'];
    include "koneksi.php";
    $simpan = "INSERT INTO mustahik
    (id_mustahik,nama_lengkap,jenis_kelamin,alamat,nomor,kategori) values
    (' ','$nama','$jk','$alamat','$nomor','$kategori')";

    if(mysqli_query($konek,$simpan)){
        echo "<h2> Data Berhasil Disimpan </h2><br>";
        echo "<a href=?page=tampil_mustahik>Back</a>";
    }else{
        echo "<h2>USER GAGAL Disimpan</h2><br>";
		echo "<a href=?page=tampil_mustahik>Back</a>";
    }

?>
</body>
</html>