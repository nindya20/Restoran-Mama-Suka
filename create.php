<?php
include "koneksi1.php";

$No_Struk = $_POST['No_Struk'];
$Nama = $_POST['Nama'];
$Alamat = $_POST['Alamat'];
$Tanggal = $_POST['Tanggal'];
$No_Meja = $_POST['No_Meja'];

$query = "INSERT INTO pesan (No_Struk,Nama,Alamat,Tanggal,No_Meja)
          VALUES ('$No_Struk','$Nama', '$Alamat', '$Tanggal', '$No_Meja')";
$result = mysqli_query($koneksi,$query);
$num = mysqli_affected_rows($koneksi);

if($num > 0){
    echo "Berhasil Menambah Data";
}else{
    echo "GAGAL".mysqli_error($koneksi);
}

    echo "<a href='pesan.php'>Lihat Data</a>";
