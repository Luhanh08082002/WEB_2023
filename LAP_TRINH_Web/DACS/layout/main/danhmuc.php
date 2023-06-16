<?php 

   $sql_hienthi = "SELECT * FROM ql_sanpham where ql_sanpham.danhmucid ='$_GET[id]' ORDER BY id_sanpham DESC";
   $hienthi_sanpham = mysqli_query($mysqli,$sql_hienthi); 
?>

<style>
    .cart {
        border: 1px solid gray;
        width: 250px;
        height: 310px;
        float: left;
        margin-right: 20px;
        margin-bottom: 40px;
    }

    .list-cart {
        text-align: center;
    }
</style>
<?php 
   $sql_cate = "SELECT * FROM ql_danhmuc where ql_danhmuc.id_danhmuc='$_GET[id]' LIMIT 1";
   $hienthi_cate = mysqli_query($mysqli,$sql_cate);
  while( $query_title = mysqli_fetch_array($hienthi_cate)){
?>
<p>
    danh mục sản phẩm / <?php  echo $query_title['tendanhmuc'] ?>
</p>
<?php } ?>
<?php
while($row = mysqli_fetch_array($hienthi_sanpham)) { ?>
<a href="index.php?a=sanphamchitiet&id=<?php echo $row['id_sanpham']?>">
    <div class="cart">
        <div class="list-cart">

            <img class="anh" src="admin/modues/qlsanpham/uploads/<?php echo $row['hinhanh']?> " width="200px"
                height="200px">
            <p><?php echo $row['tensanpham'] ?></p>
            <p style="color: red;">giá tiền : <?php echo number_format($row['giasanpham'],0,',','.').' _đ'  ?></p>
        </div>
    </div>
</a>
<?php } ?>