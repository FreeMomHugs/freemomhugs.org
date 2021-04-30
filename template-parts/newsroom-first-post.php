<!-- ARTICLES
================================================== -->
<section class="pt-7 pt-md-10">
    <div class="container">
        <div class="row">
            <div class="col-12">
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
                <!-- Card -->
                <div class="card card-row shadow-light-lg mb-6 lift lift-lg">
                    <div class="row no-gutters">
                        <div class="col-12">

                            <!-- Badge -->
                            <span class="badge badge-pill badge-light badge-float badge-float-inside">
                    <span class="h6 text-uppercase font-weight-bold">
                        <?php
                            $category = get_the_category();
                            $catName = $category[0]->cat_name;
                            echo $catName;
                        ?>
                  </span>

                        </div>
                        <a class="col-12 col-md-6 order-md-2 bg-cover card-img-right" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>);" href="#!">

                            <!-- Image (placeholder) -->
                            <img src="assets/img/photos/photo-27.jpg" alt="..." class="img-fluid d-md-none invisible">

                            <!-- Shape -->
                            <div class="shape shape-left shape-fluid-y svg-shim text-white d-none d-md-block">
                                <svg viewBox="0 0 112 690" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h62.759v172C38.62 384 112 517 112 517v173H0V0z" fill="currentColor"/></svg>
                            </div>

                        </a>
                        <div class="col-12 col-md-6 order-md-1">

                            <!-- Body -->
                            <a class="card-body" href="<?php echo the_permalink();?>">

                                <!-- Heading -->
                                <!-- Text -->
                                <?php
                                the_title( '<h2 class="font-weight-bolder">', '</h2>' );
                                ?>

                                <!-- Text -->
                                <p class="mb-0 text-muted">
                                    <?php echo  get_the_excerpt(); ?>
                                </p>

                            </a>

                            <!-- Meta -->
                            <a class="card-meta" href="#!">

                                <!-- Divider -->
                                <hr class="card-meta-divider">

                                <!-- Avatar -->
<!--                                <div class="avatar avatar-sm mr-2">-->
<!--                                    <img src="assets/img/avatars/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">-->
<!--                                </div>-->

                                <!-- Author -->
<!--                                <h6 class="text-uppercase text-muted mr-2 mb-0">-->
<!--                                    --><?php //echo get_the_author();?>
<!--                                </h6>-->

                                <!-- Date -->
                                <p class="h6 text-uppercase text-muted mr-2 mb-0 font-weight-bold">
                                    <time datetime="<?php echo get_the_date("Y-m-d");?>">
                                        <?php
                                        the_date('M d');
                                        ?>
                                    </time>
                                </p>

                            </a>

                        </div>

                    </div> <!-- / .row -->
                </div>

            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section>
    <?php
    //get_template_part( 'template-parts/content', get_post_format() );

    $numposts = $numposts-1;
    endwhile;

    else :

        get_template_part( 'template-parts/content', 'none' );

    endif; ?>