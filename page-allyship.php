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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <main id="primary" class="site-main">

        <!-- WELCOME
         ================================================== -->
		<?php
		get_template_part( 'template-parts/resources-breadcrumb', 'page' );
		?>
        <div class="container">
            <div class="row text-left">
                <div class="col-12">

                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12 mt-7">
                    <h1 class="display-4 font-weight-bolder text-left">Resources for Allyship</h1>
                    <p class="display-6 text-left text-black-80">
                        10 easy tips for demonstrating allyship
                    </p>
                    <img style="width: 100%; height: 337px; object-fit: cover;" src="https://static.freemomhugs.org/wp-content/uploads/2022/05/31205201/two-people-pride-flags-scaled.jpg">
                    <ol class="ml-0 mt-6 p-0">
                        <li class="mb-6" style="display: inline-block;"><img class="pr-4" style="float:left;" width="100px" src="https://static.freemomhugs.org/icons/FMH_Allyship%20hub_T-shirt.svg"><p class="display-6 font-weight-bolder mb-1">Never underestimate the power of a t-shirt.</p>
                            <p>You can’t be an ally if you’re silent or invisible.  A small gesture or two can mean a lot.  Like wearing a Pride t-shirt that lets people know you are supportive.  This small action may carry more weight than you realize.  We offer a variety of merchandise in our online store which can attract free hugs and show someone they are not alone. </p>
                        </li>
                        <li class="mb-6" style="display: inline-block;"><img class="pr-4" style="float:left;" width="100px" src="https://static.freemomhugs.org/icons/FMH_Allyship%20hub_Pride-event-sign.svg"><p class="display-6 font-weight-bolder mb-1">Attend a Pride event.</p>
                            <p>Accompany a loved one to a Pride event. Pride events happen all year long.  Joining a loved one to meet others and learn more about their community demonstrates your care for them.</p>
                        </li>
                        <li class="mb-6" style="display: inline-block;"><img class="pr-4" style="float:left;" width="100px" src="https://static.freemomhugs.org/icons/FMH_Allyship%20hub_Volunteer-group.svg"><p class="display-6 font-weight-bolder mb-1">Volunteer with Free Mom Hugs.</p>
                            <p>Join a <a href="https://freemomhugs.org/find-a-chapter/">Free Mom Hugs chapter</a> and volunteer at an event with a group of supporters! We have chapters in all 50 states who could use your help and provide ways for you to get involved in our amazing work.</p>
                        </li>
                        <li class="mb-6" style="display: inline-block;"><img class="pr-4" style="float:left;" width="100px" src="https://static.freemomhugs.org/icons/FMH_Allyship%20hub_Shopping-sunglasses.svg"><p class="display-6 font-weight-bolder mb-1">Go shopping!</p>
                            <p>Support LGBTQIA+ owned and friendly businesses that ensure equal treatment for employees and customers.</p>
                        </li>
                        <li class="mb-6" style="display: inline-block;"><img class="pr-4" style="float:left;" width="100px" src="https://static.freemomhugs.org/icons/FMH_Allyship%20hub_Small-gestures-flag.svg"><p class="display-6 font-weight-bolder mb-1">Small gestures can give a big message.</p>
                            <p>Even a coffee cup with a rainbow or LGBTQ+ logo or message can signal your allyship! A loved one will know you are a safe, supportive friend or family member when they see you visibly displaying your support even in simple ways. A coffee cup, water bottle, tote bag or other accessory demonstrating your commitment to the community may be all someone needs to see you as a caring supporter of the LGBTQIA+ community.</p>
                        </li>
                        <li class="mb-6" style="display: inline-block;"><img class="pr-4" style="float:left;" width="100px" src="https://static.freemomhugs.org/icons/FMH_Allyship%20hub_Educate-book.svg"><p class="display-6 font-weight-bolder mb-1">Educate Yourself</p>
                            <p>Stock your home or school library with books that celebrate LGBTQ+ protagonists. Books can create conversation, make special gifts for a loved one and signal your support for the community. Check out our library of resources at <a href="https://freemomhugs.org">freemomhugs.org.</a></p>
                        </li>
                        <li class="mb-6" style="display: inline-block;"><img class="pr-4" style="float:left;" width="100px" src="https://static.freemomhugs.org/icons/FMH_Allyship%20hub_Social-chat-bubbles.svg"><p class="display-6 font-weight-bolder mb-1">Use Social media as a platform to show support.</p>
                            <p>Speak about issues and amplify the voices of those in the margins, follow LGBTQIA+ organizations you care about and share content that demonstrates your allyship. You never know who may see your post and realize you are a supportive ally.</p>
                        </li>
                        <li class="mb-6" style="display: inline-block;"><img class="pr-4" style="float:left;" width="100px" src="https://static.freemomhugs.org/icons/FMH_Allyship%20hub_Pronouns-megaphone.svg"><p class="display-6 font-weight-bolder mb-1">Share your pronouns.</p>
                            <p>Sharing pronouns in your email signature, when you introduce yourself or on your social platforms demonstrates your respect for people’s identity and creates a more welcoming space for people of all genders.</p>
                        </li>
                        <li class="mb-6" style="display: inline-block;"><img class="pr-4" style="float:left;" width="100px" src="https://static.freemomhugs.org/icons/FMH_Allyship%20hub_Pin-button-heart.svg"><p class="display-6 font-weight-bolder mb-1">Wear a Pride pin or button.</p>
                            <p>Wearing a pin in the classroom, on a zoom call or around town lets those around you know you are committed to inclusion and someone they can count on as an ally.</p>
                        </li>
                        <li class="mb-6" style="display: inline-block;"><img class="pr-4" style="float:left;" width="100px" src="https://static.freemomhugs.org/icons/FMH_Allyship%20hub_Give-hands-heart.svg"><p class="display-6 font-weight-bolder mb-1">Give.</p>
                            <p>Donate to LGBTQIA+ organizations that are fighting for the rights of your loved ones and encourage others to do so. You could even host your own fundraiser in honor of someone you care about and bring people together for an organization important to you.</p>
                        </li>

                    </ol>
                </div>
                <div class="col-lg-4 col-12 mt-12 pr-0">
                    <h1 class="display-6 font-weight-bolder text-left">Learn More about Allyship</h1>
                    <a href="https://static.freemomhugs.org/resources/fmh-allyship.pdf">Download this resource as a PDF <i class="fa fa-arrow-circle-down" aria-hidden="true"></i></a>
                    <hr>
                    <ul style="list-style: none;" class="px-0">
                        <li class="py-1"><a href="https://www.advocate.com/youth/2019/6/27/report-just-one-accepting-adult-can-save-lgbtq-young-persons-life">Did you know, just one accepting adult can save an LGBTQIA+ person’s life?</a></li>
                        <li class="py-1">Download the Human Rights Campaign's <a href="https://www.hrc.org/resources/being-an-lgbtq-ally">"Being an LGBTQ ally"</a> guide.</li>
                        <li class="py-1"><a href="https://www.glsen.org/our-work">Visit GLSEN </a>to learn about allyship at school for students, parents and educators.</li>
                        <li class="py-1">Help create a more LGBTQIA+ inclusive workspace with <a href="https://www.themuse.com/advice/simple-ways-make-workplace-more-lgbtq-inclusive">these 11 easy steps.</a></li>

                    </ul>

                </div>

            </div>
        </div>



    </main><!-- #main -->

<?php
get_template_part( 'template-parts/shape', 'none');
get_template_part( 'template-parts/cta-newsletter-sub', 'none');
get_footer();
