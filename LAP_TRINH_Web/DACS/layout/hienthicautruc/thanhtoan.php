        <?php 
                
                    
        // lấy thông tin giỏ hàng 
                include('thuvien.php');
       
                // and function 

                $baoloi = array();
        if(!empty($_SESSION['dangnhap'])){
            ?>
        <p>thanh toán </p>

        <?php 
        $vanchuyen = 30000 ;
        if(isset($_POST['thanhtoan'])){
            //
            $ten = $_POST['hoten'];
            $email = $_POST['email'];
     
            $dienthoai = $_POST['sodienthoai'];
            
            //
            $id_khachhang = $user['id_khachhang'];
            $diachi =$_POST['diachi'];
            $sdt =$_POST['sodienthoai'];
            $tonggiatien =$_POST['tongtien'];
            $pttt =0;

// bắt lỗi chưa nhập vào

if(empty($ten) ) {
            $baoloi['hoten'] = "họ tên không được để trống";
  }if(empty($email)){
    $baoloi['email'] = "Email không được để trống";
  }
  if(empty($dienthoai)){
  $baoloi['sodienthoai'] = "Vui lòng nhập số điện thoại";
  }
//đúng thì được lưu vào mysqli
            
            if(empty($baoloi)){
         
            $sql_muahang = mysqli_query($mysqli,"INSERT INTO giohang(id_khachhang,diachi,sdt,tonggiatien,pttt) VALUE ('$id_khachhang',' $diachi',' $dienthoai','$tonggiatien','$pttt')");
            if($sql_muahang){
                echo '<p style="color:red; font-size:30px;">thanh toán thành công </p>';
                echo '<a href="index.php?action=index.php">quay lại Mua Hàng </a>';
              
            }else{
                echo 'thất bịa';
            }
      
        }
    }

        ?>

        <style>
            h5 {
                font-size: 20px;
                color: gray;
                margin-left: 100px;
            }

            .thongtin div {
                margin-bottom: 20px;
            }

            .thongtin {
                margin-left: 100px;
            }

            input {
                border: none;
                border-radius: 5px;
                transition: all .3s ease-out;
                padding: 10px;

            }

            .row .co {
                margin-bottom: 10px;
            }

            .hoten {
                width: 100%;
                box-shadow: 0 0 0 1px #d9d9d9;

            }

            .email {
                width: 100%;
                margin-left: -11px;
                box-shadow: 0 0 0 1px #d9d9d9;
            }

            .sdt {
                width: 110%;
                margin-left: -7px;
                box-shadow: 0 0 0 1px #d9d9d9;
            }

            .diachi {
                width: 100%;
                box-shadow: 0 0 0 1px #d9d9d9;
            }

            .tinhthanh {
                margin-left: -10px;
                width: 100%;
            }

            .huyenquan {
                margin-left: -10px;
                width: 108%;
            }

            select {

                border: none;
                border-radius: 5px;
                box-shadow: 0 0 0 1px #d9d9d9;
                transition: all .3s ease-out;
                padding: 10px;
            }

            input[type=radio] {
                background: none;
            }

            #giaodich {
                font-size: 16px;
                color: gray;
                padding-left: 100px;

            }

            .list-gh {
                margin-left: 100px;
                padding-bottom: 30px;
                padding-top: 30px;
            }

            .list-gh a {
                text-decoration: none;
                font-size: 16px;
                color: #338dbc;
            }

            .cll {
                border-left: 3px solid #d9d9d9;
                margin-left: 100px;
            }

            .tien {
                margin-top: 20px;
                margin-left: 30px;

            }

            .sp {
                margin-bottom: 20px;
                margin-left: 30px;


            }

            .lsp {
                padding-bottom: 10px;
            }

            .giamgia {
                border: none;
                border-radius: 5px;
                transition: all .3s ease-out;
                padding: 10px;
                box-shadow: 0 0 0 1px #d9d9d9;
                width: 320px;


            }

            .btn-s:hover {
                background: linear-gradient(#334556, #2C4257), #2A3F54;
            }

            #giamgia {
                margin-left: 30px;
                padding-bottom: 20px;
                padding-top: 20px;
                border-bottom: 2px solid #d9d9d9;
                border-top: 2px solid #d9d9d9;

            }

            .btn-s {
                padding: 9px 20px;
                border-radius: 5px;
                margin-left: 20px;
                background: #338dbc;
                color: #fff;
            }

            #tongtien {
                padding-top: 10px;
                margin-left: 30px;
                margin-top: 20px;
                border-top: 2px solid #d9d9d9;

            }

            .thanhtoan {
                padding: 10px;
                text-align: center;
                margin-top: 30px;
                width: 100%;
                border-radius: 5px;
                background: #338dbc;
                color: #fff;
                font-weight: bold;

            }

            .thanhtoan:hover {
                background: linear-gradient(#334556, #2C4257), #2A3F54;
            }

            #thanhtoan {
                margin-left: 30px;
            }

            span {
                font-size: 14px;
            }
        </style>
        <div class="col-lg-6">
            <h5 class="">Thông tin khách hàng</h5>
            <div class="thongtin">
                <form action="" method="POST">
                    <p class="" style="color:#737373 ;">Bạn đã có tài khoản? <a href=""
                            style="color:#338dbc; text-decoration: none;">Đăng nhập</a></p>
                    <form action="" method="POSt">
                        <div class="">
                            <input placeholder="Họ và tên" class="hoten" size="30" type="text" name="hoten"
                                value="<?php echo''.$user['username'].'' ?>" />
                            <?php if(isset($baoloi['hoten'])){?>
                            <span style="color: red;"><?php echo $baoloi['hoten']; ?></span>
                            <?php } ?>
                        </div>
                        <div class="row co">
                            <div class="col-lg-8">
                                <input placeholder="Email" class="email" type="email" name="email"
                                    value="<?php echo''.$user['email'].'' ?>" />
                                <?php if(isset($baoloi['email'])){?>
                                <span style="color: red;"><?php echo $baoloi['email']; ?></span>
                                <?php } ?>
                            </div>

                            <div class="col-lg-4">

                                <input placeholder="Số điện thoại" class="sdt" maxlength="10" type="tel"
                                    name="sodienthoai" value="<?php if(isset($sodt)) echo $sodt; ?>" />
                                <?php if(isset($baoloi['sodienthoai'])){?>
                                <span style="color: red;"><?php echo $baoloi['sodienthoai']; ?></span>
                                <?php } ?>
                            </div>
                        </div>

                        <div class="">
                            <input placeholder="Địa chỉ" class="diachi" size="30" type="text" name="diachi"
                                value="<?php if(isset($diachi)) echo $diachi; ?>" />
                            <?php if(isset($baoloi['diachi'])){?>
                            <span style="color: red;"><?php echo $baoloi['diachi']; ?></span>
                            <?php } ?>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <select class="tinhthanh" id="" name="">
                                    <option data-code="null" value="" selected> Chọn tỉnh / thành phố </option>
                                    <option value='254'>Hà Nội</option>
                                    <option value='255'>Hồ Chí Minh</option>
                                    <option value='256'>An Giang</option>
                                    <option value='257'>Bà Rịa - Vũng Tàu</option>
                                    <option value='258'>Bắc Ninh</option>
                                    <option value='259'>Bắc Giang</option>
                                    <option value='260'>Bình Dương</option>
                                    <option value='261'>Bình Định</option>
                                    <option value='262'>Bình Phước</option>
                                    <option value='263'>Bình Thuận</option>
                                    <option value='264'>Bến Tre</option>
                                    <option value='265'>Bắc Cạn</option>
                                    <option value='266'>Cần Thơ</option>
                                    <option value='267'>Khánh Hòa</option>
                                    <option value='268'>Thừa Thiên Huế</option>
                                    <option value='269'>Lào Cai</option>
                                    <option value='270'>Quảng Ninh</option>
                                    <option value='271'>Đồng Nai</option>
                                    <option value='272'>Nam Định</option>
                                    <option value='273'>Cà Mau</option>
                                    <option value='274'>Cao Bằng</option>
                                    <option value='275'>Gia Lai</option>
                                    <option value='276'>Hà Giang</option>
                                    <option value='277'>Hà Nam</option>
                                    <option value='278'>Hà Tĩnh</option>
                                    <option value='279'>Hải Dương</option>
                                    <option value='280'>Hải Phòng</option>
                                    <option value='281'>Hòa Bình</option>
                                    <option value='282'>Hưng Yên</option>
                                    <option value='283'>Kiên Giang</option>
                                    <option value='284'>Kon Tum</option>
                                    <option value='285'>Lai Châu</option>
                                    <option value='286'>Lâm Đồng</option>
                                    <option value='287'>Lạng Sơn</option>
                                    <option value='288'>Long An</option>
                                    <option value='289'>Nghệ An</option>
                                    <option value='290'>Ninh Bình</option>
                                    <option value='291'>Ninh Thuận</option>
                                    <option value='292'>Phú Thọ</option>
                                    <option value='293'>Phú Yên</option>
                                    <option value='294'>Quảng Bình</option>
                                    <option value='295'>Quảng Nam</option>
                                    <option value='296'>Quảng Ngãi</option>
                                    <option value='297'>Quảng Trị</option>
                                    <option value='298'>Sóc Trăng</option>
                                    <option value='299'>Sơn La</option>
                                    <option value='300'>Tây Ninh</option>
                                    <option value='301'>Thái Bình</option>
                                    <option value='302'>Thái Nguyên</option>
                                    <option value='303'>Thanh Hóa</option>
                                    <option value='304'>Tiền Giang</option>
                                    <option value='305'>Trà Vinh</option>
                                    <option value='306'>Tuyên Quang</option>
                                    <option value='307'>Vĩnh Long</option>
                                    <option value='308'>Vĩnh Phúc</option>
                                    <option value='309'>Yên Bái</option>
                                    <option value='310'>Đắk Lắk</option>
                                    <option value='311'>Đồng Tháp</option>
                                    <option value='312'>Đà Nẵng</option>
                                    <option value='313'>Đắc Nông</option>
                                    <option value='314'>Hậu Giang</option>
                                    <option value='315'>Bạc Liêu</option>
                                    <option value='316'>Điện Biên</option>
                                </select>
                            </div>

                            <div class="col-lg-6">
                                <select class="huyenquan" name="">
                                    <option data-code="null" value="" selected>Chọn quận / huyện
                                    </option>
                                </select>
                            </div>
                        </div>

            </div>
            <h5 class="">phương thức thanh toán</h5>
            <div id="giaodich">

                <input type="radio" name="gender" class=""
                    value="<?php if(isset($ptthanhtoan)) echo $ptthanhtoan; ?>" /> Thanh
                toán tại nhà
                <br>
                <input type="radio" name="gender" class="" value="<?php if(isset($ptthanhtoan)) echo $ptthanhtoan; ?>">
                Chuyển
                khoản qua ngân hàng<br />
                <?php if(isset($baoloi['gender'])){?>
                <span style="color: red;"><?php echo $baoloi['gender']; ?></span>
                <?php } ?>
            </div>

            <div class="list-gh">
                <a class="" href="index.php?b=giohang">
                    <i class="fa fa-chevron-left"></i> Giỏ hàng
                </a>
            </div>

        </div>
        <div class="col-lg-5 cl">

            <div class="cll">
                <table class="sp">
                    <tr class="lsp">
                        <th style="width:200px; ">Hình ảnh</td>
                        <th style="width:400px; ">Tên Sản Phẩm</td>
                        <th style="width:250px; ">Đơn Giá</td>
                        <th style="width:250px; ">Số Lượng</td>
                        <th style="width:250px; ">Thành Tiền</td>

                    </tr>
                    <?php 
                    ttgiohang();
                    ?>
                </table>

                <div id="giamgia">
                    <input type="text" name="giamgia" value="" placeholder="mã giảm giá" class="giamgia">
                    <button class="btn-s">sử dụng</button><br />

                    <a href="" style="color: blue;"> Lấy mã giảm giá</a>

                </div>
                <table class="tien">
                    <tr>
                        <td style="width:350px; ">tạm tính a</td>
                        <td><?php echo ''.number_format( $tong,0,',','.').' _đ' .'' ?></td>
                    </tr>
                    <tr>
                        <td style="width:35px; ">Phí Vận Chuyển</td>
                        <td><?php echo ''.number_format( $vanchuyen,0,',','.').' _đ' .'' ?></td>
                    </tr>
                </table>
                <div id="tongtien">
                    <table>
                        <tr>
                            <td style="width:350px;">tổng tiền</td>
                            <td><?php echo ''.number_format( $vanchuyen,0,',','.').' _đ' .'' ?></td>
                            <input type="hidden" name="tongtien"
                                value="<?php echo ''.number_format( $vanchuyen,0,',','.').' _đ' .'' ?>">
                        </tr>
                    </table>
                </div>

                <div id="thanhtoan"><button class="thanhtoan" name="thanhtoan">Thanh Toán</button></div>
            </div>

            </form>
        </div>
        <?php } else{?>
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Vui lòng đăng nhập để mua hàng</strong><a
                href="index.php?action=dangnhap&dangnhaplai=thanhtoan">LOGIN</a>
        </div>
        <?php } ?>