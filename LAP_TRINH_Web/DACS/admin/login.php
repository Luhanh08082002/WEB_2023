
<?php 
session_start();
include'database/database.php';
?>
<?php 
  echo "bạn chưa đăng nhập vui lòng đăng nhập để được vào";
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $error = [];
        if(empty($_POST['user'])){
            $error['user'] ="vui lòng điền tên đăng nhập";
        }else{
            $user = $_POST['user'];
        }
        if(empty($_POST['pass'])){
            $error['pass'] ="vui lòng nhập mật khẩu";
        }else{
            $pass = $_POST['pass'];
        }
    
        if(isset($_POST['dangnhap'])){
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $sql_useradmin = " SELECT * FROM dangnhapadmin WHERE username = '$user' and password = '$pass' ";
        $query_useradmin = mysqli_query($mysqli,$sql_useradmin);
            if(mysqli_num_rows($query_useradmin)> 0){
                $_SESSION['user'] = $user; 
            
                echo "<script>location.href='index.php';</script>";
               
            }else{
                echo 'lỗi nik thì ai dám cho vào';
            }
        
    }
    
    }
    ?>
<body>
    <div>
        <div>
            <form action="" method="POST">
            <div>
                <label for="">tên đăng nhập</label><br/>
                <input style="color:blue;" type="text" placeholder="tên đăng nhập" name="user" value="<?php if(isset($user)) echo $user; ?>"><br/>
                <?php if(isset($error['user'])){ ?>
                    <span style="color: red;"> <?php echo $error['user']; ?> </span><br/>
<?php } ?>
                <label for="">mật khẩu</label><br/>
                <input type="password" placeholder="mật khẩu" name="pass"><br>
                <?php if(isset($error['pass'])) { ?>
                    <span style="color: red;"> <?php echo $error['pass']; ?></span>
                    <?php } ?>
            </div>
            <div>
                <button name="dangnhap">đăng nhập</button>
            </div>
            </form>
        </div>
    </div>
    
</body>
</html>
