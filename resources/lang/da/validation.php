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

    'accepted'             => ':Attribut, der skal accepteres.',
    'active_url'           => ':Attribut er ikke en gyldig URL.',
    'after'                => ':Attribut skal være en dato efter :dato.',
    'alpha'                => ':Attribut kan kun indeholde bogstaver.',
    'alpha_dash'           => ':Attribut kan kun indeholde bogstaver, tal og bindestreger.',
    'alpha_num'            => ':Attribut kan kun indeholde bogstaver og tal.',
    'array'                => ':Attribut skal være et array.',
    'before'               => ':Attribut skal være en dato, der ligger før :dato.',
    'between'              => [
        'numeric' => ':Attribut skal være mellem min og max.',
        'file'    => ':Attribut skal være mellem min og max antal kilobyte.',
        'string'  => ':Attribut skal være mellem min og max antal tegn.',
        'array'   => ':Attribut skal have mellem min-og max-elementer.',
    ],
    'boolean'              => ':Attributfelt, skal være sande eller falske.',
    'confirmed'            => ':Attribut bekræftelsen ikke matcher.',
    'date'                 => ':Attribut er ikke en gyldig dato.',
    'date_format'          => ':Attribut, der ikke passer til det format :format.',
    'different'            => 'Den : - attribut, og :en anden skal være anderledes.',
    'digits'               => ':Attribut skal være :cifre cifre.',
    'digits_between'       => ':Attribut skal være mellem min og max antal cifre.',
    'distinct'             => ':Attributfelt, har en dobbelt værdi.',
    'email'                => ':Attribut skal være en gyldig e-mail-adresse.',
    'exists'               => 'Den valgte :attribut er ugyldige.',
    'filled'               => ':Attribut felt er påkrævet.',
    'image'                => ':Attribut skal være et billede.',
    'in'                   => 'Den valgte :attribut er ugyldige.',
    'in_array'             => ':Attribut felt findes ikke i :andet.',
    'integer'              => ':Attribut skal være et heltal.',
    'ip'                   => ':Attribut skal være en gyldig IP-adresse.',
    'json'                 => ':Attribut skal være en gyldig JSON streng.',
    'max'                  => [
        'numeric' => ':Attribut kan ikke være større end :max.',
        'file'    => ':Attribut kan ikke være større end :antal kilobyte.',
        'string'  => ':Attribut kan ikke være større end :antal tegn.',
        'array'   => ':Attribut må ikke have mere end :antal elementer.',
    ],
    'mimes'                => ':Attribut skal være en fil af typen: :værdier.',
    'min'                  => [
        'numeric' => ':Attribut skal være mindst :min.',
        'file'    => ':Attribut skal være mindst :min kilobyte.',
        'string'  => ':Attribut skal være mindst :min tegn.',
        'array'   => ':Attribut skal have mindst :min elementer.',
    ],
    'not_in'               => 'Den valgte :attribut er ugyldige.',
    'numeric'              => ':Attribut skal være et tal.',
    'present'              => ':Attributfelt, skal være til stede.',
    'regex'                => ':Attribut format er ugyldig.',
    'required'             => ':Attribut felt er påkrævet.',
    'required_if'          => ':Attribut felt er påkrævet, når :andre er :værdi.',
    'required_unless'      => ':Attribut felt er påkrævet, medmindre andet er i :værdier.',
    'required_with'        => ':Attribut felt er påkrævet, når :værdier, der er til stede.',
    'required_with_all'    => ':Attribut felt er påkrævet, når :værdier, der er til stede.',
    'required_without'     => ':Attribut felt er påkrævet, når :værdier, der ikke er til stede.',
    'required_without_all' => ':Attribut felt er påkrævet, når ingen af :værdier, der er til stede.',
    'same'                 => 'Den : - attribut, og :en anden skal matche.',
    'size'                 => [
        'numeric' => ':Attribut skal være :størrelsen.',
        'file'    => ':Attribut skal være :størrelse i kilobyte.',
        'string'  => ':Attribut skal være :størrelsen tegn.',
        'array'   => 'Den : - attributten skal indeholde :størrelse elementer.',
    ],
    'string'               => ':Attribut skal være en streng.',
    'timezone'             => ':Attribut skal være en gyldig zone.',
    'unique'               => ':Attribut er allerede blevet taget.',
    'url'                  => ':Attribut format er ugyldig.',

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
            'rule-name' => 'brugerdefineret-besked',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
