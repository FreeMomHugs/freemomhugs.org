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
    <?php
    get_template_part( 'template-parts/newsroom-breadcrumb', 'none');
    ?>

	<main id="primary" class="site-main">
        <?php
        get_template_part( 'template-parts/newsroom-first-post', 'page' );
        ?>


	</main><!-- #main -->

<?php
get_template_part( 'template-parts/cta-newsletter-sub', 'none');
get_footer();
