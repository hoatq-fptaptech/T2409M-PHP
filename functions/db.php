<?php 
function ketnoidb(){
    // kết nối db
    $host = 'localhost';
    $user = "root";
    $pass = "root";
    $db = "t2409m_shopping";

    $conn = new mysqli($host,$user,$pass,$db);
    if($conn->connect_error){
        die("Kết nối thất bại");
    }
    return $conn;
}