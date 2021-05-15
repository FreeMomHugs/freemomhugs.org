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
        <meta property="og:url"                content="<?php echo get_the_permalink(); ?>" />
        <meta property="og:type"               content="article" />
        <meta property="og:title"              content="<?php echo get_the_title(); ?>" />
        <meta property="og:description"        content="<?php echo  get_the_excerpt(); ?>" />
        <meta property="og:image"              content="<?php echo the_post_thumbnail_url(); ?>" />

		<?php
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
