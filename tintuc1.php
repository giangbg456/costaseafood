<?php 
     $sql = "SELECT `id`, `TenTT`, `HinhAnh`, `NoiDung` FROM tintuc";
     $datas = select_list($sql);
    
?>
 

   <div class="right-content-top-title">
   <a href="admin.php?id_page=tintuc" class="btn btn-danger" style="float:right;">Thêm Tin Tức</a>
        <h2>Danh sách tin tức</h2>
    </div>
    <div class="right-content-main">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Tên Tin Tức</th>
                    <th scope="col">Hình Ảnh</th>
                    <th scope="col">Nội Dung</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php foreach($datas as $data){?>
                    <tr>
                    <td><?php echo $data['TenTT'];  ?></td>
                    <td><img width="244" height="144" src="images/<?php echo $data['HinhAnh'];  ?>"/></td>
                    <td><?php echo $data['NoiDung'];  ?></td>
                    
                    <td><a href="admin.php?id_page=suatt&id=<?php echo $data['id'];  ?>">Sửa</a>|<a href="deleteTT.php?id=<?php echo $data['id']?>">Xóa</a></td>
                    </tr>
                <?php }?>
            </tbody>
        </table>    
     </div>