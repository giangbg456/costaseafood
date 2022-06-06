<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);
   
   echo '<script language="javascript">';
                echo 'alert("Bạn đã đăng xuất thành công !")';
                echo '</script>'; 
   header('Refresh: 0; URL = trangchu.php');
?>