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
        <div class="row bg-dark">
            <div class="container">
                <div class="col-12 ml-0 pl-0">
                    <nav aria-label="breadcrumb" >
                        <ol class="breadcrumb breadcrumb-scroll">
                            <li class="breadcrumb-item">
                                <a class="text-white font-size-lg" href="#" style="font-weight: 600;">
                                    Resources
                                </a>
                            </li>
                            <li class="breadcrumb-item active text-white-70 font-size-lg" aria-current="page" style="font-weight: 600;">
	                            <?php echo get_the_title(); ?>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
            <div class="container">
                <div class="row text-left">
                    <div class="col-12">

                    </div>
                </div> <!-- / .row -->
            </div> <!-- / .container -->
        <?php
        get_template_part( 'template-parts/book-cards', 'page' );
        ?>


	</main><!-- #main -->

<?php
get_template_part( 'template-parts/shape', 'none');
get_template_part( 'template-parts/cta-newsletter-sub', 'none');
get_footer();
