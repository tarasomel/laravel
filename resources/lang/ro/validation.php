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

    'accepted'             => 'Câmpul :attribute trebuie să fie acceptate.',
    'active_url'           => 'De :atribut nu este un URL valid.',
    'after'                => 'Câmpul :attribute trebuie să fie o data dupa :data.',
    'alpha'                => 'De :atribut poate conține numai litere.',
    'alpha_dash'           => 'De :atribut poate conține numai litere, cifre și liniuțe.',
    'alpha_num'            => 'De :atribut poate conține numai litere și cifre.',
    'array'                => 'Câmpul :attribute trebuie să fie o matrice.',
    'before'               => 'Câmpul :attribute trebuie să fie o data inainte de :data.',
    'between'              => [
        'numeric' => 'Câmpul :attribute trebuie să fie între :min :max.',
        'file'    => 'Câmpul :attribute trebuie să fie între :min și max de kilobytes.',
        'string'  => 'Câmpul :attribute trebuie să fie între :min și max de caractere.',
        'array'   => 'Câmpul :attribute trebuie să aibă între :min și max de articole.',
    ],
    'boolean'              => 'În :câmp de atribute trebuie să fie adevărate sau false.',
    'confirmed'            => 'De :atribut confirmare nu se potrivesc.',
    'date'                 => 'De :atribut nu este o dată validă.',
    'date_format'          => 'De :atribut nu se potrivesc format :format.',
    'different'            => 'De :atribut și :celălalt trebuie să fie diferite.',
    'digits'               => 'Câmpul :attribute trebuie să fie :cifre cifre.',
    'digits_between'       => 'Câmpul :attribute trebuie să fie între :min :max cifre.',
    'distinct'             => 'În :câmp atribut are o valoare dublate.',
    'email'                => 'Câmpul :attribute trebuie să fie o adresă de email validă.',
    'exists'               => 'Selectat :atribut este invalid.',
    'filled'               => 'De :atribut câmp este obligatoriu.',
    'image'                => 'Câmpul :attribute trebuie să fie o imagine.',
    'in'                   => 'Selectat :atribut este invalid.',
    'in_array'             => 'În :câmp de atribute nu există în :altele.',
    'integer'              => 'Câmpul :attribute trebuie să fie un număr întreg.',
    'ip'                   => 'Câmpul :attribute trebuie să fie o adresă IP validă.',
    'json'                 => 'Câmpul :attribute trebuie să fie un șir JSON valid.',
    'max'                  => [
        'numeric' => 'De :atribut nu poate fi mai mare decât :max.',
        'file'    => 'De :atribut nu poate fi mai mare decât :max kilobytes.',
        'string'  => 'De :atribut nu poate fi mai mare decât :max caractere.',
        'array'   => 'De :atribut nu poate avea mai mult de :max articole.',
    ],
    'mimes'                => 'Câmpul :attribute trebuie să fie un fișier de tip: :valori.',
    'min'                  => [
        'numeric' => 'Câmpul :attribute trebuie să fie de cel puțin :min.',
        'file'    => 'Câmpul :attribute trebuie să fie de cel puțin :min kilobytes.',
        'string'  => 'Câmpul :attribute trebuie să fie de cel puțin :min personaje.',
        'array'   => 'Câmpul :attribute trebuie să aibă cel puțin :min elemente.',
    ],
    'not_in'               => 'Selectat :atribut este invalid.',
    'numeric'              => 'Câmpul :attribute trebuie să fie un număr.',
    'present'              => 'În :câmp de atribute trebuie să fie prezent.',
    'regex'                => 'De :atribut formatul este invalid.',
    'required'             => 'De :atribut câmp este obligatoriu.',
    'required_if'          => 'În :câmp de atribute este necesară atunci când :celălalt este :valoare.',
    'required_unless'      => 'În :câmp de atribute este necesară dacă :celălalt este în :valori.',
    'required_with'        => 'În :câmp de atribute este necesară atunci când :valori este prezent.',
    'required_with_all'    => 'În :câmp de atribute este necesară atunci când :valori este prezent.',
    'required_without'     => 'În :câmp de atribute este necesară atunci când :valori nu este prezent.',
    'required_without_all' => 'În :câmp de atribute este necesară atunci când nici unul dintre :valorile sunt prezente.',
    'same'                 => 'De :atribut și :celălalt trebuie să se potrivească.',
    'size'                 => [
        'numeric' => 'Câmpul :attribute trebuie să fie :dimensiunea.',
        'file'    => 'Câmpul :attribute trebuie să fie :dimensiunea kilobytes.',
        'string'  => 'Câmpul :attribute trebuie să fie :dimensiuni de caractere.',
        'array'   => 'Câmpul :attribute trebuie să conțină :dimensiunea elementelor.',
    ],
    'string'               => 'Câmpul :attribute trebuie să fie un șir de caractere.',
    'timezone'             => 'Câmpul :attribute trebuie să fie valid zona.',
    'unique'               => 'De :atribut a fost deja luată.',
    'url'                  => 'De :atribut formatul este invalid.',

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
            'rule-name' => 'personalizat mesaj',
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
