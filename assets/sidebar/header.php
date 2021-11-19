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
                                    <li class="header__top-action-signed-wrap-item"><a href="./user.php" class="header__top-action-signed-wrap-item-link"><i class="fas fa-user-edit"></i> Quản lý tài khoản</a></li>
                                    <li class="header__top-action-signed-wrap-item"><a href="./history.php" class="header__top-action-signed-wrap-item-link"><i class="fas fa-history"></i> Lịch sử mua hàng</a></li>
                                    <li class="header__top-action-signed-wrap-item"><a href="./logout.php" class="header__top-action-signed-wrap-item-link"><i class="fas fa-sign-out-alt"></i> Đăng xuất</a></li>
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
                            <img src="./assets/image/giohang.png" alt="" class="header__top-cart-wrap-img">
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

                </div>
            </div>
            <div class="header__bottom hide-on-mobile-tablet">
                <div class="header__bottom-navbar">
                    <div class="header__bottom-navbar-menu"> <a href="./index.php" class="header__bottom-navbar-menu-link"><i class="fas fa-home"></i></a></div>
                    <div class="header__bottom-navbar-menu">TẤT CẢ SẢN PHẨM &nbsp; <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        <div class="header__bottom-navbar-menu-none">
                            <ul class="header__bottom-navbar-menu-none-list">
                                <li class="header__bottom-navbar-menu-none-item">
                                    <h4 class="header__bottom-navbar-menu-none-item--brand"><i class="list__list-icon fas fa-chevron-circle-right">&nbsp;</i>NIKE</h4>
                                    

                                    <ul class="list__list">
                                        <li class="list__list-item"><a href="./index.php?action=NK" class="list__list-item--link">NIKE MERCURIAL</a></li>
                                        <li class="list__list-item"><a href="./index.php?action=NK" class="list__list-item--link">NIKE PHANTOM</a></li>
                                        <li class="list__list-item"><a href="./index.php?action=NK" class="list__list-item--link">NIKE TIEMPO</a></li>
                                    </ul>
                                    
                                </li>
                                <li class="header__bottom-navbar-menu-none-item">
                                    <h4 class="header__bottom-navbar-menu-none-item--brand"><i class="list__list-icon fas fa-chevron-circle-right"></i>&nbsp;ADIDAS</h4>

                                    <ul class="list__list">
                                        <li class="list__list-item">
                                            <a href="./index.php?action=AD" class="list__list-item--link">ADIDAS X</a>
                                        </li>
                                        <li class="list__list-item">
                                            <a href="./index.php?action=AD" class="list__list-item--link">ADIDAS COPA</a>
                                        </li>
                                        <li class="list__list-item">
                                            <a href="./index.php?action=AD" class="list__list-item--link">ADIDAS NEMEZIZ</a>
                                        </li>
                                        <li class="list__list-item">
                                            <a href="./index.php?action=AD" class="list__list-item--link">ADIDAS PREDATOR</a>
                                        </li>
                                    </ul>

                                </li>
                                <li class="header__bottom-navbar-menu-none-item">
                                    <h4 class="header__bottom-navbar-menu-none-item--brand"><i class="list__list-icon fas fa-chevron-circle-right"></i>&nbsp;PUMA</h4>
                                    <ul class="list__list">
                                        <li class="list__list-item"><a href="./index.php?action=NK" class="list__list-item"></a>
                                            <a href="./index.php?action=PM" class="list__list-item--link">PUMA ULTRA</a>
                                        </li>
                                        <li class="list__list-item"><a href="./index.php?action=NK" class="list__list-item"></a>
                                            <a href="./index.php?action=PM" class="list__list-item--link">PUMA FUTURE</a>
                                        </li>
                                        <li class="list__list-item"><a href="./index.php?action=NK" class="list__list-item"></a>
                                            <a href="./index.php?action=PM" class="list__list-item--link">PUMA ONE</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="header__bottom-navbar-menu-none-item">
                                    <h4 class="header__bottom-navbar-menu-none-item--brand"><i class="list__list-icon fas fa-chevron-circle-right"></i>&nbsp;MIZUNO</h4>
                                    <ul class="list__list">
                                        <li class="list__list-item"><a href="./index.php?action=NK" class="list__list-item"></a>
                                            <a href="./index.php?action=MZ" class="list__list-item--link">MIZUNO MORELIA</a>
                                        </li>
                                        <li class="list__list-item"><a href="./index.php?action=NK" class="list__list-item"></a>
                                            <a href="./index.php?action=MZ" class="list__list-item--link">MIZUNO MONARCIDA</a>
                                        </li>
                                        <li class="list__list-item"><a href="./index.php?action=NK" class="list__list-item"></a>
                                            <a href="./index.php?action=MZ" class="list__list-item--link">MIZUNO REBULA</a>
                                        </li>
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