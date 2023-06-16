<style>
    .taikhoan {
        height: 0 auto;
        margin: 0 auto;
    }
    .adm{
        height: 80px;
      
        margin-bottom:20px;
        border-bottom: 2px solid gray;
    }
    .adm-icon{
        width: 50px;
        height: 50px;
        margin-top: 20px;
        margin-left: 10px;
       line-height: 40px;
        border: 1px solid gray;
        border-radius: 50%;
        font-size: 28px;
    }
   .adm-icon span {
        padding-left: 14px;
        color: gray;
    }
    
   .adm-icon h5{
       font-size: 16px;
       width: 200px;
       margin-left: 60px;
       margin-top: -40px;
   }
   .adm-icon h6{
           font-size: 16px;
           width: 200px;
           margin-left: 70px;
   }
   .adm-icon h6 a{
       text-decoration: none;
   }

    .main-tk {
        height: 0 auto;
        margin: 0 auto;
    }

    .left>ul>li {
        list-style: none; 
        padding: 5px 0px 5px 0px;
    }
    .left >ul>li:hover {
        background: white;

    }
    .left >ul>li>a:hover {
     
        /* background: #f5f5f5; */
        color: red;
        
    }

    .left>ul>li>a {
        text-decoration: none;
        color: black;
        
        font-weight:500;

    }

    .left ul ul li {
        list-style: none;
        padding: 5px 0px 5px 0px;
        margin-left: -65px;     
    }
    .left ul ul li:hover {
        background: #f5f5f5;
        border-right:3px solid cyan ;
        cursor: pointer;
    }
    .left ul ul li a:hover {
        color: red;
    }

    .left ul ul li a {
        margin-left: 60px;
        text-decoration: none;
        color: gray;
        font-weight:500;

    }
    /* HỒ sơ ik */
   
</style>
<div class="col-lg-2 taikhoan">
    <div class="adm"> 
        <div class="adm-icon">
            <span class="fa fa-user"> </span>
            <h5><?php echo $user['username'] ?></h5>
            <h6><a href=""><i class="fal+ fa-pen"></i></span> Sửa hồ sơ </a></h6>
        </div>

    </div>
    <div class="left">
        <ul>
            <li><a href=""><i class="fa fa-user"> </i> Tài Khoản Của Tôi </a>
                <ul >
                    <li><a href="index.php?action=taikhoancuatoi&click=hoso">Hồ Sơ</a></li>
                    <li><a href="index.php?action=taikhoancuatoi&click=nghanhang">Nghân hàng</a></li>
                    <li><a href="index.php?action=taikhoancuatoi&click=diachi">Địa Chỉ </a></li>
                    <li><a href="index.php?action=taikhoancuatoi&click=doimatkhau">Đổi Mật Khẩu</a></li>
                </ul>
            </li>
            <li><a href="index.php?action=taikhoancuatoi&click=donhang"><i class="fa fa-user"></i> Đơn hàng</a></li>
            <li><a href=""><i class="fa fa-user"></i> Thông Báo</a>
                <ul>
                    <li><a href="index.php?action=taikhoancuatoi&click=capnhatdonhang">Cập Nhật Đơn Hàng</a></li>
                    <li><a href="index.php?action=taikhoancuatoi&click=khuyenmai">Khuyến Mãi</a></li>
                    <li><a href="index.php?action=taikhoancuatoi&click=capnhatvi">Cập Nhật Ví</a></li>
                    <li><a href="index.php?action=taikhoancuatoi&click=hoatdong">Hoạt Động</a></li>
                    <li><a href="index.php?action=taikhoancuatoi&click=capnhatdanhgia">Cập Nhật Đánh Giá</li>

                </ul>
            </li>
            <li><a href="index.php?action=taikhoancuatoi&click=khuvoucher"> <i class="fa fa-user"></i> Khu voucher</a></li>
        </ul>
    </div>

</div>
<div class="col-lg-8 main-tk">
    <?php 
            if(isset($_GET['click']) && $_GET['click']== 'hoso' ){
               
            
                    include("maintaikhoan/hoso.php");
                    
                }elseif(isset($_GET['click']) && $_GET['click']== 'nghanhang'){
                    include("maintaikhoan/nghanhang.php");
                }elseif(isset($_GET['click']) && $_GET['click']== 'diachi'){
                    include("maintaikhoan/diachi.php");
                }elseif(isset($_GET['click']) && $_GET['click']== 'doimatkhau'){
                    include("maintaikhoan/doimatkhau.php");
                }elseif(isset($_GET['click']) && $_GET['click']== 'donhang'){
                    include("maintaikhoan/donhang.php");
                }elseif(isset($_GET['click']) && $_GET['click']== 'capnhatdonhang'){
                    include("thongbao/capnhatdonhang.php");
                }elseif(isset($_GET['click']) && $_GET['click']== 'khuyenmai'){
                    include("thongbao/khuyenmai.php");
                }
                elseif(isset($_GET['click']) && $_GET['click']== 'capnhatvi'){
                    include("thongbao/capnhatvi.php");
                }elseif(isset($_GET['click']) && $_GET['click']== 'capnhatdanhgia'){
                    include("thongbao/capnhatdanhgia.php");
                }elseif(isset($_GET['click']) && $_GET['click']== 'hoatdong'){
                    include("thongbao/hoatdong.php");
                }elseif(isset($_GET['click']) && $_GET['click']== 'khuvoucher'){
                    include("thongbao/khuvoucher.php");
                }
                
            
            ?>
</div>