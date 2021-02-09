<?php

/* Template Name: State Chapter Page */
get_header();

$facebookURL = get_post_meta( get_the_ID(), 'facebook_url', true);
?>

    <main id="primary" class="site-main">
        <!-- WELCOME
                 ================================================== -->
        <section data-jarallax data-speed=".8" class="py-10 py-md-14 overlay overlay-black overlay-60 bg-cover jarallax"
                 style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 text-center">

                        <!-- Heading -->
                        <h1 class="display-2 font-weight-bold text-white">
                            <?php echo get_the_title(); ?>
                        </h1>

                        <!-- Text -->
                        <p class="lead mb-8 text-white-75">
                            Keep up to date with what we're working on! Landkit is an ever evolving theme with regular
                            updates.
                        </p>

                    </div>
                </div>
                <!-- Social -->

                <div class="row col-xs-4 d-flex justify-content-center">
                    <div class="col-12 col-md-6 col-lg-4">

                        <!-- Card -->
                        <a href="<?php echo $facebookURL?>" class="text-decoration-none">
                            <div class="card card-border border-primary shadow-lg mb-6 mb-md-8 lift lift-lg">
                                <div class="card-body text-center">

                                    <!-- Icon -->
                                    <div class="icon-circle bg-primary text-white mb-5">
                                        <i class="fe fe-facebook"></i>
                                    </div>

                                    <!-- Heading -->
                                    <h4 class="font-weight-bold">
                                        Facebook
                                    </h4>

                                    <!-- Text -->
                                    <p class="text-gray-700 mb-5">
                                        Connect with us on Facebook
                                    </p>

                                    <!-- Badge -->
<!--                                    <span class="badge badge-pill badge-dark-soft">-->
<!--                      <span class="h6 text-uppercase">-->
<!--                        21 entries-->
<!--                      </span>-->
<!--                    </span>-->

                                </div>
                            </div>
                        </a>
                    </div>
                </div> <!-- / .row -->

                <script>
                    feather.replace({width: '1em', height: '1em'})
                </script>
            </div> <!-- / .container -->
        </section>

        <!-- SHAPE
         ================================================== -->
        <div class="position-relative">
            <div class="shape shape-bottom shape-fluid-x svg-shim text-light">
                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor"/>
                </svg>
            </div>
        </div>


    </main><!-- #main -->

<?php
get_template_part( 'template-parts/shape', 'none');
get_footer();
