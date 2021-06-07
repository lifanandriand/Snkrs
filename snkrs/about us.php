<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - SNKRS.com </title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
</head>
<body>
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <img src="Images/logo_web-removebg-preview.png" width="200px">
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="products.php">Products</a></li>
                    <li><a href="about us.php">About</a></li>
                    <li><a href="contacs.php">Contact</a></li>
                    <?= (!empty($_SESSION['id']) ? '<li>'.$_SESSION['username'].'</li>' : '<li><a href="account.php">Account</a></li>') ?>
                    <?= (!empty($_SESSION['id']) ?' <li><a href="backend/logout.php">Logout</a></li>': '') ?>
                </ul>
            </nav>
            <img src="Images/menu.png" class="menu-icon">
        </div>
    </div>
<!-------------about us--------------------->
<div class="about">
    <div class="preview">
        <img src="Images/logo web crop.png" alt="">
    </div>
    <div class="tulisan">
        <h1>SNKRS</h1>
        <p>SNKRS adalah sebuah platform website yang bekerja sama dengan UMKM sepatu brand lokal yang didirikan oleh 4 orang pada tahun 2021 dan berasal dari Surabaya. Serta mempunyai tujuan untuk memperkenalkan sepatu brand lokal kepada seluruh masyarakat Indonesia serta membantu UMKM agar lebih mudah menjual produknya. <br><br><br>VISI<br>
            Memperkuat UMKM brand sepatu lokal di Indonesia dan meningkatkan nilai penjualan produk dari UMKM brand sepatu lokal. <br> <br> <br> 
            
            MISI <br>
            Sukses sebagai organisasi dunia yang paling dinamis, fleksible, dan mengerti kondisi pasar alas kaki sebagai bisnis utamanya.
            </p>
    </div>
</div>    
<!----------------Footer------------------->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3>Download Our App</h3>
                <p>Download App for android and ios mobile phone</p>
                    <div class="app-logo">
                        <img src="Images/app-store-png-logo-33115.png">
                    </div>
            </div>
            <div class="footer-col-2">
                <img src="Images/logo web crop.png" width="200px">
                <p>Our goal is to make local shoe brands continue to advance and develop so that they can be of interest to many people.</p>
            </div>
            <div class="footer-col-3">
                <h3>Useful Links</h3>
                <ul>
                    <li>Coupons</li>
                    <li>Blog spot</li>
                    <li>Return Policy</li>
                    <li>Join Affiliate</li>
                </ul>
            </div>
            <div class="footer-col-4">
                <h3>Follow Us</h3>
                <ul>
                            <li><a href="https://www.facebook.com/lifan.gaul/">Facebook</a></li>
                            <li><a href="https://twitter.com/AndriandLifan">Twitter</a></li>
                            <li><a href="https://www.instagram.com/lfnadrnd/">Instagram</a></li>
                            <li><a href="https://www.youtube.com/channel/UCHZcIQXoryfHqG4Kup9-aGw">Youtube</a></li>
                </ul>
            </div>
        </div>
        <hr>
        <p class="copyright">Copyright 2021 - Lifan Dwinur A</p>
    </div>
</div>
    
</body>
</html>