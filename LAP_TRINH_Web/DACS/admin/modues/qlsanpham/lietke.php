      <?php 
      $sql_lietke_sanpham = "SELECT * FROM ql_sanpham,ql_danhmuc WHERE ql_sanpham.danhmucid=ql_danhmuc.id_danhmuc ORDER BY id_sanpham DESC";
      $lietke_sanpham = mysqli_query($mysqli,$sql_lietke_sanpham); 
      ?>
      <style>
        .table {
          padding: 10px 10px;

        }

        table,
        th,
        td {
          border: 1px solid gray;
          font-weight: bold;
        }

        table {
          /* border-collapse:collapse; */
          width: 100%;
          border-collapse: collapse;
          text-align: center;


        }

        th {
          height: 30px;
          text-align: center;
          /* width: 30px; */
          background: #92989c;
        }

        tr:hover {
          background-color: #ddd;
          cursor: pointer;
          box-shadow: inset 1px 0 0 #dadce0, inset -1px 0 0 #dadce0, 0 1px 2px 0 rgb(60 64 67 / 30%), 0 1px 3px 1px rgb(60 64 67 / 15%);
    z-index: 2;
        }
        .timkiem{
          padding: 30px 10px 15px 10px;
        }

        fieldset {
          padding: 5px 7px;
        }
      </style>
      <div>
        <form class="timkiem" action="modues/Home/timkiem.php" method="post">
          <fieldset>
            <legend> Tìm Kiếm Sản Phẩm</legend>
            Từ khóa <input type="text" name="tukhoa">
            <input type="submit" name="timkiem" value="tìm kiếm">
          </fieldset>
        </form>
      </div>
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
        while($row = mysqli_fetch_array($lietke_sanpham)){
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
      <div class="them col-lg-12">
        <a class="a" href="index.php?action=quanlysanpham&query=them"> thêm Sản Phẩm</a>
      </div >