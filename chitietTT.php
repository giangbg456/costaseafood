<?php
    include('php/lib_db.php');
    session_start();

    function myfuncion(){
        if(isset($_SESSION['username'])){
           echo 'admin.php';
       }
       else echo 'login.php';
   }
    $sql = "select * from tintuc ";
    $datas = select_list($sql);
    //print_r($datas); exit();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<style>
.thu-nghiem-zoom img{transition: all .3s ease;}
.thu-nghiem-zoom img:hover{transform: scale(1.5);}
.thu-nghiem-zoom p{display:block;overflow: hidden;}
</style>
    <title>Cửa Hàng Hải Sản</title>
    <meta http-equiv="Content-Type" content="text/shtml; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link type="text/css" href="css/style_mainn.css" rel="stylesheet" media="screen"/>
    <link type="text/css" href="css/style_thucdon.css" rel="stylesheet" media="screen"/>
    <link type="text/css" href="css/style_gioithieu.css" rel="stylesheet" media="screen"/>
    <link type="text/css" href="css/style-main-menu1.css" rel="stylesheet" media="screen"/>
    <link type="text/css" href="css/chitietTT.css" rel="stylesheet" media="screen"/>
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
            <img src="images/breadcrumb-2.jpg" class="imgBreadcrumbs"  alt="Thực đơn">
        </div>
        <div class="content sec-title center wrapTextBreadcrumb">
            <div class="container containerTextBreadcrumb">
                <h1 class="h2 title titlePageCurrentBreadcrumb">Tin Tức</h1>
                <ol class="breadcrumb olListBreqadcrumb">
                    <li class='itemListBreadcrumb'><a href='trangchu.php' class='linkListBreadcrumb' title='Trang chủ'>Trang chủ</a></li>
                    <li class='itemListBreadcrumb active'><a href='chitietTT.php' class='linkListBreadcrumb'>Chi Tiết</a></li>
                </ol>
            </div>
            </div>
        </div>
    </div>

    <?php foreach($datas as $item){ ?>
        <div class="container containerMenu">
            <div class="contentMenu">
                <div class="row rowPromotionDetail">
                    <div class="col-md-8 colPromotionDetail">
                        <div class="wrapDetailPromotion">
                            <div class="sec-title wrapTitlePromotionDetail">
                                <div class="title h2 titlePromotionDetail"><?php echo $item['TenTT'];?></div>

                                <div class="noidung">
                                    <p><?php echo $item['NoiDung'];?></p>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php }?>
                                

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
                                <a href="thucdon.php" title="HÀU NƯỚNG MỠ HÀNH">HÀU NƯỚNG MỠ HÀNH</a>
                            
                                <a href="thucdon.php" title="MIẾN XÀO HẢI SẢN">MIẾN XÀO HẢI SẢN</a>
                            
                                <a href="thucdon.php" title="MỰC MỘT NẮNG HẤP">MỰC MỘT NẮNG HẤP</a>
                            
                                <a href="thucdon.php" title="MỰC TRỨNG NƯỚNG MỌI">MỰC TRỨNG NƯỚNG MỌI</a>
                            
                                <a href="thucdon.php" title="TÔM HÙM NƯỚNG PHÔ MAI">TÔM HÙM NƯỚNG PHÔ MAI</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="link">
                            <p class="h3 title">Liên kết nhanh</p>
                            <div>
                                
                                
                                <a href="trangchu.php" title="Trang chủ">Trang chủ</a>
                                
                                <a href="gioithieu.php" title="Giới thiệu">Giới thiệu</a>
                            
                                <a href="thucdon.php" title="Thực đơn">Thực đơn</a>
                            
                                <a href="tintuc.php" title="Khuyến mãi">Tin Tức</a>
                            
                                
                            
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