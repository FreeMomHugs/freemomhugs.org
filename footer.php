<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP-FreeMomHugs
 */

?>

<!-- SHAPE
================================================== -->
<div class="position-relative">
    <div class="shape shape-bottom shape-fluid-x svg-shim text-dark">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor"/></svg>
    </div>
</div>


<!-- FOOTER
================================================== -->
<footer class="py-8 py-md-11 bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 col-lg-3">

                <!-- Brand -->
                <img src="https://static.freemomhugs.org/wp-content/uploads/2020/10/fmh-original-white.png" alt="..." class="footer-brand img-fluid mb-2">

                <!-- Text -->
                <p class="text-gray-700 mb-2">
                    One hug at a time.
                </p>

                <!-- Social -->
                <ul class="list-unstyled list-inline list-social mb-6 mb-md-0">
                    <li class="list-inline-item list-social-item mr-3">
                        <a href="#!" class="text-decoration-none">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/social/instagram.svg" class="list-social-icon" alt="...">
                        </a>
                    </li>
                    <li class="list-inline-item list-social-item mr-3">
                        <a href="#!" class="text-decoration-none">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/social/facebook.svg" class="list-social-icon" alt="...">
                        </a>
                    </li>
                    <li class="list-inline-item list-social-item mr-3">
                        <a href="#!" class="text-decoration-none">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/social/twitter.svg" class="list-social-icon" alt="...">
                        </a>
                    </li>
                </ul>

            </div>
            <div class="col-6 col-md-4 col-lg-2">

                <!-- Heading -->
                <h6 class="font-weight-bold text-uppercase text-gray-700">
                    Products
                </h6>

                <!-- List -->
                <ul class="list-unstyled text-muted mb-6 mb-md-8 mb-lg-0">
                    <li class="mb-3">
                        <a href="#!" class="text-reset">
                            Page Builder
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="#!" class="text-reset">
                            UI Kit
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="#!" class="text-reset">
                            Styleguide
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="#!" class="text-reset">
                            Documentation
                        </a>
                    </li>
                    <li>
                        <a href="#!" class="text-reset">
                            Changelog
                        </a>
                    </li>
                </ul>

            </div>
            <div class="col-6 col-md-4 col-lg-2">

                <!-- Heading -->
                <h6 class="font-weight-bold text-uppercase text-gray-700">
                    Services
                </h6>

                <!-- List -->
                <ul class="list-unstyled text-muted mb-6 mb-md-8 mb-lg-0">
                    <li class="mb-3">
                        <a href="#!" class="text-reset">
                            Documentation
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="#!" class="text-reset">
                            Changelog
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="#!" class="text-reset">
                            Pagebuilder
                        </a>
                    </li>
                    <li>
                        <a href="#!" class="text-reset">
                            UI Kit
                        </a>
                    </li>
                </ul>

            </div>
            <div class="col-6 col-md-4 offset-md-4 col-lg-2 offset-lg-0">

                <!-- Heading -->
                <h6 class="font-weight-bold text-uppercase text-gray-700">
                    Connect
                </h6>

                <!-- List -->
                <ul class="list-unstyled text-muted mb-0">
                    <li class="mb-3">
                        <a href="#!" class="text-reset">
                            Page Builder
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="#!" class="text-reset">
                            UI Kit
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="#!" class="text-reset">
                            Styleguide
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="#!" class="text-reset">
                            Documentation
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="#!" class="text-reset">
                            Changelog
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="#!" class="text-reset">
                            Documentation
                        </a>
                    </li>
                    <li>
                        <a href="#!" class="text-reset">
                            Changelog
                        </a>
                    </li>
                </ul>

            </div>
            <div class="col-6 col-md-4 col-lg-2">

                <!-- Heading -->
                <h6 class="font-weight-bold text-uppercase text-gray-700">
                    Legal
                </h6>

                <!-- List -->
                <ul class="list-unstyled text-muted mb-0">
                    <li class="mb-3">
                        <a href="#!" class="text-reset">
                            Documentation
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="#!" class="text-reset">
                            Changelog
                        </a>
                    </li>
                    <li>
                        <a href="#!" class="text-reset">
                            Pagebuilder
                        </a>
                    </li>
                </ul>

            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
