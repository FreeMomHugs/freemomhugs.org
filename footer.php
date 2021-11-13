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

<!-- ========== FOOTER ========== -->
<footer>
    <div class="container pb-1 pb-lg-7">
        <div class="row content-space-t-2">
            <div class="col-lg-3 mb-7 mb-lg-0">
                <!-- Logo -->
                <div class="mb-5">
                    <a class="navbar-brand" href="../index.html" aria-label="Space">
	                    <?php
	                    $custom_logo_id = get_theme_mod( 'custom_logo' );
	                    $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );

	                    ?>
                        <img class="navbar-brand-logo" src="<?php echo $image[0]; ?>" alt="Image Description">
                    </a>
                </div>
                <!-- End Logo -->

                <!-- List -->
                <ul class="list-unstyled list-py-1">
                    <li><a class="link-sm link-secondary" href="#"><i class="bi-envelope-fill me-1"></i> PO Box 12731 <br> Oklahoma City, OK 73157-2731</a></li>
                    <li><a class="link-sm link-secondary" href="tel:1-062-109-9222"> EIN: 83-1530294</a></li>
                </ul>
                <!-- End List -->

            </div>
            <!-- End Col -->

            <div class="col-sm mb-7 mb-sm-0">
                <h5 class="mb-3">About</h5>

                <!-- List -->
                <ul class="list-unstyled list-py-1 mb-0">
                    <li><a class="link-sm link-secondary" href="#">About</a></li>
                    <li><a class="link-sm link-secondary" href="#">Our Team <span class="badge bg-warning text-dark rounded-pill ms-1">We're hiring</span></a></li>
                    <li><a class="link-sm link-secondary" href="#">Blog</a></li>
                    <li><a class="link-sm link-secondary" href="#">Customers <i class="bi-box-arrow-up-right small ms-1"></i></a></li>
                    <li><a class="link-sm link-secondary" href="#">Hire us</a></li>
                </ul>
                <!-- End List -->
            </div>
            <!-- End Col -->

            <div class="col-sm mb-7 mb-sm-0">
                <h5 class="mb-3">Features</h5>

                <!-- List -->
                <ul class="list-unstyled list-py-1 mb-0">
                    <li><a class="link-sm link-secondary" href="#">Press <i class="bi-box-arrow-up-right small ms-1"></i></a></li>
                    <li><a class="link-sm link-secondary" href="#">Release Notes</a></li>
                    <li><a class="link-sm link-secondary" href="#">Integrations</a></li>
                    <li><a class="link-sm link-secondary" href="#">Pricing</a></li>
                </ul>
                <!-- End List -->
            </div>
            <!-- End Col -->

            <div class="col-sm">
                <h5 class="mb-3">Documentation</h5>

                <!-- List -->
                <ul class="list-unstyled list-py-1 mb-0">
                    <li><a class="link-sm link-secondary" href="#">Support</a></li>
                    <li><a class="link-sm link-secondary" href="#">Docs</a></li>
                    <li><a class="link-sm link-secondary" href="#">Status</a></li>
                    <li><a class="link-sm link-secondary" href="#">API Reference</a></li>
                    <li><a class="link-sm link-secondary" href="#">Tech Requirements</a></li>
                </ul>
                <!-- End List -->
            </div>
            <!-- End Col -->

            <div class="col-sm">
                <a href="https://www.guidestar.org/profile/83-1530294" target="_blank"><img src="https://widgets.guidestar.org/gximage2?o=9748468&l=v4" style="max-height:5rem;"/></a>
            </div>
            <!-- End Col -->
        </div>
        <!-- End Row -->

        <div class="border-top my-7"></div>

        <div class="row mb-7">
            <div class="col-sm mb-3 mb-sm-0">
                <!-- Socials -->
                <ul class="list-inline list-separator mb-0">
                    <li class="list-inline-item">
                        <a class="text-body" href="#">Privacy &amp; Policy</a>
                    </li>
                    <li class="list-inline-item">
                        <a class="text-body" href="#">Terms</a>
                    </li>
                    <li class="list-inline-item">
                        <a class="text-body" href="#">Site Map</a>
                    </li>
                </ul>
                <!-- End Socials -->
            </div>

            <div class="col-sm-auto">
                <!-- Socials -->
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <a class="btn btn-soft-secondary btn-xs btn-icon" href="https://www.facebook.com/freemomhugsinc">
                            <i class="bi-facebook"></i>
                        </a>
                    </li>

                    <li class="list-inline-item">
                        <a class="btn btn-soft-secondary btn-xs btn-icon" href="https://www.instagram.com/freemomhugs">
                            <i class="bi-instagram"></i>
                        </a>
                    </li>

                    <li class="list-inline-item">
                        <a class="btn btn-soft-secondary btn-xs btn-icon" href="https://www.twitter.com/freemomhugs">
                            <i class="bi-twitter"></i>
                        </a>
                    </li>

                </ul>
                <!-- End Socials -->
            </div>
        </div>

        <!-- Copyright -->
        <div class="w-md-85 text-lg-center mx-lg-auto">
            <p class="text-muted small">&copy; Free Mom Hugs. All rights reserved.</p>
            <p class="text-muted small">Free Mom Hugs, Inc. is a 501(c)(3) organization. Gifts are deductible to the full extent allowable under IRS regulations.</p>
        </div>
        <!-- End Copyright -->
    </div>
</footer>
<!-- ========== END FOOTER ========== -->

<?php wp_footer(); ?>

</body>
</html>
