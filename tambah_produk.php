<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="proses_tambah.php" method="POST" enctype="multipart/form-data">
    <div>
        <label for="nama">nama produk</label>
        <input type="text" name="nama" id="nama">
    </div>
    <div>
        <label for="harga">harga produk</label>
        <input type="number" name="harga" id="harga">    
    </div>
    <div>
        <label for="deskripsi">deskripsi</label>
        <textarea name="deskripsi" id="" cols="30" rows="10"></textarea>
    </div>
    <div>
        <label for="foto">foto</label>
        <input type="file" name="foto">
    </div>
    
    <input type="submit" value="simpan">
    </form>
</body>
</html>