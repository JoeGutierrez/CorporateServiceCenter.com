		{{-- Footer --}}
		<footer class="py-8 py-md-11 bg-gray-200">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-6 col-lg-3 text-center text-lg-left mb-5 mb-lg-0">

						{{-- Brand --}}
						<a href="{{ route( 'index' ) }}">
							<img src="{{ asset( '/images/logo-csc.png' ) }}" alt="..." class="footer-brand img-fluid mb-2">
						</a>

						{{-- Text --}}
						<p class="text-gray-700 mb-2">
							Committed to your success.
						</p>

					</div>
					<div class="col-12 col-md-6 col-lg-3 text-center text-lg-left">

						{{-- Heading --}}
						<h6 class="font-weight-bold text-uppercase text-gray-700">
							Company
						</h6>

						{{-- List --}}
						<ul class="list-unstyled text-muted mb-6 mb-md-8 mb-lg-0">
							<li class="mb-3">
								<a class="text-reset {{ request()->is( 'wholesale-services' ) ? 'fontBold' : '' }}" href="{{ route( 'wholesale_services' ) }}">
									Wholesale Services
								</a>
							</li>
							<li class="mb-3">
								<a class="text-reset {{ request()->is( 'about-us' ) ? 'fontBold' : '' }}" href="{{ route( 'about_us' ) }}">
									About Us
								</a>
							</li>
							<li class="mb-3">
								<a class="text-reset {{ request()->is( 'why-choose-us' ) ? 'fontBold' : '' }}" href="{{ route( 'why_choose_us' ) }}">
									Why Choose Us
								</a>
							</li>
						</ul>

					</div>
					<div class="col-12 col-md-6 col-lg-3 text-center text-lg-left">

						{{-- Heading --}}
						<h6 class="font-weight-bold text-uppercase text-gray-700">
							Services
						</h6>

						{{-- List --}}
						<ul class="list-unstyled text-muted mb-6 mb-md-8 mb-lg-0">
							<li class="mb-3">
								<a class="text-reset {{ request()->is( 'what-is-a-registered-agent' ) ? 'fontBold' : '' }}" href="{{ route( 'what_is_a_registered_agent' ) }}" style="letter-spacing: -.5px;">
									What Is a Registered Agent
								</a>
							</li>
							<li class="mb-3">
								<a class="text-reset {{ request()->is( 'why-use-a-registered-agent' ) ? 'fontBold' : '' }}" href="{{ route( 'why_use_a_registered_agent' ) }}" style="letter-spacing: -.5px;">
									Why Use a Registered Agent
								</a>
							</li>
						</ul>

					</div>
					<div class="col-12 col-md-6 col-lg-3 text-center text-lg-left">

						{{-- Heading --}}
						<h6 class="font-weight-bold text-uppercase text-gray-700">
							Connect
						</h6>

						{{-- List --}}
						<ul class="list-unstyled text-muted mb-6 mb-md-8 mb-lg-0">
							<li class="mb-3">
								<a class="text-reset {{ request()->is( 'contact' ) ? 'fontBold' : '' }}" href="{{ route( 'contact' ) }}">
									Contact
								</a>
							</li>
						</ul>

						{{-- Social --}}
						<a href="https://www.facebook.com/CorporateServiceCenter" class="" target="_blank"><img src="./assets/img/icons/social/facebook.svg" class="list-social-icon" alt="Facebook"></a>
						<a href="https://www.linkedin.com/company/corporate-service-center-inc/" class="" target="_blank"><img src="./assets/img/icons/social/linkedin.svg" class="list-social-icon" alt="LinkedIn"></a>

					</div>
				</div> {{-- / .row --}}
			</div> {{-- / .container --}}
		</footer>
