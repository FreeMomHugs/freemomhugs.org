<?php
/**
 * The template for displaying all pages
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
        <!-- WELCOME
         ================================================== -->
        <section data-jarallax data-speed=".8" class="py-10 py-md-14 overlay bg-bright-blue overlay-60 bg-cover jarallax" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-10 col-lg-7 text-left">

                        <!-- Heading -->
                        <h1 class="display-2 font-weight-bold text-white">
                            <?php echo get_the_title(); ?>

                        </h1>

                        <!-- Text -->
                        <div class="lead mb-0 text-white-75">
	                        <?php echo the_content(); ?>
                        </div>

                    </div>
                </div> <!-- / .row -->
            </div> <!-- / .container -->
        </section>

        <div class="container">
            <div class="form-row mt-4">
                <div class="col-12 col-lg-6 d-lg-flex pb-1 mb-4">

                    <!-- Card -->
                    <div class="card shadow-light-lg overflow-hidden" >
                        <div class="row">
                            <div class="col-md-4 position-relative">

                                <!-- Image -->
                                <img src="<?php echo get_template_directory_uri() . "/assets/img/illustrations/illustration-8.png";?>" class="h-75 position-absolute right-0 mt-7 mr-n4" alt="...">

                            </div>
                            <div class="col-md-8">

                                <!-- Body -->
                                <div class="card-body py-7 py-md-9 text-center">

                                    <!-- Heading -->
                                    <h4 class="font-weight-bold">
                                        Books
                                    </h4>

                                    <!-- Text -->
                                    <p class="text-muted mb-0">
                                        Landkit works well for a scrappy team of 3 or scales to the enterprise level needs of Forture 500 companies.
                                    </p>

                                </div>

                            </div>
                        </div> <!-- / .row -->
                    </div>

                </div>
                <div class="col-12 col-lg-6 d-lg-flex pb-1 mb-4">

                    <!-- Card -->
                    <div class="card shadow-light-lg overflow-hidden text-center">
                        <div class="row">
                            <div class="col-md-8">

                                <!-- Body -->
                                <div class="card-body py-7 py-md-9">

                                    <!-- Heading -->
                                    <h4 class="font-weight-bold">
                                        Other Media
                                    </h4>

                                    <!-- Text -->
                                    <p class="text-muted mb-0">
                                        Instead of bombarding team members with huge messages, simply reply with an emoji to express your reply.
                                    </p>

                                </div>

                            </div>
                            <div class="col-md-4">

                                <!-- Image -->
                                <img src=<?php echo get_template_directory_uri() . "/assets/img/illustrations/illustration-6.png";?>" class="h-75 position-absolute left-0 mt-7" alt="...">

                            </div>
                        </div> <!-- / .row -->
                    </div>

                </div>
            </div> <!-- / .row -->
        </div>





        <?php
        get_template_part( 'template-parts/resource-cards', 'page' );
        ?>


	</main><!-- #main -->

<?php
get_template_part( 'template-parts/shape', 'none');
get_template_part( 'template-parts/cta-newsletter-sub', 'none');
get_footer();
