<!DOCTYPE html>
<html>

<head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="style.css" />
      <title>Trang đăng ký </title>
</head>

<body>
      <form action="reg.php" method="POST" class="form">
            <h2>BK-LungScare</h2>
            <h4 class="header">Đăng ký tài khoản </h4>
            <table cellpadding="0" cellspacing="0">
                  <tr>
                        <b>Tên đăng nhập: </b><input type="text" name="username" size="50" />
                  </tr>
                  <tr>
                        <b>Mật khẩu: </b> <input type="password" name="password" size="50" />
                  </tr>
                  <tr>
                        <b>Email: </b><input type="text" name="email" size="50" />
                  </tr>
                  <tr>
                        <b>Họ và tên: </b><input type="text" name="fullname" size="50" />
                  </tr>
                  <tr>
                        <b>Số điện thoại: </b><input type="text" name="phonenumber" size="100" />
                  </tr>
                  <tr>
                        <b>Giới tính: <b> <select name="gender">
                                          <option value=""></option>
                                          <option value="Nam">Nam</option>
                                          <option value="Nu">Nữ</option>
                                    </select>
                  </tr>
            </table>
            <input type="submit" value="Đăng ký" class="dangki" name="btn-reg" />
            <input type="button" onclick="login.php" value="Đăng nhập" class="fdangnhap" />
      </form>
</body>

</html>