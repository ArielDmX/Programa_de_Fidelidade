
<!DOCTYPE html>

<html lang="en">



<head>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Landing PAGE Html5 Template">

    <meta name="keywords" content="landing,startup,flat">

    <meta name="author" content="Made By GN DESIGNS">



    <title>Consulta de pontos | LPS</title>



    <!-- // PLUGINS (css files) // -->

    <link href="assets/js/plugins/bootsnav_files/skins/color.css" rel="stylesheet">

    <link href="assets/js/plugins/bootsnav_files/css/animate.css" rel="stylesheet">

    <link href="assets/js/plugins/bootsnav_files/css/bootsnav.css" rel="stylesheet">

    <link href="assets/js/plugins/bootsnav_files/css/overwrite.css" rel="stylesheet">

    <link href="assets/js/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">

    <link href="assets/js/plugins/owl-carousel/owl.theme.css" rel="stylesheet">

    <link href="assets/js/plugins/owl-carousel/owl.transitions.css" rel="stylesheet">

    <link href="assets/js/plugins/Magnific-Popup-master/Magnific-Popup-master/dist/magnific-popup.css" rel="stylesheet">

    <!--// ICONS //-->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--// BOOTSTRAP & Main //-->

    <link href="assets/bootstrap-3.3.7/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="assets/css/main.css" rel="stylesheet">

    <link href="assets/css/help.css" rel="stylesheet">

    <!--// Gráficos //-->

    <link rel="stylesheet" type="text/css" href="assets\chart.js\2.8.0\Chart.min.css">


    

</head>



<body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>

    <!--======================================== 

           Preloader

           ========================================-->

           <div class="page-preloader">

            <div class="spinner">

                <div class="rect1"></div>

                <div class="rect2"></div>

                <div class="rect3"></div>

                <div class="rect4"></div>

                <div class="rect5"></div>

            </div>

        </div>



    <!--======================================== 

           Header

           ========================================-->



           <!--//** Navigation**//-->

           <nav class="navbar navbar-default navbar-fixed white no-background bootsnav navbar-scrollspy" data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">



            <div class="container">

                <!-- Start Header Navigation -->

                <div class="navbar-header">

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">

                        <i class="fa fa-bars"></i>

                    </button>

                    <a class="navbar-brand" href="#brand">

                        <img src="assets/img/logo.png" class="logo" alt="logo">

                    </a>

                </div>

                <!-- End Header Navigation -->



                <!-- Collect the nav links, forms, and other content for toggling -->

                <div class="collapse navbar-collapse" id="navbar-menu">

                    <ul class="nav navbar-nav navbar-right">

                        <li class="active scroll"><a href="#home">Home</a></li>

                        <li class="scroll"><a href="#pontos">Progresso</a></li>

                        <li class="button-holder">

                            <a href="logout_cliente.php" style="padding: 0px;"><button type="button" class="btn btn-blue navbar-btn" data-toggle="modal" data-target="#SignIn">Sign Out</button></a>
                        </li>

                    </ul>

                </div>

                <!-- /.navbar-collapse -->

            </div>

        </nav>



        <!--//** Banner**//-->

        <section id="home">

            <div id="particles-js"></div>

            <div class="container">

                <div class="row">

                    <!-- Introduction -->

                    <div class="col-md-12 caption">

                        <h1>Bem-vindo <?php $nome = "Daniel"; echo $nome;?></h1>


                        <p>.</p>

                        <a href="#pontos" class="btn btn-transparent">Acompanhe seu progresso</a>


                    </a>

                </div>

                



            </section>



    <!--======================================== 

           About Us

           ========================================-->

           <section id="pontos" class="section-padding-2">

            <div class="container">

                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-center" style="padding-bottom: 35px;">Acompanhe seu progresso</h2>
                    </div>
                </div>

                <div class="row">


                    <div class="col-md-5-2">    
                        <h4 class="text-center" style="margin-bottom: 40px;">Nível <?php $i = 100; echo "$i"; ?></h4>
                        <canvas id="nivel" width="auto" height="auto"></canvas>
                        <script>
                            var ctx = document.getElementById('nivel').getContext('2d');
                            var nivel = new Chart(ctx, {
                                type: 'doughnut',
                                data: {
                                    labels: ['Você tem', 'Para passar de nível'],
                                    datasets: [{
                                        label: '# of Votes',
                                        data: [<?php $nivel = 100; echo "$nivel"; ?>, <?php echo "3000-$nivel"; ?>],
                                        backgroundColor: [
                                        'rgba(255, 69, 0, 1)',
                                        'rgba(255, 255, 255, 1)',
                                        ],
                                        borderColor: [
                                        'rgba(255, 69, 0, 1)',
                                        'rgba(255, 69, 0, 1)',
                                        ],
                                        borderWidth: 1
                                    }]
                                },
                                options: {

                                }
                            });
                        </script>
                        <p class="text-center" style="margin: 40px;">Faltam <?php $calc = 3000-$nivel; echo "$calc"; ?> para você passar de nível.</p>
                    </div>


                    <div class="col-md-5-2">
                        <h4 class="text-center" style="margin-bottom: 35px;">Você possui <?php $pontos = $_SESSION['pontos']; echo "$pontos"; ?> pontos.</h4>

                        <table class="table">
                            <thead bgcolor="#EEEEEE">
                                <tr>
                                    <td scope="col">Id da transação</td>
                                    <td scope="col">Tipo de transação</td>
                                    <td scope="col">Quantidade</td>
                                    <td scope="col">Data</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $query = $_SESSION['query'];
                                $result2 = mysqli_query($conn, $query);
                                while ($dado = mysqli_fetch_assoc($result2)){
                                    ?>                        
                                    <tr>
                                        <th scope="row"><?php echo $dado['idpontos']; ?></th>
                                        <td><?php $cred_ou_debt = 'a'; if ($cred_ou_debt == 'debt') {
                                            echo "Débito";
                                        }else{echo "Crédito";} ?></td>
                                        <td><?php  echo $dado['pontos_transitados']; ?></td>
                                        <td><?php echo $dado['data_opera']; ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        
                    </div>


                </div>
            </section>


    <!--======================================== 

           Footer

           ========================================-->



           <footer>

            <div class="container">

                <div class="row">

                    <div class="footer-caption">

                        <img src="assets/img/logo-2.png" class="img-responsive center-block" alt="logo">

                        <hr class="hr-2">

                        <h5 class="pull-left">&copy;2019 All rights reserved</h5>

                        <ul class="liste-unstyled pull-right">

                            <li><a href="#facebook"><i class="fa fa-facebook"></i></a></li>

                            <li><a href="#twitter"><i class="fa fa-twitter"></i></a></li>

                            <li><a href="#linkedin"><i class="fa fa-linkedin"></i></a></li>

                            <li><a href="#instagram"><i class="fa fa-instagram"></i></a></li>

                        </ul>

                    </div>

                </div>

            </div>

        </footer>



    <!--======================================== 

           Modal

           ========================================-->

           <!-- Modal -->



           <div class="modal fade" id="SignIn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

            <div class="modal-dialog" role="document">

                <div class="modal-content">

                    <div class="modal-header">

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                        <h4 class="modal-title text-center" id="myModalLabel">Sign In</h4>

                    </div>

                    <div class="modal-body">


                        <nav class="nav-tabs">
                            <ul>
                                <li>
                                    <input type="radio" name="tabs" class="rd-tabs" id="tab1" checked>
                                    <label for="tab1">Cliente</label>
                                    <div class="container content">
                                        <div class="col-md-6"><br>
                                           <form class="signup-form" method="POST" action="login_cliente.php">

                                            <div class="form-group">

                                                <input type="text" class="form-control" placeholder="CPF" id="cpf" name="cpf" required="required">

                                            </div>

                                            <div class="form-group text-center">

                                                <button type="submit" class="btn btn-blue btn-block">Log In</button>

                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <input type="radio" name="tabs" class="rd-tabs" id="tab2">
                                <label for="tab2">Funcionário</label>
                                <div class="container content">
                                    <div class="col-md-6"><br>
                                        <form class="signup-form" method="POST" action="login_func.php">

                                            <div class="form-group">

                                                <input type="text" class="form-control" placeholder="Login" required="required">

                                            </div>

                                            <div class="form-group">

                                                <input type="password" class="form-control" placeholder="Senha" required="required">

                                            </div>

                                            <div class="form-group text-center">

                                                <button type="submit" class="btn btn-blue btn-block">Log In</button>

                                            </div>

                                            <div class="modal-footer text-center">

                                                <a href="#">Esqueceu a senha /</a>

                                                <a href="#">Cadastre-se</a>

                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </li>
                        </ul>                            

                    </nav>


                   <!-- <form class="signup-form">

                        <div class="form-group">

                            <input type="text" class="form-control" placeholder="User Name" required="required">

                        </div>

                        <div class="form-group">

                            <input type="text" class="form-control" placeholder="Password" required="required">

                        </div>

                        <div class="form-group text-center">

                            <button type="submit" class="btn btn-blue btn-block">Log In</button>

                        </div>

                    </form>-->

                </div>

            </div>

        </div>

    </div>


    <style>
        .nav-tabs{


            height: 250px;
            background-color: #fff;
            position: relative;
        }
        .nav-tabs ul{
            list-style: none;
        }
        .nav-tabs ul li{
            float: left;
        }
        .nav-tabs label{
            width: 250px;
            padding: 25px;
            background-color: #363b48;
            display: block;
            color: #fff;
            cursor: pointer;
            text-align: center;
        }
        .rd-tabs:checked ~ label{
            background-color: #e54e43;
        }
        .rd-tabs{
            display: none;
        }
        .content{
            border-top: 5px solid #e54e43;
            background-color: #fff;
            display: none;
            position: absolute;
            left: 0%;
            max-width: 100%;
            top: 100px;
            max-height: 100%;
        }
        .rd-tabs:checked ~ .content{
            display: block;
        }
    </style>


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
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  <!-- Include all compiled plugins (below), or include individual files as needed -->

  <script src="assets/bootstrap-3.3.7/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

  <script src="assets/js/plugins/owl-carousel/owl.carousel.min.js"></script>

  <script src="assets/js/plugins/bootsnav_files/js/bootsnav.js"></script>

  <script src="assets/js/plugins/typed.js-master/typed.js-master/dist/typed.min.js"></script>

  <script src="https://maps.googleapis.com/maps/api/js"></script>

  <script src="assets/js/plugins/Magnific-Popup-master/Magnific-Popup-master/dist/jquery.magnific-popup.js"></script>

  <script src="assets/js/plugins/particles.js-master/particles.js-master/particles.min.js"></script>

  <script src="assets/js/particales-script.js"></script>

  <script src="assets/js/main.js"></script>

  <script src="assets/chart.js/2.8.0/Chart.min.js"></script>

  <script src="assets/chart.js/2.8.0/Chart.bundle.min.js"></script>



  <script type="text/javascript">

     function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");

        }

        function meu_callback(conteudo) {
            if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);

        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }

    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('uf').value="...";


                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };

</script>

</body>



</html>