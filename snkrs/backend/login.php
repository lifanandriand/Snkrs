<?php
require "../functions.php";

if(isset($_SESSION['login'])){header('location:index.php')};
     

session_start();
$username = $_POST["username"];
$password = $_POST["password"];
$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
if (mysqli_num_rows($result) ===1) {
    $row = mysqli_fetch_assoc($result);
    if(password_verify($password, $row["password"])){
        $_SESSION["login"] = true;
        $_SESSION["username"] = $row["username"];
        $_SESSION["id"] = $row["id_user"];
        $_SESSION["type"] = $row["type"];
    }
    if($_SESSION["type"] == 1){
        echo "<meta http-equiv = 'refresh' content = '1; url = ../admin/admin.php'>";
    }
    else{
        echo "<meta http-equiv = 'refresh' content = '1; url = ../index.php'>";
    }
   
}else {
    echo "<meta http-equiv = 'refresh' content = '1; url = ../account.php'>";
}
 ?>