<?php


    $id = $_REQUEST["id"];;
    
    
    $data = array();
    $data['tieude'] = isset($_POST['tieude1']) ? $_POST['tieude1'] : '';
    $data['noidung'] = isset($_POST['noidung1']) ? $_POST['noidung1'] : '';

    $tieude = $data['tieude'];
    $noidung = $data['noidung'];

   
    
    if(isset($_POST["submit"])){   
            $query = "UPDATE tintuc SET `TenTT`='$tieude',`NoiDung`='$noidung' WHERE `id`= '$id'";
            exec_update($query);
    }   
    
?>
<div class="right-content-top-title">
        <h2>Sửa tin tức </h2>
</div>
<div class="right-content-main">
        <form action="" method="POST" enctype="multipart/form-data">
                <div class="contentInputBookRoom">
                    <label class="lblInputBookRoom">Sửa Tiêu Đề</label>
                    <input name="tieude1" type="text" id="cpMain_txtEmail" class="form-control validate[required,custom[email]]"  />
            </div>
            <div class="contentInputBookRoom">
                    <label class="lblInputBookRoom">Sửa Nội Dung</label>
                    <input name="noidung1" type="text" id="cpMain_txtEmail" class="form-control validate[required,custom[email]]"  />
            </div>
            
            <button name="submit" Type="submit" id="cpMain_btnSend" class="btn btn1 btnSendkNow">Thay Đổi Tin Tức</button>
        </form>

     </div>