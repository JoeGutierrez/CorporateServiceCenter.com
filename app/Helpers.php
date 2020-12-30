<?php
use Illuminate\Support\ViewErrorBag; // For go_to_form_if_validation_error().

function first_and_last_name( $name = '', $first_or_last = '' ) {
	$parts = explode( ' ', $name );

	if( count( $parts ) > 1 ) {
		$lastname = array_pop( $parts );
		$firstname = implode( ' ', $parts );
	}
	else {
		$firstname = $name;
		$lastname = '';
	}

	if( $first_or_last === 'first' ) {
		return $firstname;
	}
	elseif( $first_or_last === 'last' ) {
		return $lastname;
	}
}

function google_recaptcha_error() {
	$url = 'https://www.google.com/recaptcha/api/siteverify';
	$data = [
		'secret' => '6LfMSgEaAAAAAAjwJt-LSkoBM5dA2Ox8IHmEPhoc',
		'response' => request( 'recaptcha' )
	];

	$options = [
		'http' => [
			'header' => "Content-type: application/x-www-form-urlencoded\r\n",
			'method' => 'POST',
			'content' => http_build_query( $data )
		]
	];

	$context = stream_context_create( $options );
	$result = file_get_contents( $url, false, $context );
	$resultJson = json_decode( $result );

	if( $resultJson->success === false || $resultJson->score < 0.1 ) { // Change back to 0.5 after testing.
		return true;
	}
	else {
		return false;
	}
}

function go_to_form_if_validation_error() {
	$errors = session()->get( 'errors', app( ViewErrorBag::class ) );

	if( $errors->hasAny( [ 'modalSignupHorizontalName', 'modalSignupHorizontalEmail', 'modalSignupHorizontalPhone', 'modalSignupHorizontalMessage' ] ) ) {
		echo <<< html
		<script type="application/javascript">
		document.addEventListener( 'DOMContentLoaded', ( event ) => {
			var myModal = new Modal( document.getElementById( 'modalSignupHorizontal' ) );
			myModal.show();
		} );
		</script>
html;
	}
	elseif( $errors->hasAny( [ 'hpContactUsName', 'hpContactUsEmail', 'hpContactUsPhone', 'hpContactUsMessage' ] ) ) {
		echo <<< html
		<script type="application/javascript">
		document.addEventListener( 'DOMContentLoaded', ( event ) => {
			document.getElementById( 'contact-us' ).scrollIntoView( { behavior: 'smooth' } );
		} );
		</script>
html;
	}
	elseif( $errors->hasAny( [ 'contactUsName', 'contactUsPhone', 'contactUsEmail', 'contactUsMessage' ] ) ) {
		echo <<< html
		<script type="application/javascript">
		document.addEventListener( 'DOMContentLoaded', ( event ) => {
			document.getElementById( 'contactUsFormSection' ).scrollIntoView( { behavior: 'smooth' } );
		} );
		</script>
html;
	}
}
