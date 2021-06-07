<?php
require_once "functions.php";
session_start();
$id=$_GET["id"];
$result = mysqli_query($conn, "SELECT * FROM produk WHERE id_sepatu='$id'");
if(!isset($_SESSION['login'])){header('location:account.php')};
$row = mysqli_fetch_assoc($result);
$results = mysqli_query($conn, "SELECT * FROM produk ");

?>
<!DOCTYPE html>
<html lang="=en">
<head>
    <meta charset="UTF-8">
    <title>Products Details - Snkrs.com</title>
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
<!-------------single product details--------------------->
    <div class="small-container">
        <div class="row">
            <div class="col-2">
                <img src="Images/<?= $row["gambar"]; ?>" >
            </div>
            <div class="col-2">
                <h1><?= $row["nama"]; ?></h1>
                <h4>Rp. <?= $row["harga"]; ?></h4>
                <form action="checkout.php" method="post">
                <input type="hidden" value="<?= $row["id_sepatu"]; ?>" name="idsepatu">
                <input type="hidden" value="30000" name="shipping">
                <select name="ukuran">
                    <option>Select Size</option>
                    <option value="40">40</option>
                    <option value="41">41</option>
                    <option value="42">42</option>
                    <option value="43">43</option>
                    <option value="44">44</option>
                </select>
                <input type="number" value="1" name="quantity">
                <input type="input" value="" name="addres" placeholder = "Address">
                <button type="submit" name="beli">Buy</button>
                </form>
                <h3>Product Details</h3>
                <p><?= $row["detail"]; ?></p>
            </div>
        </div>
    </div>



    <div class="small-container">
        <div class="row row-2">
        </div>
        <div class="row">
        <?php while ($rows = mysqli_fetch_assoc($results)) : ?>
        <a href="product detail.php?id=<?= $rows["id_sepatu"]; ?>">
            <div class="col-4">
                <img src="Images/<?= $rows["gambar"]; ?>">
                <h4>
                    <?= $rows["nama"]; ?>
                </h4>
                <p>
                    Rp. <?= $rows["harga"]; ?>
                </p>
            </div>
        </a>
    <?php endwhile; ?>
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
</Body>
<html>