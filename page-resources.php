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


$args = [
	"header_background_color" => "dark",
	"bar" => "foo",
];
get_header("" , $args );
?>



	<main id="primary" class="site-main">
        <div class="row mt-6">
            <br>
        </div>

        <!-- Card Grid -->
        <div class="container content-space-2 content-space-lg-3">
            <!-- Heading -->
            <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
                <span class="text-cap">Resources</span>
                <h2>Connecting the LGBTQ+ community to educational resources.</h2>
            </div>
            <!-- End Heading -->

            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 mb-5">
                <div class="col mb-5">
                    <!-- Card -->
                    <div class="card h-100">
                        <img class="card-img-top" src="https://static.freemomhugs.org/wp-content/uploads/2021/09/child-reading-circle-1024x683.jpeg" alt="Image Description">

                        <div class="card-body">
                            <p class="card-text">Amazon launched their enterprise platform and built a powerful user experience.</p>
                        </div>

                        <div class="card-footer pt-0">
                            <a class="card-link" href="/books">Explore books <i class="bi-chevron-right small ms-1"></i></a>
                        </div>
                    </div>
                    <!-- End Card -->
                </div>
                <!-- End Col -->

                <div class="col mb-5">
                    <!-- Card -->
                    <div class="card h-100">
                        <img class="card-img-top" src="https://static.freemomhugs.org/wp-content/uploads/2021/09/hrc-hq-1024x683.jpeg" alt="Image Description">

                        <div class="card-body">
                            <p class="card-text">Mapbox empowers marketers to create digital marketing dashboards easily and share them with their team.</p>
                        </div>

                        <div class="card-footer pt-0">
                            <a class="card-link" href="../page-customer-story.html"> Explore Organizations <i class="bi-chevron-right small ms-1"></i></a>
                        </div>
                    </div>
                    <!-- End Card -->
                </div>
                <!-- End Col -->

                <div class="col mb-5">
                    <!-- Card -->
                    <div class="card h-100">
                        <img class="card-img-top" src="https://static.freemomhugs.org/wp-content/uploads/2021/09/movie-family-1024x683.jpeg" alt="Image Description">
                        <div class="card-body">
                            <p class="card-text">Netflix's mission is to create a planet run by the sun. In order to achieve this goal, they needed to find a way to make solar simple.</p>
                        </div>

                        <div class="card-footer pt-0">
                            <a class="card-link" href="../page-customer-story.html">Explore Films <i class="bi-chevron-right small ms-1"></i></a>
                        </div>
                    </div>
                    <!-- End Card -->
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->

            <div class="text-center">
                <a class="btn btn-outline-primary" href="#">View all stories</a>
            </div>
        </div>
        <!-- End Card Grid -->

        <!-- SHAPE
		================================================== -->
        <div class="position-relative">
            <div class="shape shape-bottom shape-fluid-x svg-shim text-dark">
                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor"/></svg>
            </div>
        </div>

	</main><!-- #main -->

<?php
get_template_part( 'template-parts/cta-newsletter-sub', 'none');
get_footer();
