<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>

</head>

<body>
  <h2>INPUT Muzakki</h2><hr width="800">
    <form id="form1" method="post" name="form1" action="?page=simpan_muzakki" enctype="multipart/form-data">
        <!--Untuk Nama lengkap -->
        <div class="mb-3 row">
    <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="nama" name=nama required>
    </div>
  </div>
        <!-- Untuk Jenis Kelamin -->
        <div class="mb-3 row">
         <label for="jk" class="col-sm-2 col-form-label">Jenis Kelamin</label>
         <div class="col-sm-4">
         <select name="jk" id="jk">
          <option value="Laki-laki">Laki-Laki</option>
          <option value="Perempuan">Perempuan</option>
         </select>
         </div>
        </div>
    

    <!-- alamat -->
    <div class="mb-3 row">
    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="alamat" name=alamat required>
    </div>
  </div>

        <!--Untuk Nomor HP -->
        <div class="mb-3 row">
    <label for="nohp" class="col-sm-2 col-form-label">No</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="nohp" name=nohp required>
    </div>
  </div>

   <!--Untuk Email -->
   <div class="mb-3 row">
    <label for="email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-4">
      <input type="email" class="form-control" id="email" name=email required>
    </div>
  </div>


        <!-- Untuk button simpan dan back -->
        <div class="mb-3 row">
    <label for="button" class="col-sm-2 col-form-label"></label>
    <div class="col-sm-4">
        
       <button type="submit" class="btn btn-primary">Simpan!</button> 
        
     <a href="?page=tampil_user"><button type="button" class="btn btn-warning" href=>Back</button></a>
    </div>
  </div>
</body>
</html>