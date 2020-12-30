@extends( 'layouts.app', [ 'title' => 'What Is a Registered Agent?' ] )

@section( 'content' )

{{-- Hero Image --}}
<section class="pt-14 pb-10 py-md-14 overlay overlay-white overlay-30 heroImage" id="welcome" style="background: transparent url( '{{ asset( 'images/why-use-a-registered-agent.jpg' ) }}' ) no-repeat fixed center center; background-size: cover;"> {{-- background-color, background-image, background-repeat, background-attachment, background-position --}}

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
					Why Use a Registered Agent
				</h1>

				{{-- Text --}}
				<p class="lead text-white fontBold subheading">
					You Can Count on Us
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
<section class="pt-10 pb-5">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-12" data-aos="fade-up">

				{{-- Heading --}}
				<h2 class="text-primary fontBold">Why Use a Registered Agent</h2>

				{{-- Text --}}
				<p class="lead text-muted">Registered Agents come with numerous advantages.</p>

			</div>
		</div> {{-- / .row --}}
	</div> {{-- / .container --}}
</section>




{{-- Check Marks --}}
<section class="pb-10">
	<div class="container">

		<div class="row align-items-center">
			<div class="col-12 mx-auto" data-aos="fade-up">


				<div class="list-group list-group-flush text-muted">
					<div class="list-group-item d-flex align-items-center">

						{{-- Check --}}
						<div class="badge bg-success-soft mr-4">
							<i class="fe fe-check display-1"></i>
						</div>

						{{-- Text --}}
						<div class="mr-auto">

							{{-- Heading --}}
							<h3 class="fontBold mb-0 text-black">NEVER MISS IMPORTANT DOCUMENTS</h3>
							<p class="font-weight-bold mb-1">A registered agent accepts official documents on your behalf, which are usually time-sensitive, requiring immediate action or signatures.</p>

						</div>

					</div>

					<div class="list-group-item d-flex align-items-center">

						{{-- Check --}}
						<div class="badge bg-success-soft mr-4">
							<i class="fe fe-check display-1"></i>
						</div>

						{{-- Text --}}
						<div class="mr-auto">

							{{-- Heading --}}
							<h3 class="fontBold mb-0 text-black">AVOID EMBARRASSMENT</h3>
							<p class="font-weight-bold mb-1">Being served a subpoena or a tax notice in front of clients doesn't look good and calls into question your integrity. A Registered Agent protects your image by receiving these sensitive notices on your behalf.</p>

						</div>

					</div>




					<div class="list-group-item d-flex align-items-center">

						{{-- Check --}}
						<div class="badge bg-success-soft mr-4">
							<i class="fe fe-check display-1"></i>
						</div>

						{{-- Text --}}
						<div class="mr-auto">

							{{-- Heading --}}
							<h3 class="fontBold mb-0 text-black">EASILY CHANGE YOUR BUSINESS LOCATION</h3>
							<p class="font-weight-bold mb-1">As your business grows and expands, you may need a larger workspace. This can be frustrating because it means changing your address with the state. With a Registered Agent, your mailing address never has to change.</p>

						</div>

					</div>



					<div class="list-group-item d-flex align-items-center">

						{{-- Check --}}
						<div class="badge bg-success-soft mr-4">
							<i class="fe fe-check display-1"></i>
						</div>

						{{-- Text --}}
						<div class="mr-auto">

							{{-- Heading --}}
							<h3 class="fontBold mb-0 text-black">CHEAPER THAN A COMMERCIAL LEASE</h3>
							<p class="font-weight-bold mb-1">With a registered agent you can avoid committing to a 5-year commercial lease for office space and substantially lower your start-up and operating costs.</p>

						</div>

					</div>



					<div class="list-group-item d-flex align-items-center">

						{{-- Check --}}
						<div class="badge bg-success-soft mr-4">
							<i class="fe fe-check display-1"></i>
						</div>

						{{-- Text --}}
						<div class="mr-auto">

							{{-- Heading --}}
							<h3 class="fontBold mb-0 text-black">ADD CREDIBILITY TO YOUR BUSINESS</h3>
							<p class="font-weight-bold mb-1">Using your home address or P.O. Box can make you look unprofessional, or even fraudulent. With a Registered Agent you get a professional business address that affirms your credibility and instills confidence in your clients.</p>

						</div>

					</div>

				</div>

			</div>
		</div> {{-- / .row --}}
	</div> {{-- / .container --}}
</section>

{{-- Let's Get Started --}}
<section data-jarallax data-speed=".8" class="py-15 overlay overlay-black overlay-60 jarallax" style="background-image: url( '{{ asset( 'images/what-is-a-registered-agent-bottom.jpg' ) }}' );">

	{{-- Content --}}
	<div class="container py-6">
		<div class="row justify-content-center">
			<div class="col-12 col-md-10 col-lg-8 text-center" data-aos="fade-up">

				{{-- Text --}}
				<p class="lead text-white mb-8">
					As your registered agent, Corporate Service Center will act as a buffer between your business' legal matters and your physical place of business. Anyone trying to locate you, or your business, must first start with us.
				</p>

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
