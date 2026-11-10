
<?php
session_start();

if (isset($_COOKIE['username'])) {
    $username = $_COOKIE['username'];
} elseif (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
} else {
    echo "<script>alert('Bạn chưa đăng nhập!'); location.href='index.php';</script>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Trang quản trị</title>
</head>
<body>
    <h2>Trang Quản Trị</h2>
    <p>Xin chào: <?php echo htmlspecialchars($username); ?></p>
    <a href="logout.php">Logout</a>
</body>
</html>
