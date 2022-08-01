<?php
//require_once 'action_login.php';
session_start();
if (isset($_SESSION['user'])) {

  $nome = $_SESSION['user'][0]->nome;

  $pontos = $_SESSION['pontos'];
  $acumulado = $_SESSION['acumulado'];
  $niveis = $_SESSION['niveis'];
  $nivel = $_SESSION['nivel'];
  $i = $_SESSION['i'];
  $cupons = $_SESSION['cupons'];
}else{

 header("Location:index.php?msg=4");

}
//=====================


//=====================
if (empty($_GET['listar'])) {

  header('Location:historico_trocas.php?listar=cupom&acao=recuperar2');

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
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
  <!--Gráfico-->
  
  
</head>
<body class="goto-here">
<?php
  if (isset($_SESSION['user'])) {
  require 'inc-menu-2.php';}
    else{
      require 'inc-menu.php';
  }

  ?>



<div class="hero-wrap hero-bread" style="background-image: url('images/bg-loja.jpg');">
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
       <!--<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Wishlist</span></p>-->
       <h1 class="mb-0 bread">Olá <?=$nome?></h1>
     </div>
   </div>
 </div>
</div>


<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-10 mb-5 text-center">
      <ul class="product-category">
        <li><a href="visao_geral.php" >Visão geral</a></li>
        <li><a href="historico_pontos.php" >Histórico de pontos</a></li>
        <li><a href="historico_trocas.php" class="active">Histórico de trocas</a></li>
        <!--<li><a href="#"></a></li>
        <li><a href="#">Dried</a></li>-->
      </ul>
    </div>
  </div>
</div>


<section class="ftco-section ftco-cart pt-0">
  <div class="container">
    <div class="row">
      <div class="col-md-12 ftco-animate">
        <div class="cart-list">
          <h3 class="pb-5 d-flex justify-content-center">Histórico de trocas</h3>   
          <table class="table">
            <?php if(isset($_GET['listar']) && $_GET['listar'] == 'cupom'){?>
              <thead class="thead-primary">
                <tr class="text-center">
                  <th>Id</th>
                  <th>Código do Cupom</th>
                  <th>Data e hora da troca</th>
                  <th>Descrição</th>                   
                  <th>Valor (pontos)</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($cupons as $key => $cupom) {?>
                  <tr class="text-center">
                    <td class="product-remove"><?=$cupom->idCupom?></td>
                    
                    <td class="image-prod"><?=$cupom->cod_Cupom?></div></td>
                    
                    <td class="product-name">
                      <h3><?=$cupom->dthr_compra?></h3>
                      <p></p>
                    </td>
                    
                    <td class="price"><?=$cupom->descricao?></td>
                    
                    
                    
                    <td class="total"><?=$cupom->valor?></td>
                  </tr><!-- END TR-->
                  <?php   } }  ?>  
                </tbody>
              </table>
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

<!--Gráfico-->




<script>
  $(document).ready(function(){

    var quantitiy=0;
    $('.quantity-right-plus').click(function(e){

		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined

            $('#quantity').val(quantity + 1);


		            // Increment

              });

    $('.quantity-left-minus').click(function(e){
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined

		            // Increment
		            if(quantity>0){
                  $('#quantity').val(quantity - 1);
                }
              });

  });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>

<script type="text/javascript">
 function logout(){
 <?php
 header('Location:index.php');
 ?>
};
</script>

</body>
</html>