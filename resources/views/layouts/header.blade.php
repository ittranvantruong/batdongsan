<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
   <!-- <meta name="viewport" content="width=device-width, initial-scale=1 /> -->
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <!-- <meta name="csrf-token" content="{{ csrf_token()}}" /> -->

  <title>Bất động sản</title>

  <!-- Latest compiled and minified CSS -->
   
  <link rel="stylesheet" href="{{asset('public/bootstrap/bootstrap.min.css')}}">
  <script type="text/javascript" src="{{asset('public/js/jquery.min.js')}}"></script>
  <script src="{{asset('public/bootstrap/popper.min.js')}}"></script>
  <script src="{{asset('public/bootstrap/bootstrap.min.js')}}"></script>
  


  
  
  <link rel="stylesheet" href="{!!url('public/css/home.css')!!}">
  <link rel="stylesheet" href="{!!url('public/css/main.css')!!}">
  <link rel="stylesheet" href="{!!url('public/css/header.css')!!}">
  <link rel="stylesheet" href="{!!url('public/css/footer.css')!!}">
  <link rel="stylesheet" href="{!!url('public/css/carousel-custom.css')!!}">
    
</head>

<body>

<header id="header_main">
<div class="menu_mobile">

    <div class="content_menu_mobile">
        <h1 class="logo_mobile">
            <a href="#"><img class="logo_wap" src="{{asset('public/image/customLogo.png')}}" alt=""></a>
        </h1>
        <a href="#" id="saveList" rel="nofollow" title="Danh mục" class="st_panel">
            <span  class="img_nav">
                <img src="{{asset('public/image/ic_savelist.svg')}}">
            </span>
        </a>
        <a class="button_toggle_menu st_panel">
            <span class="img_nav"><img id="toggle_menu_mobile" src="{{asset('public/image/ic_hamburger_menu_1.svg')}}" alt=""></span>
        </a>
    </div>
    
</div>
<div class="bg_menu"></div>
<div id="top_search_mobile">
    <div class="home_search">
        <div class="searh_input">
            <span class="search_btn">
                <img src="{{asset('public/image/ic_search.svg')}}" alt="">
            </span>
            <span class="search_text" id="quicksearch" data-toggle="modal" data-target="#modal_search_mobile" data-whatever="@mdo">Tìm kiếm địa điểm, khu vực</span>
            <span class="clear"></span>
        </div>
    </div>
</div>
<div id="menu_body">
    
    <div class="menu_right">
        <div class="clearfix">
            <div class="login_group" data-toggle="tooltip" data-placement="bottom" title="Danh sách tin đã lưu">
                <span id="notice" class="notification">
                    <img class="iconNotice" src="{{asset('public/image/ic_shortlist.svg')}}">
                </span>
            </div>
        </div>
        <div id="div_user_login" class="clearfix">
            <div class="join_group">
                <span>
                    <a href="#" id="user_login">Đăng nhập</a>
                </span>
                <span class="line">|</span>
                <span>
                    <a href="#" id="user_register">Đăng ký</a>
                </span>
            </div>
        </div>
        <div id="Header_UserControl_divPostProduct">
            <a href="#" id="post_product" class="btn btn-outline-primary">Đăng tin</a>
        </div>
    </div>

    <div class="menu_left">
        <div class="logo">
            <h1>
                <a href="#"><img src="{{asset('public/image/customLogo.png')}}" alt=""></a>
            </h1>
        </div>
        <div class="menu">
            <ul class="dropdown_menu dropdown_menu_mobile">
                <li class="lv0 tablet">
                    <a href="#">
                        <span class="icon">
                            <img src="{{asset('public/image/ic_shortlist.svg')}}" alt="">
                        </span>
                        <span class="text">Tin đã lưu</span>
                    </a>
                </li>
                <li class="lv0">
                    <a href="#">
                        <span class="icon">
                            <img src="{{asset('public/image/ic_shortlist.svg')}}" alt="">
                        </span>

                        <span class="text">Trang chủ</span>
                    </a>
                </li>
                <li class="lv0">
                    <a href="#">
                        <span class="icon">
                            <img src="{{asset('public/image/ic_shortlist.svg')}}" alt="">
                        </span>
                        <span class="text">Nhà đất cho thuê</span>
                    </a>
                    <div class="arrrow"></div>
                    <ul class="dropdown_submenu">
                        <li class="lv1">
                            <a href="" class="haslink indent">
                                Nhà đất cần thuê
                            </a>
                            <ul class="dropdown_submenu" style="left:240px">
                                <li class="lv2">
                                    <a href="" class="haslink indent">
                                        Nhà đất cần thuê
                                    </a>
                                </li>
                                <li class="lv2">
                                    <a href="" class="haslink indent">
                                        Nhà đất cần thuê
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="lv1">
                            <a href="" class="haslink indent">
                                Nhà đất cần thuê
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="lv0">
                    <a href="#">
                        <span class="icon">
                            <img src="{{asset('public/image/ic_shortlist.svg')}}" alt="">
                        </span>
                        <span class="text">Nhà đất cho thuê</span>
                    </a>
                    <div class="arrrow"></div>
                    <ul class="dropdown_submenu">
                        <li class="lv1">
                            <a href="" class="haslink indent">
                                Nhà đất cần thuê
                            </a>
                            <ul class="dropdown_submenu" style="left:240px">
                                <li class="lv2">
                                    <a href="" class="haslink indent">
                                        Nhà đất cần thuê
                                    </a>
                                </li>
                                <li class="lv2">
                                    <a href="" class="haslink indent">
                                        Nhà đất cần thuê
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="lv1">
                            <a href="" class="haslink indent">
                                Nhà đất cần thuê
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="lv0">
                    <a href="#">
                        <span class="icon">
                            <img src="{{asset('public/image/ic_shortlist.svg')}}" alt="">
                        </span>
                        <span class="text">Nhà đất cho thuê</span>
                    </a>
                    <ul class="dropdown_submenu">
                        <li class="lv1">
                            <a href="" class="haslink indent">
                                Nhà đất cần thuê
                            </a>
                            <ul class="dropdown_submenu" style="left:240px">
                                <li class="lv2">
                                    <a href="" class="haslink indent">
                                        Nhà đất cần thuê
                                    </a>
                                </li>
                                <li class="lv2">
                                    <a href="" class="haslink indent">
                                        Nhà đất cần thuê
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="lv1">
                            <a href="" class="haslink indent">
                                Nhà đất cần thuê
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="lv0">
                    <a href="#">
                        <span class="icon">
                            <img src="{{asset('public/image/ic_shortlist.svg')}}" alt="">
                        </span>
                        <span class="text">Nhà đất cho thuê</span>
                    </a>
                    <ul class="dropdown_submenu">
                        <li class="lv1">
                            <a href="" class="haslink indent">
                                Nhà đất cần thuê
                            </a>
                            <ul class="dropdown_submenu" style="left:240px">
                                <li class="lv2">
                                    <a href="" class="haslink indent">
                                        Nhà đất cần thuê
                                    </a>
                                </li>
                                <li class="lv2">
                                    <a href="" class="haslink indent">
                                        Nhà đất cần thuê
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="lv1">
                            <a href="" class="haslink indent">
                                Nhà đất cần thuê
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="lv0">
                    <a href="#">
                        <span class="icon">
                            <img src="{{asset('public/image/ic_shortlist.svg')}}" alt="">
                        </span>
                        <span class="text">Nhà đất cho thuê</span>
                    </a>
                    <ul class="dropdown_submenu">
                        <li class="lv1">
                            <a href="" class="haslink indent">
                                Nhà đất cần thuê
                            </a>
                            <ul class="dropdown_submenu">
                                <li class="lv2">
                                    <a href="" class="haslink indent">
                                        Nhà đất cần thuê
                                    </a>
                                </li>
                                <li class="lv2">
                                    <a href="" class="haslink indent">
                                        Nhà đất cần thuê
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="lv1">
                            <a href="" class="haslink indent">
                                Nhà đất cần thuê
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="clear">&nbsp;</div>
    </div>

</div>






</header>


<!-- The Modal -->
<div class="modal fade" id="modal_search_mobile" tabindex="-1" role="dialog" aria-labelledby="modal_search_mobile">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Modal Heading</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          Modal body..
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
</div>

