<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Isi File</title>
</head>

<body>
    <?php
    if(isset($_GET['page'])){
        $page=$_GET['page'];
        if($page=='home'){
            include "home.php";
        }
        //untuk muzakki
        elseif($page=='tampil_muzaki') {
            include "tampil_muzaki.php";
        }
        elseif($page=='input_muzakki') {
            include "input_muzakki.php";
        }
         elseif($page=='simpan_muzakki') {
            include "simpan_muzakki.php";
        }
        elseif($page=='hapus_muzakki') {
            include "hapus_muzakki.php";
        }
        //untuk mustahik
        elseif($page=='tampil_mustahik') {
            include "tampil_mustahik.php";
        }
        elseif($page=='input_mustahik'){
            include "input_mustahik.php";
        }
        elseif($page=='hapus_mustahik') {
            include "hapus_mustahik.php";
        }
        elseif($page=='simpan_mustahik') {
            include "simpan_mustahik.php";
        }
        //untuk amil
        elseif($page=='tampil_amil'){
            include "tampil_amil.php";
        }
    }else {
        include "home.php";
    }
//simpan :isifile    
    ?>
</body>
</html>