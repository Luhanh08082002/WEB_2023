
<style>
.ttt {
        width: 100%;
        margin: 0 auto;
        border-radius: 13px 13px 0px 0px;
        -webkit-border-radius: 13px 13px 0px 0px;
        -moz-border-radius: 13px 13px 0px 0px;
        background: #92989c;
        height: 35px;
        line-height: 35px;
        margin-top: 30px;

    }
.tttk {
    border: 2px solid  #92989c;
    width: 100%;
}
    
.tttk label{
    color: brown;
    font-weight: bold;
    padding-left: 100px;
    
}
.tttk td{
    padding-right: 40px;
    padding-top: 20px;
}
.tttk input{
   width: 70%;
    padding: 5px 200px 5px 5px;
   
}
</style>

<div class="tttt">
<p class="ttt">Thông tin tài khoản</a>
</div>
<?php   

if(!empty($_SESSION['dangnhap'])){
 ?>
<table class="tttk">
    <tr>
        <td><label for=""> tên khách hàng</label></td>
        <td><input type="text" name="name" value="<?php echo ''.$user['username'].''; ?>"> </td>
    </tr>
    <tr>
        <td><label for=""> email </label></td>
        <td><input type="text" name="email" value="<?php echo ''.$user['email'].''; ?>"></td>
    </tr>
    <tr>
        <td><label for=""> mật khẩu</label></td>
        <td><input type="password" nam="pass" value="<?php echo ''.$user['password'].''; ?>"></td>
    </tr>
    <tr>
        <td><label for=""> số điện thoại</label></td>
        <td><input type="text" name="sdt" value="<?php echo ''.$user['sdt'].''; ?>"></td>
    </tr>
    <tr>
        <td><label for=""> Giới tính</label></td>
        <td><input type="text" name="gioitinh" value="<?php echo ''.$user['email'].''; ?>"></td>
    </tr>
    <tr>
        <td><label for=""> Ngày Sinh</label></td>
        <td><input type="text" name="ngaysinh" value="<?php echo ''.$user['ngaysinh'].''; ?>"></td>
    </tr>
</table>
<?php } ?>