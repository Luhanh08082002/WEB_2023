<?php 
include('admin/database/database.php');
$error = [];//bắt lỗi
if(!isset($_SESSION['giohang'])) $_SESSION['giohang']= [];
if(isset($_POST['dangkyten'])){
$hoten = $_POST['hoten'];
$ngaysinh = $_POST['ngaysinh'];
$email = $_POST['email'];
$sdt = $_POST['sdt'];
$matkhau = $_POST['password'];
// bắt lỗi chưa nhập vào
$nhaplaimatkhau = $_POST['nhaplaimatkhau'];
if(empty($hoten)){
  $error['hoten'] = 'bạn chưa nhập họ tên';
}
if(empty($ngaysinh)){
    $error['ngaysinh'] = 'bạn chưa nhập ngày sinh';
  }if(empty($email)){
    $error['email'] = 'email không được bỏ trống';
}if(empty($sdt)){
    $error['sdt'] = 'vui lòng nhập số điện thoại';
}if(empty($matkhau)){
    $error['password'] = 'mật khẩu không được để trống';
}if($nhaplaimatkhau != $matkhau){
    $error['nhaplaimatkhau'] = 'mật khẩu nhập lại không đúng';
}
//đúng thì được lưu vào mysqli
if(empty($error)){
//lệnh password được mã hóa;
    $pass = password_hash($matkhau,PASSWORD_DEFAULT );

    $sql_dangky = "INSERT INTO dangky(username,ngaysinh,email,sdt,password) VALUE ('".$hoten."','".$ngaysinh."','".$email."','".$sdt."','".$pass."')";
    $query = mysqli_query($mysqli,$sql_dangky);
    
    if($query){
        echo '<p style="color:green">Bạn đã đăng ký thành công </p>';
        echo '<a href="index.php?action=dangnhap">quay lại đăng nhập </a>';
      
    }
        
    
}
}
?>
<P>đăng ký tài khoản</P>
<form method="POST" action="">
    <div class="">

        <div>
            <h3>Họ Và Tên</h3>
            <input type="text" name="hoten" placeholder="Họ Và Tên " value="<?php if(isset($hoten)) echo $hoten; ?>">
            <?php if (isset($error['hoten'])){?>
            <span style="color:red;"><?php echo $error['hoten']; ?></span>
            <?php } ?>

        </div>
        <div>
            <h3>Ngày Sinh</h3>
            <input type="text" name="ngaysinh" placeholder="ngày sinh "
                value="<?php if(isset($ngaysinh)) echo $ngaysinh; ?>">
        </div>
        <div>
            <h3>Email</h3>
            <input type="email" name="email" placeholder="Email" value="<?php if(isset($email)) echo $email; ?>">
            <?php if (isset($error['email'])){?>
            <span style="color:red;"><?php echo $error['email']; ?></span>
            <?php } ?>

        </div>
        <div>
            <h3>Số Điện Thoại</h3>
            <input type="tel" name="sdt" placeholder="Số Điện Thoại" value="<?php if(isset($sdt)) echo $sdt; ?>">
            <?php if (isset($error['sdt'])){?>
            <span style="color:red;"><?php echo $error['sdt']; ?></span>
            <?php } ?>

        </div>
        <div>
            <h3>Mật Khẩu</h3>
            <input type="password" name="password" placeholder="Mật Khẩu">
            <?php if (isset($error['password'])){?>
            <span style="color:red;"><?php echo $error['password']; ?></span>
            <?php } ?>

        </div>
        <div>
            <h3>Nhập Lại Mật Khẩu</h3>
            <input type="password" name="nhaplaimatkhau" placeholder="Nhập Lại Mật Khẩu">
            <p style="color: red;"><?php echo(isset($error['nhaplaimatkhau']))?$error['nhaplaimatkhau']:''  ?></p>

        </div>
        <button type="submit" name="dangkyten">đăng ký</button>

    </div>
</form>