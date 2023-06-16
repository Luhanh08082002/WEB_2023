<style>
  .formdangnhap {
    width: 100%;
    height: 595px;
    background-image: url(image/ahack.jpg);
    background-repeat: no-repeat;
    background-size: cover;
  }
  .content{
    width: 30%;
    box-shadow: 0px 0px 10px 5px rgba(178,34,34,0.5);
    margin: 0 auto;
    transform: translate(20px,40%);
  }
  .logoanh{
    width: 100px;
    height: 100px;
    border-radius:50% ;
    box-shadow: 0px 0px 10px 5px rgba(178,34,34,0.5);
    transform: translate(180%,-50%);
   
  }
  .title{
    margin-top: -30px;
    text-align: center;
    color: white;
  }
  .box{
    width: 100%;
    font-size: 20px;
    padding: 10px 20px 0px 10px;
    border-bottom: 2px solid #B22222;   
    width: 80%; 
    margin: 0 auto;

   
  }
  .box input{
    margin-left: 10px;
    margin-bottom:-10px;
    border: none;
    width: 90%; 
    background: none;
    color: white;
    
  }
  .box input:hover{
    margin-left: 10px;
    border: none;
    width: 90%; 
    background: none;
    color: white;
    
  }
  .icon{
    font-size: 20px;
    color: white;
  }
  .login{
    margin-left: 20px;
    padding: 20px;
  }
</style>
<?php 
include('admin/database/database.php');

if ($_SERVER['REQUEST_METHOD'] == "POST"){
  $baoloi = array();
if(empty($_POST['email']) ) {
  $baoloi['email'] = "họ tên không được để trống";
}else{
  $hoten = $_POST['email'];
}
if(empty($_POST['password'])){
  $baoloi['password'] = "vui lòng nhập mật khẩu";
  }else{
    $sodt = $_POST['password'];
  }
}
if(isset($_POST['email'])){
  $email = $_POST['email'];
  $pass = $_POST['password'];
  $sql_dangnhap = "SELECT *FROM dangky WHERE email ='$email' ";
  $query_dangnhap = mysqli_query($mysqli,$sql_dangnhap);
  $data = mysqli_fetch_assoc($query_dangnhap);
  $checkemail = mysqli_num_rows($query_dangnhap);
  if($checkemail ==1){
    $checkpass= password_verify($pass,$data['password']);
    if($checkpass){
    $_SESSION['dangnhap'] = $data;
    echo "<script>location.href='index.php';</script>";
  }
  else{
    echo 'sai mật khẩu';
  }
}else{
  echo 'email ko tồn tại';
}
}

?>
<div class="formdangnhap">
  <form class="content" action="" method="POST">
    <img class="logoanh" src="image/trung-vit-khung-2.jpg" alt="">

    <div class="title">LOGIN</div>

    <div class="box">
     <i class="fa fa-user icon"></i>
      <input type="text" name="email" id="name" placeholder="username" value="<?php if(isset($email))  echo $email;?>">
      <?php if (isset($baoloi['email'])){?>
        <span style="color:red;"><?php echo $baoloi['email']; ?></span>
        <?php } ?>
        <p style="color: red;"></p>

    </div>

    <div class="box ">
    <i class="fa fa-user icon"></i>
      <input type="password" name="password" id="pass" placeholder="password">
      <?php if (isset($baoloi['password'])){?>
        <span style="color:red;"><?php echo $baoloi['password']; ?></span>
        <?php } ?>
        <p style="color: red;"></p>
    </div>
    <div class="login">
        <button type="submit" name="dangnhap">đăng nhập</button>
        <button type="submit"><a href="dangky.php">đăng ký</button>
      </div>
  </form>
</div>