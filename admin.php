<?php ob_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/grid.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
    <!-- them dong ke tiep se lay duoc toan trang ko margin -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap&subset=vietnamese">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-5.15.3-web/css/all.css">
</head>

<body>
    <div class="app">
        <?php
        require './assets/sidebar/header.php';
        if (isset($_SESSION['user'])) {
            if ($_SESSION['user'] == 'admin') {
            } else {
                header('location: ./logout.php');
            }
        } else {
            echo "<script> confirm('You are not logged in');</script>";

            header('location: ./register_login.php?action=login');
        }
        ?>

        <div class="app_container">
            <div class="grid wide">
                <div class="row app__content">
                    <div class="col l-2 m-0 c-0">
                        <!-- Category -->
                        <nav class="category">
                            <h3 class="category__heading">
                                <i class="category__heading-icon fas fa-tasks"></i> Manage List
                            </h3>
                            <ul class="category-list">
                                <li class="category-item">
                                    <a href="./admin.php" class="category-item-active category-item-link">Dashboard</a>
                                </li>
                                <li class="category-item">
                                    <a href="./product_manage.php" class="category-item-link">Product Manage</a>
                                </li>
                                <li class="category-item">
                                    <a href="./user_manage.php" class="category-item-link">Account Manage</a>
                                </li>
                                <li class="category-item">
                                    <a href="./order_manage.php" class="category-item-link">Order Manage</a>
                                </li>
                                <li class="category-item">
                                    <a href="" class="category-item-link">Configuration</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col l-10 m-12 c-12">
                        <div class="admin__block-heading">

                            <div class="col l-2-4">
                                <div class="admin__page-item">
                                    <div class="admin__page-item-icon">
                                        <i class="admin__page-item-icon-css fas fa-shopping-cart"></i>
                                    </div>
                                    <div class="admin__page-item-info">
                                        <h2 class="admin__page-item-number"><?php include './assets/php/connect_db.php';
                                                                            $sql = mysqli_query($con, "select * from dathang");
                                                                            $i = 0;
                                                                            while ($row = mysqli_fetch_array($sql)) {
                                                                                $i++;
                                                                            }
                                                                            echo $i; ?>
                                        </h2>
                                        <h4 class="admin__page-item-text">Order</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="col l-2-4">
                                <div class="admin__page-item">
                                    <div class="admin__page-item-icon" style="background-color:#ff6445">
                                        <i class="admin__page-item-icon-css far fa-comment"></i>
                                    </div>
                                    <div class="admin__page-item-info">
                                        <h2 class="admin__page-item-number"><?php include './assets/php/connect_db.php';
                                                                            $sql = mysqli_query($con, "select * from hanghoa");
                                                                            $i = 0;
                                                                            while ($row = mysqli_fetch_array($sql)) {
                                                                                $i++;
                                                                            }
                                                                            echo $i; ?></h2>
                                        <h4 class="admin__page-item-text">Product</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="col l-2-4">
                                <div class="admin__page-item">
                                    <div class="admin__page-item-icon" style="background-color:cornflowerblue">
                                        <i class="admin__page-item-icon-css far fa-user"></i>
                                    </div>
                                    <div class="admin__page-item-info">
                                        <h2 class="admin__page-item-number"><?php include './assets/php/connect_db.php';
                                                                            $sql = mysqli_query($con, "select * from khachhang");
                                                                            $i = 0;
                                                                            while ($row = mysqli_fetch_array($sql)) {
                                                                                $i++;
                                                                            }
                                                                            echo $i; ?></h2>
                                        <h4 class="admin__page-item-text">User</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="col l-2-4">
                                <div class="admin__page-item">
                                    <div class="admin__page-item-icon" style="background-color: #ffce3e">
                                        <i class="admin__page-item-icon-css far fa-clipboard"></i>
                                    </div>
                                    <div class="admin__page-item-info">
                                        <h2 class="admin__page-item-number">155</h2>
                                        <h4 class="admin__page-item-text">Post</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="col l-2-4">
                                <div class="admin__page-item">
                                    <div class="admin__page-item-icon" style="background-color:crimson">
                                        <i class="admin__page-item-icon-css fas fa-eye"></i>
                                    </div>
                                    <div class="admin__page-item-info">
                                        <h2 class="admin__page-item-number">12.5K</h2>
                                        <h4 class="admin__page-item-text">View</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php require './assets/sidebar/footer.php'; ?>

    </div>

    <!-- Sau div toan trang la Modal -->
</body>

</html>