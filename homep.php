<?php

session_start();
//koneksi ke database
$koneksi = new mysqli("localhost", "root", "", "ylnj-project");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Vinensi Motor</title>
    <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="big-banner">
        <div class="menu">
            <div class="box">
                <div class="logo">
                    <h1>Vinensi-<span class='red'>Motor</span></h1>
                </div>
                <div class="menulist">
                    <a href="">Home</a>
                    <a href="index.php">Produk</a>
                    <a href="">Contact</a>
                </div>
            </div>
        </div>

    </div>
    <!-- End Big banner -->
    <!-- Featur-->
    <div class="feature">
        <div class="box">
            <div class="col-3">
                <img src="Image/donation%20(1).png" alt="">
                <h3>Pembayaran</h3>
                <p>Kamu bisa membayar melalui Via transfer</p>
            </div>
            <div class="col-3">
                <img src="Image/123.png" alt="" width="70px">
                <h3>Kualitas</h3>
                <p>Bagus,Berkualitas,Harga merakyat</p>

            </div>
            <div class="col-3">
                <img src="Image/1234.png" alt="" width="70px">
                <h3>Fasilitas</h3>
                <p>Peralatan dan Fasilitas Premium</p>
            </div>
        </div>
    </div>
    <!-- End Feature -->

</body>

</html>