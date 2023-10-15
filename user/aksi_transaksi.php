<?php

// koneksi database
include '../koneksi.php';

$id = $_GET['id_buku'];
$data = mysqli_query($koneksi, "select * from daftar_buku where id_buku='$id'");
$d = mysqli_fetch_assoc($data);
function simpanTanggalPembelian($koneksi)
{
    $tanggal_pembelian = date("Y-m-d H:i:s");

    // menangkap data yang di kirim dari form
    $id = $_GET['id_transaksi'];
    $judul = $d['pengarang'];

    $harga = $_GET['harga'];
    $tanggal_pembelian = $_GET['tanggal_pembelian'];

    mysqli_query($koneksi, "insert into transaksi values('$id','$judul','$harga',$tanggal_pembelian)");
    header("location:index.php?alert=berhasil");
}
// menginput data ke database


// mengalihkan halaman kembali ke index.php
header("location:index.php");
