@extends( 'layouts.app', [ 'title' => 'Why Choose Us' ] )

@section( 'content' )

{{-- Hero Image --}}
<section class="pt-14 pb-10 py-md-14 overlay overlay-black overlay-20 heroImage" id="welcome" style="background: transparent url( '{{ asset( 'images/why-choose-us-2.jpg' ) }}' ) no-repeat fixed center center; background-size: cover;"> {{-- background-color, background-image, background-repeat, background-attachment, background-position --}}

<style type="text/css">
	section.heroImage {
		background-position: 75% center !important;
	}
</style>

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
					Why Choose Us
				</h1>

				{{-- Text --}}
				<p class="lead text-white fontBold subheading">
					Unmatched Experience & Success
				</p>

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
<section class="py-10">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-12" data-aos="fade-up">

				<h2 class="text-primary fontBold">Why Corporate Service Center?</h2>
				<p class="lead text-muted">You have a lot of options to choose from when it comes to registered agent services. So, here's why you should choose Corporate Service Center.</p>

				<h2 class="text-primary fontBold">A Proven Track Record of Success</h2>
				<p class="lead text-muted">We've been in this industry for over 30 years. That means we not only understand the challenges small business owners face, we know how to solve them.</p>

				<h2 class="text-primary fontBold">Exclusive Focus</h2>
				<p class="lead text-muted">Most registered agent services offer a bunch of other services too. And 9 times out of 10, they're going to try and upsell you on things you don't want or need. That won't happen at Corporate Service Center. We focus exclusively on registered agents service.</p>

				<h2 class="text-primary fontBold">Personalized Guidance & Support</h2>
				<p class="lead text-muted">Even though we only focus on registered agent services we still tailor that service to fit your unique business needs. We're here to help you, not the other way around.</p>

				<h2 class="text-primary fontBold">Never Speak to a Machine</h2>
				<p class="lead text-muted">Here at Corporate Service Center we value genuine human interaction. That's why you'll never have to listen to an automated operator or listen to us read from a generic script.</p>

			</div>
		</div> {{-- / .row --}}
	</div> {{-- / .container --}}
</section>

{{-- Let's Work Together --}}
<section data-jarallax data-speed=".8" class="py-15 overlay overlay-black overlay-60 jarallax" style="background-image: url( '{{ asset( 'images/contact-form-b.jpg' ) }}' );">

	{{-- Content --}}
	<div class="container py-10">
		<div class="row justify-content-center">
			<div class="col-12 col-md-10 col-lg-8 text-center" data-aos="fade-up">

				{{-- Button --}}
				<a href="#!" class="btn btn-primary shadow lift text-uppercase" data-toggle="modal" data-target="#modalSignupHorizontal">
					Get Started
				</a>

			</div>
		</div> {{-- / .row --}}
	</div> {{-- / .container --}}

</section>

{{-- Shape --}}
<div class="position-relative">
	<div class="shape shape-bottom shape-fluid-x svg-shim text-gray-200">
		<svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor" />
		</svg>
	</div>
</div>

@endsection
