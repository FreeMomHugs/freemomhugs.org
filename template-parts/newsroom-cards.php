<!-- ARTICLES
================================================== -->
<section class="pt-7 pt-md-10">
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col-12 col-md">

                <!-- Heading -->
                <h3 class="mb-0">
                    Latest Stories
                </h3>

                <!-- Text -->
                <p class="mb-0 text-muted">
                    Here’s what we've been up to recently.
                </p>

            </div>
        </div> <!-- / .row -->
        <div class="row">
            <?php
            $most_recent_post = wp_get_recent_posts(array(
	            'numberposts' => 1, // Number of recent posts thumbnails to display
	            'post_status' => 'publish', // Show only the published posts
	            'category_name' => 'newsroom'
            ));
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            $args = array(
	            'post__not_in' => array($most_recent_post[0]["ID"]),
                'post_type' => 'post',
                'posts_per_page' => 9,
                'paged' => $paged,
                'category_name' => 'newsroom',    //Selecting post category by name
                'orderby' => 'date',
                'order'   => 'DESC',

            );

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
                        <div class="card-img-top" href="<?php echo the_permalink();?>">
                            <img src="<?php echo the_post_thumbnail_url();?>" alt="..." class="card-img-top cover">
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

                        <!-- Text -->
<!--                        <p class="mb-0 text-muted">-->
<!--                            --><?php ////echo  get_the_excerpt(); ?>
<!--                        </p>-->

                    </a>

                    <!-- Meta -->
                    <a class="card-meta mt-auto" href="#!">

                        <!-- Divider -->
                        <hr class="card-meta-divider">

                        <!-- Avatar -->
<!--                        <div class="avatar avatar-sm mr-2">-->
<!--                            <img src="assets/img/avatars/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">-->
<!--                        </div>-->

                        <!-- Category -->
                        <h6 class="text-uppercase text-muted mr-2 mb-0 font-weight-bold">
                            <?php
                            $category = get_the_category();
                            $catName = $category[0]->cat_name;
                            echo $catName;
                            ?>
                        </h6>

                        <!-- Date -->
                        <p class="h6 text-uppercase text-muted mb-0 ml-auto font-weight-bold">
                            <time datetime="<?php echo get_the_date("Y-m-d");?>">
                                <?php
                                the_date('M d');
                                ?>
                            </time>
                        </p>

                    </a>

                </div>

            </div>
                <?php
                //get_template_part( 'template-parts/content', get_post_format() );


            endwhile;

            else :

                get_template_part( 'template-parts/content', 'none' );

            endif; ?>


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