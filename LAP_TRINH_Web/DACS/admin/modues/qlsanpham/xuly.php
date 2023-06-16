<?php
include ('../../database/database.php');

$tensanpham = $_POST['tensanpham'] ;
$masanpham = $_POST['masanpham'] ;
$giatien = $_POST['giasanpham'] ;
$danhmucsanpham = $_POST['danhmucsanpham'] ;
$soluong = $_POST['soluong'] ;
$hinhanh = $_FILES['hinhanh']['name'] ;
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$hinhanh = time().'_'.$hinhanh;
$noidung = $_POST['noidung'] ;
if(isset($_POST['themsanpham'])){

    // thêm danh mục
    $sql_them = "INSERT INTO ql_sanpham(tensanpham,masanpham,giasanpham,danhmucid,soluong,hinhanh,noidung) VALUE('".$tensanpham."','".$masanpham."','".$giatien."','".$danhmucsanpham."','".$soluong."','".$hinhanh."','".$noidung."')";
    
    mysqli_query($mysqli,$sql_them);
    move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
    header('Location:../../index.php?action=quanlysanpham&query=lietke');
}elseif(isset($_POST['suasanpham'])){

    // sửa danh mục
   if($hinhanh_tmp){
    
     move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);

     $sql_update = "UPDATE  ql_sanpham SET tensanpham='".$tensanpham."',masanpham='".$masanpham."',giasanpham='".$giatien."',danhmucid='".$danhmucsanpham."',soluong='".$soluong."',hinhanh='".$hinhanh."',noidung='".$noidung."' WHERE id_sanpham='$_GET[idsanpham]'";
    
    // xóa hình ảnh củ
    $sql = "SELECT * FROM ql_sanpham WHERE id_sanpham = '$_GET[idsanpham]' LIMIT 1";
    
    $query_sql = mysqli_query($mysqli,$sql);
    while($row = mysqli_fetch_array($query_sql)){
       unlink('uploads/'.$row['hinhanh']);
                }
 }  else{
    $sql_update = "UPDATE  ql_sanpham SET tensanpham='".$tensanpham."',masanpham='".$masanpham."',giasanpham='".$giatien."',danhmucid='".$danhmucsanpham."',soluong='".$soluong."',noidung='".$noidung."'WHERE id_sanpham='$_GET[idsanpham]'";
    
}
mysqli_query($mysqli,$sql_update);
    header('Location:../../index.php?action=quanlysanpham&query=lietke');
}else{
// tự động xóa file ảnh trên uploads
 $id = $_GET['idsanpham'];
$sql = "SELECT * FROM ql_sanpham WHERE id_sanpham = '$id' LIMIT 1";
$query_sql = mysqli_query($mysqli,$sql);
 while($row = mysqli_fetch_array($query_sql)){
    unlink('uploads/'.$row['hinhanh']);
}

    $sql_xoa = "DELETE FROM ql_sanpham WHERE id_sanpham='".$id."'"; 
    mysqli_query($mysqli,$sql_xoa);
    header('Location:../../index.php?action=quanlysanpham&query=lietke');
}
?>