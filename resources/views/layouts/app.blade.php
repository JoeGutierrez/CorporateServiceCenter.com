<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="robots" content="noindex, nofollow" />

		{{-- Favicon --}}
		<link rel="shortcut icon" href="{{asset( 'images/favicon.ico' ) }}" type="image/x-icon" />

		{{-- CSS --}}
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
		<link href="{{ asset('css/style.css') }}" rel="stylesheet">

		@if ( request()->is( 'contact' ) )
		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
		<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
		@endif

		{{-- JavaScript --}}
		<script src="{{ asset('js/app.js') }}" defer></script>
		<script src="{{ asset('js/script.js') }}" defer></script>

		{{-- Title --}}
		<title>{{ config( 'app.name' ) }} | {{ $title ?? '' }}</title>
	</head>
	<body>

		@include( 'modals' )

		@include( 'navbar' )

		@yield( 'content' )

		@include( 'footer' )

		{{-- Start Google reCaptcha. --}}
		<script src="https://www.google.com/recaptcha/api.js?render=6LfMSgEaAAAAAPDD5VHR4PzVCWVnYvEhnx45k4Rr"></script>
		<script>
			grecaptcha.ready( function() {
				grecaptcha.execute( '6LfMSgEaAAAAAPDD5VHR4PzVCWVnYvEhnx45k4Rr', { action: 'csc' } ).then( function ( token ) {
					if( token ) {
						document.getElementById( 'recaptchaModal_signup_horizontal_form' ) ? document.getElementById( 'recaptchaModal_signup_horizontal_form' ).value = token : '';
						document.getElementById( 'recaptchaHPContactUs' ) ? document.getElementById( 'recaptchaHPContactUs' ).value = token : '';
						document.getElementById( 'recaptchaContact' ) ? document.getElementById( 'recaptchaContact' ).value = token : '';
					}
				} );
			} );
		</script>
		{{-- End Google reCaptcha. --}}
	</body>
</html>
