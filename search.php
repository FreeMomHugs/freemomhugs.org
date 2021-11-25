<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
			<div class="col-12 ml-4 ml-lg-0 pl-0 mt-2">

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



        else :

            get_template_part( 'template-parts/content', 'none' );

        endif;
        ?>



<?php
get_template_part( 'template-parts/cta-newsletter-sub', 'none');
get_footer();
?>
