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
			<li><a href="about">SOBRE NOSOTROS</a></li>
			<!-- <li><a href="service">services</a></li> -->
			<li><a href="categorias">PRODUCTOS</a></li>
			<!-- <li><a href="blog">BLOG</a></li>
			<li><a href="feature">feature</a></li> -->
			<li  class="activate"><a href="contact">CONTÁCTENOS</a></li>
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
		<h3 class="style pull-left">CONTÁCTANOS</h3>
		<ol class="breadcrumb pull-right">
		  <li><a href="home">Inicio</a></li>
		  <li class="active">contacto</li>
		</ol>
		<div class="clearfix"></div>
	</div>
</div>
</div>
<div class="main_btm1"><!-- start main_btm -->
  <div class="container">
	<div class="contact">
		<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1640.588157731109!2d-77.04919025350249!3d-12.043643056270735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c8d375525725%3A0xe58afe26c8cd1b4d!2sLa%20Chimenea!5e0!3m2!1ses-419!2spe!4v1624118615178!5m2!1ses-419!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe><br><small><a target="_blank" href="https://goo.gl/maps/gzjENgz9mNSWJFtp8" style="font-family: 'Open Sans', sans-serif;color:#555555;text-shadow:0 1px 0 #ffffff; text-align:left;font-size:12px;padding: 5px;">Ver mapa</a></small>
		<!--<p class="style">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>-->
		<div class="contact_main">
			    <div class="col-md-4 company_ad">
				    <h2>Dirección :</h2>
      				<address>
						 <p>C.C La Chimenea</p>
						 <p>Av. Argentina Nª575</p>
						 <p>Lima - Peru</p>
				   		<p>Telefono:(+51) 980 331 676</p>
				   		<!--<p>Fax: (000) 000 00 00 0</p>-->
				 	 	<p>Email: <a target="_blank" href="mailto:info@mycompany.com">info(at)mycompany.com</a></p>
				   		<p>Siguenos: <a target="_blank" href="#">Facebook</a>, <a target="_blank" href="#">Whatsapp</a></p>
				   	</address>
				</div>
				<div class="col-md-8">
				  <div class="contact-form">
				  
					<form >
                        @csrf
						<div class="row">
                            <h2>CONTÁCTANOS</h2>
                            <div>
                              <input  id="name" type="text" name="name" placeholder="Nombre" required>
                            </div>
                            <div >
                              <input id="business" type="text" name="business" placeholder="Empresa" required  >
                            </div>
                            <div >
                              <input id="email" type="text" name="email" placeholder="Email" required >
                            </div>
                            <div >
                              <input id="number" type="text" name="number" placeholder="Numero" required>
                            </div>
                            <div >
                             <textarea id="commentary"  name="commentary" placeholder="Deje su mensaje..." required></textarea>
                            </div>
                            <div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h4 class="modal-title" id="myModalLabel" style="text-align: center;">Gracias por Contactarnos!</h4>
                                  </div>
                                  <div class="modal-body" style="font-size: 14px; text-align: center;">
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
                                    <h4 style="color: red; text-align: center;" class="modal-title" id="myModalLabel">Advertencia!</h4>
                                  </div>
                                  <div class="modal-body" style="font-size: 15px; text-align: center;">
                                   Por favor rellene todos los campos.
                                  </div>
                                </div>
                              </div>
                            </div>

                           <!-- <input class="btn btn-outline-primary" type="button" value="Enviar" onclick="formulario()"> -->
                        </div>
                        <button type="button" class="btn btn-outline-primary" onclick="formulario()" required>Enviar</button>
                    </form>
				  </div>
  			    </div>		
  		   <div class="clearfix"></div>		
		</div>
	</div>
  </div>
</div>


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
                    <a target="_blank" href="" class="me-3 text-reset text-center">
                        <i class="fab fa-facebook-f" style="font-size: 13px; color: blue;"></i>
                    </a>&nbsp; &nbsp;
                    <a target="_blank" href="" class="me-4 text-reset">
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
      <a  class="text-reset fw-bold" href="/">Albalex Electric S.A.C</a>
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