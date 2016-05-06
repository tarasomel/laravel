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

    'accepted'             => 'A :az attribútum el kell fogadni.',
    'active_url'           => 'A :az attribútum nem érvényes URL-t.',
    'after'                => 'A :az attribútumot kell egy dátum után :dátum.',
    'alpha'                => 'A :az attribútum lehet, hogy csak olyan leveleket.',
    'alpha_dash'           => 'A :az attribútum lehet, hogy csak olyan betűk, számok, odavág.',
    'alpha_num'            => 'A :az attribútum kizárólag tartalmaz betűket, számokat.',
    'array'                => 'A :az attribútumot kell egy tömb.',
    'before'               => 'A :az attribútumot kell egy randi előtt :dátum.',
    'between'              => [
        'numeric' => 'A :az attribútumot kell között :min :max.',
        'file'    => 'A :az attribútumot kell között :min :max. kb.',
        'string'  => 'A :az attribútumot kell között :min :max karaktereket.',
        'array'   => 'A :attribútumot kell között :min :max elemek.',
    ],
    'boolean'              => 'A :az attribútum mezőt ki kell, hogy igaz, vagy hamis.',
    'confirmed'            => 'A :az attribútum megerősítést nem egyezik.',
    'date'                 => 'A :az attribútum nem érvényes dátum.',
    'date_format'          => 'A :az attribútum nem egyezik meg a format :formátum.',
    'different'            => 'A :az attribútum pedig :egyéb eltérő lehet.',
    'digits'               => 'A :az attribútumot kell :számjegy számjegy.',
    'digits_between'       => 'A :az attribútumot kell között :min :max számjegy.',
    'distinct'             => 'A :az attribútum mező ismétlődő értéket.',
    'email'                => 'A :az attribútumot kell egy érvényes e-mail címet.',
    'exists'               => 'A kiválasztott :attribútum érvénytelen.',
    'filled'               => 'A :az attribútum a mező kitöltése kötelező.',
    'image'                => 'A :az attribútumot kell egy képet.',
    'in'                   => 'A kiválasztott :attribútum érvénytelen.',
    'in_array'             => 'A :az attribútum mező nem létezik :más.',
    'integer'              => 'A :az attribútumot kell egy egész szám.',
    'ip'                   => 'A :az attribútumot kell egy érvényes IP-címet.',
    'json'                 => 'A :az attribútumot kell egy érvényes JSON string.',
    'max'                  => [
        'numeric' => 'A :az attribútum nem lehet nagyobb, mint :max.',
        'file'    => 'A :az attribútum nem lehet nagyobb, mint :max. kb.',
        'string'  => 'A :az attribútum nem lehet nagyobb, mint :max karaktereket.',
        'array'   => 'A :az attribútum nem lehet több, mint :max elemek.',
    ],
    'mimes'                => 'A :az attribútumot kell egy fájl típus: :értékek.',
    'min'                  => [
        'numeric' => 'A :az attribútumot kell legalább :min.',
        'file'    => 'A :az attribútumot kell legalább :min kilobyte.',
        'string'  => 'A :az attribútumot kell legalább :min karaktereket.',
        'array'   => 'A :attribútumot kell legalább :min elemek.',
    ],
    'not_in'               => 'A kiválasztott :attribútum érvénytelen.',
    'numeric'              => 'A :az attribútumot kell egy számot.',
    'present'              => 'A :az attribútum a terepen jelen kell lennie.',
    'regex'                => 'A :az attribútum formátuma érvénytelen.',
    'required'             => 'A :az attribútum a mező kitöltése kötelező.',
    'required_if'          => 'A :az attribútum területen van szükség, ha :egyéb :érték.',
    'required_unless'      => 'A :az attribútum mező kitöltése kötelező, kivéve, ha :egyéb :értékek.',
    'required_with'        => 'A :az attribútum területen van szükség, ha :értékek jelen van.',
    'required_with_all'    => 'A :az attribútum területen van szükség, ha :értékek jelen van.',
    'required_without'     => 'A :az attribútum területen van szükség, ha :értékek nem áll fenn.',
    'required_without_all' => 'A :az attribútum mező szükséges, ha nem :értékek vannak jelen.',
    'same'                 => 'A :attribútum :más meg kell egyeznie.',
    'size'                 => [
        'numeric' => 'A :az attribútumot kell :méret.',
        'file'    => 'A :az attribútumot kell :méret kb.',
        'string'  => 'A :az attribútumot kell :méret karaktereket.',
        'array'   => 'A :az attribútum tartalmaznia kell :méret elemek.',
    ],
    'string'               => 'A :az attribútumot kell egy string.',
    'timezone'             => 'A :az attribútumot kell egy érvényes zóna.',
    'unique'               => 'A :az attribútum már foglalt.',
    'url'                  => 'A :az attribútum formátuma érvénytelen.',

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
            'rule-name' => 'egyéni-üzenet',
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
