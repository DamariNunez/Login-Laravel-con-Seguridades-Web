<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'The :attribute must be accepted.',
    'active_url' => 'The :attribute is not a valid URL.',
    'after' => 'The :attribute must be a date after :date.',
    'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
    'alpha' => 'El/La :attribute solo debe contener letras.',
    'alpha_dash' => 'The :attribute may only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'El/La :attribute solo debe contener letras y números.',
    'array' => 'The :attribute must be an array.',
    'before' => 'The :attribute must be a date before :date.',
    'before_or_equal' => 'The :attribute must be a date before or equal to :date.',
    'between' => [
        'numeric' => 'El/La :attribute debe ser entre :min y :max.',
        'file' => 'El/La :attribute must be between :min and :max kilobytes.',
        'string' => 'El/La :attribute debe tener entre :min y :max caracteres.',
        'array' => 'El/La :attribute must have between :min and :max items.',
    ],
    'boolean' => 'The :attribute field must be true or false.',
    'confirmed' => 'The :attribute confirmation does not match.',
    'date' => 'The :attribute is not a valid date.',
    'date_equals' => 'The :attribute must be a date equal to :date.',
    'date_format' => 'The :attribute does not match the format :format.',
    'different' => 'The :attribute and :other must be different.',
    'digits' => 'The :attribute must be :digits digits.',
    'digits_between' => 'The :attribute must be between :min and :max digits.',
    'dimensions' => 'The :attribute has invalid image dimensions.',
    'distinct' => 'El/La :attribute teien un valor duplicado.',
    'email' => 'El/La :attribute debe tener un formato de correo corecto.',
    'ends_with' => 'The :attribute must end with one of the following: :values.',
    'exists' => 'The selected :attribute is invalid.',
    'file' => 'The :attribute must be a file.',
    'filled' => 'The :attribute field must have a value.',
    'gt' => [
        'numeric' => 'El/La :attribute debe ser mayor a :value.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'string' => 'El/La :attribute debe tener más de :value caracteres.',
        'array' => 'The :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'El/La :attribute debe ser mayor o igual a :value.',
        'file' => 'The :attribute must be greater than or equal :value kilobytes.',
        'string' => 'El/La :attribute debe tener :value o más caracteres.',
        'array' => 'The :attribute must have :value items or more.',
    ],
    'image' => 'The :attribute must be an image.',
    'in' => 'The selected :attribute is invalid.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer' => 'El/La :attribute debe ser un entero.',
    'ip' => 'The :attribute must be a valid IP address.',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => 'The :attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => 'El/La :attribute debe ser menor a :value.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'string' => 'El/La :attribute debe tener menos de :value caracteres.',
        'array' => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'El/La :attribute debe ser menor o igual a :value.',
        'file' => 'The :attribute must be less than or equal :value kilobytes.',
        'string' => 'El/La :attribute debe tener :value o menos caracteres.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'El/La :attribute no puede ser mayor a :max.',
        'file' => 'The :attribute may not be greater than :max kilobytes.',
        'string' => 'El/La :attribute debe tener máximo :max caracteres.',
        'array' => 'The :attribute may not have more than :max items.',
    ],
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'El/La :attribute debe ser por lo menos :min.',
        'file' => 'The :attribute must be at least :min kilobytes.',
        'string' => 'El/La :attribute debe tener por lo menos :min caracteres.',
        'array' => 'The :attribute must have at least :min items.',
    ],
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'El/La :attribute no cumple con el formato.',
    'numeric' => 'El/La :attribute debe ser numerico.',
    'password' => 'Las credenciales son incorrectas.',
    'present' => 'The :attribute field must be present.',
    'regex' => 'El/La :attribute no cumplen con el formato.',
    'required' => 'El/La :attribute es requerido.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'La :attribute y la :other deben ser iguales.',
    'size' => [
        'numeric' => 'El/La :attribute debe ser :size.',
        'file' => 'The :attribute must be :size kilobytes.',
        'string' => 'El/La :attribute debe tener :size caracteres.',
        'array' => 'The :attribute must contain :size items.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values.',
    'string' => 'El/La :attribute debe ser una cadena de caracteres.',
    'timezone' => 'The :attribute must be a valid zone.',
    'unique' => 'El/La :attribute ya existe y debe ser único.',
    'uploaded' => 'The :attribute failed to upload.',
    'url' => 'The :attribute format is invalid.',
    'uuid' => 'The :attribute must be a valid UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];

