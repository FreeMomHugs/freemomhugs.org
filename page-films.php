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
            <?php
                get_template_part( 'template-parts/resources-breadcrumb', 'page' );
            ?>
            <div class="container">
                <div class="row text-left">
                    <div class="col-12">

                    </div>
                </div> <!-- / .row -->
            </div> <!-- / .container -->
        <?php
        get_template_part( 'template-parts/film-cards', 'page' );
        ?>


	</main><!-- #main -->

<?php
get_template_part( 'template-parts/shape', 'none');
get_template_part( 'template-parts/cta-newsletter-sub', 'none');
get_footer();
