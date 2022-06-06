<?php
    include("php/lib_db.php");
    session_start();

    $data['HoTen'] = isset($_POST['hoten']) ? $_POST['hoten'] : '';
    $data['SDT'] = isset($_POST['SDT']) ? $_POST['SDT'] : '';
    $data['Date'] = isset($_POST['date']) ? $_POST['date'] : '';
    $data['Time'] = isset($_POST['time']) ? $_POST['time'] : '';
    $data['SoLuong'] = isset($_POST['soluong']) ? $_POST['soluong'] : '';
    $data['Note'] = isset($_POST['note']) ? $_POST['note'] : '';

    $hoten = $data['HoTen'];
    $sdt = $data['SDT'];
    $date = $data['Date'];
    $time = $data['Time'];
    $soluong = $data['SoLuong'];
    $note = $data['Note'];  

    if( isset($_POST["submit"]) )
{      
            $query = "INSERT INTO booking(`hoten`, `sodienthoai`, `date`, `time`,`soluong`,`note`) VALUES ('$hoten','$sdt','$date','$time','$soluong','$note')";
            exec_update($query);
            
            echo '<script language="javascript">';
                echo 'alert("Đặt bàn thành công!")';
                echo '</script>';
        
            
    }

    function myfuncion(){
        if(isset($_SESSION['username'])){
           echo 'admin.php';
       }
       else echo 'login.php';
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
    <link type="text/css" href="css/booking.css" rel="stylesheet" media="screen"/>
    <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
    
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
                        <li>
                            <a href="#" title="Tìm kiếm" class="padding-menu" ><i class="fa fa-search" aria-hidden="true"></i></a>
                            
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
                            <h1 class="h2 title titlePageCurrentBreadcrumb">Đặt Bàn</h1>
                            <ol class="breadcrumb olListBreqadcrumb">
                                <li class='itemListBreadcrumb'><a href='#' class='linkListBreadcrumb' title='Trang chủ'>Trang chủ</a></li>
                                <li class='itemListBreadcrumb active'><a href='#' class='linkListBreadcrumb'>Đặt Bàn</a></li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="wrapMain formBook">
        <div class="container containerMenu">
            <div class="contentMenu">
                
                        <div class="sec-title center wrapControlFillterFood">
                                        <div class="wrapIconFillterFood">
                                            <img src="images/icon-restaurant.png" class="iconMenuFillter" alt="Menu"/>
                                        </div>
                                        <div class="title titleControlFillterFood" style="font-size:25px">Giờ mở cửa</div>
                                        <div class="descriptionBook" style="font-size:18px">Nhà hàng Costa Seafood là sự lựa chọn lý tưởng cho những thực khách yêu hải sản.</div>

                                        <div class="wrapTextDatCho">
                                            <div class="row rowDatCho">
                                                <div class="col-sm-6 colItemDatCho colLeft">
                                                    <div class="wrapTextDetailDatCho">
                                                        <div style="text-transform: uppercase; color: #a0a0a0; font-size: 13px; line-height: 20px;">Thứ Hai - Chủ Nhật</div>
                                                        <div style="font-weight: 700; text-transform: uppercase; font-size: 13px; line-height: 20px;">Từ 06:00 Đến 22:00</div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6 colItemDatCho colRight">
                                                    <div class="wrapTextDetailDatCho">
                                                        <div style="text-transform: uppercase; color: #a0a0a0; font-size: 13px; line-height: 20px;">Gọi để đặt chỗ</div>
                                                        <div style="font-weight: 700; text-transform: uppercase; font-size: 13px; line-height: 20px;"><a href="tel:+84 393 036 245" title="tel:+84 393 036 245">tel:+84 393 036 245 (Mr Giang)</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                            </div>
                        <form action="" method="post">
                            <div class="form listInputBookRoom">
                                <div class="row">
                                            <div class="col-sm-6 col-md-4 ">
                                                <div class="contentInputBookRoom">
                                                    <label class="lblInputBookRoom">Họ tên (*)</label>
                                                    <input name="hoten" type="text" id="cpMain_txtFullName" class="form-control validate[required]" placeholder="Họ tên" />
                                                </div>
                                            </div>

                                            <div class="col-sm-6 col-md-4 ">
                                                <div class="contentInputBookRoom">
                                                    <label class="lblInputBookRoom">Điện thoại (*)</label>
                                                    <input name="SDT" type="text" id="cpMain_txtPhone" class="form-control validate[required, custom[phone]]" placeholder="Điện thoại" />
                                                </div>
                                            </div>

                                            

                                            <div class="col-sm-6 col-md-4 ">
                                                <div class="contentInputBookRoom">
                                                    <label class="lblInputBookRoom">Ngày (*)</label>
                                                    <input name="date" type="date" id="cpMain_txtArrivalDate"  class="form-control js-date-avarrial validate[required]" placeholder="Ngày" />
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 colInputBookRoom">
                                        <div class="contentInputBookRoom">
                                            <label class="lblInputBookRoom">Giờ (*)</label>
                                            <select name="time" id="cpMain_ddlTime" class="form-control selectpicker validate[required]">
			<option value="6:00">6:00</option>
			<option value="6:30">6:30</option>
			<option value="7:00">7:00</option>
			<option value="7:30">7:30</option>
			<option value="8:00">8:00</option>
			<option value="8:30">8:30</option>
			<option value="9:00">9:00</option>
			<option value="9:30">9:30</option>
			<option value="10:00">10:00</option>
			<option value="10:30">10:30</option>
			<option value="11:00">11:00</option>
			<option value="11:30">11:30</option>
			<option value="12:00">12:00</option>
			<option value="12:30">12:30</option>
			<option value="13:00">13:00</option>
			<option value="13:30">13:30</option>
			<option value="14:00">14:00</option>
			<option value="14:30">14:30</option>
			<option value="15:00">15:00</option>
			<option value="15:30">15:30</option>
			<option value="16:00">16:00</option>
			<option value="16:30">16:30</option>
			<option value="17:00">17:00</option>
			<option value="17:30">17:30</option>
			<option value="18:00">18:00</option>
			<option value="18:30">18:30</option>
			<option value="19:00">19:00</option>
			<option value="19:30">19:30</option>
			<option value="20:00">20:00</option>
			<option value="20:30">20:30</option>
			<option value="21:00">21:00</option>
			<option value="21:30">21:30</option>

		</select>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-4 colInputBookRoom">
                                        <div class="contentInputBookRoom">
                                            <label class="lblInputBookRoom">Số khách (*)</label>
                                            <input name="soluong" type="text" id="cpMain_txtNumberPeople" class="form-control validate[required] js-integer" min="1" value="1" placeholder="Số khách" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 colInputBookRoom">
                                        <div class="contentInputBookRoom">
                                            <label class="lblInputBookRoom">Ghi chú</label>
                                            <input name="note" type="text" id="cpMain_txtNote" class="form-control" placeholder="Ghi chú" />
                                        </div>
                                    </div>
                                </div>      
                                <div class="col-sm-12 col-md-12 colInputBookRoom">
                                        <div class="contentInputBookRoom">
                                            <button name="submit" id="cpMain_lbtBooking" class="btn btn1 btnSendBookNow">Xác nhận</button>
                                        </div>
                                </div>  
                            </div>

                    </div>
                </form>
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
                            
                                <a href="#" title="Thư viện ảnh">Thư viện ảnh</a>
                            
                                <a href="#" title="Liên hệ">Liên hệ</a>
                            
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