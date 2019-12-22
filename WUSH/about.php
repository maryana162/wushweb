<?php

header("Content-type:text/html; charset=utf8");

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>WUSH - Sobre</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/aos.css">
     <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
<!-- NavBar -->
<?php require_once ('components/nav.php');?>

    <section class="hero-wrap ftco-degree-bg js-fullheight" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Sobre nós <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 style="color:white" class="shadow-text mb-3 bread">Sobre nós</h1>
          </div>
        </div>
      </div>
    </section>

		<section class="ftco-section ftco-no-pb">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/about.jpg);">
					</div>
					<div class="col-md-6 wrap-about py-md-5 ftco-animate">
	          <div class="heading-section p-md-5">
	            <h2 class="mb-4">Por onde começar?</h2>

	            <p>A Wush começa com a ideia de ajudar as pessoas, mas não em qualquer lugar ou qualquer serviço, ela traz os seus esforços para o mercado automobilístico investindo em um serviço que tem como princípio de ajudar quem necessita.</p>
	            <p>Esse envolvimento da empresa com esse nicho se deve pela observação da área, ou seja, nossa equipe notou a falta de uma solução para conectar os "usuários", então almejamos a resolução que trouxe a resposta, na qual seria criar a Wush onde gerenciaria a comunicação entre os que necessitam e os prestadores. Agradecemos a todos por utilizar de nossos serviços.</p>
	          </div>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-counter img" id="section-counter">
    	<div class="container">
    		<div class="row">
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18 py-4 mb-4">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="5570">0</strong>
                <span>Municípios <br>Atendidos</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18 py-4 mb-4">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="5">0</strong>
                <span>Funcionários</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18 py-4 mb-4">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="27">0</strong>
                <span>Estados <br>Atendidos</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18 py-4 mb-4">
              <div class="text d-flex align-items-center">
                <strong class="number" data-number="1">0</strong>
                <span>Ideia</span>
              </div>
            </div>
          </div>
        </div>
    	</div>
    </section>
    <?php require_once ('components/about-section.php');?>  
    <?php require_once ('components/footer.php');?>  
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/aos.js"></script>
  <!-- <script src="js/jquery.animateNumber.min.js"></script> -->
  <script src="js/scrollax.min.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>