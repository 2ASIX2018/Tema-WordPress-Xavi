<?php get_header(); ?>

  <body id="page-top">

    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong>Xavi Ciscar<br>Un osezno en unix</strong>
            </h1>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5">Podemos ayudarte en la gestión de todo tipo de sistemas informáticas, gestionamos tus recursos compartidos, servidores ftp, web y correo.</p>
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Descubre más</a>
          </div>
        </div>
      </div>
    </header>

    <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">We've got what you need!</h2>
            <hr class="light my-4">
            <p class="text-faded mb-4">Start Bootstrap has everything you need to get your new website up and running in no time! All of the templates and themes on Start Bootstrap are open source, free to download, and easy to use. No strings attached!</p>
            <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a>
          </div>
        </div>
      </div>
    </section>

    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">At Your Service</h2>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fas fa-4x fa-gem text-primary mb-3 sr-icon-1"></i>
              <h3 class="mb-3">Sturdy Templates</h3>
              <p class="text-muted mb-0">Our templates are updated regularly so they don't break.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fas fa-4x fa-paper-plane text-primary mb-3 sr-icon-2"></i>
              <h3 class="mb-3">Ready to Ship</h3>
              <p class="text-muted mb-0">You can use this theme as is, or you can make changes!</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fas fa-4x fa-code text-primary mb-3 sr-icon-3"></i>
              <h3 class="mb-3">Up to Date</h3>
              <p class="text-muted mb-0">We update dependencies to keep things fresh.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fas fa-4x fa-heart text-primary mb-3 sr-icon-4"></i>
              <h3 class="mb-3">Made with Love</h3>
              <p class="text-muted mb-0">You have to make your websites with love these days!</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="p-0" id="portfolio">
      <div class="container-fluid p-0">
        <div class="row no-gutters popup-gallery">
          <?php
            //$total_posts=wp_count_posts();
            //$posts=$total_posts->publish;
            $posts=3;
            //echo "$posts";
            if ($posts>3) {
              $posts_a_mostrar=4;
            }
            else {
              $posts_a_mostrar=($posts+1);
            }
            $tamany=(12/$posts_a_mostrar);
            for ($i=1; $i<$posts_a_mostrar; $i++){
          ?>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="<?php bloginfo('template_url'); ?>/img/portfolio/fullsize/<?php echo($i)?>.jpg">
              <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/img/portfolio/thumbnails/<?php echo($i)?>.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Categorías
                  </div>
                  <div class="project-name">
                    Título
                  </div>
                </div>
              </div>
            </a>
          </div>
          <?php
            }
          ?>

        </div>
      </div>
    </section>

    <section class="bg-dark text-white">
      <div class="container text-center">
        <h2 class="mb-4">Echa un vistazo a mis proyectos!</h2>
        <a class="btn btn-light btn-xl sr-button" href="https://github.com/xaviciscar">Sigueme en Github!</a>
      </div>
    </section>

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Pongámonos en contacto!</h2>
            <hr class="my-4">
            <p class="mb-5">Estás ready para empezar tu próximo proyecto con nosotros? Genial! Llámenos o envíenos un email y nos pondremos en contacto con usted a la mayor brevedad posible!</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fas fa-phone fa-3x mb-3 sr-contact-1"></i>
            <p>123-456-789</p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fas fa-envelope fa-3x mb-3 sr-contact-2"></i>
            <p>
              <a href="mailto:webmaster@unixitolocal.com">webmaster@unixitolocal.com</a>
            </p>
          </div>
        </div>
      </div>
    </section>

<?php get_footer(); ?>