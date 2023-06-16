<style>
h5{
  font-size: 20px;
  margin-left: 100px;
  margin-top: 50px;
}
.bangthem{
  margin-top: 30px;
  margin-left: 100px;
 
}
td{
  padding: 10px 10px;
}
label{
  font-size: 18px;
  color:  #92989c;
}
input[type=text]{
  padding: 5px 5px;
  width: 300px;
}
</style>
<div> <h5 style="color: indigo;">Thêm Sản Phẩm </h5></div>

<form method="POST" action="modues/qldanhmucsanpham/xuly.php">
<table class="bangthem">
  <tr>
    <td> <label for="">Tên Danh Mục</label></td>
    <td><input type="text" name="tendanhmuc"></td>
 
  </tr>
  <tr>
    <td> <label for="">Thứ Tự</label></td>
    <td><input type="text" name="thutu"></td>
 
  </tr>
<tr>
  <td><input type="submit" name="themdanhmuc" value="Thêm Danh Mục"></td>
</tr>
</table>
</form>
<a href="index.php?action=quanlydanhmucsanpham&query=lietke">trở về Danh Mục</a>
