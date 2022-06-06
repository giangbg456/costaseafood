<?php 

    include("php/lib_db.php");

    $folder_path ='images/';
    $fileName = basename($_FILES["upload_file"]["name"]);
    
    $file_path = $folder_path.$_FILES['upload_file']['name'];

    $flag_ok = true;

    $data = array();
    $data['tieude'] = isset($_POST['tieude']) ? $_POST['tieude'] : '';
    $data['noidung'] = isset($_POST['noidung']) ? $_POST['noidung'] : '';

    $tieude = $data['tieude'];
    $noidung = $data['noidung'];

    
    
    $ex = array('jpg' , 'png' , 'jpeg' , 'gif');

    $file_type = strtolower(pathinfo($file_path, PATHINFO_EXTENSION));

   
    //check dung luong up lên

    if($_FILES['upload_file']['size']>1000000000){
        echo 'Dung lượng file quá lớn';
        $flag_ok =false;
    }
    if(isset($_POST["submit"])){
        if($flag_ok){
            move_uploaded_file($_FILES['upload_file']['tmp_name'],$file_path);
            $query = "INSERT into tintuc (tentt, hinhanh, noidung) VALUES ('$tieude','$fileName', '$noidung')";
            exec_update($query);
            echo '<script language="javascript">';
            echo 'alert("Upload thành công")';
            echo '</script>';
            header("location: admin.php?id_page=tintuc1");
        }    
        
    }

?>
