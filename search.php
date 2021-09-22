<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WP-FreeMomHugs
 */

get_header();
?>

<!-- BREADCRUMB
================================================== -->
<nav class="bg-gray-200">
	<div class="container">
		<div class="row">
			<div class="col-12 ml-4 ml-lg-0 pl-0">

				<!-- Breadcrumb -->
				<ol class="breadcrumb breadcrumb-scroll">
					<li class="breadcrumb-item">
						<a href="/newsroom" class="text-dark font-size-lg" style="font-weight: 600;">
							Newsroom
						</a>
					</li>
					<li class="breadcrumb-item active text-dark font-size-lg" aria-current="page" style="font-weight: 600;">
                        <a href="" class="text-dark font-size-lg" style="font-weight: 600;">
                            Search Results
                        </a>
					</li>
				</ol>

			</div>
		</div> <!-- / .row -->
	</div> <!-- / .container -->
</nav>



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
