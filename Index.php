<?php require('include/head.php'); ?>

<body>
    <section class="container-full m-widht">
        <div class="row">
            <div class="col-md-12">
                <?php require('include/header.php'); ?>
            </div>
        </div>
    </section>
    <header class="v-header container ">
        <div class="row">
            <div class="fullscreen-video-wrap">
            </div>
            <!-- <div class="header-overlay"></div> -->
            <div class="col-md-6 order-0">
                <div class="header-content text-md-center">
                    <h2 class="font-weight-light texto_bercode bounceInRight" id="texto_bercode"></h2>
                    <p class="lead">Las mejores ideas para tu sitio Web</p>
                </div>
            </div>
            <div class="col-md-6 order-1">
                <p class="description">
                    Recibiras Tips, Promciones y Comunicados para crear o mejorar tu página Web.
                </p>
                <div class="card-sucrib">
                    <div class="card-body">
                        <span id="success_message"></span>
                        <form method="POST" action="" id="form_boletines">
                            <div class="row">
                                <div class="col-sm-8 mb-2">
                                    <span class="bmd-form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fas fa-envelope"></i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control" name="correo" placeholder="Correo Electronico">
                                        </div>
                                    </span>
                                    <span id="correo_error" class="text-danger"></span>
                                </div>
                                <div class="col-sm-4">
                                    <button type="submit" class="btn btn-danger btn-block" id="btn_suscribirse">Suscribirse</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="cabecera">
            <ul id="myMenu" class="" style="display: none;">
                <li class="nav-item">
                    <a class="nav-link active" href="#" aria-disabled="true">
                        <i class="icon-social-facebook white-text icon-tam btn btn-primary"> </i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#" aria-disabled="true">
                        <i class="icon-social-youtube white-text icon-tam btn btn-danger"> </i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="https://api.whatsapp.com/send?phone=+573106031839&text=Hola, estoy interesado en sus servicios. Deseo más información." target="_blank">
                        <i class="fab fa-whatsapp icon-tam btn btn-success"> </i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-black" href="#" target="_blank">
                        <i class="fas fa-comment-dots icon-tam btn btn-warning text-white"> </i>
                    </a>
                </li>
            </ul>
        </div>
    </header>
    <section class="container-full space-top">
        <div class="row">
            <div class="col-md-12">
                <div class="slider">
                    <div class="slide-track">
                        <div class="slide">
                            <i class="fab fa-vuejs text-success"></i>
                        </div>
                        <div class="slide">
                            <i class="fab fa-node text-success"></i>
                        </div>
                        <div class="slide">
                            <i class="fab fa-php text-info"></i>
                        </div>
                        <div class="slide">
                            <i class="fab fa-html5 text-danger"></i>
                        </div>
                        <div class="slide">
                            <i class="fab fa-android text-success"></i>
                        </div>
                        <div class="slide">
                            <i class="fab fa-paypal text-primary"></i>
                        </div>
                        <div class="slide">
                            <i class="fas fa-credit-card text-warning"></i>
                        </div>
                        <div class="slide">
                            <i class="fab fa-vuejs text-success"></i>
                        </div>
                        <div class="slide">
                            <i class="fab fa-node text-success"></i>
                        </div>
                        <div class="slide">
                            <i class="fab fa-php text-info"></i>
                        </div>
                        <div class="slide">
                            <i class="fab fa-html5 text-danger"></i>
                        </div>
                        <div class="slide">
                            <i class="fab fa-android text-success"></i>
                        </div>
                        <div class="slide">
                            <i class="fab fa-paypal text-primary"></i>
                        </div>
                        <div class="slide">
                            <i class="fas fa-credit-card text-warning"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Servicios -->
    <div class="container" id="servicios" style="background-image: url(');">
        <div class="w-md-80 w-lg-60 text-center">
            <hr class="my-4">
            <h2 class="h3">Servicios</h2>
            <p>Las mejores herramientas para su Web</p>
        </div>
        <div class="tab_container">
            <input id="tab1" type="radio" name="tabs" checked class="input_servicios">
            <label for="tab1"><i class="fa fa-chrome"></i><span>Paginas</span></label>

            <input id="tab2" type="radio" name="tabs" class="input_servicios">
            <label for="tab2"><i class="fas fa-envelope-open"></i><span> Correos</span></label>

            <input id="tab3" type="radio" name="tabs" class="input_servicios">
            <label for="tab3"><i class="fas fa-store-alt"></i><span> E-commerce</span></label>

            <input id="tab4" type="radio" name="tabs" class="input_servicios">
            <label for="tab4"><i class="fab fa-google-play"></i><span> Apps</span></label>

            <!-- <input id="tab5" type="radio" name="tabs" class="input_servicios">            
            <label for="tab5"><i class="fa fa-code"></i><span></span></label> -->

            <section id="content1" class="tab-content" class="section">
                <h3>Páginas Webs</h3>
                <p>Realizamos todo tipo de desarrollos Web, plataformas para empresas comerciales, 
                de servicios o producción, con poderosos paneles internos que permite, control de usuarios, 
                notificaciones via SMS e Email a los equipos de trabajo.</p>    
                <img src="assets/images/29938.jpg" class="img-fluid"> 
            </section>
            <section id="content2" class="tab-content" class="section">
                <h3>Correos Corporativos que representan tu Empresa</h3>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <button type="button" class="btn btn-primary">
                                        <i class="fas fa-cloud-upload-alt"></i>
                                        Almacenamiento Ilimitado
                                    </button>
                                </li>

                                <li class="list-group-item">
                                    <button type="button" class="btn btn-warning">
                                        <i class="fab fa-google"></i>
                                        Conectados a Gmail
                                    </button>
                                </li>
                                <li class="list-group-item">
                                    <button type="button" class="btn btn-success">
                                        <i class="fas fa-user-secret"></i>
                                        Alias por Empleados
                                    </button>
                                </li>
                                <li class="list-group-item">
                                    <button type="button" class="btn btn-secondary">
                                        <i class="far fa-calendar-check"></i>
                                        Calendario de Eventos
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <p>Consulta nuestro servicios de correos y obten ya el tuyo.</p>
                            <p>Ejemplos: </p>
                            <p> <span class="text-danger"><strong>gerencia@misempresa.com</strong></span></p>
                            <p> <span class="text-danger"><strong>ventas@misempresa.com</strong></span></p>
                            <p> <span class="text-danger"><strong>contabilidad@misempresa.com</strong></span></p>

                        </div>
                    </div>
                </div>

            </section>
            <section id="content3" class="tab-content" class="section">
                <h3>Tienda en Linea </h3>
                <p>Construimos tu tienda en la web para que nunca pierdas el contacto con tus clientes.</p>

                <div class="container">
                    <div class="row">
                        <div class="col-md-6 order-1 order-lg-0">
                            <p>Consulta nuestro plan <span class="badge badge-danger"><strong>40 / 60</strong></span></p>
                            <p>Desarrollamos tu <strong>E-commerce</strong> con el 40% del presupuesto, el resto te lo financiamos para que hagas posible tu sueño de vender en linea.</p>
                            <a href="#" class="btn btn-success">Quiero el 40/60</a>
                        </div>
                        <div class="col-md-6 order-0 order-lg-1">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <button type="button" class="btn btn-warning">
                                        <i class="fas fa-chart-line"></i>
                                        Panel Administrativo
                                    </button>
                                </li>
                                <li class="list-group-item">
                                    <button type="button" class="btn btn-primary">
                                        <i class="fas fa-dolly-flatbed"></i>
                                        Galeria de Productos
                                    </button>
                                </li>
                                <li class="list-group-item">
                                    <button type="button" class="btn btn-secondary">
                                        <i class="far fa-comments"></i>
                                        Chat de Ventas
                                    </button>
                                </li>
                                <li class="list-group-item">
                                    <button type="button" class="btn btn-success">
                                        <i class="fas fa-cart-arrow-down"></i>
                                        Carro de Compras
                                    </button>
                                </li>
                                <li class="list-group-item">
                                    <button type="button" class="btn btn-light">
                                        <i class="fab fa-cc-visa"></i> -
                                        <i class="fab fa-cc-mastercard"></i> -
                                        <i class="fab fa-cc-amex"></i> -
                                        <i class="fab fa-cc-paypal"></i> -
                                        <strong>PSE</strong>
                                    </button>
                                </li>
                                <li class="list-group-item">
                                    <button type="button" class="btn btn-danger">
                                        <i class="fas fa-users"></i>
                                        Lista de Clientes
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </section>
            <section id="content4" class="tab-content" class="section">
                <h3>Apps Moviles</h3>
                <p>Creamos tu App Movil con la mejor Tecnologia, disponibilidad multiplataformas.</p>
                <i class="fab fa-android text-success" style="font-size: 48px;"></i>
                <i class="fab fa-apple text-secondary" style="font-size: 48px;"></i>
                <p>Cuentale a nuestro equipo de trabajo los requerimientos de tú proyecto y haremos el resto!</p>
                <a href="#" class="btn btn-primary">Quiero mi App Movil</a>
            </section>
        </div>
    </div>

    <!-- End Servicios -->
    <section class="pricing py-5" id="precios">
        <div class="container">
            <div class="row">
                <!-- Free Tier -->
                <div class="col-lg-4">
                    <div class="card mb-5 mb-lg-0">
                        <div class="card-body">
                            <h5 class="card-title text-muted text-uppercase text-center">Web Inicial</h5>
                            <h6 class="card-price text-center font-small-sm">$450.000<span class="period">/año</span></h6>
                            <hr>
                            <ul class="fa-ul">
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Web Responsive</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Almacenamiento Ilimitado</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Hosting Gratis 1 año</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Dominio Gratis 1 año</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Panel Administrativo</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>1 Email Coporativo</li>
                                <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Usuarios Ilimitados</li>
                                <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Modulos Personalizados</li>
                                <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Soporte 24/7</li>
                            </ul>
                            <a href="#" class="btn btn-block btn-primary text-uppercase">Contratar!</a>
                        </div>
                    </div>
                </div>
                <!-- Plus Tier -->
                <div class="col-lg-4">
                    <div class="card mb-5 mb-lg-0">
                        <div class="card-body">
                            <h5 class="card-title text-muted text-uppercase text-center">Web Corporativa</h5>
                            <h6 class="card-price text-center font-small-sm">$600.000<span class="period">/año</span></h6>
                            <hr>
                            <ul class="fa-ul">
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Web Responsive</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Almacenamiento Ilimitado</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Hosting & Dominio Gratis <strong>2 años</strong></li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Panel Administrativo</strong></li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Emails Coporativos Ilimitados</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Usuarios Ilimitados</li>
                                <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Modulos Personalizados</li>
                                <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Soporte 24/7</li>
                            </ul>
                            <a href="#" class="btn btn-block btn-primary text-uppercase">Contratar!</a>
                        </div>
                    </div>
                </div>
                <!-- Pro Tier -->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-muted text-uppercase text-center">Web Pro</h5>
                            <h6 class="card-price text-center">$--<span class="period">/año</span></h6>
                            <hr>
                            <ul class="fa-ul">
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Web Responsive</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Almacenamiento Ilimitado</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Hosting y Dominio Gratis</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Panel Administrativo</strong></li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Integración con <strong>PSE</strong></li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Emails Coporativos Ilimitados</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Usuarios Ilimitados</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Modulos Personalizados</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Soporte 24/7</li>
                            </ul>
                            <a href="#" class="btn btn-block btn-primary text-uppercase">Cotizar!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Clientes -->
    <div class="bg-gray-100 my-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Title -->
                    <h4 class="h6 mb-3"><strong>Nuestros Clientes</strong></h4>
                    <div class="slider--teams mb-3">
                        <div class="slider--teams__team">
                            <ul id="list" class="cf">

                                <li>
                                    <figure class="active">
                                        <div>
                                            <div></div>
                                        </div>
                                        <figcaption>
                                            <h2>Billie</h2>
                                            <p>Head of Team</p>
                                        </figcaption>
                                    </figure>
                                </li>

                                <li>
                                    <figure>
                                        <div>
                                            <div></div>
                                        </div>
                                        <figcaption>
                                            <h2>Roger</h2>
                                            <p>Art Director</p>
                                        </figcaption>
                                    </figure>
                                </li>

                                <li>
                                    <figure>
                                        <div>
                                            <div></div>
                                        </div>
                                        <figcaption>
                                            <h2>Wendy</h2>
                                            <p>Designer</p>
                                        </figcaption>
                                    </figure>
                                </li>

                                <li>
                                    <figure>
                                        <div>
                                            <div></div>
                                        </div>
                                        <figcaption>
                                            <h2>Bill</h2>
                                            <p>Development</p>
                                        </figcaption>
                                    </figure>
                                </li>

                                <li>
                                    <figure>
                                        <div>
                                            <div></div>
                                        </div>
                                        <figcaption>
                                            <h2>Lorraine</h2>
                                            <p>Front-End Development</p>
                                        </figcaption>
                                    </figure>
                                </li>

                                <li>
                                    <figure>
                                        <div>
                                            <div></div>
                                        </div>
                                        <figcaption>
                                            <h2>Wesley</h2>
                                            <p>Marketing Lead</p>
                                        </figcaption>
                                    </figure>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Clientes -->
    <!-- Contacto -->
    <div class="bg-gray-100 my-4 mt-5" id="contacto">
        <div class="container space-2 space-3--lg">
            <div class="row">
                <div class="col-md-12">
                    <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-9">
                        <hr class="my-4">
                        <h2 class="h3">Dejanos un mensaje</h2>
                        <p>Si tienes un comentario, escribenos!</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 mb-7 mb-md-0">
                    <address>
                        <span class="d-block text-secondary"><strong>Nuestra Oficina</strong></span>
                        <!-- Contacts List -->
                        <ul class="list-unstyled text-secondary py-4">
                            <li class="media align-items-center py-2">
                                <i class="icon-location-pin"></i>
                                <div class="media-body">
                                    Cra 18a No. 11 - 20, Lorica
                                </div>
                            </li>

                            <li class="media align-items-center py-2">
                                <i class="icon-login"></i>
                                <div class="media-body">
                                    Lun a Sab: 9 AM a 6 PM
                                </div>
                            </li>

                            <li class="media align-items-center py-2">
                                <i class="icon-call-in"></i>
                                <div class="media-body">
                                    (+57) 310 603 1839 - (+57) 314 6113576
                                </div>
                            </li>
                            <li class="media align-items-center py-2">
                                <i class="icon-envelope-letter"></i>
                                <div class="media-body ml-1">
                                    Contacto@bercodesas.com
                                </div>
                            </li>
                        </ul>
                        <!-- End Contacts List -->
                    </address>
                </div>
                <div class="col-md-9">
                    <div class="w-lg-80 mx-auto">
                        <form class="js-validate">
                            <div class="row">
                                <!-- Input -->
                                <div class="col-sm-6 mb-6">
                                    <div class="mb-2">
                                        <div class="js-focus-state input-group form">
                                            <input class="form-control form__input" type="text" name="name" required placeholder="Nombres" aria-label="Your name" data-msg="Please enter your name." data-error-class="u-has-error" data-success-class="u-has-success">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Input -->

                                <!-- Input -->
                                <div class="col-sm-6 mb-6">
                                    <div class="mb-2">
                                        <div class="js-focus-state input-group form">
                                            <input class="form-control form__input" type="email" name="email" required placeholder="Correo Eléctronico" aria-label="Your email address" data-msg="Please enter a valid email address." data-error-class="u-has-error" data-success-class="u-has-success">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Input -->

                                <div class="w-100"></div>

                                <!-- Input -->
                                <div class="col-sm-6 mb-6">
                                    <div class="mb-2">
                                        <div class="js-focus-state input-group form">
                                            <input class="form-control form__input" type="text" name="subject" required placeholder="Asunto" aria-label="Subject" data-msg="Please enter a subject." data-error-class="u-has-error" data-success-class="u-has-success">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Input -->

                                <!-- Input -->
                                <div class="col-sm-6 mb-6">
                                    <div class="mb-2">
                                        <div class="js-focus-state input-group form">
                                            <input class="form-control form__input" type="text" name="phone" required placeholder="Número de teléfono" aria-label="Your phone number" data-msg="Please enter a valid phone number." data-error-class="u-has-error" data-success-class="u-has-success">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Input -->
                            </div>

                            <!-- Input -->
                            <div class="mb-2 mb-9">
                                <div class="js-focus-state input-group form">
                                    <textarea class="form-control form__input" rows="6" name="text" required placeholder="Dejanos tus comentarios" aria-label="How can we help you?" data-msg="Please enter a reason." data-error-class="u-has-error" data-success-class="u-has-success"></textarea>
                                </div>
                            </div>
                            <!-- End Input -->

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-wide mb-4">Enviar</button>
                                <p class="small">Responderemos en cuanto sea posibe. Gracias por escribirnos.</p>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!-- End Contacto -->
    <?php require('include/footer.php'); ?>
    <?php require('include/script.php'); ?>

</body>

</html>