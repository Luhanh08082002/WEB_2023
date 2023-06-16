<?php 

$sql_sua_sanpham = "SELECT * FROM ql_sanpham,ql_danhmuc WHERE id_sanpham='$_GET[idsanpham]' LIMIT 1";
$sua_sanpham = mysqli_query($mysqli,$sql_sua_sanpham); 


?>

<style> 

input[type="text"]{
    width: 100%;
    margin-bottom: 15px;
}
.them{
    margin: 0px 20px 30px -5px;
}
button{
    background: #0066FF;
    color: white;
    font-weight: bold;
}

</style>
  <form method="POST" action="modues/qlsanpham/xuly.php?idsanpham=<?php echo $_GET['idsanpham'] ?>" enctype="multipart/form-data">
    <?php 
    while($dong = mysqli_fetch_array($sua_sanpham)) {
    ?>
<div class="container-fluid">
<div class="row">
<div class="col-lg-3">
    <h6>TÊN SẢN PHẨM</h6>
    <input type="text" value="<?php echo $dong['tensanpham'] ?>"  name="tensanpham">
    
</div>
<div class="col-lg-2">
    <h6>MÃ SẢN PHẨM</h6>
    <input type="text" value="<?php echo $dong['masanpham'] ?>" name="masanpham">
    
    
</div>
<div class="col-lg-2">
    <h6>GIÁ TIỀN</h6>
    <input type="text" value="<?php echo $dong['giasanpham'] ?>" name="giasanpham"> 
      
</div>
<div class="col-lg-2">
    <h6>DANH MỤC SẢN PHẨM</h6>
    <select name="danhmucsanpham">
    <?php 
    $sql ="SELECT * FROM ql_danhmuc ORDER BY id_danhmuc DESC";
    $query = mysqli_query($mysqli,$sql);
    while($row = mysqli_fetch_array($query)){ 
      if($row['id_danhmuc']==$row['id_danhmuc']) {
    ?>
    <option selected value="<?php echo $row['id_danhmuc'] ?>"><?php echo $row['tendanhmuc'] ?>
    </option>
    <?php }else{ ?>
      <option  value="<?php echo $row['id_danhmuc'] ?>"><?php echo $row['tendanhmuc'] ?>
    </option>

      <?php } 
      }
      ?>
    </select>
    
</div>
<div class="col-lg-2" >
    <h6>SỐ LƯỢNG</h6>
    <input type="text" value="<?php echo $dong['soluong'] ?>" name="soluong">
    
    
</div>
<div class="col-lg-3">
    <h6>HÌNH ẢNH</h6>
    <input type="file" name="hinhanh"> 
    <img src="modues/qlsanpham/uploads/<?php echo $dong['hinhanh']?> " width="100px" height="100px">
    
</div>
<div class="col-lg-3">
    <h6>NỘI DUNG</h6>
    <input type="text" value="<?php echo $dong['noidung'] ?>" name="noidung">
</div>
<div class="them col-lg-12" >
<button type="submit" name="suasanpham">SỬA SẢN PHẨM</button>
<a href="index.php?action=quanlysanpham&query=lietke">QUAY LẠI </a>
</div>
<?php 
  }
  ?>
</div>
</div>

</form>


