<?php ob_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/grid.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap&subset=vietnamese">
    <link rel="stylesheet" href="../assets/fonts/fontawesome-free-5.15.3-web/css/all.css">

</head>

<body>
    <div class="app">
        <?php
        require '../assets/sidebar/header.php';
        include '../assets/php/connect_db.php';
        ?>

        <?php
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $result = mysqli_query($con, "select * from hanghoa as a, hinhhanghoa as b where a.MSHH = b.MSHH AND TenHH='$id'");
            while ($row = mysqli_fetch_array($result)) {
                $mota = explode("$$$", $row['MoTa']);
        ?>


                <!-- Container -->
                <div class="app__container">
                    <div class="grid wide">
                        <div class="row app__content">
                            <div class="product__info">
                                <form action="http://localhost/PhucSport/KhachHang/cart.php?action=add&ms=<?= $row['MSHH'] ?>" method="post" class="product__info-form">

                                    <img src="<?= $row['TenHinh'] ?>" alt="" class="product__info-img">
                                    <div class="product__info-buy">
                                        <p class="product__info-location">Home Page/Product</p>
                                        <h3 class="product__info-heading"><?= $row['TenHH'] ?></h3>
                                        <h3 class="product__info-price"><?= number_format($row['Gia'], 0, ',', '.') ?></h3>

                                        <p class="product__info-description"><?= $mota[0] ?>
                                        </p>
                                        <div class="product__info-action">
                                            <button class="product__quantity-btn">-</button>
                                            <input class="product__quantity-input" type="text" name="quantity" value="1">
                                            <button class="product__quantity-btn">+</button>
                                        </div>
                                        <div class="product__info-action">
                                            <label for="size">Chọn size giày:</label>
                                            <select name="size" id="size">
                                                <option value="42">42</option>
                                                <option value="41">41</option>
                                                <option value="40">40</option>
                                                <option value="39">39</option>
                                                <option value="other">Khác</option>
                                            </select>
                                        </div>
                                        <div class="product__info-contact">

                                            <input class="product__info-btn add-cart" type="submit" value="Add Cart" name="addcart">
                                            <!-- <button class="product__info-btn facebook"><i class="product__info-contact-icon fab fa-facebook-square"></i>Facebook</button>
                                            <button class="product__info-btn gmail"><i class="product__info-contact-icon fas fa-envelope-open-text"></i>Gmail</button>-->
                                            <button class="product__info-btn gmail"><a href="http://localhost/PhucSport/index.php" class="add-cart-link">Back</a></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="product__advertise">
                                <?php
                                if (isset($_GET['MLH'])) {
                                    $MLH = $_GET['MLH'];
                                    //include '../assets/php/connect_db.php';
                                    $result = mysqli_query($con, "select * from hanghoa as a, hinhhanghoa as b where a.MSHH = b.MSHH LIMIT 8");
                                    while ($row = mysqli_fetch_array($result)) { ?>
                                        <div class="col l-6">
                                            <a href="../product.php?MLH= <?= $row['MaLoaiHang'] ?>&id=<?= $row['TenHH'] ?>" class="home-product__link">
                                                <div class="home-product-item">
                                                    <div class="home-product-item__img" style="background-image: url(<?= $row['TenHinh'] ?>);">
                                                    </div>
                                                    <h4 class="home-product-item__name"><?= $row['TenHH'] ?></h4>
                                                    <div class="home-product-item__price">
                                                        <span class="home-product-item__price-old"><?= number_format($row['Gia_Cu'], 0, ',', '.') ?>đ</span>
                                                        <span class="home-product-item__price-current"><?= number_format($row['Gia'], 0, ',', '.') ?>đ</span>
                                                    </div>
                                                    <div class="home-product-item__action">
                                                        <span class="home-product-item__like--liked">
                                                            <i class="home-product-item__like-icon-empty far fa-heart"></i>
                                                            <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                                        </span>
                                                        <div class="home-product-item__rating">
                                                            <i class="home-product-item__rating-icon-star fas fa-star"></i>
                                                            <i class="home-product-item__rating-icon-star fas fa-star"></i>
                                                            <i class="home-product-item__rating-icon-star fas fa-star"></i>
                                                            <i class="home-product-item__rating-icon-star fas fa-star"></i>
                                                            <i class="home-product-item__rating-icon-star home-product-item__rating-icon-star-none fas fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="home-product-item__favorite">
                                                        <i class="home-product-item__favorite-icon fas fa-check"></i> Like
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <!-- Introduce Product -->

                <?php
            }
        }
                ?>
                    </div>
                </div>


                <?php require '../assets/sidebar/footer.php'; ?>

    </div>
</body>

</html>