<?php
    require("bootloader.php");
    if (count($_POST)>0){
        $user_name = $_POST['user_name'];
        $password = $_POST["password"];
        $email = $_POST['email'];
        $sql = "SELECT * FROM users WHERE email = '$email';";
        $result = $db->query($sql);
        if ($result->num_rows > 0) {
            echo("Email đã được sử dụng");
        } else {
            $kq = $db->query("INSERT INTO users (user_name, password, email) VALUES ('{$user_name}','{$password}','{$email}')");
            header("Location: login.php");
        }
    } else {
        include("header.php");
        echo <<< EOD
<main>
    <div style="width: 20%; margin: 0 auto;">
        <form method="post">
            <p class="form-label">Tên đăng nhập:</p><br/>
            <input class="form-control" type="text" name="user_name" id="user_name"/><br/>
            <p class="form-label">Mật khẩu:</p><br/>
            <input type="password" class="form-control" name="password" id="password"/><br/>
            <p class="form-label">Email:</p><br/>
            <input type="email" class="form-control" name="email" id="email"/><br/>
            <input class="btn btn-success" type="submit">
        </form>
        <p>Đã có tài khoản? <a href="login.php">Đăng nhập</a></p>
    </div>
</main>
{$footer}
EOD;
    }
?>