
<div class="container-fluid">

    <div class="row">
        
            <?php 
            if(isset($_GET['action'])){
                $tam = $_GET['action'];
            }else{
                $tam = '';
            }
            if($tam=='trangchu'){
                    include("layout/main.php");
                }elseif($tam=='lienhe'){
                    include("hienthicautruc/lienhe.php");
                }elseif($tam=='gioithieu'){
                    include("hienthicautruc/gioithieu.php");
                }elseif($tam=='giohang'){
                    include("hienthicautruc/giohang.php");
                }elseif($tam=='gio'){
                    include("hienthicautruc/gio.php");
                }elseif($tam=='thanhtoan'){
                    include("hienthicautruc/thanhtoan.php");
                }elseif($tam=='dangnhap'){
                    include("hienthicautruc/dangnhap.php");
                }elseif($tam=='dangky'){
                    include("hienthicautruc/dangky.php");
                }elseif($tam=='tintuc'){
                    include("hienthicautruc/tintuc.php");
                }elseif($tam=='taikhoancuatoi'){
                    include("hienthicautruc/taikhoancuatoi.php");
                
                }else{
                    
                    include("layout/main.php");
                }
                
            
            ?>
        
    </div>

</div>