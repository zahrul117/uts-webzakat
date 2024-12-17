<?php 
  //  koneksi ke database
  include "koneksi.php";
  $tampil="SELECT * From muzakki";
  // ambil data dari tabel muzakki / query data muzakki
  $view=mysqli_query($konek,$tampil);
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
    <a class="btn btn-primary mb-3" style="margin-left: 45px;" href="?page=input_muzakki" role="button">Input Muzakki</a>
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-striped">
      <tbody>
        <tr>
         <th width="3%">No.</th>
          <th width="15%">Nama Lengkap</th>
          <th width="12%">Jenis Kelamin</th>
          <th width="12%">Alamat</th>
          <th width="12%">No HP</th>
          <th width="18%">Email</th>
          <th width="18%">Aksi</th>
        </tr>
        <?php $no = 1;?>
        <?php
        // ambil data (fetch) muzakki dari tabel muzakki
        while($data=mysqli_fetch_assoc($view)){
        ?>
        <tr>
          <td><?= $no; ?></td>
          <td><?php echo $data['nama_lengkap']; ?></td>
          <td><?php echo $data['jenis_kelamin']; ?></td>
          <td><?= $data['alamat']; ?></td>
          <td><?= $data['nomor']; ?></td>
          <td><?= $data['email']; ?></td>
          <td><a class="btn btn-danger" href="?page=hapus_muzakki&id_muzakki=<?php echo $data['id_muzakki']; ?>"">Hapus</a> | 
          <a class="btn btn-primary" href="?page=hapus_muzakki&id_muzakki=<?php echo $data['id_muzakki']; ?>">Edit</a>
        </td>
        </tr>
        <?php $no++; ?>
        <?php } ?>
      </tbody>
    </table>
    <p>&nbsp;</p>

</body>
</html>