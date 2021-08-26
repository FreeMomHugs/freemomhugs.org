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
                    <div class="col-4">
                        <!-- Image -->
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>"/>
                    </div>
                    <div class="col-8">

                        <!-- Heading -->

                        <?php
                            the_title( '<h1 class="display-4 font-weight-bolder text-left mb-0">', '</h1>' );
                        ?>

                        <?php
                        $author = wp_get_post_terms($post->ID, 'author');
                        $isbn13 = wp_get_post_terms($post->ID, 'isbn-13');
                        $isbn10 = wp_get_post_terms($post->ID, 'isbn-10');


                        ?>
                        <!-- TODO fix this for books by multiple authors -->
                        <h2 style="font-weight: 600; font-size: 1.75em;">by <?php echo $author[0]->name ?></h2>


                        <!-- Text -->
                        <p class="text-left text-black-80">
                            <?php
                                echo the_content();
                             ?>
                        </p>

                        <p class="display-5 mb-0"><span class="font-weight-bold">ISBN-13:</span> <?php echo $isbn13[0]->name ?></p>
                        <p class="display-5"><span class="font-weight-bold">ISBN-10:</span> <?php echo $isbn10[0]->name ?></p>
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
