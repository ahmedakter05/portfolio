<!DOCTYPE HTML>
<!--[if IE 8]> <html class="ie8 no-js"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<!-- begin meta -->
	<meta charset="utf-8">
	<meta name="description" content="Web Development">
	<meta name="keywords" content="web, apps, html, css, php, mysql, aa, planetica, ajax, jquery">
	<meta name="author" content="Ahmed Akter">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- end meta -->
	
	<!-- begin CSS -->
	<link href="<?php echo base_url(); ?>assets/exquiso/style.css" type="text/css" rel="stylesheet" id="main-style">
    
    <!-- REVOLUTION BANNER CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/exquiso/css/revslider.css" media="screen">
    
	<link href="<?php echo base_url(); ?>assets/exquiso/css/responsive.css" type="text/css" rel="stylesheet">
	<!--[if IE]> <link href="<?php echo base_url(); ?>assets/exquiso/css/ie.css" type="text/css" rel="stylesheet"> <![endif]-->
	<link href="<?php echo base_url(); ?>assets/exquiso/css/colors/blue2.css" type="text/css" rel="stylesheet" id="color-style">
    <link href="<?php echo base_url(); ?>assets/exquiso/style-switcher/style-switcher.css" type="text/css" rel="stylesheet">
	<!-- end CSS -->
    
    <link href="<?php echo base_url(); ?>assets/exquiso/images/favicon.ico" type="image/x-icon" rel="shortcut icon">
	
	<!-- begin JS -->
    <script src="<?php echo base_url(); ?>assets/exquiso/js/jquery-1.8.2.min.js" type="text/javascript"></script> <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/exquiso/js/ie.js" type="text/javascript"></script> <!-- IE detection -->
    <script src="<?php echo base_url(); ?>assets/exquiso/js/jquery.easing.1.3.js" type="text/javascript"></script> <!-- jQuery easing -->
	<script src="<?php echo base_url(); ?>assets/exquiso/js/modernizr.custom.js" type="text/javascript"></script> <!-- Modernizr -->
    <!--[if IE 8]>
    <script src="<?php echo base_url(); ?>assets/exquiso/js/respond.min.js" type="text/javascript"></script> 
    <script src="<?php echo base_url(); ?>assets/exquiso/js/selectivizr-min.js" type="text/javascript"></script> 
    <![endif]--> 
    <script src="<?php echo base_url(); ?>aassets/exquiso/style-switcher/style-switcher.js" type="text/javascript"></script> <!-- style switcher -->
    <script src="<?php echo base_url(); ?>assets/exquiso/js/ddlevelsmenu.js" type="text/javascript"></script> <!-- drop-down menu -->
    <script type="text/javascript"> <!-- drop-down menu -->
        ddlevelsmenu.setup("nav", "topbar");
    </script>
    <script src="<?php echo base_url(); ?>assets/exquiso/js/tinynav.min.js" type="text/javascript"></script> <!-- tiny nav -->
    <script src="<?php echo base_url(); ?>assets/exquiso/js/jquery.validate.min.js" type="text/javascript"></script> <!-- form validation -->
    <script src="<?php echo base_url(); ?>assets/exquiso/js/jquery.flexslider-min.js" type="text/javascript"></script> <!-- slider -->
    <script src="<?php echo base_url(); ?>assets/exquiso/js/jquery.jcarousel.min.js" type="text/javascript"></script> <!-- carousel -->
    <script src="<?php echo base_url(); ?>assets/exquiso/js/jquery.ui.totop.min.js" type="text/javascript"></script> <!-- scroll to top -->
    <script src="<?php echo base_url(); ?>assets/exquiso/js/jquery.fitvids.js" type="text/javascript"></script> <!-- responsive video embeds -->
    <script src="<?php echo base_url(); ?>assets/exquiso/js/jquery.tweet.js" type="text/javascript"></script> <!-- Twitter widget -->
    <script src="<?php echo base_url(); ?>assets/exquiso/js/jquery.tipsy.js" type="text/javascript"></script> <!-- tooltips -->
    <!-- jQuery REVOLUTION Slider  -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/exquiso/js/revslider.jquery.themepunch.plugins.min.js"></script> <!-- swipe gestures -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/exquiso/js/revslider.jquery.themepunch.revolution.js"></script>
    <!-- REVOLUTION BANNER CSS SETTINGS -->
    <script src="<?php echo base_url(); ?>assets/exquiso/js/jquery.fancybox.pack.js" type="text/javascript"></script> <!-- lightbox -->
    <script src="<?php echo base_url(); ?>assets/exquiso/js/jquery.fancybox-media.js" type="text/javascript"></script> <!-- lightbox -->
    <script src="<?php echo base_url(); ?>assets/exquiso/js/froogaloop.min.js" type="text/javascript"></script> <!-- video manipulation -->
    <script src="<?php echo base_url(); ?>assets/exquiso/js/custom.js" type="text/javascript"></script> <!-- jQuery initialization -->
    <!-- end JS -->
	
	<title>AA Planetica - Web Sites & Applications Development</title>
</head>

<body class="boxed">
<!-- begin container -->
<div id="wrap">
	<!-- begin header -->
    <header id="header" class="container clearfix">
    	<!-- begin logo -->
        <h1 id="logo"><a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/exquiso/images/logo.png" alt="AA Planetica"></a></h1>
        <!-- end logo -->
        
        <!-- begin navigation wrapper -->
        <div class="nav-wrap clearfix">
        
        <!-- begin search form -->
        <form id="search-form" action="<?php echo base_url(); ?>search/index" method="get">
            <input id="s" type="text" name="key" placeholder="Search &hellip;" style="display: none;">
            <input id="search-submit" type="submit">
        </form>
        <!-- end search form -->

        <!-- begin navigation -->
        <nav id="nav">
            <ul id="navlist" class="clearfix">
                <li class="<?php echo (isset($activepage) ? ($activepage=='Home' ? 'current' : '') : '');?>"><a href="<?php echo base_url(); ?>" rel="submenu1">Home</a>
                    <ul id="submenu1" class="ddsubmenustyle">
                        <li><a href="http://portfolio.aapf.tk" target="_blank">Wordpress</a></li>
						<li><a href="#">Joomla</a></li>
						<li><a href="https://www.facebook.com/ahmedakterg" target="_blank">Facebook</a></li>
						<li><a href="http://www.planetica.tk" target="_blank">Planetica</a></li>
						<li><a href="http://about.me/planetica" target="_blank">About.me</a></li>
                    </ul>
                </li>
                <li class="<?php echo (isset($activepage) ? ($activepage=='Portfolio' ? 'current' : '') : '');?>"><a href="<?php echo base_url(); ?>portfolio/index" rel="submenu2">Portfolio</a>
                    <ul id="submenu2" class="ddsubmenustyle">
                        <li><a href="<?php echo base_url(); ?>portfolio/index/cat/web-sites">Websites</a></li>
                        <li><a href="<?php echo base_url(); ?>portfolio/index/cat/web-apps">Web Apps</a></li>
                        <li><a href="<?php echo base_url(); ?>portfolio/index/cat/cms-devs">CMS Sites</a></li>
                        <li><a href="<?php echo base_url(); ?>portfolio/index/cat/e-com">E-Commerce</a></li>
                        
                    </ul>
                </li>
                <li class="<?php echo (isset($activepage) ? ($activepage=='Services' ? 'current' : '') : '');?>"><a href="<?php echo base_url(); ?>services/index" rel="submenu3">Services</a>
                    <ul id="submenu3" class="ddsubmenustyle">
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">Software</a></li>
                        <li><a href="#">Electronics</a></li>
                        <li><a href="#">SEO</a></li>
                    </ul>
                </li>
                <li class="<?php echo (isset($activepage) ? ($activepage=='Blog' ? 'current' : '') : '');?>"><a href="<?php echo base_url(); ?>blogs/index" rel="submenu4">My Blog</a>
                    <ul id="submenu4" class="ddsubmenustyle">
                        <li><a href="#">Photography</a></li>
                        <li><a href="#">Tutorials</a></li>
                        <li><a href="<?php echo base_url(); ?>users">Users</a></li>
                        
                    </ul>
                </li>
                <li class="<?php echo (isset($activepage) ? ($activepage=='Hobby' ? 'current' : '') : '');?>"><a href="<?php echo base_url(); ?>blogs/category/3" rel="submenu5">Hobby</a>
                    <ul id="submenu5" class="ddsubmenustyle">
                        <li><a href="<?php echo base_url(); ?>blogs/category/4">Electronics</a></li>
                        
                    </ul>
                </li>
                <li align="left" class="<?php echo (isset($activepage) ? ($activepage=='Apps' ? 'current' : '') : '');?>"><a href="<?php echo base_url(); ?>apps/destime" rel="submenu5">Apps</a>
                    <ul id="submenu5" class="ddsubmenustyle">
                        <li><a href="<?php echo base_url(); ?>apps/destime" rel="submenu6">DET</a></li>
						<li><a href="<?php echo base_url(); ?>apps/stream" rel="submenu6">Live TV</a></li>
                        
                    </ul>
		    
				<li class="<?php echo (isset($activepage) ? ($activepage=='About Us' ? 'current' : '') : '');?>"><a href="<?php echo base_url(); ?>about" rel="submenu6">About</a></li>
				
				<li class="<?php echo (isset($activepage) ? ($activepage=='Contact Us' ? 'current' : '') : '');?>"><a href="<?php echo base_url(); ?>contact" rel="submenu6">Contact</a></li>
                
            </ul>
        </nav>
        <!-- end navigation -->
        </div>
        <!-- end navigation wrapper -->
    </header>
    <!-- end header -->
	
	<?php echo $output;?>
	<?php //echo $this->load->get_section('sidebar'); ?>
    
    <!-- begin footer -->
	<footer id="footer">
        <!-- begin footer top -->
        <div id="footer-top">
        	<div class="container clearfix">
                <div class="one-fourth">
                    <div class="widget">
                        <h3>Text Widget</h3>
                        <p>We're a group of web developer + designer of web, the great Artisan of Web.</p>
						<p>We worked with multiple platform specially Codeigniter, Symphony, Joomla, Wordpress, OsCommerce, ZenCart & many more CMS.</p>
                    </div>
                </div>
                <div class="one-fourth">
                    <div class="widget newsletter">
                        <h3>Newsletter</h3>
                        <p>Subscribe to our email newsletter for useful tips and valuable resources sent out every second Monday.</p>
                        <div id="newsletter-notification-box-success" class="notification-box notification-box-success" style="display: none;">
                            <p>You have successfully subscribed to our newsletter.</p>
                            <a href="<?php echo base_url(); ?>assets/exquiso/#" class="notification-close notification-close-success">x</a>
                        </div>
        
                        <div id="newsletter-notification-box-error" class="notification-box notification-box-error" style="display: none;">
                            <p>Your email address couldn't be subscribed because a server error occurred. Please try again later.</p>
                            <a href="<?php echo base_url(); ?>assets/exquiso/#" class="notification-close notification-close-error">x</a>
                        </div>
                        <form id="newsletter-form" class="content-form" action="#" method="post">
                            <input id="newsletter" type="email" name="newsletter" placeholder="Enter your email address &hellip;" class="required">
                            <input id="subscribe" class="button" type="submit" name="subscribe" value="Subscribe">
                        </form>
                    </div>
                </div>
                <div class="one-fourth">
                    <div class="widget twitter-widget">
                        <h3>&nbsp</h3>
                        <div class="tweet"></div>
                    </div>
                </div>
                <div class="one-fourth column-last">
                    <div class="widget contact-info">
                        <h3>Contact Info</h3>
                        <div>
                            <p class="address"><strong>Address:</strong> Banasree, Dhaka</p>
                            <p class="phone"><strong>Phone:</strong> (+880) 1712203145</p>
                            <p class="fax"><strong>Fax:</strong> (+880) 1912059505</p>
                            <p class="email"><strong>Email:</strong> <a href="mailto:admin@aapf.tk">admin@aapf.tk</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end footer top -->

        <!-- begin footer bottom -->
        <div id="footer-bottom">
        	<div class="container clearfix">
                <div class="one-half">
                    <p>Copyright &copy; 2015 AA Planetica. Created by <a href="https://www.aapf.tk/base">AA</a>.</p>
                </div>
        
                <div class="one-half column-last">
                    <ul class="social-links">
                        <li class="twitter"><a href="<?php echo base_url(); ?>assets/exquiso/#" title="Twitter" target="_blank">Twitter</a></li>
                        <li class="facebook"><a href="<?php echo base_url(); ?>assets/exquiso/#" title="Facebook" target="_blank">Facebook</a></li>
                        <li class="google-plus"><a href="<?php echo base_url(); ?>assets/exquiso/#" title="Google+" target="_blank">Google+</a></li>
                        <li class="linkedin"><a href="<?php echo base_url(); ?>assets/exquiso/#" title="LinkedIn" target="_blank">LinkedIn</a></li>
                        <li class="vimeo"><a href="<?php echo base_url(); ?>assets/exquiso/#" title="Vimeo" target="_blank">Vimeo</a></li>
                        <li class="youtube"><a href="<?php echo base_url(); ?>assets/exquiso/#" title="YouTube" target="_blank">YouTube</a></li>
                        <li class="skype"><a href="<?php echo base_url(); ?>assets/exquiso/#" title="Skype" target="_blank">Skype</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end footer bottom -->
	</footer>
	<!-- end footer -->  
</div>
<!-- end container -->
</body>
</html>