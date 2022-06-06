<?php 
     $sql = "select hoten,email,sodienthoai,tieude,noidung from phanhoi ";
     $datas = select_list($sql);

?>
 

   <div class="right-content-top-title">
        <h2>Danh sách phản hồi</h2>
    </div>
    <div class="right-content-main">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Họ Tên</th>
                    <th scope="col">Email</th>
                    <th scope="col">Số Điện Thoại</th>
                    <th scope="col">Tiêu Đề</th>
                    <th scope="col">Nội Dung</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php foreach($datas as $data){?>
                    <tr>
                    <td><?php echo $data['hoten'];  ?></td>
                    <td><?php echo $data['email'];  ?></td>
                    <td><?php echo $data['sodienthoai'];  ?></td>
                    <td><?php echo $data['tieude'];  ?></td>
                    <td><?php echo $data['noidung'];  ?></td>
                   
                    </tr>

                    <?php }?>
            </tbody>
        </table>    
     </div>