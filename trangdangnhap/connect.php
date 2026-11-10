
<?php
$connect = mysqli_connect("localhost", "root", "", "tintuc1");

if (!$connect) {
    die("Không thể kết nối Database: " . mysqli_connect_error());
}

mysqli_set_charset($connect, "utf8");
?>
