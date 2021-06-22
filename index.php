<?php ob_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>H-SHOP</title>
    <!-- <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/header2.css"> -->

    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/grid.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
    <link rel="stylesheet" href="./assets/css/slideshow.css">

    <!-- them dong ke tiep se lay duoc toan trang ko margin -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap&subset=vietnamese">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-5.15.3-web/css/all.css">
</head>

<body>
    <div class="app">
        <!-- Header -->
        <?php require './assets/sidebar/header.php'; ?>
        <?php
        if (isset($_GET['new'])) {
            $action = $_GET['new'];
            if ($action == 'unset') {
                unset($_SESSION['cart']);
            }
        }
        ?>

        <!-- Container -->
        <div class="app_container">
            <div class="grid wide">
                <div class="row app__content">
                    <!-- Slide Show -->
                    <div class="col l-12">
                        <div class="slideshow-container">

                            <div class="mySlides fade">
                                <div class="numbertext">1 / 3</div>
                                <img src="./assets/image/slide_5.jpg" style="width:100%">
                                <!-- <div class="text">Caption Text</div> -->
                            </div>

                            <div class="mySlides fade">
                                <div class="numbertext">2 / 3</div>
                                <img src="./assets/image/slide_4.jpg" style="width:100%">
                                <!-- <div class="text">Caption Two</div> -->
                            </div>

                            <div class="mySlides fade">
                                <div class="numbertext">3 / 3</div>
                                <img src="./assets/image/slide_3.jpg" style="width:100%">
                                <!-- <div class="text">Caption Three</div> -->
                            </div>

                            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                            <a class="next" onclick="plusSlides(1)">&#10095;</a>

                            <div class="dot__wrap" style="text-align:center">
                                <span class="dot" onclick="currentSlide(1)"></span>
                                <span class="dot" onclick="currentSlide(2)"></span>
                                <span class="dot" onclick="currentSlide(3)"></span>
                            </div>
                        </div>
                        <!-- <br> -->


                        <script>
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
                                var dots = document.getElementsByClassName("dot");
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
                                    dots[i].className = dots[i].className.replace(" active1", "");
                                }
                                slides[slideIndex - 1].style.display = "block";
                                dots[slideIndex - 1].className += " active1";
                            }
                            setInterval(()=>{
                                plusSlides(1)
                            },3000)
                        </script>
                    </div>
                    <div class="col l-0 m-0 c-0">
                        <!-- Category -->
                        <!-- <nav class="category">
                            <h3 class="category__heading">
                                <i class="category__heading-icon fas fa-list"></i> Product List
                            </h3>
                            <ul class="category-list">
                                <li class="category-item">
                                    <a href="./index.php" class="category-item-active category-item-link">PRODUCT</a>
                                </li>

                                <li class="category-item">
                                    <a href="./index.php?action=AP" class="category-item-link">APPLE</a>
                                </li>
                                <li class="category-item">
                                    <a href="./index.php?action=SS" class="category-item-link">SAMSUNG</a>
                                </li>
                                <li class="category-item">
                                    <a href="./index.php?action=OP" class="category-item-link">OPPO</a>
                                </li>
                                <li class="category-item">
                                    <a href="./index.php?action=AS" class="category-item-link">ASUS</a>
                                </li>
                            </ul>
                        </nav> -->
                    </div>

                    <div class="col l-12 m-12 c-12">
                        <!-- Home Filter -->
                        <?php require './assets/sidebar/home_filter.php'; ?>
                        <div class="responsive__home-filter">
                            <ul class="responsive__home-filter-list">
                                <!-- <li class="responsive__home-filter-item"><i class="fas fa-list"></i></li> -->
                                <li class="responsive__home-filter-item">Popular</li>
                                <li class="responsive__home-filter-item">New</li>
                                <li class="responsive__home-filter-item">Best Sale</li>
                                <li class="responsive__home-filter-item">Price</li>
                            </ul>
                        </div>
                        <!-- Product -->
                        <div class="home-product">
                            <div class="row">
                                <?php
                                include './assets/php/connect_db.php';
                                if (isset($_GET['action'])) {
                                    $action = $_GET['action'];

                                    if ($action == 'AP') {
                                        $sql = "select * from hanghoa where MaLoaiHang='$action'";
                                    }
                                    if ($action == 'SS') {
                                        $sql = "select * from hanghoa where MaLoaiHang='$action'";
                                    }
                                    if ($action == 'OP') {
                                        $sql = "select * from hanghoa where MaLoaiHang='$action'";
                                    }
                                    if ($action == 'AS') {
                                        $sql = "select * from hanghoa where MaLoaiHang='$action'";
                                    }
                                    if ($action == 'low') {
                                        $sql = "select * from hanghoa order by Gia asc";
                                    }
                                    if ($action == 'high') {
                                        $sql = "select * from hanghoa order by Gia desc";
                                    }


                                    $result = mysqli_query($con, $sql);
                                    while ($row = mysqli_fetch_array($result)) {
                                        echo '<div class="col l-2-4 m-4 c-6">';
                                        echo '<a href="./product.php?MLH=' . $row['MaLoaiHang'] . '&id=' . $row['TenHH'] . '" class="home-product__link">';
                                        echo '<div class="home-product-item">';
                                        echo '<div class="home-product-item__img" style="background-image: url(' . $row['HinhAnh'] . ');">';
                                        echo '</div>';
                                        echo '<h4 class="home-product-item__name">' . $row['TenHH'] . '</h4>';
                                        echo '<div class="home-product-item__price">';
                                        echo '<span class="home-product-item__price-old">' . number_format($row['Gia_Cu'], 0, ',', '.') . 'đ</span>';
                                        echo '<span class="home-product-item__price-current">' . number_format($row['Gia'], 0, ',', '.') . 'đ</span>';
                                        echo '</div>';
                                        echo '<div class="home-product-item__action">';
                                        echo '<span class="home-product-item__like--liked">';
                                        echo '<i class="home-product-item__like-icon-empty far fa-heart"></i>';
                                        echo '<i class="home-product-item__like-icon-fill fas fa-heart"></i>';
                                        echo '</span>';
                                        echo '<div class="home-product-item__rating">';
                                        echo '<i class="home-product-item__rating-icon-star fas fa-star"></i>';
                                        echo '<i class="home-product-item__rating-icon-star fas fa-star"></i>';
                                        echo '<i class="home-product-item__rating-icon-star fas fa-star"></i>';
                                        echo '<i class="home-product-item__rating-icon-star fas fa-star"></i>';
                                        echo '<i class="home-product-item__rating-icon-star home-product-item__rating-icon-star-none fas fa-star"></i>';
                                        echo '</div>';
                                        echo '</div>';
                                        echo '<div class="home-product-item__favorite">';
                                        echo '<i class="home-product-item__favorite-icon fas fa-check"></i> Like';
                                        echo '</div>';
                                        echo '</div>';
                                        echo '</a>';
                                        echo '</div>';
                                    }
                                } else {
                                    $sql = "select * from hanghoa order by Gia desc";
                                    $result = mysqli_query($con, $sql);
                                    while ($row = mysqli_fetch_array($result)) {
                                        echo '<div class="col l-2-4 m-4 c-6">';
                                        echo '<a href="./product.php?MLH=' . $row['MaLoaiHang'] . '&id=' . $row['TenHH'] . '" class="home-product__link">';
                                        echo '<div class="home-product-item">';
                                        echo '<div class="home-product-item__img" style="background-image: url(' . $row['HinhAnh'] . ');">';
                                        echo '</div>';
                                        echo '<h4 class="home-product-item__name">' . $row['TenHH'] . '</h4>';
                                        echo '<div class="home-product-item__price">';
                                        echo '<span class="home-product-item__price-old">' . number_format($row['Gia_Cu'], 0, ',', '.') . 'đ</span>';
                                        echo '<span class="home-product-item__price-current">' . number_format($row['Gia'], 0, ',', '.') . 'đ</span>';
                                        echo '</div>';
                                        echo '<div class="home-product-item__action">';
                                        echo '<span class="home-product-item__like--liked">';
                                        echo '<i class="home-product-item__like-icon-empty far fa-heart"></i>';
                                        echo '<i class="home-product-item__like-icon-fill fas fa-heart"></i>';
                                        echo '</span>';
                                        echo '<div class="home-product-item__rating">';
                                        echo '<i class="home-product-item__rating-icon-star fas fa-star"></i>';
                                        echo '<i class="home-product-item__rating-icon-star fas fa-star"></i>';
                                        echo '<i class="home-product-item__rating-icon-star fas fa-star"></i>';
                                        echo '<i class="home-product-item__rating-icon-star fas fa-star"></i>';
                                        echo '<i class="home-product-item__rating-icon-star home-product-item__rating-icon-star-none fas fa-star"></i>';
                                        echo '</div>';
                                        echo '</div>';
                                        echo '<div class="home-product-item__favorite">';
                                        echo '<i class="home-product-item__favorite-icon fas fa-check"></i> Like';
                                        echo '</div>';
                                        echo '</div>';
                                        echo '</a>';
                                        echo '</div>';
                                    }
                                }
                                ?>

                            </div>
                        </div>

                        <!-- Pagination-->
                        <?php require './assets/sidebar/pagination.php'; ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer  -->
        <?php require './assets/sidebar/footer.php'; ?>

    </div>

    <!-- Sau div toan trang la Modal -->
</body>

</html>