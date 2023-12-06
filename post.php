<?php
    require("bootloader.php");
    if (count($_POST)>0){
        // Xác định tên của input type="file" trong HTML
        $name = "image";

        // Lấy đường dẫn tạm thời của file được upload
        $tmp_name = $_FILES[$name]["tmp_name"];

        // Lấy kích thước của file được upload
        $size = $_FILES[$name]["size"];

        // Lấy mã lỗi của quá trình upload
        $error = $_FILES[$name]["error"];

        // Kiểm tra nếu quá trình upload thành công
        if ($error === UPLOAD_ERR_OK) {

            // Kiểm tra kích thước file
            if ($size > 1000000) {
                echo "Kích thước file quá lớn.";
                return;
            }

            // Lấy tên file
            $filename = basename($_FILES[$name]["name"]);

            // Chuyển file sang thư mục đích
            move_uploaded_file($tmp_name, "contents/" . $filename);

            // Hiển thị thông báo thành công
            echo "File đã được upload thành công.";
        } else {

            // Hiển thị thông báo lỗi
            switch ($error) {
                case UPLOAD_ERR_INI_SIZE:
                    echo "Kích thước file vượt quá giới hạn được phép.";
                    break;
                case UPLOAD_ERR_FORM_SIZE:
                    echo "Kích thước file vượt quá giới hạn được phép của form.";
                    break;
                case UPLOAD_ERR_PARTIAL:
                    echo "File được upload chỉ được upload một phần.";
                    break;
                case UPLOAD_ERR_NO_FILE:
                    echo "Không có file nào được upload.";
                    break;
                case UPLOAD_ERR_NO_TMP_DIR:
                    echo "Không có thư mục tạm thời để lưu trữ file.";
                    break;
                case UPLOAD_ERR_CANT_WRITE:
                    echo "Không thể ghi file vào thư mục đích.";
                    break;
                default:
                    echo "Có lỗi xảy ra trong quá trình upload file.";
            }
        }
        $post_content = "<img src='contents/" . $filename . "'/>" . $_POST['post_content'];
        $kq = $db->query("INSERT INTO post (post_title, post_content, post_author) VALUES ('{$_POST['post_title']}','{$_POST['post_content']}','{$_POST['post_author']}')");
        header("Location: posts.php");

    } else {
        echo <<<EOD
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Experience - Hành trình mùa hè ý nghĩa</title>
        <link href="/includes/sidebar.css" rel="stylesheet"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body style="overflow-x:hidden">
        <div class="row">
            {$sidebar}
            <div class="col-md-9">
                <div class="p-4">
                    <header>
                        <h1>Experience - Hành trình mùa hè ý nghĩa</h1>
                        <p>Cẩm nang cho các chuyến hành trình mùa hè</p>
                    </header>
                    <hr/>
                    <main>
                        <form method="post">
                            <p class="form-label">Tiêu đề bài viết:</p><br/>
                            <input class="form-control" type="text" name="post_title" id="post_title"/><br/>
                            <p class="form-label">Nội dung (HTML):</p><br/>
                            <textarea class="form-control" name="post_content" id="post_content" ></textarea><br/>
                            <p class="form-label">Ảnh:</p></br>
                            <input type="file" name="image" id="image"></br>
                            <p class="form-label">Tác giả:</p><br/>
                            <input class="form-control" type="text" name="post_author" id="post_title"/><br/>
                            <input class="btn btn-success" type="submit">
                        </form>
                    </main>
                    <hr/>
                    <footer>
                        <p>Copyright &copy; 2023 Việt Tuấn - Hoàng Trúc</p>
                    </footer>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>
EOD;
    }
?>