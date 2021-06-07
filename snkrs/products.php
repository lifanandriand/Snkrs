<?php
require_once "functions.php";
session_start();
$result = mysqli_query($conn, "SELECT * FROM produk");
?>
<!DOCTYPE html>
<html lang="=en">
<head>
    <meta charset="UTF-8">
    <title>All Products - Snkrs.com</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
</head>
<Body>

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




    <div class="small-container">
        <div class="row row-2">
            <h2>All Product</h2>
            <select>
                <option>Default Shorting</option>
                <option>Default Price</option>
                <option>Default Popularity</option>
            </select>
        </div>
        <div class="row">
            <!-- <a href="product detail.html">
            <div class="col-4">
                 <img src="images/VTG V2 Natural White WS.png">
                 <h4>VTG V2 Natural White</h4>
                 <p>Rp. 399.000</p>
            </div>
            </a>     -->
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
        <a href="product detail.php?id=<?= $row["id_sepatu"]; ?>">
            <div class="col-4">
                <img src="Images/<?= $row["gambar"]; ?>">
                <h4>
                    <?= $row["nama"]; ?>
                </h4>
                <p>
                    Rp. <?= $row["harga"]; ?>
                </p>
            </div>
        </a>
    <?php endwhile; ?>
            <!-- <div class="col-4">
                 <img src="images/BASE V2 BLACK GS.png">
                 <h4>Base V2 Black </h4>
                 <p>Rp. 299.000</p>
            </div>
            <div class="col-4">
                <img src="images/SAGA COMBAT OXBLOOD IS.png">
                <h4>Saga Combat Oxblood</h4>
                <p>Rp. 599.000</p>
            </div>
            <div class="col-4">
                <img src="images/VUNTURA ECO FULL BLACK.png">
                <h4>Vuntura Eco Black</h4>
                <p>Rp. 599.000</p>
            </div> -->
        </div>
        <div class="row">
            <!-- <div class="col-4">
                 <img src="images/SAGA Urban Boots Olive.webp">
                 <h4>SAGA Urban Boots Olive</h4>
                 <p>Rp. 599.000</p>
            </div>
            <div class="col-4">
                 <img src="Images/BASE SEPATOKIMIN ECOPRINT YELLOW-1.png">
                 <h4>Base Sepatokimin Yellow </h4>
                 <p>Rp. 299.000</p>
            </div>
            <div class="col-4">
                <img src="images/VANTAGE HI V2 CORDUROY.png">
                <h4>Saga Vantage HI V2 Corduroy</h4>
                <p>Rp. 399.000</p>
            </div>
            <div class="col-4">
                <img src="images/VTG Derby Navy.webp">
                <h4>VTG Derby Navy</h4>
                <p>Rp. 299.000</p>
            </div> -->
        </div>
    </div>


<!----------------Footer------------------->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3>Download Our App</h3>
                <p>Download App for andorid and ios mobile phone</p>
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
</Body>
<html>