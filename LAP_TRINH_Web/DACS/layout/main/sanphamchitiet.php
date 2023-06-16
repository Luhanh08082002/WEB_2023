
<?php 
if(!isset($_SESSION['giohang'])) $_SESSION['giohang']= [];
if(isset($_POST['themgiohang'])){
  $hinhanh = $_POST['hinhanh'] ;
   $tensanpham = $_POST['tensanpham'] ;
   $masanpham = $_POST['masanpham'] ;
   $danhmuc = $_POST['tendanhmuc'] ;
   $soluong = $_POST['soluong'];
   $giatien = $_POST['giasanpham'] ;
  //  if($_POST['themgiohang']>0){
  //  $sql_themgiohang ="INSERT INTO giohang(hinh_anh,tensanpham,masanpham,tendanhmuc,soluong,giatien) VALUE ('$hinhanh','$tensanpham','$masanpham','$danhmuc','$soluong','$giatien')";
  // $query_giohang = mysqli_query($mysqli, $sql_themgiohang);
  //  }
   // kiểm tra sp có trong giỏ hàng hay không ?
   $fl = 0;
   for($i=0 ; $i < sizeof($_SESSION['giohang']); $i++){
     if($_SESSION['giohang'][$i][1]==$tensanpham){
       $fl=1;
       $soluongnew = $soluong+$_SESSION['giohang'][$i][5];
       $_SESSION['giohang'][$i][5] =$soluongnew;
       
       break;
     }
   }
if($fl == 0){
  // thêm mới vào giỏ hàng
  $sp=[$hinhanh,$tensanpham,$masanpham,$danhmuc,$giatien,$soluong];
   $_SESSION['giohang'][]=$sp;
}


   if(isset($_SESSION['giohang'])){
    // $_SESSION['giohang'] =  mysqli_insert_id($sql_themgiohang);
    echo "<script>location.href='index.php?action=gio';</script>";

      }else{
        echo "ko lối thoát";
      }
    }

$sql_chitiet = "SELECT * from ql_sanpham,ql_danhmuc WHERE ql_sanpham.danhmucid=ql_danhmuc.id_danhmuc AND ql_sanpham.id_sanpham='$_GET[id]' LIMIT 1";
$query_chitiet =mysqli_query($mysqli,$sql_chitiet);
while($row_chitiet = mysqli_fetch_array($query_chitiet)){
    
?>
<style>
.anh{
    border: 1px solid gray;
}
.chitiet{
    margin-top: 40px;
}
.addcart{
    border: none;
    background: brown;
    color: #fff;
    padding: 10px;
    font-size: 15px;
    cursor: pointer;
    margin-top: 20px;
}

</style>
<div class="container">
   <div class="row">
     <div class="col-lg-4">
     
     <p>sản phẩm chi tiết</p>
       <img class="anh" src="admin/modues/qlsanpham/uploads/<?php echo $row_chitiet['hinhanh']?>  " width="350px" height="350px" > 
     </div>
     <div class="col-lg-8">
        <div class="chitiet">
       <h5 > Tên sản phẩm :<?php echo $row_chitiet['tensanpham'] ?></h5>
       <p >giá tiền :<?php echo number_format($row_chitiet['giasanpham'],0,',','.').' VND'  ?></p>
       <p >Mã sản phẩm :<?php echo $row_chitiet['masanpham']  ?></p>
       <p > số lượng: <?php echo $row_chitiet['soluong']  ?></p>
       <p > nội dung :<?php echo $row_chitiet['noidung']  ?></p>
        </div>
        <div>
        <form method="POST" action="">
        <input type="hidden" name="hinhanh" value="<?php echo $row_chitiet['hinhanh'] ?>">
        <input type="hidden" name="tensanpham" value="<?php echo $row_chitiet['tensanpham'] ?>">
        <input type="hidden" name="masanpham" value="<?php echo $row_chitiet['masanpham'] ?>">
        <input type="hidden" name="tendanhmuc" value="<?php echo $row_chitiet['tendanhmuc'] ?>">
        <input  type="number" min="1" max="15" name="soluong" value="1">
        <input type="hidden" name="giasanpham" value="<?php echo $row_chitiet['giasanpham']?>">
        <p ><input class="addcart " type="submit" name="themgiohang"value="Thêm giỏ hàng" ></p>
       </form>
        </div>
       
     </div>
   </div>
</div>
<?php } ?>

