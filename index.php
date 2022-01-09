<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/styles.css">
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

    <h1 class="main-title"><span>Toko</span>Ku</h1>
    <p class="main-desc">Selamat datang di Website TokoKu.</p>

    <!-- MAIN -->
    <div class="box">
        <div class="per-box">
            <h2>About</h2>
            <p>Berisikan tentang biodata pembuat website.</p>
        </div>
        <div class="per-box">
            <h2>Product</h2>
            <p>Berisikan produk-produk yang tersedia di website ini.</p>
        </div>
        <div class="per-box">
            <h2>Buku Tamu</h2>
            <p>Silahkan mengisi feedback tentang kita.</p>
        </div>
    </div>

    <br>
    <h1 class="main-title">Best Seller Product this Weeks</h1>

    <!-- MAIN -->
    <div class="box">
        <a href="product-detail.php?title=Razer Seiren Emote - Gaming Microphone&price=2.622.000&detail=The %231 Best-Selling Gaming Peripherals Manufacturer in the US: Source - The NPD Group, Inc., U.S.
                        Retail Tracking Service, Gaming Designed: Keyboards, Mice, PC Headsets, and PC Microphones,
                        Based on dollar sales, Jan. 2017- June 2020 combined. The World's 1st Interactive Microphone:
                        Able to express 100+ emoticons on the microphone through an 8-bit LED Display, with the option
                        to create custom designs via a software editor.                        dan kejelasan pada konten video HDR dan resolusi 4K UHD memberikan ketajaman pixel yang luar
                        biasa sehingga EW3270U sangat cocok untuk para penggemar PS4 Pro, X Box X one, dan console
                        gaming. Dilengkapi juga dengan Solusi lengkap Eye Care: Flicker Free (menghilangkan
                        flicker/kerlipan) dan Low blue light (Mengurangi radiasi sinar biru yang berbahaya pada mata),
                        dan Brightness Intelligence Plus Tech (dapat mendeteksi level cahaya ambient dan juga
                        temperature warna di lingkungan sekitar anda, secara otomatis mengatur penerangan dan warna
                        temperature pada layar anda) sehingga BenQ berkomitmen menjaga kesehatan mata tiap pengguna.
                        Dengan port koneksi lengkap: DP,HDMI,USB Type C dapat dikoneksikan dengan berbagai perangkat
                        PC/Laptop/PS4. Dilengkapi Speaker built in untuk kenikmatan multimedia.&img=razer-mic.jpeg&alt=Razer Mic" class="a-per-box">
            <div class="per-box-top">
                <img src="./img/razer-mic.jpeg" alt="Razer Mic">
                <div class="details">
                    <h2>Razer Seiren Emote - Gaming Microphone</h2>
                    <p>The #1 Best-Selling Gaming Peripherals Manufacturer in the US: Source - The NPD Group, Inc., U.S.
                        Retail Tracking Service, Gaming Designed: Keyboards, Mice, PC Headsets, and PC Microphones,
                        Based on dollar sales, Jan. 2017- June 2020 combined. The World's 1st Interactive Microphone:
                        Able to express 100+ emoticons on the microphone through an 8-bit LED Display, with the option
                        to create custom designs via a software editor.</p>
                </div>
            </div>
        </a>
        <a href="product-detail.php?title=Audio-Technica ATH-M40x Professional Studio Monitor Headphone ATHM40X&price=1.290.000&detail=The M-Series ATH-M40x professional monitor headphones are tuned flat for incredibly accurate
                        audio
                        monitoring across an extended frequency range. Your studio experience is enhanced with superior
                        sound isolation and swiveling earcups for convenient one-ear monitoring. Engineered with
                        pro-grade
                        materials and robust construction, the M40x excels in professional studio tracking and mixing,
                        as
                        well as DJ monitoring.&img=audio-technica.jpg&alt=Audio Technic" class="a-per-box">
            <div class="per-box-top">
                <img src="./img/audio-technica.jpg" alt="Audio Technica">
                <div class="details">
                    <h2>Audio-Technica ATH-M40x Professional Studio Monitor Headphone ATHM40X</h2>
                    <p>The M-Series ATH-M40x professional monitor headphones are tuned flat for incredibly accurate
                        audio
                        monitoring across an extended frequency range. Your studio experience is enhanced with superior
                        sound isolation and swiveling earcups for convenient one-ear monitoring. Engineered with
                        pro-grade
                        materials and robust construction, the M40x excels in professional studio tracking and mixing,
                        as
                        well as DJ monitoring.
                    </p>
                </div>
            </div>
        </a>
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