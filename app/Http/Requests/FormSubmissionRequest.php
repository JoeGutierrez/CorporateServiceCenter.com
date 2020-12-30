<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormSubmissionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
	public function rules()
	{
		// The reason common form names have different names, like "email" and "book_form_email," is so if those two forms are on the same page, the error doesn't get marked twice.

		$form_id = strip_tags( request( 'form_id' ) );

		if( $form_id === 'modal_signup_horizontal_form' ) {
			return [
				'modalSignupHorizontalName' => 'required|string|max:64|min:3',
				'modalSignupHorizontalPhone' => 'required|string|min:14|max:20',
				'modalSignupHorizontalEmail' => 'required|string|email:rfc,dns,filter|max:50',
				'modalSignupHorizontalMessage' => 'required|string|max:500'
			];
		}
		if( $form_id === 'hp_contact' ) {
			return [
				'hpContactUsName' => 'required|string|max:64|min:3',
				'hpContactUsPhone' => 'required|string|min:14|max:20',
				'hpContactUsEmail' => 'required|string|email:rfc,dns,filter|max:50',
				'hpContactUsMessage' => 'required|string|max:500'
			];
		}
		elseif( $form_id === 'contact' ) {
			return [
				'contactUsName' => 'required|string|max:64|min:3',
				'contactUsPhone' => 'required|string|min:14|max:20',
				'contactUsEmail' => 'required|string|email:rfc,dns,filter|max:50',
				'contactUsMessage' => 'required|string|max:500'
			];
		}
	}

	/**
	* Custom messages for validation
	*
	* @return array
	*/
	public function messages()
	{
		$form_id = strip_tags( request( 'form_id' ) );

		if( $form_id === 'modal_signup_horizontal_form' ) {
			return [
				'modalSignupHorizontalName.required' => 'The Name field is required.',
				'modalSignupHorizontalName.min' => 'The Name field must be at least 3 characters.',
				'modalSignupHorizontalName.max' => 'The Name field may not be greater than 64 characters.',
				'modalSignupHorizontalPhone.required' => 'The Phone field is required.',
				'modalSignupHorizontalPhone.min' => 'The Phone field must be at least 10 digits.',
				'modalSignupHorizontalEmail.required' => 'The Email field is required.',
				'modalSignupHorizontalEmail.email' => 'Please enter a valid email address.',
				'modalSignupHorizontalEmail.max' => 'The Email field may not be greater than 50 characters.',
				'modalSignupHorizontalMessage.required' => 'The Message field is required.',
				'modalSignupHorizontalMessage.max' => 'The Message field may not be greater than 500 characters.'
			];
		}
		elseif( $form_id === 'hp_contact' ) {
			return [
				'hpContactUsName.required' => 'The Name field is required.',
				'hpContactUsName.min' => 'The Name field must be at least 3 characters.',
				'hpContactUsName.max' => 'The Name field may not be greater than 64 characters.',
				'hpContactUsPhone.required' => 'The Phone Number field is required.',
				'hpContactUsPhone.min' => 'The Phone field must be at least 10 digits.',
				'hpContactUsEmail.required' => 'The Email field is required.',
				'hpContactUsEmail.email' => 'Please enter a valid email address.',
				'hpContactUsEmail.max' => 'The Email field may not be greater than 50 characters.',
				'hpContactUsMessage.required' => 'The Message field is required.',
				'hpContactUsMessage.max' => 'The Message field may not be greater than 500 characters.'
			];
		}
		elseif( $form_id === 'contact' ) {
			return [
				'contactUsName.required' => 'The Name field is required.',
				'contactUsName.min' => 'The Name field must be at least 3 characters.',
				'contactUsName.max' => 'The Name field may not be greater than 64 characters.',
				'contactUsPhone.required' => 'The Phone Number field is required.',
				'contactUsPhone.min' => 'The Phone field must be at least 10 digits.',
				'contactUsEmail.required' => 'The Email field is required.',
				'contactUsEmail.email' => 'Please enter a valid email address.',
				'contactUsEmail.max' => 'The Email field may not be greater than 50 characters.',
				'contactUsMessage.required' => 'The Message field is required.',
				'contactUsMessage.max' => 'The Message field may not be greater than 500 characters.'
			];
		}
	}
}
