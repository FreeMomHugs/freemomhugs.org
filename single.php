<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP-FreeMomHugs
 */

get_header();
?>

	<main id="primary" class="site-main">



		<?php
		$category_name = 'Newsroom';
		$category_to_check = get_term_by( 'name', $category_name, 'category' );
		if ( in_category( $category_name ) || post_is_in_descendant_category( $category_to_check->term_id ) ) {
			get_template_part( 'template-parts/newsroom-breadcrumb', 'none');
		}

		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );


			// If comments are open or we have at least one comment, load up the comment template.
			if ( (comments_open() || get_comments_number()) && false) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_template_part( 'template-parts/shape', 'none');
get_template_part( 'template-parts/cta-newsletter-sub', 'none');
get_footer();
