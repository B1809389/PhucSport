<?php
include './assets/php/connect_db.php';
$check = mysqli_query($con, "select * from hanghoa where MSHH='ss_001'");
$row = mysqli_fetch_array($check);
$a = explode("/", $row['MoTa']);
echo $a[1];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="product__special-info">
        <p class="product__special-text"><b>Công nghệ màn hình:</b> AMOLED</p>
        <p class="product__special-text"><b>Độ phân giải:</b> Full HD+ (1080 x 2400 Pixels), Chính 64 MP & Phụ 8 MP, 2 MP, 2 MP, 44 MP</p>
        <p class="product__special-text"><b>Màn hình rộng:</b>  6.78"</p>
        <p class="product__special-text"><b>Hệ điều hành:</b> ROG UI</p>
        <p class="product__special-text"><b>Chip xử lý (CPU):</b> Snapdragon 888 8 nhân</p>
        <p class="product__special-text"><b>Bộ nhớ trong (ROM):</b> 256 GB</p>
        <p class="product__special-text"><b>RAM:</b> 16 GB</p>
        <p class="product__special-text"><b>Mạng di động:</b> Hỗ trợ 4G</p>
        <p class="product__special-text"><b>Số khe sim:</b> 2 Nano SIM </p>
        <p class="product__special-text"><b>Trọng lượng:</b> 228 g</p>
        <p class="product__special-text"><b>Dung lượng pin:</b> 6000 mAh</p>
    </div>
</body>

</html>