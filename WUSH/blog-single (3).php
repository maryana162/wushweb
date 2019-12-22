<?php

header("Content-type:text/html; charset=utf8");

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>WUSH - Blog - New</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/animate.css">
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
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="blog.html">Blog <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog Single <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 style="color:white" class="shadow-text mb-3 bread">Página do Blog</h1>
          </div>
        </div>
      </div>
    </section>

		<section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-8 order-md-last ftco-animate">
            <h2 class="mb-3">Windows e Wush</h2>
            <p>A equipe do Wush trabalha agora em uma implementação para windows onde trará uma agilidade para o usuário. </p>
            <p>
              <img src="images/Foto (4).jpg" alt="" class="img-fluid">
            </p>
            <p>Nesta aplicação você contará com a facilidade gerenciada na Web, ou seja, o usuário não terá conflitos com a nova plataforma proposta, pois investimos em um projeto que trará um acesso mais simplificado. Para ambas tecnologias o usuário terá a melhor tecnologia traga pela Wush.</p>
            <h2 class="mb-3 mt-5">Facilidade e Usabilidade</h2>
            <p>Uns dos objetivos da Wush, é trazer facilidade para nossos usuários é ampliar nosso suporte a várias plataformas</p>
            <p>
              <img src="images/blog_single (2).jpg" alt="" class="img-fluid">
            </p>
            <p>Com essa aplicação em Windows terá a facilidade de prestar um serviço oferecido com mais agilidade, isso resultará em uma proximidade do usuário e aplicação, pois tal não necessita de utilizar de um navegador para gerenciar sua conta, então o time da Wush trará este serviço para os usuários que querem facilidade e usabilidade em nossa aplicação, em caso de atualizações todos os serviços da Wush terá atualizações de imediato, ou seja, tanto quanto a aplicação Web e Desktop terá as ferramentas iguais para os serviços. Agradecemos a todos por utilizar de nossos serviços.</p>
            <div class="tag-widget post-tag-container mb-5 mt-5">
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">Tecnologia</a>
                <a href="#" class="tag-cloud-link">Começo</a>
                <a href="#" class="tag-cloud-link">Início</a>
                <a href="#" class="tag-cloud-link">Avanço</a>
              </div>
            </div>
            
            <div class="about-author d-flex p-4 bg-light">
              <div class="bio mr-5">
                <img src="images/person_3.jpg" alt="Image placeholder" class="img-fluid mb-4">
              </div>
              <div class="desc">
                <h3>Matheus Roberson</h3>
                <p>Um jovem estudante e amante da tecnologia, assim como também um desenvolvedor e adminstrador de tecnologia na empresa Wush.</p>
              </div>
            </div>


            <div class="pt-5 mt-5" id="comment">
              <h3 class="mb-5 num-comments">0 comentários</h3> 
              <!-- <ul class="comment-list">
                <li class="comment">
                  <div class="vcard bio">
                    <img src="images/person_1.jpg" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                    <h3>John Doe</h3>
                    <div class="meta">October 03, 2018 at 2:21pm</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                    <p><a href="#" class="reply">Reply</a></p>
                  </div>
                </li> 
                  </ul>  -->
                     

              <div class="comment-form-wrap pt-5">
                <h3 class="mb-5">Deixe um comentário</h3>
                <form action="#" class="p-5 bg-light">
                  <div class="form-group">
                    <label for="name">Nome *</label>
                    <input type="text" class="form-control" id="name">
                  </div>
                  <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" class="form-control" id="email">
                  </div>
                  <div class="form-group">
                    <label for="website">Profissão</label>
                    <input type="url" class="form-control" id="website">
                  </div>

                  <div class="form-group">
                    <label for="message">Mensagem</label>
                    <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Comentar" class="btn py-3 px-4 btn-success">
                  </div>

                </form>
              </div>
            </div>

          </div> <!-- .col-md-8 -->
          <div class="col-md-4 sidebar ftco-animate">
            <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon icon-search"></span>
                  <input type="text" class="form-control" placeholder="Pesquise!!">
                </div>
              </form>
            </div>
            <div class="sidebar-box ftco-animate">
              <div class="categories">
                <h3>Categorias</h3>
                <li><a href="blog.php">Tecnologia <span>(4)</span></a></li>
                <li><a href="blog.php">Desnvolvedores<span>(1)</span></a></li>
                <li><a href="blog.php">Desktop <span>(1)</span></a></li>
                <li><a href="blog.php">Aplicativo <span>(1)</span></a></li>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section> <!-- .section -->

    <?php require_once ('components/footer.php');?>  
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <!-- <script src="js/popper.min.js"></script> -->
  <script src="js/bootstrap.min.js"></script>
  <!-- <script src="js/jquery.easing.1.3.js"></script> -->
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>*
  <script src="js/jquery.magnific-popup.min.js"></script>*
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>*
  <script src="js/bootstrap-datepicker.js"></script>*
  <script src="js/jquery.timepicker.min.js"></script>*
  <script src="js/scrollax.min.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>