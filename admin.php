<?php
    include('php/lib_db.php');
    $username = $_COOKIE['username'];
    
    $id_page =isset($_GET["id_page"]) ? $_GET["id_page"] : '';
    
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>TRang ADMIN</title>
    <meta http-equiv="Content-Type" content="text/shtml; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link type="text/css" href="css/a.css" rel="stylesheet" media="screen"/>
    <link type="text/css" href="css/admin.css" rel="stylesheet" media="screen"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link type="text/css" href="css/slide-anh.css" rel="stylesheet" media="screen"/>
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
                        <h1  class="wrapLogoHeader"><a href="trangchu.php" class="logo" title="Trang ch??? - Costa Seafood">
                            <img src="images/logo3.png" alt="Trang ch??? - Costa Seafood"></a></h1>
                    </div>  
                    <div id="myNavbar" class="menu-top">
                        <ul class="nav nav-left">
                        <li><a href="trangchu.php" class="padding-menu">TRANG CH???</a></li>
                            <li><a href="gioithieu.php" class="padding-menu">GI???I THI???U</a></li>
                            <li><a href="thucdon.php" class="padding-menu">TH???C ????N</a></li>
                            <li><a href="tintuc.php" class="padding-menu">TIN T???C</a></li>
                        </ul>    
                        <ul class="nav nav-right">
                            
                            <li><a href="lienhe.php" class="padding-menu">LI??N H???</a></li>
                            <li><a href="admin.php" class="padding-menu"><?php echo $username?></a></li>
                            <li class="search-open" style="padding-top:10px">
                        <a title="T??m Ki???m" class="btnShowSearchInput" data-target="#collapseExample"
                            data-toggle="collapse" href="javascript:;" aria-expanded="false"
                            aria-controls="collapseExample"><i class="fa fa-search" aria-hidden="true"></i></a>
                        <div class="collapse form search-form animated js-auto-search" id="collapseExample">
                            <div class="form-group">
                                <form action="timkiem.php" method="POST">
                                    <input name="input_search" type="text" class="form-control inp-search js-input-search" placeholder="T??m ki???m" >
                               
                                    <button type ="submit" class="btn btn1 btn-search js-btn-search"><i class="fa fa-search" aria-hidden="true"></i></button>

                                </form>
                            </div>
                        </div>
                    </li>
                            <a href="booking.php" class="btn btn1 btnBookNow" title="?????t b??n">?????T B??N</a>
                        </ul>
                    </div>
            </div>
        </header>     

    
    
        

    <div class="container-fluild" style="margin-top:50px">
        <div class="row">
            <div class="col-sm-3" style="padding-bottom: 30px;">
                <div class="userpage-slidebar" style="width:272px">
                    <div class="user-page-brief">
                        <img src="images/user.jpg" style="width: 50px; height: 50px;"/>
                        <div class="user-page-brief__right"> 
                            <div class="user-page-brief__username"><?php echo $username;?></div>
                            <a class="edit-user" href="admin.php?id_page=info">
                                <svg width="12" height="12" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg" style="margin-right: 4px;"><path d="M8.54 0L6.987 1.56l3.46 3.48L12 3.48M0 8.52l.073 3.428L3.46 12l6.21-6.18-3.46-3.48" fill="#9B9B9B" fill-rule="evenodd"></path></svg>
                                S???a h??? s??
                            </a>
                        </div>
                    </div>
                    <div class="userpage-slidebar-menu" >
                        <div class="userpage-slidebar-menu-web" >
                            <div class="title-admin-web">
                                <strong>Qu???n l?? trang web</strong>
                            </div>
                            <div class="content-admin-web">
                            <ul>
                                    
                                    <li><a href="admin.php?id_page=bandat">Danh s??ch b??n ?????t</a></li>
                                    <li><a href="admin.php?id_page=thucdon1">Danh s??ch th???c ????n</a></li>
                                    <li><a href="admin.php?id_page=tintuc1">Danh s??ch Tin T???c</a></li>
                                    <li><a href="admin.php?id_page=phanhoi">Ph???n h???i c???a kh??ch h??ng</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="userpage-slidebar-menu-user" >
                            <div class="title-admin-web">
                                <strong>Qu???n l?? t??i kho???n</strong>
                            </div>
                            <div class="content-admin-web">
                                <ul>
                                    <li><a href="admin.php?id_page=info">Th??ng tin t??i kho???n</a></li>
                                    <li><a href="admin.php?id_page=thongketk">Th???ng k?? t??i kho???n</a></li>
                                    <li><a href="admin.php?id_page=doimatkhau">?????i m???t kh???u</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="title-admin-web">
                            <a href = "logout.php" tite = "Logout">????ng Xu???t</a>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="col-sm-9">
                <div class="right-content">
                       <?php
                        if($id_page == 'info'){
                                include 'thongtintk.php';
                        }
                        else if($id_page == 'thongketk'){
                            include 'thongke.php';
                        }
                         elseif($id_page =='doimatkhau'){
                             include 'doimatkhau.php';
                         }
                         elseif($id_page =="bandat")
                         {
                             include 'danhsachbandat.php';
                         }
                         elseif($id_page=="tintuc")
                         {
                             include 'themtintuc.php';
                         }elseif($id_page=="thucdon")
                         {
                             include 'themthucdon.php';
                         }
                         elseif($id_page=="phanhoi")
                         {
                             include 'phanhoi.php';
                         }
                         elseif($id_page=="thucdon1")
                         {
                             include 'thucdon1.php';
                         }
                         elseif($id_page=="tintuc1")
                         {
                             include 'tintuc1.php';
                         }
                         elseif($id_page=="suatt")
                         {
                             include 'suatt.php';
                         }
                         elseif($id_page=="sua2")
                         {
                             include 'suaMA.php';
                         }
                        ?>
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
                                    <span>M??? c???a 13:00 - 23:00 M???I NG??Y</span>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <div>
                                    <a target="_blank" rel="noreferrer" href="https://goo.gl/maps/PtmA2Ai4qvV7zaG7A" title="B??c Giang">B???c Giang</a>
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
                                    <a href="mailto:hoangminhgiang2000@gmail.com" title="info@costaseafood.com.vn">G??p ??</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="link">
                            
                            <p class="h3 title">M??n ngon h??m nay</p>
                            <div>
                                <a href="#" title="H??U N?????NG M??? H??NH">H??U N?????NG M??? H??NH</a>
                            
                                <a href="#" title="MI???N X??O H???I S???N">MI???N X??O H???I S???N</a>
                            
                                <a href="#" title="M???C M???T N???NG H???P">M???C M???T N???NG H???P</a>
                            
                                <a href="#" title="M???C TR???NG N?????NG M???I">M???C TR???NG N?????NG M???I</a>
                            
                                <a href="#" title="T??M H??M N?????NG PH?? MAI">T??M H??M N?????NG PH?? MAI</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="link">
                            <p class="h3 title">Li??n k???t nhanh</p>
                            <div>
                                
                                <a href="#" title="Trang ch???">Trang ch???</a>
                            
                                <a href="javascript:;" title="Gi???i thi???u">Gi???i thi???u</a>
                            
                                <a href="javascript:;" title="Th???c ????n">Th???c ????n</a>
                            
                                <a href="javascript:;" title="Khuy???n m??i">Khuy???n m??i</a>
                            
                                
                            
                                <a href="lienhe.php" title="Li??n h???">Li??n h???</a>
                            
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

