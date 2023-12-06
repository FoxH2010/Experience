<?php
    require("bootloader.php");
    if (count($_POST)>0){
        $user_name = $_POST['user_name'];
        $password = $_POST["password"];
        $kq = $db->query("SELECT * FROM users WHERE user_name = '{$user_name}' AND password = '{$password}'");
        if (mysqli_num_rows($kq) == 1){
            foreach($kq as $dong){
                setcookie("user_id", $dong['id'], time() + (60 * 60 * 24 * 30), "/");
            }
            $_SESSION["login"] = 1;
            header("Location: index.php");
        } else {
            echo("Sai tên đăng nhập hoặc mật khẩu");
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
            <input class="btn btn-success" type="submit">
        </form>
        <p>Chưa có tài khoản? <a href="signup.php">Đăng ký</a></p>
        </div>
</main>
{$footer}
EOD;
    }
?>