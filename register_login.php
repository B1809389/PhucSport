<?php ob_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register-Login</title>
    <link  rel="stylesheet" href="./assets/css/style.css">
    <link  rel="stylesheet" href="./assets/css/grid.css">
    <link  rel="stylesheet" href="./assets/css/responsive.css">
    <link rel="stylesheet" href="./assets/css/register_login.css">
    <!-- them dong ke tiep se lay duoc toan trang ko margin -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap&subset=vietnamese">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-5.15.3-web/css/all.css">
</head>

<body>
    <div class="app">
        <?php
        require './assets/sidebar/header.php';
        ?>

        <?php
        $i = 1;
        require_once './assets/php/connect_db.php';
        if (isset($_POST['submit'])) {
            $cong = mysqli_query($con, "select * from khachhang");
            $mskh = 'KH' .rand();
            $hoten = $_POST['txtHoTenKH'];
            $tencongty = $_POST['txtTenCongTy'];
            $sodienthoai = $_POST['txtSoDienThoai'];
            $email = $_POST['txtEmail'];
            $user = $_POST['txtUser'];
            $pass = $_POST['txtPassword'];
            if (($hoten == '') || ($tencongty == '') || ($sodienthoai == '') || ($email == '') || ($user == '') || ($pass == '')) {
                echo "<script> alert('Please fill your infomation');</script>";
            } else {
                $sql = "select * from khachhang where User='$user'";
                $result = mysqli_query($con, $sql);
                $s = mysqli_num_rows($result);
                if ($s > 0) {
                    echo "<script> alert('User Name Existed ! Please try again');</script>";
                } else {

                    $sql1 = ("insert into khachhang values('$mskh','$hoten','$tencongty','$sodienthoai','$email','$user','$pass')");

                    if (mysqli_query($con, $sql1)) {
                        echo "<script> alert('Success');</script>";
                        header('Refresh:1 ;url= ./register_login.php?action=login');
                    } else {
                        echo "<script> alert('Fail');</script>";
                    }
                }
            }
        }
        mysqli_close($con);
        ?>

        <?php
        if (isset($_GET['action'])) {
            $action = $_GET['action'];
            if ($action == 'register') {
                echo '<style>.auth-form__login-container {display: none;}</style>';
            } else if ($action == 'login') {
                echo '<style>.auth-form__register-container {display: none;}</style>';
            }
        }
        ?>
        <div class="app__container">
            <div class="grid wide">
                <div class="row">
                    <!-- Register -->
                    <div class="auth-form">
                        <!-- <div class="col l-2 m-0 c-0"></div> -->
                        <!-- Form Container -->
                        <div class="auth-form__register-container">
                            <!-- Header -->
                            <div class="auth-form__header">
                                <h3 class="auth-form__heading">Register</h3>
                                <span class="auth-form__heading-btn"><a href="./register_login.php?action=login" class="auth-form__heading-btn-link">Log In</a></span>
                            </div>
                            <!-- Content -->
                            <form class="auth-form__form" method="POST" action="">
                                <br> <input type="text" name="txtHoTenKH" class="auth-form__input" placeholder="Full Name">
                                <br> <input type="text" name="txtTenCongTy" class="auth-form__input" placeholder="Company Name">
                                <br> <input type="text" name="txtSoDienThoai" class="auth-form__input" placeholder="Phone Number">
                                <br> <input type="text" name="txtEmail" class="auth-form__input" placeholder="Email">
                                <br> <input type="text" name="txtUser" class="auth-form__input" placeholder="User Name">
                                <br> <input type="password" name="txtPassword" class="auth-form__input" placeholder="Password">
                                <div class="auth-form__aside">
                                    <p class="auth-form__policy-text">
                                        Complete register, is agree about
                                        <a href="" class="auth-form__policy-link">Terms of Service</a> and
                                        <a href="" class="auth-form__policy-link">Privacy</a>
                                    </p>
                                </div>
                                <!-- Button -->
                                <input class="btn btn--primary" type="submit" name="submit" value="REGISTER">
                            </form>
                            <!-- Services -->
                            <!-- Social -->
                            <!-- <div class="auth-form__social">
                                <a href="" class=" auth-form__social--link btn btn--with-icon btn--facebook">
                                    <i class="fab fa-facebook-square"></i> Connect with Facebook
                                </a>
                                <a href="" class="auth-form__social--link btn btn--with-icon btn--google">
                                    <i class="fab fa-google-plus-g"></i> Connect with Google
                                </a>
                            </div> -->
                        </div>
                        <!-- <div class="col l-2 m-0 c-0"></div> -->
                    </div>

                    <?php
                    include './assets/php/connect_db.php';
                    if (isset($_POST['login'])) {
                        $user = $_POST['user'];
                        $pass = $_POST['password'];

                        //refresh data
                        $user = strip_tags($user);
                        $user = addslashes($user);
                        $pass =  strip_tags($pass);
                        $pass = addslashes($pass);

                        if ($user == ''  || $pass == '') {
                            echo '<script>alert("Please, Enter your UserName or Password !");</script>';
                        } else {
                            $sql = "select * from khachhang where(User='$user' AND Password='$pass')";
                            $result = mysqli_query($con, $sql);
                            $num_row = mysqli_num_rows($result);

                            if (($num_row == 0)) {
                                $sql1 = "select * from nhanvien where(User='$user' AND Password='$pass')";
                                $query = mysqli_query($con, $sql1);
                                $num_row1 = mysqli_num_rows($query);
                                if ($num_row1 == 0) {
                                    echo '<script>alert("Please try again, Your UserName or Password is wrong!");</script>';
                                } else {
                                    $_SESSION['user'] = $user;
                                    header('Location: ./admin.php');
                                }
                            } else {
                                $_SESSION['user'] = $user;
                                header('Location: ./index.php');
                            }
                        }
                        mysqli_close($con);
                    }

                    ?>
                    <!-- Login -->
                    <div class="auth-form">
                        <!-- <div class="col l-2 m-0 c-0"></div> -->
                        <!-- Form Container -->
                        <div class="auth-form__login-container">
                            <!-- Header -->
                            <div class="auth-form__header">
                                <h3 class="auth-form__heading">Log In</h3>
                                <span class="auth-form__heading-btn"><a href="./register_login.php?action=register" class="auth-form__heading-btn-link">Register</a></span>
                            </div>
                            <!-- Content -->
                            <form class="auth-form__form" method="POST">
                                <h4 class="text"><b>User:</b></h4>
                                <br> <input type="text" name="user" class="auth-form__input-login">
                                <h4 class="text"><b>Password:</b></h4>
                                <br> <input type="password" name="password" class="auth-form__input-login">
                                <!-- Services -->
                                <div class="auth-form__aside">
                                    <p class="auth-form__policy-text">
                                        <!-- <span class="auth-form__policy-link">Terms of Service</span> and <span class="auth-form__policy-link">Privacy</span> -->
                                        <a href="" class="auth-form__policy-link">Forget Password ?</a>
                                    </p>
                                </div>
                                <!-- Button -->
                                <!-- <div class="auth-form__login-controls"> -->
                                <input class="btn-login" type="submit" name="login" value="LOG IN">
                                <!-- </div> -->
                            </form>
                            <!-- Social -->
                            <!-- <div class="auth-form__social">
                                <a href="" class=" auth-form__social--link btn btn--with-icon btn--facebook">
                                    <i class="fab fa-facebook-square"></i> Connect with Facebook
                                </a>
                                <a href="" class="auth-form__social--link btn btn--with-icon btn--google">
                                    <i class="fab fa-google-plus-g"></i> Connect with Google
                                </a>
                            </div> -->
                        </div>
                        <!-- <div class="col l-2 m-0 c-0"></div> -->
                    </div>
                </div>
            </div>
        </div>

        <?php require './assets/sidebar/footer.php'; ?>
    </div>

    <!-- Sau div toan trang la Modal -->
</body>
<?php ob_flush() ?>

</html>