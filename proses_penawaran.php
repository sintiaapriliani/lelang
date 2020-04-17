<?php

include 'koneksi.php';

$nama_barang        =$_POST['nama_barang'];
$status_barang      =$_POST['status_barang'];
$harga_awal         =$_POST['harga_awal'];
$harga_penawaran    =$_POST['harga_penawaran'];


$query=mysqli_query($koneksi, "INSERT INTO penawaran VALUES('', '$nama_barang', '$status_barang', '$harga_awal', '$harga_penawaran') ");

if($query == TRUE) {
    echo "Penawaran Berhasil";
}else{
    echo "Penawaran gagal...".mysqli_connect_error($koneksi);
}