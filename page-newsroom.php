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
        <!-- WELCOME
         ================================================== -->
        <section data-jarallax data-speed=".8" class="py-10 py-md-14 overlay overlay-black overlay-60 bg-cover jarallax" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-7 text-center">

                        <!-- Heading -->
                        <h1 class="display-2 font-weight-bold text-dark">
                            <?php echo get_the_title(); ?>
                        </h1>

                        <!-- Text -->
                        <p class="lead mb-0 text-white-75">
                            Latest news and information from the Free Mom Hugs team
                        </p>

                    </div>
                </div> <!-- / .row -->
            </div> <!-- / .container -->
        </section>

        <?php
        get_template_part( 'template-parts/newsroom-first-post', 'page' );
        ?>


	</main><!-- #main -->

<?php
get_template_part( 'template-parts/shape', 'none');
get_template_part( 'template-parts/cta-newsletter-sub', 'none');
get_footer();
