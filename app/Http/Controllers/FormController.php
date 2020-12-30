<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FormSubmissionRequest;
use Illuminate\Validation\ValidationException;

include app_path( 'Helpers.php' ); // first_and_last_name(), getRealIpAddr().

class FormController extends Controller
{
	public function form( FormSubmissionRequest $request )
	{
		require public_path( 'src/Mandrill.php' );

		if( google_recaptcha_error() ) {
			throw ValidationException::withMessages( [ 'googleRecaptcha' => 'Google reCAPTCHA error.' ] ); // To trigger this error, set this if() statement to 1, fill out all of the form fields right then submit the form.
		}

		// The reason common form names have different names, like "email" and "book_form_email," is so if those two forms are on the same page, the error doesn't get marked twice.

		$form_id = strip_tags(request('form_id'));

		if ($form_id === 'modal_signup_horizontal_form' ) {
			$name = strip_tags( request( 'modalSignupHorizontalName' ) );
			$email = strip_tags( request( 'modalSignupHorizontalEmail' ) );
			$phone = strip_tags( request( 'modalSignupHorizontalPhone' ) );
			$message = strip_tags( request( 'modalSignupHorizontalMessage' ) );
		}
		elseif ($form_id === 'hp_contact') {
			$name = strip_tags( request( 'hpContactUsName' ) );
			$email = strip_tags( request( 'hpContactUsEmail' ) );
			$phone = strip_tags( request( 'hpContactUsPhone' ) );
			$message = strip_tags( request( 'hpContactUsMessage' ) );
		}
		elseif ($form_id === 'contact') {
			$name = strip_tags( request( 'contactUsName' ) );
			$email = strip_tags( request( 'contactUsEmail' ) );
			$phone = strip_tags( request( 'contactUsPhone' ) );
			$message = strip_tags( request( 'contactUsMessage' ) );
		}

		$first_name = first_and_last_name( $name, 'first' );
		$last_name = first_and_last_name( strip_tags( $name ), 'last' );
		$source_ip = request()->ip();
		$date_and_time = now();
		$ref_url = strip_tags( request( 'ref_url' ) );

		switch( $form_id ) {
			case 'modal_signup_horizontal_form':
				$response = '<div class="alert alert-success" style="background-color: #dff0d8; border: 1px solid #d6e9c6; border-radius: 10px;">' . ($first_name ? "<p style='color: #3c763d;'>$first_name,</p>" : 'Thank you.') . '<p style="color: #3c763d;">Your request has been successfully submitted. A representative will call you at the provided phone number.</p><p style="color: #3c763d;">Thank you.</p></div><style type="text/css">form#modalSignupHorizontalForm { display: none !important; }</style>';
				break;
			case 'hp_contact':
				$response = '<div class="alert alert-success" style="background-color: #dff0d8; border: 1px solid #d6e9c6; border-radius: 10px;">' . ($first_name ? "<p style='color: #3c763d;'>$first_name,</p>" : 'Thank you.') . '<p style="color: #3c763d;">Your request has been successfully submitted. A representative will call you at the provided phone number.</p><p style="color: #3c763d;">Thank you.</p></div><style type="text/css">form#hpContactUsForm { display: none !important; }</style>';
				break;
			case 'contact':
				$response = '<div class="alert alert-success" style="background-color: #dff0d8; border: 1px solid #d6e9c6; border-radius: 10px;">' . ($first_name ? "<p style='color: #3c763d;'>$first_name,</p>" : 'Thank you.') . '<p style="color: #3c763d;">Your request has been successfully submitted. A representative will call you at the provided phone number.</p><p style="color: #3c763d;">Thank you.</p></div><style type="text/css">form#contactUsForm { display: none !important; }</style>';
				break;
			default:
				$response = '';
		}

		try {
			$mandrill = new \Mandrill('nlKi3FKVpA8b0XshKbf2uA');
			$template_name = 'csc-lead';
			$template_content = null;
			$async = null;
			$ip_pool = null;
			$send_at = null;

			$MandrillMessage = [
				'subject' => 'New Lead from corporateservicecenter.com ' . $first_name . '',
				'from_email' => 'info@corporateservicecenter.com',
				'from_name' => 'corporateservicecenter.com',
				'to' => [
					[ 'email' => 'trevor@corporateservicecenter.com', 'name' => $name, 'type' => 'to' ]
				],
				'headers' => ['Reply-To' => 'info@corporateservicecenter.com'],
				'important' => false,
				'track_opens' => true,
				'track_clicks' => true,
				'auto_text' => true,
				'preserve_recipients' => true,
				'view_content_link' => true,
				'merge_language' => 'mailchimp',
				'global_merge_vars' => [
					['name' => 'name', 'content' => $name],
					['name' => 'email', 'content' => $email],
					['name' => 'phone', 'content' => $phone],
					['name' => 'source_ip', 'content' => $source_ip],
					['name' => 'message', 'content' => $message],
					['name' => 'ref_url', 'content' => $ref_url],
					['name' => 'date_and_time', 'content' => $date_and_time]
				],
				'tags' => ['csc', 'lead']
			];

			$result = $mandrill->messages->sendTemplate($template_name, $template_content, $MandrillMessage, $async, $ip_pool, $send_at);
		}
		catch ( Mandrill_Error $e ) {
			echo 'A mandrill error occurred: ' . get_class($e) . ' - ' . $e->getMessage();
			throw $e;
		}

		if( request()->route()->getName() === 'index' ) {
			return view( 'index', [ 'form_response' => $response, 'form_id' => $form_id ] );
		}
		elseif( request()->route()->getName() === 'about_us' ) {
			return view( 'about-us', [ 'form_response' => $response, 'form_id' => $form_id ] );
		}
		elseif( request()->route()->getName() === 'contact' ) {
			return view( 'contact', [ 'form_response' => $response, 'form_id' => $form_id ] );
		}
		elseif( request()->route()->getName() === 'what_is_a_registered_agent' ) {
			return view( 'what-is-a-registered-agent', [ 'form_response' => $response, 'form_id' => $form_id ] );
		}
		elseif( request()->route()->getName() === 'why_choose_us' ) {
			return view( 'why-choose-us', [ 'form_response' => $response, 'form_id' => $form_id ] );
		}
		elseif( request()->route()->getName() === 'why_use_a_registered_agent' ) {
			return view( 'why-use-a-registered-agent', [ 'form_response' => $response, 'form_id' => $form_id ] );
		}
	}
}
