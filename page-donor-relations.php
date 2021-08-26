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

    <script>
        AOS.init();
    </script>

    <link rel="stylesheet" href="https://cdn.plyr.io/3.6.8/plyr.css" />



    <main id="primary" class="site-main">
        <!-- WELCOME
            ================================================== -->
        <section class="overlay overlay-dark overlay-40 bg-gradient-dark-black" data-jarallax data-speed=".8")">
            <div class="container d-flex flex-column">
                <div class="row align-items-center justify-content-center min-vh-100 py-8 py-md-11">
                    <div class="col-12 mt-auto text-left">

                        <!-- Brand -->
                        <div class="img-fluid text-white svg-shim mb-6">
                            <h1 class="text-light display-1" style="font-weight: 800;">Conversion Therapy</h1>

                        </div>

                        <!-- Heading -->
                        <h2 class="text-white">
                            Conversion therapy is the practice of attempting to change or alter a person's
                            sexual orientation or gender expression, through scientifically-unsound psychological or spiritual
                            counseling.

                            In religious settings it is also known as reparative therapy, ex-gay therapy,
                            or ex-gay ministry.

                            Most medical and mental health associations in the United States reject the practice of
                            conversion therapy and deem it harmful and ineffective.
                        </h2>
                        <h3 class="text-white font-weight-bold">
                            Free Mom Hugs unequivocally condemns the practice of conversion therapy.
                        </h3>

                    </div>
                    <div class="col-12 mt-auto text-center">

                        <!-- Button -->
                        <a class="btn btn-white btn-rounded-circle shadow" data-toggle="smooth-scroll" data-offset="0" href="#sectionTwo">
                            <i class="fe fe-arrow-down"></i>
                        </a>

                    </div>
                </div> <!-- / .row -->
            </div> <!-- / .container -->
        </section>


        <!-- TODO WHERE IS CONVERSION THERAPY LEGAL? -->




        <!-- History of Conversion Therapy -->
        <section class="overlay overlay-light overlay-80 bg-ambient" data-jarallax data-speed=".8") style="background-image: url('https://static.freemomhugs.org/wp-content/uploads/2021/08/AdobeStock_9656316-scaled.jpeg')">
        <div class="container d-flex flex-column">
            <div class="row align-items-center justify-content-center min-vh-100 py-8 py-md-11">
                <div class="col-12 mt-auto text-left">

                    <!-- Brand -->
                    <div class="img-fluid text-white">
                        <h2 class="text-dark display-2" style="font-weight: 800;">History</h2>

                    </div>

                    <!-- Heading -->
                    <p class="text-dark display-5">
                        Conversion therapy is an old practice that dates back to the 1930s. Sigmund Freud
                        sexual orientation or gender expression, through scientifcally-unsound psychological or spiritual
                        counseling.

                        In religious settings it is also known as reparative therapy, ex-gay therapy,
                        or ex-gay ministry.

                        Most medical and mental health associations in the United States reject the practice of
                        conversion therapy and deem it ineffective, and dangerous.
                    </p>
                    <h3 class="text-dark font-weight-bold">
                        Free Mom Hugs unequivocally condemns the practice of conversion therapy.
                    </h3>

                    <div class="timeline">
                        <div class="container left">
                            <div class="content">
                                <h2>2017</h2>
                                <p>Lorem ipsum..</p>
                            </div>
                        </div>
                        <div class="container right">
                            <div class="content">
                                <h2>2016</h2>
                                <p>Lorem ipsum..</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-12 mt-auto text-center">


                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
        </section>

        <!-- Stats of Conversion Therapy -->
        <section class="overlay overlay-light overlay-80 bg-ambient min-vh-100 py-8 py-md-11" data-jarallax data-speed=".8")>
            <div class="container d-flex flex-column">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 mt-auto text-left">

                        <!-- Brand -->
                        <div class="text-dark">
                            <h2 class="display-2" style="font-weight: 800;">Statistics</h2>
                            <p class="font-size-lg font-weight-bold">Compared to LGBTQ+ youth whose families accepted them, those who underwent conversion
                                therapy are:</p>
                        </div>

                        <!-- Heading -->
                        <div class="row mb-4" data-aos="fade-in" data-aos-delay="150">
                            <div class="icon" style="display:flex;justify-content:center;align-items:center;">
                                <img class="float-left" src="<?php echo get_template_directory_uri() . "/assets/img/icons/duotone-icons/Navigation/Angle-right.svg" ?>"/>
                            </div>
                            <div style="display:flex;justify-content:center;align-items:center;">
                                <h2 class="text-dark display-4 font-weight-bolder mb-0">
                                    8x as likely to have attempted suicide
                                </h2>
                            </div>
                        </div>
                        <div class="row mb-4" data-aos="fade-in" data-aos-delay="150">
                            <div class="icon" style="display:flex;justify-content:center;align-items:center;">
                                <img class="float-left" src="<?php echo get_template_directory_uri() . "/assets/img/icons/duotone-icons/Navigation/Angle-right.svg" ?>"/>
                            </div>
                            <div style="display:flex;justify-content:center;align-items:center;">
                                <h2 class="text-dark display-4 font-weight-bolder mb-0">
                                    6x as likely to report high levels of depression
                                </h2>
                            </div>
                        </div>
                        <div class="row mb-4" data-aos="fade-in" data-aos-delay="150">
                            <div class="icon" style="display:flex;justify-content:center;align-items:center;">
                                <img class="float-left" src="<?php echo get_template_directory_uri() . "/assets/img/icons/duotone-icons/Navigation/Angle-right.svg" ?>"/>
                            </div>
                            <div style="display:flex;justify-content:center;align-items:center;">
                                <h2 class="text-dark display-4 font-weight-bolder mb-0">
                                    3x as likely to use illegal drugs
                                </h2>
                            </div>
                        </div>
                        <div class="row mb-4" data-aos="fade-in" data-aos-delay="150">
                            <div class="icon" style="display:flex;justify-content:center;align-items:center;">
                                <img class="float-left" src="<?php echo get_template_directory_uri() . "/assets/img/icons/duotone-icons/Navigation/Angle-right.svg" ?>"/>
                            </div>
                            <div style="display:flex;justify-content:center;align-items:center;">
                                <h2 class="text-dark display-4 font-weight-bolder mb-0">
                                    3x as likely to be at high risk for STIs
                                </h2>
                            </div>
                        </div>


                    </div>
                    <div class="col-12 mt-auto text-center">


                    </div>
                </div> <!-- / .row -->
            </div> <!-- / .container -->
        </section>

        <!-- Survivors of Conversion Therapy -->
        <section class="bg-dark min-vh-100 py-8 py-md-11" data-jarallax data-speed=".8")>
            <div class="container d-flex flex-column">
                <div class="row align-items-center justify-content-center mb-6">
                    <div class="col-12 mt-auto text-left text-white">

                        <!-- Brand -->
                        <div class="mb-8">
                            <h2 class="display-2" style="font-weight: 800;">Conversion Therapy Survivors</h2>
                            <p class="font-size-lg font-weight-bold">Hear directly from conversion therapy survivors</p>
                        </div>
                    </div>
                </div>


                <div class="row text-dark">
                    <!-- Karrie -->
                    <div class="col-6">
                        <div class="plyr__video-embed" id="player">
                            <iframe
                                    src="https://player.vimeo.com/video/587429231?h=f06623335a?loop=false&amp;byline=false&amp;portrait=false&amp;title=false&amp;speed=true&amp;transparent=0&amp;gesture=media"
                                    allowfullscreen
                                    allowtransparency
                                    allow="autoplay"
                            ></iframe>
                        </div>
                        <h3 class="font-weight-bolder text-white mt-2">Karrie Fletcher<br>
                            <span class="font-weight-lighter">Executive Director</span><br>
                            <span class="font-italic font-weight-light">Free Mom Hugs</span>
                        </h3>

                    </div>
                    <!-- Katrina -->
                    <div class="col-6">
                        <div class="plyr__video-embed" id="player">
                            <iframe
                                    src="https://player.vimeo.com/video/588292013?h=8497f78d14?loop=false&amp;byline=false&amp;portrait=false&amp;title=false&amp;speed=true&amp;transparent=0&amp;gesture=media"
                                    allowfullscreen
                                    allowtransparency
                                    allow="autoplay"
                            ></iframe>
                        </div>
                        <h3 class="font-weight-bolder text-white mt-2">Katrina Kalb<br>
                            <span class="font-weight-lighter">Programming Director</span><br>
                            <span class="font-italic font-weight-light">Free Mom Hugs</span>
                        </h3>
                    </div>
                </div>
            </div>

                    </div>
                </div> <!-- / .row -->
            </div> <!-- / .container -->
        </section>

        <!-- Resources on Conversion Therapy -->
        <section class="bg-ambient min-vh-100 py-8 py-md-11" data-jarallax data-speed=".8")>
            <div class="container d-flex flex-column">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 mt-auto text-left text-dark">

                        <!-- Brand -->
                        <div class="mb-8">
                            <h2 class="display-2" style="font-weight: 800;">Resources on Conversion Therapy</h2>
                            <p class="font-size-lg font-weight-bold">Explore currated resources on the dangers of Conversion Therapy.</p>
                        </div>
                    </div>
                </div>


                <div class="row text-dark">


                    <!-- Boy Erased -->
                    <div class="card card-row shadow-light-lg">
                        <div class="row no-gutters">
                            <a class="col-12 col-md-6 bg-cover card-img-left" style="background-image: url(../assets/img/photos/photo-1.jpg);" href="#!">

                                <!-- Image (placeholder) -->
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube-nocookie.com/embed/-B71eyB_Onw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <!-- Shape -->

                            </a>
                            <div class="col-12 col-md-6 order-md-1">

                                <!-- Body -->
                                <div class="card-body">
                                        <!-- Text -->
                                        <h2 class="font-weight-bolder display-3">
                                            Boy Erased
                                        </h2>

                                        <!-- Footer -->
                                        <footer class="blockquote-footer">
                                            <span class="h6 text-uppercase">Movie</span>
                                        </footer>

                                    </blockquote>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="col-6">
                        <h3 class="font-weight-bolder">Boy Erased, <span class="font-italic font-weight-light">Movie</span></h3>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube-nocookie.com/embed/-B71eyB_Onw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>

                    </div>
                    <div class="col-6">
                        <h3 class="font-weight-bolder">Katrina Kalb</h3>
                        <video id="player" playsinline controls data-poster="/path/to/poster.jpg">
                            <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" type="video/mp4" />

                            <!-- Captions are optional -->
                            <track kind="captions" label="English captions" src="/path/to/captions.vtt" srclang="en" default />
                        </video>
                    </div>
                </div>
            </div>

            </div>
            </div> <!-- / .row -->
            </div> <!-- / .container -->
        </section>





        <?php
            $paralax1 = array(
                'class' => 'featured-home',
                'title' => 'Newsroom',
                'menu'  => 'newsroom',
                'title-blurb' => 'Education',
                'button-text' => 'Learn More',
                'background-url' => '',
            );
            get_template_part( 'template-parts/what-is-conversion-therapy', 'none' , $paralax1);
            ?>

        <!-- ABOUT
================================================== -->
        <section class="py-8 py-md-11 bg-gray-200">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-7 text-center">

                        <!-- Heading -->
                        <h2 class="font-weight-bold">
                            Core Values
                        </h2>

                        <!-- Text -->
                        <p class="font-size-lg text-muted mb-7 mb-md-9">
                            No matter what you're working on, who you're with, or how many of you there are, Landkit can help.
                        </p>

                    </div>
                </div> <!-- / .row -->
                <div class="form-row">
                    <div class="col-12 col-lg-6 d-lg-flex pb-1 mb-4">

                        <!-- Card -->
                        <div class="card shadow-light-lg overflow-hidden" >
                            <div class="row">
                                <div class="col-md-4 position-relative">

                                    <!-- Image -->
                                    <img src="<?php echo get_template_directory_uri() . "/assets/img/illustrations/illustration-8.png";?>" class="h-75 position-absolute right-0 mt-7 mr-n4" alt="...">

                                </div>
                                <div class="col-md-8">

                                    <!-- Body -->
                                    <div class="card-body py-7 py-md-9 text-center">

                                        <!-- Heading -->
                                        <h4 class="font-weight-bold">
                                            Unlimited Team Size
                                        </h4>

                                        <!-- Text -->
                                        <p class="text-muted mb-0">
                                            Landkit works well for a scrappy team of 3 or scales to the enterprise level needs of Forture 500 companies.
                                        </p>

                                    </div>

                                </div>
                            </div> <!-- / .row -->
                        </div>

                    </div>
                    <div class="col-12 col-lg-6 d-lg-flex pb-1 mb-4">

                        <!-- Card -->
                        <div class="card shadow-light-lg overflow-hidden text-center">
                            <div class="row">
                                <div class="col-md-8">

                                    <!-- Body -->
                                    <div class="card-body py-7 py-md-9">

                                        <!-- Heading -->
                                        <h4 class="font-weight-bold">
                                            Emoji Responses
                                        </h4>

                                        <!-- Text -->
                                        <p class="text-muted mb-0">
                                            Instead of bombarding team members with huge messages, simply reply with an emoji to express your reply.
                                        </p>

                                    </div>

                                </div>
                                <div class="col-md-4">

                                    <!-- Image -->
                                    <img src=<?php echo get_template_directory_uri() . "/assets/img/illustrations/illustration-6.png";?>" class="h-75 position-absolute left-0 mt-7" alt="...">

                                </div>
                            </div> <!-- / .row -->
                        </div>

                    </div>
                </div> <!-- / .row -->
                <div class="row">
                    <div class="col-12">

                        <!-- Card -->
                        <div class="card shadow-light-lg overflow-hidden text-center text-lg-left">
                            <div class="row">
                                <div class="col-md-4 position-relative">

                                    <!-- Image -->
                                    <img src="<?php echo get_template_directory_uri() . "/assets/img/illustrations/illustration-2.png";?>" class="h-75 position-absolute right-0 mt-6" alt="...">

                                </div>
                                <div class="col-md-8">

                                    <!-- Body -->
                                    <div class="card-body py-7 py-md-9">

                                        <!-- Heading -->
                                        <h4 class="font-weight-bold">
                                            Building a community.
                                        </h4>

                                        <!-- Text -->
                                        <p class="text-muted mb-0">
                                            Landkit is focused on helping foster a community. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis diam tempus tortor egestas blandit. Aliquam erat volutpat. Phasellus rhoncus pretium molestie. Nulla facilisi. Etiam sollicitudin lectus ac nisi tincidunt porttitor. Phasellus eros metus, gravida eu mi ac, gravida convallis ipsum.
                                        </p>

                                    </div>

                                </div>
                            </div> <!-- / .row -->
                        </div>

                    </div>
                </div> <!-- / .row -->
            </div> <!-- / .container -->
        </section>

        <!-- QUOTE
        ================================================== -->
        <section>
            <div class="container d-flex flex-column">
                <div class="row align-items-center justify-content-center min-vh-100 py-8 py-md-11">
                    <div class="col-12 col-lg-10 col-xl-8">

                        <!-- Blockquote -->
                        <blockquote class="blockquote text-center">

                            <!-- Logo -->
                            <div class="img-fluid mb-5 mb-md-7 mx-auto svg-shim" style="max-width: 120px; color: #CB2027;">
                                <svg viewBox="0 0 2761 991" xmlns="http://www.w3.org/2000/svg"><path d="M1447.629 301.83c0 28.119-22.658 50.76-50.777 50.76-28.118 0-50.76-22.641-50.76-50.76s21.87-50.76 50.76-50.76c28.915.78 50.777 23.43 50.777 50.76zm-209.316 102.317v12.5s-24.202-31.256-75.75-31.256c-85.121 0-151.517 64.828-151.517 154.638 0 89.037 65.615 154.638 151.517 154.638 52.328 0 75.75-32.02 75.75-32.02v13.271c0 6.25 4.697 10.923 10.939 10.923h63.252V393.177h-63.252c-6.242.024-10.939 5.5-10.939 10.97zm0 188.21c-11.703 17.189-35.14 32.028-63.251 32.028-49.98 0-88.258-31.24-88.258-84.356 0-53.11 38.277-84.349 88.258-84.349 27.338 0 52.328 15.62 63.251 32.02v104.658zm121.058-199.156h74.97v293.664h-74.97V393.2zm1119.954-7.818c-51.548 0-75.766 31.255-75.766 31.255V251.85h-74.97v435.015h63.267c6.25 0 10.923-5.47 10.923-10.94v-13.27s24.218 32.02 75.75 32.02c85.137 0 151.518-65.585 151.518-154.623s-66.38-154.669-150.722-154.669zm-12.499 238.214c-28.906 0-51.548-14.824-63.267-32.02V486.92c11.719-15.62 36.709-32.02 63.267-32.02 49.98 0 88.25 31.24 88.25 84.349 0 53.109-38.261 84.348-88.25 84.348zm-177.28-110.891v174.939h-74.985V521.288c0-48.412-15.62-67.949-57.767-67.949-22.642 0-46.08 11.72-60.942 28.907v204.626h-74.955V393.21h59.335c6.25 0 10.938 5.469 10.938 10.938v12.5c21.87-22.658 50.76-31.256 79.652-31.256 32.808 0 60.147 9.386 82.016 28.126 26.543 21.87 36.709 49.98 36.709 99.189zm-450.65-127.323c-51.532 0-75.75 31.255-75.75 31.255V251.85h-74.97v435.015h63.251c6.25 0 10.939-5.47 10.939-10.94v-13.27s24.218 32.02 75.75 32.02c85.137 0 151.518-65.585 151.518-154.623.78-89.045-65.6-154.669-150.737-154.669zm-12.498 238.214c-28.891 0-51.533-14.824-63.252-32.02V486.92c11.719-15.62 36.709-32.02 63.252-32.02 49.996 0 88.257 31.24 88.257 84.349 0 53.109-38.261 84.348-88.257 84.348zm-203.05-238.214c22.641 0 34.36 3.917 34.36 3.917v69.5s-62.48-21.088-101.52 23.438v205.399H1481.2V393.2h63.267c6.25 0 10.923 5.469 10.923 10.938v12.5c14.075-16.409 44.535-31.256 67.957-31.256zM844.705 660.306c-3.901-9.37-7.81-19.52-11.711-28.119-6.258-14.051-12.507-27.338-17.96-39.83l-.781-.78c-53.897-117.156-111.68-235.858-172.606-352.999l-2.34-4.696a1536.65 1536.65 0 01-18.734-36.71c-7.817-14.067-15.62-28.89-28.119-42.958-24.99-31.24-60.918-48.427-99.18-48.427-39.057 0-74.198 17.188-99.96 46.859-11.72 14.052-20.317 28.891-28.12 42.958a1695.173 1695.173 0 01-18.732 36.71l-2.349 4.696c-60.138 117.141-118.709 235.85-172.598 353l-.788 1.552c-5.462 12.514-11.719 25.786-17.968 39.83-3.901 8.597-7.803 17.968-11.704 28.118-10.158 28.892-13.287 56.23-9.37 84.357 8.59 58.578 47.632 107.763 101.529 129.647 20.309 8.598 41.398 12.5 63.26 12.5 6.249 0 14.051-.78 20.308-1.569 25.779-3.12 52.33-11.703 78.107-26.543 32.02-17.968 62.48-43.73 96.84-81.22 34.36 37.49 65.6 63.252 96.84 81.22 25.786 14.84 52.329 23.422 78.1 26.543 6.249.796 14.066 1.568 20.316 1.568 21.87 0 43.73-3.9 63.252-12.499 54.677-21.884 92.938-71.85 101.536-129.647 6.203-27.331 3.082-54.654-7.068-83.56zm-352.219 40.61c-42.178-53.109-69.517-103.09-78.88-145.252-3.9-17.968-4.688-33.588-2.34-47.647 1.553-12.5 6.25-23.438 12.499-32.808 14.84-21.074 39.83-34.36 68.729-34.36 28.907 0 54.677 12.498 68.736 34.36 6.25 9.37 10.931 20.316 12.507 32.808 2.333 14.067 1.553 30.46-2.348 47.647-9.402 41.383-36.74 91.37-78.903 145.252zm311.6 36.71c-5.46 40.61-32.8 75.765-71.06 91.385-18.742 7.802-39.058 10.15-59.352 7.802-19.52-2.348-39.057-8.598-59.35-20.3-28.119-15.636-56.23-39.83-89.038-75.767 51.54-63.252 82.78-121.058 94.5-172.59 5.469-24.218 6.257-46.08 3.9-66.397-3.113-19.52-10.15-37.489-21.081-53.109-24.226-35.156-64.843-55.45-110.127-55.45-45.283 0-85.901 21.09-110.111 55.45-10.93 15.62-17.968 33.588-21.09 53.11-3.12 20.316-2.348 42.958 3.902 66.395 11.71 51.533 43.73 110.112 94.491 173.371-32.02 35.929-60.919 60.147-89.037 75.766-20.31 11.72-39.822 17.969-59.343 20.302a124.96 124.96 0 01-59.359-7.803c-38.261-15.62-65.6-50.776-71.061-91.386-2.341-19.52-.788-39.042 7.03-60.91 2.332-7.819 6.249-15.62 10.15-24.991 5.47-12.499 11.703-25.786 17.96-39.057l.788-1.553c53.882-116.376 111.672-235.085 171.81-350.666l2.341-4.697c6.258-11.703 12.507-24.202 18.749-35.92 6.25-12.5 13.271-24.219 21.87-34.377 16.4-18.725 38.26-28.891 62.478-28.891 24.218 0 46.08 10.166 62.48 28.891 8.598 10.182 15.62 21.9 21.87 34.376 6.256 11.719 12.506 24.218 18.74 35.921l2.348 4.697a10341.109 10341.109 0 01171.038 351.446v.78c6.257 12.515 11.719 26.559 17.968 39.073 3.901 9.355 7.81 17.157 10.15 24.975 6.235 20.285 8.575 39.822 5.447 60.123z" fill="currentColor" fill-rule="nonzero"/></svg>
                            </div>

                            <!-- Text -->
                            <p class="h2 mb-5 mb-md-7">
                                “Before we even did a kickoff call, I knew we'd make the right choice to work with the Landkit team. Their body of work and influence on the industry speak volumes.”
                            </p>

                            <!-- Footer -->
                            <footer class="blockquote-footer mb-0">
                                <div class="avatar mr-3">
                                    <img src="assets/img/avatars/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
                                </div> <span class="h6 text-uppercase">Jacob Thornton</span>
                            </footer>

                        </blockquote>

                    </div>
                </div>
            </div>
        </section>

        <!-- IMAGE
        ================================================== -->
        <section class="min-vh-100" data-jarallax data-speed=".8" style="background-image: url(assets/img/portfolio/portfolio-cover-3.jpg)"></section>


    </main><!-- #main -->
    <script src="https://cdn.plyr.io/3.6.8/plyr.js"></script>
    <script>
        const players = Array.from(document.querySelectorAll('#player')).map(p => new Plyr(p));

        //const player = new Plyr(document.getElementById('player'));
        player.init()

    </script>

<?php
get_template_part( 'template-parts/shape', 'none');
get_template_part( 'template-parts/cta-newsletter-sub', 'none');
get_footer();
