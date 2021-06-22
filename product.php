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
            $result = mysqli_query($con, "select * from hanghoa where TenHH='$id'");
            while ($row = mysqli_fetch_array($result)) {
                $mota = explode("$$$",$row['MoTa']);
        ?>


                <!-- Container -->
                <div class="app_container">
                    <div class="grid wide">
                        <div class="row app__content">
                            <div class="col l-9 product__info">
                                <form action="./cart.php?action=add&ms=<?= $row['MSHH'] ?>" method="post" class="product__info-form">

                                    <img src="<?= $row['HinhAnh'] ?>" alt="" class="product__info-img">
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
                        <div class="row app__content">
                            <div class="product__intro hide-on-mobile-tablet">
                                <h3 class="product__intro-heading">Buy genuine <?= $row['TenHH'] ?> at H-Shop</h3>
                                <p class="product__intro-paragraph">
                                    Apple là nhà sản xuất điện thoại thông minh hàng đầu hiện nay. Trong nhiều năm qua, công ty liên tục thống lĩnh thị trường với doanh số bán khổng lồ và doanh thu kỷ lục. Các sản phẩm mang thương hiệu Apple luôn được người dùng đón nhận và tin tưởng nhờ
                                    thiết kế dẫn đầu xu hướng và hiệu năng bền bỉ theo thời gian.
                                </p>
                                <p class="product__intro-paragraph-img">
                                    <img src="<?= $row['HinhAnh'] ?>" alt="" class="product__intro-img">
                                </p>

                                <button class="collapsible" type="button">Xem thêm</button>

                                <div class="content">
                                    <h3 class="product__intro-heading">Luxury Design 2021</h3>
                                    <p class="product__intro-paragraph">
                                        Nhắc đến Apple, hầu hết người dùng đều nghĩ đến những chiếc iPhone với thiết kế thời thượng, sang trọng và khẳng định đẳng cấp. Thế hệ iPhone 12 Series năm nay cũng không ngoại lệ. Chiếc iPhone 12 Pro 128GB chính hãng sở hữu thiết kế vuông vắn với các
                                        cạnh phẳng, mang đến cảm giác mạnh mẽ, chắc chắn khi cầm trên tay. Thiết kế này gợi nhớ đến những chiếc iPhone 5s đã ra mắt từ nhiều năm trước. Hay gần đây nhất là thiết kế các khung nhôm phẳng của iPad Pro cũng khơi nguồn
                                        cảm hứng cho diện mạo của chiếc iPhone 12 Pro 128GB.
                                    </p>
                                    <p class="product__intro-paragraph-img">

                                        <img src="./assets/image/intro_12promax_512GB_2.jpg" alt="" class="product__intro-img">
                                    </p>
                                    <p class="product__intro-paragraph">
                                        Không chỉ vậy, chiếc iPhone 12 Pro 128GB chính hãng mỏng hơn 11%, nhỏ gọn và nhẹ hơn nhiều so với các mẫu iPhone 11 ra mắt năm ngoái. iPhone 12 Pro 128GB chính hãng sở hữu màn hình kích thước 6.1 inch với các viền cực mỏng, mở ra không gian trải nghiệm
                                        không giới hạn.
                                    </p>

                                    <h3 class="product__intro-heading">Outstanding Performance 2021</h3>
                                    <p class="product__intro-paragraph">
                                        Không chỉ sở hữu thiết kế sang trọng, tinh tế, chiếc iPhone 12 Pro 128GB chính hãng VN/A còn được trang bị sức mạnh vượt trội từ con chip A14 Bionic của nhà Apple. Đây cũng là con chip smartphone nhanh nhất thế giới ở thời điểm hiện tại. A14 Bionic là
                                        con chip đầu tiên trên thế giới được sản xuất trên tiến trình 5nm, bao gồm 6 nhân CPU và 4 nhân GPU. Nó không chỉ hoạt động với hiệu năng bùng nổ mà còn vô cùng tiết kiệm năng lượng. iPhone 12 Pro 128GB hỗ trợ kết nối 5G
                                        nhanh nhất hiện nay, đem đến trải nghiệm xử lý đáng kinh ngạc.
                                    </p>
                                    <p class="product__intro-paragraph-img">

                                        <img src="./assets/image/intro_12promax_512GB_3.jpg" alt="" class="product__intro-img">
                                    </p>
                                    <p class="product__intro-paragraph">
                                        Ngoài ra, bộ xử lý AI Neural Engine đã được nâng cấp lên 16 nhân, nhờ đó A14 Bionic có khả năng thực hiện 11 nghìn tỷ tính toán/giây. Đi kèm với đó là RAM 6GB và 128GB dung lượng bộ nhớ, cho phép người dùng lưu lại lượng thông tin lớn trên chiếc iPhone
                                        12 Pro này. iPhone 12 Pro 128GB chính hãng VN/A tự hào với bộ xử lý ấn tượng, vượt lên tất cả công nghệ tiên tiến nhất hiện nay.
                                    </p>
                                </div>
                            </div>
                    <?php
                }
            }
                    ?>
                    <?php
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                        $result = mysqli_query($con, "select * from hanghoa where TenHH='$id'");
                        while ($row = mysqli_fetch_array($result)) {
                    ?>
                            <div class="col l-3 m-12 c-12 product__special">
                                <h3 class="product__special-heading">Specifications</h3>
                                <p class="product__special-text-img">
                                    <img class="product__special-img" src="<?php echo $row['HinhAnh'] ?>" alt="">
                                </p>
                                <!-- <div class="product__special-info">
                                    <p class="product__special-text"><b>Công nghệ màn hình:</b> OLED</p>
                                    <p class="product__special-text"><b>Độ phân giải:</b> 1284 x 2778 Pixels, 3 Camera 12 MP</p>
                                    <p class="product__special-text"><b>Màn hình rộng:</b> 6.1"</p>
                                    <p class="product__special-text"><b>Hệ điều hành:</b> iOS 14</p>
                                    <p class="product__special-text"><b>Chip xử lý (CPU):</b> Apple A14 Bionic 6 nhân</p>
                                    <p class="product__special-text"><b>Bộ nhớ trong (ROM):</b> 512 GB</p>
                                    <p class="product__special-text"><b>RAM:</b> 6 GB</p>
                                    <p class="product__special-text"><b>Mạng di động:</b> Hỗ trợ 5G</p>
                                    <p class="product__special-text"><b>Số khe sim:</b> 1 Nano SIM & 1 eSIM</p>
                                    <p class="product__special-text"><b>Trọng lượng:</b> 189 g</p>
                                    <p class="product__special-text"><b>Dung lượng pin:</b> 2815 mAh</p>
                                </div> -->
                                <?php 
                                    echo $mota[1];
                                ?>
                            </div>
                        </div>

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
                        $result = mysqli_query($con, "select * from hanghoa where MaLoaiHang='$MLH'");
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