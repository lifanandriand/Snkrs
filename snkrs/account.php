<!DOCTYPE html>
<html lang="=en">
<head>
    <meta charset="UTF-8">
    <title>Account Page - Snkrs.com</title>
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
            
            <img src="Images/menu.png" class="menu-icon">
        </div>
    </div>
 <!----------------Account Page------------------->   
    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="Images/thomas-serer-Jq3IXFoEeUU-unsplash-removebg-preview.png">
                </div>               
                <div class="col-2">
                    <div class="form-container">
                        <div class="form-button">
                            <span onclick="login()">Login</span>
                            <span onclick="register()">Register</span>
       
                        </div>
                        <form id="LoginForm" action="backend/login.php" method="post" class="LoginForm">
                            <input type="text" name="username" placeholder="Username">
                            <input type="password" name="password" placeholder="Password">
                            <button type="submit" class="button">Login</button><br>
                        </form>

                        <form id="RegForm" action="backend/register.php" method="post" class="RegForm">
                            <input type="hidden" name="type" value="0">
                            <input type="text" name="username" placeholder="Username">
                            <input type="email" name="email" placeholder="email">
                            <input type="password" name="password" placeholder="Password">
                            <button type="submit" class="button">Register</button>
                        </form>
                    </div>
                </div>
            </div>
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
<!-----------------js for toogle form---------------->
<script>
    var LoginForm = document.getElementById("LoginForm");
    var RegForm = document.getElementById("RegForm");
    var Indicator = document.getElementById("Indicator");
    function register() {
            var LoginForm = document.getElementById("LoginForm");
            var RegForm = document.getElementById("RegForm");
            var Indicator = document.getElementById("Indicator");
            if (RegForm.style.display === "none") {
                RegForm.style.display = "block";
            } 
            RegForm.style.transform = "translateX(0px)";
            LoginForm.style.transform = "translateX(0px)";
        }
    function login() {
            RegForm.style.transform = "translateX(300px)";
            LoginForm.style.transform = "translateX(300px)";
        }
</script>
</Body>
<html>