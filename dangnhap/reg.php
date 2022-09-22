<?php
require 'connect.php';
if(isset($_POST['btn-reg'])){
      if(!empty($username) && !empty($fullname) && !empty($password) &&!empty($email) &&!empty($phonenumber) &&!empty($gender)){
            echo "Lưu thành công";
      }
      else{
            echo "Bạn cần nhập đầy đủ thông tin";
      }
}
?>
<link rel="stylesheet" type="text/css" href="style.css" />
<a href="login.php" class="button_login"> Quay lại trang đăng nhập</a>
