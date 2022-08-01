<?php require 'action_cliente.php'; ?>

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
</head>
<body class="goto-here">
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

</div>
<div class="hero-wrap hero-bread" style="background-image: url('images/bg_cadastro.png');">
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
        <!--<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Wishlist</span></p>-->
        <h1 class="mb-0 bread">Admin</h1>
        <p></p>
      </div>
    </div>
  </div>
</div>

<section class="ftco-section ftco-category bg-light">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 ">



        <form class="signup-form" method="post" action="action_adm.php?acao=login">

          <div class="form-group">

            <input type="text" class="form-control" placeholder="Login" id="login" name="login" required="required">

          </div>


          <div class="form-group">

            <input type="password" class="form-control" placeholder="Senha" id="senha" name="senha" required="required">

          </div>

          <div class="form-group text-center pt-4">

            <input type="submit" class="btn btn-primary px-4 py-3" value="Entrar"></p>

          </div>

        </form>

      </div>
    </div>
  </div>
</div>
</section>


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
<script src="js/main.js"></script>

<script src="js/busca-cep.js"></script>
<script src="js/jquery.mask.js"></script>
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

<script>
  function TestaCPF(strCPF) {
    strCPF = foo.replace('/[^0-9]/', '')
    var Soma;
    var Resto;
    Soma = 0;
    if (strCPF == "00000000000") return false;

    for (i=1; i<=9; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (11 - i);
      Resto = (Soma * 10) % 11;

    if ((Resto == 10) || (Resto == 11))  Resto = 0;
    if (Resto != parseInt(strCPF.substring(9, 10)) ) return false;

    Soma = 0;
    for (i = 1; i <= 10; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (12 - i);
      Resto = (Soma * 10) % 11;

    if ((Resto == 10) || (Resto == 11))  Resto = 0;
    if (Resto != parseInt(strCPF.substring(10, 11) ) ) return false;
    return true;
  }
  var strCPF = "12345678909";
  alert(TestaCPF(strCPF));
</script>

<script type="text/javascript">
 $("#btn-mensagem").click(function(){
  $("#modal-mensagem").modal();
});
</script>
<?php if (isset($_GET['success']) && $_GET['success'] == 1){?>
  <script type="text/javascript">
   $("#btn-mensagem").ready(function(){
    $("#modal-mensagem-2").modal();
  });
</script>
<?php } ?>

<?php if (isset($_GET['oops']) && $_GET['oops'] == 1){?>
  <script type="text/javascript">
   $("#btn-mensagem").ready(function(){
    $("#modal-mensagem-3").modal();
  });
</script>
<?php } ?>

<?php if (isset($_GET['oops']) && $_GET['oops'] == 2){?>
  <script type="text/javascript">
   $("#btn-mensagem").ready(function(){
    $("#modal-mensagem-4").modal();
  /*
  let nome = document.getElementById('nome');
  nome.value = "<?php echo $nome;?>";
  let email = document.getElementById('email');
  email.value = "<?= $email;?>";
  let telefone = document.getElementById('telefone');
  telefone.value = "<?=$telefone;?>";
  let data-nascimento = document.getElementById('data-nascimento');
  data-nascimento.value = "<?=$data;?>";
  let cpf = document.getElementById('cpf');
  cpf.value = "<?=$cpf;?>";
  let flag_newsletter = document.getElementById('flag_newsletter');
  flag_newsletter.value = "<?=$flag_newsletter;?>";
  let uf = document.getElementById('uf');
  uf.value = "<?=$uf;?>";
  let cidade = document.getElementById('cidade');
  cidade.value = "<?=$cidade;?>";
  let bairro = document.getElementById('bairro');
  bairro.value = "<?=$bairro;?>";
  let rua = document.getElementById('rua');
  rua.value = "<?=$rua;?>";
  let numero = document.getElementById('numero');
  numero.value = "<?=$numero;?>";
  let complemento = document.getElementById('complemento');
  complemento.value = "<?=$complemento?>";
  let cep = document.getElementById('cep');
  cep.value = "<?=$cep;?>";
  document.getElementById('senha').setfocus();*/
});
<?php } ?>

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
<?php  }?>

</body>
</html>