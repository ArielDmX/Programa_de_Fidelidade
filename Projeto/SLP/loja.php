<?php
//require_once 'action_login.php';
session_start();
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
  </head>
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
          <input type="hidden" value="40" name="valor" id="valor">
          <input type="hidden" value="Vinho Campo Largo" name="descricao" id="descricao">
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
          <input type="hidden" value="Cupom de desconto - 30%" name="descricao" id="descricao">
          <input type="hidden" value="100" name="valor" id="valor">
          <input type="submit" class="btn btn-primary px-4 py-2" value="Confirmar"></p>

        </div>

      </form>
    </div>
    
 </div>
</div>
</div>

    <div class="hero-wrap hero-bread" style="background-image: url('images/bg-loja.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<!--<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Products</span></p>-->
            <h1 class="mb-0 bread">LOJA</h1>
          </div>
        </div>
      </div>
    </div>


    		<!--<div class="row justify-content-center">
    			<div class="col-md-10 mb-5 text-center">
    				<ul class="product-category">
    					<li><a href="loja.php" class="active">All</a></li>
    					<li><a href="loja.php">Vegetables</a></li>
    					<li><a href="loja.php">Fruits</a></li>
    					<li><a href="loja.php">Juice</a></li>
    					<li><a href="loja.php">Dried</a></li>
    				</ul>
    			</div>
    		</div>-->
            <section class="ftco-section">
 
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
         <div class="col-md-6 col-lg-3 ftco-animate">
    <div class="product">
     <img class="img-fluid" src="images/product-41.png" alt="">
      <div class="overlay"></div>
    
    <div class="text py-3 pb-4 px-3 text-center">
      <h3>HEADPHONE</h3>
      <div class="d-flex">
       <div class="pricing">
        <p class="price"><span>250 pontos</span></p>
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
          <img class="img-fluid" src="images/rosa.jpg" alt="">
            <div class="overlay"></div>
          </a>
          <div class="text py-3 pb-4 px-3 text-center">
            <h3>CUPOM DE DESCONTO - 10%</h3>
            <div class="d-flex">
             <div class="pricing">
              <p class="price"><span>60 pontos</span></p>
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
        
   </section>
    		<!--<div class="row">
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/product-1.jpg" alt="Colorlib Template">
    						<span class="status">30%</span>
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">Bell Pepper</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="mr-2 price-dc">$120.00</span><span class="price-sale">$80.00</span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/product-3.jpg" alt="Colorlib Template">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">Strawberry</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>$120.00</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/product-3-ok.jpg" alt="Colorlib Template">
	    					<div class="overlay"></div>
	    				</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">Green Beans</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>$120.00</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/laranja.jpg" alt="Colorlib Template">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">Purple Cabbage</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>$120.00</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>


    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/product-5.jpg" alt="Colorlib Template">
    						<span class="status">30%</span>
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">Tomatoe</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="mr-2 price-dc">$120.00</span><span class="price-sale">$80.00</span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/product-6.jpg" alt="Colorlib Template">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">Brocolli</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>$120.00</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<!--<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/product-7.jpg" alt="Colorlib Template">
	    					<div class="overlay"></div>
	    				</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">Carrots</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>$120.00</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/product-8.jpg" alt="Colorlib Template">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">Fruit Juice</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>$120.00</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>

    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/product-9.jpg" alt="Colorlib Template">
    						<span class="status">30%</span>
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">Onion</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="mr-2 price-dc">$120.00</span><span class="price-sale">$80.00</span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/product-10.jpg" alt="Colorlib Template">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">Apple</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>$120.00</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/product-11.jpg" alt="Colorlib Template">
	    					<div class="overlay"></div>
	    				</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">Garlic</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>$120.00</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/product-12.jpg" alt="Colorlib Template">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">Chilli</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>$120.00</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    		<div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>-->
     

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
  </body>
</html>