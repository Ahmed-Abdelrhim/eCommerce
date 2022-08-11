<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class SellingPrice implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    private $price;
    public function __construct($price)
    {
        $this->price = $price;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if(is_numeric($this->price)) {
            if($this->price >= $value) {
                return false;
            } else {
                return true;
            }
        } else {
            return false;
        }

    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Selling price cant be less than or equal price';
    }
}
