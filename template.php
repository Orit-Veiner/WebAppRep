<?php

function templateBefore($title)
{
?>

<!DOCTYPE html>
<html lang="en" class="ie9">
<html lang="en">
	<!--<![endif]-->

	<head>


		<meta charset="utf-8">
		<title>Veineroom - <? echo $title; ?></title>

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Favicon -->
        <link rel="icon" type="image/png" sizes="16x16" href="favicon.png">

		<!-- Web Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>

		<!-- Bootstrap core CSS -->
		<link href="template/bootstrap/css/bootstrap.css" rel="stylesheet">

		<!-- Font Awesome CSS -->
		<link href="template/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

		<!-- Fontello CSS -->
		<link href="template/fonts/fontello/css/fontello.css" rel="stylesheet">

		<!-- Plugins -->
		<link href="template/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
		<link href="template/plugins/rs-plugin/css/settings.css" rel="stylesheet">
		<link href="template/css/animations.css" rel="stylesheet">
		<link href="template/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
		<link href="template/plugins/owl-carousel/owl.transitions.css" rel="stylesheet">
		<link href="template/plugins/hover/hover-min.css" rel="stylesheet">		
		<link href="template/plugins/morphext/morphext.css" rel="stylesheet">
		
		<!-- The Project core CSS file -->
		<link href="template/css/style.css" rel="stylesheet" >
		<!-- Color Scheme (In order to change the color scheme, replace the blue.css with the color scheme that you prefer)-->
		<link href="template/css/skins/light_blue.css" rel="stylesheet">

		<!-- Custom css --> 
		<link href="template/css/custom.css" rel="stylesheet">
	</head>

	<!-- body classes:  -->
	<!-- "boxed": boxed layout mode e.g. <body class="boxed"> -->
	<!-- "pattern-1 ... pattern-9": background patterns for boxed layout mode e.g. <body class="boxed pattern-1"> -->
	<!-- "transparent-header": makes the header transparent and pulls the banner to top -->
	<!-- "gradient-background-header": applies gradient background to header -->
	<!-- "page-loader-1 ... page-loader-6": add a page loader to the page (more info @components-page-loaders.html) -->
	<body class="no-trans front-page   ">

		<!-- scrollToTop -->
		<!-- ================ -->
		<div class="scrollToTop circle"><i class="icon-up-open-big"></i></div>
		
		<!-- page wrapper start -->
		<!-- ================ -->
		<div class="page-wrapper">
		
			<!-- header-container start -->
			<div class="header-container">
				
				<!-- header start -->
				<!-- classes:  -->
				<!-- "fixed": enables fixed navigation mode (sticky menu) e.g. class="header fixed clearfix" -->
				<!-- "dark": dark version of header e.g. class="header dark clearfix" -->
				<!-- "full-width": mandatory class for the full-width menu layout -->
				<!-- "centered": mandatory class for the centered logo layout -->
				<!-- ================ --> 
				<header class="header  fixed    clearfix">
					
					<div class="container">
						<div class="row">
							<div class="col-md-3 ">
								<!-- header-left start -->
								<!-- ================ -->
								<div class="header-left clearfix">

									<!-- logo -->
									<div id="logo" class="logo">
										<a href="chat-room.php"><img id="logo_img" src="logo.png" alt="The Project" style="height: 60px;"></a>
									</div>

									<!-- name-and-slogan -->
									<div class="site-slogan">
										
									</div>
									
								</div>
								<!-- header-left end -->

							</div>
							<div class="col-md-9">
					
								<!-- header-right start -->
								<!-- ================ -->
								<div class="header-right clearfix">
									
								<!-- main-navigation start -->
								<!-- classes: -->
								<!-- "onclick": Makes the dropdowns open on click, this the default bootstrap behavior e.g. class="main-navigation onclick" -->
								<!-- "animated": Enables animations on dropdowns opening e.g. class="main-navigation animated" -->
								<!-- "with-dropdown-buttons": Mandatory class that adds extra space, to the main navigation, for the search and cart dropdowns -->
								<!-- ================ -->
								<div class="main-navigation  animated with-dropdown-buttons">

									<!-- navbar start -->
									<!-- ================ -->
									<nav class="navbar navbar-default" role="navigation">
										<div class="container-fluid">

											<!-- Toggle get grouped for better mobile display -->
											<div class="navbar-header">
												<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
													<span class="sr-only">Toggle navigation</span>
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
												</button>
												
											</div>

											<!-- Collect the nav links, forms, and other content for toggling -->
											<div class="collapse navbar-collapse" id="navbar-collapse-1">
												<!-- main-menu -->
												<ul class="nav navbar-nav ">

													<!-- mega-menu start -->
												

													<li>
														<a href="chat-room.php">Chat</a>
													</li>

                                                    <li>
                                                        <a href="about.php">About Me</a>
                                                    </li>
													
												</ul>
												<!-- main-menu end -->

											</div>

										</div>
									</nav>
									<!-- navbar end -->

								</div>
								<!-- main-navigation end -->
								</div>
								<!-- header-right end -->
					
							</div>
						</div>
					</div>
					
				</header>
				<!-- header end -->
			</div>
			<!-- header-container end -->

<?
}

function templateAfter()
{
?>

		
			<footer id="footer" class="clearfix ">

				<!-- .footer start -->
				<!-- ================ -->
				<div class="footer">
					<div class="container">
						<div class="footer-inner">
							<div class="row">
								<div class="col-md-6 col-md-offset-3">
									<div class="footer-content text-center padding-ver-clear">
                                        <div class="logo-footer"><img id="logo-footer" class="center-block" src="logo.png" style="width: 150px;" alt=""></div>
										
										<ul class="list-inline mb-20">
											<li><i class="text-default fa fa-map-marker pr-5"></i>Veineroom</li>
											<li><a href="tel:+972 545873764" class="link-dark"><i class="text-default fa fa-phone pl-10 pr-5"></i>IL: (+972) 54-587-3764</a></li>
											<li><a href="mailto:orit.veiner@gmail.com" class="link-dark"><i class="text-default fa fa-envelope-o pl-10 pr-5"></i>orit.veiner@gmail.com</a></li>
										</ul>
										
										<div class="separator"></div>
										<p class="text-center margin-clear">Copyright 2016 Veineroom. All Rights Reserved</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- .footer end -->

			</footer>
						
		</div>
		<!-- page-wrapper end -->

		<!-- JavaScript files placed at the end of the document so the pages load faster -->
		<!-- ================================================== -->
		<!-- Jquery and Bootstap core js files -->
		<script type="text/javascript" src="template/plugins/jquery.min.js"></script>
		<script type="text/javascript" src="template/bootstrap/js/bootstrap.min.js"></script>
		<!-- Modernizr javascript -->
		<script type="text/javascript" src="template/plugins/modernizr.js"></script>
		<!-- jQuery Revolution Slider  -->
		<script type="text/javascript" src="template/plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="template/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
		<!-- Isotope javascript -->
		<script type="text/javascript" src="template/plugins/isotope/isotope.pkgd.min.js"></script>
		<!-- Magnific Popup javascript -->
		<script type="text/javascript" src="template/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
		<!-- Appear javascript -->
		<script type="text/javascript" src="template/plugins/waypoints/jquery.waypoints.min.js"></script>
		<!-- Count To javascript -->
		<script type="text/javascript" src="template/plugins/jquery.countTo.js"></script>
		<!-- Parallax javascript -->
		<script src="template/plugins/jquery.parallax-1.1.3.js"></script>
		<!-- Contact form -->
		<script src="template/plugins/jquery.validate.js"></script>
		<!-- Morphext -->
		<script type="text/javascript" src="template/plugins/morphext/morphext.min.js"></script>
		<!-- Background Video -->
		<script src="template/plugins/vide/jquery.vide.js"></script>
		<!-- Owl carousel javascript -->
		<script type="text/javascript" src="template/plugins/owl-carousel/owl.carousel.js"></script>
		<!-- SmoothScroll javascript -->
		<script type="text/javascript" src="template/plugins/jquery.browser.js"></script>
		<script type="text/javascript" src="template/plugins/SmoothScroll.js"></script>
		<!-- Initialization of Plugins -->
		<script type="text/javascript" src="template/js/template.js"></script>
		<!-- Custom Scripts -->
		<script type="text/javascript" src="template/js/custom.js"></script>

	</body>
</html>

<?
}

?>