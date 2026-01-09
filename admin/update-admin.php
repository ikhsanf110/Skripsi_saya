<?php
$namafolder="gambar_admin/"; //tempat menyimpan file
include "../conn.php";
$user_id       = $_POST['user_id'];
$username      = $_POST['username'];
$password1	   = $_POST['password'];
$password      = sha1($password1);
$fullname      = $_POST['fullname'];

$query = mysqli_query($koneksi, "UPDATE user SET username='$username', password='$password', fullname='$fullname' WHERE user_id='$user_id'")or die(mysql_error());
if ($query){
header('location:admin.php');	
} else {
	echo "gagal";
    }
?>