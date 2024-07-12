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
    <title>Coffee Website - about us page</title>
</head>

<body>
    <?php include '../Coffeewebsite/components/header.php'; ?>
    <div class="main">
        <div class="banner">
            <h1>about us</h1>
        </div>
        <div class="title2">
            <a href="home.php">home</a><span>about</span>
        </div>
        <div class="about-category">
            <div class="box">
                <img src="../Coffeewebsite/img/3.webp" alt="">
                <div class="detail">
                    <span>coffee</span>
                    <h1>lemon green</h1>
                    <a href="view_products.php" class="btn">shop now</a>
                </div>
            </div>
            <div class="box">
                <img src="../Coffeewebsite/img/about.png" alt="">
                <div class="detail">
                    <span>coffee</span>
                    <h1>lemon tea</h1>
                    <a href="view_products.php" class="btn">shop now</a>
                </div>
            </div>
            <div class="box">
                <img src="../Coffeewebsite/img/2.webp" alt="">
                <div class="detail">
                    <span>coffee</span>
                    <h1>lemon tea</h1>
                    <a href="view_products.php" class="btn">shop now</a>
                </div>
            </div>
            <div class="box">
                <img src="../Coffeewebsite/img/1.webp" alt="">
                <div class="detail">
                    <span>coffee</span>
                    <h1>lemon green</h1>
                    <a href="view_products.php" class="btn">shop now</a>
                </div>
            </div>
        </div>
        <section class="services">
            <div class="title">
                <img src="../Coffeewebsite/img/download.png" class="logo" alt="">
                <h1>why choose us</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum cumque veritatis iusto iste! Doloribus voluptate ducimus obcaecati alias voluptas ut suscipit quisquam? Deserunt, illum dolorem fugit ut ipsa expedita maiores?</p>
            </div>
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
            <div class="about">
                <div class="row">
                    <div class="img-box">
                        <img src="../Coffeewebsite/img/3.png" alt="">
                    </div>
                    <div class="detail">
                        <h1>visit our beautiful showroom!</h1>
                        <p> Welcome to our cozy café nestled in the heart of [City/Town]. Whether you're seeking a tranquil spot to unwind or a vibrant atmosphere to catch up with friends, our café offers the perfect blend of comfort and charm.</p>
                        <a href="../Coffeewebsite/view_products.php" class="btn">shop now</a>
                    </div>
                </div>
            </div>
            <div class="testimonial-container">
                <div class="title">
                    <img src="../Coffeewebsite/img/download.png" alt="">
                    <h1>what people say about us</h1>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci perferendis ad quod incidunt iure facere, ut commodi? Nemo omnis sint illum delectus earum quasi rem, repellat vero porro rerum alias eius corporis provident saepe molestias, mollitia veritatis ipsum cumque explicabo?</p>
                </div>
                    <div class="container">
                        <div class="testimonial-item active">
                            <img src="../Coffeewebsite/img/01.jpg" alt="">
                            <h1>Sara Smith</h1>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci perferendis ad quod incidunt iure facere, ut commodi? Nemo omnis sint illum delectus earum quasi rem, repellat vero porro rerum alias eius corporis provident saepe molestias, mollitia veritatis ipsum cumque explicabo?</p>
                        </div>
                        <div class="testimonial-item ">
                            <img src="../Coffeewebsite/img/02.jpg" alt="">
                            <h1>Alaya</h1>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci perferendis ad quod incidunt iure facere, ut commodi? Nemo omnis sint illum delectus earum quasi rem, repellat vero porro rerum alias eius corporis provident saepe molestias, mollitia veritatis ipsum cumque explicabo?</p>
                        </div>
                        <div class="testimonial-item ">
                            <img src="../Coffeewebsite/img/03.jpg" alt="">
                            <h1>Anushka</h1>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci perferendis ad quod incidunt iure facere, ut commodi? Nemo omnis sint illum delectus earum quasi rem, repellat vero porro rerum alias eius corporis provident saepe molestias, mollitia veritatis ipsum cumque explicabo?</p>
                        </div>
                        <div class="left-arrow" onclick="nextSlide()"><i class="bx bxs-left-arrow-alt"></i></div>
                        <div class="right-arrow" onclick="prevSlide()"><i class="bx bxs-right-arrow-alt"></i></div>
                    </div>
            </div>
        <?php include '../Coffeewebsite/components/footer.php'; ?>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="script.js"></script>
    <?php include '../Coffeewebsite/components/alert.php'; ?>
</body>

</html>