<?php

 $sql = "SELECT * FROM ql_sanpham,ql_danhmuc WHERE ql_sanpham.danhmucid=ql_danhmuc.id_danhmuc ORDER BY id_sanpham DESC LIMIT 15";
$hienthi_sanpham = mysqli_query($mysqli,$sql); 


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

    .cart:hover {
        background: #CCFFFF;
        transition: 1.5s;

    }

    .list-cart {
        text-align: center;
    }
</style>
<p>Sản phẩm được hiển thị</p>
<?php
while($row = mysqli_fetch_array($hienthi_sanpham)) { ?>
<a href="index.php?a=sanphamchitiet&id=<?php echo $row['id_sanpham']?>">
    <div class="cart">
        <div class="list-cart">
            <img class="anh" src="admin/modues/qlsanpham/uploads/<?php echo $row['hinhanh']?> " width="200px"
                height="200px">
            <p><?php echo $row['tensanpham'] ?></p>
            <h5 style="color: red;margin-top:-20px;">giá tiền :
                <?php echo number_format($row['giasanpham'],0,',','.').' _đ'  ?></h5>

            <p style="color: #d1d1d1;font-size: 16px; "> <?php echo $row['tendanhmuc'] ?></p>

        </div>
    </div>
</a>
<?php } ?>