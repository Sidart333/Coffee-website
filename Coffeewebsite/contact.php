<?php
include '../Coffeewebsite/components/connection.php';
session_start();
if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
}else{
    $user_id ='';
}
if(isset($_POST['logout'])){
    session_destroy();
    header("location: login.php");
}
?>
<style type="text/css">
    <?php include 'style.css'; ?>
</style>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <title>Coffee Website - home page</title>
</head>

<body>
    <?php include '../Coffeewebsite/components/header.php'; ?>
    <div class="main">
    <div class="banner">
            <h1>Contact us</h1>
        </div>
        <div class="title2">
            <a href="home.php">home</a><span>Contact us</span>
        </div>
        <section class="services">
                <div class="box-container">
                    <div class="box">
                        <img src="../Coffeewebsite/img/icon2.png" alt="">
                        <div class="detail">
                            <h3>great savings</h3>
                            <p>save big every order</p>
                        </div>
                    </div>
                    <div class="box">
                        <img src="../Coffeewebsite/img/icon1.png" alt="">
                        <div class="detail">
                            <h3>24*7 support</h3>
                            <p>one-on-one support</p>
                        </div>
                    </div>
                    <div class="box">
                        <img src="../Coffeewebsite/img/icon0.png" alt="">
                        <div class="detail">
                            <h3>gift vouchers</h3>
                            <p>vouchers on every festivals</p>
                        </div>
                    </div>
                    <div class="box">
                        <img src="../Coffeewebsite/img/icon2.png" alt="">
                        <div class="detail">
                            <h3>worldwide delivery</h3>
                            <p>dropship worldwide</p>
                        </div>
                    </div>
                </div>
            </section>
            <div class="form-container">
                <form method="post">
                    <div class="title">
                        <img src="../Coffeewebsite/img/download.png" class="logo" alt="">
                        <h1>leave a message</h1>
                    </div>
                    <div class="input-field">
                        <p>your name <sup>*</sup></p>
                        <input type="text" name="name" id="">
                    </div>
                    <div class="input-field">
                        <p>your email <sup>*</sup></p>
                        <input type="email" name="email" id="">
                    </div>
                    <div class="input-field">
                        <p>your number <sup>*</sup></p>
                        <input type="text" name="number" id="">
                    </div>
                    <div class="input-field">
                        <p>your message<sup>*</sup></p>
                        <textarea name="message" ></textarea>
                    </div>
                    <button type="submit" class="btn" name="submit-btn">send message</button>
                </form>
            </div>
            <div  class="address">
                    <div class="title">
                        <img src="../Coffeewebsite/img/download.png" class="logo" alt="">
                        <h1>contact detail</h1>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius, porro.</p>
                    </div>
                    <div class="box-container">
                        <div class="box">
                            <i class="bx bxs-map-pin"></i>
                            <div>
                                <h4>address</h4>
                                <p>1092 Merigold Lane, Coral </p>
                            </div>
                        </div>
                        <div class="box">
                            <i class="bx bxs-map-pin"></i>
                            <div>
                                <h4>phone number</h4>
                                <p>878686858 </p>
                            </div>
                        </div>
                        <div class="box">
                            <i class="bx bxs-map-pin"></i>
                            <div>
                                <h4>email</h4>
                                <p>muskanmathur@gmail.com </p>
                            </div>
                        </div>
                    </div>
                </div>
        <?php include '../Coffeewebsite/components/footer.php'; ?>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="script.js"></script>
    <?php include '../Coffeewebsite/components/alert.php'; ?>
</body>

</html>