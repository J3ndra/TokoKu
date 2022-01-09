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

    <div class="box-product-detail">
        <div class="a-per-box-one">
            <div class="per-box-top">
                <img src="./img/<?php echo $_GET['img']?>" alt="<?php echo $_GET['alt']?>" class="img-detail">
            </div>
        </div>
        <div class="a-per-box-second">
            <div class="per-box-top">
                <div class="details">
                    <h2><?php echo $_GET['title']?></h2>
                    <p class="price">Rp <?php echo $_GET['price']?>,-</p>
                    <p><?php echo $_GET['detail']?></p>
                </div>
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