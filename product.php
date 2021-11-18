<?php ob_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/grid.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap&subset=vietnamese">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-5.15.3-web/css/all.css">

</head>

<body>
    <div class="app">
        <?php
        require './assets/sidebar/header.php';
        include './assets/php/connect_db.php';
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
                            <div class="col l-9 product__info">
                                <form action="./cart.php?action=add&ms=<?= $row['MSHH'] ?>" method="post" class="product__info-form">

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
                                        <div class="product__info-contact">

                                            <input class="product__info-btn add-cart" type="submit" value="Add Cart" name="addcart">
                                            <!-- <button class="product__info-btn facebook"><i class="product__info-contact-icon fab fa-facebook-square"></i>Facebook</button>
                                            <button class="product__info-btn gmail"><i class="product__info-contact-icon fas fa-envelope-open-text"></i>Gmail</button>-->
                                            <button class="product__info-btn gmail"><a href="./index.php" class="add-cart-link">Back</a></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col l-2-4 m-0 c-0 product__advertise">
                                <div class="product__advertise-block">
                                    <img src="./assets/image/fast_ship.png" alt="" class="product__advertise-img">
                                    <div class="product__advertise-item">
                                        <h4 class="product__advertise-heading">Fast Shipping</h4>
                                        <p class="product__advertise-text">Only in 24h</p>
                                    </div>
                                </div>
                                <div class="product__advertise-block">
                                    <img src="./assets/image/protect.jpg" alt="" class="product__advertise-img">
                                    <div class="product__advertise-item">
                                        <h4 class="product__advertise-heading">Genuine Product</h4>
                                        <p class="product__advertise-text">Import Product 100%</p>
                                    </div>
                                </div>
                                <div class="product__advertise-block">
                                    <img src="./assets/image/saving.png" alt="" class="product__advertise-img">
                                    <div class="product__advertise-item">
                                        <h4 class="product__advertise-heading">Thrift Purchase</h4>
                                        <p class="product__advertise-text">Discount 10% - 30%</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Introduce Product -->

                <?php
            }
        }
                ?>

                <div class="row">
                    <div class="product__similar"><button class="product__similar-btn">Similar Product</button></div>
                    <?php
                    if (isset($_GET['MLH'])) {
                        $MLH = $_GET['MLH'];
                        //include './assets/php/connect_db.php';
                        $result = mysqli_query($con, "select TenHH, TenHinh, Gia_Cu, Gia, MaLoaiHang from hanghoa as a, hinhhanghoa as b where a.MSHH = b.MSHH AND MaLoaiHang='$MLH'");
                        while ($row = mysqli_fetch_array($result)) {
                            echo '<div class="col l-2-4 m-4 c-6">';
                            echo '<a href="./product.php?MLH=' . $row['MaLoaiHang'] . '&id=' . $row['TenHH'] . '" class="home-product__link">';
                            echo '<div class="home-product-item">';
                            echo '<div class="home-product-item__img" style="background-image: url(' . $row['TenHinh'] . ');">';
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
                </div>


                <?php require './assets/sidebar/footer.php'; ?>

    </div>
    <script>
        var coll = document.querySelector(".collapsible");
        coll.addEventListener("click", function() {
            var content = this.nextElementSibling;
            if (content.style.display === "block") {
                content.style.display = "none";
            } else {
                content.style.display = "block";
            }
        });
    </script>
</body>

</html>