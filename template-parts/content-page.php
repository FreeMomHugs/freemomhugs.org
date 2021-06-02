<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WP-FreeMomHugs
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <section class="pt-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-9 col-xl-8">
<!--                    <header class="entry-header">-->
<!--                        --><?php //the_title( '<h1 class="entry-title">', '</h1>' ); ?>
<!--                    </header>
-->
                    <div class="entry-content">
                        <?php
                        the_content();

                        wp_link_pages(
                            array(
                                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wp-freemomhugs' ),
                                'after'  => '</div>',
                            )
                        );
                        ?>
                    </div><!-- .entry-content -->
                </div>
            </div>
        </div>
    </section>

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'wp-freemomhugs' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
