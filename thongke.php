 <?php 
     $sql = "select * from mvc_user ";
     $datas = select_list($sql);
    print_r($datas)

?>
 

   <div class="right-content-top-title">
        <h2>Thống kê tài khoản</h2>
    </div>
    <div class="right-content-main">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Mã TK</th>
                    <th scope="col">Tên đăng nhập</th>
                    <th scope="col">Mật khẩu</th>
                    <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($datas as $data){?>
                    <tr>
                    <td><?php echo $data['maTK'];  ?></td>
                    <td><?php echo $data['username'];  ?></td>
                    <td><?php echo $data['password'];  ?></td>
                    <td><?php echo $data['Email'];  ?></td>
                    </tr>

                    <?php }?>
            </tbody>
        </table>    
     </div>
    
