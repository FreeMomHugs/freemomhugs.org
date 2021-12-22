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
    <!-- Gallery -->
    <div class="container content-space-t-3 content-space-t-lg-5">
      <div class="w-lg-75 text-center mx-lg-auto">
        <!-- Heading -->
        <div class="mb-5 mb-md-10">
          <h1 class="display-4">About Us</h1>
          <p class="lead">Front is a web company that builds websites. Businesses of every size—from new startups to public companies—use our theme to build  and manage their businesses online.</p>
        </div>
        <!-- End Heading -->
      </div>

      <div class="row gx-3">
        <div class="col mb-3">
          <div class="bg-img-start" style="background-image: url(https://static.freemomhugs.org/wp-content/uploads/2021/12/IMG_2395.jpg); height: 15rem;"></div>
        </div>
        <!-- End Col -->

        <div class="col-3 d-none d-md-block mb-3">
          <div class="bg-img-start" style="background-image: url(https://static.freemomhugs.org/wp-content/uploads/2021/12/IMG_2137.jpg); height: 15rem;"></div>
        </div>
        <!-- End Col -->
        
        <div class="col mb-3">
          <div class="bg-img-start" style="background-image: url(https://static.freemomhugs.org/wp-content/uploads/2021/12/IMG_1677.jpg); height: 15rem;"></div>
        </div>
        <!-- End Col -->

        <div class="w-100"></div>

        <div class="col mb-3 mb-md-0">
          <div class="bg-img-start" style="background-image: url(https://static.freemomhugs.org/wp-content/uploads/2021/12/IMG_5885-scaled.jpg); height: 15rem;"></div>
        </div>
        <!-- End Col -->
        
        <div class="col-4 d-none d-md-block mb-3 mb-md-0">
          <div class="bg-img-start" style="background-image: url(https://static.freemomhugs.org/wp-content/uploads/2021/12/IMG_1580.jpg); height: 15rem;"></div>
        </div>
        <!-- End Col -->
        
        <div class="col">
          <div class="bg-img-start" style="background-image: url(https://static.freemomhugs.org/wp-content/uploads/2021/06/IMG_3279.jpeg); height: 15rem;"></div>
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>
    <!-- End Gallery -->

    <!-- Feature Stats -->
    <div class="container content-space-2 content-space-lg-3">
      <div class="row justify-content-lg-center">
        <div class="col-sm-4 col-lg-3 mb-7 mb-sm-0">
          <div class="text-center">
            <h2 class="display-4">7</h2>
            <p class="small">years in business</p>
          </div>
        </div>
        <!-- End Col -->

        <div class="col-sm-4 col-lg-3 mb-7 mb-sm-0">
          <div class="text-center">
            <h2 class="display-4">3,5k+</h2>
            <p class="small">copies sold</p>
          </div>
        </div>
        <!-- End Col -->

        <div class="col-sm-4 col-lg-3">
          <div class="text-center">
            <h2 class="display-4">85%</h2>
            <p class="small">happy customers</p>
          </div>
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>
    <!-- End Feature Stats -->

    <div class="border-top mx-auto" style="max-width: 25rem;"></div>

    <!-- Info -->
    <div class="container content-space-2 content-space-lg-3">
      <div class="row justify-content-lg-between">
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h2>Tools should adapt to the user, not the other way around.</h2>
        </div>
        <!-- End Col -->

        <div class="col-lg-6">
          <p>Since 2007, we have helped 25 companies launch over 1k incredible products. We believe the best digital solutions are built at the intersection of business strategy, available technology, and real user's needs.</p>
          <p>Things can get really complex, really quickly, and a pragmatic, synthetic and clear vision is essential to be able to create something that, after all, is meant to be used. Emotions also have a big role to play and developing clear and beautiful aesthetics is of the utmost importance to create a pleasant environment in which the user actually enjoys the time spent in it. In the end, we're all suckers for beautiful things that just work</p>
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>
    <!-- End Info -->

    <div class="border-top mx-auto" style="max-width: 25rem;"></div>

    <!-- Team -->
    <div class="container content-space-2 content-space-lg-3">
      <!-- Heading -->
      <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
        <span class="text-cap">Our team</span>
        <h2>Creative minds</h2>
      </div>
      <!-- End Heading -->

      <div class="row gx-3 mb-5">
        <div class="col-sm-6 col-lg-3 mb-3">
          <!-- Card -->
          <div class="card card-transition h-100">
            <div class="card-body">
              <div class="avatar avatar-lg avatar-circle mb-4">
                <img class="avatar-img" src="./assets/img/160x160/img7.jpg" alt="Image Description">
              </div>

              <span class="card-subtitle">Founder / CEO</span>
              <h4 class="card-title">Christina Kray</h4>
              <p class="card-text">I am an ambitious workaholic, but apart from that, pretty simple person.</p>
            </div>

            <div class="card-footer pt-0">
              <!-- Socials -->
              <ul class="list-inline mb-0">
                <li class="list-inline-item">
                  <a class="btn btn-outline-primary btn-xs btn-icon rounded" href="#">
                    <i class="bi-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn btn-outline-primary btn-xs btn-icon rounded" href="#">
                    <i class="bi-google"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn btn-outline-primary btn-xs btn-icon rounded" href="#">
                    <i class="bi-twitter"></i>
                  </a>
                </li>
              </ul>
              <!-- End Socials -->
            </div>
          </div>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col-sm-6 col-lg-3 mb-3">
          <!-- Card -->
          <div class="card card-transition h-100">
            <div class="card-body">
              <div class="avatar avatar-lg avatar-circle mb-4">
                <img class="avatar-img" src="./assets/img/160x160/img3.jpg" alt="Image Description">
              </div>

              <span class="card-subtitle">Project Manager</span>
              <h4 class="card-title">Jeff Fisher</h4>
              <p class="card-text">I am an ambitious workaholic, but apart from that, pretty simple person.</p>
            </div>

            <div class="card-footer pt-0">
              <!-- Socials -->
              <ul class="list-inline mb-0">
                <li class="list-inline-item">
                  <a class="btn btn-outline-primary btn-xs btn-icon rounded" href="#">
                    <i class="bi-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn btn-outline-primary btn-xs btn-icon rounded" href="#">
                    <i class="bi-google"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn btn-outline-primary btn-xs btn-icon rounded" href="#">
                    <i class="bi-twitter"></i>
                  </a>
                </li>
              </ul>
              <!-- End Socials -->
            </div>
          </div>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col-sm-6 col-lg-3 mb-3">
          <!-- Card -->
          <div class="card card-transition h-100">
            <div class="card-body">
              <div class="avatar avatar-lg avatar-circle mb-4">
                <img class="avatar-img" src="./assets/img/160x160/img10.jpg" alt="Image Description">
              </div>

              <span class="card-subtitle">Product Designer</span>
              <h4 class="card-title">Amy Forren</h4>
              <p class="card-text">I am an ambitious workaholic, but apart from that, pretty simple person.</p>
            </div>

            <div class="card-footer pt-0">
              <!-- Socials -->
              <ul class="list-inline mb-0">
                <li class="list-inline-item">
                  <a class="btn btn-outline-primary btn-xs btn-icon rounded" href="#">
                    <i class="bi-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn btn-outline-primary btn-xs btn-icon rounded" href="#">
                    <i class="bi-google"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn btn-outline-primary btn-xs btn-icon rounded" href="#">
                    <i class="bi-twitter"></i>
                  </a>
                </li>
              </ul>
              <!-- End Socials -->
            </div>
          </div>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col-sm-6 col-lg-3 mb-3">
          <!-- Card -->
          <div class="card card-transition h-100">
            <div class="card-body">
              <div class="avatar avatar-lg avatar-circle mb-4">
                <img class="avatar-img" src="./assets/img/160x160/img5.jpg" alt="Image Description">
              </div>

              <span class="card-subtitle">Support Consultant</span>
              <h4 class="card-title">Philip Williams</h4>
              <p class="card-text">I am an ambitious workaholic, but apart from that, pretty simple person.</p>
            </div>

            <div class="card-footer pt-0">
              <!-- Socials -->
              <ul class="list-inline mb-0">
                <li class="list-inline-item">
                  <a class="btn btn-outline-primary btn-xs btn-icon rounded" href="#">
                    <i class="bi-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn btn-outline-primary btn-xs btn-icon rounded" href="#">
                    <i class="bi-google"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn btn-outline-primary btn-xs btn-icon rounded" href="#">
                    <i class="bi-twitter"></i>
                  </a>
                </li>
              </ul>
              <!-- End Socials -->
            </div>
          </div>
          <!-- End Card -->
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->

      <!-- Card Info -->
      <div class="text-center">
        <div class="card card-info-link card-sm">
          <div class="card-body">
            Want to work with us? <a class="card-link ms-2" href="./page-hire-us.html">We are hiring <span class="bi-chevron-right small ms-1"></span></a>
          </div>
        </div>
      </div>
      <!-- End Card Info -->
    </div>
    <!-- End Team -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

<?php
get_template_part( 'template-parts/cta-newsletter-sub', 'none');
get_footer();
