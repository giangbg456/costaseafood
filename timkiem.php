<?php
    include('php/lib_db.php');
    $username = $_COOKIE['username'];
    
    $id_page =isset($_GET["id_page"]) ? $_GET["id_page"] : '';

    $input_search = isset($_REQUEST["input_search"]) ? $_REQUEST["input_search"] : '';
   
    $where = "WHERE `TenMon` like '%$input_search%'";
    $query = "SELECT * FROM `thucdon` $where";
 
      $data = select_list($query);

  $count = 0; 

    if(($data)  != ''){
      foreach ($data as $item){
        $count ++;
      }

    }
    
    

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <title>TRang ADMIN</title>
    <meta http-equiv="Content-Type" content="text/shtml; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link type="text/css" href="css/a.css" rel="stylesheet" media="screen" />
    <link type="text/css" href="css/admin.css" rel="stylesheet" media="screen" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link type="text/css" href="css/slide-anh.css" rel="stylesheet" media="screen" />
    <link type="text/css" href="css/style_lienhe.css" rel="stylesheet" media="screen" />

    <link type="text/css" href="css/style_thucdon.css" rel="stylesheet" media="screen"/>

    <link type="text/css" href="css/search_style.css" rel="stylesheet" media="screen" />
    <link type="text/css" href="css/style-main-menu1.css" rel="stylesheet" media="screen" />
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
                    <li><a href="admin.php" class="padding-menu"><?php echo $username?></a></li>
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
    <div class="container">
        <div class="box-search">
            <div class="box_mid" style="padding-top:40px">
                <div class="mid-title">
                    <div class="titleL">
                      
                        <h2>Kết quả tìm kiếm</h2>

                        
                    </div>
                    <div class="titleR"></div>
                    <div class="clear"></div>

                </div>
            </div>

            <div class="mid-content">
                
                <p>Kết quả tìm kiếm <b class=font_err>tất cả</b> với từ khóa <span class="font_keyword"><?php echo $input_search; ?> </span>
                </p>
                <p class="mess_result"><b class=font_err><?php echo $count; ?></b> tìm thấy bản ghi nào</p>
                <?php if($count == 0 ){
                        
                        ?>

                    <div class="no_result">Không tìm thấy kết quả nào</div>
                <?php
                      }
                      else{
                            
                          
                      ?>
                
                <div class="wrapMain menu">
                    <div class="container containerMenu">
                        <div class="listFoodMenu">
                            <div class="row rowListFoodMenu">
                               <?php if(($data) != ''){ foreach($data as $item){

                                ?>
                                <div class="col-sm-6 col-md-3 colItemFoodMenu">
                                    <div class="sec-title center contentItemFoodMenu">
                                        <div class="wrapBorderImgItemFoodMenu">
                                            <div class="thu-nghiem-zoom">
                                                <img width="244" height="144" src="images/<?php echo $item['HinhAnh']; ?>"
                                                    class="imgItemFoodMenu " />
                                            </div>
                                        </div>

                                        <h3 class="h2 titlefood titleHeadingItemFoodMenu">
                                        <?php echo $item['TenMon']; ?>
                                        </h3>

                                        <div class="priceItemFoodMenu"></div>
                                    </div>
                                </div>
                              <?php } }?>
                                
                            </div>
                        </div>
                    </div>
                </div>
                  <?php } ?>

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