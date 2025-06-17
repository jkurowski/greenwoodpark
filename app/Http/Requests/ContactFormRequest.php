<?php

namespace App\Http\Requests;

use App\Rules\ReCaptchaV3;
use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
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

        $rules = [
            'form_name' => 'required',
            'form_email' => 'required|email:rfc',
            'form_message' => 'required',
            'form_phone' => 'required',
            'g-recaptcha-response' => ['required', new ReCaptchaV3()]
        ];

        foreach ($this->all() as $key => $value) {
            if (str_starts_with($key, 'rule_')) {
                $rules[$key] = 'required';
            }
        }

        return $rules;
    }

    public function messages()
    {
        return [
            'form_name.required' => 'To pole jest wymagane',
            'form_email.required' => 'To pole jest wymagane',
            'form_email.email' => 'Nieprawidłowy adres e-mail',
            'form_message.required' => 'To pole jest wymagane',
            'form_phone.required' => 'To pole jest wymagane',
            'rule_1.required' => 'To pole jest wymagane'
        ];
    }
}
