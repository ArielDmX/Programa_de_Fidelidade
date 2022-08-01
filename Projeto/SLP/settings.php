<?php
//require_once 'action_login.php';
session_start();
if (isset($_SESSION['useradm'])) {

  $nome = $_SESSION['useradm'][0]->nome;

}else{

 header("Location:adm.php?msg=4");

}
//=====================


//=====================

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
<body class="goto-here">
  <?php
  if (isset($_SESSION['useradm'])) {
    require 'inc-menu-2.php';}
    else{
      require 'inc-menu.php';
    }

    ?>



    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_cadastro.png');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
           <!--<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Wishlist</span></p>-->
           <h1 class="mb-0 bread">Olá <?=$nome?></h1>
         </div>
       </div>
     </div>
   </div>

   <?php if (isset($_GET['msg']) && $_GET['msg'] == 1){?>
    <div class="bg-success pt-2 d-flex justify-content-center">
      <h5 class="color-msg">Pontos inseridos com sucesso</h5>
    </div>
  <?php } ?>
  <?php if (isset($_GET['msg']) && $_GET['msg'] == 5){?>
    <div class="bg-danger pt-2 d-flex justify-content-center">
      <h5 class="color-msg">Cliente não encontrado</h5>
    </div>
  <?php } ?>
  <?php if (isset($_GET['msg']) && $_GET['msg'] == 3){?>
    <div class="bg-success pt-2 d-flex justify-content-center">
      <h5 class="color-msg">Troca realizada com sucesso</h5>
    </div>
  <?php } ?>


  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-10 mb-5 text-center">
        <ul class="product-category">
          <li><a href="settings.php" class="active">Visão geral</a></li>
          <li><a href="config.php">Configurações</a></li>
          <li><a href="relatorios_adm.php">Relatórios</a></li>
          <li><a href="cadastro_adm.php">Cadastrar ADM</a></li>
        <!--<li><a href="#"></a></li>
          <li><a href="#">Dried</a></li>-->
        </ul>
      </div>
    </div>
  </div>

  <section class="ftco-section ftco-cart pt-2">
    <div class="container">
      <div class="row">
        <div class="col-md-12 ftco-animate">
          <div class="row">
            <div class="col-md-6 align-items-center text-center"> 
              <h4 class="pb-4">Consulta rápida de pontos</h4>   
              <form class="signup-form" method="POST" action="action_ponto.php?acao=consulta">

                <div class="form-group">

                  <input type="text" class="form-control .cpf" placeholder="CPF do cliente" id="cpf" name="cpf" required="required">


                </div>

                <div class="form-group text-center pt-4">

                  <input type="submit" class="btn btn-primary" value="Consultar"></p>

                </div>
              </form>
            </div>

            <!--Copiado do outro código-->
            <div class="col-md-6 align-items-center text-center"> 
              <h4 class="pb-4">Consulta de cupom</h4>   
              <form class="signup-form" method="POST" action="action_cupom.php?acao=consulta">

                <div class="form-group">

                  <input type="text" class="form-control" placeholder="Cód. do cupom" id="cod" name="cod" required="required">

                </div>

                <div class="form-group text-center pt-4">

                  <input type="submit" class="btn btn-primary" value="Consultar"></p>

                </div>
              </form>
            </div>

          </div>

        </div>
      </div>
    </div>
  </section>

  <?php if(isset($_GET['listar']) && $_GET['listar'] == 'pontos'){
    $pontos = $_SESSION['pontos'];
    $nomecliente = $_SESSION['nomecliente'];
    ?>
    <section class="ftco-section ftco-cart pt-0">
      <div class="container">
        <div class="row">
          <div class="col-md-12 ftco-animate">
            <div class="cart-list">
              <h3 class="pb-5 d-flex justify-content-center">Histórico de pontos de <?=$nomecliente?></h3>   
              <table class="table">

                <thead class="thead-primary">
                  <tr class="text-center">
                    <th>Id</th>
                    <th>Data</th>
                    <th>Tipo</th>
                    <th>Quantidade</th>                   
                    <th>Total de pontos</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i=0; foreach ($pontos as $key => $ponto) {?>
                    <tr class="text-center">
                      <td class="product-remove"><?=$ponto->idponto?></td>

                      <td class="image-prod"><?=$ponto->data_opera?></div></td>

                      <td class="product-name">
                        <h3><?php if($ponto->credito_ou_debito == "c"){echo "Creditado";}else{echo"Debitado";}?></h3>
                        <p></p>
                      </td>

                      <td class="price"><?=$ponto->ponto_transitado?></td>



                      <td class="total"><?=$ponto->ponto_acumulado?></td>
                    </tr><!-- END TR-->
                    <?php  $i++; if($i>9){break;} }  ?>  
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </section>
    <?php } ?>

    <?php if(isset($_GET['listar']) && $_GET['listar'] == 'cupom'){
      $cupons = $_SESSION['cupons'];
      $nomecliente = $_SESSION['nomecliente'];
      ?>
      <section class="ftco-section ftco-cart pt-0">
        <div class="container">
          <div class="row">
            <div class="col-md-12 ftco-animate">
              <div class="cart-list">
                <h3 class="pb-5 d-flex justify-content-center">Cupom</h3>   
                <table class="table">

                  <thead class="thead-primary">
                    <tr class="text-center">
                      <th>Id do cupom</th>
                      <th>Código do Cupom</th>
                      <th>Data e hora da troca</th>
                      <th>Descrição</th>                   
                      <th>Valor (pontos)</th>
                      <th>Id do cliente</th>
                      <th>Nome do cliente</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php  foreach ($cupons as $key => $cupom) {?>
                      <tr class="text-center">
                        <td class="product-remove"><?=$cupom->idCupom?></td>

                        <td class="image-prod"><?=$cupom->cod_Cupom?></div></td>

                        <td class="product-name">
                          <h3><?=$cupom->dthr_compra?></h3>
                          <p></p>
                        </td>

                        <td class="price"><?=$cupom->descricao?></td>



                        <td class="total"><?=$cupom->valor?></td>

                        <td class="total"><?=$cupom->Cliente_idcliente?></td>

                        <td class="total"><?=$nomecliente?></td>
                      </tr><!-- END TR-->
                    <?php   }   ?>  
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </section>
    <?php } ?>


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
   <script>
    $('#data-nascimento').mask('00/00/0000');
    $('.time').mask('00:00:00');
    $('.date_time').mask('00/00/0000 00:00:00');
    $('.cep').mask('00000-000');
    $('.phone').mask('0000-0000');
    $('#telefone').mask('(00) 00000-0000');
    $('.phone_us').mask('(000) 000-0000');
    $('.mixed').mask('AAA 000-S0S');
    $('#cpf').mask('000.000.000-00', {reverse: true});
    $('#cpf2').mask('000.000.000-00', {reverse: true});
    $('.cnpj').mask('00.000.000/0000-00', {reverse: true});
    $('.money').mask('000.000.000.000.000,00', {reverse: true});
    $('.money2').mask("#.##0,00", {reverse: true});
    $('.ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
      translation: {
        'Z': {
          pattern: /[0-9]/, optional: true
        }
      }
    });
    $('.ip_address').mask('099.099.099.099');
    $('.percent').mask('##0,00%', {reverse: true});
    $('.clear-if-not-match').mask("00/00/0000", {clearIfNotMatch: true});
    $('.placeholder').mask("00/00/0000", {placeholder: "__/__/____"});
    $('.fallback').mask("00r00r0000", {
      translation: {
        'r': {
          pattern: /[\/]/,
          fallback: '/'
        },
        placeholder: "__/__/____"
      }
    });
    $('.selectonfocus').mask("00/00/0000", {selectOnFocus: true});

  </script>
</body>
</html>