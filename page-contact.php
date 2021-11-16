<?php
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

    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main">
        <!-- Hero -->
        <div class="bg-img-start" style="background-image: url(./assets/svg/components/card-11.svg);">
            <div class="container content-space-t-3 content-space-t-lg-5 content-space-b-2">
                <div class="w-md-75 w-lg-50 text-center mx-md-auto">
                    <h1>Have a question?</h1>
                    <p>We help brands and platforms turn big ideas into beautiful digital products and experiences.</p>
                </div>
            </div>
        </div>
        <!-- End Hero -->

        <!-- Form -->
        <div class="container content-space-2 content-space-lg-3">
            <!-- Form -->
            <div class="mx-auto" style="max-width: 35rem;">
                <!-- Form -->
                <form>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- Form -->
                            <div class="mb-4">
                                <label class="form-label" for="hireUsFormFirstName">First name</label>
                                <input type="text" class="form-control form-control-lg" name="hireUsFormNameFirstName" id="hireUsFormFirstName" placeholder="First name" aria-label="First name">
                            </div>
                            <!-- End Form -->
                        </div>

                        <div class="col-sm-6">
                            <!-- Form -->
                            <div class="mb-4">
                                <label class="form-label" for="hireUsFormLasttName">Last name</label>
                                <input type="text" class="form-control form-control-lg" name="hireUsFormNameLastName" id="hireUsFormLasttName" placeholder="Last name" aria-label="Last name">
                            </div>
                            <!-- End Form -->
                        </div>
                    </div>
                    <!-- End Form -->

                    <!-- Form -->
                    <div class="mb-4">
                        <label class="form-label" for="hireUsFormWorkEmail">Email address</label>
                        <input type="email" class="form-control form-control-lg" name="hireUsFormNameWorkEmail" id="hireUsFormWorkEmail" placeholder="email@site.com" aria-label="email@site.com">
                    </div>
                    <!-- End Form -->

                    <!-- Form -->
                    <div class="mb-4">
                        <label class="form-label" for="hireUsFormCompanyName">Organization/Company name <span class="form-label-secondary">(Optional)</span></label>
                        <input type="text" class="form-control form-control-lg" name="hireUsFormNameCompanyName" id="hireUsFormCompanyName" placeholder="My Organization" aria-label="Htmlstream">
                    </div>
                    <!-- End Form -->

                    <!-- Select -->
                    <div class="mb-4">
                        <label class="form-label" for="hireUsFormBudget">Budget</label>
                        <select name="hireUsFormNameBudget" id="hireUsFormBudget" class="form-select form-select-lg" aria-label="Tell us about your budget">
                            <option selected>Tell us about your budget</option>
                            <option value="1">$1,000 - $10,000</option>
                            <option value="2">$10,000 - $20,000</option>
                            <option value="3">$20,000 - $30,000</option>
                            <option value="4">$30,000 - $40,000</option>
                            <option value="5">$40,000 - $50,000</option>
                            <option value="6">$50,000 - and more</option>
                        </select>
                    </div>
                    <!-- End Select -->

                    <!-- Form -->
                    <div class="mb-4">
                        <label class="form-label" for="hireUsFormDetails">Details</label>
                        <textarea class="form-control form-control-lg" name="hireUsFormNameDetails" id="hireUsFormDetails" placeholder="Tell us about your project" aria-label="Tell us about your project" rows="4"></textarea>
                    </div>
                    <!-- End Form -->

                    <div class="d-grid mb-2">
                        <button type="submit" class="btn btn-primary btn-lg">Send inquiry</button>
                    </div>

                    <div class="text-center">
                        <span class="form-text">We'll get back to you in 1-2 business days.</span>
                    </div>
                </form>
                <!-- End Form -->
            </div>
            <!-- End Form -->
        </div>
        <!-- End Form -->
    </main>
    <!-- ========== END MAIN CONTENT ========== -->

<?php
get_template_part( 'template-parts/cta-newsletter-sub', 'none');
get_footer();
