
<?php

include './koneksi1.php';
$No_Struk = $_GET['No_Struk'];
$query = "DELETE FROM pesan WHERE No_Struk = '$No_Struk'";
$result = $koneksi->query($query);
$num = mysqli_affected_rows($koneksi);

if ($num > 0){
    echo "Berhasil Hapus Data <br>";

} else {
    echo "Gagal Hapus Data <br>";
}
echo "<a href='pesan.php'>Lihat Data</a>";
?>