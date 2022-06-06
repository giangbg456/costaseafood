<?php 
     $sql = "SELECT `id`, `TenMon`, `HinhAnh`, `Gia`, `LoaiMon` FROM thucdon";
     $datas = select_list($sql);
    
?>
 
   <div class="right-content-top-title">
        <a href="admin.php?id_page=thucdon" class="btn btn-danger" style="float:right;">Thêm Món</a>
        <h2>Danh sách món ăn</h2>
       
    </div>
    <div class="right-content-main">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Tên Món</th>
                    <th scope="col">Hình Ảnh</th>
                    <th scope="col">Giá</th>
                    <th scope="col">Loại Món</th>
                    <th scope="col">Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <hr>
                <tr>
                    <td>noidung</td>
                    <td>noidung2</td>
                </tr>
            </tbody>
        </table>    
     </div>
     