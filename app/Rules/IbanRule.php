<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Country;

class IbanRule implements Rule
{
    

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $valido = false;
        $finalValue = str_replace(" ", "", $value);
        if(strlen($finalValue) == 24){
            if(preg_match('@[A-Z]{2}[0-9]{22}@', $finalValue)){
                $existe = Country::where('iso', '=', substr($finalValue, 0, 2))->exists();
                if(!$existe){
                    return false; 
                }
                $valido = substr($finalValue, 0, 2) == "ES";
            }
        }   

        return $valido;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'El/La :attribute no cumplen con el formato.';
    }
}
