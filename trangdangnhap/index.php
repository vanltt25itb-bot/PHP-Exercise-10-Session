
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h1>Đăng Nhập</h1>

    <form action="dangnhap_xuly.php" method="post">
        <table>
            <tr>
                <td><label>Username:</label></td>
                <td><input type="text" name="username" required></td>
            </tr>
            <tr>
                <td><label>Password:</label></td>
                <td><input type="password" name="password" required></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="checkbox" name="remember">
                    <span>Remember</span>
                </td>
            </tr>
            <tr>
                <td><input type="submit" value="Login" name="login"></td>
                <td><input type="submit" value="Cancel" name="cancel"></td>
            </tr>
        </table>
    </form>
</body>
</html>
