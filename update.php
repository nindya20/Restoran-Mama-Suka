<?php

include './koneksi1.php';

$No_Struk = $_POST['No_Struk'];
$Nama = $_POST['Nama'];
$Alamat = $_POST['Alamat'];
$Tanggal = $_POST['Tanggal'];
$No_Meja = $_POST['No_Meja'];

$query = "UPDATE pesan SET Nama = '$Nama', Alamat = '$Alamat', Tanggal = '$Tanggal', No_Meja = '$No_Meja' WHERE No_Struk = '$No_Struk' ";
$result = $koneksi->query($query);
$num = mysqli_affected_rows($koneksi);

if ($num > 0){
    echo "Berhasil Update Data <br>";

} else {
    echo "Gagal Update Data <br>";
}
echo "<a href='pesan.php'>Lihat Data</a>";
?>