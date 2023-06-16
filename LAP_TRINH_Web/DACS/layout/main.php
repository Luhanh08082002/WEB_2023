<style>
    .sanpham {
        margin-right: 10px;
    }
</style>
<div class="container-fluid">
    <div class="row">
        <?php 
include 'layout/silebar/silebar.php';
?>

        <div class="sanpham col-lg-9">
            <?php 
            if(isset($_GET['a'])){
                $tam = $_GET['a'];
            }else{
                $tam = '';
            }
            if($tam=='danhmucsanpham'){
                    include("main/danhmuc.php");
                     }elseif($tam=='sanphamchitiet'){
                    include("main/sanphamchitiet.php");
                }else{
                    include("main/index.php");
                }
                
            
            ?>
        </div>
    </div>

</div>