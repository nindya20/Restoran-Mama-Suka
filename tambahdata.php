<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
</head>
<center><body>
<h1>Form Pemesanan</h1>
    <form action="create.php" method="POST">
    <label for="No_Struk">No Struk</label>
    <input type="text" name="No Struk" placeholder="No Struk" required>
    <p>
    <label for="Nama">Nama</label>
    <input type="text" name="Nama" placeholder="Nama" required>
    <p>
    <label for="Alamat">Alamat</label>
    <input type="text" name="Alamat" placeholder="Alamat" required>
    <p>
    <label for="Tanggal">Tanggal Pesan</label>
    <input type="text" name="Tanggal" placeholder="Tanggal" required>
    <p>
    <label for="No_Meja">No_Meja</label>
    <input type="text" name="No_Meja" placeholder="No_Meja" required>
    <p>
    <input type="hidden" name="No_Struk">
    <input type="submit" name="LOGIN" value="LOGIN" required>
    </form>
    
</body></center>
</html>