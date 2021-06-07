<?php
require_once "../functions.php";
$id = $_GET["id"];
$sepatu = query("SELECT * FROM produk WHERE id_sepatu = '$id'")[0];
if (isset($_POST["submit"])) {
    if (ubah($_POST) > 0) {
        echo "
        <script>
        alert('Data berhasil diubah!');
        document.location.href= 'admin.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Data gagal diubah!');
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
    <title>Ubah data sepatu</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>

<body>
    <div class="main">
        <div class="judul">
            <h1>Ubah data sepatu</h1>
        </div>
        <div class="isi">
            <div class="input">
                <form action="" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $sepatu["id_sepatu"]; ?>">
                    <input type="hidden" name="gambarLama" value="<?= $sepatu["gambar"]; ?>">
                    <ul>
                        <li>
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" id="nama" required value="<?= $sepatu["nama"]; ?>">
                        </li>
                        <li>
                            <label for="harga">Harga</label>
                            <input type="text" name="harga" id="harga" required value="<?= $sepatu["harga"]; ?>">
                        </li>
                        <li>
                            <label for="gambar">Gambar</label><br>
                            <img src="../Images/<?= $sepatu["gambar"]; ?>" width="50"> <br>
                            <input type="file" name="gambar" id="gambar">
                        </li>
                        <li>
                            <label for="detail">Detail</label>
                            <input type="text" name="detail" id="detail" required value="<?= $sepatu["detail"]; ?>">
                        </li>
                        <li>
                            <button type="submit" name="submit">Ubah Data!</button>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
</body>

</html>