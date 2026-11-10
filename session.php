
<?php
session_start();

// Khởi tạo Session nếu chưa tồn tại
if (!isset($_SESSION['name'])) {
    $_SESSION['name'] = "hocweb.com.vn";
    $_SESSION['age'] = 120;
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Session</title>
</head>
<body>
    <?php
    echo "Tên bạn là: " . $_SESSION['name'] . "<br>";
    echo "Số tuổi của bạn: " . $_SESSION['age'] . "<br>";
    ?>

    <a href="test_session.php">Click here!</a>
</body>
</html>
