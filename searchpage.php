<?php

/**
 * Template Name: Search Page
 */


/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WP-FreeMomHugs
 */

$args = [
	"header_background_color" => "dark",
	"bar" => "foo",
];
get_header("" , $args );
?>
    <!-- BREADCRUMB
    ================================================== -->
    <nav class="bg-gray-200">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!-- Breadcrumb -->
                    <ol class="breadcrumb breadcrumb-scroll">
                        <li class="breadcrumb-item">
                            <a href="blog.html" class="text-gray-700">
                                Blog
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Search Results
                        </li>
                    </ol>

                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </nav>

    <!-- SEARCH
    ================================================== -->
    <section class="py-6">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!-- Form -->
                    <?php get_search_form(); ?>
                    <form class="rounded shadow">
                        <div class="input-group input-group-lg">

                            <!-- Prepend -->
                            <div class="input-group-prepend">
                  <span class="input-group-text border-0 pr-1">
                    <i class="fe fe-search"></i>
                  </span>
                            </div>

                            <!-- Input -->
                            <input type="text" class="form-control border-0 px-1" aria-label="Search our blog..." placeholder="Search our blog..." value="<?php echo get_search_query(); ?>">

                            <!-- Append -->
                            <div class="input-group-append">
                  <span class="input-group-text border-0 py-0 pl-1 pr-3">

                    <!-- Text -->
                      <?php
                      global $wp_query;
                      $total_results = $wp_query->found_posts;
                      ?>
                    <span class="h6 text-uppercase text-muted d-none d-md-block mb-0 mr-5">
                      <?php echo $total_results;?> results
                    </span>

                      <!-- Button -->
                    <button type="submit" class="btn btn-sm btn-primary" value="Search">
                      Search
                    </button>

                  </span>
                            </div>

                        </div>
                    </form>

                </div>
            </div> <!-- / .row -->
        </div>
    </section>
    <main id="primary" class="site-main">

    <?php
    get_template_part( 'template-parts/newsroom-first-post', 'page' );
    get_template_part( 'template-parts/newsroom-cards', 'page' );
    ?>


    </main><!-- #main -->

<?php
get_template_part( 'template-parts/cta-newsletter-sub', 'none');
get_footer();
