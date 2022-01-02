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
                            <h1 class="text-light" style="font-size: 5em; font-weight: 800;">What We Do</h1>

                        </div>

                        <!-- Heading -->
                        <p class="lead text-white">
                            Sara Cunningham began her journey of becoming an advocate of the LGBTQIA+ community through her relationship with her gay son. She founded  Free Mom Hugs in 2014 and since that time many parents and allies across the country joined the movement to accept, love and support the LGBTQIA community.
                            Free Mom Hugs became an established 501(c)(3) non profit organization in 2018 to fight for human rights for all.
                        </p>
                        <p class="lead text-white">
                            Free Mom Hugs became an established 501(c)(3) non profit organization in 2018 to fight for human rights for all.
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
                           Our Story
                        </h2>

                        <!-- Text -->
                        <p class="font-size-lg text-muted mb-7 mb-md-9">
                            The beginning of Free Mom Hugs is unlike most other organizations.
                        </p>

                    </div>
                </div> <!-- / .row -->
                <div class="row">
                    <div class="col-md-2">

                    </div>
                    <div class="col-12 col-md-8 text-center">
                        <!-- Text -->
                        <p class="font-size-lg text-muted mb-7 mb-md-9">
                            It started when founder Sara Cunningham self-published a memoir in 2014 about becoming an affirming Christian parent of a gay son. She later attended a pride parade with a homemade button proudly marked with “Free Mom Hugs” to offer hugs to the LGBTQ community.
                        </p>

                    </div>
                    <div class="col-md-2">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">

                    </div>
                    <div class="col-12 col-md-8 text-center">
                        <!-- Text -->
                        <p class="font-size-lg text-muted mb-7 mb-md-9">
                            Her acts grabbed attention and more people wanted to be involved.
                            In just over three years since becoming a 501(c)(3) non-profit organization, Free Mom Hugs has grown into a national movement with chapters in all 50 states and initiatives developing in other countries. Sara's story has been shared around the world and is the focus of an upcoming movie featuring Jamie Lee Curtis that will chronicle her life's journey.
                        </p>

                    </div>
                    <div class="col-md-2">
                    </div>
                </div>


    </main><!-- #main -->

<?php
get_template_part( 'template-parts/shape', 'none');
get_template_part( 'template-parts/cta-newsletter-sub', 'none');
get_footer();
