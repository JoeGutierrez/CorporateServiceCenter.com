@extends( 'layouts.app', [ 'title' => 'About Us' ] )

@section( 'content' )

{{-- Hero Image --}}
<section class="pt-14 pb-10 py-md-14 overlay overlay-black overlay-40 heroImage" id="welcome" style="background: transparent url( '{{ asset( 'images/about-us.jpg' ) }}' ) no-repeat fixed center center; background-size: cover;"> {{-- background-color, background-image, background-repeat, background-attachment, background-position --}}

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
					About Us
				</h1>

				{{-- Text --}}
				<p class="lead text-white fontBold subheading">
					A Different Kind of Incorporation Company
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
<section class="my-10">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-12" data-aos="fade-up">

				{{-- Heading --}}
				<h1>
					<span class="text-primary fontBold">Since 1989</span>, we've developed a nationwide reputation for assisting entrepreneurs, large corporations and licensed professionals.
				</h1>

				{{-- Text --}}
				<p class="lead text-muted">
					With this <span class="text-primary fontBold">30+ years of experience</span>, we understand the challenges small businesses owners face and founded our registered agent service to meet those challenges head on.
				</p>

				<p class="lead text-muted">
					Challenges like making sure you never miss important legal or government documents. Challenges like protecting the privacy of your owners. Or challenges like being available during normal business hours, when really you need to be in your next big meeting.
				</p>

				<p class="lead text-muted">
					We understand how difficult it can be to juggle it all, so we offer real solutions … fast. When you reach out to us, you'll never get an automated operator and you'll never hear us reading from a script. You'll get genuine, human-to-human interaction and immediate answers to all your questions.
				</p>

				<p class="lead text-muted mb-0">
					From the first time you speak with one of our experienced consultants, you will realize our commitment to meeting your needs and providing value for your business. And because we <span class="text-primary fontBold">focus exclusively on registered agent services</span>, you'll never have to worry about getting second best. Only the best will do for our clients!
				</p>

			</div>
		</div> {{-- / .row --}}
	</div> {{-- / .container --}}
</section>

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Rokkitt:wght@700&display=swap" rel="stylesheet">

<section class="my-10">
	<div class="container">

		<div class="row">

			<div class="col-12 col-xl-4 d-flex">
				<!-- Card -->
				<div class="card shadow-light-lg mt-5 mt-md-0">
					<!-- Body -->
					<div class="card-body align-self-center" href="#!" style="background-color: #b72025; height: 300px;">
						<!-- Heading -->
						<h3 class="m-0 text-white" style="line-height: 40px;">
							<span style="font-family: 'Rokkitt', serif; font-size: 60px;">CORE<br>VALUES</span><br><span style="font-size: 32px;">THIS IS OUR STORY</span>
						</h3>
					</div>
				</div>
			</div>

			<div class="col-12 col-xl-4 d-flex">

				<div class="card card-flip mt-5 mt-md-0">
					<div class="card-front text-white" style="background-color: #b72025; height: 300px;">
						<div class="card-body w-100 align-self-center">
							<h3 class="card-title text-center m-0 fontBold">SERVICE EXCELLENCE</h3>
						</div>
					</div>
					<div class="card-back bg-white">
						<div class="card-body align-self-center">
							<p class="card-text">We find the greatest value, fulfillment and meaning through the service of others. We insist on providing service to our clients that is of exceptional quality. We realize our personal and professional potential by focusing our efforts and attention on what we can do to help those around.</p>
						</div>
					</div>
				</div>

			</div>

			<div class="col-12 col-xl-4 d-flex">

				<div class="card card-flip mt-5 mt-md-0">
					<div class="card-front text-white" style="background-color: #b72025; height: 300px;">
						<div class="card-body w-100 align-self-center">
							<h3 class="card-title text-center m-0 fontBold">TEAMWORK</h3>
						</div>
					</div>
					<div class="card-back bg-white">
						<div class="card-body align-self-center">
							<p class="card-text">We deliver a measurable return for the company as a result of our effort, efficiency and productivity. We recognize that we are working in a competitive capitalistic environment as part of a high-performance team.</p>
						</div>
					</div>
				</div>

			</div>

		</div> <!-- / .row -->

		<div class="row pt-5">

			<div class="col-12 col-xl-4 d-flex">

				<div class="card card-flip mt-5 mt-md-0">
					<div class="card-front text-white" style="background-color: #b72025; height: 300px;">
						<div class="card-body w-100 align-self-center">
							<h3 class="card-title text-center m-0 fontBold">OWNERSHIP</h3>
						</div>
					</div>
					<div class="card-back bg-white">
						<div class="card-body align-self-center">
							<p class="card-text">We take ownership for both our actions and their consequences, being equally accountable for our effort and our results. We recognize that the most effective way for us to make a difference is to embrace change in ourselves.</p>
						</div>
					</div>
				</div>

			</div>

			<div class="col-12 col-xl-4 d-flex">

				<div class="card card-flip mt-5 mt-md-0">
					<div class="card-front text-white" style="background-color: #b72025; height: 300px;">
						<div class="card-body w-100 align-self-center">
							<h3 class="card-title text-center m-0 fontBold">RESPECT</h3>
						</div>
					</div>
					<div class="card-back bg-white">
						<div class="card-body align-self-center">
							<p class="card-text">We recognize, appreciate and value the humanity in others whose concerns, challenges, and perspectives are as important as our own. We treat others, regardless of their position or standing, with the same esteem and honor that we seek for ourselves.</p>
						</div>
					</div>
				</div>

			</div>

			<div class="col-12 col-xl-4 d-flex">

				<div class="card card-flip mt-5 mt-md-0">
					<div class="card-front text-white" style="background-color: #b72025; height: 300px;">
						<div class="card-body w-100 align-self-center">
							<h3 class="card-title text-center m-0 fontBold">INTEGRITY</h3>
						</div>
					</div>
					<div class="card-back bg-white">
						<div class="card-body align-self-center">
							<p class="card-text">We promise only what we can deliver, honor agreements and keep promises with ourselves and others. We communicate proactively and address issues immediately if agreements or promises are broken.</p>
						</div>
					</div>
				</div>

			</div>

		</div> <!-- / .row -->

	</div> {{-- / .container --}}
</section>



{{-- Let's Work Together --}}
<section data-jarallax data-speed=".8" class="py-15 overlay overlay-black overlay-60 jarallax" style="background-image: url( '{{ asset( 'assets/img/covers/cover-1.jpg' ) }}' );">

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
