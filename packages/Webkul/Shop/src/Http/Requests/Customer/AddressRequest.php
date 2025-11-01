<?php

namespace Webkul\Shop\Http\Requests\Customer;

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
        $country = $this->input('country');
        
        return [
            'company_name' => ['nullable'],
            'first_name'   => ['required'],
            'last_name'    => ['required'],
            'address'      => ['required', 'array', 'min:1'],
            'country'      => core()->isCountryRequired() ? ['required'] : ['nullable'],
            'state'        => ($country !== 'CL' && core()->isStateRequired()) ? ['required'] : ['nullable'],
            'city'         => $country !== 'CL' ? ['required', 'string'] : ['nullable'],
            'postcode'     => core()->isPostCodeRequired() ? ['required', new PostCode] : [new PostCode],
            'phone'        => ['required', new PhoneNumber],
            'vat_id'       => [(new VatIdRule)->setCountry($this->input('country'))],
            'email'        => ['required'],
            'region'       => $country === 'CL' ? ['required'] : ['nullable'],
            'comuna'       => $country === 'CL' ? ['required'] : ['nullable'],
        ];
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
