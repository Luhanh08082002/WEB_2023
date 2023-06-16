<?php 
$user = (isset($_SESSION['dangnhap'])) ? $_SESSION['dangnhap']: [];
$sql_hienthi_danhmucsanpham = "SELECT * FROM ql_danhmuc ORDER BY id_danhmuc DESC";
$hienthi_danhmuc = mysqli_query($mysqli,$sql_hienthi_danhmucsanpham); 

if(isset($_GET['dangxuat']) && $_GET['dangxuat']== 1){
  
  echo "<script>alert('Bạn có chắc chắn đăng xuất ra khỏi thiết bị không');</script>";
    unset($_SESSION['dangnhap']);
    
  // header('Location:index.php');

}
?>

<style>
.dropdown-item {
   padding: .25rem 2rem;
}
</style>
<nav class="row">
  <nav class="navbar navbar-expand-lg col">

    <button class="navbar-toggler navbar-light" type="button" data-bs-toggle="collapse"
      data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
      aria-label="Toggle navigation">
      <span class="navbar-toggler-icon text-info"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto fs-5 ">
        <li class="nav-item active ">
        
          <a class="nav-link" href="index.php"><i class="fa fa-home"></i> Trang Chủ <span class="sr-only"></span></a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="index.php?action=gioithieu"><i class="fa fa-list-alt"></i> Giới Thiệu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?action=lienhe"><i class="fa fa-list-alt"></i> Liên Hệ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?action=tintuc"><i class="fa fa-list-alt"></i> Tin Tức</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
            aria-expanded="false"><i class="fa fa-wrench"></i> Sửa Chửa - Lắp Đặt</a>
          <div class="dropdown-menu " aria-labelledby="navbarDropdown">
            <a class="dropdown-item baotry" href="#">Thiết Bị Link Kiện</a>
            <a class="dropdown-item baotry" href="">Nhân Viên Sửa Chửa</a>
          </div>
        </li>
        
      </ul>
      <ul class="navbar-nav thenao col-lg-3 ms-lg-auto fs-5 ">

        <li class="nav-item">
          <a id="cart" class="nav-link" href="index.php?action=gio">
            <i class="fa fa-shopping-cart"></i>
            <i id="count-item" data-count="0">0 item</i>
          </a>

        </li>
<?php if(isset($_SESSION['dangnhap'])){ ?>
        <li class="nav-item dropdown  ">
          <a class="nav-link dropdown" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
            aria-expanded="false"> <i class="fa fa-user"></i>
           <?php echo $user['username']; ?>
          </a>
          

          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php?action=taikhoancuatoi&click=hoso">Tài Khoản Của Tôi </a>
          <a class="dropdown-item" href="index.php?action=taikhoancuatoi&click=donhang">Đơn Hàng </a>
            <a class="dropdown-item" href="index.php?dangxuat=1"><i class="fa fa-sign-out"></i>  Đăng xuất </a>
            </div>
            </li>
            <?php } else{?>
              <li class="nav-item dropdown  ">
          <a class="nav-link dropdown" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-user"></i> Tài Khoản</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php?action=dangnhap"><i class="fa fa-sign-in"></i> Đăng nhập</a>
            <a class="dropdown-item" href="index.php?action=dangky"><i class="fa fa-sign-out"></i>  Đăng Ký</a>
          </div>
              </li>
            <?php } ?> 
      </ul>
    </div>
  </nav>
