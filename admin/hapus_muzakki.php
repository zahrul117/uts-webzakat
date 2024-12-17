<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Hapus Produk</title>
</head>

<body>
    <?php
    include "koneksi.php";
    $hapus="DELETE From muzakki where id_muzakki='$_GET[id_muzakki]'";
    if(mysqli_query($konek,$hapus))
    ?>
</body>
</html>