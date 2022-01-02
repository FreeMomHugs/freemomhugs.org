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
        <section class="overlay overlay-dark overlay-40" data-jarallax data-speed=".8" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">
            <div class="container d-flex flex-column">
                <div class="row align-items-center justify-content-center min-vh-100 py-8 py-md-11">
                    <div class="col-12 col-md-8 col-lg-10 mt-auto text-center">

                        <!-- Brand -->
                        <div class="img-fluid text-white svg-shim mb-6">
                            <h1 class="text-light" style="font-size: 5em; font-weight: 800;">Donate</h1>

                        </div>

                        <!-- Heading -->
                        <p class="lead text-white">
                        Help us provide visibility, education and conversation for the LGBTQ+ community and support our work to advocate for the LGBTQ+ community.
                        </p>
                        <p class="lead text-white">
                        At Free Mom Hugs, we believe in the power of education and visibility. We work tirelessly throughout the year to provide programs and services that advocate for full equality and inclusion of the LGBTQ community. Will you join us today? Your support will help us:
                        <ul class="text-white">
                            <li>Educate, train and support chapter volunteers in all 50 states</li>
                            <li>Expand our reach to international locations around the world</li>
                            <li>Provide education for equality and inclusion for various entities</li>    
                            <li>Create programs that provide visibility and celebration for the LGBTQ community</li>
                        </ul>
                        </p>

                    </div>
                    <div class="col-12 mt-auto text-center">

                        <!-- Button -->
                        <a class="btn btn-white btn-rounded-circle shadow" data-toggle="smooth-scroll" data-offset="0" href="#sectionTwo">
                            <i class="fe fe-arrow-down"></i>
                        </a>

                    </div>
                </div> <!-- / .row -->
            </div> <!-- / .container -->
        </section>

            <?php
            $paralax1 = array(
                'class' => 'featured-home',
                'title' => 'Newsroom',
                'menu'  => 'newsroom',
                'title-blurb' => 'Education',
                'button-text' => 'Learn More',
                'background-url' => '',
            );
            get_template_part( 'template-parts/paralax-section', 'none' , $paralax1);
            ?>

        <!-- ABOUT
================================================== -->
        <section class="py-8 py-md-11 bg-gray-200">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 text-center">

                        <!-- Heading -->
                        <h2 class="font-weight-bold">
                            Want to pay by check?
                        </h2>

                        <!-- Text -->
                        <p class="font-size-lg text-muted">
                            All donations paid by check can be mailed to:
                        </p>
                        <p class="font-size-lg text-muted mb-7 mb-md-9">
                            PO Box 12731 Oklahoma City, OK 73157
                        </p>

                    </div>
                


    </main><!-- #main -->

<?php
get_template_part( 'template-parts/shape', 'none');
get_template_part( 'template-parts/cta-newsletter-sub', 'none');
get_footer();
