<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

include app_path( 'Helpers.php' );

class CSCController extends Controller
{
	public function index() {
		go_to_form_if_validation_error();

		return view( 'index' );
	}

	public function about_us() {
		go_to_form_if_validation_error();

		return view( 'about-us' );
	}

	public function contact() {
		go_to_form_if_validation_error();

		return view( 'contact' );
	}

	public function why_choose_us() {
		go_to_form_if_validation_error();

		return view( 'why-choose-us' );
	}

	public function what_is_a_registered_agent() {
		go_to_form_if_validation_error();

		return view( 'what-is-a-registered-agent' );
	}

	public function why_use_a_registered_agent() {
		go_to_form_if_validation_error();

		return view( 'why-use-a-registered-agent' );
	}

	public function wholesale_services() {
		go_to_form_if_validation_error();

		return view( 'wholesale-services' );
	}
}
