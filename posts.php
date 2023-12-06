<?php include("header.php");?>
<main>
    <a href="post.php" class="btn btn-success float-end">Đăng bài</a><br/>
    <h2>Các bài viết khác:</h2>
    <?php
        require("bootdatabase.php");
        $kq = $db->query("SELECT * FROM post;");
        foreach ($kq as $dong) {
            echo '<div style="border-style:groove;">';
            echo 'Tiêu đề:&nbsp<a href="article.php?id='.$dong['id'].'"><b>' . $dong['post_title'] . '</b></a><br/>';
            echo '<p>Tác giả: ' . $dong['post_author'] . '</p>';
            echo '</div>';
        }
        // Ngắt kết nối cơ sở dữ liệu
        $db->close();
    ?>
</main>
<?php include("footer.php");?>