@extends( 'layouts.app', [ 'title' => 'Contact' ] )

@section( 'content' )

{{-- WELCOME --}}
<section class="pt-14 pb-10 py-md-14 overlay overlay-black overlay-10 heroImage" id="welcome" style="background: transparent url( '{{ asset( 'images/contact8.jpg' ) }}' ) no-repeat scroll center center; background-size: cover;"> {{-- background-color, background-image, background-repeat, background-attachment, background-position --}}

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
				<h1 class="display-2 fontBold text-uppercase text-black">
					Get in Touch
				</h1>

				{{-- Text --}}
				<p class="lead text-white fontBold subheading">
					Our Team of Experts Are Ready to Hear from You
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

{{-- SHAPE --}}
<div class="position-relative">
	<div class="shape shape-bottom shape-fluid-x svg-shim text-white">
		<svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor" />
		</svg>
	</div>
</div>

{{-- ABOUT US --}}
<section id="aboutUs" class="pt-10">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-12" data-aos="fade-up">
				{{-- Heading --}}
				<h1 class="text-center text-md-left">
					We take great pride in providing an <span class="text-primary fontBold">excellent experience</span> for you as our valued client.
				</h1>

				{{-- Text --}}
				<p class="lead text-center text-md-left text-muted">
					Simply fill out the form and one of our experts will be in contact shortly. We look forward to hearing from you!
				</p>
			</div>
		</div> {{-- / .row --}}

		<div class="row justify-content-center">
			<div class="col-12 col-md-6 col-lg-3 text-center" data-aos="fade-right">
				{{-- Icon --}}
				<div class="icon text-primary mb-3 text-center">
					<img src="{{ asset( 'assets/img/icons/duotone-icons/Home/Home.svg' ) }}" class="img-fluid svgPrimaryColor">
				</div>

				{{-- Heading --}}
				<h2 class="fontBold text-black">
					Address
				</h2>

				{{-- Text --}}
				<p class="text-muted mb-8">
					Corporate Service Center<br>
					5605 Riggins Ct, Suite 200<br>
					Reno, NV 89502
				</p>
			</div>

			<div class="col-12 col-md-6 col-lg-3 text-center" data-aos="fade-right">
				{{-- Icon --}}
				<div class="icon text-primary mb-3 text-center">
					<img src="{{ asset( 'assets/img/icons/duotone-icons/Home/Clock.svg' ) }}" class="img-fluid svgPrimaryColor">
				</div>

				{{-- Heading --}}
				<h2 class="fontBold text-black">
					Business Hours
				</h2>

				{{-- Text --}}
				<p class="text-muted mb-8">
					Monday-Friday:<br>
					8am - 5pm
				</p>
			</div>

			<div class="col-12 col-md-6 col-lg-3 text-center" data-aos="fade-left">
				{{-- Icon --}}
				<div class="icon text-primary mb-3 text-center">
					<img src="{{ asset( 'assets/img/icons/duotone-icons/Communication/Call1.svg' ) }}" class="img-fluid svgPrimaryColor">
				</div>

				{{-- Heading --}}
				<h2 class="fontBold text-black">
					Phone
				</h2>

				{{-- Text --}}
				<p class="text-muted mb-8">
					Toll-Free: <a href="tel:1-866-411-2002">1-866-411-2002</a><br>
					Fax: 775-329-0852<br>
					Renewals: <a href="tel:1-800-542-2077">1-800-542-2077</a><br>
				</p>
			</div>

			<div class="col-12 col-md-6 col-lg-3 text-center" data-aos="fade-left">
				{{-- Icon --}}
				<div class="icon text-primary mb-3 text-center">
					<img src="{{ asset( 'assets/img/icons/duotone-icons/Communication/Mail.svg' ) }}" class="img-fluid svgPrimaryColor">
				</div>

				{{-- Heading --}}
				<h2 class="fontBold text-black">
					Email
				</h2>

				{{-- Text --}}
				<p class="text-muted mb-8">
					<a href="mailto:info@corporateservicecenter.com">info@corporateservicecenter.com</a>
				</p>
			</div>
		</div> {{-- / .row --}}
	</div> {{-- / .container --}}
</section>

{{-- MAP --}}
<section id="map" class="pb-10">
	<div class="container">

		<div class="row align-items-center">
			<div class="col-12" data-aos="fade-up">

				<div id="cscMap" style="height: 360px;"></div>

			</div>
		</div> {{-- / .row --}}

	</div> {{-- / .container --}}
</section>

{{-- TESTIMONIALS --}}
<section id="contactUsFormSection" data-jarallax data-speed=".8" class="pt-12 pb-8 overlay overlay-black overlay-60 jarallax" style="background-image: url( '{{ asset( 'images/contact-form-b.jpg' ) }}' );">

	{{-- Content --}}
	<div class="container" id="contactUsFormContainer">
		<div class="row justify-content-center" style="">
			<div class="col-12 col-lg-4 text-center text-white" data-aos="fade-up">

				{{-- Heading --}}
				<h3 class="m-3 font-weight-bold text-center font-bold">
					Ask One of Our Experts!
				</h3>

				{{-- Text --}}
				<p class="mb-6 text-center">
					Starting a business can be complicated, but our experts are on hand to help you through your business concerns.
				</p>

			</div>
			<div class="col-12 col-lg-8" data-aos="fade-up">

				{{-- On form submission success, show the response and modal dialog. --}}
				@if( request()->isMethod( 'POST' ) && isset( $form_id ) )
					@if( $form_id === 'contact' )
						{!! $form_response !!}

						<script>
							document.addEventListener( 'DOMContentLoaded', function() {
								document.getElementById( 'contactUsFormSection' ).scrollIntoView( { behavior: 'smooth' } );
							});
						</script>
					@endif
				@endif
				{{-- End form submission success. --}}

				{{-- Form --}}
				<form id="contactUsForm" class="mb-6" method="POST">
					@csrf

					<input id="recaptchaContact" name="recaptcha" type="hidden" class="hidden">
					<input id="form_id" name="form_id" type="hidden" class="hidden" value="contact">
					<input type="hidden" name="ref_url" id="ref_url" value="{{ url()->full() }}" />

					<div class="row">

						<div class="col-12 form-label-group">
							@error( 'googleRecaptcha' )
							<span class="invalid-feedback d-inline fontBold textStrokeBlack" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>

						{{-- Name --}}
						<div class="col-12 col-lg-6 form-label-group" style="padding: 0 10px;">
							<input type="text" class="form-control @error( 'contactUsName' ) is-invalid @enderror" name="contactUsName" id="contactUsName" placeholder="Name" style="padding: .8125rem .65rem;" value="{{ old( 'contactUsName' ) }}">
							<label for="contactUsName">Name</label>

							@error( 'contactUsName' )
							<span class="invalid-feedback d-inline fontBold textStrokeBlack" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>

						{{-- Phone --}}
						<div class="col-12 col-lg-6 form-label-group" style="padding: 0 10px;">
							<input type="text" class="form-control @error( 'contactUsPhone' ) is-invalid @enderror" name="contactUsPhone" id="contactUsPhone" data-mask="(000) 000-0000" placeholder="Phone" style="padding: .8125rem .65rem;" value="{{ old( 'contactUsPhone' ) }}">
							<label for="contactUsPhone">Phone</label>

							@error( 'contactUsPhone' )
							<span class="invalid-feedback d-inline fontBold textStrokeBlack" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>

						{{-- Email --}}
						<div class="col-12 form-label-group" style="padding: 0 10px;">
							<input type="email" class="form-control @error( 'contactUsEmail' ) is-invalid @enderror" name="contactUsEmail" id="contactUsEmail" placeholder="Email" style="padding: .8125rem .65rem;" value="{{ old( 'contactUsEmail' ) }}">
							<label for="contactUsEmail">Email</label>

							@error( 'contactUsEmail' )
							<span class="invalid-feedback d-inline fontBold textStrokeBlack" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>

						{{-- Message --}}
						<div class="col-12 form-label-group mb-5" style="padding: 0 10px;">
							<textarea class="form-control @error( 'contactUsMessage' ) is-invalid @enderror" name="contactUsMessage" id="contactUsMessage" placeholder="Message" style="padding: .8125rem .65rem;">{{ old( 'contactUsMessage' ) }}</textarea>
							<label for="contactUsMessage">Message</label>

							@error( 'contactUsMessage' )
							<span class="invalid-feedback d-inline fontBold textStrokeBlack" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>

						{{-- Message --}}
						<div class="col-12 form-label-group" style="padding: 0 10px;">
							{{-- Submit --}}
							<button class="btn btn-block btn-primary text-uppercase" type="submit">
								Submit
							</button>
						</div>

					</div>
				</form>
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
