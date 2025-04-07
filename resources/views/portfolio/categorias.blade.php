<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Albalex Electric S.A.C</title>
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link rel="shortcut icon" href="{{ asset('favicons/favicon.ico') }}" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/blue.css" rel="stylesheet" type="text/css" media="all" />
<!----font-Awesome----->
   	<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
	   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<!----font-Awesome----->
<!-- start plugins -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="js/menu.js" type="text/javascript"></script>
		<script type="text/javascript" src="js/fliplightbox.min.js"></script>
		<script type="text/javascript">
			$('body').flipLightBox()
		</script>
		<script type="text/javascript" src="js/jquery.easing.min.js"></script>
		<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
		<script type="text/javascript">
			$(function() {

				var filterList = {

					init : function() {

						// MixItUp plugin
						// http://mixitup.io
						$('#portfoliolist').mixitup({
							targetSelector : '.portfolio',
							filterSelector : '.filter',
							effects : ['fade'],
							easing : 'snap',
							// call the hover effect
							onMixEnd : filterList.hoverEffect()
						});

					},

					hoverEffect : function() {

						// Simple parallax effect
						$('#portfoliolist .portfolio').hover(function() {
							$(this).find('.label').stop().animate({
								bottom : 0
							}, 200, 'easeOutQuad');
							$(this).find('img').stop().animate({
								top : -30
							}, 500, 'easeOutQuad');
						}, function() {
							$(this).find('.label').stop().animate({
								bottom : -40
							}, 200, 'easeInQuad');
							$(this).find('img').stop().animate({
								top : 0
							}, 300, 'easeOutQuad');
						});

					}
				};

				// Run the show!
				filterList.init();

			});
		</script>
<!-- start light_box -->
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="screen" />
<!--
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
-->
<script type="text/javascript" src="js/jquery.fancybox-1.2.1.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$("div.fancyDemo a").fancybox();
		});
	</script>

</head>
<body>
<div class="header_bg">
<div class="container">
	<div class="header">
		<div class="logo">
			<a href="home"><img src="images/Logo_Albalex-04-v2.png" alt=""/></a>
		</div>
		<div class="h_menu">
		<a id="touch-menu" class="mobile-menu" href="HOME">Menu</a>
		<nav>
		<ul class="menu list-unstyled">
			<li><a href="home">INICIO</a></li>
			<li><a href="about">SOBRE NOSOTROS</a></li>
			<!-- <li><a href="service.html">services</a></li> -->
			<li class="activate"><a href="categorias">PRODUCTOS</a></li>
			<!-- <li><a href="blog.html">BLOG</a></li>
			<li><a href="feature.html">feature</a></li> -->
			<li><a href="contact">CONTÁCTENOS</a></li>
		</ul>
		</nav>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
</div>
<div class="main_bg"><!-- start main -->
<div class="container">
	<div class="main_grid1">
		<h3 class="style pull-left">CATEGORIAS</h3>
		<ol class="breadcrumb pull-right">
		  <li><a href="home">Inicio</a></li>
		  <li class="active">Categorias</li>
		</ol>
		<div class="clearfix"></div>
	</div>
</div>
</div>


<section style="margin-block: 20px;; background-color: #efefef;">
    <div class="container">
        <thead>
            @foreach ($categorias as $key => $value)
                <ul class="col-md-4">
                        <li style="list-style-type: none;">
                            <div class="centra-productos">
                                <a href="/portfolio{{$value->idcategorias}}">
                                    <div class="image">
                                        <img style="height: 155px;" src="images/<?php echo $value->img_categorias ?>" alt="">   
                                    </div>
                                    <div class="content">
                                        <div class="title">
                                            <h4 style="color: #009cde;">{{ $value->nombre_categorias }}</h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </li>
                </ul>
            @endforeach
        </thead>
    </div>    
</section>

<!-- Footer -->
<div class="cursual"><!--  start cursual  -->
		<span class="line"></span>
</div>

<footer class="text-center text-lg-start bg-light text-muted">
   <section  style="background-color: #3d3d3d;"
      class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Left -->
      
      <!-- Left -->

      <!-- Right -->
    
      <!-- Right -->
   </section>
    
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section  style="background-color: #efefef;" class="">
    <div class="container text-center text-md-start mt-5" style="padding: 46px;">
        <!-- Grid row -->
        <div class="row mt-3" style="margin-top: 14px; margin-block-end: 25px;">
            <!-- Grid column -->
             <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4">
                <!-- Content -->
                <h6 class="text-uppercase fw-bold mb-4">
                    <a href="home"><img  src="images/Logo_Albalex-04.png" alt=""/></a>
                </h6> 
              </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">
                    Productos
                </h6>
                <p>
                    <a href="portfolio1" class="text-reset">Cajas</a>
                </p>
                <p>
                    <a href="portfolio2" class="text-reset">Contactores</a>
                </p>
                <p>
                    <a href="categorias" class="text-reset">LLaves</a>
                </p>
                <p>
                    <a href="categorias" class="text-reset">Otros</a>
                </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">
                    Categorias
                </h6>
                <p>
                    <a href="home" class="text-reset">Inicio</a>
                </p>
                <p>
                    <a href="about" class="text-reset">Sobre Nosotros</a>
                </p>
                <p>
                    <a href="categorias" class="text-reset">Productos</a>
                </p>
                <p>
                    <a href="contact" class="text-reset">Contacto</a>
                </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">
                    Contacto
                </h6>
                <p><i class="fas fa-home me-3"></i> Lima, Av. Argentina 575</p>
                <p>
                    <i class="fas fa-envelope me-3"></i>
                    info@example.com
                </p>
                <p><i class="fas fa-phone me-3"></i> (+ 51) 980 331 676</p>
                <p><i class="fas fa-phone me-3"></i> (+ 51) 980 331 676</p>
            </div>

            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">
                    Siguenos
                </h6>
                <p>
                    <a href="" class="me-3 text-reset text-center">
                        <i class="fab fa-facebook-f" style="font-size: 13px; color: blue;"></i>
                    </a>&nbsp; &nbsp;
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-whatsapp" style="font-size: 13px; color: green;"></i> 
                    </a>
                </p>

            </div>
            <!-- Grid column -->
        </div>
        <!-- Grid row -->
    </div>
</section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(239 239 239);">
      © 2021 Copyright:
      <a class="text-reset fw-bold" href="/">Albalex Electric S.A.C</a>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->
</body>
</html>