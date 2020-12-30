@extends( 'layouts.app', [ 'title' => 'What Is a Registered Agent?' ] )

@section( 'content' )

{{-- Hero Image --}}
<section class="pt-14 pb-10 py-md-14 overlay overlay-black overlay-20 heroImage" id="welcome" style="background: transparent url( '{{ asset( 'images/what-is-a-registered-agent.jpg' ) }}' ) no-repeat fixed center center; background-size: cover;"> {{-- background-color, background-image, background-repeat, background-attachment, background-position --}}

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
					What Is a Registered Agent?
				</h1>

				{{-- Text --}}
				<p class="lead text-white fontBold subheading">
					You Can Count on Your Registered Agent
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

				{{-- Heading --}}
				<h1>
					<span class="text-primary fontBold">All corporations and LLCs</span>, are required by law to have an address where they can accept service of legal documents and notifications from the state or other governmental agencies.
				</h1>

				{{-- Text --}}
				<p class="lead text-muted">
					But this isn't always possible, especially if you operate a home-based business or have a foreign-filed business. That's where a <span class="text-primary fontBold">registered agent</span> comes in.
				</p>

				<p class="lead text-muted">
					A registered agent is a responsible third-party in the same state as your business who receives official government notifications (usually tax forms and notice of lawsuits) on behalf of your LLC or Corporation.
				</p>

			</div>
		</div> {{-- / .row --}}
	</div> {{-- / .container --}}
</section>

{{-- Check Marks --}}
<section class="pb-10">
	<div class="container">

		<div class="row align-items-center">
			<div class="col-12 col-md-8 mx-auto" data-aos="fade-up">
				<h1 id="typeIt" class="text-primary fontBold"></h1>
			</div>
		</div>

		<!-- The script itself, loaded AFTER your root element. -->
		<script>
			document.addEventListener( 'DOMContentLoaded', function( eventObj ) {
				new TypeIt('#typeIt', {
					strings: "Additional Info ", waitUntilVisible: true
				}).go();
			} );
		</script>

		<div class="row align-items-center">
			<div class="col-12 col-md-8 mx-auto" data-aos="fade-up">


				<div class="list-group list-group-flush">
					<div class="list-group-item d-flex align-items-center">

						{{-- Check --}}
						<div class="badge bg-success-soft mr-4">
							<i class="fe fe-check display-1"></i>
						</div>

						{{-- Text --}}
						<div class="ml-auto">

							{{-- Heading --}}
							<p class="font-weight-bold mb-1 text-muted">
								A business must have a registered agent in each state where they do business.
							</p>

						</div>

					</div>
					<div class="list-group-item d-flex align-items-center">

						{{-- Check --}}
						<div class="badge bg-success-soft mr-4">
							<i class="fe fe-check display-1"></i>
						</div>

						{{-- Text --}}
						<div class="ml-auto">

							{{-- Heading --}}
							<p class="font-weight-bold mb-1 text-muted">
								Registered agents must adhere to strict rules, including a requirement that they remain available at a single location during all business hours.
							</p>

						</div>

					</div>

					<div class="list-group-item d-flex align-items-center">

						{{-- Check --}}
						<div class="badge bg-success-soft mr-4">
							<i class="fe fe-check display-1"></i>
						</div>

						{{-- Text --}}
						<div class="ml-auto">

							{{-- Heading --}}
							<p class="font-weight-bold mb-1 text-muted">
								Business owners are technically able to service as their own registered agents, but given the strict rules, it's not advisable.
							</p>

						</div>

					</div>
				</div>

			</div>
		</div> {{-- / .row --}}

		<div class="row align-items-center pt-10">
			<div class="col-12" data-aos="fade-up">

				<p class="lead text-muted">
					Corporate Service Center, Inc. is here to be your trusted registered agent, ensuring you receive all documents in a timely manner. We will provide the consistency you need and be available, even when you can't be.
				</p>

			</div>
		</div> {{-- / .row --}}

	</div> {{-- / .container --}}
</section>

{{-- Let's Get Started --}}
<section data-jarallax data-speed=".8" class="py-15 overlay overlay-black overlay-60 jarallax" style="background-image: url( '{{ asset( 'images/what-is-a-registered-agent-bottom.jpg' ) }}' );">

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
