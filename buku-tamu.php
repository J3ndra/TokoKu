<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
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

    <h1 class="main-title">Buku Tamu</h1>

    <!-- MAIN -->
    <div class="box">
        <div class="per-box-buku">
            <form action="" method="post">
                <div>
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama-lengkap" class="text-input">
                </div>
                <div>
                    <label>Nama Panggilan</label>
                    <input type="text" name="nama-panggilan" class="text-input">
                </div>
                <div>
                    <label>Domisili</label>
                    <input type="text" name="domisili" class="text-input">
                </div>
                <div>
                    <label>Umur</label>
                    <input type="number" name="umur" class="text-input">
                </div>
                <div>
                    <label>Alasan Datang</label>
                    <textarea type="text" name="alasan-datang" class="text-input" style="resize: vertical;"></textarea>
                </div>
                <div>
                    <button type="submit" name="buku-tamu-btn" class="btn btn-tambah">Tambahkan ke Buku Tamu</button>
                </div>
            </form>

            <?php
            if (isset($_POST['buku-tamu-btn'])) {
                if ($_POST['nama-lengkap'] != "") {
                    echo "<p style='margin-top: 25px; color: #037A6F;'>Data berhasil diinputkan.</p>";
                } else {
                    echo "<p style='margin-top: 25px; color: red;'>Harap isi nama lengkap anda.</p>";
                }
            }
            ?>

            <table <?php
                    if (isset($_POST['buku-tamu-btn'])) {
                        if ($_POST['nama-lengkap'] != "") {
                            echo "";
                        } else {
                            echo "style='display: none;'";
                        }
                    }
                    ?>>
                <tbody>
                    <tr>
                        <td>Nama Lengkap</td>
                        <td id="nama-lengkap">
                            <?php 
                                if (isset($_POST['buku-tamu-btn'])) {
                                    if ($_POST['nama-lengkap'] != "") {
                                        $namaLengkap = $_POST['nama-lengkap'];
                                        echo ": $namaLengkap";
                                    }
                                }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Nama Panggilan</td>
                        <td id="nama-panggilan">
                        <?php 
                                if (isset($_POST['buku-tamu-btn'])) {
                                    if ($_POST['nama-lengkap'] != "") {
                                        $namaPanggilan = $_POST['nama-panggilan'];
                                        echo ": $namaPanggilan";
                                    }
                                }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Domisili</td>
                        <td id="domisili">
                        <?php 
                                if (isset($_POST['buku-tamu-btn'])) {
                                    if ($_POST['nama-lengkap'] != "") {
                                        $domisili = $_POST['domisili'];
                                        echo ": $domisili";
                                    }
                                }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Umur</td>
                        <td id="umur">
                        <?php 
                                if (isset($_POST['buku-tamu-btn'])) {
                                    if ($_POST['nama-lengkap'] != "") {
                                        $umur = $_POST['umur'];
                                        echo ": $umur";
                                    }
                                }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Alasan Datang</td>
                        <td id="alasan-datang">
                        <?php 
                                if (isset($_POST['buku-tamu-btn'])) {
                                    if ($_POST['nama-lengkap'] != "") {
                                        $alasanDatang = $_POST['alasan-datang'];
                                        echo ": $alasanDatang";
                                    }
                                }
                            ?>
                        </td>
                    </tr>
                </tbody>
            </table>
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