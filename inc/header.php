

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
                    <a href="<?=$site?>home"></a>
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
                    <div class="top-btn"><a href="<?=$site?>login"  style="text-transform:capitalize;"><i class="fa fa-user"></i>&nbsp;Register/Login</a></div>
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
                                <li class="current"><a href="<?=$site?>home">Home</a></li>
                                <li><a href="<?=$site?>service">Services</a></li>
                                <li><a href="<?=$site?>pricing">Pricing</a></li>
                                <li><a href="<?=$site?>faq">Faq</a></li>
                                <li><a href="<?=$site?>about">About Us</a></li>
                                <li><a href="<?=$site?>contact">Contact</a></li>
                            </ul>


                            <!-- mobile menu -->
                            <ul class="mobile-menu clearfix">
                            <li class="current"><a href="<?=$site?>home">Home</a></li>
                                <li><a href="<?=$site?>service">Services</a></li>
                                <li><a href="<?=$site?>pricing">Pricing</a></li>
                                <li><a href="<?=$site?>faq">Faq</a></li>
                                <li><a href="<?=$site?>about">About Us</a></li>
                                <li><a href="<?=$site?>contact">Contact</a></li>
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