<style>
    .ds {
        width: 95.1%;
        border-radius: 13px 13px 0px 0px;
        -webkit-border-radius: 13px 13px 0px 0px;
        -moz-border-radius: 13px 13px 0px 0px;
        background: #92989c;
        height: 35px;
        line-height: 35px;
        margin-left: 31px;
        margin-top: 50px;
    }

    .ds p {
        color: blanchedalmond;
        font-size: 20px;
        padding-left: 20px;
    }

    .dmsp {
        width: 95%;
        margin: 0 auto;
        border: 2px solid #92989c;
    }

    .them {
        height: 50px;
    }

    .them .a {
        padding: 7px 7px;
        color: white;
        background: #303636;
        font-size: 18px;
        line-height: 50px;
        text-decoration: none;
        border-radius: 4px;
    }

    a:hover {
        color: red;
    }
</style>
<div class="main">
    <div class=" container-fluid">
        <div class="row">
            <div class=" col-lg-12 ds">
                <p><?php echo $_GET['action'] ?></p>
            </div>
        </div>
        <div class="dmsp row">

            <div class="col-lg-9">

                <?php 
            if(isset($_GET['action']) && $_GET['query']){
                $tam = $_GET['action'];
                $s = $_GET['query'];
            }else{
                $tam = '';
                $s = '';
            }
            if($tam=='quanlydanhmucsanpham' && $s=='lietke'){

                // include("modues/qldanhmucsanpham/them.php");
                include("modues/qldanhmucsanpham/lietke.php");
                
            }elseif($tam=='quanlydanhmucsanpham' && $s=='them'){

                include("modues/qldanhmucsanpham/them.php");
             
                
            }elseif($tam=='quanlydanhmucsanpham' && $s=='sua'){
                include("modues/qldanhmucsanpham/sua.php");
            }elseif($tam=='quanlysanpham' && $s=='lietke'){
            //    include("modues/qlsanpham/them.php"); 
               include("modues/qlsanpham/lietke.php");
            }elseif($tam=='quanlysanpham' && $s=='them'){
                   include("modues/qlsanpham/them.php");          
            }elseif($tam=='quanlysanpham' && $s=='sua'){
                include("modues/qlsanpham/sua.php");
            }elseif($tam=='Home' && $s=='trangchu'){
                include("modues/Home/trangchu.php");
            }elseif($tam=='Home' && $s=='timkiem'){
                include("modues/Home/timkiem.php");
            }else{
                include("modues/Home/trangchu.php");
                }
?>
            </div>

        </div>
    </div>
</div>

</div>