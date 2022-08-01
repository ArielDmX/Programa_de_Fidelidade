<?php
session_start();
$_SESSION['sistema'] = "Loyalty";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?= $_SESSION['sistema'];?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body class="goto-here">
		<?php
  if (isset($_SESSION['user'])) {
  require 'inc-menu-2.php';}
    else{
      require 'inc-menu.php';
  }

  ?>

  <div class="modal fade" id="modal-mensagem">
   <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
       <button type="button" class="close btn" data-dismiss="modal"><span>×</span></button>
     </div>
     <div class="modal-body">
      <form method="post" class="form-group" action="action_login.php">
        <div class="form-group d-flex justify-content-center">

          <input type="email" class="form-control col-md-10 col-sm-12" placeholder="E-mail" id="email" name="email" required="required">

        </div>

        <div class="form-group d-flex justify-content-center mb-0">

          <input type="password" class="form-control col-md-10 col-sm-12" placeholder="Senha" id="senha" name="senha" required="required">

        </div>

        <div class="ml-md-5">
          <small><u><a class="" href="">Esqueci minha senha</a></u></small>
        </div>

        <div class="form-group text-center pt-3">

          <input type="submit" class="btn btn-primary px-4 py-2" value="Entrar"></p>

        </div>
      </form>
    </div>
    <div class="modal-footer">
     Não tem cadastro?<a href="cadastro.php">&nbsp;<u>Cadastre-se</u></a>
   </div>
 </div>
</div>
</div>

    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_sobre_2.png');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<!--<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Sobre</span></p>-->
            <h1 class="mb-0 bread">Sobre</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-no-pb ftco-no-pt">
			<div class="container">
				<div class="row">
					<div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/about-2.png);">
						
					</div>
					<div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
	          <div class="heading-section-bold mb-4 mt-md-5">
	          	<div class="ml-md-0">
		            <h2 class="mb-4">Lorem Ipsum</h2>
	            </div>
	          </div>
	          <div class="pb-md-5">
	          	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec elit ullamcorper, posuere sapien eget, vehicula odio. Vestibulum vitae turpis at orci iaculis dapibus id nec nisi. Pellentesque id diam nulla.</p>

              <p>Cras faucibus mauris et ex euismod, ut efficitur nisi mollis. Aenean rutrum augue et sem consectetur iaculis. Integer id metus eros. Etiam placerat lectus fringilla nisl dignissim, eu fringilla diam posuere. Etiam venenatis massa id augue iaculis, non imperdiet ante eleifend.
							<p class="pt-4"><a href="cadastro.php" class="btn btn-primary">Cadastre-se agora</a></p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<?php
      require 'inc-newsletter.php';
    ?>

    <?php
      require 'inc-rodape.php';
    ?>

        
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>

<script type="text/javascript">
 $("#btn-mensagem").click(function(){
  $("#modal-mensagem").modal();
});
</script>

</html>