<?php 

    include("php/lib_db.php");


    
    $folder_path ='images/';
    $fileName = basename($_FILES["upload_file"]["name"]);
    
    echo $fileName;
    $file_path = $folder_path.$_FILES['upload_file']['name'];

    $flag_ok = true;

    
    $data['tenmon'] = isset($_POST['tenmon']) ? $_POST['tenmon'] : '';
    $data['gia'] = isset($_POST['gia']) ? $_POST['gia'] : '';
    $data['loaimon'] = isset($_POST['loaimon']) ? $_POST['loaimon'] : '';

    $tenmon = $data['tenmon'];
    $gia = $data['gia'];
    $loaimon = $data['loaimon'];

    
    $ex = array('jpg' , 'png' , 'jpeg' , 'gif');

    $file_type = strtolower(pathinfo($file_path, PATHINFO_EXTENSION));

    if(!in_array($file_type,$ex)){
        echo 'Loại file không hợp lệ';
        $flag_ok = false;
    }

    //check dung luong up lên

    if($_FILES['upload_file']['size']>1000000000){
        echo 'Dung lượng file quá lớn';
        $flag_ok =false;
    }
    if(isset($_POST["submit_monan"])){
        if($flag_ok){
            move_uploaded_file($_FILES['upload_file']['tmp_name'],$file_path);
            $query = "INSERT INTO `thucdon`(`TenMon`, `HinhAnh`, `Gia`, `LoaiMon`) VALUES ('$tenmon','$fileName','$gia','$loaimon')";
            // INSERT INTO (`id`, ) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5])
            exec_update($query);
        }    
        echo '<script language="javascript">';
        echo 'alert("Upload thành công")';
        echo '</script>';
        header("location: admin.php?id_page=thucdon1"); 
    }

?>
