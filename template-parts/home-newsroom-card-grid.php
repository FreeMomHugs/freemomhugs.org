<!-- Card Grid -->
<div class="container content-space-2 content-space-lg-3">
    <!-- Heading -->
    <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
        <h2 class="h1">Read our latest news</h2>
        <p></p>
    </div>
    <!-- End Heading -->

    <div class="row gx-3 mb-5 mb-md-9">
	    <?php
	    $args = array(
		    'post_type' => 'post',
		    'offset' => 0,
		    'category_name' => 'newsroom',    //Selecting post category by name
		    'orderby' => 'date',
		    'order'   => 'DESC',

	    );
	    $loop = new WP_Query( $args );
	    if ( $loop->have_posts() ) :

	    /* Start the Loop */

	    $numposts = 4;
	    while ( $loop->have_posts() && $numposts > 0 ) : $loop->the_post();

	    /*
		 * Include the Post-Format-specific template for the content.
		 * If you want to override this in a child theme, then include a file
		 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
		 */
	    ?>
        <div class="col-sm-6 col-lg-3 mb-3 mb-lg-0">
            <!-- Card -->
            <a class="card card-transition h-100" href="<?php echo the_permalink();?>">
                <!-- Image -->
	            <?php
	            $image_arr = wp_get_attachment_image_src(get_post_thumbnail_id($post_array->ID), 'medium');
	            $image_url = $image_arr[0]; // $image_url is your URL.
	            ?>
                <img src="<?php echo $image_url; ?>" alt="..." class="card-img-top">
                <div class="card-body">
                    <span class="card-subtitle text-primary">
                        <?php
                        $category = get_the_category();
                        $catName = $category[0]->cat_name;
                        echo $catName;
                        ?>
                    </span>
                    <h5 class="card-text lh-base"><?php echo  get_the_title(); ?></h5>
                </div>
            </a>
            <!-- End Card -->
        </div>
        <!-- End Col -->
		    <?php
		    //get_template_part( 'template-parts/content', get_post_format() );

		    $numposts = $numposts-1;
	    endwhile;


	    endif; ?>

    </div>
    <!-- End Row -->

    <!-- Card Info -->
    <div class="text-center">
        <div class="card card-info-link card-sm">
            <div class="card-body">
                Want to read more? <a class="card-link ms-2" href="#">Go here <span class="bi-chevron-right small ms-1"></span></a>
            </div>
        </div>
    </div>
    <!-- End Card Info -->
</div>
<!-- End Card Grid -->