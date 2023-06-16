<?php 
$mysqli = new mysqli("localhost","root","nguyenngocthang123","dacs");
if($mysqli->connect_error){
    echo "--lỗi kết nối với MYSQL --" . $mysqli->connect_error;
    exit();
}
?>