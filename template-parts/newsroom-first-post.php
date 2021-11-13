<!-- Card Grid -->
<div class="container content-space-b-2 content-space-b-lg-3">
    <div class="row justify-content-md-between align-items-md-center mb-7">
        <div class="col-md-5 mb-5 mb-md-0">
            <!-- Tags -->
            <div class="d-md-flex align-items-md-center text-center text-md-start">
                <span class="d-block me-md-3 mb-2 mb-md-1">Tags:</span>
                <a class="btn btn-soft-secondary btn-xs rounded-pill m-1" href="javascript:;">Business</a>
                <a class="btn btn-soft-secondary btn-xs rounded-pill m-1" href="javascript:;">Health</a>
                <a class="btn btn-soft-secondary btn-xs rounded-pill m-1" href="javascript:;">Environment</a>
                <a class="btn btn-soft-secondary btn-xs rounded-pill m-1" href="javascript:;">Adventure</a>
            </div>
            <!-- End Tags -->
        </div>
        <!-- End Col -->

        <div class="col-md-5 col-lg-4">
            <form>
                <!-- Input Card -->
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search articles" aria-label="Search articles">
                    <button type="button" class="btn btn-primary"><i class="bi-search"></i></button>
                </div>
                <!-- End Input Card -->
            </form>
        </div>
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
                <div class="shape-container overflow-hidden">
                    <img class="card-img" src="<?php echo the_post_thumbnail_url(); ?>" alt="Image Description">

                    <!-- Shape -->
                    <div class="shape shape-end d-none d-lg-block zi-1">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 100.1 1920" height="101%">
                            <path fill="#fff" d="M0,1920c0,0,93.4-934.4,0-1920h100.1v1920H0z"/>
                        </svg>
                    </div>
                    <!-- End Shape -->

                    <!-- Shape -->
                    <div class="shape shape-bottom d-lg-none zi-1" style="margin-bottom: -.25rem">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1920 100.1">
                            <path fill="#fff" d="M0,0c0,0,934.4,93.4,1920,0v100.1H0L0,0z"></path>
                        </svg>
                    </div>
                    <!-- End Shape -->
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
                            <div class="flex-shrink-0 avatar-group avatar-group-xs">
                                <a class="avatar avatar-xs avatar-circle" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Aaron Larsson">
                                    <img class="avatar-img" src="./assets/img/160x160/img3.jpg" alt="Image Description">
                                </a>
                                <a class="avatar avatar-xs avatar-circle" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="John O'nolan">
                                    <img class="avatar-img" src="./assets/img/160x160/img4.jpg" alt="Image Description">
                                </a>
                            </div>

                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-end">
                                    <p class="card-text">July 15</p>
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
        <div class="col-sm-6 col-lg-4 mb-4">
            <!-- Card -->
            <div class="card h-100">
                <div class="shape-container">
                    <img class="card-img-top" src="./assets/img/500x280/img1.jpg" alt="Image Description">

                    <!-- Shape -->
                    <div class="shape shape-bottom zi-1" style="margin-bottom: -.25rem">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1920 100.1">
                            <path fill="#fff" d="M0,0c0,0,934.4,93.4,1920,0v100.1H0L0,0z"></path>
                        </svg>
                    </div>
                    <!-- End Shape -->
                </div>

                <!-- Card Body -->
                <div class="card-body">
                    <h3 class="card-title">
                        <a class="text-dark" href="./blog-article.html">Better is when everything works together</a>
                    </h3>

                    <p class="card-text">Learn how your Google devices can do more.</p>
                </div>
                <!-- End Card Body -->

                <!-- Card Footer -->
                <div class="card-footer">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0 avatar-group avatar-group-xs">
                            <a class="avatar avatar-xs avatar-circle" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Nataly Gaga">
                                <img class="avatar-img" src="./assets/img/160x160/img9.jpg" alt="Image Description">
                            </a>
                            <a class="avatar avatar-xs avatar-circle" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Emily Milda">
                                <img class="avatar-img" src="./assets/img/160x160/img8.jpg" alt="Image Description">
                            </a>
                        </div>

                        <div class="flex-grow-1">
                            <div class="d-flex justify-content-end">
                                <p class="card-text">July 15</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Card Footer -->
            </div>
            <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col-sm-6 col-lg-4 mb-4">
            <!-- Card -->
            <div class="card bg-dark h-100" style="background-image: url(./assets/svg/components/wave-pattern-light.svg);">
                <!-- Card Body -->
                <div class="card-body">
                    <div class="mb-5">
                        <span class="badge bg-primary">Featured</span>
                    </div>

                    <h3 class="card-title">
                        <a class="text-white" href="./blog-article.html">Announcing Front Tutorials: Master Adobe Ai - Part II</a>
                    </h3>

                    <p class="text-white-70">A new tutorial to make it easier to master Adobe Ai.</p>
                </div>
                <!-- End Card Body -->

                <!-- Card Footer -->
                <div class="card-footer">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0 avatar-group avatar-group-xs">
                            <a class="avatar avatar-xs avatar-circle" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Aaron Larsson">
                                <img class="avatar-img" src="./assets/img/160x160/img3.jpg" alt="Image Description">
                            </a>
                        </div>

                        <div class="flex-grow-1">
                            <div class="d-flex justify-content-end">
                                <p class="card-text text-white-70">July 15</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Card Footer -->
            </div>
            <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col-sm-6 col-lg-4 mb-4">
            <!-- Card -->
            <div class="card h-100">
                <div class="shape-container">
                    <img class="card-img-top" src="./assets/img/500x280/img3.jpg" alt="Image Description">

                    <!-- Shape -->
                    <div class="shape shape-bottom zi-1" style="margin-bottom: -.25rem">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1920 100.1">
                            <path fill="#fff" d="M0,0c0,0,934.4,93.4,1920,0v100.1H0L0,0z"></path>
                        </svg>
                    </div>
                    <!-- End Shape -->
                </div>

                <!-- Card Body -->
                <div class="card-body">
                    <h3 class="card-title">
                        <a class="text-dark" href="./blog-article.html">Should You Buy An Apple Pencil?</a>
                    </h3>

                    <p class="card-text">The Apple Pencil is an expensive device that comes with some interesting features, but not everyone needs them.</p>
                </div>
                <!-- End Card Body -->

                <!-- Card Footer -->
                <div class="card-footer">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0 avatar-group avatar-group-xs">
                            <a class="avatar avatar-xs avatar-circle" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Hanna Wolfe">
                                <img class="avatar-img" src="./assets/img/160x160/img10.jpg" alt="Image Description">
                            </a>
                            <a class="avatar avatar-xs avatar-circle" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="John O'nolan">
                                <img class="avatar-img" src="./assets/img/160x160/img6.jpg" alt="Image Description">
                            </a>
                        </div>

                        <div class="flex-grow-1">
                            <div class="d-flex justify-content-end">
                                <p class="card-text">July 15</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Card Footer -->
            </div>
            <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col-sm-6 col-lg-4 mb-4">
            <!-- Card -->
            <div class="card h-100">
                <div class="shape-container">
                    <img class="card-img-top" src="./assets/img/500x280/img4.jpg" alt="Image Description">

                    <!-- Shape -->
                    <div class="shape shape-bottom zi-1" style="margin-bottom: -.25rem">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1920 100.1">
                            <path fill="#fff" d="M0,0c0,0,934.4,93.4,1920,0v100.1H0L0,0z"></path>
                        </svg>
                    </div>
                    <!-- End Shape -->
                </div>

                <!-- Card Body -->
                <div class="card-body">
                    <h3 class="card-title">
                        <a class="text-dark" href="./blog-article.html">I don't want to switch from Android to iPhone because Apple's ecosystem is too good</a>
                    </h3>

                    <p class="card-text">Apple's ecosystem is second to none, and it comes with great functionality.</p>
                </div>
                <!-- End Card Body -->

                <!-- Card Footer -->
                <div class="card-footer">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0 avatar-group avatar-group-xs">
                            <a class="avatar avatar-xs avatar-circle" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Hanna Wolfe">
                                <img class="avatar-img" src="./assets/img/160x160/img10.jpg" alt="Image Description">
                            </a>
                            <a class="avatar avatar-xs avatar-circle" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="John O'nolan">
                                <img class="avatar-img" src="./assets/img/160x160/img6.jpg" alt="Image Description">
                            </a>
                        </div>

                        <div class="flex-grow-1">
                            <div class="d-flex justify-content-end">
                                <p class="card-text">July 15</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Card Footer -->
            </div>
            <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col-sm-6 col-lg-4 mb-4">
            <!-- Card -->
            <div class="card h-100">
                <div class="shape-container">
                    <img class="card-img-top" src="./assets/img/500x280/img5.jpg" alt="Image Description">

                    <!-- Shape -->
                    <div class="shape shape-bottom zi-1" style="margin-bottom: -.25rem">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1920 100.1">
                            <path fill="#fff" d="M0,0c0,0,934.4,93.4,1920,0v100.1H0L0,0z"></path>
                        </svg>
                    </div>
                    <!-- End Shape -->
                </div>

                <!-- Card Body -->
                <div class="card-body">
                    <h3 class="card-title">
                        <a class="text-dark" href="./blog-article.html">This Watch gym partnerships give you perks for working out</a>
                    </h3>

                    <p class="card-text">For a lot of people these days, watch matters.</p>
                </div>
                <!-- End Card Body -->

                <!-- Card Footer -->
                <div class="card-footer">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0 avatar-group avatar-group-xs">
                            <a class="avatar avatar-xs avatar-circle" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Nataly Gaga">
                                <img class="avatar-img" src="./assets/img/160x160/img9.jpg" alt="Image Description">
                            </a>
                        </div>

                        <div class="flex-grow-1">
                            <div class="d-flex justify-content-end">
                                <p class="card-text">July 15</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Card Footer -->
            </div>
            <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col-sm-6 col-lg-4 mb-4">
            <!-- Card -->
            <div class="card h-100">
                <div class="shape-container">
                    <img class="card-img-top" src="./assets/img/500x280/img6.jpg" alt="Image Description">

                    <!-- Shape -->
                    <div class="shape shape-bottom zi-1" style="margin-bottom: -.25rem">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1920 100.1">
                            <path fill="#fff" d="M0,0c0,0,934.4,93.4,1920,0v100.1H0L0,0z"></path>
                        </svg>
                    </div>
                    <!-- End Shape -->
                </div>

                <!-- Card Body -->
                <div class="card-body">
                    <h3 class="card-title">
                        <a class="text-dark" href="./blog-article.html">Announcing Front Strategies: Ready-to-use rules</a>
                    </h3>

                    <p class="card-text">Today we're launching a new product to make it easier to get started with Front.</p>
                </div>
                <!-- End Card Body -->

                <!-- Card Footer -->
                <div class="card-footer">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0 avatar-group avatar-group-xs">
                            <a class="avatar avatar-xs avatar-circle" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Hanna Wolfe">
                                <img class="avatar-img" src="./assets/img/160x160/img10.jpg" alt="Image Description">
                            </a>
                        </div>

                        <div class="flex-grow-1">
                            <div class="d-flex justify-content-end">
                                <p class="card-text">July 15</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Card Footer -->
            </div>
            <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col-sm-6 col-lg-4 mb-4">
            <!-- Card -->
            <div class="card h-100">
                <div class="shape-container">
                    <img class="card-img-top" src="./assets/img/500x280/img7.jpg" alt="Image Description">

                    <!-- Shape -->
                    <div class="shape shape-bottom zi-1" style="margin-bottom: -.25rem">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1920 100.1">
                            <path fill="#fff" d="M0,0c0,0,934.4,93.4,1920,0v100.1H0L0,0z"></path>
                        </svg>
                    </div>
                    <!-- End Shape -->
                </div>

                <!-- Card Body -->
                <div class="card-body">
                    <h3 class="card-title">
                        <a class="text-dark" href="./blog-article.html">Drone Company PrecisionHawk Names New CEO</a>
                    </h3>

                    <p class="card-text">Drone company PrecisionHawk has survived 10 years in the industry.</p>
                </div>
                <!-- End Card Body -->

                <!-- Card Footer -->
                <div class="card-footer">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0 avatar-group avatar-group-xs">
                            <a class="avatar avatar-xs avatar-circle" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Aaron Larsson">
                                <img class="avatar-img" src="./assets/img/160x160/img3.jpg" alt="Image Description">
                            </a>
                            <a class="avatar avatar-xs avatar-circle" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Hanna Wolfe">
                                <img class="avatar-img" src="./assets/img/160x160/img10.jpg" alt="Image Description">
                            </a>
                        </div>

                        <div class="flex-grow-1">
                            <div class="d-flex justify-content-end">
                                <p class="card-text">July 15</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Card Footer -->
            </div>
            <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col-sm-6 col-lg-4 mb-4">
            <!-- Card -->
            <div class="card h-100">
                <div class="shape-container">
                    <img class="card-img-top" src="./assets/img/500x280/img8.jpg" alt="Image Description">

                    <!-- Shape -->
                    <div class="shape shape-bottom zi-1" style="margin-bottom: -.25rem">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1920 100.1">
                            <path fill="#fff" d="M0,0c0,0,934.4,93.4,1920,0v100.1H0L0,0z"></path>
                        </svg>
                    </div>
                    <!-- End Shape -->
                </div>

                <!-- Card Body -->
                <div class="card-body">
                    <h3 class="card-title">
                        <a class="text-dark" href="./blog-article.html">Should Product Owners think like entrepreneurs?</a>
                    </h3>

                    <p class="card-text">Front is a financial technology company. We build products. We do it fast and we do it well.</p>
                </div>
                <!-- End Card Body -->

                <!-- Card Footer -->
                <div class="card-footer">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0 avatar-group avatar-group-xs">
                            <a class="avatar avatar-xs avatar-circle" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Emily Milda">
                                <img class="avatar-img" src="./assets/img/160x160/img7.jpg" alt="Image Description">
                            </a>
                            <a class="avatar avatar-xs avatar-circle" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="John O'nolan">
                                <img class="avatar-img" src="./assets/img/160x160/img4.jpg" alt="Image Description">
                            </a>
                        </div>

                        <div class="flex-grow-1">
                            <div class="d-flex justify-content-end">
                                <p class="card-text">July 15</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Card Footer -->
            </div>
            <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col-sm-6 col-lg-4 mb-4">
            <!-- Card -->
            <div class="card h-100">
                <div class="shape-container">
                    <img class="card-img-top" src="./assets/img/500x280/img2.jpg" alt="Image Description">

                    <!-- Shape -->
                    <div class="shape shape-bottom zi-1" style="margin-bottom: -.25rem">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1920 100.1">
                            <path fill="#fff" d="M0,0c0,0,934.4,93.4,1920,0v100.1H0L0,0z"></path>
                        </svg>
                    </div>
                    <!-- End Shape -->
                </div>

                <!-- Card Body -->
                <div class="card-body">
                    <h3 class="card-title">
                        <a class="text-dark" href="./blog-article.html">What is KYC and why do we need it</a>
                    </h3>

                    <p class="card-text">You've read about our app, it came up on your news feed and your mate sent you an invite to sign up.</p>
                </div>
                <!-- End Card Body -->

                <!-- Card Footer -->
                <div class="card-footer">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0 avatar-group avatar-group-xs">
                            <a class="avatar avatar-xs avatar-circle" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Emily Milda">
                                <img class="avatar-img" src="./assets/img/160x160/img7.jpg" alt="Image Description">
                            </a>
                        </div>

                        <div class="flex-grow-1">
                            <div class="d-flex justify-content-end">
                                <p class="card-text">July 15</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Card Footer -->
            </div>
            <!-- End Card -->
        </div>
        <!-- End Col -->
    </div>
    <!-- End Row -->

    <!-- Pagination -->
    <nav aria-label="Page navigation">
        <ul class="pagination justify-content-end">
            <li class="page-item disabled">
                <a class="page-link" href="#" aria-label="Previous">
              <span aria-hidden="true">
                <i class="bi-chevron-double-left small"></i>
              </span>
                </a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
            <li class="page-item"><a class="page-link" href="#">5</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
              <span aria-hidden="true">
                <i class="bi-chevron-double-right small"></i>
              </span>
                </a>
            </li>
        </ul>
    </nav>
    <!-- End Pagination -->
</div>
<!-- End Card Grid -->

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
                        <a class="col-12 col-md-6 order-md-2 bg-cover card-img-right" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>); min-height:30vh;" href="<?php echo the_permalink();?>">

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