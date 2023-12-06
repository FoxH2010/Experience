<?php
    include('bootloader.php');
    $location = $_GET['location'];
    $sql = "SELECT location_description FROM location WHERE id = '{$location}'";
    $kq = $db->query($sql);
    $filename = "header.php";

    // Mở file ở chế độ chỉ đọc
    $fp = fopen($filename, "r");
    $html1 = "";
    // Đọc từng đoạn dữ liệu từ file
    while (!feof($fp)) {
        $data = fread($fp, 1024);

        // Xử lý dữ liệu
        $html1 .= $data;
    };

    $filename = "footer.php";

    // Mở file ở chế độ chỉ đọc
    $fp = fopen($filename, "r");
    $html2 = '';
    // Đọc từng đoạn dữ liệu từ file
    while (!feof($fp)) {
        $data = fread($fp, 1024);

        // Xử lý dữ liệu
        $html2 .= $data;
    };
    foreach ($kq as $row->fetch_assoc()){
        $html = implode('',$kq);
    }
    echo($html1 . $html . $html2);
?>