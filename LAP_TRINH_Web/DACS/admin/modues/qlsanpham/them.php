
<!--     
<style>
    .col-3{

     width: 15.33%;
      margin: 40px 3%; 
      position: relative;} 
input[type="text"]{font: 15px/24px "Lato", Arial, sans-serif; color: #333; width: 100%; box-sizing: border-box; letter-spacing: 1px;}


.effect-7{
    border: 1px solid #ccc; 
    padding: 7px 14px 9px; 
    transition: 0.4s;
    } 

.effect-7 ~ .focus-border:before,
.effect-7 ~ .focus-border:after{
    content: "";
     position: absolute;
      top: 0; 
    left: 50%;
 width: 0; 
 height: 2px;
  background-color: #3399FF; 
  transition: 0.4s;
  }
.effect-7 ~ .focus-border:after{top: auto; bottom: 0;}
.effect-7 ~ .focus-border i:before,
.effect-7 ~ .focus-border i:after{content: ""; position: absolute; top: 50%; left: 0; width: 2px; height: 0; background-color: #3399FF; transition: 0.6s;}
.effect-7 ~ .focus-border i:after{left: auto; right: 0;}
.effect-7:focus ~ .focus-border:before,
.effect-7:focus ~ .focus-border:after{left: 0; width: 100%; transition: 0.4s;}
.effect-7:focus ~ .focus-border i:before,
.effect-7:focus ~ .focus-border i:after{top: 0; height: 100%; transition: 0.6s;}

</style>


<div class="col-3">
        	<input class="effect-7" type="text" placeholder="Placeholder Text">
            <span class="focus-border">
            	<i></i>
            </span>
        </div> -->
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


        <form method="POST" action="modues/qlsanpham/xuly.php" enctype="multipart/form-data">
<div class="container-fluid">
<div class="row">
<div class="col-lg-3">
    <h6>TÊN SẢN PHẨM</h6>
    <input type="text" name="tensanpham">
    
    
</div>
<div class="col-lg-2">
    <h6>MÃ SẢN PHẨM</h6>
    <input type="text" name="masanpham">
    
    
</div>
<div class="col-lg-2">
    <h6>GIÁ TIỀN</h6>
    <input type="text" name="giasanpham">
      
</div>
<div class="col-lg-2">
    <h6>DANH MỤC SẢN PHẨM</h6>
    <select name="danhmucsanpham">
    <?php 
    $sql ="SELECT * FROM ql_danhmuc ORDER BY id_danhmuc DESC";
    $query = mysqli_query($mysqli,$sql);
    while($row = mysqli_fetch_array($query)){  
    ?>
    <option value="<?php echo $row['id_danhmuc'] ?>"><?php echo $row['tendanhmuc'] ?>
    </option>
    <?php } ?>
    </select>
    
</div>
<div class="col-lg-2" >
    <h6>SỐ LƯỢNG</h6>
    <input type="text" name="soluong"> 
    
    
</div>
<div class="col-lg-3">
    <h6>HÌNH ẢNH</h6>
    <input type="file" name="hinhanh">
    
</div>
<div class="col-lg-3">
    <h6>NỘI DUNG</h6>
    <input type="text" name="noidung">
</div>
<div class="them col-lg-12" >
<button type="submit" name="themsanpham">THÊM SẢN PHẨM</button>
<a href="index.php?action=quanlysanpham&query=lietke">QUAY LẠI </a>
</div>
</div>
</div>
</form>


