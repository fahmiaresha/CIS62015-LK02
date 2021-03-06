<?php require_once("script/cek_session.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fahmi - LK02</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/signup.css">
</head>

<body>

    <div class="topnav" id="myTopnav">
        <a href="profile.php">Profil</a>
        <a href="mata_kuliah.php">Mata Kuliah</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
        <div class="topnav-right">
            <a href="sign_up.php">Sign Up</a>
            <a href="login.php" class="active">Login</a>
        </div>
    </div>

    <form action="script/login.php" method="POST">
        <div class="container modal-content animate">
            <h1>Login</h1>
            <p>Please fill out this form to login account.</p>
            <div class="imgcontainer">
                <img src="images/img_avatar.png" alt="Avatar" class="avatar">
            </div>
            <hr>

            <label for="email"><b>NIM</b></label>
            <input type="text" placeholder="Masukkan NIM" name="nim" id="NIM" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Masukkan Password" name="password" id="psw" required>
            <label >
                <input type="checkbox" checked="checked" name="remember" > Remember me
            </label>
            <hr>
            <button type="submit" class="registerbtn">Login</button>
            <div class="container signin">
                <p>Don't have an account? <a href="sign_up.php">
                        <font size="4">Sign Up</font>
                    </a>.</p>
            </div>
        </div>


    </form>

    <div class="footer">
        <p>?? 2022 M.Fahmi Aresha. All Rights Reserved</p>
    </div>
</body>


</html>