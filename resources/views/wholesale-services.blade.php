@extends( 'layouts.app', [ 'title' => 'About Us' ] )

@section( 'content' )

{{-- Hero Image --}}
<section class="pt-14 pb-10 py-md-14 overlay overlay-white overlay-40 heroImage" id="welcome" style="background: transparent url( '{{ asset( 'images/use-our-services.jpg' ) }}' ) no-repeat fixed center center; background-size: cover;"> {{-- background-color, background-image, background-repeat, background-attachment, background-position --}}

	{{-- Shape --}}
	<div class="shape shape-blur-3 svg-shim text-white">
		<svg viewBox="0 0 1738 487" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M0 0h1420.92s713.43 457.505 0 485.868C707.502 514.231 0 0 0 0z" fill="url(#paint0_linear)" />
			<defs>
				<linearGradient id="paint0_linear" x1="0" y1="0" x2="1049.98" y2="912.68" gradientUnits="userSpaceOnUse">
					<stop stop-color="currentColor" stop-opacity=".075" />
					<stop offset="1" stop-color="currentColor" stop-opacity="0" />
				</linearGradient>
			</defs>
		</svg> </div>

	{{-- Content --}}
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 text-center">

				{{-- Heading --}}
				<h1 class="display-2 fontBold text-uppercase">
					Wholesale Registered<br>Agent Services
				</h1>

{{--
				<!-- Text -->>
				<p class="lead text-white fontBold subheading">
					A Different Kind of Incorporation Company
				</p>
--}}

				{{--
				<!-- Button -->
				<a href="#contact-us" class="btn lift" data-scroll>
					Let's Get Started
				</a>
				--}}

			</div>
		</div> {{-- / .row --}}
	</div> {{-- / .container --}}

</section>

{{-- Shape --}}
<div class="position-relative">
	<div class="shape shape-bottom shape-fluid-x svg-shim text-white">
		<svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor" />
		</svg>
	</div>
</div>

{{-- Main --}}
<section class="my-10">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-12" data-aos="fade-up">

				{{-- Text --}}
				<p class="lead text-muted">
					Many companies who want to offer registered agent services, quickly realize that maintaining a national network is not easily achieved or maintained.
				</p>

				<p class="lead text-muted">
					Well, we do all the heavy lifting for you here at Corporate Service Center. That way, you can offer registered agent services to your clients without the massive overhead costs and time requirements.
				</p>

				<h1>
					<span class="text-primary fontBold">Why Partner With Us</span>
				</h1>

				<p class="lead text-muted">
					Because we focus exclusively on registered agent services, we've taken the time to craft customizable solutions for our wholesale clients. When you partner with us, you gain access to premium registered agent features.
				</p>

				<h2 style="font-size: 1.5rem;">
					<span class="text-primary fontBold">Simple and Controlled Interactions</span>
				</h2>

				<p class="lead text-muted">
					When you use our wholesale services, we work closely with your clients to ensure we're providing the very best in registered agent services. We focus on understanding the businesses of our clients, keeping their legal documents safe and their business affairs private.
				</p>

				<h2 style="font-size: 1.5rem;">
					<span class="text-primary fontBold">No Commingling of Brands</span>
				</h2>

				<p class="lead text-muted">
					It takes a lot of hard work to establish a brand and we honor that effort. That's why when a company hires Corporate Service Center, they don't have to worry about commingling and devaluing their brand. The registered agent service is provided under their company name, not ours.
				</p>

				<p class="lead text-muted">
					We know that not all companies have the resources to offer their clients registered agent service nationwide. However, with Corporate Service Center, you can now offer registered agent service to your clients, without incurring the massive overhead costs and time required to establish offices in every state. We offer the solution you need.
				</p>

			</div>
		</div> {{-- / .row --}}
	</div> {{-- / .container --}}
</section>

{{-- Let's Work Together --}}
<section data-jarallax data-speed=".8" class="py-15 overlay overlay-black overlay-60 jarallax" style="background-image: url( '{{ asset( 'images/lets-work-together.jpg' ) }}' );">

	{{-- Content --}}
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-md-10 col-lg-8 text-center" data-aos="fade-up">

{{--
				<!-- Heading -->>
				<h1 class="display-2 font-weight-bold text-white">
					Let's Work Together
				</h1>

				<!-- Text -->>
				<p class="lead text-white mb-8">
					Wherever you are in the process of launching your dream, we can help you get there faster.
				</p>
--}}

				{{-- Button --}}
				<a href="#!" class="btn btn-primary shadow lift text-uppercase" data-toggle="modal" data-target="#modalSignupHorizontal">
					Get Started
				</a>

			</div>
		</div> {{-- / .row --}}
	</div> {{-- / .container --}}

</section>

{{-- SHAPE --}}
<div class="position-relative">
	<div class="shape shape-bottom shape-fluid-x svg-shim text-gray-200">
		<svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor" />
		</svg>
	</div>
</div>

@endsection
