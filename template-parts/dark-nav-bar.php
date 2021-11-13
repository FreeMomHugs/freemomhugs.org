<?php

?>

<!-- ========== HEADER ========== -->
<header id="header" class="navbar navbar-expand-lg navbar-end navbar-light bg-light">
	<div class="container">
		<nav class="js-mega-menu navbar-nav-wrap">
			<!-- Default Logo -->
			<a class="navbar-brand" href="/" aria-label="Front">
				<img class="navbar-brand-logo" style="max-width: 4rem;min-width:3.5rem;" src="https://static.freemomhugs.org/logo/og-bear.png" alt="Logo">
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
				<ul class="navbar-nav">
					<!-- Landings -->
					<li class="hs-has-mega-menu nav-item">
						<a id="landingsMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle" aria-current="page" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Landings</a>

						<!-- Mega Menu -->
						<div class="hs-mega-menu dropdown-menu w-100" aria-labelledby="landingsMegaMenu" style="min-width: 30rem;">
							<div class="row">
								<div class="col-lg-6 d-none d-lg-block">
									<!-- Banner Image -->
									<div class="navbar-dropdown-menu-banner" style="background-image: url(../assets/svg/components/shape-3.svg);">
										<div class="navbar-dropdown-menu-banner-content">
											<div class="mb-4">
												<span class="h2 d-block">Branding Works</span>
												<p>Experience a level of our quality in both design & customization works.</p>
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
												<a class="dropdown-item" href="#">Corporate</a>
												<a class="dropdown-item" href="#">Analytics <span class="badge bg-primary rounded-pill ms-1">Hot</span></a>
												<a class="dropdown-item" href="#">Studio</a>
												<a class="dropdown-item" href="#">Marketing</a>
												<a class="dropdown-item" href="#">Advertisement</a>
												<a class="dropdown-item" href="#">Consulting</a>
												<a class="dropdown-item" href="#">Portfolio</a>
												<a class="dropdown-item" href="#">Software</a>
												<a class="dropdown-item" href="#">Business</a>
											</div>
											<!-- End Col -->

											<div class="col-sm">
												<div class="mb-3">
													<span class="dropdown-header">App</span>
													<a class="dropdown-item" href="#">UI Kit</a>
													<a class="dropdown-item" href="#">SaaS</a>
													<a class="dropdown-item" href="#">Workflow</a>
													<a class="dropdown-item" href="#">Payment</a>
													<a class="dropdown-item" href="#">Tool</a>
												</div>

												<span class="dropdown-header">Onepage</span>
												<a class="dropdown-item" href="#">Corporate</a>
												<a class="dropdown-item" href="#">SaaS <span class="badge bg-primary rounded-pill ms-1">Hot</span></a>
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
						<a id="companyMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Company</a>

						<!-- Mega Menu -->
						<div class="hs-sub-menu dropdown-menu" aria-labelledby="companyMegaMenu" style="min-width: 14rem;">
							<a class="dropdown-item" href="#">About</a>
							<a class="dropdown-item" href="#">Services</a>
							<a class="dropdown-item" href="#">Customer Stories</a>
							<a class="dropdown-item" href="#">Customer Story</a>
							<a class="dropdown-item" href="#">Careers</a>
							<a class="dropdown-item" href="#">Careers Overview</a>
							<a class="dropdown-item" href="#">Hire Us</a>
							<a class="dropdown-item" href="#">Pricing</a>
							<a class="dropdown-item" href="#">Contacts: Agency</a>
							<a class="dropdown-item" href="#">Contacts: Startup</a>
						</div>
						<!-- End Mega Menu -->
					</li>
					<!-- End Company -->

					<!-- Account -->
					<li class="hs-has-sub-menu nav-item">
						<a id="accountMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Account</a>

						<!-- Mega Menu -->
						<div class="hs-sub-menu dropdown-menu" aria-labelledby="accountMegaMenu" style="min-width: 14rem;">
							<!-- Authentication -->
							<div class="hs-has-sub-menu nav-item">
								<a id="authenticationMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Authentication</a>

								<div class="hs-sub-menu dropdown-menu" aria-labelledby="authenticationMegaMenu" style="min-width: 14rem;">
									<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#signupModal">Signup Modal</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#">Login</a>
									<a class="dropdown-item" href="#">Signup</a>
									<a class="dropdown-item" href="#">Reset Password</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#">Login Simple</a>
									<a class="dropdown-item" href="#">Signup Simple</a>
									<a class="dropdown-item" href="#">Reset Password Simple</a>
								</div>
							</div>
							<!-- End Authentication -->

							<a class="dropdown-item" href="#">Personal Info</a>
							<a class="dropdown-item" href="#">Security</a>
							<a class="dropdown-item" href="#">Notifications</a>
							<a class="dropdown-item" href="#">Preferences</a>
							<a class="dropdown-item" href="#">Orders</a>
							<a class="dropdown-item" href="#">Wishlist</a>
							<a class="dropdown-item" href="#">Payments</a>
							<a class="dropdown-item" href="#">Address</a>
							<a class="dropdown-item" href="#">Teams</a>
						</div>
						<!-- End Mega Menu -->
					</li>
					<!-- End Account -->

					<!-- Pages -->
					<li class="hs-has-sub-menu nav-item">
						<a id="pagesMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>

						<!-- Mega Menu -->
						<div class="hs-sub-menu dropdown-menu" aria-labelledby="pagesMegaMenu" style="min-width: 14rem;">
							<a class="dropdown-item" href="#">FAQ</a>
							<a class="dropdown-item" href="#">Terms & Conditions</a>
							<a class="dropdown-item" href="#">Privacy & Policy</a>
							<a class="dropdown-item" href="#">Coming Soon</a>
							<a class="dropdown-item" href="#">Maintenance Mode</a>
							<a class="dropdown-item" href="#">Status</a>
							<a class="dropdown-item" href="#">Invoice</a>
							<a class="dropdown-item" href="#">Error 404</a>
						</div>
						<!-- End Mega Menu -->
					</li>
					<!-- End Pages -->

					<!-- Blog -->
					<li class="hs-has-sub-menu nav-item">
						<a id="blogMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Blog</a>

						<!-- Mega Menu -->
						<div class="hs-sub-menu dropdown-menu" aria-labelledby="blogMegaMenu" style="min-width: 14rem;">
							<a class="dropdown-item" href="#">Journal</a>
							<a class="dropdown-item" href="#">Metro</a>
							<a class="dropdown-item" href="#">Newsroom</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Article</a>
							<a class="dropdown-item" href="#">Author Profile</a>
						</div>
						<!-- End Mega Menu -->
					</li>
					<!-- End Blog -->

					<!-- Portfolio -->
					<li class="hs-has-sub-menu nav-item">
						<a id="portfolioMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Portfolio</a>

						<!-- Mega Menu -->
						<div class="hs-sub-menu dropdown-menu" aria-labelledby="portfolioMegaMenu" style="min-width: 14rem;">
							<a class="dropdown-item" href="#">Grid</a>
							<a class="dropdown-item" href="#">Product Article</a>
							<a class="dropdown-item" href="#">Case Studies: Branding</a>
							<a class="dropdown-item" href="#">Case Studies: Product</a>
						</div>
						<!-- End Mega Menu -->
					</li>
					<!-- End Portfolio -->

                    <!-- Button -->
                    <li class="nav-item">
                        <a class="btn btn-soft-dark btn-transition" href="https://themes.getbootstrap.com/product/front-multipurpose-responsive-template/" target="_blank">Contact Us</a>
                    </li>
                    <!-- End Button -->

                    <!-- Button -->
                    <li class="nav-item">
                        <a class="btn btn-dark btn-transition" href="https://themes.getbootstrap.com/product/front-multipurpose-responsive-template/" target="_blank">Donate</a>
                    </li>
                    <!-- End Button -->
				</ul>
			</div>
			<!-- End Collapse -->
		</nav>
	</div>
</header>

<!-- JS Implementing Plugins -->
<script src="../assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.js"></script>

<!-- JS Plugins Init. -->
<script>
    (function() {
        // INITIALIZATION OF MEGA MENU
        // =======================================================
        new HSMegaMenu('.js-mega-menu', {
            desktop: {
                position: 'left'
            }
        })
    })()
</script>

<!-- ========== END HEADER ========== -->
