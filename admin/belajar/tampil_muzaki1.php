<?php 
  require 'functions.php';
  $muzakki = query("SELECT * FROM muzakki");
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
<h2 class="ms-5">Tampil Muzakki</h2>
    <hr align="left" width="400">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-striped">
      <tbody>
            <a class="btn btn-primary mb-3" style="margin-left: 45px;" href="?page=input_muzakki" role="button">Input Muzakki</a>
        <tr>
         <th>No.</th>
          <th width="15%">Nama Lengkap</th>
          <th width="12%">Jenis Kelamin</th>
          <th width="18%">Alamat</th>
          <th width="18%">No HP</th>
          <th width="18%">Email</th>
          <th width="11%">Aksi</th>
        </tr>
        <?php $no = 1;?>
        <?php
        // ambil data (fetch) muzakki dari tabel muzakki
        foreach($muzakki as $row){
        ?>
        <tr>
          <td><?= $no; ?></td>
          <td><?php echo $row['nama_lengkap']; ?></td>
          <td><?php echo $row['jenis_kelamin']; ?></td>
          <td><?= $row['alamat']; ?></td>
          <td><?= $row['nomor']; ?></td>
          <td><?= $row['email']; ?></td>
          <td><a class="btn btn-danger" href="?page=hapus_muzakki&id_muzakki=<?php echo $data['id_muzakki']; ?>">Hapus</a></td>
        </tr>
        <?php $no++; ?>
        <?php } ?>
      </tbody>
    </table>
    <p>&nbsp;</p>


</body>
</html>