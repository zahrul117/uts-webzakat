<?php
include 'koneksi.php';
$ambil = "SELECT * FROM amilzakat";
$tampil = mysqli_query($konek,$ambil);



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h2 class="ms-5">Tampil Amil Zakat</h2>
    <hr align="left" width="400">
    <a class="btn btn-primary mb-3" style="margin-left: 45px;" href="?page=input_mustahik" role="button">Input Amil</a>

    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-striped">
        <tr>
            <th>Nomor</th>
            <th>Nama Amil</th>
            <th>Nomor Telepon</th>
            <th>Alamat</th>
        </tr>
        <?php while($data = mysqli_fetch_array($tampil)):?>
            <tr>
                <td>1</td>
                <td><?= $data['nama_amil'];?></td>
                <td><?= $data['no_hp'];?></td>
                <td><?= $data['alamat'];?></td>
            </tr>


    <?php endwhile;?>        
    </table>
</body>
</html>