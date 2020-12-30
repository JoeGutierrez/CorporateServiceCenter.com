@extends( 'layouts.app', [ 'title' => 'Your Business Solution' ] )

@section( 'content' )

{{-- WELCOME --}}
<section class="pt-12 py-10 py-md-14 overlay overlay-white overlay-10 heroImage" id="welcome" style="background: transparent url( '{{ asset( 'images/home/hero3.jpg' ) }}' ) no-repeat fixed center center; background-size: cover;"> {{-- background-color, background-image, background-repeat, background-attachment, background-position --}}

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
		</svg>
	</div>

	{{-- Content --}}
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 text-center">

				{{-- Heading --}}
				<h1 class="display-2 fontBold">
					<span style="color: black;">LET'S TAKE CARE OF<br class="d-none d-md-inline"> BUSINESS TOGETHER</span>
				</h1>
				{{--
				<p class="lead mb-8 fontBold">
					Committed to your success.
				</p>
				--}}
				{{-- Button --}}
				<a href="#contact-us" class="btn lift text-uppercase" data-scroll>
					Get Started
				</a>

			</div>
		</div> {{-- / .row --}}
	</div> {{-- / .container --}}

</section>

{{-- SHAPE --}}
<div class="position-relative">
	<div class="shape shape-bottom shape-fluid-x svg-shim text-white">
		<svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor" />
		</svg>
	</div>
</div>

{{-- WELCOME --}}
<section class="pt-4 pt-md-11">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-12 col-md-5 col-lg-5 order-md-2">

				<div class="w-md-150 w-lg-130 position-relative" data-aos="fade-left">

					{{-- Shape --}}
					<div class="shape shape-fluid-y shape-blur-4 svg-shim text-gray-200">
						<svg viewBox="0 0 803 662" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="@include( 'shape' )" fill="currentColor" />
						</svg>
					</div>

					{{-- Image --}}
					<div class="img-skewed img-skewed-left">
						{{-- Image --}}
						<img src="{{ asset( 'images/home/registered-agent.jpg' ) }}" alt="Registered Agent" class="screenshot img-fluid" data-aos="img-skewed-item-left" data-aos-delay="100">
					</div>

				</div>

			</div>
			<div class="col-12 col-md-7 col-lg-6 order-md-1" data-aos="fade-up">

				{{-- Heading --}}
				<h1 class="text-center text-md-left">
					Running a business the<br><span class="text-primary fontBold">right way</span> starts with a registered agent.<br>
				</h1>

				{{-- Text --}}
				<p class="lead text-center text-md-left text-muted mb-6 mb-lg-8">
					Finding a reliable registered agent starts with Corporate Service Center.
				</p>

				{{-- Buttons --}}
				<div class="text-center text-md-left">
					<button href="overview.html" class="btn btn-primary shadow lift mr-1 text-uppercase" data-toggle="modal" data-target="#modalSignupHorizontal">
						Learn More <i class="fe fe-arrow-right d-none d-md-inline ml-3"></i>
					</button>
				</div>

			</div>
		</div> {{-- / .row --}}
	</div> {{-- / .container --}}
</section>

{{-- FEATURES --}}
<section class="py-8 py-md-11 border-bottom">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-4" data-aos="fade-up">

				{{-- Icon --}}
				<div class="icon text-primary mb-3 text-center">
					<img src="{{ asset( 'assets/img/icons/duotone-icons/Text/Article.svg' ) }}" class="img-fluid svgPrimaryColor">
				</div>

				{{-- Heading --}}
				<h3>
					Registered Agents
				</h3>

				{{-- Text --}}
				<p class="text-muted mb-6 mb-md-0">
					A registered agent is legally required in all 50 states. We are the trusted registered agent you need.
				</p>

			</div>
			<div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="50">

				{{-- Icon --}}
				<div class="icon text-primary mb-3 text-center">
					<img src="{{ asset( 'assets/img/icons/duotone-icons/Communication/Address-card.svg' ) }}" class="img-fluid svgPrimaryColor">
				</div>

				{{-- Heading --}}
				<h3>
					About Us
				</h3>

				{{-- Text --}}
				<p class="text-muted mb-6 mb-md-0">
					Since 1989, we’ve developed a nationwide reputation for assisting entrepreneurs, large corporations and licensed professionals.
				</p>

			</div>
			<div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="100">

				{{-- Icon --}}
				<div class="icon text-primary mb-3 text-center">
					<img src="{{ asset( 'assets/img/icons/duotone-icons/Clothes/Briefcase.svg' ) }}" class="img-fluid svgPrimaryColor">
				</div>

				{{-- Heading --}}
				<h3>
					Access to Our Experts
				</h3>

				{{-- Text --}}
				<p class="text-muted mb-0">
					Our registered agent network gives you direct access to the experts you need in your area.
				</p>

			</div>
		</div> {{-- / .row --}}
	</div> {{-- / .container --}}
</section>

{{-- ABOUT --}}
<section id="contact-us" class="pt-8 pt-md-11 bg-gradient-light">
	<div class="container">
		<div class="row align-items-center justify-content-between mb-8 mb-md-11">
			<div class="col-12 col-md-6 order-md-2" data-aos="fade-left">

				{{-- Heading --}}
				<h2>
					<span class="text-primary fontBold" data-typed='{"loop": false, "strings": ["Contact Us"] }'></span>
				</h2>

				{{-- Text --}}
				<p class="font-size-lg text-muted mb-6">
					<span>We take great pride in providing an excellent experience for you as our valued client. Simply fill out the form and one of our experts will be in contact shortly. We look forward to hearing from you!</span>
				</p>

				{{-- List --}}
				<div class="row">
					<div class="col-12 col-lg-6">

						{{-- Item --}}
						<div class="d-flex">

							{{-- Check --}}
							<div class="badge badge-rounded-circle bg-success-soft mt-1 mr-4">
								<i class="fe fe-check"></i>
							</div>

							{{-- Text --}}
							<p class="text-success text-black">
								30+ Years of Experience.
							</p>

						</div>

						{{-- Item --}}
						<div class="d-flex">

							{{-- Check --}}
							<div class="badge badge-rounded-circle bg-success-soft mt-1 mr-4">
								<i class="fe fe-check"></i>
							</div>

							<p class="text-success mb-lg-0 text-black">
								Only the BEST for Our Clients!
							</p>

						</div>

					</div>
					<div class="col-12 col-lg-6 mb-6 mb-md-0">

						{{-- Item --}}
						<div class="d-flex">

							{{-- Check --}}
							<span class="badge badge-rounded-circle bg-success-soft mt-1 mr-4">
								<i class="fe fe-check"></i>
							</span>

							{{-- Text --}}
							<p class="text-success text-black">
								Your registered agent experts!
							</p>

						</div>

						{{-- Item --}}
						<div class="d-flex">

							{{-- Check --}}
							<div class="badge badge-rounded-circle bg-success-soft mr-1 mr-4">
								<i class="fe fe-check"></i>
							</div>

							{{-- Text --}}
							<p class="text-success mb-0 text-black">
								All-inclusive services.
							</p>

						</div>

					</div>
				</div> {{-- / .row --}}

			</div>
			<div class="col-12 col-md-6 col-lg-5 order-md-1" data-aos="fade-right">

				{{-- Card --}}
				<div class="card shadow-light-lg lift lift-lg">

					{{-- Image --}}
					<img src="{{ asset( 'images/home/contact-us-form.jpg' ) }}" alt="..." class="card-img-top">

					{{-- Shape --}}
					<div class="position-relative">
						<div class="shape shape-bottom shape-fluid-x svg-shim text-white">
							<svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor" /></svg> </div>
					</div>

					{{-- Body --}}
					<div class="card-body">

						{{-- On form submission success, show the response and modal dialog. --}}
						@if( request()->isMethod( 'POST' ) && isset( $form_id ) )
							@if( $form_id === 'hp_contact' )
								{!! $form_response !!}

								<script>
									document.addEventListener( 'DOMContentLoaded', function() {
										document.getElementById( 'contact-us' ).scrollIntoView( { behavior: 'smooth' } );
									});
								</script>
							@endif
						@endif
						{{-- End form submission success. --}}

						{{-- Form --}}
						<form id="hpContactUsForm" method="POST">
							@csrf

							<input id="recaptchaHPContactUs" name="recaptcha" type="hidden" class="hidden">
							<input id="form_id" name="form_id" type="hidden" class="hidden" value="hp_contact">
							<input type="hidden" name="ref_url" id="ref_url" value="{{ url()->full() }}" />

							<div class="form-label-group">
								@error( 'googleRecaptcha' )
								<span class="invalid-feedback d-inline fontBold" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>

							<div class="form-label-group">
								<input type="text" class="form-control form-control-flush @error( 'hpContactUsName' ) is-invalid @enderror" name="hpContactUsName" id="hpContactUsName" placeholder="Name" value="{{ old( 'hpContactUsName' ) }}">
								<label for="hpContactUsName">Name</label>

								@error( 'hpContactUsName' )
								<span class="invalid-feedback d-inline fontBold" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>

							<div class="form-label-group">
								<input type="email" class="form-control form-control-flush @error( 'hpContactUsEmail' ) is-invalid @enderror" name="hpContactUsEmail" id="hpContactUsEmail" placeholder="Email" value="{{ old( 'hpContactUsEmail' ) }}">
								<label for="hpContactUsEmail">Email</label>

								@error( 'hpContactUsEmail' )
								<span class="invalid-feedback d-inline fontBold" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>

							<div class="form-label-group">
								<input type="text" class="form-control form-control-flush @error( 'hpContactUsPhone' ) is-invalid @enderror" name="hpContactUsPhone" id="hpContactUsPhone" data-mask="(000) 000-0000" placeholder="Phone" value="{{ old( 'hpContactUsPhone' ) }}">
								<label for="hpContactUsPhone">Phone</label>

								@error( 'hpContactUsPhone' )
								<span class="invalid-feedback d-inline fontBold" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>

							<div class="form-label-group">
								<textarea class="form-control form-control-flush @error( 'hpContactUsMessage' ) is-invalid @enderror" name="hpContactUsMessage" id="hpContactUsMessage" placeholder="Message">{{ old( 'hpContactUsMessage' ) }}</textarea>
								<label for="hpContactUsMessage">Message</label>

								@error( 'hpContactUsMessage' )
								<span class="invalid-feedback d-inline fontBold" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>

							<div class="mt-6">
								<button class="btn btn-block lift text-uppercase" type="submit">
									Learn More
								</button>
							</div>
						</form>

					</div>

				</div>

			</div>
		</div> {{-- / .row --}}
		<div class="row align-items-center">
			<div class="col-12 col-md-12 col-lg-12" data-aos="fade-right">

				{{-- Heading --}}
				<h2 class="fontBold">
					With our registered agent service, <span class="text-primary">you will:</span>
				</h2>

				{{-- List --}}
				<div class="d-flex">
					{{-- Icon --}}
					<div class="icon text-primary">
						<span class="fe fe-check font-weight-bold display-3"></span>
					</div>

					<div class="ml-5 align-self-center">

						{{-- Heading --}}
						<h4 class="font-weight-bold text-muted">
							Limit third party access to your personal information
						</h4>

					</div>
				</div>

				<div class="d-flex">
					{{-- Icon --}}
					<div class="icon text-primary">
						<span class="fe fe-check font-weight-bold display-3"></span>
					</div>

					<div class="ml-5 align-self-center">

						{{-- Heading --}}
						<h4 class="font-weight-bold text-muted">
							Protect the privacy of owners.
						</h4>

					</div>
				</div>

				<div class="d-flex">
					{{-- Icon --}}
					<div class="icon text-primary">
						<span class="fe fe-check font-weight-bold display-3"></span>
					</div>

					<div class="ml-5 align-self-center">

						{{-- Heading --}}
						<h4 class="font-weight-bold text-muted">
							Eliminate junk mail.
						</h4>

					</div>
				</div>

				<div class="d-flex">
					{{-- Icon --}}
					<div class="icon text-primary">
						<span class="fe fe-check font-weight-bold display-3"></span>
					</div>

					<div class="ml-5 align-self-center">

						{{-- Heading --}}
						<h4 class="font-weight-bold text-muted">
							Never miss important documents.
						</h4>

					</div>
				</div>

				<div class="d-flex">
					{{-- Icon --}}
					<div class="icon text-primary">
						<span class="fe fe-check font-weight-bold display-3"></span>
					</div>

					<div class="ml-5 align-self-center">

						{{-- Heading --}}
						<h4 class="font-weight-bold text-muted">
							Avoid the potential embarrassment of being served with legal papers in front of your clients.
						</h4>

					</div>
				</div>

				<div class="d-flex">
					{{-- Icon --}}
					<div class="icon text-primary">
						<span class="fe fe-check font-weight-bold display-3"></span>
					</div>

					<div class="ml-5 align-self-center">

						{{-- Heading --}}
						<h4 class="font-weight-bold text-muted">
							And more!
						</h4>

					</div>
				</div>

			</div>

		</div> {{-- / .row --}}
	</div> {{-- / .container --}}
</section>

{{-- TESTIMONIALS --}}
<section id="testimonials" class="pt-10 pt-md-12">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-md-10 col-lg-8 text-center">

				{{-- Heading --}}
				<h2>
					Our clients are our biggest fans.
				</h2>

				{{-- Text --}}
				<p class="font-size-lg text-muted mb-7 mb-md-9">
					Learn more about us directly from our clients.
				</p>

			</div>
		</div> {{-- / .row --}}
		<div class="row">
			<div class="col-12">

				{{-- Card --}}
				<div class="card card-row shadow-light-lg bg-gray-300">
					<div class="row justify-content-center gx-0">{{-- https://stackoverflow.com/questions/54024902/centering-a-single-column-using-bootstrap-4-grid-system#54024981 --}}

						<div class="col-12 col-md-10 position-md-static">

							{{-- Slider --}}
							<div class="position-md-static" data-flickity='{ "adaptiveHeight": true, "autoPlay": 3500, "pageDots": false, "wrapAround": true }' id="blogSlider">

								<div class="w-100">
									{{-- Body --}}
									<div class="card-body">
										<blockquote class="blockquote text-center mb-0">

											{{-- Text --}}
											<p class="mb-5 mb-md-7">
												Our friends told us to call and trust you. We know that they are GOLDEN, so we listen to them – big time! And, the experience was fabulous! Kim and I are thrilled to add you to our team of professionals. Thanks for living up to your reputation!
											</p>

											{{-- Footer --}}
											<footer class="blockquote-footer">
												<span class="h6 text-uppercase">Michael A.</span>
											</footer>

										</blockquote>
									</div>
								</div>

								<div class="w-100">
									{{-- Body --}}
									<div class="card-body">
										<blockquote class="blockquote text-center mb-0">

											{{-- Text --}}
											<p class="mb-5 mb-md-7">
												"My representative patiently explained things in a language I could understand. I enjoyed the easy access. I’m able to budget the expense by using the flat fee."
											</p>

											{{-- Footer --}}
											<footer class="blockquote-footer">
												<span class="h6 text-uppercase">A. Reed</span>
											</footer>

										</blockquote>
									</div>
								</div>

								<div class="w-100">
									{{-- Body --}}
									<div class="card-body">
										<blockquote class="blockquote text-center mb-0">

											{{-- Text --}}
											<p class="mb-5 mb-md-7">
												"My Consultant took the extra time and care, to provide me with best services possible in my new venture."
											</p>

											{{-- Footer --}}
											<footer class="blockquote-footer">
												<span class="h6 text-uppercase">Michael F.</span>
											</footer>

										</blockquote>
									</div>
								</div>

							</div>

						</div>
					</div> {{-- / .row --}}
				</div>

			</div>
		</div> {{-- / .row --}}
	</div> {{-- / .container --}}
</section>

{{-- SHAPE --}}
<div class="position-relative mt-n8">
	<div class="shape shape-bottom shape-fluid-x svg-shim text-gray-200">
		<svg viewBox="0 0 2880 480" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path fill-rule="evenodd" clip-rule="evenodd" d="M2160 0C1440 240 720 240 720 240H0v240h2880V0h-720z" fill="currentColor" /></svg> </div>
</div>

{{-- CTA --}}
<section class="py-8 py-md-11 bg-dark">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-md-10 col-lg-8 text-center">

				{{-- Badge --}}
				<span class="badge rounded-pill bg-gray-300 mb-4">
					<span class="h6 font-weight-bold text-uppercase text-black">Let's Go</span>
				</span>

				{{-- Heading --}}
				<h1 class="display-4 text-white">
					With Corporate Service Center's 30+ years of experience in the business industry,
				</h1>

				{{-- Text --}}
				<p class="font-size-lg text-muted mb-6 mb-md-8">
					we understand the challenges small businesses face and founded our registered agent service to meet those challenges head on.
				</p>

				<p class="font-size-lg text-muted mb-6 mb-md-8">
					And because we <span class="text-primary fontBold">focus exclusively on registered agent services</span>, you’ll never have to worry about getting second best. Only the very best will do for our clients!
				</p>

				{{-- Button --}}
				<a href="" target="_blank" class="btn lift text-uppercase" data-toggle="modal" data-target="#modalSignupHorizontal">
					Get Started {{--<i class="fe fe-arrow-right">--}}</i>
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
