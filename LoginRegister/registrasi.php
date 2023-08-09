<?php
require 'function.php';

if(isset($_POST["register"])){
    
    if(registrasi($_POST) > 0 ){
        echo "<script>
                alert('user baru berhasil ditambahkan!');
                </script>";
                header("location: login.php");
    } else{
        echo mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <link rel="stylesheet" href="Style.css">
    <style>
    label {
        display: block;
    }
    </style>
</head>

<body>
    <!-- <h1>Halaman Registrasi</h1>
    <form action="" method="post">
                <label for="username">username :</label>
                <input type="text" name="username" id="username">

                <label for="NoTelp">NoTelp</label>
                <input type="number" name="NoTelp" id="NoTelp">

                <label for="password">password :</label>
                <input type="password" name="password" id="password">

                <label for="password2">konfirmasi password :</label>
                <input type="password" name="password2" id="password2">
            
                <button type="submit" name="register">Register!</button>
    </form> -->
    <section>
            <form class="login-box" action="" method="post">
        <div class="form-box">
            <div class="form-value">
                <form action="">
                    <h2 class="log">Register</h2>
                    <div class="inputbox">
                        <ion-icon name="person-outline"></ion-icon>
                        <input  type="text" name="username" id="username" required>
                        <label  for="username">Username</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="call-outline"></ion-icon>
                        <input  type="number" name="NoTelp" id="NoTelp" required>
                        <label  for="NoTelp">No Telp</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="password" id="password" required>
                        <label  for="password">Password</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="password2" id="password2" required>
                        <label  for="password2">Confirm Password</label>
                    </div>
                    <button type="submit" name="register">Sign up</button>
                    <div class="register">
                        <p>already have an account? <a href="login.php">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </form>
    </div>
</body>

</html>