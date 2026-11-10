
<?php
session_start();
include("connect.php");

if (isset($_POST['cancel'])) {
    header("Location: index.php");
    exit();
}

if (isset($_POST['login'])) {
    $name = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM users WHERE Username = ? AND Password = ?";
    $stmt = mysqli_prepare($connect, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $name, $pass);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);

    if ($row) {
        $_SESSION['username'] = $name;
        $_SESSION['password'] = $pass;

        if (isset($_POST['remember'])) {
            setcookie("username", $name, time() + 60, "/");
            setcookie("password", $pass, time() + 60, "/");
        }

        header("Location: trangquantriadmin.php");
        exit();
    } else {
        echo "<script>alert('Login Failed!'); location.href='index.php';</script>";
        exit();
    }
}
?>
