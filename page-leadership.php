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
        <section class="pt-8 pt-md-12 pb-12 pb-md-15">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8 text-center">

                        <!-- Heading -->
                        <h1 class="display-1 font-weight-bold">
                            <?php echo get_the_title(); ?>
                        </h1>

                        <!-- Text -->
                        <p class="lead text-secondary mb-4">
                            Learn about our team.
                        </p>

                    </div>
                </div> <!-- / .row -->
            </div> <!-- / .container -->
        </section>




        <?php
        $staff = array(
            'section-title' => 'Staff',
            'category_name' => 'Staff',
        );
        $officers = array(
            'section-title' => 'Board Officers',
            'category_name' => 'Officers',
        );
        $board = array(
            'section-title' => 'Board of Directors',
            'category_name' => 'Board of Directors',
        );
        get_template_part( 'template-parts/leadership-cards', 'null', $staff );
        get_template_part( 'template-parts/leadership-cards', 'null', $officers );
        get_template_part( 'template-parts/leadership-cards', 'null', $board );
        ?>


	</main><!-- #main -->

<?php
get_template_part( 'template-parts/shape', 'none');
get_footer();
