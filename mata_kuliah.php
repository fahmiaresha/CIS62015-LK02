<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fahmi - LK01</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <div class="topnav" id="myTopnav">
        <a href="profile.php">Profil</a>
        <a href="#" class="active">Mata Kuliah</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
        <div class="topnav-right">
            <a href="sign_up.php">Sign Up</a>
            <a href="login.php">Login</a>
        </div>
    </div>

    <div class="container">

        <div class="mySlides">
            <div class="numbertext">1 / 6</div>
            <img src="images/img_nature_wide.jpg" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">2 / 6</div>
            <img src="images/img_woods_wide.jpg" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">3 / 6</div>
            <img src="images/img_5terre_wide.jpg" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">4 / 6</div>
            <img src="images/img_mountains_wide.jpg" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">5 / 6</div>
            <img src="images/img_lights_wide.jpg" style="width:100%">
        </div>



        <div class="mySlides">
            <div class="numbertext">6 / 6</div>
            <img src="images/img_snow_wide.jpg" style="width:100%">
        </div>

        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>

        <div class="caption-container">
            <p id="caption"></p>
        </div>

        <div class="row">

            <div class="column">
                <img class="demo cursor" src="images/img_nature_wide.jpg" style="width:100%" onclick="currentSlide(5)"
                    alt="Nature and sunrise">
            </div>
            <div class="column">
                <img class="demo cursor" src="images/img_woods_wide.jpg" style="width:100%" onclick="currentSlide(1)"
                    alt="The Woods">
            </div>
            <div class="column">
                <img class="demo cursor" src="images/img_5terre_wide.jpg" style="width:100%" onclick="currentSlide(2)"
                    alt="Cinque Terre">
            </div>
            <div class="column">
                <img class="demo cursor" src="images/img_mountains_wide.jpg" style="width:100%"
                    onclick="currentSlide(3)" alt="Mountains and fjords">
            </div>
            <div class="column">
                <img class="demo cursor" src="images/img_lights_wide.jpg" style="width:100%" onclick="currentSlide(4)"
                    alt="Northern Lights">
            </div>

            <div class="column">
                <img class="demo cursor" src="images/img_snow_wide.jpg" style="width:100%" onclick="currentSlide(6)"
                    alt="Snowy Mountains">
            </div>
        </div>
    </div>
    <br>
    <center>
        <h2>Riwayat Studi</h2>
    </center>
    <center>
        <table>
            <thead style="background-color: #8c7eba;">
                <tr>
                    <th width="5%">No.</th>
                    <th>Semester</th>
                    <th>Kode Mata Kuliah</th>
                    <th>Mata Kuliah</th>
                    <th>SKS</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="text-align:center;">1.</td>
                    <td>Ganjil 2021</td>
                    <td>CIS61021</td>
                    <td>Pengantar Data Saintis</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td style="text-align:center;">2.</td>
                    <td>Ganjil 2021</td>
                    <td>CIS61011</td>
                    <td>Manajemen Investasi Teknologi Informasi</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td style="text-align:center;">3.</td>
                    <td>Ganjil 2021</td>
                    <td>CIS61012</td>
                    <td>Tata Kelola Teknologi Informasi</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td style="text-align:center;">4.</td>
                    <td>Ganjil 2021</td>
                    <td>COM60051</td>
                    <td>Metodologi Penelitian dan Penulisan Ilmiah</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td style="text-align:center;">5.</td>
                    <td>Ganjil 2021</td>
                    <td>CIS61022</td>
                    <td>Teknik Analisis Kuantitatif dan Kualitatif Sistem Informasi</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td style="text-align:center;">6.</td>
                    <td>Ganjil 2021</td>
                    <td>CIS61023</td>
                    <td>Implementasi dan Evaluasi Sistem Informasi</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td style="text-align:center;">7.</td>
                    <td>Ganjil 2021</td>
                    <td>CSD60005</td>
                    <td>Manajemen Proyek Sistem Informasi</td>
                    <td>3</td>
                </tr>
            </tbody>
        </table>
    </center>
    <br>
    <br>

    <div class="footer">
        <p>© 2022 M.Fahmi Aresha. All Rights Reserved</p>
    </div>

    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }

        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("demo");
            var captionText = document.getElementById("caption");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            captionText.innerHTML = dots[slideIndex - 1].alt;
        }
    </script>
</body>


</html>