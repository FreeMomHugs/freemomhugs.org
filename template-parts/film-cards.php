<!-- ARTICLES
================================================== -->
<section class="pt-8">
    <div class="container">
        <div class="row">
            <?php
//            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
//            $args = array(
//                'post_type' => 'book',
//                'offset' => 0,
//                'posts_per_page' => 9,
//                'paged' => $paged,
////                'category_name' => 'newsroom',    //Selecting post category by name
//
//            );

            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

            $args = array(
	            'post_type'=>'film', // Your post type name
	            'posts_per_page' => 9,
	            'paged' => $paged,
            );
            $args['paged'] = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
            $loop = new WP_Query( $args );
            if ( $loop->have_posts() ) :

            /* Start the Loop */

            while ( $loop->have_posts() ) : $loop->the_post();

            /*
             * Include the Post-Format-specific template for the content.
             * If you want to override this in a child theme, then include a file
             * called content-___.php (where ___ is the Post Format name) and that will be used instead.
             */
            ?>
            <div class="col-12 col-md-6 col-lg-4 d-flex pb-4">

                <!-- Card -->
                <div class="card mb-6 mb-lg-0 shadow-light-lg lift lift-lg">

                        <!-- Image -->
                    <a href="<?php echo the_permalink();?>">
                        <div href="<?php echo the_permalink();?>">
                            <img src="<?php echo the_post_thumbnail_url();?>" alt="..." class="cover">
                        </div>

                        <div class="position-relative">
                            <div class="shape shape-fluid-x shape-bottom svg-shim text-white">
                                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor"/></svg>
                            </div>
                        </div>
                    </a>

                    <!-- Body -->
                    <a class="card-body" href="<?php echo the_permalink();?>">

                        <!-- Heading -->
                        <?php
                        the_title( '<h3 class="font-weight-bolder">', '</h3>' );
                        ?>
                        <p class="h6 text-uppercase text-muted mb-0 ml-auto font-weight-bold">


                        </p>

                    </a>

                    <!-- Meta -->
                    <a class="card-meta mt-auto" href="#!">

                        <!-- Divider -->
                        <hr class="card-meta-divider">


                        <!-- Genre -->
                        <h6 class="text-uppercase text-muted mr-2 mb-0 font-weight-bold">
			                <?php
			                $category = get_the_category();
			                $catName = $category[0]->cat_name;
			                echo $catName;
			                ?>
                        </h6>

                        <!-- Date -->
                        <p class="h6 text-uppercase text-muted mb-0 ml-auto font-weight-bold">
	                        <?php $author = wp_get_post_terms($post->ID, 'author'); ?>
	                        <?php echo $author[0]->name;?>
                        </p>

                    </a>




                </div>

            </div>
                <?php
                    endwhile;
                    endif;
                ?>


        </div> <!-- / .row -->
    </div> <!-- / .container -->
    <!-- Pagination -->
    <div class="container">
        <div class="row">
            <div class="col-12 pb-6 pt-4">
				<?php echo bootstrap_pagination($paged, $loop ->max_num_pages) ?>
            </div>
        </div>
    </div>
</section>