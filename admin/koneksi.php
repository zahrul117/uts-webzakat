<?php
$server="localhost";
$username="root";
$password="";
$database="dbzakat_uts";
$konek=mysqli_connect($server,$username,$password,$database);
if(mysqli_connect_errno()){
	echo "Gagal Koneksi Ke Database";
}





?>