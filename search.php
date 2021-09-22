<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WP-FreeMomHugs
 */

get_header();
global $query_string;
wp_parse_str( $query_string, $search_query );
$search = new WP_Query( $search_query );

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
				<form class="rounded shadow" action="/" method="GET">
					<div class="input-group input-group-lg">

						<!-- Prepend -->
						<div class="input-group-prepend">
                  <span class="input-group-text border-0 pr-1">
                    <i class="fe fe-search"></i>
                  </span>
						</div>

						<!-- Input -->
						<input name="s" type="text" class="form-control border-0 px-1" aria-label="Search our blog..." placeholder="Search our blog..." value="<?php echo get_search_query(); ?>">

						<!-- Append -->
						<div class="input-group-append">
                  <span class="input-group-text border-0 py-0 pl-1 pr-3">

                    <!-- Text -->
                    <span class="h6 text-uppercase text-muted d-none d-md-block mb-0 mr-5">
                      <?php
                          $total_results = $wp_query->found_posts;
                          printf( esc_html__( '%d Results', 'wp-freemomhugs' ), $total_results);
                      ?>
                    </span>

	                  <!-- Button -->
                    <button type="submit" class="btn btn-sm btn-primary">
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

<!-- ARTICLES
================================================== -->
        <?php if ( have_posts() ) : ?>
        <?php

            get_template_part( 'template-parts/newsroom-cards-search', 'search' );


            the_posts_navigation();

        else :

            get_template_part( 'template-parts/content', 'none' );

        endif;
        ?>


<!-- MORE
================================================== -->
<section class="py-7 py-md-10">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-md-9 col-lg-8 col-xl-7">

				<!-- Button -->
				<a href="#!" class="btn btn-block btn-outline-gray-300 d-flex align-items-center">
					<span class="mx-auto">Load more</span> <i class="fe fe-arrow-right"></i>
				</a>

			</div>
		</div> <!-- / .row -->
	</div> <!-- / .container -->
</section>

<?php
get_template_part( 'template-parts/shape', 'none');
get_template_part( 'template-parts/cta-newsletter-sub', 'none');
get_footer();
?>
