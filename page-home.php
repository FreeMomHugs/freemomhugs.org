<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WP-FreeMomHugs
 */

get_header();
?>

    <script>
        window.fwSettings={
            'widget_id':43000001812
        };
        !function(){if("function"!=typeof window.FreshworksWidget){var n=function(){n.q.push(arguments)};n.q=[],window.FreshworksWidget=n}}()
    </script>
    <script type='text/javascript' src='https://widget.freshworks.com/widgets/43000001812.js' async defer></script>

	<main id="primary" class="site-main">

        <?php
        $date_now = date("Y-m-d"); // this format is string comparable

       if ($date_now < '2021-12-03') {
	        get_template_part( 'template-parts/world-aids-day');
        } else {
	        get_template_part( 'template-parts/one-hug-at-a-time-header');
        }

        if ($date_now > '2021-08-04' && $date_now < '2021-10-02' ) {
            get_template_part( 'template-parts/pride-season');
        }

        ?>




        <?php
            $paralax1 = array(
                'class' => 'featured-home',
                'title' => 'Newsroom',
                'menu'  => 'newsroom',
                'title-blurb' => 'Education',
                'button-text' => 'Learn More',
                'background-url' => '',
            );
            get_template_part( 'template-parts/mission-statement', 'none' , $paralax1);
//            get_template_part( 'template-parts/front-page-help', 'none');
        ?>

		<?php
		get_template_part( 'template-parts/home-newsroom-cards', 'none' );
		?>

        <!-- TOGETHER
        ================================================== -->
        <section>
            <div class="container d-flex flex-column">
                <div class="row align-items-center justify-content-between min-vh-100 py-8 py-md-11">
                    <div class="col-12 col-md-6 col-lg-5">

                        <!-- Badge -->
                        <span class="badge badge-pill badge-primary-soft mb-3">
              <span class="h6 text-uppercase">Support</span>
            </span>

                        <!-- Heading -->
                        <h2>
                            From the founder: <br>
                            <span class="text-primary">Enough is Enough</span>.
                        </h2>

                        <!-- Text -->
                        <p class="font-size-lg text-gray-700 mb-6">
                            I’m a Christian mom with a gay kid living in Oklahoma saying enough is enough. If I don’t fight for my son (and his rights) like my hair is on fire, then who will? It’s time we celebrate our LGBTQ+ children. And I won’t stop until I no longer hear horror stories from the LGBTQ+ community and their mothers.
                        </p>

                    </div>
                    <div class="col-12 col-md-6">

                        <!-- Images -->
                        <div class="row">
                            <div class="col-10">
                                <img src="https://static.freemomhugs.org/wp-content/uploads/2020/03/30004403/SaraCunningham_Headshot.jpg" alt="..." class="img-fluid mb-8 rounded">
                            </div> <!-- / .row -->

                        </div>
                </div>
            </div>
        </section>


	</main><!-- #main -->

<?php
get_template_part( 'template-parts/shape', 'none');
get_template_part( 'template-parts/cta-newsletter-sub', 'none');
get_footer();
