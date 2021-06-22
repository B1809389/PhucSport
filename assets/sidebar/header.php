<?php
session_start();
?>
<header class="header">
    <div class="grid wide">
        <!-- main notify -->
        <nav class="header__navbar hide-on-mobile-tablet">
            <div class="header__navbar-list">
                <!-- Header QR -->
                <!-- <li class="header__navbar-item header__navbar-item--has-qr"> -->
                <div class="header__navbar-qr-wrap">
                    <a class="header__navbar-item--no-pointer">Mobile H-Shop</a>
                    <div class="header__qr">
                        <img src="./assets/image/qr_web.png" alt="QR Code" class="header__qr-img">
                        <div class="header__qr-apps">
                            <a href="" class="header__qr-link"><img src="./assets/image/QR_Appstore.png" alt="App Store" class="header__qr-download-img"></a>
                            <a href="" class="header__qr-link"><img src="./assets/image/QR_GooglePlay.png" alt="Google Play" class="header__qr-download-img"></a>
                        </div>
                    </div>
                </div>
                <!-- </li> -->
                <div class="header__navbar-item">
                    <a class="header__navbar-item--no-pointer">Connect</a>
                    <a href="" class="header__navbar-icon-link">
                        <i class="header__navbar-icon fab fa-facebook"></i>

                    </a>
                    <a href="" class="header__navbar-icon-link">
                        <i class="header__navbar-icon fab fa-instagram"></i>
                    </a>
                </div>
            </div>

            <div class="header__navbar-list">
                <!-- <div class="header__navbar-item header__navbar-item--has-info"> -->
                <div class="header__navbar-item-notify-wrap">

                    <i class="header__navbar-icon far fa-bell"></i>
                    <a href="" class="header__navbar-item-link">
                        Notification
                    </a>
                    <div class="header__notify">
                        <header class="header__notify-header">
                            <h3>New Notification</h3>
                        </header>

                        <div class="header__notify-list">
                            <div class="header__notify-item header__notify-item--viewed">
                                <a href="" class="header__notify-link">
                                    <img src="./assets/image/phone_notify.jpg" alt="" class="header__notify-img">
                                    <div class="header__notify-info">
                                        <span class="header__notify-name">ROG Phone 2021</span>
                                        <span class="header__notify-description">Hieu nang cuc dinh
                                            nhieu</span>
                                    </div>
                                </a>
                            </div>

                            <div class="header__notify-item header__notify-item--viewed">
                                <a href="" class="header__notify-link">
                                    <img src="./assets/image/phone_notify_1.jpg" alt="" class="header__notify-img">
                                    <div class="header__notify-info">
                                        <span class="header__notify-name">ROG Phone 2020</span>
                                        <span class="header__notify-description">Giam gia cuc soc den 30%</span>
                                    </div>
                                </a>
                            </div>

                            <div class="header__notify-item">
                                <a href="" class="header__notify-link">
                                    <img src="./assets/image/phone_notify_2.jpg" alt="" class="header__notify-img">
                                    <div class="header__notify-info">
                                        <span class="header__notify-name">IPhone 12</span>
                                        <span class="header__notify-description">Chup hinh cuc net</span>
                                    </div>
                                </a>
                            </div>

                            <div class="header__notify-item">
                                <a href="" class="header__notify-link">
                                    <img src="./assets/image/phone_notify_3.jpg" alt="" class="header__notify-img">
                                    <div class="header__notify-info">
                                        <span class="header__notify-name">Iphone 12 mini</span>
                                        <span class="header__notify-description">Nho gon, tien loi</span>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <footer class="header__notify-footer">
                            <a href="" class="header__notify-footer-btn">Show All</a>
                        </footer>
                    </div>
                </div>
                <!-- </div> -->
                <div class="header__navbar-item">
                    <i class="header__navbar-icon far fa-question-circle"></i>
                    <a href="" class="header__navbar-item-link">
                        Help</a>
                </div>
                <!-- User -->
                <?php
                if (isset($_SESSION['user'])) {
                    echo '<style>.header__navbar-item--strong{display:none;}</style>';
                    echo '<div class="header__navbar-user-wrap">';
                    echo '<img src="./assets/image/user_image.png" alt="user_img" class="header__navbar-user-img">';
                    echo '<span class="header__navbar-user-name">' . $_SESSION['user'] . '</span>';
                    echo '<div class="header__navbar-user-menu">';
                    echo '<div class="header__navbar-user-item">';
                    echo '<a href="./user.php">Account</a>';
                    echo '</div>';
                    echo '<div class="header__navbar-user-item">';
                    echo '<a href="./history.php">History</a>';
                    echo '</div>';
                    echo '<div class="header__navbar-user-item">';
                    echo '<a href="./logout.php">Log out</a>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                ?>
                    <!-- Khi chua dang nhap thi in ra 2 thang nay -->
                <?php } else {
                    echo '<style>.header__navbar-user-wrap{display:none;}</style>';
                    echo '<li class="header__navbar-item header__navbar-item--strong"><a href="./register_login.php?action=register" class="register-login__link">Register</a></li>';
                    echo '<div class="header__navbar-item header__navbar-item--strong"><a href="./register_login.php?action=login" class="register-login__link">Log In</a></div>';
                }
                ?>
            </div>
        </nav>
        <!-- container search -->
        <div class="header-with-search">
            <!-- responsive -->
            <div class="responsive__wrap">
                <label for="responsive__bars" class="responsive__bars">
                    <i class="responsive__bars-icon fas fa-bars"></i>
                </label>
                <label for="responsive__search" class="responsive__search">
                    <i class="responsive__search-icon fas fa-search"></i>
                </label>
            </div>

                <?php
                    if(isset($_SESSION['user'])){
                        echo '<style>.responsive__bars-btn-wrap{display:none;} .responsive__bars-btn-wrap--logged-in{width:100%;display:inline-flex; justify-content: space-between;}</style>';
                    }
                ?>
            <input type="checkbox" hidden id="responsive__bars" class="checkbox__bars">
            <div class="responsive__bars-wrap">
                <div class="responsive__bars-btn-wrap">
                    <a href="./register_login.php?action=register" class="responsive__register-login__link">Register</a>
                    <a href="./register_login.php?action=login" class="responsive__register-login__link">Log In</a>
                </div>
                <div class="responsive__bars-btn-wrap--logged-in">
                    <div class="header__navbar-user-wrap">
                    <img src="./assets/image/user_image.png" alt="user_img" class="header__navbar-user-img">
                    <span class="header__navbar-user-name" style="color:#025f99"><?= $_SESSION['user'] ?></span>
                    </div>
                    <span class="header__navbar-user-name" style="color: #ee4d2d"><a href="./logout.php" class="responsive__register-login__link">Log out</a></span>
                    <!-- <a href="./logout.php" class="responsive__register-login__link">Log Out</a> -->
                </div>
                    <?php
                        if(isset($_SESSION['user']) && $_SESSION['user'] == 'admin'){
                            echo '<style>.responsive__bars-list--user{display:none;} .responsive__bars-list--admin{display:block;}</style>';
                        }else if(isset($_SESSION['user']) && $_SESSION['user'] != 'admin'){
                            echo '<style>.responsive__bars-list--user{display:block;} .responsive__bars-list--admin{display:none;}</style>';
                        }
                        else{
                            echo '<style>.responsive__bars-list--user{display:block;} .responsive__bars-list--admin{display:none;}</style>';
                        }
                    ?>
                <ul class="responsive__bars-list--user">
                    <li class="responsive__bars-item">PRODUCT LIST</li>
                    <li class="responsive__bars-item"><a href="./index.php?action=AP" class="category-item-link">APPLE</a></li>
                    <li class="responsive__bars-item"><a href="./index.php?action=SS" class="category-item-link">SAMSUNG</a></li>
                    <li class="responsive__bars-item"><a href="./index.php?action=AS" class="category-item-link">ASUS</a></li>
                    <li class="responsive__bars-item"><a href="./index.php?action=OP" class="category-item-link">OPPO</a></li>
                </ul>
                <ul class="responsive__bars-list--admin">
                    <li class="responsive__bars-item">MANAGE LIST</li>
                    <li class="responsive__bars-item"><a href="./admin.php" class="category-item-link">Dashboard</a></li>
                    <li class="responsive__bars-item"><a href="./product_manage.php" class="category-item-link">Product Manage</a></li>
                    <li class="responsive__bars-item"><a href="./user_manage.php" class="category-item-link">Account Manage</a></li>
                    <li class="responsive__bars-item"><a href="./order_manage.php" class="category-item-link">Order Manage</a></li>
                </ul>
            </div>


            <!-- Logo -->
            <div class="header__logo">
                <a href="/Web_Phone/index.php" class="">
                    <img src="./assets/image/logo.png" alt="logo_tech" class="header__logo-image">
                    <!-- H-Shop Mobile header__logo-link -->
                </a>
            </div>
            <!-- Search -->
            <input type="checkbox" hidden id="responsive__search" class="checkbox__search">
            <div class="header__search">
                <!-- Input -->
                <div class="header__search-input-wrap">
                    <input type="text" class="header__search-input" placeholder="Search">
                    <div class="header__search-history">
                        <h3 class="header__search-history-heading">Search History</h3>
                        <ul class="header__search-history-list">
                            <li class="header__search-history-item">
                                <a href="./index.php?action=AP">Iphone</a>
                            </li>
                            <li class="header__search-history-item">
                                <a href="./index.php?action=SS">SamSung</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Select -->
                <div class="header__search-select">
                    <span class="header__search-select-label">In shop </span>
                    <i class="header__search-select-icon fas fa-chevron-down"></i>
                    <!-- option -->
                    <ul class="header__search-option">
                        <li class="header__search-option-item header__search-option-item--active">
                            <span>In Shop</span>
                            <i class="header__search-option-icon fas fa-check"></i>
                        </li>
                        <li class="header__search-option-item">
                            <span>Our Shop</span>
                            <i class="header__search-option-icon fas fa-check"></i>
                        </li>
                    </ul>
                </div>
                <!-- button -->
                <button class="header__search-btn">
                    <i class="header__search-btn-icon fas fa-search"></i>
                </button>
            </div>
            <?php
            if (!isset($_SESSION['cart'])) {
                echo "<style>.header__cart-list--has-cart{display:none;}</style>";
            } else {
                echo "<style>.header__cart-list--no-cart{display:none;}</style>";
            }
            ?>
            <!-- Cart layout-->
            <div class="header__cart">
                <div class="header__cart-wrap">
                    <input type="checkbox" hidden id="responsive__cart" class="checkbox__cart">
                    <label for="responsive__cart" class="responsive__cart">
                    <i class="header__cart-icon fas fa-shopping-cart"></i>
                    <span class="header__cart-notice"><?php
                                                        if (isset($_SESSION['cart'])) {
                                                            $i = 0;
                                                            foreach ($_SESSION['cart'] as $key => $value) {
                                                                $i++;
                                                            }
                                                            echo $i;
                                                        } else {
                                                            echo 0;
                                                        }
                                                        ?></span>
                    </label>
                    <!-- No cart thi them vao la hien ra:  header__cart-list--no-cart -->
                    <div class="header__cart-list">
                        <div class="header__cart-list--no-cart">
                            <img src="./assets/image/no_cart.png" alt="" class="header__cart-list--no-cart-img">
                            <span class="header__cart-list--no-cart-text">No Product Here !</span>
                        </div>
                        <?php
                        if (isset($_SESSION['cart'])) {
                        ?>
                            <div class="header__cart-list--has-cart">
                                <h3 class="header__cart-list-heading">Product Added</h3>
                                <ul class="header__cart-list-item-ul">
                                    <?php
                                    foreach ($_SESSION['cart'] as $key => $value) {

                                    ?>
                                        <li class="header__cart-list-item-li">
                                            <img src="<?php echo $value['image'] ?>" alt="" class="header__cart-list-item-img">
                                            <div class="header__cart-list-item-info">
                                                <div class="header__cart-list-item-head">
                                                    <h3 class="header__cart-list-item-name"><?php echo $value['name'] ?></h3>
                                                    <div class="header__cart-list-item-price-wrap">
                                                        <span class="header__cart-list-item-price"><?php echo number_format($value['price'], 0, ',', '.') ?> VND</span>
                                                        <span class="header__cart-list-item-multiply">x</span>
                                                        <span class="header__cart-list-item-quantity"><?php echo $value['sl'] ?></span>
                                                    </div>
                                                </div>
                                                <!-- <div class="header__cart-list-item-container">
                                                    <span class="header__cart-list-item-description">New Product 2021</span>
                                                    <span class="header__cart-list-item-remove">Delete</span>
                                                </div> -->
                                            </div>
                                        </li>
                                    <?php } ?>
                                </ul>
                                <div class="header__cart-btn">
                                    <button class="header__cart-view-cart-btn"><a href="./cart.php" class="header__cart-view-cart-btn-link">View Cart</a></button>
                                </div>
                            </div>

                    </div>
                </div>
            </div>
        <?php

                        }
        ?>
        </div>
    </div>
</header>