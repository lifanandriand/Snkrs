<?php
require_once "../functions.php";
if (isset($_POST["submit"])) {
    if (tambah($_POST) > 0) {
        echo "
        <script>
        alert('Data berhasil ditambahkan!');
        document.location.href= 'admin.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Data gagal ditambahkan!');
        document.location.href= 'admin.php';
        </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data sepatu</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>

<body>
    <div class="main">
        <div class="judul">
            <h1>Tambah data sepatu</h1>
        </div>
        <div class="isi">
            <div class="input">
                <form action="" method="POST" enctype="multipart/form-data">
                    <ul>
                        <li>
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" id="nama" required>
                        </li>
                        <li>
                            <label for="harga">Harga</label>
                            <input type="text" name="harga" id="harga" required>
                        </li>
                        <li>
                            <label for="gambar">Gambar</label>
                            <input type="file" name="gambar" id="gambar" required>
                        </li>
                        <li>
                            <label for="detail">Detail</label>
                            <input type="text" name="detail" id="detail" required>
                        </li>
                        <li class="tombol">
                            <button type="submit" name="submit">Tambah Data!</button>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
</body>

</html>