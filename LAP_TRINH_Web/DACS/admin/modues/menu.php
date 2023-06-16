<?php 
if(isset($_GET['dangxuat']) && $_GET['dangxuat']== 1){
      unset($_SESSION['user']);
    header('Location:login.php');
  
  }
?>
<style>
    * {
        margin: 0;
        padding: 0;
        user-select: none;
        box-sizing: border-box;
    }

    .silebar {
        width: 250px;
        height: 100%;
        background: #2A3F54;
        position: fixed;
        float: left;
    }

    .silebar .tenshop {
        line-height: 75px;
        font-weight: bold;
        font-size: 30px;
        color: white;
        text-align: center;
    }

    .logo {
        padding-bottom: 40px;
    }

    .logoanh {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        float: left;
        padding: 2px;
        background: lemonchiffon;
        margin-left: 10px;
    }

    .logo p {
        font-size: 15px;
        padding-left: 100px;
        padding-top: 4px;
        color: grey;
    }

    .logo h6 {
        font-size: 15px;
        padding-left: 100px;
        color: white;
    }

    .silebar>ul {
        background: #2A3F54;
        height: 100%;
        /* list-style: none; */
    }

    .silebar>ul>li {
        padding-left: 20px;
    }

    .silebar>ul>li:hover {
        border-left: 2px solid cyan;
        background: rgba(255, 255, 255, .05);
    }

    .silebar>ul>li>a {
        line-height: 50px;
        text-decoration: none;
        font-size: 20px;
        color: white;
    }

    .silebar>ul>li>a:hover {
        color: cyan;
    }

    .silebar ul .list-menu {
        display: block;
    }

    .silebar ul .list-menu li {
        line-height: 45px;
        font-size: 16px;
        list-style: none;
        margin-left: -20px;
        border-left: 3px solid transparent;
    }

    .silebar ul .list-menu li:hover {
        border-left-color: cyan;
        background: rgba(255, 255, 255, .05);
        text-shadow: rgb(0 0 0 / 25%) 0 -1px 0;
        background: linear-gradient(#334556, #2C4257), #2A3F54;
        box-shadow: rgb(0 0 0 / 25%) 0 1px 0, inset rgb(255 255 255 / 16%) 0 1px 0;
    }

    .silebar .list-menu li a {
        padding-left: 40px;
        text-decoration: none;
        color: white;
        font-family: time_sleep_until;
    }

    .silebar>ul>li>a span {
        font-size: 16px;
    }

    .silebar>ul>li>.icon-home i {
        padding-left: 122px;
        font-size: 16px;
    }

    .silebar>ul>li>.icon-quanly i {
        padding-left: 100px;
        font-size: 16px;
    }

    .silebar ul .list-menu li a:hover {
        color: cyan;
    }

    .thanhtren {
        width: 100%;
        height: 45px;
        background: #EDEDED;
        border-bottom: 1px solid #D9DEE4;
    }

    .thanhtren>ul {
        margin-left: 1150px;
        color: greenyellow;
    }

    .thanhtren>ul>li {
        float: left;
        line-height: 45px;
        padding-right: 7px;
        padding-left: 7px;
        list-style: none;
    }

    .thanhtren>ul>li:hover {
        background: rgba(0, 0, 0, 0.06);
    }

    .thanhtren>ul>li>a:hover {
        color: black;
    }

    .thanhtren>ul>li>a {
        text-decoration: none;
    }

    .thanhtren ul .menutren li {
        list-style: none;
        line-height: 35px;
        display: none;
    }

    .thanhtren ul .menutren li a {
        text-decoration: none;
    }

    .thanhtren>ul>li:hover .menutren li {
        display: block;
    }

    .main {
        margin-left: 260px;
        margin-top: 10px;
        width: 82%;
        height: auto;
    }
</style>
<div class="silebar">
    <span class="tenshop">Sales Shop!</span>

    <div class="logo">
        <img class="logoanh" src="modues/qlsanpham/uploads/1632132262_quạt đứng.jpg">
        <p>welcome,<p>
                <h6><?= $_SESSION['user']?></h6>

    </div>
    <ul>
        <li><a class="icon-home" href="index.php?action=Home&query=trangchu"><span class="fa fa-home"></span> Home <i class="fa fa-caret-down"></i></a>
            <!-- <ul class="list-menu">
                <li><a href="">Quản Lý Danh Mục Sản Phẩm</a></li>
                <li><a href="">Quản Lý Sản Phẩm</a></li>

            </ul> -->
        </li>
        <li>
            <a class="icon-quanly action" href=""> <span class="fa fa-home"></span> Quản Lý <i
                    class="fa fa-caret-down"></i></a>
            <ul class="list-menu">
                <li><a href="index.php?action=quanlydanhmucsanpham&query=lietke">Quản Lý Danh Mục Sản Phẩm</a></li>
                <li><a href="index.php?action=quanlysanpham&query=lietke">Quản Lý Sản Phẩm</a></li>
                <li><a href="#">Quản Lý Giỏ Hàng</a></li>
                <li><a href="#">Quản Lý Nhân Viên</a></li>
                <li><a href="#">Quản Lý Khách Hàng</a></li>
            </ul>
        </li>
        <li><a href="#">Báo Cáo</a></li>
        <li><a href="#">Tài Khoản</a></li>
    </ul>
</div>
<div class="thanhtren">
    <ul>
        <li><a href=""><i class="fa fa-bell"></i>  thông báo </a></li>
        <li><a href=""><i class="fa fa-comment"></i> tin nhắn </a></li>
        <?php if(isset($_SESSION['user'])){ ?>
        <li>

            <a class="taikhoan" href=""><i class="fa fa-user"></i> <?php echo $_SESSION['user']; ?></a>
            <ul class="menutren">
                <li><a href="index.php?dangxuat=1">Đăng xuất</a></li>

            </ul>
        </li>
        <?php }else{ ?>
        <li>

            <a class="taikhoan" href="">Tài Khoản</a>
            <ul class="menutren">
                <li><a href="login.php">Đăng Nhập</a></li>
                <li><a href="">Đăng Ký</a></li>

            </ul>
        </li>
        <?php }?>
    </ul>

</div>