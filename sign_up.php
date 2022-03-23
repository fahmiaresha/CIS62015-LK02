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
            <a href="sign_up.php" class="active">Sign Up</a>
            <a href="login.php">Login</a>
        </div>
    </div>

    <form action="script/sign_up.php" method="POST">
        <div class="container modal-content animate">
            <h1>Sign Up</h1>
            <p>Please fill in this form to create an account.</p>
            <div class="imgcontainer">
                <img src="images/img_avatar2.png" alt="Avatar" class="avatar">
            </div>
            <hr>

            <label for="Nama Lengkap"><b>Nama Lengkap</b></label>
            <input type="text" placeholder="Masukkan Nama Lengkap" name="nama_lengkap" id="Nama Lengkap" required>

            <label for="Nim"><b>NIM</b></label>
            <input type="text" placeholder="Masukkan NIM" name="nim" id="nim" required>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Masukkan Email" name="email" id="email" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Masukkan Password" name="password" id="password" required>

            <!-- <label for="psw-repeat"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required> -->
            <label for="psw"><b>Prodi</b></label>
            <input type="text" placeholder="Masukkan Prodi" name="prodi" id="prodi" required>

            <label for="psw"><b>Jurusan</b></label>
            <input type="text" placeholder="Masukkan Jurusan" name="jurusan" id="jurusan" required>

            <hr>
            <p>By creating an account you agree to our <a href="#">
                    <font size="4">Terms & Privacy</font>
                </a>.</p>
            <button type="submit" class="registerbtn">Sign Up</button>
            <div class="container signin">
                <p>Already have an account? <a href="login.php">
                        <font size="4">Sign in</font>
                    </a>.</p>
            </div>
        </div>


    </form>

    <div class="footer">
        <p>© 2022 M.Fahmi Aresha. All Rights Reserved</p>
    </div>
</body>


</html>