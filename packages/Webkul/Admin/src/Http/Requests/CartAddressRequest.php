<?php

namespace Webkul\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Webkul\Core\Rules\PhoneNumber;
use Webkul\Core\Rules\PostCode;

class CartAddressRequest extends FormRequest
{
    /**
     * Rules.
     *
     * @var array
     */
    protected $rules = [];

    /**
     * Determine if the product is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        if ($this->has('billing')) {
            $this->mergeAddressRules('billing');
        }

        if (! $this->input('billing.use_for_shipping')) {
            $this->mergeAddressRules('shipping');
        }

        return $this->rules;
    }

    /**
     * Merge new address rules.
     *
     * @return void
     */
    private function mergeAddressRules(string $addressType)
    {
        $country = $this->input("{$addressType}.country");
        
        $this->mergeWithRules([
            "{$addressType}.company_name" => ['nullable'],
            "{$addressType}.first_name"   => ['required'],
            "{$addressType}.last_name"    => ['required'],
            "{$addressType}.email"        => ['required'],
            "{$addressType}.address"      => ['required', 'array', 'min:1'],
            "{$addressType}.city"         => $country !== 'CL' ? ['required'] : ['nullable'],
            "{$addressType}.country"      => ['required'],
            "{$addressType}.state"        => $country !== 'CL' ? ['required'] : ['nullable'],
            "{$addressType}.postcode"     => ['required', new PostCode],
            "{$addressType}.phone"        => ['required', new PhoneNumber],
            "{$addressType}.region"       => $country === 'CL' ? ['required'] : ['nullable'],
            "{$addressType}.comuna"       => $country === 'CL' ? ['required'] : ['nullable'],
        ]);
    }

    /**
     * Merge additional rules.
     */
    private function mergeWithRules($rules): void
    {
        $this->rules = array_merge($this->rules, $rules);
    }
}
