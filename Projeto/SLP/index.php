<?php
//require_once 'action_login.php';
session_start();
?>
<?php
if (isset($_GET['logout']) and $_GET['logout'] == "sim"){
  session_destroy();
  header('Location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>SLP</title>
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

<div class="modal fade" id="modal-item1">
 <div class="modal-dialog modal-dialog-centered">
  <div class="modal-content">
    <div class="modal-header">
     <button type="button" class="close btn" data-dismiss="modal"><span>×</span></button>
   </div>
   <div class="modal-body">
    <form method="post" class="form-group" action="action_ponto.php?acao=inserir">
      <div class="d-flex justify-content-center">

        Tem certeza que deseja realizar a troca?


      </div>

      <div class="form-group text-center pt-4">
        <input type="hidden" value="d" name="c_ou_d" id="c_ou_d">
        <input type="hidden" value="Vinho Campo Largo" name="descricao" id="descricao">
        <input type="hidden" value="40" name="valor" id="valor">
        <input type="submit" class="btn btn-primary px-4 py-2" value="Confirmar"></p>

      </div>

    </form>
  </div>

</div>
</div>
</div>

<div class="modal fade" id="modal-item2">
 <div class="modal-dialog modal-dialog-centered">
  <div class="modal-content">
    <div class="modal-header">
     <button type="button" class="close btn" data-dismiss="modal"><span>×</span></button>
   </div>
   <div class="modal-body">
    <form method="post" class="form-group" action="action_ponto.php?acao=inserir">
      <div class="d-flex justify-content-center">

        Tem certeza que deseja realizar a troca?


      </div>

      <div class="form-group text-center pt-4">
        <input type="hidden" value="d" name="c_ou_d" id="c_ou_d">
        <input type="hidden" value="100" name="valor" id="valor">
        <input type="hidden" value="Cupom de desconto - 30%" name="descricao" id="descricao">
        <input type="submit" class="btn btn-primary px-4 py-2" value="Confirmar"></p>

      </div>

    </form>
  </div>

</div>
</div>
</div>

<div class="modal fade" id="modal-erro1">
 <div class="modal-dialog modal-dialog-centered">
  <div class="modal-content">
    <div class="modal-header">
     <button type="button" class="close btn" data-dismiss="modal"><span>×</span></button>
   </div>
   <div class="modal-body">

    <div class="d-flex justify-content-center">

      Você precisa entrar para acessar esta página!

    </div>

    <div class="form-group text-center pt-4">

      <input type="button" class="btn btn-primary px-4 py-2" data-dismiss="modal" value="Entendi"></p>

    </div>


  </div>
  
</div>
</div>
</div>

<div class="modal fade" id="modal-sucesso">
 <div class="modal-dialog modal-dialog-centered">
  <div class="modal-content">
    <div class="modal-header">
     <button type="button" class="close btn" data-dismiss="modal"><span>×</span></button>
   </div>
   <div class="modal-body">

    <div class="d-flex justify-content-center">

      Cadastrado com sucesso!

    </div>

    <div class="form-group text-center pt-4">

      <input type="button" class="btn btn-primary px-4 py-2" data-dismiss="modal" value="Entendi"></p>

    </div>


  </div>
  
</div>
</div>
</div>

<div class="modal fade" id="modal-erro2">
 <div class="modal-dialog modal-dialog-centered">
  <div class="modal-content">
    <div class="modal-header">
     <button type="button" class="close btn" data-dismiss="modal"><span>×</span></button>
   </div>
   <div class="modal-body">

    <div class="d-flex justify-content-center">

      Login e/ou senha incorretos!

    </div>

    <div class="form-group text-center pt-4">

      <input type="button" class="btn btn-primary px-4 py-2" data-dismiss="modal" value="Entendi"></p>

    </div>


  </div>
  
</div>
</div>
</div>



<section id="home-section" class="hero">
  <div class="home-slider owl-carousel">
   <div class="slider-item" style="background-image: url(images/bg-home12.png);">
    <div class="overlay"></div>
    <div class="container">
     <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

       <div class="col-md-12 ftco-animate text-center">
         <h1 class="mb-2">Bem-vindo</h1>
         <h2 class="subheading mb-4">Conheça nosso programa</h2>
         <p><a href="sobre.php" class="btn btn-primary">Clique aqui</a></p>
       </div>

     </div>
   </div>
 </div>

 <div class="slider-item" style="background-image: url(images/bg-home22.png);">
  <div class="overlay"></div>
  <div class="container">
   <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

     <div class="col-sm-12 ftco-animate text-center">
       <h1 class="mb-2">BENEFÍCIOS EXCLUSIVOS</h1>
       <h2 class="subheading mb-4">Faça o seu cadastro e aproveite</h2>
       <p><a href="cadastro.php" class="btn btn-primary">Clique aqui</a></p>
     </div>

   </div>
 </div>
</div>
</div>
</section>



<!--<section class="ftco-section ftco-category">
 <div class="container">
  <div class="row">
   <div class="col-md-8">
    <div class="row">
     <div class="col-md-6 order-md-last align-items-stretch d-flex">
      <div class="category-wrap-2 ftco-animate img align-self-stretch d-flex hide-image space" style="background-image: url(images/category.jpg);">
       <div class="text text-center">
        <h2>Nossos benefícios</h2>
        <p>Tem interesse?</p>
        <p><a href="cadastro.php" class="btn btn-primary">Cadastre-se</a></p>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(images/category-1.jpg);">
     <div class="text px-3 py-1">
      <h2 class="mb-0"><a href="#">Troque pontos por desconto</a></h2>
    </div>
  </div>
  <div class="category-wrap ftco-animate img d-flex align-items-end space" style="background-image: url(images/category-2.jpg);">
   <div class="text px-3 py-1">
    <h2 class="mb-0"><a href="#">Receba ofertas exclusivas</a></h2>
  </div>
</div>
</div>
</div>
</div>

<div class="col-md-4">
  <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(images/category-3.jpg);">
   <div class="text px-3 py-1">
    <h2 class="mb-0"><a href="#">Troque pontos por produtos</a></h2>
  </div>		
</div>
<div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(images/category-4.jpg);">
 <div class="text px-3 py-1">
  <h2 class="mb-0"><a href="#">Ganhe prêmios</a></h2>
</div>
</div>
</div>
</div>
</div>
</section>-->

<section class="ftco-section">
 <div class="container">
  <div class="row justify-content-center mb-3 pb-3">
    <div class="col-md-12 heading-section text-center ftco-animate">
     <span class="subheading">Recompensas disponíveis</span>
     <h2 class="mb-4">Loja</h2>
   </div>
 </div>   		
</div>
<div class="container">
  <div class="row">
   <div class="col-md-6 col-lg-3 ftco-animate">
    <div class="product">
     <img class="img-fluid" src="images/product-1.jpg" alt="">
     <div class="overlay"></div>

     <div class="text py-3 pb-4 px-3 text-center">
      <h3>Vinho Campo Largo</h3>
      <div class="d-flex">
       <div class="pricing">
        <p class="price"><span>40 pontos</span></p>
      </div>
    </div>
    <div class="bottom-area d-flex px-3">
     <div class="m-auto d-flex">
      <button class="btn buy-now d-flex justify-content-center align-items-center mx-1" id="item-1">

       <span><i class="ion-ios-cart"></i></span>

                    <!--<a href="#" class="heart d-flex justify-content-center align-items-center ">
                      <span><i class="ion-ios-heart"></i></span>-->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
              <div class="product">
                <img class="img-fluid" src="images/azul.jpg" alt="">
                <div class="overlay"></div>
              </a>
              <div class="text py-3 pb-4 px-3 text-center">
                <h3>CUPOM DE DESCONTO - 30%</h3>
                <div class="d-flex">
                 <div class="pricing">
                  <p class="price"><span>100 pontos</span></p>
                </div>
              </div>
              <div class="bottom-area d-flex px-3">
               <div class="m-auto d-flex">
                <button class="btn buy-now d-flex justify-content-center align-items-center mx-1" id="item-2">

                 <span><i class="ion-ios-cart"></i></span>

                    <!--<a href="#" class="heart d-flex justify-content-center align-items-center ">
                      <span><i class="ion-ios-heart"></i></span>-->

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
              <div class="product">
               <img class="img-fluid" src="images/product-3-ok.jpg" alt="">
               <div class="overlay"></div>

               <div class="text py-3 pb-4 px-3 text-center">
                <h3>Kit Desmaia Cabelo</h3>
                <div class="d-flex">
                 <div class="pricing">
                  <p class="price"><span>80 pontos</span></p>
                </div>
              </div>
              <div class="bottom-area d-flex px-3">
               <div class="m-auto d-flex">
                <button class="btn buy-now d-flex justify-content-center align-items-center mx-1" id="item-3">

                 <span><i class="ion-ios-cart"></i></span>

                    <!--<a href="#" class="heart d-flex justify-content-center align-items-center ">
                      <span><i class="ion-ios-heart"></i></span>-->

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
              <div class="product">
                <img class="img-fluid" src="images/product-4.jpg" alt="">
                <div class="overlay"></div>
              </a>
              <div class="text py-3 pb-4 px-3 text-center">
                <h3>Cesta de Chocolate</h3>
                <div class="d-flex">
                 <div class="pricing">
                  <p class="price"><span>120 pontos</span></p>
                </div>
              </div>
              <div class="bottom-area d-flex px-3">
               <div class="m-auto d-flex">
                <button class="btn buy-now d-flex justify-content-center align-items-center mx-1" id="item-4">

                 <span><i class="ion-ios-cart"></i></span>

                    <!--<a href="#" class="heart d-flex justify-content-center align-items-center ">
                      <span><i class="ion-ios-heart"></i></span>-->

                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="row justify-content-center pt-4"><a href="loja.php" class="btn btn-primary py-2 px-4">Veja todas as recompensas</a></div>
        </div>
      </section>

    </div>
    <div class="row justify-content-center"></div>
  </div>

  <section class="ftco-section img hide-image color-bg" style="background-image: url(images/deal-of-the-day.png);">
   <div class="container">
    <div class="row justify-content-end">
      <div class="col-md-6 heading-section ftco-animate deal-of-the-day ftco-animate">
       <span class="subheading">O melhor para você</span>
       <h2 class="mb-4">Oferta da semana</h2>
       <h3><a href="#">Barra de chocolate 120 g</a></h3>
       <span class="price">Por apenas <a href="#">20 pontos</a></span>
       <div id="timer" class="d-flex mt-5">
        <div class="time" id="days"></div>
        <div class="time pl-3" id="hours"></div>
        <div class="time pl-3" id="minutes"></div>
        <div class="time pl-3" id="seconds"></div>
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
<script type="text/javascript">
 $("#btn-mensagem").click(function(){
  $("#modal-mensagem").modal();
});
</script>
<script type="text/javascript">
 $("#item-1").click(function(){
  <?php if (isset($_SESSION['user'])) { ?>
    $("#modal-item1").modal();
  <?php }else{?>
    $("#modal-mensagem").modal();
  <?php } ?>
});
</script>

<script type="text/javascript">
 $("#item-2").click(function(){
  <?php if (isset($_SESSION['user'])) { ?>
    $("#modal-item2").modal();
  <?php }else{?>
    $("#modal-mensagem").modal();
  <?php } ?>
});
</script>

<?php if (isset($_GET['msg']) and $_GET['msg'] == 4)  {
  # code...
 ?>
 <script type="text/javascript">
   $("#btn-mensagem").ready(function(){
    $("#modal-erro1").modal();
  });
</script>
<?php } ?>

<?php if (isset($_GET['msg']) and $_GET['msg'] == 1) {
  # code...
 ?>
 <script type="text/javascript">
   $("#btn-mensagem").ready(function(){
    $("#modal-erro2").modal();
  });
</script>
<?php } ?>

<?php if (isset($_GET['msg']) and $_GET['msg'] == 6) {
  # code...
 ?>
 <script type="text/javascript">
   $("#btn-mensagem").ready(function(){
    $("#modal-sucesso").modal();
  });
</script>
<?php } ?>

</body>
</html>