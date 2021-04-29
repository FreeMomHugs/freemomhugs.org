<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WP-FreeMomHugs
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
        <!-- HEADER
        ================================================== -->
        <section class="pt-8 pt-md-11">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-9 col-xl-8">

                        <!-- Heading -->
                        <?php
                        if ( is_singular() ) :
                            the_title( '<h1 class="display-4 text-center font-weight-bolder">', '</h1>' );
                        else :
                            the_title( '<h2 class="display-4 text-center"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                        endif;
                        ?>

                        <!-- Text -->
                        <p class="lead mb-7 text-center text-muted">
                            <?php echo get_the_excerpt(); ?>
                        </p>

                        <!-- Meta -->
                        <div class="row align-items-center py-5 border-top border-bottom">
                            <div class="col-auto">

                                <!-- Avatar -->
<!--                                <div class="avatar avatar-lg">-->
<!--                                    <img src="assets/img/avatars/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">-->
<!--                                </div>-->

                            </div>
                            <div class="col ml-n5">

                                <!-- Name -->
<!--                                <h6 class="text-uppercase mb-0">-->
<!--                                    --><?php //the_author(); ?>
<!--                                </h6>-->


                            </div>
                            <div class="col-auto">

                                <!-- Share -->
                                <span class="h6 text-uppercase text-muted d-none d-md-inline mr-4">
                  Share:
                </span>

                                <!-- Icons -->
                                <ul class="d-inline list-unstyled list-inline list-social">
                                    <li class="list-inline-item list-social-item mr-3">
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=#url" target="_blank" class="text-decoration-none">
                                            <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/social/facebook.svg" class="list-social-icon" alt="...">
                                        </a>
                                    </li>
                                    <li class="list-inline-item list-social-item mr-3">
                                        <a href="https://twitter.com/intent/tweet/?text=<?php echo get_the_title(); ?>&amp;url=<?php echo get_the_permalink(); ?>" target="_blank" aria-label="" class="text-decoration-none">
                                            <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/social/twitter.svg" class="list-social-icon" alt="...">
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </div>

                    </div>
                </div> <!-- / .row -->
                <!-- Image -->
                <img src="<?php echo get_the_post_thumbnail_url(); ?>"/>

            </div> <!-- / .container -->
        </section>
        <?php

		if ( 'post' === get_post_type() ) :
			?>
		<?php endif; ?>
	</header><!-- .entry-header -->

    <!-- SECTION
    ================================================== -->
    <section class="pt-6 pt-md-8">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-9 col-xl-8">
                    <!-- Text -->
                    <?php
                    the_content();
                    ?>

                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>


</article><!-- #post-<?php the_ID(); ?> -->
