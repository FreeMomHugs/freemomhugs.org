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
        <section data-jarallax data-speed=".8" class="py-10 py-md-14 overlay overlay-black overlay-60 bg-cover jarallax" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-7 text-center">

                        <!-- Heading -->
                        <h1 class="display-2 font-weight-bold text-white">
                            <?php echo get_the_title(); ?>
                        </h1>

                        <!-- Text -->
                        <p class="lead mb-0 text-white-75">
                            Keep up to date with what we're working on! Landkit is an ever evolving theme with regular updates.
                        </p>

                        <form>
                            <div class="input-group input-group-lg">
                                <!-- Input -->
                                <select class="custom-select" data-choices>
                                    <option>Option</option>
                                    <option>Another option</option>
                                    <option>Something else here</option>
                                </select>
                            </div>

                    </div>
                    </form>

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

        <!-- CATEGORIES
        ================================================== -->
        <section>
            <div class="container d-flex justify-content-center">
                <div class="row">
                    <div class="col-12">
                        <h2>Select a State</h2>
                        <!-- Form -->
                        <form>
                            <div class="input-group input-group-lg">



                                <!-- Input -->
                                <select class="custom-select" data-choices>
                                    <option>Option</option>
                                    <option>Another option</option>
                                    <option>Something else here</option>
                                </select>
                                </div>

                            </div>
                        </form>

                    </div>
                </div> <!-- / .row -->
            </div>
        </section>


    </main><!-- #main -->

<?php
get_sidebar();
get_footer();
