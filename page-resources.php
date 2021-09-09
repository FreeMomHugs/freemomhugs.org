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

        <!-- CATEGORIES
================================================== -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12 mt-4">

                        <!-- Form -->
<!--                        <form class="rounded shadow mt-n6 mb-4">-->
<!--                            <div class="input-group input-group-lg">-->
<!---->
                               <!-- Prepend -->
<!--                                <div class="input-group-prepend">-->
<!--                  <span class="input-group-text border-0 pr-1">-->
<!--                    <i class="fe fe-search"></i>-->
<!--                  </span>-->
<!--                                </div>-->
<!---->
                                <!-- Input -->
<!--                                <input type="text" class="form-control border-0 px-1" aria-label="Search for your issue..." placeholder="Search for your issue...">-->
<!---->
                             <!-- Append -->
<!--                                <div class="input-group-append">-->
<!--                  <span class="input-group-text border-0 py-0 pl-1 pr-3">-->
<!--                    <button type="submit" class="btn btn-sm btn-primary">-->
<!--                      Search-->
<!--                    </button>-->
<!--                  </span>-->
<!--                                </div>-->
<!---->
<!--                            </div>-->
<!--                        </form>-->

                        <!-- Text -->

<!--                        <div class="row align-items-center mb-6 mb-md-8">-->
<!--                            <div class="col-auto">-->
<!---->
                                <!-- Heading -->
<!--                                <h6 class="font-weight-bold text-uppercase text-muted mb-0">-->
<!--                                    Common searches:-->
<!--                                </h6>-->
<!---->
<!--                            </div>-->
<!--                            <div class="col ml-n5">-->
<!---->
                                <!-- Text -->
<!--                                <p class="font-size-sm text-muted mb-0">-->
<!--                                    Redownload my theme, Request an invoice, Update my .zip-->
<!--                                </p>-->
<!---->
<!--                            </div>-->
<!--                        </div>-->
                        <!-- / .row -->

                    </div>
                </div> <!-- / .row -->
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">

                        <!-- Card -->
                        <a href="/book">
                            <div class="card card-border border-primary shadow-lg mb-6 mb-md-8 lift lift-lg">
                                <div class="card-body text-center">

                                    <!-- Icon -->
                                    <div class="icon-circle bg-primary text-white mb-5">
                                        <i class="fe fe-book"></i>
                                    </div>

                                    <!-- Heading -->
                                    <h4 class="font-weight-bold">
                                        Books
                                    </h4>

                                    <!-- Text -->
                                    <p class="text-gray-700 mb-5">
                                        Explore books on LGBTQ+ issues.
                                    </p>

                                    <!-- Badge -->
                                    <span class="badge badge-pill badge-dark-soft">
                                      <span class="h6 text-uppercase">
                                       <?php echo wp_count_posts( 'book')->publish; ?> entries
                                      </span>
                                    </span>

                                </div>
                            </div>
                        </a>

                    </div>
                    <div class="col-12 col-md-6 col-lg-4">

                        <!-- Card -->
                        <a href="/films">
                            <div class="card card-border border-success shadow-lg mb-6 mb-md-8 lift lift-lg">
                                <div class="card-body text-center">

                                    <!-- Icon -->
                                    <div class="icon-circle bg-success text-white mb-5">
                                        <i class="fe fe-film"></i>
                                    </div>

                                    <!-- Heading -->
                                    <h4 class="font-weight-bold">
                                        Movies and TV Shows
                                    </h4>

                                    <!-- Text -->
                                    <p class="text-gray-700 mb-5">
                                        Connecting with 3rd party apps to exchange data.
                                    </p>

                                    <!-- Badge -->
                                    <span class="badge badge-pill badge-dark-soft">
                                      <span class="h6 text-uppercase">
                                           <?php echo wp_count_posts( 'film')->publish; ?> entries
                                      </span>
                                    </span>
                                </div>
                            </div>
                        </a>

                        </div>
                    <div class="col-12 col-md-6 col-lg-4">

                        <a href="/organizations">

                        <!-- Card -->
                        <div class="card card-border border-warning shadow-lg mb-6 mb-md-8 lift lift-lg">
                            <div class="card-body text-center">

                                <!-- Icon -->
                                <div class="icon-circle bg-warning text-white mb-5">
                                    <i class="fe fe-globe"></i>
                                </div>

                                <!-- Heading -->
                                <h4 class="font-weight-bold">
                                    Organizations
                                </h4>

                                <!-- Text -->
                                <p class="text-gray-700 mb-5">
                                    Find other LGBTQ+ organizations
                                </p>

                                <!-- Badge -->
                                <span class="badge badge-pill badge-dark-soft">
                                  <span class="h6 text-uppercase">
                                        <?php echo wp_count_posts( 'organization')->publish; ?> entries
                                  </span>
                                </span>

                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">

                        <!-- Card -->
                        <div class="card card-border border-dark shadow-lg mb-6 mb-md-8 mb-lg-0 lift lift-lg">
                            <div class="card-body text-center">

                                <!-- Icon -->
                                <div class="icon-circle bg-dark text-white mb-5">
                                    <i class="fe fe-users"></i>
                                </div>

                                <!-- Heading -->
                                <h4 class="font-weight-bold">
                                    Organizations
                                </h4>

                                <!-- Text -->
                                <p class="text-gray-700 mb-5">
                                    Setting up and managing collections of users.
                                </p>

                                <!-- Badge -->
                                <span class="badge badge-pill badge-dark-soft">
                  <span class="h6 text-uppercase">
                    17 entries
                  </span>
                </span>

                            </div>
                        </div>

                    </div>
                    <div class="col-12 col-md-6 col-lg-4">

                        <!-- Card -->
                        <div class="card card-border border-primary-desat shadow-lg mb-6 mb-md-0 lift lift-lg">
                            <div class="card-body text-center">

                                <!-- Icon -->
                                <div class="icon-circle bg-primary-desat text-white mb-5">
                                    <i class="fe fe-users"></i>
                                </div>

                                <!-- Heading -->
                                <h4 class="font-weight-bold">
                                    Performance
                                </h4>

                                <!-- Text -->
                                <p class="text-gray-700 mb-5">
                                    Improving your system's speed and reliability.
                                </p>

                                <!-- Badge -->
                                <span class="badge badge-pill badge-dark-soft">
                  <span class="h6 text-uppercase">
                    7 entries
                  </span>
                </span>

                            </div>
                        </div>

                    </div>
                    <div class="col-12 col-md-6 col-lg-4">

                        <!-- Card -->
                        <div class="card card-border border-danger shadow-lg lift lift-lg">
                            <div class="card-body text-center">

                                <!-- Icon -->
                                <div class="icon-circle bg-danger text-white mb-5">
                                    <i class="fe fe-users"></i>
                                </div>

                                <!-- Heading -->
                                <h4 class="font-weight-bold">
                                    Customizing
                                </h4>

                                <!-- Text -->
                                <p class="text-gray-700 mb-5">
                                    Building custom modules on top of our platform.
                                </p>

                                <!-- Badge -->
                                <span class="badge badge-pill badge-dark-soft">
                  <span class="h6 text-uppercase">
                    14 entries
                  </span>
                </span>

                            </div>
                        </div>

                    </div>
                </div> <!-- / .row -->
            </div>
        </section>

        <!-- SHAPE
		================================================== -->
        <div class="position-relative">
            <div class="shape shape-bottom shape-fluid-x svg-shim text-dark">
                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor"/></svg>
            </div>
        </div>

        <!-- FOOTER
		================================================== -->
        <footer class="py-8 py-md-11 bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-4 col-lg-3">

                        <!-- Brand -->
                        <img src="./assets/img/brand.svg" alt="..." class="footer-brand img-fluid mb-2">

                        <!-- Text -->
                        <p class="text-gray-700 mb-2">
                            A better way to build.
                        </p>

                        <!-- Social -->
                        <ul class="list-unstyled list-inline list-social mb-6 mb-md-0">
                            <li class="list-inline-item list-social-item mr-3">
                                <a href="#!" class="text-decoration-none">
                                    <img src="./assets/img/icons/social/instagram.svg" class="list-social-icon" alt="...">
                                </a>
                            </li>
                            <li class="list-inline-item list-social-item mr-3">
                                <a href="#!" class="text-decoration-none">
                                    <img src="./assets/img/icons/social/facebook.svg" class="list-social-icon" alt="...">
                                </a>
                            </li>
                            <li class="list-inline-item list-social-item mr-3">
                                <a href="#!" class="text-decoration-none">
                                    <img src="./assets/img/icons/social/twitter.svg" class="list-social-icon" alt="...">
                                </a>
                            </li>
                            <li class="list-inline-item list-social-item">
                                <a href="#!" class="text-decoration-none">
                                    <img src="./assets/img/icons/social/pinterest.svg" class="list-social-icon" alt="...">
                                </a>
                            </li>
                        </ul>

                    </div>
                    <div class="col-6 col-md-4 col-lg-2">

                        <!-- Heading -->
                        <h6 class="font-weight-bold text-uppercase text-gray-700">
                            Products
                        </h6>

                        <!-- List -->
                        <ul class="list-unstyled text-muted mb-6 mb-md-8 mb-lg-0">
                            <li class="mb-3">
                                <a href="#!" class="text-reset">
                                    Page Builder
                                </a>
                            </li>
                            <li class="mb-3">
                                <a href="#!" class="text-reset">
                                    UI Kit
                                </a>
                            </li>
                            <li class="mb-3">
                                <a href="#!" class="text-reset">
                                    Styleguide
                                </a>
                            </li>
                            <li class="mb-3">
                                <a href="#!" class="text-reset">
                                    Documentation
                                </a>
                            </li>
                            <li>
                                <a href="#!" class="text-reset">
                                    Changelog
                                </a>
                            </li>
                        </ul>

                    </div>
                    <div class="col-6 col-md-4 col-lg-2">

                        <!-- Heading -->
                        <h6 class="font-weight-bold text-uppercase text-gray-700">
                            Services
                        </h6>

                        <!-- List -->
                        <ul class="list-unstyled text-muted mb-6 mb-md-8 mb-lg-0">
                            <li class="mb-3">
                                <a href="#!" class="text-reset">
                                    Documentation
                                </a>
                            </li>
                            <li class="mb-3">
                                <a href="#!" class="text-reset">
                                    Changelog
                                </a>
                            </li>
                            <li class="mb-3">
                                <a href="#!" class="text-reset">
                                    Pagebuilder
                                </a>
                            </li>
                            <li>
                                <a href="#!" class="text-reset">
                                    UI Kit
                                </a>
                            </li>
                        </ul>

                    </div>
                    <div class="col-6 col-md-4 offset-md-4 col-lg-2 offset-lg-0">

                        <!-- Heading -->
                        <h6 class="font-weight-bold text-uppercase text-gray-700">
                            Connect
                        </h6>

                        <!-- List -->
                        <ul class="list-unstyled text-muted mb-0">
                            <li class="mb-3">
                                <a href="#!" class="text-reset">
                                    Page Builder
                                </a>
                            </li>
                            <li class="mb-3">
                                <a href="#!" class="text-reset">
                                    UI Kit
                                </a>
                            </li>
                            <li class="mb-3">
                                <a href="#!" class="text-reset">
                                    Styleguide
                                </a>
                            </li>
                            <li class="mb-3">
                                <a href="#!" class="text-reset">
                                    Documentation
                                </a>
                            </li>
                            <li class="mb-3">
                                <a href="#!" class="text-reset">
                                    Changelog
                                </a>
                            </li>
                            <li class="mb-3">
                                <a href="#!" class="text-reset">
                                    Documentation
                                </a>
                            </li>
                            <li>
                                <a href="#!" class="text-reset">
                                    Changelog
                                </a>
                            </li>
                        </ul>

                    </div>
                    <div class="col-6 col-md-4 col-lg-2">

                        <!-- Heading -->
                        <h6 class="font-weight-bold text-uppercase text-gray-700">
                            Legal
                        </h6>

                        <!-- List -->
                        <ul class="list-unstyled text-muted mb-0">
                            <li class="mb-3">
                                <a href="#!" class="text-reset">
                                    Documentation
                                </a>
                            </li>
                            <li class="mb-3">
                                <a href="#!" class="text-reset">
                                    Changelog
                                </a>
                            </li>
                            <li>
                                <a href="#!" class="text-reset">
                                    Pagebuilder
                                </a>
                            </li>
                        </ul>

                    </div>
                </div> <!-- / .row -->
            </div> <!-- / .container -->
        </footer>



	</main><!-- #main -->

<?php
get_template_part( 'template-parts/shape', 'none');
get_template_part( 'template-parts/cta-newsletter-sub', 'none');
get_footer();
