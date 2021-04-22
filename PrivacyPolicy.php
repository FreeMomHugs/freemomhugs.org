<?php

/* Template Name: Privacy Policy */

/**
 * The template for displaying privacy policy
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WP-FreeMomHugs
 */

get_header();
?>

	<main id="primary" class="site-main">

        <!-- CONTENT
        ================================================== -->
        <section class="pt-8 pt-md-11 pb-8 pb-md-14">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-md">

                        <!-- Heading -->
                        <h1 class="display-4 mb-2">
                            <?php echo get_the_title();?>
                        </h1>

                        <!-- Text -->
                        <p class="font-size-lg text-gray-700 mb-md-0">
                            Updated <?php echo get_the_date();?>
                        </p>

                    </div>
                    <div class="col-auto">

                        <!-- Buttons -->
<!--                        <a href="#!" class="btn btn-primary-soft">-->
<!--                            Print-->
<!--                        </a>-->

                    </div>
                </div> <!-- / .row -->
                <div class="row">
                    <div class="col-12">

                        <!-- Divider -->
                        <hr class="my-6 my-md-8">

                    </div>
                </div> <!-- / .row -->
                <div class="row">
                    <div class="col-12 col-md-8">

                        <!-- Text -->
                            <?php
                            the_content(
                            );
                            ?>

                    </div>
                    <div class="col-12 col-md-4">

                        <!-- Card -->
                        <div class="card shadow-light-lg">
                            <div class="card-body">

                                <!-- Heading -->
                                <h4>
                                    Have a question?
                                </h4>

                                <!-- Text -->
                                <p class="font-size-sm text-gray-800 mb-5">
                                    Not sure exactly what we’re looking for or just want clarification? We’d be happy to chat with you and clear things up for you. Anytime!
                                </p>

                                <!-- Heading -->
                                <h6 class="font-weight-bold text-uppercase text-gray-700 mb-2">
                                    Call anytime
                                </h6>

                                <!-- Text -->
                                <p class="font-size-sm mb-5">
                                    <a href="tel:555-123-4567" class="text-reset">(555) 123-4567</a>
                                </p>

                                <!-- Heading -->
                                <h6 class="font-weight-bold text-uppercase text-gray-700 mb-2">
                                    Email us
                                </h6>

                                <!-- Text -->
                                <p class="font-size-sm mb-0">
                                    <a href="mailto:info@freemomhugs.org" class="text-reset">info@freemomhugs.org</a>
                                </p>

                            </div>
                        </div>

                    </div>
                </div> <!-- / .row -->
            </div> <!-- / .container -->
        </section>


        <!-- SHAPE
         ================================================== -->
        <div class="position-relative">
            <div class="shape shape-bottom shape-fluid-x svg-shim text-light">
                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor"/></svg>
            </div>
        </div>
	</main><!-- #main -->

<?php
get_template_part( 'template-parts/shape', 'none');
get_footer();
