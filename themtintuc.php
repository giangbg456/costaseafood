<div class="right-content-top-title">
        <h2>Thêm tin tức mới</h2>
</div>
<div class="right-content-main">
        <form action="upload.php" method="POST" enctype="multipart/form-data">
                <div class="contentInputBookRoom">
                    <label class="lblInputBookRoom">Chọn Hình ảnh</label>
                    <input name="upload_file" type="file" id="cpMain_txtFullName" value="Upload" class="form-control validate[required]"/>
                </div>

                <div class="contentInputBookRoom">
                    <label class="lblInputBookRoom">Tên tiêu đề</label>
                    <input name="tieude" type="text" id="cpMain_txtEmail" class="form-control validate[required,custom[email]]"  />
            </div>
            <div class="contentInputBookRoom">
                    <label class="lblInputBookRoom">Nội Dung tin tức</label>
                    <input name="noidung" type="text" id="cpMain_txtEmail" class="form-control validate[required,custom[email]]"  />
            </div>
            
            <button name="submit" Type="submit" id="cpMain_btnSend" class="btn btn1 btnSendkNow">Thêm Tin Tức</button>
        </form>

     </div>