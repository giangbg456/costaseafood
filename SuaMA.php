<?php 

    $id = $_REQUEST["id"];
    $data['tenmon'] = isset($_POST['tenmon']) ? $_POST['tenmon'] : '';
    $data['gia'] = isset($_POST['gia']) ? $_POST['gia'] : '';
    $data['loaimon'] = isset($_POST['loaimon']) ? $_POST['loaimon'] : '';
        
    $tenmon = $data['tenmon'];
    $gia = $data['gia'];
    $loaimon = $data['loaimon'];

    $sql = "SELECT `id`, `TenMon`, `HinhAnh`, `Gia`, `LoaiMon` FROM `thucdon` where  `id` = $id";
    $item = select_list($sql);
    

    $data = array();
    if(isset($_POST["submit_monan"])){        
            $query = "UPDATE thucdon SET `TenMon`='$tenmon',`Gia`='$gia',`LoaiMon`='$loaimon' WHERE `id`=$id";
            exec_update($query);
            
    }

?>
<div class="right-content-top-title">
    <h2>Sửa Thực Đơn </h2>
</div>
<div class="right-content-main">
    <?php  foreach($item as $i){ ?>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="contentInputBookRoom">
            <label class="lblInputBookRoom">Sửa Tên Món Ăn</label>
            <input name="tenmon" type="text" id="cpMain_txtEmail" class="form-control validate[required,custom[email]]"value="<?php echo $i["TenMon"];?>" />
        </div>
        <div class="contentInputBookRoom">
            <label class="lblInputBookRoom">Sửa Giá</label>
            <input name="gia" type="text" id="cpMain_txtEmail" class="form-control validate[required,custom[email]]"value="<?php echo $i["Gia"];?>" />
        </div>
        <div class="contentInputBookRoom">
            <label class="lblInputBookRoom">SửaLoại món</label>
            <select name="loaimon" id="cpMain_ddlTime" class="form-control selectpicker validate[required]" value="<?php echo $i["LoaiMon"];?>">
                <option value="Cháo">Cháo</option>
                <option value="Món Khai Vị">Món Khai Vị</option>
                <option value="Món Gỏi">Món Gỏi</option>
                <option value="Tôm">Tôm</option>
                <option value="Cua - Ghẹ">Cua - Ghẹ</option>
                <option value="Hàu">Hàu</option>
                <option value="Ốc Hương">Ốc Hương</option>
                <option value="Cá">Cá</option>
                <option value="Mực">Mực</option>
                <option value="Tráng Miệng">Tráng Miệng</option>
            </select>
        </div>
        <button name="submit_monan" Type="submit" id="cpMain_btnSend" class="btn btn1 btnSendkNow">Sửa
            món</button>
    </form>
    <?php }?>
</div>