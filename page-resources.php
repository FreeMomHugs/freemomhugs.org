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
        <section data-jarallax data-speed=".8" class="py-8 py-md-12 overlay jarallax" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center align-content-center">
                        <h6 class="display-5 font-weight-bold text-dark">
		                    Resources

                        </h6>
                        <!-- Heading -->
                        <h1 class="font-weight-bold text-dark display-3" style="line-height: 1.04167;">
		                    Connecting the LGBTQ+ community to educational resources.

                        </h1>


                    </div>
                </div> <!-- / .row -->
            </div> <!-- / .container -->
        </section>

            <div class="container">
                <div class="row mb-10">
                    <div class="col-12 col-lg-4 d-flex mb-6 mb-lg-0">
                        <a href="/books" class="text-decoration-none text-dark d-flex">
                            <!-- Card -->
                            <div class="card d-flex lift lift-lg" style="border-radius: 20px;background-color: #edf2fb;">

                                <!-- Image -->
                                <img src="https://static.freemomhugs.org/wp-content/uploads/2021/09/child-reading-circle-1024x683.jpeg" alt="..." >
                                <!-- Body -->
                                <div class="card-body">
                                    <h2 class="text-center display-6" style="font-weight: 600;">
                                        Books
                                    </h2>
                                    <p class="text-center font-weight-bold">
                                        Explore fiction, non-fiction, biographies, and childrens books on LGBTQ+ issues.
                                    </p>
                                </div>

                            </div>
                        </a>

                    </div>
                    <div class="col-12 col-lg-4 d-flex mb-6 mb-lg-0">
                        <a href="/organizations" class="text-decoration-none text-dark d-flex">
                            <!-- Card -->
                            <div class="card lift lift-lg" style="border-radius: 20px;background-color: #edf2fb;">

                                <!-- Image -->
                                <img src="https://static.freemomhugs.org/wp-content/uploads/2021/09/hrc-hq-1024x683.jpeg" alt="...">


                                <!-- Body -->
                                <div class="card-body">
                                    <h2 class="text-center display-6" style="font-weight: 600;">
                                        Organizations
                                    </h2>
                                    <p class="text-center font-weight-bold">
                                        Learn about other LGBTQ+ organizations
                                    </p>


                                </div>

                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-lg-4 d-flex mb-6 mb-lg-0">
                        <a href="/films" class="text-decoration-none text-dark d-flex">
                            <!-- Card -->
                            <div class="card d-flex lift lift-lg" style="border-radius: 20px;background-color: #edf2fb;">
                            <!-- Image -->
                            <img src="https://static.freemomhugs.org/wp-content/uploads/2021/09/movie-family-1024x683.jpeg" alt="...">


                            <!-- Body -->
                            <div class="card-body">
                                <h2 class="text-center display-6" style="font-weight: 600;">
                                    Films and TV Shows
                                </h2>
                                <p class="text-center font-weight-bold">
                                    Explore documentaries, movies, and TV shows.
                                </p>


                            </div>

                        </div>
                        </a>
                    </div>

                </div> <!-- / .row -->
            </div>

        <!-- SHAPE
		================================================== -->
        <div class="position-relative">
            <div class="shape shape-bottom shape-fluid-x svg-shim text-dark">
                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor"/></svg>
            </div>
        </div>

	</main><!-- #main -->

<?php
get_template_part( 'template-parts/shape', 'none');
get_template_part( 'template-parts/cta-newsletter-sub', 'none');
get_footer();
