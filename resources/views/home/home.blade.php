
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

<!--start slider -->
    <link rel="stylesheet" href="css/fwslider.css" media="all">
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/css3-mediaqueries.js"></script>
    <script src="js/fwslider.js"></script>
<!--end slider -->

<!-- must have -->
<link href="css/allinone_carousel.css" rel="stylesheet" type="text/css">
<script src="js/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
<script src="js/jquery.ui.touch-punch.min.js" type="text/javascript"></script>
<script src="js/allinone_carousel.js" type="text/javascript"></script>
<!--[if IE]><script src="js/excanvas.compiled.js" type="text/javascript"></script><![endif]-->
<!-- must have -->

	<script>
		jQuery(function() {

			jQuery('#allinone_carousel_charming').allinone_carousel({
				skin: 'charming',
				width: 990,
				height: 454,
				responsive:true,
				autoPlay: 3,
				resizeImages:true,
				autoHideBottomNav:false,
				showElementTitle:false,
				verticalAdjustment:50,
				showPreviewThumbs:false,
				//easing:'easeOutBounce',
				numberOfVisibleItems:5,
				nextPrevMarginTop:23,
				playMovieMarginTop:0,
				bottomNavMarginBottom:-10
			});		
		});
	</script>
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
<style>
	#contact{
    padding:10px 0 10px;
  }

  .contact-text{
    margin:45px auto;
  }

  .mail-message-area{
    width:100%;
    padding:0 15px;
  }

  .mail-message{
    width: 100%;
    background:rgba(255,255,255, 0.8) !important;
    -webkit-transition: all 0.7s;
    -moz-transition: all 0.7s;
    transition: all 0.7s;
    margin:0 auto;
    border-radius: 0;
  }

  .not-visible-message{
    height:0px;
    opacity: 0;
  }

  .visible-message{
    height:auto;
    opacity: 1;
    margin:25px auto 0;
  }

/* Input Styles */

  .form{
    width: 100%;
    padding: 15px;
    background:#dddddd;
    border:1px solid rgba(0, 0, 0, 0.075);
    /* margin-bottom:25px; */
    color:#727272 !important;
    font-size:13px;
    -webkit-transition: all 0.4s;
    -moz-transition: all 0.4s;
    transition: all 0.4s;
  }

  .form:hover{
    border:1px solid #8BC3A3;
  }

  .form:focus{
    color: white;
    outline: none;
    border:1px solid #8BC3A3;
  }

  .textarea{
    height: 200px;
    max-height: 200px;
    max-width: 100%;
  }
  
/* Generic Button Styles */

  .button{
    padding:8px 12px;
    background:#0A5175;
    display: block;
    width:120px;
    margin:10px 0 0px 0;
    border-radius:3px;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    transition: all 0.3s;
    text-align:center;
    font-size:0.8em;
    box-shadow: 0px 1px 4px rgba(0,0,0, 0.10);
    -moz-box-shadow: 0px 1px 4px rgba(0,0,0, 0.10);
    -webkit-box-shadow: 0px 1px 4px rgba(0,0,0, 0.10);
  }

  .button:hover{
    background:#8BC3A3;
    color:white;
  }

/* Send Button Styles */

  .form-btn{
    width:180px;
    display: block;
    height: auto;
    padding:15px;
    color:#fff;
    background:#009bdd;
    border:none;
    border-radius:3px;
    outline: none;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    transition: all 0.3s;
    margin:auto;
    box-shadow: 0px 1px 4px rgba(0,0,0, 0.10);
    -moz-box-shadow: 0px 1px 4px rgba(0,0,0, 0.10);
    -webkit-box-shadow: 0px 1px 4px rgba(0,0,0, 0.10);
	font-size: 12px;
  }

  .form-btn:hover{
    background:#111;
    color: white;
    border:none;
  }

  .form-btn:active{
    opacity: 0.9;
  }
center{
  margin-top:330px;
}
input {
    position: relative;
    z-index: 9999;
}
</style>
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
			<li class="activate"><a href="home">INICIO</a></li>
			<li><a href="about">SOBRE NOSOTROS</a></li>
			<!-- <li><a href="service">services</a></li>  -->
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
    <div id="fwslider"><!-- start slider -->
        <div class="slider_container">
            <div class="slide"> 
                <!-- Slide image -->
                    <img src="images/slider1.jpg">
                <!-- /Slide image -->
                <!-- Texts container -->
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <!-- Text title -->
                        <h4 class="title">i want to feel What you wanted!</h4>
                        <!-- /Text title -->
                        <!-- Text description -->
                        <p class="description">A super clean and easy to use Modern templates Lorem ipsum dolor sit amet</p>
                        <!-- /Text description -->
                    </div>
                </div>
                 <!-- /Texts container -->
            </div>
            <!-- /Duplicate to create more slides -->
            <div class="slide">
                <img src="images/slider2.jpg">
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <h4 class="title">Lorem ipsum dolor sit amet</h4>
                        <p class="description">Pellentesque non neque egestas libero. Nam sed porta est. Vestibulum id massa eu odio rhoncus eleifend.</p>
                    </div>
                </div>
            </div>
            <!--/slide -->
        </div>
        <div class="timers"></div>
        <div class="slidePrev"><span></span></div>
        <div class="slideNext"><span></span></div>
    </div><!--/slider -->
<div class="main_bg"><!-- start main -->
<div class="container">
	<div class="main_grid">
		<div class="top_grid"><!-- start top_grid -->
				<div class="col-md-10 span1_of_1">
						<h3>Sobre Nosotros</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
				</div>
				<div class="col-md-2 span1_of_2">
					<a class="btn" href="about">Ver mas</a>
				</div>
				<div class="clearfix"></div>
		</div>
		
	</div>
</div>
</div>
<div class="main1_bg"><!-- start main1 -->
<div class="container">
	<div class="main slider_text texxt-center">
		<h4>why modus versus</h4>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
</div>
</div>
<!-- start banner -->
<div id="bannerBg">
<div id="containingDiv">
            <div id="allinone_carousel_charming">
            	<div class="myloader"></div>
                <!-- CONTENT -->
                <ul class="allinone_carousel_list">
               		<li><img src="images/slider_pic1.jpg" alt="" class="img-responsive"/></li>
                    <li><img src="images/slider_pic2.jpg" alt="" class="img-responsive"/></li>
                    <li><img src="images/slider_pic3.jpg" alt="" class="img-responsive"/></li>
                    <li><img src="images/slider_pic4.jpg" alt="" class="img-responsive"/></li>
                    <li><img src="images/slider_pic5.jpg" alt="" class="img-responsive"/></li>
                    <li><img src="images/slider_pic3.jpg" alt="" class="img-responsive"/></li>
                    <li><img src="images/slider_pic4.jpg" alt="" class="img-responsive"/></li>
                    <li><img src="images/slider_pic5.jpg" alt="" class="img-responsive"/></li>
                </ul> 			
          </div>
</div>
</div>


<!-- End Inner -->
			
 <!-- end banner -->
 
<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
    <!-- Section: Social media -->
      <div>
        <div class="contact" style="background: linear-gradient( 224deg, #000000b5, #000000b0);">
            <!--<p class="style">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>-->	
              <div class="clearfix">
                <div class="contact_main" style="margin-top: 11px;">
                <div class="col-md-3"></div>
                  <div class="col-md-6">
                    <div class="contact-form">
                      <h2 style="color: white;">CONTÁCTANOS</h2>
                      <form >
                          @csrf
                          <div class="row">
                            <div class="col-md-6">
                              <input  id="name" type="text" name="name" placeholder="Nombre" required>
                            </div>
                            <div class="col-md-6">
                              <input id="business" type="text" name="business" placeholder="Empresa" >
                            </div>
                            <div class="col-md-6">
                              <input id="email" type="text" name="email" placeholder="Email" required>
                            </div>
                            <div class="col-md-6">
                              <input id="number" type="text" name="number" placeholder="Numero" required >
                            </div>
                            <div class="col-md-12">
                             <textarea id="commentary"  name="commentary" placeholder="Deje su mensaje..." required></textarea>
                            </div>

                            <div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h4 class="modal-title" id="myModalLabel">Gracias por Contactarnos!</h4>
                                  </div>
                                  <div class="modal-body" style="font-size: 14px;">
                                    Nos pondremos en contacto con usted.
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="modal fade" id="alertModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h4 style="color: red;" class="modal-title" id="myModalLabel">Advertencia!</h4>
                                  </div>
                                  <div class="modal-body" style="font-size: 15px;">
                                   Por favor rellene todos los campos.
                                  </div>
                                </div>
                              </div>
                            </div>

                        <!-- <input class="btn btn-outline-primary" type="button" value="Enviar" onclick="formulario()"> -->
                        </div>
                        <button type="button" class="btn btn-outline-primary" onclick="formulario()" required>Enviar</button>
                      </form>
                      <!-- <button class="btn btn-outline-primary" onclick="formulario()">Enviar</button> -->
                    </div>
                  </div>		
                </div>		
            </div>
          </div>
      </div>
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

<script>

  function formulario() {

      var _token = $("input[name='_token']").val();
      var nombre=$("#name").val();
      var empresa=$("#business").val();
      var email=$("#email").val();
      var numero=$("#number").val();
      var comentario=$("#commentary").val();

      console.log(nombre,' - ', empresa,' - ',email,' - ',numero,' - ',comentario);

      if(nombre != '' && empresa != '' && email != '' && numero != '' && comentario != ''){

        $("#name").prop('required',true);

        $.ajax({
                  //headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                  url: "{{ route('contact.store') }}",
                  type: 'POST',
                  datatype: 'json',
                  async: false,
                  data: {_token:_token, nombre:nombre, empresa:empresa, email:email, numero:numero, comentario:comentario},
                  success: function (respuesta) {
                      console.log(respuesta.status);
                      if( respuesta.status == 1 ){

                        document.getElementById("name").value = "";
                        document.getElementById("business").value = "";
                        document.getElementById("email").value = "";
                        document.getElementById("number").value = "";
                        document.getElementById("commentary").value = "";

                        $('#miModal').modal('show');

                      }

                  }
              });

      }else{
        $('#alertModal').modal('show');
      }
    

  }

</script>