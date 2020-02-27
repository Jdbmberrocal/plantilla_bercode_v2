<?php require('include/head_general.php'); ?>

<body>

    <!-- ========== HEADER ========== -->
    <?php require('include/header.php'); ?>
    <!-- ========== END HEADER ========== -->

    <!-- ========== MAIN CONTENT ========== -->
    <main id="content">
        <!-- Hero Section -->
        <div class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll" data-options='{direction: "normal"}'>
            <!-- Apply your Parallax background image here -->
            <div class="divimage dzsparallaxer--target" style="height: 135%; background-image: url(assets/images/img6.jpg);"></div>

            <!-- Content -->
            <div class="d-lg-flex align-items-lg-center height-100vh--lg">
                <div class="container space-3 mt-lg-5">
                    <div class="row my-5 mt-5">
                        <div class="col-md-7">
                            <h1 class="display-4 font-size-48--md-down text-white">Pàginas Web desde cualquier dispositivo</h1>
                            <a class="js-go-to btn btn-light btn-wide" href="javascript:;" data-target="#caseStudiesContent" data-type="static">
                                Conocelas
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Content -->
        </div>
        <!-- End Hero Section -->

        <!-- Case Studies Content -->
        <div id="caseStudiesContent">
            <div class="bg-gray-100">
                <div class="container space-2 space-3--lg">
                    <!-- Description -->
                    <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-9">
                        <span class="u-label u-label--sm u-label--purple mb-3">Introduction</span>
                        <h2>Built by Htmlstream</h2>
                        <p>With an incredibly beautiful, fully responsive, and mobile-first projects on the web – Space Multipurpose Responsive Template is the perfect starting point for any creative and professional sites. Get started with Space's components and options for laying out your Space project, including SVG components, powerful scripts, fully detailed documentation, and yet developer friendly code.</p>
                    </div>
                    <!-- End Description -->

                    <!-- Images Carousel -->
                    <div class="js-slick-carousel u-slick u-slick--gutters-3 mb-9" data-infinite="true" data-slides-show="1" data-slides-scroll="1" data-center-mode="true" data-center-padding="200px" data-pagi-classes="text-center u-slick__pagination mt-5 mb-0" data-responsive='[{
                 "breakpoint": 992,
                 "settings": {
                   "centerPadding": "120px"
                 }
               }, {
                 "breakpoint": 768,
                 "settings": {
                   "centerPadding": "80px"
                 }
               }, {
                 "breakpoint": 554,
                 "settings": {
                   "centerPadding": "50px"
                 }
               }]'>
                        <div class="js-slide my-3">
                            <img class="img-fluid" src="assets/images/1200x600/img2.jpg" alt="Image Description">
                        </div>
                        <div class="js-slide my-3">
                            <img class="img-fluid" src="assets/images/1200x600/img3.jpg" alt="Image Description">
                        </div>
                        <div class="js-slide my-3">
                            <img class="img-fluid" src="assets/images/1200x600/img4.jpg" alt="Image Description">
                        </div>
                        <div class="js-slide my-3">
                            <img class="img-fluid" src="assets/images/1200x600/img5.jpg" alt="Image Description">
                        </div>
                    </div>
                    <!-- End Images Carousel -->

                    <!-- Description -->
                    <div class="row justify-content-lg-center">
                        <div class="col-md-6 col-lg-5">
                            <p>Space Template is built by the team that has customers in the background such us Stanford University, The University of Maryland, University of Victoria and many more Governments, Corporate Agencies. To bring the most modern look of any HTML5 template across all Marketplaces – powered by Bootstrap 4.</p>
                        </div>

                        <div class="col-md-6 col-lg-5">
                            <p>Space sets the new standard with breathtaking design, top-notch support, and incredible featured packed updates that will save your precious time and gives trendy look to all your web projects. On top of that the creators of Bootstrap have closely monitored the ongoing process of the Space and helped to achieve an enormous result.</p>
                        </div>
                    </div>
                    <!-- End Description -->
                </div>
            </div>

            <!-- Hero -->
            <div class="bg-img-hero-bottom height-100vh--lg" style="background-image: url(assets/images/1920x1080/img18.jpg);">
                <div class="container space-3-top space-5-bottom space-3--lg">
                    <div class="w-md-75 w-lg-50 text-center mx-md-auto">
                        <h2 class="display-3 font-size-48--md-down text-white">Fully responsive</h2>
                    </div>
                </div>
            </div>
            <!-- End Hero -->
            <div class="container">
                <div class="row my-4 mt-4">
                    <div class="col-md-12">
                        <!-- Description -->
                        <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-9 my-3">                            
                            <h2>Built by Htmlstream</h2>
                            <p>With an incredibly beautiful, fully responsive, and mobile-first projects on the web – Space Multipurpose Responsive Template is the perfect starting point for any creative and professional sites. Get started with Space's components and options for laying out your Space project, including SVG components, powerful scripts, fully detailed documentation, and yet developer friendly code.</p>
                        </div>
                        <!-- End Description -->
                        <!-- Description -->
                        <div class="row justify-content-lg-center">
                            <div class="col-md-6 col-lg-5">
                                <p>Space Template is built by the team that has customers in the background such us Stanford University, The University of Maryland, University of Victoria and many more Governments, Corporate Agencies. To bring the most modern look of any HTML5 template across all Marketplaces – powered by Bootstrap 4.</p>
                            </div>

                            <div class="col-md-6 col-lg-5">
                                <p>Space sets the new standard with breathtaking design, top-notch support, and incredible featured packed updates that will save your precious time and gives trendy look to all your web projects. On top of that the creators of Bootstrap have closely monitored the ongoing process of the Space and helped to achieve an enormous result.</p>
                            </div>
                        </div>
                        <!-- End Description -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Case Studies Content -->
    </main>
    <!-- ========== END MAIN CONTENT ========== -->

    <!-- ========== FOOTER ========== -->
    <?php require('include/footer.php') ?>
    <!-- ========== END FOOTER ========== -->

    <!-- JS Global Compulsory -->
    <script src="assets/js/plugin/jquery.min.js"></script>
    <script src="assets/js/jquery-migrate.min.js"></script>
    <script src="assets/js/bootstrap/popper.min.js"></script>
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>

    <!-- JS Implementing Plugins -->            
    <script src="assets/js/plugin/dzsparallaxer.js"></script>
    <script src="assets/js/plugin/slick.js"></script>
    <script src="assets/js/plugin/hs.core.js"></script>
    <script src="assets/js/plugin/hs.header.js"></script>
    <script src="assets/js/plugin/hs.unfold.js"></script>    
    <script src="assets/js/plugin/hs.malihu-scrollbar.js"></script>
    <script src="assets/js/plugin/hs.focus-state.js"></script>          
    <script src="assets/js/plugin/hs.slick-carousel.js"></script>
    <script src="assets/js/main.js" type="text/javascript"></script>

    <!-- JS Plugins Init. -->
    <script>
        $(window).on('load', function() {
            // initialization of HSMegaMenu component
            $('.js-mega-menu').HSMegaMenu({
                event: 'hover',
                pageContainer: $('.container'),
                breakpoint: 991,
                hideTimeOut: 0
            });
        });

        $(document).on('ready', function() {
            // initialization of header
            $.HSCore.components.HSHeader.init($('#header'));

            // initialization of unfold component
            $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
                afterOpen: function() {
                    if (!$('body').hasClass('IE11')) {
                        $(this).find('input[type="search"]').focus();
                    }
                }
            });

            // initialization of malihu scrollbar
            $.HSCore.components.HSMalihuScrollBar.init($('.js-scrollbar'));     

            // initialization of slick carousel
            $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');

            // initialization of sticky blocks
            setTimeout(function() {
                $.HSCore.components.HSStickyBlock.init('.js-sticky-block');
            }, 300);
        });
    </script>
</body>

</html>