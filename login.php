<?php

include("php/lib_db.php");
session_start();

            $error = array();
            $data = array();
    
            //lấy dữ liệu từ post đưa vào mảng data
            $data['username'] = isset($_POST['username']) ? $_POST['username'] : '';
            $data['password'] = isset($_POST['password']) ? $_POST['password'] : '';
    
            $username = $data['username'];
            $password = $data['password'];
            
    
            $query = "SELECT COUNT(*) FROM mvc_user WHERE username = '$username' AND PASSWORD = '$password'";
            
            //thực thi truy vấn
            $data = select_one($query);
            $count = 0;
                foreach ($data as $item) {
                    $count += $item;
                }
            if ($count>0) {

                setcookie("username", $username, time() + (86400 * 30));
                $_SESSION['username'] = $username;
                
                //đăng nhập vào trang chính
                
                header("Location:admin.php");
                die();
            }
            else
            {
                echo  'Tên đăng nhập hoặc mật khẩu không đúng !';
            }

            if (isset($_POST["submit"])) {
                echo '<script language="javascript">';
                echo 'alert("Tên đăng nhập hoặc mật khẩu không đúng !")';
                echo '</script>';    
            }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Trang Đăng nhập</title>
    <meta http-equiv="Content-Type" content="text/shtml; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">  
    <link rel="stylesheet" href="css/style_login.css" type="text/css" media="all" /> <!-- Style-CSS -->  
</head>

<body>

    <form action="login.php" method="POST">
        <div class="imgcontainer">
            <img src="images/user.png" alt="Avatar" class="avatar">
        </div>

        <div class="container">
           
                <label for="uname"><b>Username</b></label>
                <div class="pom-agile">
                    <input type="text" placeholder="Tên Đặng Nhập" name="username" required value="<?php echo $username ?>"/>
                    <span class="icon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                </div>          
            
                <label for="psw"><b>Password</b></label>
                <div class="pom-agile">
                    <input type="password" placeholder="Mật Khẩu" name="password" required>
                    <span class="icon2"><i class="fa fa-unlock" aria-hidden="true"></i></span>
                </div> 
            <button type="submit" name="submit">Login</button>
            <label>
            
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="quay_lai_trang_truoc()" class="cancelbtn">Cancel</button>
            <button type="button" onclick="dieu_huong()" class="cancelbtn" style="background: blue;">Đăng ký</button>
            
            
        </div>
    </form>
    <script>
      function quay_lai_trang_truoc(){
          history.back();
      }
  </script> 
    <script>
        function dieu_huong(){
            location.assign("signup.php");
        }
    </script>
      


</body>