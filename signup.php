<?php
include("php/lib_db.php");

$data['username'] = isset($_POST['username']) ? $_POST['username'] : '';
$data['password'] = isset($_POST['password']) ? $_POST['password'] : '';
$data['repassword'] = isset($_POST['repassword']) ? $_POST['repassword'] : '';
$data['email'] = isset($_POST['email']) ? $_POST['email'] : '';


$username = $data['username'];
$password = $data['password'];
$repassword = $data['repassword'];
$email = $data['email'];

if( isset($_POST["submit_dk"]))
{
             if ($password  != $repassword) 
            {
                echo '<script language="javascript">';
                echo 'alert("Mật khẩu không trùng nhau!")';
                echo '</script>';
            }else{
            $sql_check = "SELECT COUNT(*) FROM mvc_user WHERE username= '$username'";
            $data_check = select_one($sql_check);
            
            $count = 0;
            foreach ($data_check as $item) {
            $count += $item;
            }
            if ($count > 0)
            {
                echo '<script language="javascript">';
                echo 'alert("Tên đã được sử dụng!")';
                echo '</script>';
            }
            else{
            $query = "INSERT INTO mvc_user(`username`, `password`, `Email`) VALUES ('$username','$password','$email')";
            exec_update($query);
            setcookie("username", $username, time() + (86400 * 30));
            header("location: admin.php");
            }
        }
            
    }


?>

<!DOCTYPE html>
<html>
<head>
    <title>Đăng ký tài khoản</title>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Full-width input fields */
input[type=text], input[type=password],input[type=email]{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
</head>
<body>
  <form class="modal-content" method="POST">
    <div class="container">
      <h1>Đăng ký thành viên</h1>
      <hr>
      <label for="Tên đăng nhập"><b>Tên đăng nhập</b></label>
      <input type="text" placeholder="Nhập tên đăng nhập" name="username" required>

      <label for="psw"><b>Mật khẩu</b></label>
      <input type="password" placeholder="Nhập mật khẩu" name="password" required>

      <label for="psw-repeat"><b>Nhập lại mật khẩu</b></label>
      <input type="password" placeholder="Nhập lại mật khẩu" name="repassword" required>
      
      <label for="Tên hiển thị"><b>Nhập email</b></label>
      <input type="email" placeholder="Nhập email" name="email" required>


      <div class="clearfix">
        <button type="button" onclick="quay_lai_trang_truoc()" class="cancelbtn">Cancel</button>
        <button type="submit_dk" class="signupbtn" name="submit_dk">Sign Up</button>
      </div>
    </div>
  </form>
</div>

<script>
      function quay_lai_trang_truoc(){
          history.back();
      }
</script> 
</body>
</html>

