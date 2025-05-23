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
			<a href="home"><img src="images/Logo_Albalex-04.png" alt=""/></a>
		</div>
		<div class="h_menu">
		<a id="touch-menu" class="mobile-menu" href="#">Menu</a>
		<nav>
		<ul class="menu list-unstyled">
			<li><a href="home">HOME</a></li>
			<li><a href="about">ABOUT</a></li>
			<li class="activate"><a href="service">services</a></li>
			<li><a href="portfolio">PORTFOLIO</a>
			<ul class="sub-menu list-unstyled">
				<li><a href="portfolio.html">Portfolio Page</a></li>
				<li><a href="portfolio.html">Portfolio Page</a></li>
				<li><a href="portfolio.html">Portfolio Page</a>
					<ul class="list-unstyled">
						<li><a href="portfolio.html">Sub-Menu 1</a></li>
						<li><a href="portfolio.html">Sub-Menu 2</a></li>
						<li><a href="portfolio.html">Sub-Menu 3</a></li>
					</ul>
				</li>
			</ul>
			</li>
			<li><a href="blog">BLOG</a></li>
			<li><a href="feature">feature</a></li>
			<li><a href="contact">CONTACT</a></li>
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
		<h3 class="style pull-left">our services</h3>
		<ol class="breadcrumb pull-right">
		  <li><a href="home">Home</a></li>
		  <li class="active">services</li>
		</ol>
		<div class="clearfix"></div>
	</div>
</div>
</div>
<div class="main_btm1"><!-- start main_btm1 -->
<div class="container">
	<div class="main about span_of_3">
		<h3>There are many variations of passages of Lorem Ipsum available, </h3>
		<p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
		<div class="col-md-3 span1_of_3">
			<h4>why choose us?</h4>
			<ul class="list-unstyled nav_list">
				<li><a href="#">Lorem ipsum dolor sit amet, consectetur</a></li>
				<li><a href="#">Nullam nec sapien eget metus</a></li>
				<li><a href="#">Curabitur pellentesque mauris tempor </a></li>
				<li><a href="#">Mauris dictum neque ornare nibh feugiat</a></li>
				<li><a href="#">Lorem ipsum dolor sit amet, consectetur</a></li>
				<li><a href="#">Nullam nec sapien eget metus</a></li>
				<li><a href="#">Curabitur pellentesque mauris tempor </a></li>
			</ul>
		</div>	
		<div class="col-md-3 span1_of_3">
			<h4>what client's say ?</h4>
			<div class="clients1">
				<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos </p>
			</div>
		</div>
		<div class="col-md-6 span1_of_3">
				<!-- start circle -->
				<ul class="list-unstyled circle_list">
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
				</ul>
				<!-- end circle -->
		</div>	
		<div class="clearfix"></div>
	</div>
</div>
</div>	
<div class="main_btm2"><!-- start main_btm2 -->
<div class="container">
<div class="pricing2"><!-- start pricing2 -->
		<h5>select a plan</h5>
		<h6>It is a long established fact that a reader will be distracted by the readable content of a page when looking</h6>
		<ul class="pricing_table list-unstyled">
		<li class="price_block">
			<h3>Starter</h3>
			<div class="price">
				<div class="price_figure">
					<span class="price_number">FREE</span>
				</div>
			</div>
			<ul class="features list-unstyled">
				<li>1GB Storage</li>
				<li>2 Clients</li>
				<li>5 Active Projects</li>
				<li>5 Colors</li>
				<li>Free Goodies</li>
				<li>24/7 Email support</li>
			</ul>
			<div class="pricing_btn">
				<a class="action_button popup-with-zoom-anim" href="#small-dialog">Buy Now</a>
			</div>
		</li>
		<li class="price_block">
			<h3>Basic</h3>
			<div class="price">
				<div class="price_figure">
					<span class="price_number">$9.99</span>
					<span class="price_tenure">per month</span>
				</div>
			</div>
			<ul class="features list-unstyled">
				<li>2GB Storage</li>
				<li>5 Clients</li>
				<li>10 Active Projects</li>
				<li>10 Colors</li>
				<li>Free Goodies</li>
				<li>24/7 Email support</li>
			</ul>
			<div class="pricing_btn">
				<a class="action_button popup-with-zoom-anim" href="#small-dialog">Buy Now</a>
			</div>
		</li>
		<li class="price_block">
			<h3>Premium</h3>
			<div class="price">
				<div class="price_figure">
					<span class="price_number">$19.99</span>
					<span class="price_tenure">per month</span>
				</div>
			</div>
			<ul class="features list-unstyled">
				<li>5GB Storage</li>
				<li>10 Clients</li>
				<li>20 Active Projects</li>
				<li>20 Colors</li>
				<li>Free Goodies</li>
				<li>24/7 Email support</li>
			</ul>
			<div class="pricing_btn">
				<a class="action_button popup-with-zoom-anim" href="#small-dialog">Buy Now</a>
			</div>
		</li>
		<li class="price_block">
			<h3>Lifetime</h3>
			<div class="price">
				<div class="price_figure">
					<span class="price_number">$999</span>
				</div>
			</div>
			<ul class="features list-unstyled">
				<li>Unlimited Storage</li>
				<li>Unlimited Clients</li>
				<li>Unlimited Projects</li>
				<li>Unlimited Colors</li>
				<li>Free Goodies</li>
				<li>24/7 Email support</li>
			</ul>
			<div class="pricing_btn">
				<a class="action_button popup-with-zoom-anim" href="#small-dialog">Buy Now</a>
			</div>
		</li>
		<div class="clearfix"></div>
	</ul>
	<ul class="skeleton pricing_table list-unstyled" style="margin-top: 100px; overflow: hidden;">
		<li class="label" style="margin: 0 none;">ul.pricing_table</li>
		<li class="price_block">
			<span class="label">li.price_block</span>
			<h3><span class="label">h3</span></h3>
			<div class="price">
				<span class="label">div.price</span>
				<div class="price_figure">
					<span class="label">div.price_figure</span>
					<span class="price_number">
						<span class="label">span.price_number</span>
					</span>
					<span class="price_tenure">
						<span class="label">span.price_tenure</span>
					</span>
				</div>
			</div>
			<ul class="features list-unstyled">
				<li class="label">ul.features</li>
				<br /><br /><br />
			</ul>
			<div class="pricing_btn">
				<span class="label">div.pricing_btn</span>
			</div>
		</li>
		<li class="price_block" style="opacity: 0.5;">
			<span class="label">li.price_block</span>
			<h3><span class="label">h3</span></h3>
			<div class="price">
				<span class="label">div.price</span>
				<div class="price_figure">
					<span class="label">div.price_figure</span>
					<span class="price_number">
						<span class="label">span.price_number</span>
					</span>
					<span class="price_tenure">
						<span class="label">span.price_tenure</span>
					</span>
				</div>
			</div>
			<ul class="features list-unstyled">
				<li class="label">ul.features</li>
				<br /><br /><br />
			</ul>
			<div class="footer">
				<span class="label">div.pricing_btn</span>
			</div>
		</li>
		<li class="price_block" style="opacity: 0.25;">
			<span class="label">li.price_block</span>
			<h3><span class="label">h3</span></h3>
			<div class="price">
				<span class="label">div.price</span>
				<div class="price_figure">
					<span class="label">div.price_figure</span>
					<span class="price_number">
						<span class="label">span.price_number</span>
					</span>
					<span class="price_tenure">
						<span class="label">span.price_tenure</span>
					</span>
				</div>
			</div>
			<ul class="features list-unstyled">
				<li class="label">ul.features</li>
				<br /><br /><br />
			</ul>
			<div class="pricing_btn">
				<span class="label">div.pricing_btn</span>
			</div>
		</li>
		<div class="clear"></div>
	</ul>
	<div class="clear"></div>
	</div><!-- end pricing2 -->
	<div class="cursual"><!--  start cursual  -->
		<h4>our happy clients<span class="line"></span></h4>
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
<div class="footer_bg"><!-- start footer -->
<div class="container">
	<div class="footer">
		<div class="col-md-4 footer1_of_3">
			<div class="f_logo">
				<a href="index.html"><img src="images/logo.png" alt=""/></a>
			</div>		
			<p class="f_para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting</p>
			<p>Phone:&nbsp;<span>(00) 222 666 444</span></p>
			<span class="">Email:&nbsp;<a href="mailto:info@mycompany.com">info(at)mycompany.com</a></span>
		</div>
		<div class="col-md-2 footer1_of_3">
			<h4>company</h4>
			<ul class="list-unstyled f_list">
				<li><a href="#">Lorem ipsum dolor sit amet</a></li>
				<li><a href="#">Nullam nec sapien eget</a></li>
				<li><a href="#">Curabitur pellentesque</a></li>
				<li><a href="#">Mauris dictum neque</a></li>
				<li><a href="#">Lorem ipsum dolor sit</a></li>
				<li><a href="#">Nullam nec sapien</a></li>
				<li><a href="#">Curabitur mauris tempor </a></li>
			</ul>
		</div>
		<div class="col-md-2 footer1_of_3">
			<h4>community</h4>
			<ul class="list-unstyled f_list">
				<li><a href="#">Lorem ipsum dolor sit amet</a></li>
				<li><a href="#">Nullam nec sapien eget</a></li>
				<li><a href="#">Curabitur pellentesque</a></li>
				<li><a href="#">Mauris dictum neque</a></li>
				<li><a href="#">Lorem ipsum dolor sit</a></li>
				<li><a href="#">Nullam nec sapien</a></li>
				<li><a href="#">Curabitur mauris tempor </a></li>
			</ul>
		</div>
		<div class="col-md-4 footer_of_3">
			<h4>from the <span>blog</span></h4>
			<div class="blog_list">
				<div class="col-md-3 f_pic">
					<a href="blog.html"><img src="images/blog_pic1.jpg" alt="" class="img-responsive"/></a>	
				</div>
				<div class="col-md-9 f_text">
					<a href="blog.html"><p>Lorem Ipsum is simply dummy text of the this printing and typesetting industry.</p></a>
					<span>26, may 2014</span>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="blog_list">
				<div class="col-md-3 f_pic">
					<a href="blog.html"><img src="images/blog_pic2.jpg" alt="" class="img-responsive"/></a>
				</div>
				<div class="col-md-9 f_text">
					<a href="blog.html"><p>Lorem Ipsum is simply dummy text of the this printing and typesetting industry.</p></a>
					<span>17, June 2014</span>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
</div>
<div class="footer1_bg"><!-- start footer1 -->
<div class="container">
	<div class="footer1">
		<div class="copy pull-left">
			<p class="link"><span>&#169; All rights reserved | Template by&nbsp;<a href="http://w3layouts.com/"> W3Layouts</a></span></p>
		</div>
		<div class="soc_icons pull-right">
			<ul class="list-unstyled text-center">
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="#"><i class="fa fa-rss"></i></a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
</div>
</body>
</html>