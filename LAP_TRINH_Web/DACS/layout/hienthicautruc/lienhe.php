
<?php 
if ($_SERVER['REQUEST_METHOD'] == "POST"){
  $baoloi = array();

if(empty($_POST['hoten']) ) {
  // && empty($_POST['sodienthoai']) && empty('email')){
  // nếu có lỗi thì gán vào biến lỗi -- $baoloi ;
  $baoloi['hoten'] = "họ tên không được để trống";
  // $baoloi['sodienthoai'] = 'Vui lòng nhập số điện thoại';
  // $baoloi['email'] = "Vui lòng nhập Email ";
}else{
  $hoten = $_POST['hoten'];
}
if(empty($_POST['sodienthoai'])){
  $baoloi['sodienthoai'] = "Vui lòng nhập số điện thoại";
  }else{
    $sodt = $_POST['sodienthoai'];
  }

  if (empty($baoloi)){
    echo "{$hoten} <br/> {$sodt}";
  }
}
?>
<div class="col-lg-12">
                <div class="">
                  <h5 class="modal-titlem text-info fs-3 fw-bold" id="staticBackdropLabel"> liên hệ</h5>
                 
                </div>

                <form action="" method="POST" class="text-danger">
                  <div class="frorm-group">
                    <h4>Họ Và Tên Của Bạn</h4>
              
                    <input type="text"  name="hoten" class="form-control " placeholder="Nhập Họ và tên" id="hoten">
                    <?php if (isset($baoloi['hoten'])){?>
                    <span ><?php echo $baoloi['hoten']; ?></span>
                    <?php } ?>
                  </div>
                  <div class="frorm-group">
                    <h4>Số Điện Thoại Liên Hệ</h4>
                    <input type="text" class="form-control " name="sodienthoai" placeholder="Nhập Số Điện Thoại" id="sdt">
                    <?php if (isset($baoloi['sodienthoai'])){?>
                    <span ><?php echo $baoloi['sodienthoai']; ?></span>
                    <?php } ?>
                  </div>
                  <div class="frorm-group">
                    <h4>Địa Chỉ Email</h4>
                    <input type="Email" class="form-control" name="email" placeholder="Nhập Email" id="email">
                    <?php if (isset($baoloi['email'])){?>
                    <span ><?php echo $baoloi['email']; ?></span>
                    <?php } ?>
                  </div>
                  <div class="frorm-group">
                    <h4>Nội Dung Yêu Cầu Của Bạn Đối Với Chúng Tôi</h4>
                    <textarea type="text" cols="20" rows="2" class="form-control"
                      onblur="if (this.value == ''){this.value='Enter your massager' ;}"></textarea>
                  </div>

               
                <div class="modal-footer">
                  <div class="pull-left">
                    <span>Enter Call: 083224124</span>
                  </div>
                  <div class="pull-left">
                    <span>Enter Email : luhanh08082002@gmail.com</span>
                  </div>

                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                  <button name="btn-guidi" class="btn btn-secondary">Gửi Đi</button>
                </div> </form>
</div>

