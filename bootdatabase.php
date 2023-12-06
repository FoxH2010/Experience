<?php
    // set absolut & base path
    define('ABSPATH', dirname(__FILE__) . '/');
    define('BASEPATH', dirname($_SERVER['PHP_SELF']));


    require(ABSPATH . "includes/config.php");


    $db = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);
    $db->set_charset('utf8mb4');
    if ($db->connect_error){
        die("Kết nối cơ sở dữ liệu thất bại: " . $db->connect_error);
    };
        /* set db time to UTC */
    $db->query("SET time_zone = '+0:00'");
?>