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
			<li class="activate"><a href="/home">INICIO</a></li>
			<li><a href="about">ABOUT</a></li>
			<!-- <li><a href="service">services</a></li> -->
			<li><a href="categorias">PORTFOLIO</a>
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
			<!-- <li><a href="blog">BLOG</a></li>
			<li><a href="feature">feature</a></li> -->
			<li><a href="contact">CONTACT</a></li>
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
		<h3 class="style pull-left">our modus</h3>
		<ol class="breadcrumb pull-right">
		  <li><a href="home">Inicio</a></li>
		  <li class="active">Inicio</li>
		</ol>
		<div class="clearfix"></div>
	</div>
</div>
</div>
<div class="main_btm1"><!-- start main_btm -->
<div class="container">
		<div class="details">
			<h2>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h2>
			<img src="images/det_pic.jpg" alt="" class="img-responsive"/>
			<p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
			<p class="para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words. </p>
			<a href="#" class="btn">read more</a>
		</div>
</div>
</div>
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
                      <h2>CONTÁCTANOS</h2>
                      <form action="/contact/store" method="POST">
                          @csrf
                          <div class="row">
                            <div class="col-md-6">
                              <input type="text" name="name" value="Nombre " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nombre';}">
                            </div>
                            <div class="col-md-6">
                              <input type="text" name="business" value="Empresa" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Empresa';}">
                            </div>
                            <div class="col-md-6">
                              <input type="text" name="email" value="Email " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
                            </div>
                            <div class="col-md-6">
                              <input type="text" name="number" value="Numero " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Numero';}">
                            </div>
                            <div class="col-md-12">
                                <textarea name="commentary" onfocus="if(this.value == 'Your Message here....') this.value='';" onblur="if(this.value == '') this.value='Your Message here....;" >Your Message here....</textarea>
                            </div>

                        <!--<input type="text" name="name" value="Nombre (Requerido)" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nombre';}">
                        <input type="text" name="business" value="Empresa (Requerido)" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Empresa';}">
                        <input type="text" name="email" value="Email (Requerido)" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
                        <input type="text" name="number" value="Numero (Requerido)" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Numero';}">
                        <textarea name="commentary" onfocus="if(this.value == 'Your Message here....') this.value='';" onblur="if(this.value == '') this.value='Your Message here....;" >Your Message here....</textarea>
                        <div class="input-group mb-3" style="font-size: 14px;font-weight: 600;color: #fff;/* background-color: #009cde; */display: inline-block;transition: all .5s;cursor: pointer;padding: 10px 5px !important;text-transform: uppercase;width: fit-content;text-align: center;">
                        <input type="file" class="form-control" id="inputGroupFile02" style="background-color: #dddddd;">
                        <label class="input-group-text" for="inputGroupFile02"></label>
                        </div> 
                        <br>
                        <br>-->
                        <span><input type="submit" value="Enviar"></span>
                        </div>
                      </form>
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
                    <a href="portfolio" class="text-reset">Cajas</a>
                </p>
                <p>
                    <a href="portfolio" class="text-reset">Contactores</a>
                </p>
                <p>
                    <a href="portfolio" class="text-reset">LLaves</a>
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
                    <a href="categories" class="text-reset">Productos</a>
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
      <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Albalex Electric S.A.C</a>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->
</body>
</html>