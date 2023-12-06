<?php
    $id = $_GET['id'];
    require('bootdatabase.php');
    $kq = $db->query("SELECT * FROM post WHERE id = '{$id}'");
    include("header.php");
?>
<main>
    <div style="width: 60%; margin: 0 auto;">
        <a href="post.php" class="btn btn-success">Đăng bài</a><br/><br/>
        <?php
            foreach ($kq as $dong) {
                echo '<div style="border-style:groove;">';
                echo '<h3><b>' . $dong['post_title'] . '</b></h3><br/><br/>';
                echo '<p>' . $dong['post_content'] . '</p>';
                echo '<p>Tác giả: ' . $dong['post_author'] . '</p>';
                echo '</div>';
            }
        ?>
    </div>
</main>
<br/><br/>
<?php include("footer.php");?>