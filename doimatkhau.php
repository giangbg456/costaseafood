<?php 
    $username = $_COOKIE['username'];

    $query = "select password from mvc_user  where username = '$username'";
   $datas = select_list($query);
   //print_r($datas);
   foreach($datas as $d)
   {
       $password = $d['password'];
   }

     $data['oldpass'] = isset($_POST['oldpass']) ? $_POST['oldpass'] : '';
    $data['newpass'] = isset($_POST['newpass']) ? $_POST['newpass'] : '';
    $data['renewpass'] = isset($_POST['renewpass']) ? $_POST['renewpass'] : '';

    $oldpass = $data['oldpass'];
    $newpass = $data['newpass'];
    $renewpass = $data['renewpass'];

    if( isset($_POST["submit"]))
{
             if ($newpass  != $renewpass) 
            {
                echo '<script language="javascript">';
                echo 'alert("Mật khẩu mới không trùng nhau!")';
                echo '</script>';
            }else{

                if($oldpass != $password){
                    echo '<script language="javascript">';
                    echo 'alert("Mật khẩu cũ không đúng!")';
                    echo '</script>';
                }else{
                    $queryy = "UPDATE mvc_user
                    SET password = '$newpass'
                    WHERE username = '$username';";
                    exec_update($queryy);
                    echo '<script language="javascript">';
                    echo 'alert("Cập nhật thành công!")';
                    echo '</script>';
                }

             }
            
    }


?>

<div class="right-content-top-title">
        <h2>Đổi mật khẩu</h2>
    </div>
    <div class="right-content-main">
        <form action="" method="Post">
                <div class="contentInputBookRoom">
                    <label class="lblInputBookRoom">Mật khẩu hiện tại</label>
                    <input name="oldpass" type="password" id="cpMain_txtFullName" class="form-control validate[required]" placeholder="Nhập mật khẩu hiện tại" />
                </div>
                <div class="contentInputBookRoom">
                    <label class="lblInputBookRoom">Mật khẩu mới</label>
                    <input name="newpass" type="password" id="cpMain_txtFullName" class="form-control validate[required]" placeholder="Nhập mật khẩu mới" />
                </div>
                <div class="contentInputBookRoom">
                    <label class="lblInputBookRoom">Xác nhận Mật khẩu</label>
                    <input name="renewpass" type="password" id="cpMain_txtFullName" class="form-control validate[required]" placeholder="Xác nhận mật khẩu mới" />
                </div>
               
            <button type="submit" id="cpMain_btnSend" class="btn btn1 btnSendkNow" name="submit" >Cập nhật</a>
        </form>

     </div>