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

	<main id="primary" class="site-main bg-black">


		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content-film', get_post_type() );


			// If comments are open or we have at least one comment, load up the comment template.
			if ( (comments_open() || get_comments_number()) && false) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>


        <div class="pb-12 bg-black">

        </div>


    </main><!-- #main -->

<?php
get_template_part( 'template-parts/shape', 'none');
get_template_part( 'template-parts/cta-newsletter-sub', 'none');
get_footer();
