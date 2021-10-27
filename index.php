<!--
Author: gabriel willians paiva 
Author URL: insta @gabrielwilians
-->

<?php
ini_set('display_errors', 0 );
error_reporting(0);
/*arrumar a parte do redirecionamento do login*/
?>

<!doctype html>
<html lang="pt">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>  são sebastião - goovel </title>

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
  </head>
  <body>
<!--header-->
<section class="w3l-header">
  <header id="site-header" class="fixed-top">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark stroke">
        <a class="navbar-brand" href="index.html">
          <span class="fa fa-pencil-square-o"></span> goovel
        </a>
        <!-- if logo is image enable this
    <a class="navbar-brand" href="#index.html">
        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
    </a> -->
        <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
          aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
          <span class="navbar-toggler-icon fa icon-close fa-times"></span>
          </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item @@about-active">
              <a class="nav-link" href="about.html">sobre</a>
            </li>
            <li class="nav-item @@contact-active">
              <a class="nav-link" href="contact.html">contato</a>
            </li>
            <li class="nav-item @@contact-active">
              <a class="nav-link" href="/login">Entrar</a>
            </li>
          </ul>
        </div>
        <!-- toggle switch for light and dark theme -->
        <div class="mobile-position">
          <label class="theme-selector">
            <input type="checkbox" id="themeToggle">
            <i class="gg-sun"></i>
            <i class="gg-moon"></i>
          </label>
        </div>
        <!-- //toggle switch for light and dark theme -->
      </nav>
    </div>
  </header>
  <!--/header-->
</section>
<!-- index-block1 -->
<div class="w3l-index1">
  <div class="content">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 content-left">
          <h3>
            <?php include('login/config.php');
                if($_SESSION['login'] == true ){
                    header('Location: main.php');
                    die();}?>

                    Bem Vindo
          </h3>
          <p class="mt-3 mb-lg-5 mb-4">nossa intenção é reunir o mercado local em um só lugar, trazendo cada vez mais soluções para você.    tenha calma! ainda estamos trabalhando muito nisso!</p>
          <form class="form-inline search-course d-flex">
            <input type="search" class="form-control mb-2 mr-sm-2" id="inlineFormInput" placeholder="ex:lanchonete do mario" required="required">
            <button type="submit" class="btn btn-primary theme-button mb-2">buscar</button>
          </form>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>
<!-- //index-block1 -->

<!-- index-block2 -->
<section class="w3l-index2 py-5">
  <div class="container py-md-3">
    <div class="header-section text-center mx-auto">
      <h3>já conhece nosso projeto? </h3>
      <p class="my-3"> Nosso projeto é focado no mercado local, já pensou? se o produto que você deseja está bem mais perto que você imagina. Faciclitaremos essa tarefa por você, com a groove você fica de olho nas promoções bem pertinho de você, bem simples e prático.</p>
    </div>
    <div class="row bottom_grids pt-md-3 text-center">
      <div class="col-lg-4 col-md-6 mt-5">
        <div class="s-block">
          <a href="blog-single.html" class="d-block p-lg-4 p-3">
            <img src="assets/images/s1.png" alt="" class="img-fluid img-curve" />
            <h3 class="my-3">Direto ao ponto!!</h3>
            <p class="">Nosso sistema de vendas te direciona direto ao vendedor pelo whatsapp.</p>
          </a>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mt-5">
        <div class="s-block">
          <a href="blog-single.html" class="d-block p-lg-4 p-3">
            <img src="assets/images/s3.png" alt="" class="img-fluid img-curve" />
            <h3 class="my-3">Mais ferramentas!</h3>
            <p class="">Anunciar de forma gratis e ter várias ferramentas a sua disposição nunca foi tão fácil.</p>
          </a>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mt-5">
        <div class="s-block">
          <a href="blog-single.html" class="d-block p-lg-4 p-3">
            <img src="assets/images/s2.png" alt="" class="img-fluid img-curve" />
            <h3 class="my-3">Flixibilidade em um site?</h3>
            <p class="">Sim, com a Groove, você pode criar um layout digital para seu restaurante, lanchonete, academia, bar, tudo que você imaginar, e estamos dispostos a te ajudar com isso!.</p>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="w3l-index4 py-4">
  <div class="container py-lg-3 mt-3">
    <div class="row mt-4">
      <div class="col-lg-9 col-md-10 mx-auto">
        <div class="row align-items-center">
          <div class="col-lg-6 book-info pr-lg-5">
            <h3 class="mb-md-4 mb-3">COMO NOSSO PROJETO FUNCIONA?</h3>
            <p class="mb-md-5 mb-4">Após o vendedor selecionar e definir seus produtos, poderá personalisar seu portifólio e deixar com sua cara, além de ferramentas exclusivas para interagir com os clientes nas redes sociais e ajudar a vender mais né! .</p>
            <a href="about.html" class="btn btn-outline-primary theme-button">leia mais!</a>
          </div>
          <div class="col-lg-6 mt-lg-0 mt-5">
            <img src="assets/images/stat.jpg" class="img-fluid shadow img-curve" alt="" />
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- stats -->
<section class="w3l-stats pb-5 pt-4" id="stats">
  <div class="gallery-inner container pb-lg-3">
    <div class="row mt-4">
      <div class="col-lg-9 col-md-10 mx-auto">
        <div class="row stats-con align-items-stretch">
          <div class="col-lg-4 col-sm-6">
            <div class="stats_info counter_grid">
              <p class="counter">0</p>
              <h4>Anunciantes</h4>
              <p>pessoas vendendo agora nessse momento.</p>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 mt-sm-0 mt-4">
            <div class="stats_info counter_grid1">
              <p class="counter">0</p>
              <h4>Parceiros</h4>
              <p>que estão conosco integrando a plataforma bem perto de você, de forma externa te ajudando a ir mais longe</p>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 mt-lg-0 mt-sm-5 mt-4">
            <div class="stats_info counter_grid">
              <p class="counter">0</p>
              <h4>Equipe</h4>
              <p>pessoas envolvidas no projeto</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- //stats -->
<!-- logos Section -->
<section class="w3l-logos pb-5">
  <div class="container py-lg-3">
    <div class="row">
      <div class="col-lg-10 mx-auto">
        <div class="owl-logos owl-carousel owl-theme logo-view">
          <div class="item">
            <img src="assets/images/logo1.png" alt="company-logo" class="img-fluid">
          </div>
          <div class="item">
            <img src="assets/images/logo2.png" alt="company-logo" class="img-fluid">

          </div>
          <div class="item">
            <img src="assets/images/logo3.png" alt="company-logo" class="img-fluid">

          </div>
          <div class="item">
            <img src="assets/images/logo4.png" alt="company-logo" class="img-fluid">

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- //logos Section -->
<section class="w3l-index5 py-5 text-center">
  <div class="container py-lg-5">
    <div class="row">
      <div class="col-lg-9 col-md-10 mx-auto">
        <div class="header-section white join mb-5">
          <h3>Quer se tornar um parceiro de vendas?</h3>
          <p class="my-3">entre em contato conosco, estamos buscando agora mesmo novas soluções tá.</p>
        </div>
        <a href="login.html" class="btn btn-light theme-button">Contato</a>
      </div>
    </div>
  </div>
</section>


<section class="w3l-courses py-5">
  <div class="container py-lg-3">
    <div class="header-section mb-5 text-center mx-auto">
      <h3>Novidades! </h3>
      <p class="my-3"> ferramentas, ideias ou uma ajudinha, tem tudo aqui, pode procurar.</p>
    </div>
    <div class="owl-courses owl-carousel owl-theme">

<!-- bloco 01 -->
      <div class="item">
        <div class="course-grid">
          <div class="course-img">
            <a href="courses-single.html"><img src="assets/images/s4.jpg" alt=" " class="img-fluid">
              <div class="price red">
                <h4>$00,00</h4>
              </div>
            </a>
          </div>
          <div class="course-cont">
            <span class="subject red">novo!</span>
            <h5 class="card-title"><a href="courses-single.html">Crie sua página Página de vendas</a></h5>
            <ul class="admin-post">
              <li>
                <span class="fa fa-file-code-o"></span>personalisável
              </li>
              <li>
                <span class="fa fa-user-o"></span>para você
              </li>
            </ul>
            <a href="courses-single.html" class="blog-btn mt-3">Conhecer <span class="fa fa-long-arrow-right" aria-hidden="true"></span></a>
          </div>
        </div>
  </div>



    <!-- bloco 02 -->
      <div class="item">
        <div class="course-grid">
          <div class="course-img">
            <a href="courses-single.html"><img src="assets/images/s5.jpg" alt=" " class="img-fluid">
              <div class="price green">
                <h4>$00,00</h4>
              </div>
            </a>
          </div>
          <div class="course-cont">
            <span class="subject green">novo!</span>
            <h5 class="card-title"><a href="courses-single.html">Link personalizado para bio do instagram</a></h5>
            <ul class="admin-post">
              <li>
                <span class="fa fa-file-code-o"></span>personalisável
              </li>
              <li>
                <span class="fa fa-user-o"></span>para você
              </li>
            </ul>
            <a href="courses-single.html" class="blog-btn mt-3">Conhecer <span class="fa fa-long-arrow-right" aria-hidden="true"></span></a>
          </div>
        </div>

      </div>

      <!-- bloco 03 -->
      <div class="item">
        <div class="course-grid">
          <div class="course-img">
            <a href="courses-single.html"><img src="assets/images/s6.jpg" alt=" " class="img-fluid">
              <div class="price blue">
                <h4>$00,00</h4>
              </div>
            </a>
          </div>
          <div class="course-cont">
            <span class="subject blue">Novo!</span>
            <h5 class="card-title"><a href="courses-single.html">adição de cupom promocional personalizado</a></h5>
            <ul class="admin-post">
              <li>
                <span class="fa fa-file-code-o"></span>personalisável
              </li>
              <li>
                <span class="fa fa-user-o"></span>para você
              </li>
            </ul>
            <a href="courses-single.html" class="blog-btn mt-3">Conhecer <span class="fa fa-long-arrow-right" aria-hidden="true"></span></a>
          </div>
        </div>

      </div>
      <!-- bloco 04
      <div class="item">
        <div class="course-grid">
          <div class="course-img">
            <a href="courses-single.html"><img src="assets/images/s1.jpg" alt=" " class="img-fluid">
              <div class="price green">
                <h4>$00,00</h4>
              </div>
            </a>
          </div>
          <div class="course-cont">
            <span class="subject green">Novo!</span>
            <h5 class="card-title"><a href="courses-single.html">Learning to Write as a Professional Author</a></h5>
            <ul class="admin-post">
              <li>
                <span class="fa fa-file-code-o"></span>personalisável
              </li>
              <li>
                <span class="fa fa-user-o"></span>para você
              </li>
            </ul>
            <a href="courses-single.html" class="blog-btn mt-3">Conhecer <span class="fa fa-long-arrow-right" aria-hidden="true"></span></a>
          </div>
        </div>

      </div>-->
      <!-- bloco 05
      <div class="item">
        <div class="course-grid">
          <div class="course-img">
            <a href="courses-single.html"><img src="assets/images/s2.jpg" alt=" " class="img-fluid">
              <div class="price red">
                <h4>$00,00</h4>
              </div>
            </a>
          </div>
          <div class="course-cont">
            <span class="subject red">novo!</span>
            <h5 class="card-title"><a href="courses-single.html">Learning to Write as a Professional Author</a></h5>
            <ul class="admin-post">
              <li>
                <span class="fa fa-file-code-o"></span>personalisável
              </li>
              <li>
                <span class="fa fa-user-o"></span>para você
              </li>
            </ul>
            <a href="courses-single.html" class="blog-btn mt-3">Conhecer <span class="fa fa-long-arrow-right" aria-hidden="true"></span></a>
          </div>
        </div>

      </div>-->

    </div>
  </div>
</section>
<!-- //courses Section -->
<!-- subscribe section
<section class="w3l-subscribe py-5">
  <div class="container py-lg-3">
    <div class="row mt-4">
      <div class="col-lg-9 col-md-10 mx-auto">
        <div class="subscribe mx-auto">
          <div class="header-section text-center mx-auto">
            <h3>Stay Updated! </h3>
            <p class="my-3"> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
              Nulla mollis dapibus nunc, ut rhoncus
              turpis sodales quis. Integer sit amet mattis quam.</p>
          </div>
          <form action="#" method="post" class="subscribe-wthree pt-2 mt-5">
            <div class="d-flex flex-wrap subscribe-wthree-field">
              <input class="form-control" type="email" placeholder="Enter your email..." name="email" required="">
              <button class="btn btn-primary theme-button" type="submit">Subscribe</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section> -->
<!-- //subscribe -->
<!-- getstarted
<section class="w3l-getstarted py-5">
  <div class="container py-md-3 text-center">
    <div class="header-section mx-auto">
      <h3>Ready to get started? </h3>
      <p class="my-3"> We love conversations, and would love to have one with you! Whether you’re looking for a speaker, an awesome career, or want to get started with a rewards program, we would love hear from you.</p>
    </div>
    <div class="buttons mt-5">
      <a href="contact.html" class="btn btn-outline-primary mr-2 theme-button">Book a Demo</a>
      <a href="login.html" class="btn btn-primary theme-button ml-2">Get Started</a>
    </div>
  </div>
</section> -->
<!-- / getstarted -->
<footer>
  <!-- footer -->
  <section class="w3l-footer">
    <div class="w3l-footer-16-main py-5">
      <div class="container">
        <div class="row footer-border">
          <div class="col-lg-3 col-md-5 column pr-md-0">
            <h1><a href="index.html" class="footer-brand-logo"><span class="fa fa-pencil-square-o"></span> Groove</a></h1>
            <p>CNPJ: 000000000</p>
            <ul class="mt-4 contact">
              <li>
                <p><span class="fa fa-phone" aria-hidden="true"></span> <a href="tel:+44-255-366-88">+55 61 9 8337 - 1996</a></p>
              </li>
              <li>
                <p><span class="fa fa-clock-o" aria-hidden="true"></span> seg - sex 8.00h - 18.00h</p>
              </li>
            </ul>
          </div>
        <!--  <div class="col-lg-5 col-md-5 column pl-md-5 mt-md-0 mt-5">
            <h3>Ultimos post</h3>
            <a class="d-grid twitter-feed" href="#blog-single.html">
              <img src="assets/images/b1.jpg" class="img-fluid img-curve" alt="">
              <p class="twitter-title">Learn by doing with Real World Projects Lorem, ipsum.<br>

                <label class="small"><span class="fa fa-clock-o"></span> Aug 02, 2020</label>
              </p>
            </a>
            <a class="d-grid twitter-feed" href="#blog-single.html">
              <img src="assets/images/b5.jpg" class="img-fluid img-curve" alt="">
              <p class="twitter-title">Using Creative Problem Solving Lorem ipsum dolor sit.<br>

                <label class="small"><span class="fa fa-clock-o"></span> Sep 21, 2020</label>
              </p>
            </a>
            <a class="d-grid twitter-feed" href="#blog-single.html">
              <img src="assets/images/b3.jpg" class="img-fluid img-curve" alt="">
              <p class="twitter-title">Learn by doing with Real World Projects Lorem, ipsum.<br>

                <label class="small"><span class="fa fa-clock-o"></span> Aug 02, 2020</label>
              </p>
            </a>
            </ul>
          </div>-->
          <div class="col-lg-2 col-md-4 col-sm-6 column mt-md-0 mt-5">
            <h3>Mapa </h3>
            <ul class="footer-gd-16">
              <li><a href="index.html">Incio</a></li>
              <li><a href="about.html">sobre nós</a></li>
              <!-- <li><a href="#courses.html">Courses Offered</a></li> -->
              <!-- <li><a href="#blog.html">Blog</a></li> -->
              <!-- <li><a href="contact.html">Contact Us</a></li> -->
            </ul>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6 column mt-md-0 mt-5">
            <h3>links </h3>
            <ul class="footer-gd-16">
              <li><a href="#url">whatsapp</a></li>
              <li><a href="#url">instagram</a></li>
              <li><a href="#url">facebook</a></li>
              <!-- <li><a href="about.html">About Company</a></li> -->
              <!-- <li><a href="#url">Our People</a></li> -->
              <!-- <li><a href="#faq.html">FAQ</a></li> -->
            </ul>
          </div>
        </div>
        <div class="below-section pt-4 mt-5 text-center">
          <div class="columns-2">
            <ul class="social">
              <li><a href="#facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
              </li>
              <li><a href="#linkedin"><span class="fa fa-linkedin" aria-hidden="true"></span></a>
              </li>
              <li><a href="#twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
              </li>
              <li><a href="#google"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
              </li>
              <!-- <li><a href="#github"><span class="fa fa-github" aria-hidden="true"></span></a> -->
              <!-- </li> -->
            </ul>
          </div>
          <div class="columns mt-3">
            <p>&copy; 2021 Gabriel willians. todos os direitos reservados | Design by <a href="https://instagram.com/">@gabrielwilians</a>
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
      <span class="fa fa-angle-up"></span>
    </button>
    <script>
      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function () {
        scrollFunction()
      };

      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("movetop").style.display = "block";
        } else {
          document.getElementById("movetop").style.display = "none";
        }
      }

      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>
    <!-- //move top -->
    <script>
      $(function () {
        $('.navbar-toggler').click(function () {
          $('body').toggleClass('noscroll');
        })
      });
    </script>
  </section>
  <!-- //footer -->
</footer>

<!-- jQuery JS -->
<!-- <script src="assets/js/jquery-3.4.1.slim.min.js"></script> -->
<!-- jQuery JS -->
<script src="assets/js/jquery-1.9.1.min.js"></script>

<!-- Template JavaScript -->

<!-- owl carousel -->
<script src="assets/js/owl.carousel.js"></script>

<!-- script for testimonials -->
<script>
  $(document).ready(function () {
    $('.owl-testimonials').owlCarousel({
      loop: false,
      margin: 0,
      nav: false,
      responsiveClass: true,
      autoplay: true,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        480: {
          items: 1,
          nav: false
        },
        667: {
          items: 1,
          nav: false
        },
        1000: {
          items: 1,
          nav: false
        }
      }
    })
  })
</script>
<!-- //testimonials owlcarousel -->

<!-- logos for customers -->
<script>
  $(document).ready(function () {
    $('.owl-logos').owlCarousel({
      loop: true,
      margin: 0,
      nav: false,
      responsiveClass: true,
      autoplay: true,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 2,
          nav: false
        },
        480: {
          items: 2,
          nav: false
        },
        667: {
          items: 3,
          nav: false
        },
        1000: {
          items: 4,
          nav: false
        }
      }
    })
  })
</script>
<!-- //logos owlcarousel -->

<!-- courses for customers -->
<script>
  $(document).ready(function () {
    $('.owl-courses').owlCarousel({
      loop: true,
      margin: 30,
      nav: false,
      responsiveClass: true,
      autoplay: true,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 3
        }
      }
    })
  })
</script>
<!-- //courses owlcarousel -->

<!-- magnific popup -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script>
  $(document).ready(function () {
    $('.popup-with-zoom-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-zoom-in'
    });

    $('.popup-with-move-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-slide-bottom'
    });
  });
</script>

<!-- responsive tabs -->
<script src="assets/js/easyResponsiveTabs.js"></script>

<!--Plug-in Initialisation-->
<script type="text/javascript">
  $(document).ready(function () {
    //Horizontal Tab
    $('#parentHorizontalTab').easyResponsiveTabs({
      type: 'default', //Types: default, vertical, accordion
      width: 'auto', //auto or any width like 600px
      fit: true, // 100% fit in a container
      tabidentify: 'hor_1', // The tab groups identifier
      activate: function (event) { // Callback function if tab is switched
        var $tab = $(this);
        var $info = $('#nested-tabInfo');
        var $name = $('span', $info);
        $name.text($tab.text());
        $info.show();
      }
    });
  });
</script>

<!-- stats number counter-->
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/jquery.countup.js"></script>
<script>
  $('.counter').countUp();
</script>
<!-- //stats number counter -->

<!-- disable body scroll which navbar is in active -->
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll which navbar is in active -->

<!--/MENU-JS-->
<script>
  $(window).on("scroll", function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 80) {
      $("#site-header").addClass("nav-fixed");
    } else {
      $("#site-header").removeClass("nav-fixed");
    }
  });

  //Main navigation Active Class Add Remove
  $(".navbar-toggler").on("click", function () {
    $("header").toggleClass("active");
  });
  $(document).on("ready", function () {
    if ($(window).width() > 991) {
      $("header").removeClass("active");
    }
    $(window).on("resize", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
    });
  });
</script>
<!--//MENU-JS-->


<!--theme switcher dark and light mode script-->
<script>
  const bodyElement = document.querySelector('body');
  const themeToggle = document.querySelector('#themeToggle');
  const darkModeMql = window.matchMedia('(prefers-color-scheme: dark)');

  const currentTheme = localStorage.getItem('theme') ? localStorage.getItem('theme') : userPreference(darkModeMql);

  if (currentTheme) {
    bodyElement.classList.add(currentTheme);

    if (currentTheme === 'dark') {
      themeToggle.checked = true;
    }
  }

  function userPreference(e) {
    if (e.matches) {
      bodyElement.classList.add("dark");
      return "dark"
    } else {
      bodyElement.classList.remove("dark");
      return ""
    }
  }

  darkModeMql.addListener(userPreference);

  function themeSwitcher(e) {
    if (e.target.checked) {
      bodyElement.classList.add('dark');
      localStorage.setItem('theme', 'dark');
    } else {
      bodyElement.classList.remove('dark');
      localStorage.setItem('theme', '');
    }
  }

  themeToggle.addEventListener('change', themeSwitcher);
</script>
<!--//theme switcher dark and light mode script-->


<!-- Bootstrap JS -->
<script src="assets/js/bootstrap.min.js"></script>

</body>

</html>
