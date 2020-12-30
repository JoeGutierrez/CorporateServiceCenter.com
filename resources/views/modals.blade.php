{{-- MODALS --}}

@if ( request()->route()->getName() === 'why_choose_us' || request()->route()->getName() === 'what_is_a_registered_agent' || request()->route()->getName() === 'wholesale_services' )
	@php $modalImage = 'modal-signup-horizontal-2.jpg'; @endphp
@else
	@php $modalImage = 'modal-signup-horizontal.jpg'; @endphp
@endif

{{-- Signup: Horizontal --}}
<div class="modal fade" id="modalSignupHorizontal" tabindex="-1" role="dialog" aria-labelledby="modalSignupHorizontalTitle" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="card card-row">
				<div class="row gx-0">
					<div class="col-12 col-md-6 bg-cover card-img-left" style="background-image: url( '{{ asset( 'images/modals/' . $modalImage ) }}' );">

						{{-- Image --}}
						<img src="{{ asset( 'images/modals/modal-signup-horizontal.jpg' ) }}" alt="..." class="img-fluid d-md-none invisible">

						{{-- Shape --}}
						<div class="shape shape-right shape-fluid-y svg-shim text-white d-none d-md-block">
							<svg viewBox="0 0 112 690" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M116 0H51v172C76 384 0 517 0 517v173h116V0z" fill="currentColor" /></svg> </div>

					</div>
					<div class="col-12 col-md-6">
						<div class="card-body">

							{{-- Close --}}
							<button type="button" class="modal-close close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
							<div class="text-center">
								<a class="navbar-brand" href="/">
									<img src="{{ asset( '/images/logo-csc.png' ) }}" class="navbar-brand-img" alt="Corporate Service Center Logo">
								</a>
							</div>

							{{-- Heading --}}
							<h3 class="m-3 font-weight-bold text-center font-bold" id="modalSignupHorizontalTitle">
								Ask One of Our Experts!
							</h3>

							{{-- Text --}}
							<p class="mb-6 text-center text-muted">
								Starting a business can be complicated, but our experts are on hand to help you through your business concerns.
							</p>


							{{-- On form submission success, show the response and modal dialog. --}}
							@if( request()->isMethod( 'POST' ) && isset( $form_id ) )
								@if( $form_id === 'modal_signup_horizontal_form' )
									{!! $form_response !!}

									<script>
										document.addEventListener( 'DOMContentLoaded', function() {
											var myModal = new Modal( document.getElementById( 'modalSignupHorizontal' ) );
											myModal.show();
										});
									</script>
								@endif
							@endif
							{{-- End form submission success. --}}

							{{-- Form --}}
							<form id="modalSignupHorizontalForm" class="mb-6" method="POST">
								@csrf

								<input id="recaptchaModal_signup_horizontal_form" name="recaptcha" type="hidden" class="hidden">
								<input name="form_id" type="hidden" class="hidden" value="modal_signup_horizontal_form">
								<input type="hidden" name="ref_url" value="{{ url()->full() }}" />

								{{-- Name --}}
								<div class="form-label-group">
									<input type="text" class="form-control @error( 'modalSignupHorizontalName' ) is-invalid @enderror" name="modalSignupHorizontalName" id="modalSignupHorizontalName" placeholder="Name" value="{{ old( 'modalSignupHorizontalName' ) }}">
									<label for="modalSignupHorizontalName">Name</label>

									@error( 'modalSignupHorizontalName' )
									<span class="invalid-feedback d-inline fontBold" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>

								{{-- Email --}}
								<div class="form-label-group">
									<input type="email" class="form-control @error( 'modalSignupHorizontalEmail' ) is-invalid @enderror" name="modalSignupHorizontalEmail" id="modalSignupHorizontalEmail" placeholder="Email" value="{{ old( 'modalSignupHorizontalEmail' ) }}">
									<label for="modalSignupHorizontalEmail">Email</label>

									@error( 'modalSignupHorizontalEmail' )
									<span class="invalid-feedback d-inline fontBold" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>

								{{-- Phone --}}
								<div class="form-label-group">
									<input type="text" class="form-control @error( 'modalSignupHorizontalPhone' ) is-invalid @enderror" name="modalSignupHorizontalPhone" id="modalSignupHorizontalPhone" data-mask="(000) 000-0000" placeholder="Phone" value="{{ old( 'modalSignupHorizontalPhone' ) }}">
									<label for="modalSignupHorizontalPhone">Phone</label>

									@error( 'modalSignupHorizontalPhone' )
									<span class="invalid-feedback d-inline fontBold" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>

								{{-- Message --}}
								<div class="form-label-group mb-5">
									<textarea class="form-control @error( 'modalSignupHorizontalMessage' ) is-invalid @enderror" name="modalSignupHorizontalMessage" id="modalSignupHorizontalMessage" placeholder="Message">{{ old( 'modalSignupHorizontalMessage' ) }}</textarea>
									<label for="modalSignupHorizontalMessage">Message</label>

									@error( 'modalSignupHorizontalMessage' )
									<span class="invalid-feedback d-inline fontBold" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>

								{{-- Submit --}}
								<button class="btn btn-block btn-primary text-uppercase" type="submit">
									Send
								</button>

							</form>

						</div>
					</div>

				</div> {{-- / .row --}}
			</div>
		</div>
	</div>
</div>
