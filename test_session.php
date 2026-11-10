
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Test Session</title>
</head>
<body>
    <?php
    echo "Chào bạn " . $_SESSION['name'];
    echo " có tuổi là: " . $_SESSION['age'];
    ?>

    <br>
    <a href="huy_session.php">Hủy Session</a>
</body>
</html>
