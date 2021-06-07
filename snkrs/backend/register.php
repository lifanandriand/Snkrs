<?php
    require "../functions.php";
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $type = $_POST["type"];
    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<meta http-equiv = 'refresh' content = '1; url = ../account.php'>";
        echo "<script>alert('Username Sudah Dipakai')</script>";
    }
    $password = password_hash($password, PASSWORD_DEFAULT);
    $result = mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$email', '$password' , '$type')");
    if (mysqli_affected_rows($conn) > 0) {
        echo "<script>alert('register berhasil')</script>";
        echo "<meta http-equiv = 'refresh' content = '1; url = ../account.php'>";
      
    }
?>