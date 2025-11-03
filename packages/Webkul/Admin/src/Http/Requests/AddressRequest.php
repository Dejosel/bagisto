<?php

namespace Webkul\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Webkul\Core\Rules\PhoneNumber;
use Webkul\Core\Rules\PostCode;
use Webkul\Customer\Rules\VatIdRule;

class AddressRequest extends FormRequest
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
            'company_name'    => ['nullable'],
            'first_name'      => ['required'],
            'last_name'       => ['required'],
            'address'         => ['required', 'array', 'min:1'],
            'country'         => ['required'],
            'state'           => ['required'],
            'city'            => ['required'],
            'postcode'        => ['required', new PostCode],
            'phone'           => ['required', new PhoneNumber],
            'vat_id'          => [(new VatIdRule)->setCountry($this->input('country'))],
            'email'           => ['required'],
            'default_address' => ['sometimes', 'required', 'in:0,1'],
        ];

        // Add validation for Chilean region and comuna fields
        if ($this->input('country') === 'CL') {
            $rules['region'] = ['required'];
            $rules['comuna'] = ['required'];
        } else {
            $rules['region'] = ['nullable'];
            $rules['comuna'] = ['nullable'];
        }

        return $rules;
    }

    /**
     * Attributes.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'address.*' => 'address',
        ];
    }
}
