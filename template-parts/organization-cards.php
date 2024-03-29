<!-- ARTICLES
================================================== -->
<section class="pt-7 pt-md-10">
    <div class="container">
        <div class="row align-items-center mb-5">
            <?php
            $args = array(
                'post_type' => 'organization'

            );
            $loop = new WP_Query( $args );
            if ( $loop->have_posts() ) :

            /* Start the Loop */

            $numposts = 20;
            while ( $loop->have_posts() && $numposts > 0 ) : $loop->the_post();

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
                        <a class="card-img-top" href="<?php echo the_permalink();?>">
                            <img src="<?php echo the_post_thumbnail_url();?>" alt="..." class="card-img-top cover">
                        </a>

                        <!-- Shape -->
                        <div class="position-relative">
                            <div class="shape shape-fluid-x shape-bottom svg-shim text-white">
                                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor"/></svg>
                            </div>
                        </div>


                    <!-- Body -->
                    <a class="card-body" href="<?php echo the_permalink();?>">

                        <!-- Heading -->
                        <?php
                        the_title( '<h3 class="font-weight-bold">', '</h3>' );
                        ?>

                        <!-- Text -->
                        <p class="mb-0 text-muted">
                            <?php echo  get_the_excerpt(); ?>
                        </p>

                    </a>

                    <!-- Meta -->
                    <a class="card-meta mt-auto" href="#!">
                        <!-- Category -->
                        <h6 class="text-uppercase text-muted mr-2 mb-0">
                            <?php
                            $category = get_the_category();
                            $catName = $category[0]->cat_name;
                            echo $catName;
                            ?>
                        </h6>
                    </a>

                </div>

            </div>
                <?php
                        //get_template_part( 'template-parts/content', get_post_format() );

                        $numposts = $numposts-1;
                    endwhile;

                    else :

                        get_template_part( 'template-parts/content', 'none' );

                endif; ?>
        </div> <!-- / .row -->
    </div> <!-- / .container -->

</section>