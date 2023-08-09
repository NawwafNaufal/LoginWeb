<?php
require 'function.php';

if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    // cek username
    if(mysqli_num_rows($result) === 1){
        //cek password
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row["password"])){
            header("location: index.php");
            exit;
        }
    }
    $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Halaman Login</title>
        <link rel="stylesheet" href="Style2.css">
</head>

<body>
    
    <?php if(isset($error)) : ?>
        <p style="color: red; font-style: italic;">username / password salah</p>
        <?php endif; ?>
        
        <!-- <h1>Login</h1>
        <div class="user-box">
            <label  for="username">Username</label>
            <input  type="text" name="username" id="username">
        </div>
        <div class="user-box">
            <label  for="password">Password</label>
            <input type="password" name="password" id="password">
            <button type="sumbit" name="login">Login</button>
        </div> -->
        <section>
            <form class="login-box" action="" method="post">
                <div class="form-box">
                    <div class="form-value">
                        <form action="">
                        <!-- <h4>Desa</h4>
                        <h1>Hallstatt</h1> -->
                    <h2 class="log">Login</h2>
                    <div class="inputbox">
                        <ion-icon name="person-outline"></ion-icon>
                        <input  type="text" name="username" id="username" required>
                        <label  for="username">Username</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="password" id="password" required>
                        <label  for="password">Password</label>
                    </div>
                    <div class="forget">
                        <label for=""><input type="checkbox">Remember <a href="#">Username</a></label>
                    </div>
                    <button type="sumbit" name="login">Login</button>
                    <div class="register">
                        <p>Don't have a account! <a href="registrasi.php">Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </form>
    </div>
        </body>

</html>