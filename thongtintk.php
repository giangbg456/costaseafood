<?php 
    
   $data['email'] = isset($_POST['email']) ? $_POST['email'] : '';
   $em = $data['email'];

   if( isset($_POST["submit"]))
{              $queryy = "UPDATE mvc_user
                    SET email = '$em'
                    WHERE username = '$username';";
                    exec_update($queryy);
                    echo '<script language="javascript">';
                    echo 'alert("Cập nhật thành công!")';
                    echo '</script>';
                }

                $username = $_COOKIE['username'];
                $query = "select email from mvc_user  where username = '$username'";
               $datas = select_list($query);
               //print_r($datas);
               foreach($datas as $d)
               {
                   $email = $d['email'];
               }    
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<head>
    <link type="text/css" href="css/style_lienhe.css" rel="stylesheet" media="screen"/>

</head>
<body>

    <div class="right-content-top-title">
        <h2>Thông tin tài khoản</h2>
    </div>
    <div class="right-content-main">
        <form action="" method="POST">
                <div class="contentInputBookRoom">
                    <label class="lblInputBookRoom">Tên Đặng nhập</label>
                    <input name="usename" type="text" id="cpMain_txtFullName" class="form-control validate[required]" placeholder="<?php echo $username ?>" readonly/>
                </div>

                <div class="contentInputBookRoom">
                    <label class="lblInputBookRoom">Email</label>
                    <input name="email" type="email" id="cpMain_txtEmail" class="form-control validate[required,custom[email]]" placeholder="<?php echo $email  ?>" />
            </div>
            
            <button name="submit" id="cpMain_btnSend" class="btn btn1 btnSendkNow">Cập nhật</button>
        </form>

     </div>
</body>