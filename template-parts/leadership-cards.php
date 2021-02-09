<!-- CONTENT
================================================== -->
<section class="py-8 py-md-11 mt-n10 mt-md-n14">
    <div class="container">
        <!-- Heading -->
        <h1 class="pb-4">
            <?php echo $args['section-title']; ?>
        </h1>
        <div class="row" id="portfolio" data-isotope='{"layoutMode": "fitRows"}'>
            <?php
            $filter = array(
                'post_type' => 'post',
                'offset' => 0,
                'category_name' => $args['category_name'],    //Selecting post category by name
                'orderby' => 'date',
                'order'   => 'DESC',

            );
            $loop = new WP_Query( $filter );
            if ( $loop->have_posts() ) :

            /* Start the Loop */

            $numposts = 20;
            while ( $loop->have_posts() && $numposts > 0 ) : $loop->the_post();

            /*
             * Include the Post-Format-specific template for the content.
             * If you want to override this in a child theme, then include a file
             * called content-___.php (where ___ is the Post Format name) and that will be used instead.
             */
                $position = get_post_meta( get_the_ID(), 'Position', true);
            ?>

            <div class="col-12 col-md-4 product">

                <!-- Card -->
                <a class="card card-flush mb-7" href="<?php echo the_permalink();?>">

                    <!-- Image -->
                    <div class="card-zoom">
                        <img src="<?php echo the_post_thumbnail_url();?>" class="card-img-top rounded shadow-light-lg" href="<?php echo the_permalink();?>" alt="...">
                    </div>

                    <!-- Footer -->
                    <div class="card-footer">

                        <!-- Preheading -->
                        <h6 class="text-uppercase mb-1 text-muted"><?php echo $position?></h6>

                        <!-- Heading -->
                        <h4 class="mb-0"><?php the_title(); ?></h4>

                    </div>

                </a>

            </div>
                <?php
                //get_template_part( 'template-parts/content', get_post_format() );

                $numposts = $numposts-1;
            endwhile;

            endif ; ?>

        </div>
    </div>
</section>
