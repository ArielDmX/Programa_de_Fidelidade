<?php
require 'action_categoria.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Vegefoods - Free Bootstrap 4 Template by Colorlib</title>
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

  <script type="text/javascript">
    function editar(id, texto) {
      
     //criar um form de edição
     let form = document.createElement('form')
     form.action='action_categoria.php?acao=atualizar'
     form.method='post'
     form.className = 'row'

     //criar um input para entrada do texto
     let inputCategoria = document.createElement('input')
     inputCategoria.type = 'text'
     inputCategoria.name = 'categoria'
     inputCategoria.className = 'col-9 form-control'
     inputCategoria.value = texto

     //Criar um input hidden para guardar o id da categoria
     let inputId = document.createElement('input')
     inputId.type = 'hidden'
     inputId.name = 'id'
     inputId.value = id

     //criar um button para envio do form
     let button = document.createElement('button')
     button.type = 'submit'
     button;className = 'btn btn-info col-2'
     button.innerHTML = 'Atualizar'

     //incluir inputCategoria no form
     form.appendChild(inputCategoria)

     //incluir inputId no form
     form.appendChild(inputId)

     //incluir button no form

    form.appendChild(button)

    //teste
    //console.log(form)
    //alert(texto)

    //selecionar o tr Categoria
    let categoria = document.getElementById('categoria_'+id)

    //limpar o texto da tarefa para a inclusão do form
    categoria.innerHTML = ''

    //incluir form na página
    categoria.insertBefore(form, categoria[0])
    }
  </script>
<script type="text/javascript">
  function remover(id) {
      alert(id);
      location.href = 'categoria_marca.php?acao=remover&id='+id;
    }

</script>
</head>
<body class="goto-here">
  <div class="py-1 bg-primary">
   <div class="container">
    <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
     <div class="col-lg-12 d-block">
      <div class="row d-flex">
       <div class="col-md pr-4 d-flex topper align-items-center">
        <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
        <span class="text">+ 1235 2355 98</span>
      </div>
      <div class="col-md pr-4 d-flex topper align-items-center">
        <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
        <span class="text">youremail@email.com</span>
      </div>
      <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
        <span class="text">3-5 Business days delivery &amp; Free Returns</span>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
 <div class="container">
   <a class="navbar-brand" href="index.html">Vegefoods</a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
     <span class="oi oi-menu"></span> Menu
   </button>

   <div class="collapse navbar-collapse" id="ftco-nav">
     <ul class="navbar-nav ml-auto">
       <li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
        <div class="dropdown-menu" aria-labelledby="dropdown04">
         <a class="dropdown-item" href="shop.html">Shop</a>
         <a class="dropdown-item" href="wishlist.html">Wishlist</a>
         <a class="dropdown-item" href="product-single.html">Single Product</a>
         <a class="dropdown-item" href="cart.html">Cart</a>
         <a class="dropdown-item" href="checkout.html">Checkout</a>
       </div>
     </li>
     <li class="nav-item active"><a href="about.html" class="nav-link">About</a></li>
     <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
     <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
     <li class="nav-item cta cta-colored"><a href="cart.html" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li>

   </ul>
 </div>
</div>
</nav>
<!-- END nav -->
<!--<span>
  
  
</span>-->
<button type="button" class="btn btn-blue navbar-btn" data-toggle="modal" data-target="#excluir">Sign in</button>
<div class="modal fade" id="excluir" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center" id="myModalLabel">Sign In</h4>
                </div>
                <div class="modal-body">
                  <h4 class="text-center">Você tem certeza de que quer remover esse item?</h4>
                    <form class="signup-form">
                        <input type="button" class="btn btn-blue btn-block" name="confirma" value="SIM">
                        <input type="button" class="btn btn-blue btn-block" name="confirma" value="NÃO">
                    </form>
                </div>
                <div class="modal-footer text-center">
                    <a href="#">Forgot your password /</a>
                    <a href="#">Signup</a>
                </div>
            </div>
        </div>
    </div>

<section>
  <?php if (isset($_GET['msg']) && $_GET['msg'] == 1){?>
    <div class="bg-success pt-2 text-white d-flex justify-content-center">
      <h5>Categoria inserida com sucesso</h5>
    </div>
  <?php } ?>
  <?php if (isset($_GET['msg']) && $_GET['msg'] == 2){?>
    <div class="bg-success pt-2 text-white d-flex justify-content-center">
      <h5>Categoria atualizada com sucesso</h5>
    </div>
  <?php } ?>
  <?php if (isset($_GET['msg']) && $_GET['msg'] == 3){?>
    <div class="bg-success pt-2 text-white d-flex justify-content-center">
      <h5>Categoria removida com sucesso</h5>
    </div>
  <?php } ?>
  <div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
         <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>About us</span></p>
         <h1 class="mb-0 bread">Cadastro de categoria e marca</h1>
       </div>
     </div>
   </div>
 </div>
 <div class="container col-md-12 col-sm-12">
  <div class="row justify-content-center">
    <div class="col-md-5 col-sm-12">
      <form method="post" class="form-control" action="action_categoria.php?acao=inserir">

        <p>Categoria:<input type="textbox" name="categoria" id="categoria"></p>
        <input type="submit" name="Cadastrar" class="btn " value="Cadastrar categoria">

      </form>
      <br><br>
      <div class="row justify-content-center">
        <div class="row">
          <a href="action_categoria.php?acao=recuperar"><input type="button" name="listar_categoria" value="Listar categorias"></a>
          <a href="action_categoria.php?acao=recuperar"><input type="button" name="listar_categoria" hidden value="Ocultar categorias"></a>
        </div>

             

    </div>
  </div>
  <div class="col-md-5 col-sm-12">
    <form method="post" class="form-control" action="action_categoria.php">

      <p>Marca:<input type="textbox" name="marca" id="marca"></p>
      <input type="submit" class="btn" name="Cadastrar" value="Cadastrar marca">

    </form>
  </div>
</div>
</div>

</section> 

<div class="container">
  <?php if(isset($_GET['listar']) && $_GET['listar'] == 'categoria'){?>

    <table class="table col-6 align-items-center justify-content-center text-center centered">

      <thead>
        <tr><td colspan="3">CATEGORIAS</td></tr>
        <tr>
          <td class="" scope="col">Id da categoria</td>
          <td class="" scope="col">Categoria</td>
        </tr>
      </thead>
      <tbody>
       <?php foreach ($categorias as $key => $categoria) {?>
         <tr>
          <td class=""><?=$categoria->idcategoria_produto?></td>
          <td class="" id="categoria_<?=$categoria->idcategoria_produto?>"><?=$categoria->categoria?></td>
          <td class=""><a onclick="remover(<?=$categoria->idcategoria_produto?>);">Excluir</a></td>
          <td class=""><a onclick="editar(<?=$categoria->idcategoria_produto?>, '<?=$categoria->categoria?>');">Alterar</a></td>
        </tr>


      <?php  }
    }
    ?>           
  </tbody>
</table>      
</div>

<footer class="ftco-footer ftco-section">
  <div class="container">
   <div class="row">

   </div>
   <div class="row mb-5">
    <div class="col-md">
      <div class="ftco-footer-widget mb-4">
        <h2 class="ftco-heading-2">Vegefoods</h2>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
          <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
          <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
          <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
        </ul>
      </div>
    </div>
    <div class="col-md">
      <div class="ftco-footer-widget mb-4 ml-md-5">
        <h2 class="ftco-heading-2">Menu</h2>
        <ul class="list-unstyled">
          <li><a href="#" class="py-2 d-block">Shop</a></li>
          <li><a href="#" class="py-2 d-block">About</a></li>
          <li><a href="#" class="py-2 d-block">Journal</a></li>
          <li><a href="#" class="py-2 d-block">Contact Us</a></li>
        </ul>
      </div>
    </div>
    <div class="col-md-4">
     <div class="ftco-footer-widget mb-4">
      <h2 class="ftco-heading-2">Help</h2>
      <div class="d-flex">
       <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
         <li><a href="#" class="py-2 d-block">Shipping Information</a></li>
         <li><a href="#" class="py-2 d-block">Returns &amp; Exchange</a></li>
         <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
         <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
       </ul>
       <ul class="list-unstyled">
         <li><a href="#" class="py-2 d-block">FAQs</a></li>
         <li><a href="#" class="py-2 d-block">Contact</a></li>
       </ul>
     </div>
   </div>
 </div>
 <div class="col-md">
  <div class="ftco-footer-widget mb-4">
   <h2 class="ftco-heading-2">Have a Questions?</h2>
   <div class="block-23 mb-3">
     <ul>
       <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
       <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
       <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
     </ul>
   </div>
 </div>
</div>
</div>
<div class="row">
  <div class="col-md-12 text-center">

    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    </p>
  </div>
</div>
</div>
</footer>



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
<script src="jquery-3.4.1.min.js"></script>

    <script src="jquery.mask.js"></script>
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