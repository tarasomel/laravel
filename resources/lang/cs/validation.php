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

    'accepted'             => ':Attribute musí být přijat.',
    'active_url'           => ':Attribute není platná adresa URL.',
    'after'                => ':Attribute musí být datum, po :datum.',
    'alpha'                => ':Atribut může obsahovat pouze písmena.',
    'alpha_dash'           => ':Atribut může obsahovat pouze písmena, čísla a pomlčky.',
    'alpha_num'            => ':Atribut může obsahovat pouze písmena a čísla.',
    'array'                => ':Attribute musí být pole.',
    'before'               => ':Attribute musí být datum, než :rande.',
    'between'              => [
        'numeric' => ':Attribute musí být mezi :min a :max.',
        'file'    => ':Attribute musí být mezi :min a :max kilobytů.',
        'string'  => ':Attribute musí být mezi :min a :max znaků.',
        'array'   => ':Attribute musí mít mezi :min a :max položek.',
    ],
    'boolean'              => ':Atribut pole musí být true nebo false.',
    'confirmed'            => ':Attribute potvrzení neodpovídá.',
    'date'                 => ':Attribute není platný datum.',
    'date_format'          => ':Attribute neodpovídá formát :formát.',
    'different'            => ':Atribut a :ostatní musí být různé.',
    'digits'               => ':Attribute musí být :číslice číslice.',
    'digits_between'       => ':Attribute musí být mezi :min a max číslic.',
    'distinct'             => ':Atribut pole má duplicitní hodnotu.',
    'email'                => ':Attribute musí být platnou e-mailovou adresu.',
    'exists'               => 'Vybrané :atribut je neplatný.',
    'filled'               => ':Atribut pole je povinné.',
    'image'                => ':Attribute musí být obrázek.',
    'in'                   => 'Vybrané :atribut je neplatný.',
    'in_array'             => ':Atribut pole neexistuje v :ostatní.',
    'integer'              => ':Attribute musí být celé číslo.',
    'ip'                   => ':Attribute musí být platná adresa IP.',
    'json'                 => ':Attribute musí být platný řetězec JSON.',
    'max'                  => [
        'numeric' => ':Atribut nesmí být větší než :max.',
        'file'    => ':Atribut nesmí být větší než :max kilobytů.',
        'string'  => ':Atribut nesmí být větší než :max znaků.',
        'array'   => ':Atribut nesmí obsahovat více než :max prvků.',
    ],
    'mimes'                => ':Attribute musí být soubor typu: :hodnot.',
    'min'                  => [
        'numeric' => ':Attribute musí být alespoň :min.',
        'file'    => ':Attribute musí být nejméně :min kilobajtů.',
        'string'  => ':Attribute musí být nejméně :min znaky.',
        'array'   => ':Attribute musí mít alespoň :min položek.',
    ],
    'not_in'               => 'Vybrané :atribut je neplatný.',
    'numeric'              => ':Attribute musí být číslo.',
    'present'              => ':Atribut pole, musí být přítomen.',
    'regex'                => ':Atribut formát je neplatný.',
    'required'             => ':Atribut pole je povinné.',
    'required_if'          => ':Atribut pole je vyžadováno, když :ostatní :hodnota.',
    'required_unless'      => ':Atribut pole je povinné, pokud :další je v :hodnot.',
    'required_with'        => ':Atribut pole je vyžadováno, když :hodnoty je přítomen.',
    'required_with_all'    => ':Atribut pole je vyžadováno, když :hodnoty je přítomen.',
    'required_without'     => ':Atribut pole je vyžadováno, když :hodnoty není přítomen.',
    'required_without_all' => ':Atribut pole je vyžadováno, pokud žádná z :hodnoty jsou přítomny.',
    'same'                 => ':Atribut a :ostatní se musí shodovat.',
    'size'                 => [
        'numeric' => ':Attribute musí být :velikost.',
        'file'    => ':Attribute musí být :velikost kilobajtů.',
        'string'  => ':Attribute musí být :velikost postavy.',
        'array'   => ':Attribute musí obsahovat :velikost položky.',
    ],
    'string'               => ':Attribute musí být řetězec.',
    'timezone'             => ':Attribute musí být platné zóně.',
    'unique'               => ':Attribute již byla přijata.',
    'url'                  => ':Atribut formát je neplatný.',

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
            'rule-name' => 'vlastní zpráva',
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
