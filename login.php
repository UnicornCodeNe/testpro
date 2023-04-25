<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" rel="stylesheet" >
<form action="login.php" method="post" id="frmlogin" class="border border-primary col-5 m-auto p-2">
<div class="form-group">
    <label>Username</label> <input name="name" type="text" class="form-control"/>
</div>
<div class="form-group">
    <label>Password</label> <input name="pass" type="password" class="form-control"/>
</div>
<div class="form-group">
    <input name="btn" type="submit" value="Đăng nhập" class="btn btn-primary"/> 
</div>
</form>


<?php
    error_reporting(E_ERROR | E_PARSE);
    $username = $_POST['name'];
    $password = $_POST['pass'];
    if($username == "thanhlan" && $password == "123456")
        echo "Thành Công!";
    else
        echo "Tên hoặc mật khẩu không đúng!";
?>