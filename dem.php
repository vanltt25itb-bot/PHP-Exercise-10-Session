
<?php
session_start();

if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 1;
} else {
    $_SESSION['count']++;
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đếm Session</title>
</head>
<body>
    <h2>Số lần truy cập: <?php echo $_SESSION['count']; ?></h2>
    <a href="tang.php">Next</a>
</body>
</html>
