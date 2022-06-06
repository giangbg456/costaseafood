<div class="right-content-top-title">
        <h2>Thêm Thực Đơn Mới</h2>
</div>
<div class="right-content-main">
    <form action="upload_monan.php" method="POST" enctype="multipart/form-data">  
                <div class="contentInputBookRoom">
                    <label class="lblInputBookRoom">Chọn Hình ảnh</label>
                    <input name="upload_file" type="file" id="cpMain_txtFullName" value="Upload" class="form-control validate[required]"/>
                </div>

                <div class="contentInputBookRoom">
                    <label class="lblInputBookRoom">Tên Món Ăn</label>
                    <input name="tenmon" type="text" id="cpMain_txtEmail" class="form-control validate[required,custom[email]]"  />
            </div>
            <div class="contentInputBookRoom">
                    <label class="lblInputBookRoom">Giá</label>
                    <input name="gia" type="text" id="cpMain_txtEmail" class="form-control validate[required,custom[email]]"  />
            </div>
            <div class="contentInputBookRoom">
                    <label class="lblInputBookRoom">Loại món</label>
                    <select name="loaimon" id="cpMain_ddlTime" class="form-control selectpicker validate[required]">
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
            
            <button name="submit_monan" Type="submit_monan" id="cpMain_btnSend" class="btn btn1 btnSendkNow">Thêm món</button>
        </form>

        
     </div>