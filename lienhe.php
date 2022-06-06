<?php  
    include ("php/lib_db.php");
    session_start();

    function myfuncion(){
        if(isset($_SESSION['username'])){
           echo 'admin.php'; 
       }
       else echo 'login.php';
   }

   $data['hoten'] = isset($_POST['hoten']) ? $_POST['hoten'] : '';
   $data['email'] = isset($_POST['email']) ? $_POST['email'] : '';
   $data['sdt'] = isset($_POST['sdt']) ? $_POST['sdt'] : '';
   $data['tieude'] = isset($_POST['tieude']) ? $_POST['tieude'] : '';
   $data['noidung'] = isset($_POST['noidung']) ? $_POST['noidung'] : '';

   $hoten = $data['hoten'];
   $sdt = $data['sdt'];
   $email = $data['email'];
   $tieude = $data['tieude'];
   $noidung = $data['noidung']; 

   if( isset($_POST["submit"]) )
{      
           $query = "INSERT INTO phanhoi(`hoten`, `email`, `sodienthoai`, `tieude`,`noidung`) VALUES ('$hoten','$email','$sdt','$tieude','$noidung')";
           exec_update($query);
           
           echo '<script language="javascript">';
               echo 'alert("Gửi phản hồi thành công!")';
               echo '</script>';
       
           
   }

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Cửa Hàng Hải Sản</title>
    <meta http-equiv="Content-Type" content="text/shtml; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link type="text/css" href="css/style_mainn.css" rel="stylesheet" media="screen"/>
    <link type="text/css" href="css/style_thucdon.css" rel="stylesheet" media="screen"/>
    <link type="text/css" href="css/style_gioithieu.css" rel="stylesheet" media="screen"/>
    <link type="text/css" href="css/style_lienhe.css" rel="stylesheet" media="screen"/>
    <link type="text/css" href="css/style-main-menu1.css" rel="stylesheet" media="screen"/>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    <header class=header> 
        <div class="container">
                <div class="top">
                    <h1  class="wrapLogoHeader"><a href="trangchu.php" class="logo" title="Trang chủ - Costa Seafood">
                        <img src="images/logo3.png" alt="Trang chủ - Costa Seafood"></a></h1>
                </div>  
                <div id="myNavbar" class="menu-top">
                    <ul class="nav nav-left">
                    <li><a href="trangchu.php" class="padding-menu">TRANG CHỦ</a></li>
                        <li><a href="gioithieu.php" class="padding-menu">GIỚI THIỆU</a></li>
                        <li><a href="thucdon.php" class="padding-menu">THỰC ĐƠN</a></li>
                        <li><a href="tintuc.php" class="padding-menu">TIN TỨC</a></li>
                    </ul>    
                    <ul class="nav nav-right">
                        
                        <li><a href="lienhe.php" class="padding-menu">LIÊN HỆ</a></li>
                        <li><a href="<?php myfuncion() ?>" class="padding-menu"><?php if (isset($_SESSION['username'])) {
                                        echo $_SESSION['username'];
                                    }else echo 'ĐĂNG NHẬP'; 
                                     ?></a></li>
                        <li class="search-open" style="padding-top:10px">
                                <a title="Tìm Kiếm" class="btnShowSearchInput" data-target="#collapseExample" data-toggle="collapse" href="javascript:;"  aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-search" aria-hidden="true"></i></a>
                                <div class="collapse form search-form animated js-auto-search" id="collapseExample">
                                    <div class="form-group">
                                    <form action="timkiem.php" method="POST">
                                    <input name="input_search" type="text" class="form-control inp-search js-input-search" placeholder="Tìm kiếm" >
                               
                                    <button type ="submit" class="btn btn1 btn-search js-btn-search"><i class="fa fa-search" aria-hidden="true"></i></button>

                                </form>
                                    </div>
                                </div>
                        </li>
                        <a href="booking.php" class="btn btn1 btnBookNow" title="Đặt bàn">ĐẶT BÀN</a>
                    </ul>
                </div>
        </div>
    </header>

    <div class="wrapBreadCrumb">
        <div class="wrap-img wrapImgBreadcrumb">
            <img src="images/1-1.jpg" class="imgBreadcrumbs"  alt="Tin Tức">
        </div>
        <div class="content sec-title center wrapTextBreadcrumb">
            <div class="container containerTextBreadcrumb">
                <h1 class="h2 title titlePageCurrentBreadcrumb">Tin Tức</h1>
                <ol class="breadcrumb olListBreqadcrumb">
                    <li class='itemListBreadcrumb'><a href='trangchu.php' class='linkListBreadcrumb' title='Trang chủ'>Trang chủ</a></li>
                    <li class='itemListBreadcrumb active'><a href='lienhe.php' class='linkListBreadcrumb'>Liên Hệ</a></li>
                </ol>
            </div>
        </div>
    </div>

    <div class="wrapMain contact">
        <div class="container containerMenu">
            <div class="contentMenu">
                <div class="sec-title wrapColContact">
                    <div class="row rowColContact">
                        <div class="col-md-6 colContactLeft">
                            <h3 class="h2 title titleColContact">Gửi phản hồi của bạn đến CHÚNG TÔI </h3>
                            <form action="" method="post">                
                            <div class="form wrapFormContact">
                                <div id="cpMain_upnContact">
	
                                        <div id="cpMain_pnlContact" class="validationEngineContainer">
		
                                            <div class="contentInputBookRoom">
                                                <label class="lblInputBookRoom">Họ tên (*)</label>
                                                <input name="hoten" type="text" id="cpMain_txtFullName" class="form-control validate[required]" placeholder="Họ tên" />
                                            </div>

                                            <div class="contentInputBookRoom">
                                                <label class="lblInputBookRoom">Email (*)</label>
                                                <input name="email" type="email" id="cpMain_txtEmail" class="form-control validate[required,custom[email]]" placeholder="Email" />
                                            </div>

                                            <div class="contentInputBookRoom">
                                                <label class="lblInputBookRoom">Điện thoại (*)</label>
                                                <input name="sdt" type="text" id="cpMain_txtPhone" class="form-control validate[required,custom[phone]]" placeholder="Điện thoại" />
                                            </div>

                                            <div class="contentInputBookRoom">
                                                <label class="lblInputBookRoom">Tiêu đề (*)</label>
                                                <input name="tieude" type="text" id="cpMain_txtTitle" class="form-control validate[required]" placeholder="Tiêu đề" />
                                            </div>

                                            <div class="contentInputBookRoom">
                                                <label class="lblInputBookRoom">Nội dung (*)</label>
                                                <textarea name="noidung" id="cpMain_txtContent" class="form-control validate[required]" rows="3" placeholder="Nội dung"></textarea>
                                            </div>
                                             
                                            <button name="submit" id="cpMain_lbtBooking" class="btn btn1 btnSendBookNow">Xác nhận</button>
                                        
                                </div>
                                        
                                    
                            </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-md-6 colContactRight">
                            <h3 class="h2 title titleColContact">Nhà Hàng Costa Seafood</h3>
                            <div class="wrapTextContact">
                                <p><b>Địa chỉ:</b> <a target="_blank" href="https://goo.gl/maps/tNYSyQUbbXYcbxjf6" title="175 Tây Sơn,Đống Đa, Hà Nội">175 Tây Sơn,Đống Đa, Hà Nội</a></p>
                                <p><b>Hotline:</b> <a href="tel:+84 393 036 245" rel="noreferrer" title="+84 393 036 245">+84 393 036 245</a></p>
                                <p><b>Email:</b> <a href="mailto:hoangminhgiang2000@gmail.com" rel="noreferrer" title="info@costaseafood.com.vn">info@costaseafood.com.vn</a></p>
                                
                                <p><b>Facebook:</b> <a href="https://www.facebook.com/hoangminhgiang.vn" target="_blank" rel="noreferrer" title="NHÀ HÀNG COSTA SEAFOOD">Facebook/Costa seafood/</a></p>
                            </div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.6452377403275!2d105.82102801472438!3d21.0068532939022!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ad6afbe27bfd%3A0x27047d56fd8f3194!2sNh%C3%A0%20H%C3%A0ng%20Costa%20SeaFood!5e0!3m2!1svi!2s!4v1610265633765!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer class="footer">
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-5 wrap-logo">
                        <a href="#" class="h3 main-title" title="Costa Seafood">Costa Seafood</a>
                        <div class="row address">
                            <div class="col-xs-12 col-sm-12">
                                <i class="fa fa-home" aria-hidden="true"></i>
                                <div>
                                    <span>Mở cửa 13:00 - 23:00 MỖI NGÀY</span>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <div>
                                    <a target="_blank" rel="noreferrer" href="https://goo.gl/maps/PtmA2Ai4qvV7zaG7A" title="Băc Giang">Bắc Giang</a>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <div>
                                    <a href="tel:+84 39 303 6245" title="+84 39 303 6245">+84 39 303 6245</a>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                <div>
                                    <a href="mailto:hoangminhgiang2000@gmail.com" title="info@costaseafood.com.vn">Góp Ý</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="link">
                            
                            <p class="h3 title">Món ngon hôm nay</p>
                            <div>
                                <a href="#" title="HÀU NƯỚNG MỠ HÀNH">HÀU NƯỚNG MỠ HÀNH</a>
                            
                                <a href="#" title="MIẾN XÀO HẢI SẢN">MIẾN XÀO HẢI SẢN</a>
                            
                                <a href="#" title="MỰC MỘT NẮNG HẤP">MỰC MỘT NẮNG HẤP</a>
                            
                                <a href="#" title="MỰC TRỨNG NƯỚNG MỌI">MỰC TRỨNG NƯỚNG MỌI</a>
                            
                                <a href="#" title="TÔM HÙM NƯỚNG PHÔ MAI">TÔM HÙM NƯỚNG PHÔ MAI</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="link">
                            <p class="h3 title">Liên kết nhanh</p>
                            <div>
                                
                                <a href="#" title="Trang chủ">Trang chủ</a>
                            
                                <a href="javascript:;" title="Giới thiệu">Giới thiệu</a>
                            
                                <a href="javascript:;" title="Thực đơn">Thực đơn</a>
                            
                                <a href="javascript:;" title="Khuyến mãi">Khuyến mãi</a>
                            
                                
                            
                                <a href="lienhe.php" title="Liên hệ">Liên hệ</a>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="wrap-cr">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <p>&copy; 2020 -<a href="#" title="Costa Seafood">&nbsp;Costa Seafood</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>