<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan</title>
</head>
<body>
    

    <center><h1>Data Pemesanan</h1>
    
    <table width='80%' border=1>

    <tr>
    <th bgcolor='pink'>No Struk</th>
    <th bgcolor='pink'>Nama</th>
    <th bgcolor='pink'>Alamat</th>
    <th bgcolor='pink'>Tanggal</th>
    <th bgcolor='pink'>No Meja</th>  
    <th bgcolor='pink'>Aksi 1</th>
    <th bgcolor='pink'>Aksi 2</th>
    <th bgcolor='pink'>Aksi 3</th>
    <a href="tambahdata.php" class="btn btn-lg btn-primary">Pesan</a>
    
    </center>
    </tr>
    <?php
    include "koneksi1.php";
    $query = "select * from pesan";
    $sql = mysqli_query($koneksi,$query);
    while($user_data = mysqli_fetch_array($sql)){
        echo "<tr>";
        echo "<td><center>".$user_data['No_Struk']."</center></td>";
        echo "<td><center>".$user_data['Nama']."</center></td>";
        echo "<td><center>".$user_data['Alamat']."</center></td>";
        echo "<td><center>".$user_data['Tanggal']."</center></td>";
        echo "<td><center>".$user_data['No_Meja']."</center></td>";
        echo "<td><center><a href='edit.php?No_Struk=".$user_data['No_Struk']."</center>'>Edit</a>";
        echo "<td><center><a href='tambahdata.php?No_Struk=".$user_data['No_Struk']."</center>'>Tambah</a>";
        echo "<td><center><a href='delete.php?No_Struk=".$user_data['No_Struk']."</center>'>Hapus</a></td>";
     
    }
    ?>
    </table>
    
</body>
</html>