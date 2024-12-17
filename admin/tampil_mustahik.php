<?php
include "koneksi.php";
$tampil = "SELECT * FROM mustahik";
$view = mysqli_query($konek,$tampil);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .container{
            width: 100%;
            background-color: gray;
        }
    </style>
</head>
<body>
<h2 class="ms-5">Tampil Mustahik</h2>
    <hr align="left" width="400">
    <a class="btn btn-primary mb-3" style="margin-left: 45px;" href="?page=input_mustahik" role="button">Input Mustahik</a>
    <div class="container">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-striped">
    <tr>
          <th width="3%" class="text-center">No.</th>
          <th width="15%" class="text-center">Nama Lengkap</th>
          <th width="12%" class="text-center">Jenis Kelamin</th>
          <th width="12%" class="text-center">Alamat</th>
          <th width="12%" class="text-center">No HP</th>
          <th width="18%" class="text-center">Kategori</th>
          <th width="18%" class="text-center">Aksi</th>
    </tr>
    <?php while($data = mysqli_fetch_assoc($view)):?>
        <tr>
            <td class="text-center">1</td>
            <td class="text-center"><?php echo $data['nama_lengkap'];?></td>
            <td class="text-center"><?= $data['jenis_kelamin'];?></td>
            <td class="text-center"><?= $data['alamat'];?></td>
            <td class="text-center"><?= $data['nomor'];?></td>
            <td class="text-center"><?= $data['kategori'];?></td>
            <td class="text-center"><a class="btn btn-danger" href="?page=hapus_mustahik&id_mustahik=<?php echo $data['id_mustahik']; ?>">Hapus</a> | 
            <a class="btn btn-primary" href="?page=hapus_mustahik&id_mustahik=<?php echo $data['id_mustahik']; ?>">Edit</a>
        </td>
        </tr>

    <?php endwhile;?>
    </table>
    </div>
</body>
</html>