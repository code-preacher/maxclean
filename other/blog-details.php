<?php
include "inc/config.php";
$tl="MaxClean Laundry | Blog Details";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?=$tl?></title>
    <link href="images/logo/logo.png" rel="icon" type="image/png">
   <link href="images/logo/logo.png" rel="apple-touch-icon" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?=$mc?>" />
    <meta name="keywords" content="<?=$mc?>" />
    <meta name="author" content="MaxClean Laundry" />
<!-- Stylesheets -->
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<link type="text/css" rel="stylesheet" id="jssDefault" href="css/custom/theme-2.css"/>

<script>
function disableRightClick(e)

{

  var message = "Right click disabled";

  

  if(!document.rightClickDisabled) // initialize

  {

    if(document.layers) 

    {

      document.captureEvents(Event.MOUSEDOWN);

      document.onmousedown = disableRightClick;

    }

    else document.oncontextmenu = disableRightClick;

    return document.rightClickDisabled = true;

  }

  if(document.layers || (document.getElementById && !document.all))

  {

    if (e.which==2||e.which==3)

    {

      alert(message);

      return false;

    }

  }

  else

  {

    alert(message);

    return false;

  }

}

disableRightClick();


</script>
</head>

<!-- page wrapper -->
<body class="boxed_wrapper">

    


    <!-- .preloader -->
    <div class="preloader"></div>
    <!-- /.preloader -->
    

    <!-- color switcher style -->
    <div class="switcher">
        <div class="switch_btn">
            <button><i class="fa fa-cog fa-spin"></i></button>
        </div>
        <div class="switch_menu">
            <h4 class="title">Style Switcher</h4>
                <div class="switcher_container">
                    <h5>Choose Your Color</h5>
                    <ul id="styleOptions" title="switch styling">
                        <li>
                            <a href="javascript: void(0)" data-theme="theme-1" class="color2"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="theme-3" class="color3"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="theme-4" class="color4"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="theme-5" class="color5"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="theme-6" class="color6"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="theme-7" class="color7"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="theme-8" class="color8"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="theme-9" class="color9"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="theme-10" class="color10"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="theme-11" class="color11"></a>
                        </li>
                    </ul>
                    <div class="text">You can easily change and switch the colors.</div>
                </div>
        </div>
    </div>
    <!-- color stitcher style end -->


    <!-- menu-area -->
    <header class="main-header">


        <!-- header middle -->
        <div class="header-top">
            <div class="container">
                <div class="logo-box">
                    <a href="index.html"></a>
                </div>
                <div class="header-info">
                    <div class="single-info">
                        <div class="icon-box"><i class="fa fa-envelope"></i></div>
                        <div class="text">maxclean@gmail.com</div>
                    </div>
                    <div class="single-info">
                        <div class="icon-box"><i class="fa fa-phone"></i></div>
                        <div class="text">Wants a launder? <br />+234 902 981 0729</div>
                    </div>
                    <div class="top-btn"><a href="#">Shedule Pick-Up</a></div>
                </div>
            </div>
        </div><!-- header middle end -->


        <!-- main-menu-area -->
        <div class="theme_menu stricky">
            <div class="container">
                <div class="menu-area">
                    <nav class="main-menu">
                        <div class="navbar-header">     
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About Us</a></li>
                                <li class="dropdown"><a href="#">Pages</a>
                                    <ul class="submenu">
                                        <li><a href="offers.html">Offers</a></li>
                                        <li><a href="faq.html">Faq</a></li>
                                        <li><a href="error.html">404 Page</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Services</a>
                                    <ul class="submenu">
                                        <li><a href="service.html">Service</a></li>
                                        <li><a href="service-details.html">Service Single</a></li>
                                    </ul>
                                </li>
                                <li><a href="price.html">Pricing</a></li>
                                <li class="current dropdown"><a href="#">Blog</a>
                                    <ul class="submenu">
                                        <li><a href="blog-grid.html">Blog Grid</a></li>
                                        <li><a href="blog-left.html">Blog Left Column</a></li>
                                        <li><a href="blog-right.html">Blog Right Column</a></li>
                                        <li><a href="blog-details.html">Blog Single</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>


                            <!-- mobile menu -->
                            <ul class="mobile-menu clearfix">
                                <li class="current"><a href="index.html">Home</a></li>
                                <li><a href="about.html">About us</a></li>
                                <li class="dropdown"><a href="#">Pages</a>
                                    <ul>
                                        <li><a href="offers.html">Offers</a></li>
                                        <li><a href="faq.html">Faq</a></li>
                                        <li><a href="error.html">404 Page</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Services</a>
                                    <ul>
                                        <li><a href="service.html">Service</a></li>
                                        <li><a href="service-details.html">Service Single</a></li>
                                    </ul>
                                </li>
                                <li><a href="price.html">Pricing</a></li>
                                <li class="dropdown"><a href="#">Blog</a>
                                    <ul>
                                        <li><a href="blog-grid.html">Blog Grid</a></li>
                                        <li><a href="blog-left.html">Blog Left Column</a></li>
                                        <li><a href="blog-right.html">Blog Right Column</a></li>
                                        <li><a href="blog-details.html">Blog Single</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                    <div class="search-box-area">
                        <div class="search-toggle"><i class="fa fa-search"></i></div>
                        <div class="search-box">
                            <form method="post" action="index.html">
                                <div class="form-group">
                                    <input type="search" name="search" placeholder="Search Here" required>
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
           </div>
        </div><!-- end main-menu -->
    </header>
    <!-- end menu-area -->


    <!-- page title -->
    <section class="page-title centred" style="background-image: url(images/about/page-title.jpg);">
        <div class="container">
            <div class="content-box">
                <div class="title"><h2>blog single</h2></div>
            </div>
        </div>
    </section>
    <!--End Page Title-->
    

    <!-- blog-details -->
    <section class="blog-details sidbar-page-container">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12 content-side">
                    <div class="blog-details-content default-blog-content">
                        <div class="single-blog-content">
                            <div class="img-box"><figure><img src="images/news/1.jpg" alt=""></figure></div>
                            <div class="lower-content">
                                <ul class="meta in-block">
                                    <li>Posted By : Jhon Doe</li>
                                    <li>17 Jan, 2014</li>
                                    <li><i class="fa fa-comment-o"></i>&nbsp;&nbsp;Comments (25)</li>
                                </ul>
                                <div class="title"><h3>101 Lanundry tips, tricks and hacks</h3></div>
                                <div class="text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipistcing elit. Donec nec eros eget nisl fringilla commodo. Maecenas ornare, augue ut ultricies tristique, enim lectus pretium quam, quis bibendum metus tellus sed magna. Donec eu dolor Pellentesque pellentesque tempor tellus eget hendrerit. Morbi id aliquam ligula. Aliquam id dui sem. Proin rhoncus consequat nisl. Pellentesque pellentesque tempor tellus eget hendrerit. Proin rhoncus consequat nisl, eu ornare mauris. Natoque facilisis magna aptent morbi.</p>
                                </div>
                            </div>
                        </div>
                        <blockquote class="text-italic">
                            At vero eos et accu samus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. 
                        </blockquote>
                        <div class="text lh-24">
                            Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe molestiae non recusandae.
                        </div>
                        <div class="post-share-option">
                            <div class="left-content">
                                <div class="text">Share this post</div>
                                <ul class="post-social in-block">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                </ul>
                            </div>
                            <div class="right-content float-right">Category : <a href="#">Laundry</a></div>
                        </div>
                        <div class="about-author">
                            <div class="title"><h4>About Author</h4></div>
                            <div class="author-content">
                                <div class="author-img"><figure><img src="images/news/4.jpg" alt=""></figure></div>
                                <div class="author-name">William Smith ,</div>
                                <div class="date">19 June 2017</div>
                                <div class="text">
                                    Voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
                                </div>
                                <div class="replay-btn float-right"><a href="#"><i class="fa fa-reply-all"></i></a></div>
                            </div>
                        </div>
                        <div class="comment-area">
                            <div class="title"><h4>1 Comment</h4></div>
                            <div class="comment-box">
                                <div class="img-box"><figure><img src="images/news/c1.jpg" alt=""></figure></div>
                                <div class="comment-name">Jhon Doe ,</div>
                                <div class="date">2 hours ago</div>
                                <div class="text">Voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. </div>
                                <div class="replay-btn float-right"><a href="#"><i class="fa fa-reply-all"></i></a></div>
                            </div>
                        </div>
                        <div class="comment-form">
                            <div class="title"><h3>Leave a comments</h3></div>
                            <form id="contact-form" name="contact_form" class="default-form" action="inc/sendmail.php" method="post">
                                <div class="row">
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="form_name" value="" placeholder="First name" required="">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="form_subject" value="" placeholder="Last name" required="">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="email" name="form_email" value="" placeholder="Email" required="">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="form_phone" value="" placeholder="Phone" required="">
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <textarea placeholder="Message" name="form_message" required=""></textarea>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <button type="submit" class="btn-one btn-bg" data-loading-text="Please wait...">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 sidebar-side">
                    <div class="sidebar">
                        <div class="sidebar-search sidebar-widget">
                            <div class="input-box">
                                <form action="#" method="post">
                                    <div class="form-group">
                                        <input type="search" name="search" placeholder="Search" required="">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="sidebar-archives sidebar-widget">
                            <div class="sidbar-title"><h3>Archives</h3></div>
                            <ul class="archive-list">
                                <li><a href="#">April 2015</a></li>
                                <li><a href="#">June 2015</a></li>
                                <li><a href="#">March 2016</a></li>
                                <li><a href="#">January 2017</a></li>
                                <li><a href="#">February 2017</a></li>
                            </ul>
                        </div>
                        <div class="sidbar-post sidebar-widget">
                            <div class="sidbar-title"><h3>Recent Post</h3></div>
                            <div class="single-post">
                                <div class="img-box"><a href="blog-details.html"><figure><img src="images/news/p1.png" alt=""></figure></a></div>
                                <h4><a href="blog-details.html">Safe Environment for Doing Laundry</a></h4>
                                <div class="text">17 Jan, 2014</div>
                            </div>
                            <div class="single-post">
                                <div class="img-box"><a href="blog-details.html"><figure><img src="images/news/p2.png" alt=""></figure></a></div>
                                <h4><a href="blog-details.html">Kids Clothing Wash and Dry</a></h4>
                                <div class="text">17 Jan, 2014</div>
                            </div>
                            <div class="single-post">
                                <div class="img-box"><a href="blog-details.html"><figure><img src="images/news/p3.png" alt=""></figure></a></div>
                                <h4><a href="blog-details.html">Safe Environment for Doing Laundry</a></h4>
                                <div class="text">17 Jan, 2014</div>
                            </div>
                            <div class="single-post">
                                <div class="img-box"><a href="blog-details.html"><figure><img src="images/news/p4.png" alt=""></figure></a></div>
                                <h4><a href="blog-details.html">Dry cleaning saves money in the long run</a></h4>
                                <div class="text">17 Jan, 2014</div>
                            </div>
                        </div>
                        <div class="sidebar-categories sidebar-widget">
                            <div class="sidbar-title"><h3>Categories</h3></div>
                            <ul class="categories-list">
                                <li><a href="#">Business Laundry (3)</a></li>
                                <li><a href="#">Industry Laundry(12)</a></li>
                                <li><a href="#">Redential Laundry (5)</a></li>
                                <li><a href="#">Cosplay Laundry (1)</a></li>
                            </ul>
                        </div>
                        <div class="sidebar-twitter sidebar-widget">
                            <div class="sidbar-title"><h3>Twitter</h3></div>
                            <ul class="list clearfix in-block">
                                <li><a href="#"><img src="images/news/t1.png" alt=""></a></li>
                                <li><a href="#"><img src="images/news/t2.png" alt=""></a></li>
                                <li><a href="#"><img src="images/news/t3.png" alt=""></a></li>
                                <li><a href="#"><img src="images/news/t4.png" alt=""></a></li>
                                <li><a href="#"><img src="images/news/t5.png" alt=""></a></li>
                                <li><a href="#"><img src="images/news/t6.png" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-details end -->


    <!-- main-footer -->
    <footer class="main-footer overlay-bg" style="background-image: url(images/footer/bg.jpg);">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12 footer-column">
                        <div class="logo-widget footer-widget">
                            <div class="footer-logo"><a href="index.html"><img src="images/footer/logo.png" alt=""></a></div>
                            <div class="text white">Nam libero tempore, cum soluta  est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere to possimus, omnis voluptas repellendus. </div>
                            <div class="location-box">
                                <div class="icon-box"><i class="fa fa-map-marker"></i></div>
                                <div class="text white">Universal 234, Triumph Street, <br />Los Angeles California, USA</div>
                            </div>
                            <ul class="footer-social in-block">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 footer-column">
                        <div class="service-widget footer-widget">
                            <div class="footer-title"><h4>Services</h4></div>
                            <ul class="list">
                                <li><a href="#">- &nbsp;Free pick-up and delivery</a></li>
                                <li><a href="#">- &nbsp;High quality</a></li>
                                <li><a href="#">- &nbsp;Drapery cleaning</a></li>
                                <li><a href="#">- &nbsp;Dry cleaning</a></li>
                                <li><a href="#">- &nbsp;Faq</a></li>
                                <li><a href="#">- &nbsp;Silk and suede</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 footer-column">
                        <div class="blog-widget footer-widget">
                            <div class="footer-title"><h4>our blog</h4></div>
                            <div class="text"><a href="blog-details.html">Dry cleaning tips for Suits</a></div>
                            <div class="text"><a href="blog-details.html">Tips for maintaining your wardrobe</a></div>
                            <div class="text"><a href="blog-details.html">How to care for your silk clothes</a></div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 footer-column">
                        <div class="instagram-widget footer-widget">
                            <div class="footer-title"><h4>Instagram</h4></div>
                            <ul class="list in-block clearfix">
                                <li><a href="#"><img src="images/footer/1.png" alt=""></a></li>
                                <li><a href="#"><img src="images/footer/2.png" alt=""></a></li>
                                <li><a href="#"><img src="images/footer/3.png" alt=""></a></li>
                                <li><a href="#"><img src="images/footer/4.png" alt=""></a></li>
                                <li><a href="#"><img src="images/footer/5.png" alt=""></a></li>
                                <li><a href="#"><img src="images/footer/6.png" alt=""></a></li>
                            </ul>
                            <div class="subscribe-widget">
                                <div class="footer-title"><h4>Subscribe</h4></div>
                                <div class="input-box">
                                    <form action="#" method="post">
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Email address" required="">
                                            <button type="submit"><i class="fa fa-paper-plane"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom centred">
            <div class="container">
                <div class="container">
                    <div class="copyright">© 2020 <a href="#">MaxClean</a>. All Rights Reserved.</div>
                </div>
            </div>
        </div>
        <div class="bubbleContainer">
            <div class="bubble-1"></div>
            <div class="bubble-2"></div>
            <div class="bubble-3"></div>
            <div class="bubble-4"></div>
            <div class="bubble-5"></div>
            <div class="bubble-6"></div>
            <div class="bubble-7"></div>
            <div class="bubble-8"></div>
            <div class="bubble-9"></div>
            <div class="bubble-10"></div>
            <div class="bubble-11"></div>
            <div class="bubble-12"></div>
            <div class="bubble-13"></div>
            <div class="bubble-14"></div>
            <div class="bubble-15"></div>
        </div>
    </footer>
    <!-- main-footer end -->




<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="icon fa fa-angle-up"></span></div>



<!--jquery js -->
<script type="text/javascript" src="js/jquery-2.1.4.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/wow.js"></script>
<script src="js/validation.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="js/SmoothScroll.js"></script>
<script type="text/javascript" src="js/jQuery.style.switcher.min.js"></script>
<script src="js/html5lightbox/html5lightbox.js"></script> 
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRvBPo3-t31YFk588DpMYS6EqKf-oGBSI"></script>
<script src="js/gmaps.js"></script>
<script src="js/map-helper.js"></script>
<script src="js/script.js"></script>

</body><!-- End of .page_wrapper -->
</html>
