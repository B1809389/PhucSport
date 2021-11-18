<?php
session_start();
?>
<header class="header">
    <div class="grid">
        <div class="row">
            <!-- <div class="col l-12">
                </div> -->
            <div class="header__top">
                <div class="header__top-logo">
                    <h1 class="header__top-logo-text"> <span class="header__top-logo-text-color" style="color: #edd65d">Phuc</span> Sports</h1>
                </div>
                <div class="header__top-action">
                    <?php
                    if (isset($_SESSION['user'])) {
                        echo '<style>.header__top-action-signed{display:flex;}</style>';
                    } else {
                        echo '<style>.header__top-action-sign{display:flex;}</style>';
                    }
                    ?>
                    <div class="header__top-register__login-wrap">
                        <div class="header__top-action-sign">
                            <div class="header__top-register"><a href="./register_login.php?action=register" class="header__top-action-sign-link">ĐĂNG KÝ</a></div>
                            <div class="header__top-login"><a href="./register_login.php?action=login" class="header__top-action-sign-link">ĐĂNG NHẬP</a></div>
                        </div>

                        <div class="header__top-action-signed">
                            <i class="header__top-sign-in-icon fas fa-user-circle"></i>
                            <div class="header__top-sign-in-user-name"><?php
                                                                        if (isset($_SESSION['user'])) {
                                                                            echo $_SESSION['user'];
                                                                        }
                                                                        ?></div>

                            <div class="header__top-action-signed-wrap">
                                <ul class="header__top-action-signed-wrap-list">
                                    <li class="header__top-action-signed-wrap-item"><a href="./user.php" class="header__top-action-signed-wrap-item-link"><i class="fas fa-user-edit"></i> Account</a></li>
                                    <li class="header__top-action-signed-wrap-item"><a href="./history.php" class="header__top-action-signed-wrap-item-link"><i class="fas fa-history"></i> History</a></li>
                                    <li class="header__top-action-signed-wrap-item"><a href="./logout.php" class="header__top-action-signed-wrap-item-link"><i class="fas fa-sign-out-alt"></i> Sign Out</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="header__top-cart">

                        <i class="header__top-cart-icon fas fa-shopping-cart"></i>
                        <div class="header__top-cart-notice"><?php
                                                                if (isset($_SESSION['cart'])) {
                                                                    $i = 0;
                                                                    foreach ($_SESSION['cart'] as $key => $value) {
                                                                        $i++;
                                                                    }
                                                                    echo $i;
                                                                } else {
                                                                    echo 0;
                                                                }
                                                                ?></div>

                        <div class="header__top-cart-wrap--no-cart">
                            <img src="./assets/image/no_cart.png" alt="" class="header__top-cart-wrap-img">
                        </div>
                        <?php
                        if (isset($_SESSION['cart'])) {
                        ?>
                            <div class="header__top-cart-wrap--has-cart">
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

                                            </div>
                                        </li>
                                    <?php } ?>
                                </ul>
                                <div class="header__cart-btn">
                                    <button class="header__cart-view-cart-btn"><a href="./cart.php" class="header__cart-view-cart-btn-link">View Cart</a></button>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                        <?php
                        if (!isset($_SESSION['cart'])) {
                            echo "<style>
                            .header__top-cart:hover .header__top-cart-wrap--no-cart {
                                display: block;
                                cursor: pointer;
                            }</style>";
                        } else {
                            echo "<style>.header__top-cart:hover .header__top-cart-wrap--has-cart {
                                display: block;
                                cursor: pointer;
                            }</style>";
                        }
                        ?>
                    </div>

                    <div class="header__top-responsive-navbar-menu-wrap">
                        <button class='bars' type="button"><i class="header__top-responsive-navbar-menu-icon fas fa-bars"></i></button>
                        <div class="header__top-responsive-navbar-menu-wrap-none">

                            <div class="header__top-responsive-navbar-menu-wrap-none-search">
                                <input type="text" class="header__bottom-search-input__responsive">
                                <button class="header__bottom-search-button__responsive">Search</button>
                            </div>
                            <div class="header__top-responsive-navbar-menu-wrap-none-login">
                                <?php
                                if (isset($_SESSION['user'])) {
                                    echo '<style>.header__top-responsive-navbar-menu-wrap-none-signed{display:flex;}</style>';
                                } else {
                                    echo '<style>.header__top-responsive-navbar-menu-wrap-none-not-login{display:flex;}</style>';
                                }
                                ?>

                                <div class="header__top-responsive-navbar-menu-wrap-none-not-login">
                                    <a href="./register_login.php?action=register" class="header__top-responsive-navbar-menu-wrap-none-login-link">Register</a>
                                    <a href="./register_login.php?action=login" class="header__top-responsive-navbar-menu-wrap-none-login-link">Sign In</a>
                                </div>

                                <div class="header__top-responsive-navbar-menu-wrap-none-signed">
                                    <a href="./user.php" class="header__top-responsive-navbar-menu-wrap-none-signed-link">
                                        <i class="header__top-sign-in-icon fas fa-user-circle"></i>
                                        <div class="header__top-sign-in-user-name"><?php
                                                                                    if (isset($_SESSION['user'])) {
                                                                                        echo $_SESSION['user'];
                                                                                    }
                                                                                    ?></div>
                                    </a>

                                    <a href="./logout.php" class="header__top-responsive-navbar-menu-wrap-none-signed-link">
                                        <i class="fas fa-sign-out-alt"></i> Sign Out
                                    </a>

                                </div>
                            </div>
                            <div class="header__top-responsive-navbar-menu-wrap-none-menu">
                                <ul class="header__top-responsive-navbar-menu-wrap-none-menu-list">
                                    <li class="header__top-responsive-navbar-menu-wrap-none-menu-item color-blue-main"><i class="fas fa-home"></i> Home</li>
                                    <li class="header__top-responsive-navbar-menu-wrap-none-menu-item color-blue-main"><i class="fas fa-list"></i> Categories
                                        <ul class="header__top-responsive-navbar-menu-wrap-none-menu-list color-white-main">
                                            <li class="header__top-responsive-navbar-menu-wrap-none-menu-item"><i class="fas fa-mobile-alt"></i> Apple</li>
                                            <li class="header__top-responsive-navbar-menu-wrap-none-menu-item"><i class="fas fa-mobile-alt"></i> Samsung</li>
                                            <li class="header__top-responsive-navbar-menu-wrap-none-menu-item"><i class="fas fa-mobile-alt"></i> Oppo</li>
                                            <li class="header__top-responsive-navbar-menu-wrap-none-menu-item"><i class="fas fa-mobile-alt"></i> Asus</li>
                                            <li class="header__top-responsive-navbar-menu-wrap-none-menu-item"><i class="fas fa-border-all"></i> Other</li>
                                        </ul>
                                    </li>
                                    <li class="header__top-responsive-navbar-menu-wrap-none-menu-item color-blue-main"><i class="far fa-edit"></i> Blog</li>
                                    <li class="header__top-responsive-navbar-menu-wrap-none-menu-item color-blue-main"><i class="fas fa-shopping-bag"></i><a href="./history.php" class="header__top-responsive-navbar-menu-wrap-none-history-link"> History</a></li>
                                    <li class="header__top-responsive-navbar-menu-wrap-none-menu-item color-blue-main"><i class="far fa-address-book"></i> Contact</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="header__bottom hide-on-mobile-tablet">
                <div class="header__bottom-navbar">
                    <div class="header__bottom-navbar-menu"> <a href="./index.php" class="header__bottom-navbar-menu-link"><i class="fas fa-home"></i></a></div>
                    <div class="header__bottom-navbar-menu">TẤT CẢ SẢN PHẨM &nbsp; <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        <div class="header__bottom-navbar-menu-none">
                            <ul class="header__bottom-navbar-menu-none-list">
                                <li class="header__bottom-navbar-menu-none-item">
                                    <h4 class="header__bottom-navbar-menu-none-item--brand">NIKE</h4>
                                    <h4><i class="list__list-icon fas fa-chevron-circle-right"></i> GIÀY CỎ TỰ NHIÊN</h4>

                                    <ul class="list__list">
                                        <li class="list__list-item">NIKE MERCURIAL</li>
                                        <li class="list__list-item">NIKE PHANTOM</li>
                                        <li class="list__list-item">NIKE TIEMPO</li>
                                    </ul>
                                    <h4><i class="list__list-icon fas fa-chevron-circle-right"></i> GIÀY CỎ NHÂN TẠO & FUTSAL</h4>
                                    <ul class="list__list">
                                        <li class="list__list-item">NIKE MERCURIAL</li>
                                        <li class="list__list-item">NIKE MERCURIAL</li>
                                    </ul>
                                </li>
                                <li class="header__bottom-navbar-menu-none-item">
                                    <h4 class="header__bottom-navbar-menu-none-item--brand">ADIDAS</h4>
                                    <h4><i class="list__list-icon fas fa-chevron-circle-right"></i>GIÀY CỎ NHÂN TẠO & FUTSAL</h4>

                                    <ul class="list__list">
                                        <li class="list__list-item">ADIDAS X</li>
                                        <li class="list__list-item">ADIDAS COPA</li>
                                        <li class="list__list-item">ADIDAS NEMEZIZ</li>
                                        <li class="list__list-item">ADIDAS PREDATOR</li>
                                    </ul>

                                </li>
                                <li class="header__bottom-navbar-menu-none-item">
                                    <h4 class="header__bottom-navbar-menu-none-item--brand">PUMA</h4>
                                    <ul class="list__list">
                                        <li class="list__list-item">PUMA ULTRA</li>
                                        <li class="list__list-item">PUMA FUTURE</li>
                                        <li class="list__list-item">PUMA ONE</li>
                                    </ul>
                                </li>
                                <li class="header__bottom-navbar-menu-none-item">
                                    <h4 class="header__bottom-navbar-menu-none-item--brand">MIZUNO</h4>
                                    <ul class="list__list">
                                        <li class="list__list-item">MIZUNO MORELIA</li>
                                        <li class="list__list-item">MIZUNO MONARCIDA</li>
                                        <li class="list__list-item">MIZUNO REBULA</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="header__bottom-navbar-menu">TIN TỨC GIÀY</div>
                    <div class="header__bottom-navbar-menu">HỆ THỐNG CỬA HÀNG</div>
                    <div class="header__bottom-navbar-menu">SALE OFF</div>
                    <div class="header__bottom-navbar-menu">HƯỚNG DẪN ĐẶT HÀNG</div>
                    <div class="header__bottom-navbar-menu">LIÊN HỆ</div>
                </div>
                <div class="header__bottom-search">
                    <!-- <input type="text" placeholder="Search" class="header__bottom-search-input"> -->
                    <input type="text" class="header__bottom-search-input__responsive">
                    <button class="header__bottom-search-button__responsive">Search</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        var coll = document.querySelector(".bars");
        coll.addEventListener("click", function() {
            var content = this.nextElementSibling;
            if (content.style.display === "block") {
                content.style.display = "none";
            } else {
                content.style.display = "block";
            }
        });
    </script>
</header>