		{{-- Navbar --}}
		<nav class="navbar navbar-expand-lg navbar-light bg-white border-top border-primary fixed-top">
			<div class="container">

				{{-- Brand --}}
				<a class="navbar-brand" href="/">
					<img src="{{ asset( 'images/logo-csc.png' ) }}" class="navbar-brand-img rectangle" alt="Corporate Service Center Logo">
					<img src="{{ asset( 'images/logo-csc-square.png' ) }}" class="navbar-brand-img square" alt="Corporate Service Center Logo">
				</a>

				{{-- Toggler --}}
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				{{-- Collapse --}}
				<div class="collapse navbar-collapse" id="navbarCollapse">

					{{-- Toggler --}}
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
						<i class="fe fe-x"></i>
					</button>

					{{-- Navigation --}}
					<ul class="navbar-nav ml-auto">
						{{-- Mobile dropdown --}}
						<li class="nav-item d-lg-none">
							<a class="nav-link d-inline-block d-lg-none {{ request()->is( 'what-is-a-registered-agent' ) ? 'active' : '' }}" href="{{ route( 'what_is_a_registered_agent' ) }}" aria-haspopup="true" aria-expanded="false">
								What Is a Registered Agent
							</a>
							<a class="dropdown-toggle dropdown-toggle-split d-inline-block d-lg-none" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>

							<div class="dropdown-menu">
								<a class="dropdown-item {{ request()->is( 'why-use-a-registered-agent' ) ? 'active' : '' }}" href="{{ route( 'why_use_a_registered_agent' ) }}">
									Why Use a Registered Agent
								</a>
							</div>
						</li>

						{{-- Desktop dropdown --}}
						<li class="nav-item dropdown d-none d-lg-inline-block">
							<a class="nav-link {{ request()->is( 'what-is-a-registered-agent' ) ? 'active' : '' }}" href="{{ route( 'what_is_a_registered_agent' ) }}" aria-haspopup="true" aria-expanded="false">
								What Is a Registered Agent {{-- <span class="fe fe-chevron-down"></span> --}}
							</a>

							<div class="dropdown-menu">
								<a class="dropdown-item {{ request()->is( 'why-use-a-registered-agent' ) ? 'active' : '' }}" href="{{ route( 'why_use_a_registered_agent' ) }}">
									Why Use a Registered Agent
								</a>
							</div>
						</li>

						<li class="nav-item">
							<a class="nav-link {{ request()->is( 'wholesale-services' ) ? 'active' : '' }}" href="{{ route( 'wholesale_services' ) }}">
								Wholesale Services
							</a>
						</li>

						{{-- Mobile dropdown --}}
						<li class="nav-item d-lg-none">
							<a class="nav-link d-inline-block d-lg-none {{ request()->is( 'about-us' ) ? 'active' : '' }}" href="{{ route( 'about_us' ) }}" aria-haspopup="true" aria-expanded="false">
								About Us
							</a>
							<a class="dropdown-toggle dropdown-toggle-split d-inline-block d-lg-none" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>

							<div class="dropdown-menu">
								<a class="dropdown-item {{ request()->is( 'why-choose-us' ) ? 'active' : '' }}" href="{{ route( 'why_choose_us' ) }}">
									Why Choose Us
								</a>
							</div>
						</li>

						{{-- Desktop dropdown --}}
						<li class="nav-item dropdown d-none d-lg-inline-block">
							<a class="nav-link {{ request()->is( 'about-us' ) ? 'active' : '' }}" href="{{ route( 'about_us' ) }}" aria-haspopup="true" aria-expanded="false">
								About Us {{-- <span class="fe fe-chevron-down"> --}}</span>
							</a>

							<div class="dropdown-menu">
								<a class="dropdown-item {{ request()->is( 'why-choose-us' ) ? 'active' : '' }}" href="{{ route( 'why_choose_us' ) }}">
									Why Choose Us
								</a>
							</div>
						</li>

						<li class="nav-item">
							<a class="nav-link {{ request()->is( 'contact' ) ? 'active' : '' }}" href="{{ route( 'contact' ) }}">
								Contact
							</a>
						</li>
					</ul>

					{{-- Button --}}
					<button class="navbar-btn btn btn-sm btn-primary lift ml-auto text-uppercase" data-toggle="modal" data-target="#modalSignupHorizontal">
						Learn More
					</button>

				</div>

			</div>
		</nav>
