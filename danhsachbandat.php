<?php 
     $sql = "select hoten,sodienthoai,date,time,soluong,note from booking ";
     $datas = select_list($sql);

?>
 

   <div class="right-content-top-title">
        <h2>Danh sách bàn đặt</h2>
    </div>
    <div class="right-content-main">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Họ Tên</th>
                    <th scope="col">Số Điện Thoại</th>
                    <th scope="col">Ngày</th>
                    <th scope="col">Giờ</th>
                    <th scope="col">Số Lượng Khách</th>
                    <th scope="col">Ghi chú</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($datas as $data){?>
                    <tr>
                    <td><?php echo $data['hoten'];  ?></td>
                    <td><?php echo $data['sodienthoai'];  ?></td>
                    <td><?php echo $data['date'];  ?></td>
                    <td><?php echo $data['time'];  ?></td>
                    <td><?php echo $data['soluong'];  ?></td>
                    <td><?php echo $data['note'];  ?></td>
                    </tr>

                    <?php }?>
            </tbody>
        </table>    
     </div>