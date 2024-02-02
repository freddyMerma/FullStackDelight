<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>EpicVlur - Sudaderas, camisetas y hoodies</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Pop-up Newsletter-->
    <link rel="stylesheet" type="text/css" href="assets/css/plugin.css">

    <!-- =======================================================
    * Template Name: Techie
    * Updated: Mar 10 2023 with Bootstrap v5.2.3
    * Template URL: https://bootstrapmade.com/techie-free-skin-bootstrap-3/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->

    <!-- MODIFICACIONES FREDDY MERMA -->
    <script src="assets/js/wallet.js"></script>


</head>

<body>
<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">
        <h1 class="logo"><a href="index.php">EPICVLUR</a></h1> <!--MODIFICADO -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
            <ul>
                <!--MODIFICADO -->
                <li><a class="nav-link scrollto active" href="index.php">Inicio</a></li>
                <li><a class="nav-link scrollto " href="#designs">Todos los diseños</a></li>
                <li><a class="nav-link scrollto " href="#catalog">Catálogo</a></li>
                <li class="dropdown"><a href="#contact"><span>Nosotros</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="solicitar.php">Solicitar diseño</a></li>
                        <li><a href="pedidos.php">Ver pedidos</a></li>
                        <li><a href="suscripciones.php">Ver suscripciones</a></li>
                    </ul>
                </li>
                <!--MODIFICADO -->
                <li><a class="getstarted scrollto" href="#" onclick="abrirMetaMask()">Conectar Wallet</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

    <div class="container-fluid" data-aos="fade-up">
        <div class="row justify-content-center">
            <div id="epic_title"class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center text-center">
                <h1>ETSIT23: EXCLUSIVE COLLECTION</h1>
                <h2>Encuentra tu estilo en prendas con un diseño exclusivo y... ¡Lánzate a la aventura!</h2>
                <div><a href="solicitar.php" class="btn-get-started scrollto">¡SOLICITAR DISEÑO EXCLUSIVO!</a></div>
            </div>
        </div>
    </div>
    </div>

</section><!-- End Hero -->

<main id="main">
    <!-- ======= Pop-up Newsletter ======= -->
    <div class="popup gee-popup">
        <div class="popup-inner">
            <a class="close-button popup-close-button">
                &times;
            </a>
            <div class="popup-header">
                <h3 class="popup-title"></h3>
            </div>
            <p class="paragraph" ></p>
            <div class="user-content"></div>
            <button class="btn btn-info btn-block btn-lg" ></button>
        </div>
    </div>

    <!-- ======= OFERTAS ======= -->
    <div class="oferta">
        <div id= "oferta_texto" data-aos="fade-up" data-aos-duration="1000">
            <span>Envíos gratuitos +64€</span>
            <span>&nbsp;·&nbsp;</span>
            <span>Cambios y devoluciones gratuitas</span>
            <span>&nbsp;·&nbsp;</span>
            <span>EP-ETSIT</span>
            <span>&nbsp;·&nbsp;</span>
            <span>Envíos gratuitos +64€</span>
            <span>&nbsp;·&nbsp;</span>
            <span>Cambios y devoluciones gratuitas</span>
            <span>&nbsp;·&nbsp;</span>
            <span>EP-ETSIT</span>
            <span>&nbsp;·&nbsp;</span>
            <span>Envíos gratuitos +64€</span>
            <span>&nbsp;·&nbsp;</span>
            <span>Cambios y devoluciones gratuitas</span>
            <span>&nbsp;·&nbsp;</span>
            <span>EP-ETSIT</span>
            <span>&nbsp;·&nbsp;</span>
            <span>Envíos gratuitos +64€</span>
            <span>&nbsp;·&nbsp;</span>
            <span>Cambios y devoluciones gratuitas</span>
            <span>&nbsp;·&nbsp;</span>
            <span>EP-ETSIT</span>
            <span>&nbsp;·&nbsp;</span>
        </div>
    </div>

    <!-- ======= Portfolio Section ======= -->
    <section id="designs" class="portfolio">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Nuestros diseños</h2>
                <p>No esperes más para descubrir nuestra selección de diseños exclusivos y agregar algo único a tu vida.</p>
            </div>

            <!-- MODIFICADO -->
            <div class="row portfolio-container">

                <div class="col-lg-4 col-md-6 portfolio-item">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/epic_squidgame.jpeg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>EpicNewTimes</h4>
                            <p>EpicNewTimes</p>
                        </div>
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/epic_squidgame.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                            <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item"> <!-- col-lg-6 -->
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/epic_newtimes.jpeg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>EpicSquidGame</h4>
                            <p>EpicSquidGame</p>
                        </div>
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/epic_newtimes.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                            <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/epic_fff.jpeg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>F*ck Fake Friends</h4>
                            <p>F*ck Fake Friends</p>
                        </div>
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/epic_fff.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                            <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/doing_it_right.jpeg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>EpicTitanX20</h4>
                            <p>EpicTitanX20</p>
                        </div>
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/doing_it_right.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                            <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/epic_titanx20.jpeg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>EpicTitanX20</h4>
                            <p>EpicTitanX20</p>
                        </div>
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/epic_titanx20.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                            <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/panda.jpeg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>EpicTitanX20</h4>
                            <p>EpicTitanX20</p>
                        </div>
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/panda.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                            <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>

            </div>
            <!-- MODIFICADO -->

        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container">

            <div class="row counters">

                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="100" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Sostenibles</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="100" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Algodón orgánico</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="70" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Materiales reciclados</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="25000" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Trees for the Future</p>
                </div>

            </div>

        </div>
    </section><!-- End Counts Section -->

    <!-- ======= Clothes Portfolio Section ======= -->
    <section id="catalog" class="portfolio">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Catálogo</h2>
                <p>Camisetas,sudaderas camisetas, hoodies y mucho más!</p>
            </div>

            <!-- MODIFICADO -->
            <div class="row portfolio-container">

                <div class="col-lg-4 col-md-6 portfolio-item">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/clothes_1.jpeg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>EpicNewTimes</h4>
                            <p>EpicNewTimes</p>
                        </div>
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/clothes_1.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                            <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item"> <!-- col-lg-6 -->
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/clothes_2.jpeg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>EpicSquidGame</h4>
                            <p>EpicSquidGame</p>
                        </div>
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/clothes_2.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                            <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/clothes_3.jpeg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>F*ck Fake Friends</h4>
                            <p>F*ck Fake Friends</p>
                        </div>
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/clothes_3.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                            <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/clothes_4.jpeg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>EpicTitanX20</h4>
                            <p>EpicTitanX20</p>
                        </div>
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/clothes_4.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                            <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/clothes_5.jpeg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>EpicTitanX20</h4>
                            <p>EpicTitanX20</p>
                        </div>
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/clothes_5.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                            <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/clothes_6.jpeg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>EpicTitanX20</h4>
                            <p>EpicTitanX20</p>
                        </div>
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/clothes_6.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                            <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- MODIFICADO -->
        </div>

    </section><!-- End Portfolio Section -->

    <!-- ======= LifeStyle Portfolio Section ======= -->
    <section id="portfolio_ls" class="portfolio">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2 id="ls_title">#epicabventure</h2>
            </div>

            <!-- MODIFICADO -->
            <div class="row portfolio-container">

                <div class="col-lg-4 col-md-6 portfolio-item">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/prog_1.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>EpicNewTimes</h4>
                            <p>EpicNewTimes</p>
                        </div>
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/prog_1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                            <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item"> <!-- col-lg-6 -->
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/prog_2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>EpicSquidGame</h4>
                            <p>EpicSquidGame</p>
                        </div>
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/prog_2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                            <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/prog_3.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>F*ck Fake Friends</h4>
                            <p>F*ck Fake Friends</p>
                        </div>
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/prog_3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                            <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>

            </div>
            <!-- MODIFICADO -->
        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Contacto</h2>
                <p>Visítanos en nuestra tienda y descubre nuestros productos de alta calidad. Contáctanos para colaboraciones y oportunidades de trabajo.¿Ya trabajas en EpicVlur? Ayúdanos a encontrar a tu próximo compañero compartiendo nuestras oportunidades de trabajo. ¡Esperamos verte pronto!</p>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="info-box mb-4">
                        <i class="bx bx-map"></i>
                        <h3>TIENDA FÍSICA</h3>
                        <p>Av. Complutense 28, Madrid, España</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="info-box  mb-4">
                        <i class="bx bx-envelope"></i>
                        <h3>COLABORACIONES</h3>
                        <p>info@epicvlur.com</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="info-box  mb-4">
                        <i class="bx bx-phone-call"></i>
                        <h3>LLÁMANOS</h3>
                        <p>+34 123 456 789</p>
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-lg-6 ">
                    <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3036.0323766303513!2d-3.729164074671533!3d40.45242037143386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422834b7a8fb4d%3A0x2a3c66a12ada73f9!2sEscuela%20T%C3%A9cnica%20Superior%20de%20Ingenieros%20de%20Telecomunicaci%C3%B3n%20(ETSIT).%20UPM!5e0!3m2!1ses!2ses!4v1683111411091!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                </div>

                <div class="col-lg-6">
                    <!-- <form action="forms/contact.php" method="post" role="form" class="php-email-form"> -->
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Mensaje" required></textarea>
                        </div>
                        <div class="form-group mt-3">
                            <input type="checkbox" name="aceptaPolitica" required>
                            He leído y acepto la <a href="#">Política de Privacidad</a> y el <a href="#">Aviso Legal</a>.
                        </div>
                        <div class="my-3">
                            <div class="loading">Cargando</div>
                            <div class="error-message"></div>
                            <div class="sent-message">¡Tu mensaje ha sido enviado. Gracias!</div>
                        </div>
                        <div class="text-center"><button type="submit">ENVIAR</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3>EPICVLUR</h3>
                    <p>
                        Av. Complutense, 28 <br>
                        Madrid, España<br>
                        <strong>Teléfono:</strong>+34 123 456 789<br>
                        <strong>Email:</strong> info@epicvlur.com<br>
                    </p>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>EpicVlur</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="/solicitar.php">Solicitar diseño</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Cambios y devoluciones</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Guía de tallas</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Envíos</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">FAQs</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Compañía</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="https://freddymermatewc.wordpress.com/">Blog del proyecto</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Trabaja en EpicVlur</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Colaboraciones</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Aviso legal</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Términos y condiciones del servicio</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Únete a nuestro Newsletter!</h4>
                    <p><strong>SUSCRÍBETE Y DISFRUTA DE ESTA NUEVA AVENTURA CON UN 10%</strong></p>
                    <form action="suscribir.php" method="post">
                        <input type="email" name="email"><input type="submit" value="SUSCRIBIRSE"><br>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="container">

        <div class="copyright-wrap d-md-flex py-4">
            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>EpicVlur</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/techie-free-skin-bootstrap-3/ -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="https://www.instagram.com/epicvlur" class="instagram"><i class="bx bxl-instagram"></i></a>
            </div>
        </div>

    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
<!-- Pop-up Newsletter-->
<!-- Scroll Down -->
<!-- JS -->
<script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/plugin.js" ></script>
<!-- call the plugin -->
<script type="text/javascript">
    $("html").jPopup({
        heading : "Suscríbete a nuestro newsletter!",
        paragraph: "y... te mandamos un 10% de descuento.",
        buttonText : "Quiero mi código",
        buttonClass : "btn btn-info",
    });
</script>

<!-- Cookies Plugin -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.ihavecookies.js"></script>
<script type="text/javascript">
    var options = {
        title: '&#x1F36A; Tú privacidad es importante.',
        message: 'Utilizamos cookies con finalidades analíticas. Puedes configurar o rechazar las cookies en <strong>“Configurar”</strong>. También puedes aceptar todas las cookies pulsando <strong>“Aceptar todo”</strong>.<br>Para más información puedes visitar nuestra</br>',
        delay: 600,
        expires: 1,
        link: '#privacy',
        onAccept: function(){
            var myPreferences = $.fn.ihavecookies.cookie();
            console.log('Yay! The following preferences were saved...');
            console.log(myPreferences);
        },
        uncheckBoxes: true,
        acceptBtnLabel: 'ACEPTAR TODO',
        advancedBtnLabel: 'CONFIGURAR',
        moreInfoLabel: 'Política de Cookies.',
        cookieTypesTitle: 'Selecciona qué cookies deseas aceptar.',
        fixedCookieTypeLabel: 'Essential',
        fixedCookieTypeDesc: 'These are essential for the website to work correctly.'
    }

    $(document).ready(function() {
        $('body').ihavecookies(options);

        if ($.fn.ihavecookies.preference('marketing') === true) {
            console.log('This should run because marketing is accepted.');
        }

        $('#ihavecookiesBtn').on('click', function(){
            $('body').ihavecookies(options, 'reinit');
        });
    });

</script>
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab|Quicksand:400,500" rel="stylesheet">
<link href="assets/css/gdpr-cookie.css" rel="stylesheet">

</body>

</html>