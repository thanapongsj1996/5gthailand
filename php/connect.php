<?php 
    error_reporting(E_ALL);
    //error_reporting(0); //การปิด error ไว้ใช้ตอนเขียน error เอง
    //connect to database
    $conn = new mysqli('localhost', 'root', '', 'blog');
    $conn->set_charset('utf8');

    if($conn->connect_errno) {
        echo "Connect error : ".$conn->connect_error;
        exit();
    }

?>