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
    <!-- SECTION
    ================================================== -->
    <section class="pt-6 pt-md-8">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-9 col-xl-8 pb-5">
                    <!-- Image -->
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="mb-1" style="width: 100%;"/>
                    <!-- Heading -->
                    <?php
                    $position = get_post_meta( get_the_ID(), 'Position', true);
                    if ( is_singular() ) :
                        the_title( '<h1 class="display-4 text-left font-weight-bolder mb-0">', '</h1>' );
                    else :
                        the_title( '<h2 class="display-4 text-left mb-0"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                    endif;

                    ?>
                    <h6 class="text-uppercase mt-0 pb-4 pt-0 text-black font-weight-bold"><?php echo $position?></h6>

                    <!-- Text -->
                    <?php
                    the_content();
                    ?>

                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>


</article><!-- #post-<?php the_ID(); ?> -->
