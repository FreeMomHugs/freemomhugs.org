<!-- ARTICLES
================================================== -->
<section class="py-7 py-md-10 bg-black">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <!-- Heading -->
                <h2 class="display-1 font-weight-bold text-center text-white mb-0">
                    Latest News
                </h2>

                <!-- Text -->
                <p class="mb-5 text-center text-white-70">
                    The latest from the Free Mom Hugs team.
                </p>

            </div>
        </div> <!-- / .row -->
        <div class="row">
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

                $numposts = 2;
                while ( $loop->have_posts() && $numposts > 0 ) : $loop->the_post();

                    /*
                     * Include the Post-Format-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                     */
                    ?>
                    <div class="col-12 col-md-6 d-flex"">

                        <!-- Card -->
                        <div class="card mb-6 mb-lg-0 shadow-light-lg lift lift-lg">

                            <!-- Image -->
                            <a class="card-img-top" href="<?php echo the_permalink();?>">

                                <!-- Image -->
                                <?php
                                    $image_arr = wp_get_attachment_image_src(get_post_thumbnail_id($post_array->ID), 'medium');
                                    $image_url = $image_arr[0]; // $image_url is your URL.
                                ?>
                                <img src="<?php echo $image_url; ?>" alt="..." class="card-img-top cover">

                                <!-- Shape -->
<!--                                <div class="position-relative">-->
<!--                                    <div class="shape shape-bottom shape-fluid-x svg-shim text-white">-->
<!--                                        <svg viewBox="0 0 2880 350" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M2160 0C1440 240 720 240 720 240H0v240h2880V0h-720z" fill="currentColor"/></svg>-->
<!--                                    </div>-->
<!--                                </div>-->

                            </a>

                            <!-- Body -->
                            <a class="card-body" href="<?php echo the_permalink();?>">

                                <!-- Heading -->
                                <?php
                                the_title( '<h3 class="font-weight-bolder">', '</h3>' );
                                ?>

                                <!-- Text -->
                                <p class="mb-0 text-muted">
                                    <?php echo  get_the_excerpt(); ?>
                                </p>

                            </a>

                            <!-- Meta -->
                            <a class="card-meta mt-auto" href="#!">

                                <!-- Divider -->
                                <hr class="card-meta-divider">

                                <!-- Avatar -->
<!--                                <div class="avatar avatar-sm mr-2">-->
<!--                                    <img src="assets/img/avatars/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">-->
<!--                                </div>-->

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

                    $numposts = $numposts-1;
                endwhile;

            else :

                get_template_part( 'template-parts/content', 'none' );

            endif; ?>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section>