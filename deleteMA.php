<?php 

    include('php/lib_db.php');
    $id =$_REQUEST['id'];

    $sql="delete from thucdon where id =$id";
    exec_update($sql);
    echo '<script language="javascript">';
    echo 'alert("Xóa thành công")';
    echo '</script>';
    header("location: admin.php?id_page=thucdon1");


?>




