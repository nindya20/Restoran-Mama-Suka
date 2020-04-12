<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

include './koneksi1.php';
$No_Struk = $_GET['No_Struk'];
$query = "SELECT * FROM pesan WHERE No_Struk = '$No_Struk'";
$result = $koneksi->query($query);
$row = $result->fetch_assoc();
?>
    <form action="update.php" method="post">
    <table>
    <tr>
    <td><label for="Nama">Nama</label></td>
    <td>:</td>
    <td><input type="text" name="Nama" id="Nama" value="<?php echo $row['Nama']; ?>"></td>
    </tr>
    <tr>
    <td><label for="Alamat">Alamat</label></td>
    <td>:</td>
    <td><input type="text" name="Alamat" id="Alamat" value="<?php echo $row['Alamat']; ?>"></td>
    </tr>
    <tr>
    <td><label for="Tanggal">Tanggal Pesan</label></td>
    <td>:</td>
    <td><input type="text" name="Tanggal" id="Tanggal" value="<?php echo $row['Tanggal']; ?>"></td>
    </tr>
    <tr>
    <td><label for="No_Meja">No_Meja</label></td>
    <td>:</td>
    <td><input type="text" name="No_Meja" id="No_Meja" value="<?php echo $row['No_Meja']; ?>"></td>
    </tr>
    <tr>
    <td></td>
    <td><input type="hidden" name="No_Struk" value="<?php echo $row['No_Struk']; ?>"></td>
    <td><input type="submit" value="Simpan" name="btnSimpan"></td>
    </tr>
    </table>
    </form>
</body>
</html>