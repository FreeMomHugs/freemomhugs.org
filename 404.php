<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WP-FreeMomHugs
 */

$args = [
	"header_background_color" => "dark",
	"bar" => "foo",
];
get_header("" , $args );
?>
    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main">
        <!-- Content -->
        <div class="container text-center">
            <div class="mb-3">
                <img class="img-fluid" src="./assets/img/illustrations/sorry.png" alt="Image Description" style="width: 18rem;">
            </div>

            <div class="mb-4">
                <p class="fs-4 mb-0">Oops! Looks like you followed a bad link.</p>
                <p class="fs-4">If you think this is a problem with us, please <a class="link" href="#">tell us</a>.</p>
            </div>

            <a class="btn btn-primary" href="./index.html">Go back home</a>
        </div>
        <!-- End Content -->
    </main>
    <!-- ========== END MAIN CONTENT ========== -->

<?php
get_footer();
