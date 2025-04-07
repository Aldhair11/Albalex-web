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
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- Owl Carousel Assets -->
<link href="css/owl.carousel.css" rel="stylesheet">
<script src="js/owl.carousel.js"></script>
		<script>
			$(document).ready(function() {

				$("#owl-demo").owlCarousel({
					items : 4,
					lazyLoad : true,
					autoPlay : true,
					navigation : true,
					navigationText : ["", ""],
					rewindNav : false,
					scrollPerPage : false,
					pagination : false,
					paginationNumbers : false,
				});

			});
		</script>
		<!-- //Owl Carousel Assets -->
<!-- start circle -->
<script>
(function($){
	$.fn.percentPie = function(options){

		var settings = $.extend({
			width: 100,
			trackColor: "EEEEEE",
			barColor: "E2534B",
			barWeight: 30,
			startPercent: 0,
			endPercent: 1,
			fps: 60
		}, options);

		this.css({
			width: settings.width,
			height: settings.width
		});

		var	that = this,
			hoverPolice = false,
			canvasWidth = settings.width,
			canvasHeight = canvasWidth,
			id = $('canvas').length,
			canvasElement = $('<canvas id="'+ id +'" width="' + canvasWidth + '" height="' + canvasHeight + '"></canvas>'),
			canvas = canvasElement.get(0).getContext("2d"),
			centerX = canvasWidth/2,
			centerY = canvasHeight/2,
			radius = settings.width/2 - settings.barWeight/2;
			counterClockwise = false,
			fps = 1000 / settings.fps,
			update = .01;
			this.angle = settings.startPercent;

		this.drawArc = function(startAngle, percentFilled, color){
			var drawingArc = true;
			canvas.beginPath();
			canvas.arc(centerX, centerY, radius, (Math.PI/180)*(startAngle * 360 - 90), (Math.PI/180)*(percentFilled * 360 - 90), counterClockwise);
			canvas.strokeStyle = color;
			canvas.lineWidth = settings.barWeight;
			canvas.stroke();
			drawingArc = false;
		}

		this.fillChart = function(stop){
			var loop = setInterval(function(){
				hoverPolice = true;
				canvas.clearRect(0, 0, canvasWidth, canvasHeight);

				that.drawArc(0, 360, settings.trackColor);
				that.angle += update;
				that.drawArc(settings.startPercent, that.angle, settings.barColor);

				if(that.angle > stop){
					clearInterval(loop);
					hoverPolice = false;
				}
			}, fps);
		}

		this.mouseover(function(){
			if(hoverPolice == false){
				that.angle = settings.startPercent;
				that.fillChart(settings.endPercent);
			}
		});

		this.fillChart(settings.endPercent);
		this.append(canvasElement);
		return this;
	}
}(jQuery));

$(document).ready(function() {

	$('.google').percentPie({
		width: 100,
		trackColor: "E2534B",
		barColor: "76C7C0",
		barWeight: 20,
		endPercent: .9,
		fps: 60
	});
  
  $('.moz').percentPie({
		width: 100,
		trackColor: "E2534B",
		barColor: "76C7C0",
		barWeight: 20,
		endPercent: .75,
		fps: 60
	});
  
  $('.safari').percentPie({
		width: 100,
		trackColor: "E2534B",
		barColor: "#76C7C0",
		barWeight: 20,
		endPercent: .5,
		fps: 60
	});
    
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
		<a id="touch-menu" class="mobile-menu" href="#">Menu</a>
		<nav>
		<ul class="menu list-unstyled">
			<li><a href="home">INICIO</a></li>
			<li class="activate"><a href="about">SOBRE NOSOTROS</a></li>
			<!-- <li><a href="service">services</a></li> -->
			<li><a href="categorias">PRODUCTOS</a></li>
			<!-- <li><a href="blog">BLOG</a></li>
			<li><a href="feature">feature</a></li> -->
			<li><a href="contact">CONTÁCTENOS</a></li>
		</ul>
		</nav>
		<script src="js/menu.js" type="text/javascript"></script>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
</div>
<div class="main_bg"><!-- start main -->
<div class="container">
	<div class="main_grid1">
		<h3 class="style pull-left">Sobre Nosotros</h3>
		<ol class="breadcrumb pull-right">
		  <li><a href="home">Inicio</a></li>
		  <li class="active">Sobre Nosotros</li>
		</ol>
		<div class="clearfix"></div>
	</div>
</div>
</div>
<div class="main_btm1"><!-- start main_btm -->
<div class="container">
	<div class="main about span_of_3">
	<h3>Mision </h3>
	<p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
	<h3>Vision </h3>
	<p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
		<div class="col-md-3 span1_of_3">
			<h4>¿Porque elegirnos?</h4>
			<ul class="nav_list" style="list-style: none; padding-left: 0;">
				<li><p >Lorem ipsum dolor sit amet, consectetur</p></li>
				<li><p >Nullam nec sapien eget metus</p></li>
				<li><p >Curabitur pellentesque mauris tempor </p></li>
				<li><p >Mauris dictum neque ornare nibh feugiat</p></li>
				<li><p >Nullam nec sapien eget metus</p></li>
				<li><p >Lorem ipsum dolor sit amet, consectetur</p></li>
				<li><p >Curabitur pellentesque mauris tempor </p></li>
				<li><p >Curabitur pellentesque mauris tempor </p></li>
				<li><p >Mauris dictum neque ornare nibh feugiat</p></li>
				<li><p >Lorem ipsum dolor sit amet, consectetur</p></li>
			</ul>
		</div>	
		<div class="col-md-6 span1_of_3">
			<h5>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,<span>randomised words which don't </span> look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </h5>
				<!--start circle -->
				<!--<ul class="list-unstyled circle_list">
					<li>
						<div class="safari chart">
						  <div class="tag">50%</div>
						</div>			
						<h4 class="style">meier</h4>			
					</li>
					<li>
						<div class="moz chart">
						  <div class="tag">75%</div>
						</div>			
						<h4 class="style">johnson</h4>			
					</li>
					<li>
						<div class="google chart">
						  <div class="tag">90%</div>
						</div>	
						<h4 class="style">junghanns</h4>					
					</li>
				</ul>-->
				<!-- end circle -->
		</div>	
		<div class="col-md-3 span1_of_3">
			<h4>¿Que dice el cliente?</h4>
			<div class="clients1">
				<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos </p>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="cursual"><!--  start cursual  -->
		<h4>Clientes<span class="line"></span></h4>
	</div>
	<div id="owl-demo" class="owl-carousel"><!----start-img-cursual---->
		<div class="item">
			<div class="cau_left">
				<img class="lazyOwl" data-src="images/c1.png" alt="Lazy Owl Image">
			</div>
		</div>
		<div class="item">
			<div class="cau_left">
				<img class="lazyOwl" data-src="images/c2.png" alt="Lazy Owl Image">
			</div>
		</div>
		<div class="item">
			<div class="cau_left">
				<img class="lazyOwl" data-src="images/c3.png" alt="Lazy Owl Image">
			</div>
		</div>
		<div class="item">
			<div class="cau_left">
				<img class="lazyOwl" data-src="images/c1.png" alt="Lazy Owl Image">
			</div>
		</div>
		<div class="item">
			<div class="cau_left">
				<img class="lazyOwl" data-src="images/c2.png" alt="Lazy Owl Image">
			</div>
		</div>
		<div class="item">
			<div class="cau_left">
				<img class="lazyOwl" data-src="images/c3.png" alt="Lazy Owl Image">
			</div>
		</div>
		<div class="item">
			<div class="cau_left">
				<img class="lazyOwl" data-src="images/c1.png" alt="Lazy Owl Image">
			</div>
		</div>	
		<div class="item">
			<div class="cau_left">
				<img class="lazyOwl" data-src="images/c4.png" alt="Lazy Owl Image">
			</div>
		</div>	
		<div class="item">
			<div class="cau_left">
				<img class="lazyOwl" data-src="images/c1.png" alt="Lazy Owl Image">
			</div>
		</div>
		<div class="item">
			<div class="cau_left">
				<img class="lazyOwl" data-src="images/c2.png" alt="Lazy Owl Image">
			</div>
		</div>
		<div class="item">
			<div class="cau_left">
				<img class="lazyOwl" data-src="images/c3.png" alt="Lazy Owl Image">
			</div>
		</div>
		<div class="item">
			<div class="cau_left">
				<img class="lazyOwl" data-src="images/c1.png" alt="Lazy Owl Image">
			</div>
		</div>
		<div class="item">
			<div class="cau_left">
				<img class="lazyOwl" data-src="images/c2.png" alt="Lazy Owl Image">
			</div>
		</div>
	</div><!----//End-img-cursual---->
</div>
</div>

<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
   <section  style="background-color: #3d3d3d;"
      class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Left -->
      
      <!-- Left -->

      <!-- Right -->
    
      <!-- Right -->
   </section>
    <!-- Section: Links  -->
    <section  style="background-color: #efefef;" class="">
    <div class="container text-center text-md-start mt-5" style="padding: 46px;">
        <!-- Grid row -->
        <div class="row mt-3" style="margin-top: 14px;">
            <!-- Grid column -->
             <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4">
                <!-- Content -->
                <h6 class="text-uppercase fw-bold mb-4">
                    <a href="home"><img src="images/Logo_Albalex-04.png" alt=""/></a>
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