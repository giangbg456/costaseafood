<?php
    session_start();
    include('php/lib_db.php');
    $sql = "select * from thucdon limit 6";
    $datas = select_list($sql);
    //print_r($datas); exit();

    function myfuncion(){
         if(isset($_SESSION['username'])){
            echo 'admin.php';
        }
        else echo 'login.php';
    }
    $id_page =isset($_GET["id_page"]) ? $_GET["id_page"] : '';

    
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <style>
    .thu-nghiem-zoom img {
        transition: all .3s ease;
    }

    .thu-nghiem-zoom img:hover {
        transform: scale(1.5);
    }

    .thu-nghiem-zoom p {
        display: block;
        overflow: hidden;
    }
    </style>
    <title>Cửa Hàng Hải Sản</title>
    <meta http-equiv="Content-Type" content="text/shtml; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link type="text/css" href="css/style_mainn.css" rel="stylesheet" media="screen" />
    <link type="text/css" href="css/style-main-menu1.css" rel="stylesheet" media="screen" />
    <link type="text/css" href="css/slide-anh.css" rel="stylesheet" media="screen" />

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</head>

<body>
    <header class=header>
        <div class="container">
            <div class="top">
                <h1 class="wrapLogoHeader"><a href="trangchu.php" class="logo" title="Trang chủ - Costa Seafood">
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
                    <li><a href="<?php myfuncion() ?>" class="padding-menu">
                            <?php if (isset($_SESSION['username'])) {
                                        echo $_SESSION['username'];
                                    }else echo 'ĐĂNG NHẬP'; 
                                     ?>
                        </a></li>
                    <li class="search-open" style="padding-top:10px">
                        <a title="Tìm Kiếm" class="btnShowSearchInput" data-target="#collapseExample"
                            data-toggle="collapse" href="javascript:;" aria-expanded="false"
                            aria-controls="collapseExample"><i class="fa fa-search" aria-hidden="true"></i></a>
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
    <div class="wrap-main">
        <div class="slideshow-container">

            <div class="mySlides  back-slide">
                <img src="images/3.jpg" style="width:100%; height:750px; opacity:.5;">
                <div class="content">
                    <h2 class="h2 title">Thiên đường ẩm thực</h2>
                </div>
            </div>

            <div class="mySlides  back-slide">
                <img src="images/4-0.jpg" style="width:100%; height:750px; opacity:.5;">
                <div class="content">
                    <h2 class="h2 title">Ưu đãi đặc biệt </h2>
                </div>
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

        </div>
        <br>

        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
        </div>
    </div>

    <script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }
    </script>



    <section class="sec sec-intro">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6 img">
                    <div class="wrap-img-cover first wow fadeInLeft"
                        style="visibility:visible ; animation-name: fadaInLeft">
                        <img src="images/1-1.jpg" class="lazyload" alt="GIỚI THIỆU COSTA SEAFOOD" />
                    </div>
                    <div class="wrap-img-cover second wow fadeInUp" style="visibility:visible ;">
                        <img src="images/3.jpg" class="lazyload" alt="GIỚI THIỆU COSTA SEAFOOD" />
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 content sec-title wow fadeInUp">
                    <h2 class="h2 title">GIỚI THIỆU COSTA SEAFOOD</h2>
                    <p class="desc">
                        Costa Seafood là sự lựa chọn lý tưởng cho Thực Khách đam mê hải sản với các món ăn độc đáo, đẳng
                        cấp được chế biến từ nguồn hải sản tươi sống tại địa phương cũng như được nhập khẩu từ nước
                        ngoài.
                    </p>
                    <p class="desc special">
                        Đến với nhà hàng của chúng tôi Thực Khách sẽ được chiêm ngưỡng phong cách thiết kế hiện đại nhìn
                        ra biển cùng một không gian ấm cúng và trang trọng cùng với ẩm thực được đánh giá ngon nhất thế
                        giới được chế biến bởi những đầu bếp hàng đầu thế giới, nhà hàng Costa Seafood là sự lựa chọn lý
                        tưởng cho những thực khách yêu hải sản.
                    </p>
                    <a href="gioithieu.php" class="btn btn1 " title="Xem thêm">XEM THÊM</a>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-menu">

        <div class="menu ">

            <div class="left has-bg-src bg-parallax wow fadeInUp box"
                style=" background-image: url(images/3.jpg); visibility: visible; animation-name: fadeInUp;">
                <div class="content sec-title center">
                    <h3 class="h2 title">Thực đơn gọi món</h3>
                    <p class="desc">
                        Đến với Costa Seafood, Quý khách sẽ ngạc nhiên bởi sự đa dạng của các món ăn được chế biến từ
                        những nguyên liệu tươi ngon nhất như: Tôm hùm, Tôm tích, Cá mú, Cua, Mực,… cũng như các loại hải
                        sản nổi tiếng được nhập khẩu trực tiếp như: Cua Alaska,...
                    </p>
                    <a href="thucdon.php" class="btn btn1" title="Xem thực đơn">Xem thực đơn</a>
                </div>
            </div>

            <div class="right has-bg-src bg-parallax wow fadeInUp box "
                style=" background-image: url(images/14.jpg); visibility: visible; animation-name: fadeInUp;">
                <div class="content sec-title center">
                    <h3 class="h2 title">Thực đơn theo nhóm</h3>
                    <p class="desc">
                        Các đầu bếp hàng đầu của Costa Seafood đã tính toán kỹ lưỡng để sắp xếp các món ăn theo nhóm một
                        cách khoa học, giúp bữa ăn của bạn cân đối dinh dưỡng hơn, tiết kiệm hơn với thực đơn theo nhóm
                        của chúng tôi.
                    </p>
                    <a href="thucdon.php" class="btn btn1" title="Xem thực đơn">Xem thực đơn</a>
                </div>
            </div>

        </div>
    </section>

    <section class="sec sec-gallery">
        <div class="container">
            <div class="sec-title center wow fadeInUp">
                <h2 class="h2 title">Thư viện ảnh</h2>
            </div>

            <div class="row">
                <?php foreach($datas as $data){?>

                <div class="col-md-4 col-sm-6 col-xs-12 item p-3 thu-nghiem-zoom">

                    <img src="images/<?php echo $data["HinhAnh"];?>" width="350" alt="Món ngone" />
                </div>
                <?php }?>



            </div>
        </div>

    </section>
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
                                    <a target="_blank" rel="noreferrer" href="https://goo.gl/maps/PtmA2Ai4qvV7zaG7A"
                                        title="Băc Giang">Bắc Giang</a>
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
                                    <a href="mailto:hoangminhgiang2000@gmail.com" title="info@costaseafood.com.vn">Góp
                                        Ý</a>
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