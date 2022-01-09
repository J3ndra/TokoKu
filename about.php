<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<body>
    <!-- TOP NAVBAR -->
    <div class="top-navbar">
        <ul class="nav-ul">
            <div class="nav-title">
                <li><a href="./index.php"><span>Toko</span>Ku</a></li>
            </div>
            <li class="li-right"><a href="./buku-tamu.php">Buku Tamu</a></li>
            <li class="li-right"><a href="./product.php">Product</a></li>
            <li class="li-right"><a href="./about.php">About</a></li>
            <li class="li-right"><a href="./index.php">Home</a></li>
        </ul>
    </div>

    <h1 class="main-title"><span>About</span> Me</h1>

    <!-- MAIN -->
    <div class="box">
        <div class="per-box-about">
            <img src="./img/foto-diri.jpg" alt="Foto Diri" class="img-about">
            <h2>Junianto Endra Kartika</h2>
            <p>Halo semuanya, saya adalah mahasiswa semester 1 di Universitas Dian Nuswantoro Fakultas Ilmu Komputer,
                Teknik Informatika. Teknologi yang biasa saya gunakan adalah Kotlin dan Python.</p>
            <br>
            <div class="social-media">
                <a href="https://twitter.com/Koh_Endru" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://github.com/J3ndra" target="_blank"><i class="fab fa-github"></i></a>
                <a href="https://www.j3ndra.my.id/" target="_blank"><i class="fas fa-blog"></i></a>
            </div>
        </div>
    </div>
    <div class="footer">
        <p id="footer-text">©TokoKu | Made by Junianto | </p>
    </div>

    <script>
        window.setTimeout("waktu()", 1000)

        function waktu() {
            var waktu = new Date()
            setTimeout("waktu()", 1000)
            document.getElementById("footer-text").innerHTML = "©TokoKu | Made by Junianto | " +
                waktu.getHours() + ":" + waktu.getMinutes() + ":" + waktu.getSeconds()
        }
    </script>
</body>

</html>