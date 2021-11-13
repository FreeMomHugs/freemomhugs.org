<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP-FreeMomHugs
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
    <!-- Funraise Donate -->
    <script>
        (function(f,u,n,r,a,i,s,e){var data={window:window,document:document,tag:"script",data:"funraise",orgId:f,uri:u,common:n,client:r,script:a};var scripts;var funraiseScript;data.window[data.data]=data.window[data.data]||[];if(data.window[data.data].scriptIsLoading||data.window[data.data].scriptIsLoaded)return;data.window[data.data].loading=true;data.window[data.data].push("init",data);scripts=data.document.getElementsByTagName(data.tag)[0];funraiseScript=data.document.createElement(data.tag);funraiseScript.async=true;funraiseScript.src=data.uri+data.common+data.script+"?orgId="+data.orgId;scripts.parentNode.insertBefore(funraiseScript,scripts)})('ac466c9f-c8bb-4a53-a71f-f3cc66a34e9f','https://assets.funraise.io','/widget/common/2.0','/widget/client','/inject-form.js');
    </script>
    <script>
        window.funraise.push('create', { form: 8370 });
    </script>


    <script>
        window.fwSettings={
            'widget_id':43000001812
        };
        !function(){if("function"!=typeof window.FreshworksWidget){var n=function(){n.q.push(arguments)};n.q=[],window.FreshworksWidget=n}}()
    </script>
    <script type='text/javascript' src='https://widget.freshworks.com/widgets/43000001812.js' async defer></script>

    <?php
    if (true) {
        get_template_part( 'template-parts/opengraph');
    }
    ?>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-164236741-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-164236741-2');
    </script>


</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php
if(!$args["header_background_color"]):
?>
    <!-- ========== HEADER ========== -->
    <header id="header" class="navbar navbar-expand-lg navbar-end navbar-absolute-top navbar-black navbar-show-hide"
            data-hs-header-options='{
                "fixMoment": 1000,
                "fixEffect": "slide"
              }'>
        <!-- Topbar -->
        <div class="container navbar-topbar">
            <nav class="js-mega-menu navbar-nav-wrap">
                <!-- Toggler -->
                <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#topbarNavDropdown" aria-controls="topbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="d-flex justify-content-between align-items-center small">
                <span class="navbar-toggler-text">Topbar</span>

                <span class="navbar-toggler-default">
                  <i class="bi-chevron-down ms-2"></i>
                </span>
                <span class="navbar-toggler-toggled">
                  <i class="bi-chevron-up ms-2"></i>
                </span>
              </span>
                </button>
                <!-- End Toggler -->

                <div id="topbarNavDropdown" class="navbar-nav-wrap-collapse collapse navbar-collapse navbar-topbar-collapse">
                    <div class="navbar-toggler-wrapper">
                        <div class="navbar-topbar-toggler d-flex justify-content-between align-items-center">
                            <span class="navbar-toggler-text small">Topbar</span>

                            <!-- Toggler -->
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topbarNavDropdown" aria-controls="topbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="bi-x"></i>
                            </button>
                            <!-- End Toggler -->
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- End Topbar -->

        <div class="container">
            <nav class="js-mega-menu navbar-nav-wrap">
                <!-- Default Logo -->
                <a class="navbar-brand" href="./index.html" aria-label="Front">
                    <?php
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );

                    ?>
    <!--                <img class="navbar-brand-logo" src="--><?php //echo $image[0]; ?><!--" alt="Logo">-->
                    <img class="navbar-brand-logo" src="https://static.freemomhugs.org/wp-content/uploads/2020/10/fmh-original-white.png" alt="Logo">
                </a>
                <!-- End Default Logo -->

                <!-- Toggler -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-default">
                <i class="bi-list"></i>
              </span>
                    <span class="navbar-toggler-toggled">
                <i class="bi-x"></i>
              </span>
                </button>
                <!-- End Toggler -->

                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <div class="navbar-absolute-top-scroller">
                        <ul class="navbar-nav">
                            <!-- Landings -->
                            <li class="hs-has-mega-menu nav-item">
                                <a id="landingsMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle active" aria-current="page" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Landings</a>

                                <!-- Mega Menu -->
                                <div class="hs-mega-menu dropdown-menu w-100" aria-labelledby="landingsMegaMenu" style="min-width: 30rem;">
                                    <div class="row">
                                        <div class="col-lg-6 d-none d-lg-block">
                                            <!-- Banner Image -->
                                            <div class="navbar-dropdown-menu-banner" style="background-image: url(./assets/svg/components/shape-3.svg);">
                                                <div class="navbar-dropdown-menu-banner-content">
                                                    <div class="mb-4">
                                                        <span class="h2 d-block">Branding Works</span>
                                                        <p>Experience a level of our quality in both design &amp; customization works.</p>
                                                    </div>
                                                    <a class="btn btn-primary btn-transition" href="#">Learn more <i class="bi-chevron-right small"></i></a>
                                                </div>
                                            </div>
                                            <!-- End Banner Image -->
                                        </div>
                                        <!-- End Col -->

                                        <div class="col-lg-6">
                                            <div class="navbar-dropdown-menu-inner">
                                                <div class="row">
                                                    <div class="col-sm mb-3 mb-sm-0">
                                                        <span class="dropdown-header">Classic</span>
                                                        <a class="dropdown-item " href="./landing-classic-corporate.html">Corporate</a>
                                                        <a class="dropdown-item " href="./landing-classic-analytics.html">Analytics <span class="badge bg-primary rounded-pill ms-1">Hot</span></a>
                                                        <a class="dropdown-item " href="./landing-classic-studio.html">Studio</a>
                                                        <a class="dropdown-item active" href="./landing-classic-marketing.html">Marketing</a>
                                                        <a class="dropdown-item " href="./landing-classic-advertisement.html">Advertisement</a>
                                                        <a class="dropdown-item " href="./landing-classic-consulting.html">Consulting</a>
                                                        <a class="dropdown-item " href="./landing-classic-portfolio.html">Portfolio</a>
                                                        <a class="dropdown-item " href="./landing-classic-software.html">Software</a>
                                                        <a class="dropdown-item " href="./landing-classic-business.html">Business</a>
                                                    </div>
                                                    <!-- End Col -->

                                                    <div class="col-sm">
                                                        <div class="mb-3">
                                                            <span class="dropdown-header">App</span>
                                                            <a class="dropdown-item " href="./landing-app-ui-kit.html">UI Kit</a>
                                                            <a class="dropdown-item " href="./landing-app-saas.html">SaaS</a>
                                                            <a class="dropdown-item " href="./landing-app-workflow.html">Workflow</a>
                                                            <a class="dropdown-item " href="./landing-app-payment.html">Payment</a>
                                                            <a class="dropdown-item " href="./landing-app-tool.html">Tool</a>
                                                        </div>

                                                        <span class="dropdown-header">Onepage</span>
                                                        <a class="dropdown-item " href="./landing-onepage-corporate.html">Corporate</a>
                                                        <a class="dropdown-item " href="./landing-onepage-saas.html">SaaS <span class="badge bg-primary rounded-pill ms-1">Hot</span></a>
                                                    </div>
                                                    <!-- End Col -->
                                                </div>
                                                <!-- End Row -->
                                            </div>
                                        </div>
                                        <!-- End Col -->
                                    </div>
                                    <!-- End Row -->
                                </div>
                                <!-- End Mega Menu -->
                            </li>
                            <!-- End Landings -->

                            <!-- Company -->
                            <li class="hs-has-sub-menu nav-item">
                                <a id="companyMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Company</a>

                                <!-- Mega Menu -->
                                <div class="hs-sub-menu dropdown-menu" aria-labelledby="companyMegaMenu" style="min-width: 14rem;">
                                    <a class="dropdown-item " href="./page-about.html">About</a>
                                    <a class="dropdown-item " href="./page-services.html">Services</a>
                                    <a class="dropdown-item " href="./page-customer-stories.html">Customer Stories</a>
                                    <a class="dropdown-item " href="./page-customer-story.html">Customer Story</a>
                                    <a class="dropdown-item " href="./page-careers.html">Careers</a>
                                    <a class="dropdown-item " href="./page-careers-overview.html">Careers Overview</a>
                                    <a class="dropdown-item " href="./page-hire-us.html">Hire Us</a>
                                    <a class="dropdown-item " href="./page-pricing.html">Pricing</a>
                                    <a class="dropdown-item " href="./page-contacts-agency.html">Contacts: Agency</a>
                                    <a class="dropdown-item " href="./page-contacts-startup.html">Contacts: Startup</a>
                                </div>
                                <!-- End Mega Menu -->
                            </li>
                            <!-- End Company -->

                            <!-- Account -->
                            <li class="hs-has-sub-menu nav-item">
                                <a id="accountMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Account</a>

                                <!-- Mega Menu -->
                                <div class="hs-sub-menu dropdown-menu" aria-labelledby="accountMegaMenu" style="min-width: 14rem;">
                                    <!-- Authentication -->
                                    <div class="hs-has-sub-menu nav-item">
                                        <a id="authenticationMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Authentication</a>

                                        <div class="hs-sub-menu dropdown-menu" aria-labelledby="authenticationMegaMenu" style="min-width: 14rem;">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#signupModal">Signup Modal</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item " href="./page-login.html">Login</a>
                                            <a class="dropdown-item " href="./page-signup.html">Signup</a>
                                            <a class="dropdown-item " href="./page-reset-password.html">Reset Password</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item " href="./page-login-simple.html">Login Simple</a>
                                            <a class="dropdown-item " href="./page-signup-simple.html">Signup Simple</a>
                                            <a class="dropdown-item " href="./page-reset-password-simple.html">Reset Password Simple</a>
                                        </div>
                                    </div>
                                    <!-- End Authentication -->

                                    <a class="dropdown-item " href="./account-overview.html">Personal Info</a>
                                    <a class="dropdown-item " href="./account-security.html">Security</a>
                                    <a class="dropdown-item " href="./account-notifications.html">Notifications</a>
                                    <a class="dropdown-item " href="./account-preferences.html">Preferences</a>
                                    <a class="dropdown-item " href="./account-orders.html">Orders</a>
                                    <a class="dropdown-item " href="./account-wishlist.html">Wishlist</a>
                                    <a class="dropdown-item " href="./account-payments.html">Payments</a>
                                    <a class="dropdown-item " href="./account-address.html">Address</a>
                                    <a class="dropdown-item " href="./account-teams.html">Teams</a>
                                </div>
                                <!-- End Mega Menu -->
                            </li>
                            <!-- End Account -->

                            <!-- Pages -->
                            <li class="hs-has-sub-menu nav-item">
                                <a id="pagesMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>

                                <!-- Mega Menu -->
                                <div class="hs-sub-menu dropdown-menu" aria-labelledby="pagesMegaMenu" style="min-width: 14rem;">
                                    <a class="dropdown-item " href="./page-faq.html">FAQ</a>
                                    <a class="dropdown-item " href="./page-terms.html">Terms &amp; Conditions</a>
                                    <a class="dropdown-item " href="./page-privacy.html">Privacy &amp; Policy</a>
                                    <a class="dropdown-item " href="./page-coming-soon.html">Coming Soon</a>
                                    <a class="dropdown-item " href="./page-maintenance-mode.html">Maintenance Mode</a>
                                    <a class="dropdown-item " href="./page-status.html">Status</a>
                                    <a class="dropdown-item " href="./page-invoice.html">Invoice</a>
                                    <a class="dropdown-item " href="./page-error-404.html">Error 404</a>
                                </div>
                                <!-- End Mega Menu -->
                            </li>
                            <!-- End Pages -->

                            <!-- Blog -->
                            <li class="hs-has-sub-menu nav-item">
                                <a id="blogMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Blog</a>

                                <!-- Mega Menu -->
                                <div class="hs-sub-menu dropdown-menu" aria-labelledby="blogMegaMenu" style="min-width: 14rem;">
                                    <a class="dropdown-item " href="./blog-journal.html">Journal</a>
                                    <a class="dropdown-item " href="./blog-metro.html">Metro</a>
                                    <a class="dropdown-item " href="./blog-newsroom.html">Newsroom</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item " href="./blog-article.html">Article</a>
                                    <a class="dropdown-item " href="./blog-author-profile.html">Author Profile</a>
                                </div>
                                <!-- End Mega Menu -->
                            </li>
                            <!-- End Blog -->

                            <!-- Portfolio -->
                            <li class="hs-has-sub-menu nav-item">
                                <a id="portfolioMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Portfolio</a>

                                <!-- Mega Menu -->
                                <div class="hs-sub-menu dropdown-menu" aria-labelledby="portfolioMegaMenu" style="min-width: 14rem;">
                                    <a class="dropdown-item " href="./portfolio-grid.html">Grid</a>
                                    <a class="dropdown-item " href="./portfolio-product-article.html">Product Article</a>
                                    <a class="dropdown-item " href="./portfolio-case-studies-branding.html">Case Studies: Branding</a>
                                    <a class="dropdown-item " href="./portfolio-case-studies-product.html">Case Studies: Product</a>
                                </div>
                                <!-- End Mega Menu -->
                            </li>
                            <!-- End Portfolio -->

                            <!-- Button -->
                            <li class="nav-item">
                                <a class="btn btn-soft-light btn-transition" href="https://themes.getbootstrap.com/product/front-multipurpose-responsive-template/" target="_blank">Contact Us</a>
                            </li>
                            <!-- End Button -->

                            <!-- Button -->
                            <li class="nav-item">
                                <a class="btn btn-light btn-transition" href="https://themes.getbootstrap.com/product/front-multipurpose-responsive-template/" target="_blank">Donate</a>
                            </li>
                            <!-- End Button -->

                        </ul>
                    </div>
                </div>
                <!-- End Collapse -->
            </nav>
        </div>
    </header>
<?php
else:
    get_template_part( 'template-parts/dark-nav-bar');

endif;
?>

<!-- ========== END HEADER ========== -->
