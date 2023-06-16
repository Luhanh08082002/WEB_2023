
<?php 
$sql_hienthi_danhmucsanpham = "SELECT * FROM ql_danhmuc ORDER BY id_danhmuc DESC";
$hienthi_danhmuc = mysqli_query($mysqli,$sql_hienthi_danhmucsanpham); 
?>
<style>



.slibar {
    margin: 0 auto;
}
.slibar ul {
list-style: none;
border: 2px solid grey;
width: 270px;

}
.dmsp{
    margin-left: -32px;
    background: green;
    padding: 10px 0px 10px 40px;
    

}
.dmsp  .a{
    padding-left: 30px;
    color: white;
}
.slibar ul li{
    padding: 10px 0px 10px 10px;
    cursor: pointer;
}
.slibar ul li a{
    text-decoration: none;
    color:grey;
    font-size: 16px;
    font-family: 'Times New Roman', Times, serif;
    font-weight: bold;
   
}
.slibar ul .b:hover{
    background: #f5f5f5;
    margin-left: -33px;
    padding: 10px 0px 10px 40px;

}
</style>

<div class="slibar col-lg-2">
    <ul>
    <li class="dmsp">
            <a class="a" href="">DANH MỤC SẢN PHẨM
            </a>
        </li>
        <?php 
                 while($row_hienthi = mysqli_fetch_array($hienthi_danhmuc)){
                 ?>
        <li class="b">
            <a href="index.php?a=danhmucsanpham&id=<?php echo $row_hienthi['id_danhmuc']?>"><?php echo $row_hienthi['tendanhmuc']?>
            </a>
        </li>
        <?php }?>

    </ul>
</div>