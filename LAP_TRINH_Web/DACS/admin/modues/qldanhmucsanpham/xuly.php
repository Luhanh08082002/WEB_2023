<?php

include ('../../database/database.php');
if(!empty($_SESSION['dangnhap'])){
$tendanhmuc = $_POST['tendanhmuc'] ;
$thutu = $_POST['thutu'] ;
if(isset($_POST['themdanhmuc'])){

    // thêm danh mục
    $sql_them = "INSERT INTO ql_danhmuc(tendanhmuc,thutu) VALUE('".$tendanhmuc."','".$thutu."')";
    
    mysqli_query($mysqli,$sql_them);
    header('Location:../../index.php?action=quanlydanhmucsanpham&query=lietke');
}elseif(isset($_POST['suadanhmuc'])){

    // sửa danh mục
    $sql_update = "UPDATE  ql_danhmuc SET tendanhmuc='".$tendanhmuc."',thutu='".$thutu."' WHERE id_danhmuc='$_GET[iddanhmuc]'";
     mysqli_query($mysqli,$sql_update);

    header('Location:../../index.php?action=quanlydanhmucsanpham&query=lietke');
}else{
    $id = $_GET['iddanhmuc'];
    $sql_xoa = "DELETE FROM ql_danhmuc WHERE id_danhmuc='".$id."'"; 
    mysqli_query($mysqli,$sql_xoa);
    header('Location:../../index.php?action=quanlydanhmucsanpham&query=lietke');
}
}else{
    echo'phải đăng nhập mới thực hiện đc <a href="../../login.php">đăng nhập </a>';
}
?>