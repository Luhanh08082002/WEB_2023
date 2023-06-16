<?php function ttgiohang(){
                    if(isset($_SESSION['giohang']) && (is_array($_SESSION['giohang']))){
                      if(sizeof($_SESSION['giohang'])>0 ){
                      $tong = 0;
                        for($i=0; $i<sizeof($_SESSION['giohang']); $i++){
                         $tinhtien=$_SESSION['giohang'][$i][4] * $_SESSION['giohang'][$i][5];
                         $tong+=$tinhtien;
                            echo' <tr>
                            <td><img src="admin/modues/qlsanpham/uploads/'.$_SESSION['giohang'][$i][0].'" width=50px height=50px></td>
                            <td>'.$_SESSION['giohang'][$i][1].'</td>
                            <td>'.number_format($_SESSION['giohang'][$i][4],0,',','.').' _đ'.'</td>
                            <td>'.$_SESSION['giohang'][$i][5].'</td>
                        
                            
            
                            <td>
                            <div>'.number_format($tinhtien,0,',','.').' _đ' .'</div>
                            </td>
                            </tr> ';
                        }       
                        echo '<tr>
                        <th colspan="4"> Tổng Đơn Hàng </th>
                        <th>
                        <div>'.number_format($tong,0,',','.').'đ' .'</div>
                        </th>
                        </tr>
                        ' ;
                       }
                 }else{
                   echo "Giỏ hàng Rỗng";
                 }
            
                }
      ?>          