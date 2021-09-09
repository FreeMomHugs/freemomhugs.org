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
        <section class="pt-2 pt-md-11">
            <div class="container">
                <div class="row mb-0">
                </div>



                <div class="row">
                    <div class="col-12 text-white">

                        <!-- Heading -->



                        <?php
                        $director = wp_get_post_terms($post->ID, 'film-director');
                        $producer = wp_get_post_terms($post->ID, 'film-producer');
                        $isbn13 = wp_get_post_terms($post->ID, 'isbn-13');
                        $isbn10 = wp_get_post_terms($post->ID, 'isbn-10');


                        ?>



                        <!-- Text -->
                        <p class="text-left justify-content-center">
                            <?php
                                echo the_content();
                             ?>
                        </p>
	                    <?php
	                    the_title( '<h1 class="display-4 font-weight-bolder text-left mb-0">', '</h1>' );
	                    ?>
                        <h4 class="mb-0" style="font-weight: 600;">Directed by <?php echo $director[0]->name ?></h4>
                        <h5 style="font-weight: 600;">Produced by <?php echo $producer[0]->name ?></h5>

                    </div>
                </div> <!-- / .row -->

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

                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>


</article><!-- #post-<?php the_ID(); ?> -->
