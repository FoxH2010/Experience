<?php
    $school = $_GET['school'];
    require('bootdatabase.php');
    include("header.php")
?>
<main>
    <?php
        if ($school=='primary'){
            echo <<<EOD
<main>
    <h2>Dành cho học sinh tiểu học</h2>
    <p>Các địa điểm du lịch dành cho học sinh tiểu học</p>
    <ul>
        <li>
            <p>Hà Nội</p>
        </li>
        <li>
            <p>Hạ Long, Quảng Ninh</p>
        </li>
    </ul>
</main>
EOD;
        } elseif ($school=='secondary'){
            echo <<<EOD
<main>
    <h2>Dành cho học sinh trung học cơ sở</h2>
    <p>Các địa điểm du lịch dành cho học sinh trung học cơ sở</p>
    <ul>
        <li>
            <p>Huế</p>
        </li>
        <li>
            <p>Đà Nẵng</p>
        </li>
    </ul>
</main>
EOD;
        } elseif ($school=='')
    ?>
</main>
<?php include("footer.php");?>