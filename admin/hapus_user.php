<?php
// koneksi database
include '../koneksi.php';

// menangkap data id yang di kirim dari url
$id = $_GET['id'];


// menghapus data dari database
mysqli_query($koneksi,"delete from login where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:tabel_user.php");

error_reporting(E_ALL);
ini_set('display_errors', 1);

?>