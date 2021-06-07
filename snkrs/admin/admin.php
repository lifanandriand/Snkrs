<?php
session_start();
require '../functions.php';
if (!isset($_SESSION["type"])) {
    header("location: account.php");
    var_dump($_SESSION["type"]);
    exit;
}

$sepatu = query("SELECT * FROM produk");
if (isset($_POST["cari"])) {
    $sepatu = cari($_POST["keyword"]);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="../css/admin.css">

</head> 

<div class="container">
            <div class="navbar">
                <div class="logo">
                    <img src="../Images/logo_web-removebg-preview.png" width="200px">
                </div>
                <nav>
                    <ul>
                        <li><a href="../backend/logout.php">Logout</a></li>
                    </ul>
                </nav>
            </div>
        
                            
<body>
    <div class="main">
        <div class="atas">
            <h1>Daftar Sepatu</h1>


        </div>
        <br>
        <div class="tabel">
            <div class="tabel1">
                <a href="tambah.php">Tambah data sepatu</a>
                <form action="" method="POST">
                    <input type="text" name="keyword" size="40" autofocus placeholder="masukan keyword pencarian.." autocomplete="off">
                    <button type="submit" name="cari">Cari</button>
                </form>
            </div>
            <div class="tabel2">
                <table cellpadding="10" cellspacing="5">
                    <tr>
                        <th>No.</th>
                        <th>aksi</th>
                        <th>Gambar</th>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Detail</th>

                    </tr>
                    <?php $i = 1; ?>
                    <?php foreach ($sepatu as $row) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td>
                                <a href="ubah.php?id=<?= $row["id_sepatu"]; ?>">ubah</a> |
                                <a href="hapus.php?id=<?= $row["id_sepatu"]; ?>" onclick="return confirm('yakin?')">hapus</a>
                            </td>
                            <td>
                            
                                <img src="../Images/<?= $row["gambar"]; ?>" width="50" alt="">
                            </td>
                            <td><?= $row["nama"]; ?></td>
                            <td><?= $row["harga"]; ?></td>
                            <td><?= $row["detail"]; ?></td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</body>

</html>