<?php
require 'action_cliente.php';
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
  <link rel="stylesheet" href="css/icomoon-2.css">
  <link rel="stylesheet" href="css/style.css">

  <script type="text/javascript">
    function editar(id, texto, texto2, texto3, texto4) {
      
     //criar um form de edição
     let form = document.createElement('form')
     form.action='action_cliente.php?acao=atualizar'
     form.method='post'
     form.className = 'row'

     //criar um input para entrada do texto
     let inputNome = document.createElement('input')
     inputNome.type = 'text'
     inputNome.name = 'nome'
     inputNome.className = 'col-4 form-control'
     inputNome.value = texto

     let inputEmail = document.createElement('input')
     inputEmail.type = 'text'
     inputEmail.name = 'email'
     inputEmail.className = 'col-4 form-control'
     inputEmail.value = texto2

     let inputTelefone = document.createElement('input')
     inputTelefone.type = 'text'
     inputTelefone.name = 'telefone'
     inputTelefone.className = 'col-4 form-control'
     inputTelefone.value = texto3

     let inputData_Nasc = document.createElement('input')
     inputData_Nasc.type = 'text'
     inputData_Nasc.name = 'data_nasc'
     inputData_Nasc.className = 'col-4 form-control'
     inputData_Nasc.value = texto4

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
     form.appendChild(inputNome)

     form.appendChild(inputEmail)

     form.appendChild(inputTelefone)

     form.appendChild(inputData_Nasc)

     //incluir inputId no form
     form.appendChild(inputId)

     //incluir button no form

    form.appendChild(button)

    //teste
    //console.log(form)
    //alert(texto)

    //selecionar o tr Categoria
    let nome = document.getElementById('nome_'+id)
    let email = document.getElementById('email_'+id)
    let telefone = document.getElementById('telefone_'+id)
    let data_nasc = document.getElementById('data_nasc_'+id)

    //limpar o texto da tarefa para a inclusão do form
    nome.innerHTML = ''
    email.innerHTML = ''
    telefone.innerHTML = ''
    data_nasc.innerHTML = ''

    //incluir form na página
    nome.insertBefore(form, nome[0])
    email.insertBefore(form, email[0])
    telefone.insertBefore(form, telefone[0])
    data_nasc.insertBefore(form, data_nasc[0])
    }
  </script>
<script type="text/javascript">
  function remover(id) {
      alert(id);
      location.href = 'cadastro_cliente.php?acao=remover&id='+id;
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
      <form method="post" class="form-control" action="action_cliente.php?acao=inserir">

        
        <p>Nome:<input type="textbox" name="nome" id="nome"></p>
        <p>Email:<input type="textbox" name="email" id="email"></p>
        <p>Telfone:<input type="textbox" name="telefone" id="telefone"></p>
        <p>CPF:<input type="textbox" name="cpf" id="cpf"></p>
        <p>Data de nascimento:<input type="textbox" name="data_nasc" id="data_nasc"></p>
        
        <input type="submit" name="" class="btn " value="Enviar">


      </form>
      <br><br>
      <div class="row justify-content-center">
        <div class="row">
          <a href="action_cliente.php?acao=recuperar"><input type="button" name="listar_categoria" value="Listar categorias"></a>
          <a href="action_cliente.php?acao=recuperar"><input type="button" name="listar_categoria" hidden value="Ocultar categorias"></a>
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
  <?php if(isset($_GET['listar']) && $_GET['listar'] == 'cliente'){?>

    <table class="table col-6 align-items-center justify-content-center text-center centered">
<br>
<br>
<br>
<br>
      <thead>
        <tr><td colspan="3">CATEGORIAS</td></tr>
        <tr>
          <td class="" scope="col">Id da categoria</td>
          <td class="" scope="col">Categoria</td>
        </tr>
      </thead>
      <tbody>
       <?php foreach ($clientes as $key => $cliente) {?>
         <tr>
          <td class=""><?=$cliente->idcliente?></td>
          <td class="" id="nome_<?=$cliente->idcliente?>"><?=$cliente->nome?></td>
          <td class="" id="email_<?=$cliente->idcliente?>"><?=$cliente->email?></td>
          <td class="" id="telefone_<?=$cliente->idcliente?>"><?=$cliente->telefone?></td>
          <td class="" id="data_nasc_<?=$cliente->idcliente?>"><?=$cliente->data_nasc?></td>
          <!--<td class=""><a onclick="remover(<?=$categoria->idcliente?>);">Excluir</a></td>-->
          <td class=""><a onclick="editar(<?=$cliente->idcliente?>, '<?=$cliente->nome?>', '<?=$cliente->email?>', '<?=$cliente->telefone?>', '<?=$cliente->data_nasc?>');">Alterar</a></td>
        </tr>


      <?php  }
    }
    ?>           
  </tbody>
</table>      
</div>





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
</html>