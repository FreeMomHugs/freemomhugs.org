<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
        <section class="mt-n10">
            <div class="container d-flex flex-column">
                <div class="row align-items-center justify-content-center min-vh-100 py-8 py-md-11">
                    <div class="col-12 col-md-8 col-lg-7 mt-auto text-center">

                        <!-- Heading -->
                        <h1 class="display-1 mb-0 font-weight-bold">
                            We <span class="text-primary">Design & Build</span> Products For All.
                        </h1>

                    </div>
                    <div class="col-12 mt-auto text-center">

                        <!-- Button -->
                        <a class="btn btn-primary btn-rounded-circle shadow" data-toggle="smooth-scroll" data-offset="0" href="#sectionTwo">
                            <i class="fe fe-arrow-down"></i>
                        </a>

                    </div>
                </div> <!-- / .row -->
            </div> <!-- / .container -->
        </section>

        <!-- IMAGE
         ================================================== -->
        <a class="d-block text-decoration-none" id="sectionTwo" data-jarallax data-speed=".8" href="portfolio-case-study.html" style="background-image: url(assets/img/portfolio/portfolio-cover-4.jpg)">
            <div class="container d-flex flex-column">
                <div class="row align-items-center min-vh-100 py-8 py-md-11">
                    <div class="col-12">

                        <!-- Brand -->
                        <div class="img-fluid text-white svg-shim mx-auto mb-5" style="max-width: 320px;">
                            <svg viewBox="0 0 222 52" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M193.541 43.309c-9.826 0-18.127-8.375-18.127-18.287 0-9.913 8.301-18.287 18.127-18.287 9.826 0 18.127 8.374 18.127 18.287h-.001c0 3.76-1.197 7.297-3.216 10.242l-5.522-5.522-4.591 4.591 5.573 5.574c-2.961 2.131-6.548 3.402-10.37 3.402zm25.704 2.749l-5.518-5.518c3.44-4.226 5.477-9.598 5.477-15.518 0-13.946-11.273-24.87-25.663-24.87-14.391 0-25.664 10.924-25.664 24.87 0 13.945 11.273 24.869 25.664 24.869 5.854 0 11.191-1.808 15.464-4.891l5.649 5.649 4.591-4.591zM1.121 48.858V1.182h7.061v41.094H36.98v6.582H1.12zM121.159 26.569h14.874c7.758 0 10.51-5.064 10.51-9.402 0-4.337-2.752-9.401-10.51-9.401h-14.874v18.803zm23.303 22.29L134.07 33.152h-12.911v15.705h-7.061V1.182h22.649c10.083 0 16.858 6.423 16.858 15.985 0 6.435-4.282 11.92-10.908 13.97l-1.403.435 12.117 17.286h-8.949zM60.404 48.858l14.831-36.43 14.7 36.43h7.874L79.089 4.661a5.703 5.703 0 00-5.252-3.48H58.769v1.234a4.875 4.875 0 004.875 4.874h7.113L52.592 48.86h7.812z" fill="currentColor"/></svg>
                        </div>

                        <!-- Subheading -->
                        <p class="mb-0 font-weight-bold text-center text-uppercase text-white letter-spacing-lg">
                            Bottle Redesigned
                        </p>

                    </div>
                </div>
            </div>
        </a>


        <!-- TOGETHER
        ================================================== -->
        <section>
            <div class="container d-flex flex-column">
                <div class="row align-items-center justify-content-between min-vh-100 py-8 py-md-11">
                    <div class="col-12 col-md-6 col-lg-5">

                        <!-- Badge -->
                        <span class="badge badge-pill badge-primary-soft mb-3">
              <span class="h6 text-uppercase">Support</span>
            </span>

                        <!-- Heading -->
                        <h2>
                            Our legacy will be working <br>
                            <span class="text-primary">with people we love</span>.
                        </h2>

                        <!-- Text -->
                        <p class="font-size-lg text-gray-700 mb-6">
                            Are you doing good for the world? Do you care about the future of technology and the internet? Are you the type of person who “wastes” hundreds of hours of side projects and experiments? We probably love you.
                        </p>

                        <!-- Stats -->
                        <div class="d-flex mb-8 mb-md-0">
                            <div class="pr-5">
                                <h3 class="mb-0">
                                    <span data-toggle="countup" data-from="0" data-to="50" data-aos data-aos-id="countup:in">0</span>%
                                </h3>
                                <p class="text-gray-700 mb-0">
                                    Humanitarian
                                </p>
                            </div>
                            <div class="border-left border-gray-300"></div>
                            <div class="px-5">
                                <h3 class="mb-0">
                                    <span data-toggle="countup" data-from="0" data-to="100" data-aos data-aos-id="countup:in">0</span>%
                                </h3>
                                <p class="text-gray-700 mb-0">
                                    Satisfaction
                                </p>
                            </div>
                            <div class="border-left border-gray-300"></div>
                            <div class="pl-5">
                                <h3 class="mb-0">
                                    <span data-toggle="countup" data-from="0" data-to="67" data-aos data-aos-id="countup:in">0</span>%
                                </h3>
                                <p class="text-gray-700 mb-0">
                                    Remote work
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="col-12 col-md-6">

                        <!-- Images -->
                        <div class="row">
                            <div class="col-6 mt-8 mr-n5" data-aos="fade-up">

                                <img src="assets/img/photos/photo-10.jpg" alt="..." class="img-fluid mb-4 rounded">

                                <img src="assets/img/photos/photo-12.jpg" alt="..." class="img-fluid rounded">

                            </div>
                            <div class="col-6" data-aos="fade-up" data-aos-delay="100">

                                <img src="assets/img/photos/photo-9.jpg" alt="..." class="img-fluid mb-4 rounded">

                                <img src="assets/img/photos/photo-11.jpg" alt="..." class="img-fluid rounded">

                            </div>
                        </div> <!-- / .row -->

                    </div>
                </div>
            </div>
        </section>
        <?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
