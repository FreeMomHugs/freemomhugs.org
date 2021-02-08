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

get_header();
?>

    <main id="primary" class="site-main">
        <!-- WELCOME
                 ================================================== -->
        <section data-jarallax data-speed=".8" class="py-10 py-md-14 overlay overlay-black overlay-60 bg-cover jarallax"
                 style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 text-center">

                        <!-- Heading -->
                        <h1 class="display-2 font-weight-bold text-white">
                            <?php echo get_the_title(); ?>
                        </h1>

                        <!-- Text -->
                        <p class="lead mb-8 text-white-75">
                            Keep up to date with what we're working on! Landkit is an ever evolving theme with regular
                            updates.
                        </p>

                    </div>
                </div>
                <div class="row col-xs-12 d-flex justify-content-center">
                <form>
                    <div class="input-group input-group-lg">
                        <!-- Input -->
                        <select class="custom-select" id="chapter-select">
                            <option value="">Select a State</option>
                            <option value="Alabama">Alabama</option>
                            <option value="Alaska">Alaska</option>
                            <option value="Arizona">Arizona</option>
                            <option value="Arkansas">Arkansas</option>
                            <option value="California">California</option>
                            <option value="Colorado">Colorado</option>
                            <option value="Connecticut">Connecticut</option>
                            <option value="Delaware">Delaware</option>
                            <option value="DC">District of Columbia</option>
                            <option value="Florida">Florida</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Hawaii">Hawaii</option>
                            <option value="Idaho">Idaho</option>
                            <option value="Illinois">Illinois</option>
                            <option value="Indiana">Indiana</option>
                            <option value="Iowa">Iowa</option>
                            <option value="Kansas">Kansas</option>
                            <option value="Kentucky">Kentucky</option>
                            <option value="Louisiana">Louisiana</option>
                            <option value="Maine">Maine</option>
                            <option value="Maryland">Maryland</option>
                            <option value="Massachusetts">Massachusetts</option>
                            <option value="Michigan">Michigan</option>
                            <option value="Minnesota">Minnesota</option>
                            <option value="Mississippi">Mississippi</option>
                            <option value="Missouri">Missouri</option>
                            <option value="Nebraska">Nebraska</option>
                            <option value="Nevada">Nevada</option>
                            <option value="New Hampshire">New Hampshire</option>
                            <option value="New Jersey">New Jersey</option>
                            <option value="New Mexico">New Mexico</option>
                            <option value="New York">New York</option>
                            <option value="North Carolina">North Carolina</option>
                            <option value="Ohio">Ohio</option>
                            <option value="Oklahoma">Oklahoma</option>
                            <option value="Oregon">Oregon</option>
                            <option value="Pennsylvania">Pennsylvania</option>
                            <option value="Rhode Island">Rhode Island</option>
                            <option value="South Carolina">South Carolina</option>
                            <option value="Tennessee">Tennessee</option>
                            <option value="Texas">Texas</option>
                            <option value="Utah">Utah</option>
                            <option value="Vermont">Vermont</option>
                            <option value="Virginia">Virginia</option>
                            <option value="Washington">Washington</option>
                            <option value="Wisconsin">Wisconsin</option>
                        </select>
                    </div>
                </form>
                <script>
                    function redirect(goto) {
                        window.location = goto;
                    }

                    var selectEl = document.getElementById('chapter-select');

                    selectEl.onchange = function () {
                        var goto = this.value;
                        goto = "<?php echo get_bloginfo('wpurl');?>/" + goto
                        redirect(goto);

                    };


                </script>

            </div> <!-- / .row -->
            </div> <!-- / .container -->
        </section>

        <!-- SHAPE
         ================================================== -->
        <div class="position-relative">
            <div class="shape shape-bottom shape-fluid-x svg-shim text-light">
                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor"/>
                </svg>
            </div>
        </div>


    </main><!-- #main -->

<?php
get_footer();
