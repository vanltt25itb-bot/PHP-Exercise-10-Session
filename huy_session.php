
<?php
session_start();

// Xóa riêng Session name
unset($_SESSION['name']);
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Hủy Session</title>
</head>
<body>
    <?php
    echo "Đã xóa Session name!";
    echo "<br>Tuổi còn lưu: " . $_SESSION['age'];
    ?>
</body>
</html>
