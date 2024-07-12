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
        <?php include '../Coffeewebsite/components/footer.php'; ?>
        <section class="home-section">
        <div class="slider">
            <div class="slider_slider slide1">
                <div class="overlay"></div>
                <div class="slide-detail">
                    <h1>Welcome to my shop</h1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum cumque veritatis iusto iste! Doloribus voluptate ducimus obcaecati alias voluptas ut suscipit quisquam? Deserunt, illum dolorem fugit ut ipsa expedita maiores?</p>
                    <a href="view_products.php" class="btn">shop now</a>
                </div>
                <div class="hero-dec-top"></div>
                <div class="hero-dec-bottom"></div>
            </div>
            <!-- ----------slide end----------- -->
            <div class="slider_slider slide2">
                <div class="overlay"></div>
                <div class="slide-detail">
                    <h1>Welcome to my shop</h1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum cumque veritatis iusto iste! Doloribus voluptate ducimus obcaecati alias voluptas ut suscipit quisquam? Deserunt, illum dolorem fugit ut ipsa expedita maiores?</p>
                    <a href="view_products.php" class="btn">shop now</a>
                </div>
                <div class="hero-dec-top"></div>
                <div class="hero-dec-bottom"></div>
            </div>
            <!-- ----------slide end----------- -->
            <div class="slider_slider slide3">
                <div class="overlay"></div>
                <div class="slide-detail">
                    <h1>Welcome to my shop</h1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum cumque veritatis iusto iste! Doloribus voluptate ducimus obcaecati alias voluptas ut suscipit quisquam? Deserunt, illum dolorem fugit ut ipsa expedita maiores?</p>
                    <a href="view_products.php" class="btn">shop now</a>
                </div>
                <div class="hero-dec-top"></div>
                <div class="hero-dec-bottom"></div>
            </div>
            <!-- ----------slide end----------- -->
            <div class="slider_slider slide4">
                <div class="overlay"></div>
                <div class="slide-detail">
                    <h1>Welcome to my shop</h1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum cumque veritatis iusto iste! Doloribus voluptate ducimus obcaecati alias voluptas ut suscipit quisquam? Deserunt, illum dolorem fugit ut ipsa expedita maiores?</p>
                    <a href="view_products.php" class="btn">shop now</a>
                </div>
                <div class="hero-dec-top"></div>
                <div class="hero-dec-bottom"></div>
            </div>
            <!-- ----------slide end----------- -->
            <div class="slider_slider slide5">
                <div class="overlay"></div>
                <div class="slide-detail">
                    <h1>Welcome to my shop</h1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum cumque veritatis iusto iste! Doloribus voluptate ducimus obcaecati alias voluptas ut suscipit quisquam? Deserunt, illum dolorem fugit ut ipsa expedita maiores?</p>
                    <a href="view_products.php" class="btn">shop now</a>
                </div>
                <div class="hero-dec-top"></div>
                <div class="hero-dec-bottom"></div>
            </div>
            <!-- ----------slide end----------- -->
            <div class="left-arrow"><i class="bx bxs-left-arrow"></i></div>
            <div class="right-arrow"><i class="bx bxs-right-arrow"></i></div>

        </div>
        </section>
            <!-- ----------home slider end----------- -->
            <section class="thumb">
                <div class="box-container">
                    
                <div class="box">
                        <img src="../Coffeewebsite/img/thumb2.jpg" >
                        <h3>green tea</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum cumque veritatis iusto iste! Doloribus voluptate ducimus obcaecati alias voluptas ut suscipit quisquam? Deserunt, illum dolorem fugit ut ipsa expedita maiores?</p>
                    <i class="bx bx-chevron-right"></i>
                    </div>
                    <div class="box">
                        <img src="../Coffeewebsite/img/thumb0.jpg" >
                        <h3>lemon tea</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum cumque veritatis iusto iste! Doloribus voluptate ducimus obcaecati alias voluptas ut suscipit quisquam? Deserunt, illum dolorem fugit ut ipsa expedita maiores?</p>
                    <i class="bx bx-chevron-right"></i>
                    </div>
                    <div class="box">
                        <img src="../Coffeewebsite//img/thumb2.jpg" >
                        <h3>green tea</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum cumque veritatis iusto iste! Doloribus voluptate ducimus obcaecati alias voluptas ut suscipit quisquam? Deserunt, illum dolorem fugit ut ipsa expedita maiores?</p>
                    <i class="bx bx-chevron-right"></i>
                    </div>
                    <div class="box">
                        <img src="../Coffeewebsite/img/thumb2.jpg" >
                        <h3>green tea</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum cumque veritatis iusto iste! Doloribus voluptate ducimus obcaecati alias voluptas ut suscipit quisquam? Deserunt, illum dolorem fugit ut ipsa expedita maiores?</p>
                    <i class="bx bx-chevron-right"></i>
                    </div>
            </div>
        </div>
        </section>
        <section class="container">
            <div class="box-container">
                <div class="box">
                    <img src="../Coffeewebsite/img/about-us.jpg" alt="">
                </div>
                <div class="box">
                    <img src="../Coffeewebsite/img/download.png" alt="">
                    <span>healthy tea</span>
                    <h1>save up to 50% off</h1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum cumque veritatis iusto iste! Doloribus voluptate ducimus obcaecati alias voluptas ut suscipit quisquam? Deserunt, illum dolorem fugit ut ipsa expedita maiores?</p>
                </div>
            </div>
        </section>
        <section class="shop">
            <div class="title">
                <img src="../Coffeewebsite/img/download.png" alt="">
                <h1>Trending Products</h1>
            </div>
            <div class="row">
                <img src="../Coffeewebsite/img/about.jpg" alt="">
                <div class="row-detail">
                    <img src="../Coffeewebsite/img/basil.jpg" alt="">
                    <div class="top-footer">
                        <h1>a cup of green tea makes you healthy</h1>
                    </div>
                </div>
            </div>
            <div class="box-container">
                <div class="box">
                    <img src="../Coffeewebsite/img/card.jpg" alt="">
                    <a href="view_products.php" class="btn">Shop now</a>
                </div>
                <div class="box">
                    <img src="../Coffeewebsite/img/card0.jpg" alt="">
                    <a href="view_products.php" class="btn">Shop now</a>
                </div>
                <div class="box">
                    <img src="../Coffeewebsite/img/card1.jpg" alt="">
                    <a href="view_products.php" class="btn">Shop now</a>
                </div>
                <div class="box">
                    <img src="../Coffeewebsite/img/card2.jpg" alt="">
                    <a href="view_products.php" class="btn">Shop now</a>
                </div>
                <div class="box">
                    <img src="../Coffeewebsite/img/10.jpg" alt="">
                    <a href="view_products.php" class="btn">Shop now</a>
                </div>
                <div class="box">
                    <img src="../Coffeewebsite/img/6.webp" alt="">
                    <a href="view_products.php" class="btn">Shop now</a>
                </div>
            </div>
        </section>
        <section class="shop-category">
            <div class="box-container">
                <div class="box">
                    <img src="../Coffeewebsite/img/6.jpg" alt="">
                    <div class="detail">
                        <span>BIG OFFERS</span>
                        <h1>Extra 15% off</h1>
                        <a href="view_products.php" class="btn">shop now</a>
                    </div>
                </div>
                <div class="box">
                    <img src="../Coffeewebsite/img/6.jpg" alt="">
                    <div class="detail">
                        <span>BIG OFFERS</span>
                        <h1>Extra 15% off</h1>
                        <a href="view_products.php" class="btn">shop now</a>
                    </div>
                </div>
            </div>
        </section>
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
            <section class="brand">
                <div class="box-container">
                    <div class="box">
                        <img src="../Coffeewebsite/img/brand (1).jpg" alt="">
                    </div>
                    <div class="box">
                        <img src="../Coffeewebsite/img/brand (2).jpg" alt="">
                    </div>
                    <div class="box">
                        <img src="../Coffeewebsite/img/brand (3).jpg" alt="">
                    </div>
                    <div class="box">
                        <img src="../Coffeewebsite/img/brand (4).jpg" alt="">
                    </div>
                    <div class="box">
                        <img src="../Coffeewebsite/img/brand (5).jpg" alt="">
                    </div>
                </div>
            </section>
        <?php include '../Coffeewebsite/components/footer.php'; ?>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="script.js"></script>
    <?php include '../Coffeewebsite/components/alert.php'; ?>
</body>

</html>