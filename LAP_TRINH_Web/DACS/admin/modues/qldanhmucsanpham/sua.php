<?php 

$sql_sua_danhmucsanpham = "SELECT * FROM ql_danhmuc WHERE id_danhmuc='$_GET[iddanhmuc]' LIMIT 1";
$sua_danhmuc = mysqli_query($mysqli,$sql_sua_danhmucsanpham); 


?>

<table   >
    <form method="POST" action="modues/qldanhmucsanpham/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc'] ?>">
    <?php 
    while($dong = mysqli_fetch_array($sua_danhmuc)) {
    ?>
  <tr>
    
    <th>TÊN DANH MỤC</th>
    <th>THỨ TỰ</th>
  </tr>
  <tr>

    <th><input type="text" value="<?php echo $dong['tendanhmuc'] ?>"  name="tendanhmuc"></th>
    <th><input type="text" value="<?php echo $dong['thutu'] ?>" name="thutu"> </th>  
  </tr>

  <tr>
    <td><input type="submit" name="suadanhmuc" value="sửa danh mục sản phẩm"></td>
      
  </tr>
  <?php 
  }
  ?>
    </form>
</table>
<a href="index.php?action=quanlydanhmucsanpham&query=lietke">trở về Danh Mục</a>