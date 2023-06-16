<?php 
$sql_lietke_danhmucsanpham = "SELECT * FROM ql_danhmuc ORDER BY thutu DESC";
$lietke_danhmuc = mysqli_query($mysqli,$sql_lietke_danhmucsanpham); 
?>
<style>
  table,
  th,
  td {
    /* border-collapse:collapse; */
    /* width: 50%; */
    border: 1px solid gray;
    font-weight: bold;

  }

  th {
    text-align: center;
    padding: 10px 10px;
    width: 30px;
    background: #92989c;
  }

  td {
    padding: 5px 0px 5px 0px;
  }

  table {
    /* border-collapse:collapse; */
    width: 100%;
    border-collapse: collapse;
    text-align: center;
    padding: 10px 10px;
    margin-bottom: 50px;



  }


  tr:hover {
    background-color: #ddd;
    cursor: pointer;
    box-shadow: inset 1px 0 0 #dadce0, inset -1px 0 0 #dadce0, 0 1px 2px 0 rgb(60 64 67 / 30%), 0 1px 3px 1px rgb(60 64 67 / 15%);
    z-index: 2;
  }
</style>
<div class="them col-lg-12">
  <a class="a" href="index.php?action=quanlydanhmucsanpham&query=them"> thêm danh mục</a>
</div>
<table>
  <tr style="color: indigo;">
    <th>ID </th>
    <th>TÊN DANH MỤC</th>
    <th> HÀNH ĐỘNG</th>

  </tr>
  <?php 
  $i = 0;
  while($row = mysqli_fetch_array($lietke_danhmuc)){
  $i++;  
  
  ?>
  <tr>
    <td><?php echo $i ?></td>
    <td><?php echo $row['tendanhmuc'] ?></td>
    <td><a href="modues/qldanhmucsanpham/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc'] ?>">xóa</a>| <a
        href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Sửa</a></td>
  </tr>

  <?php 
}
?>

</table>