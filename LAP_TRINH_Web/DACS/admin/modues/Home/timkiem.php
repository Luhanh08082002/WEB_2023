<?php 
include ('../../database/database.php');
if(isset($_POST['timkiem'])){
        $tukhoa = $_POST['tukhoa'];

      }
      $sql_timkiem = "SELECT * FROM ql_sanpham WHERE ql_sanpham.tensanpham LIKE '%".$tukhoa."%'";
      $query_timkiem = mysqli_query($mysqli,$sql_timkiem); 
?>
<div class="table">
        <table>

          <tr style="color: indigo;">
            <th>STT</th>
            <th>Tên Sản Phẩm</th>
            <th>Mã Sản Phẩm</th>
            <th>Giá Tiền</th>
            <th>Danh Mục</th>
            <th>Số Lượng</th>
            <th>Hình Ảnh</th>
            <th>Nội Dung</th>
            <th> Hành Động</th>

          </tr>
          <?php 
        $i = 0;
        while($row = mysqli_fetch_array($query_timkiem)){
        $i++;  
        
        ?>
          <tr>
            <td><?php echo $i ?></t>
            <td><?php echo $row['tensanpham'] ?></th>
            <td><?php echo $row['masanpham'] ?></th>
            <td><?php echo number_format($row['giasanpham'],0,',','.').' _đ'?></th>
            <td><?php echo $row['tendanhmuc'] ?></th>
            <td><?php echo $row['soluong'] ?></th>
            <td><img src="modues/qlsanpham/uploads/<?php echo $row['hinhanh']?> " width="40px" height="40px" style="padding: 3px 3px;"></th>
            <td><?php echo $row['noidung'] ?></th>
            <td><a href="modues/qlsanpham/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>">xóa</a>| <a
                href="?action=quanlysanpham&query=sua&idsanpham=<?php echo $row['id_sanpham'] ?>">Sửa</a></th>
          </tr>

          <?php 
      }
      ?>

        </table>
      </div>