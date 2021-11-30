<!-- Card Grid -->
<div class="container content-space-b-2 content-space-b-lg-3">
    <div class="row justify-content-md-between align-items-md-center mb-7">
        <div class="col-md-5 mb-5 mb-md-0">

        </div>
        <!-- End Col -->

        <!-- End Col -->
    </div>
    <!-- End Row -->

    <!-- Card -->
	<?php
	$args = array(
		'post_type' => 'post',
		'category_name' => 'newsroom',    //Selecting post category by name
		'orderby' => 'date',
		'order'   => 'DESC',

	);
	$loop = new WP_Query( $args );
	if ( $loop->have_posts() ) :

	/* Start the Loop */

	$numposts = 1;
	while ( $loop->have_posts() && $numposts > 0 ) : $loop->the_post();

	/*
	 * Include the Post-Format-specific template for the content.
	 * If you want to override this in a child theme, then include a file
	 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
	 */
	?>

    <div class="card card-stretched-vertical mb-10">
        <div class="row gx-0">

            <div class="col-lg-8">
                <div class="overflow-hidden">
                    <a href="<?php echo get_the_permalink(); ?>">
                        <img class="card-img" src="<?php echo the_post_thumbnail_url(); ?>" alt="Image Description">
                    </a>
                </div>
            </div>
            <!-- End Col -->


            <div class="col-lg-4">
                <!-- Card Body -->
                <div class="card-body">
                    <h3 class="card-title">
                        <a class="text-dark" href="./blog-article.html"><?php echo get_the_title();?></a>
                    </h3>

                    <p class="card-text">Google is constantly updating its consumer AI, Google Assistant, with new features.</p>

                    <!-- Card Footer -->
                    <div class="card-footer">
                        <div class="d-flex align-items-center">

                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-end">
                                    <p class="card-text">July 20</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Card Footer -->
                </div>
                <!-- End Card Body -->
            </div>

            <?php
                //get_template_part( 'template-parts/content', get_post_format() );

                $numposts = $numposts-1;
                endwhile;
                endif;
            ?>
            <!-- End Col -->
        </div>
        <!-- End Row -->
    </div>
    <!-- End Card -->

    <div class="row mb-7">
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
        <div class="col-sm-6 col-lg-4 mb-4">
            <!-- Card -->
            <a href="<?php echo the_permalink();?>">
                <div class="card h-100">
                <div class="shape-container">
                    <img class="card-img-top" src="<?php echo the_post_thumbnail_url();?>" alt="Image Description">

                </div>

                <!-- Card Body -->
                <div class="card-body">
                    <h3 class="card-title">
                        <a class="text-dark" href="<?php echo the_permalink();?>"><?php echo get_the_title();?></a>
                    </h3>

<!--                    <p class="card-text">--><?php //echo  get_the_excerpt(); ?><!--</p>-->
                </div>
                <!-- End Card Body -->

                    <!-- Date -->
                    <!-- Card Footer -->
                    <div class="card-footer">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <div class="d-flex">
                                    <!-- Category -->
                                </div>
                                <div class="d-flex justify-content-between">
                                    <p class="h6 text-uppercase text-muted font-weight-bold">
						                <?php
						                $category = get_the_category();
						                $catName = $category[0]->cat_name;
						                echo $catName;
						                ?>
                                    </p>
                                    <p class="h6 text-uppercase text-muted font-weight-bold">
                                        <time datetime="<?php echo get_the_date("Y-m-d");?>">
							                <?php
							                the_date('M d');
							                ?>
                                        </time>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            </a>
            <!-- End Card -->
        </div>
        <!-- End Col -->
        <?php
	    endwhile;


	    endif;
        ?>

    </div>
    <!-- End Row -->

    <!-- Pagination -->
    <nav aria-label="Page navigation">
	    <?php echo bootstrap_pagination($paged, $loop ->max_num_pages) ?>
    </nav>
    <!-- End Pagination -->
</div>
<!-- End Card Grid -->
