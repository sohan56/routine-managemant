<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Asian University of Bangladesh</title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('public/assets/')}}/img/core-img/logo.png">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{asset('public/assets/')}}/style.css">

</head>

<body>
    <!-- ##### Preloader ##### -->
    <div id="preloader">
        <i class="circle-preloader"></i>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="header-content h-100 d-flex align-items-center justify-content-between">
                            <div class="academy-logo">
                                <a href="{{URL::to('/')}}"><img src="{{asset('public/logo2.png')}}" alt=""></a>
                            </div>
                            <div class="login-content">
                                <a class="btn btn-success" href="{{URL::to('/login')}}">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="academy-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="academyNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="{{URL::to('/')}}">Home</a></li>
                                    
                                   
                                    <li><a href="{{URL::to('/about-aub')}}">About Aub</a></li>
                                     <li><a href="#">Routine</a>
                                         <?php 
                                                $all_publish_department = DB::table('tbl_department')
                                                                     ->where('publication_status',1)
                                                                     ->get();

                                          ?>
                                        <ul class="dropdown" style="background-color: #90EE90">
                                               @foreach($all_publish_department as $v_department)
                                            <li><a href="{{URL::to('department-wroutine',$v_department->dept_id)}}">{{$v_department->dept_name}}</a></li>
                                             @endforeach  
                                        </ul>
                                    </li>
                                    <li><a href="{{URL::to('/contact')}}">Contact</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <!-- Calling Info -->
                        <div class="calling-info">
                            <div class="call-center">
                                <a href="tel:+654563325568889"><i class="icon-telephone-2"></i> <span>(+65) 456 332 5568 889</span></a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    @yield('main_content')

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="main-footer-area section-padding-100-0">
            <div class="container">
                <div class="row">
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <a href="#"><img src="{{asset('public/assets/')}}/img/core-img/MIU2.png" alt=""></a>
                            </div>
                            <p>Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi. Donec et sollicitudin est, in euismod erat. Ut at erat et arcu pulvinar cursus a eget.</p>
                            <div class="footer-social-info">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-behance"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <h6>Usefull Links</h6>
                            </div>
                            <nav>
                                <ul class="useful-links">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Services &amp; Features</a></li>
                                    <li><a href="#">Accordions and tabs</a></li>
                                    <li><a href="#">Menu ideas</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <h6>Gallery</h6>
                            </div>
                            <div class="gallery-list d-flex justify-content-between flex-wrap">
                                <a href="{{asset('public/assets/')}}/img/bg-img/gallery1.jpg" class="gallery-img" title="Gallery Image 1"><img src="{{asset('public/assets/')}}/img/bg-img/gallery1.jpg" alt=""></a>
                                <a href="{{asset('public/assets/')}}/img/bg-img/gallery2.jpg" class="gallery-img" title="Gallery Image 2"><img src="{{asset('public/assets/')}}/img/bg-img/gallery2.jpg" alt=""></a>
                                <a href="{{asset('public/assets/')}}/img/bg-img/gallery3.jpg" class="gallery-img" title="Gallery Image 3"><img src="{{asset('public/assets/')}}/img/bg-img/gallery3.jpg" alt=""></a>
                                <a href="{{asset('public/assets/')}}/img/bg-img/gallery4.jpg" class="gallery-img" title="Gallery Image 4"><img src="{{asset('public/assets/')}}/img/bg-img/gallery4.jpg" alt=""></a>
                                <a href="{{asset('public/assets/')}}/img/bg-img/gallery5.jpg" class="gallery-img" title="Gallery Image 5"><img src="{{asset('public/assets/')}}/img/bg-img/gallery5.jpg" alt=""></a>
                                <a href="{{asset('public/assets/')}}/img/bg-img/gallery6.jpg" class="gallery-img" title="Gallery Image 6"><img src="{{asset('public/assets/')}}/img/bg-img/gallery6.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <h6>Contact</h6>
                            </div>
                            <div class="single-contact d-flex mb-30">
                                <i class="icon-placeholder"></i>
                                <p>4127/ 5B-C Mislane Road, Gibraltar, UK</p>
                            </div>
                            <div class="single-contact d-flex mb-30">
                                <i class="icon-telephone-1"></i>
                                <p>Main: 203-808-8613 <br>Office: 203-808-8648</p>
                            </div>
                            <div class="single-contact d-flex">
                                <i class="icon-contract"></i>
                                <p>office@yourbusiness.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
 &copy;<script>document.write(new Date().getFullYear());</script> Develop by 2(SR) <i class="fa fa-heart-o" aria-hidden="true"></i>  <a href="https://colorlib.com" target="_blank"></a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="{{asset('public/assets/')}}/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="{{asset('public/assets/')}}/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('public/assets/')}}/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="{{asset('public/assets/')}}/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="{{asset('public/assets/')}}/js/active.js"></script>
</body>

</html>