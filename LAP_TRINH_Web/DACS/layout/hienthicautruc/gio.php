<style>
  .trua {
    text-align: center;
  }
</style>

          <?php

if(isset($_GET['xoaid']) && ($_GET['xoaid']>=0)){
array_splice($_SESSION['giohang'],$_GET['xoaid'],1);

}

   function showgiohang(){
  
       if(isset($_SESSION['giohang']) && (is_array($_SESSION['giohang']))){
         if(sizeof($_SESSION['giohang'])>0 ){
           echo'<div class="container">
           <div class="row">
             <div class="giohanga col-lg-12">
               <div class="trua">
                 <h4> GIỎ HÀNG xin Chào Bạn</h4>
         
                 <table style="margin:0 auto;">
            <tr >
           <th width="50px">STT</th>
           <th width="200px">Hình Ảnh</th>
           <th width="200px"> Tên Sản Phẩm</th>
           <th width="150px">Mã Sản Phẩm</th>
           <th width="150px">Danh Mục </th>
           <th width="150px">Giá Tiền</th>
           <th width="100px">Số Lượng</th>
           <th width="100px">Thành Tiền</th>
           <th width="100px">Hành Động</th>
         </tr>
  ';
         $tong = 0;
           for($i=0; $i<sizeof($_SESSION['giohang']); $i++){
            $tinhtien=$_SESSION['giohang'][$i][4] * $_SESSION['giohang'][$i][5];
            $tong+=$tinhtien;
               echo' 
               <tr>
               <td>'.($i+1).'</td>
               <td><img src="admin/modues/qlsanpham/uploads/'.$_SESSION['giohang'][$i][0].'" width=100px height=100px></td>
               <td>'.$_SESSION['giohang'][$i][1].'</td>
               <td>'.$_SESSION['giohang'][$i][2].'</td>
               <td>'.$_SESSION['giohang'][$i][3].'</td>
               <td>'.number_format($_SESSION['giohang'][$i][4],0,',','.').' _đ'.'</td>
               <td>'.$_SESSION['giohang'][$i][5].'</td>

               <td>
               <div>'.number_format($tinhtien,0,',','.'),' _đ' .'</div>
               </td>
               <td><a href="index.php?action=gio&xoaid='.$i.'">xóa</a></td>
               </tr> ';
           }       
           echo '<tr>
           <th colspan="7" style="font-size:30px;"> Tổng Đơn Hàng </th>
           <th>
           <div>'.number_format($tong,0,',','.').' _đ'.'</div>
           </th>
           </tr>
           ' ;
          }else{
            echo'<div class="container">
           <div class="row">
             <div class="giohanga col-lg-12">
               <div class="trua">
                 <h4> GIỎ HÀNG xin Chào Bạn</h4>
         
                 <table style="margin:0 auto;">
            <tr >
           <th width="50px">STT</th>
           <th width="200px">Hình Ảnh</th>
           <th width="200px"> Tên Sản Phẩm</th>
           <th width="150px">Mã Sản Phẩm</th>
           <th width="150px">Danh Mục </th>
           <th width="150px">Giá Tiền</th>
           <th width="100px">Số Lượng</th>
           <th width="100px">Thành Tiền</th>
           <th width="100px">Hành Động</th>
         </tr>
  ';
  echo'Giỏ hàng rỗng';
          }
    }
?>

        </table>
      </div>
      <div class="list-t">
        <button> <a href="index.php?action=trangchu">Tiếp Tục Mua Hàng </a></button>
        <button> <a href="index.php?action=thanhtoan">Đặt Hàng </a> </button>
      </div>
    </div>
  </div>
</div>

<?php   
   }
    
?>
    <?php
    showgiohang();
  
   ?>