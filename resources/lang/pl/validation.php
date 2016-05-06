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

    'accepted'             => 'W :atrybut musi być przyjęty.',
    'active_url'           => 'W :atrybut-to nie jest prawidłowy adres URL.',
    'after'                => 'W :atrybut musi być po datę :Data.',
    'alpha'                => 'W :atrybut może zawierać tylko litery.',
    'alpha_dash'           => 'W :atrybut może zawierać tylko litery, cyfry i myślniki.',
    'alpha_num'            => 'W :atrybut może zawierać tylko litery i cyfry.',
    'array'                => 'W :atrybut musi być tablicą.',
    'before'               => 'W :atrybut musi być późniejsza niż data :Data.',
    'between'              => [
        'numeric' => 'W :atrybut musi być pomiędzy min i Max.',
        'file'    => 'W :atrybut musi być między :min :max kilobajtów.',
        'string'  => 'W :atrybut musi być między :min :max. liczba znaków.',
        'array'   => 'W :atrybut musi mieć między :min :max elementów.',
    ],
    'boolean'              => 'W polu atrybut musi mieć wartość True lub false.',
    'confirmed'            => 'W :potwierdzenie atrybutu nie pasuje.',
    'date'                 => 'W :atrybut nie jest poprawną datą.',
    'date_format'          => 'W :atrybut nie odpowiada format :Format.',
    'different'            => 'W :atrybut :innych powinno być inaczej.',
    'digits'               => 'W :atrybut musi być :cyfry cyfry.',
    'digits_between'       => 'W :atrybut musi być między :min :max cyfr.',
    'distinct'             => 'W polu atrybutu ma zduplikowane wartości.',
    'email'                => 'W :atrybut powinien być prawidłowy adres e-mail.',
    'exists'               => 'Niektóre :atrybut jest nieważne.',
    'filled'               => 'Wymagane :pole atrybutu.',
    'image'                => 'W :atrybut powinien być obraz.',
    'in'                   => 'Niektóre :atrybut jest nieważne.',
    'in_array'             => 'W polu atrybutu nie istnieje :inne.',
    'integer'              => 'W :atrybut musi być liczbą całkowitą.',
    'ip'                   => 'W :atrybut musi być prawidłowy adres IP.',
    'json'                 => 'W :atrybut powinien być prawidłowy ciąg znaków json.',
    'max'                  => [
        'numeric' => 'W :atrybut nie może być większa niż :Max.',
        'file'    => 'W :atrybut nie może być większa niż :maksymalnie kilobajtów.',
        'string'  => 'W :atrybut nie może być większa niż :maksymalnie znaków.',
        'array'   => 'W :atrybut nie może mieć więcej niż :maksymalnie przedmiotów.',
    ],
    'mimes'                => 'W :atrybut powinien być plik typu: :wartości.',
    'min'                  => [
        'numeric' => 'W :atrybut musi być nie mniejsza niż :min.',
        'file'    => 'W :atrybut musi być nie mniejsza niż :min. kilobajtów.',
        'string'  => 'W :atrybut musi być nie mniejsza niż :min charaktery.',
        'array'   => 'W :atrybut musi mieć minimum :minimum przedmiotów.',
    ],
    'not_in'               => 'Niektóre :atrybut jest nieważne.',
    'numeric'              => 'W :atrybut musi być w pobliżu.',
    'present'              => 'W polu atrybut musi być obecny.',
    'regex'                => 'W :atrybut format jest nieprawidłowy.',
    'required'             => 'Wymagane :pole atrybutu.',
    'required_if'          => 'W polu atrybut jest wymagany, jeżeli :inny :wartość.',
    'required_unless'      => 'W polu atrybut jest wymagany, jeżeli :inne wartości.',
    'required_with'        => 'W polu atrybut jest wymagany, jeżeli :wartości jest obecny.',
    'required_with_all'    => 'W polu atrybut jest wymagany, jeżeli :wartości jest obecny.',
    'required_without'     => 'W polu atrybut jest wymagany, jeżeli :wartości nie ma.',
    'required_without_all' => 'W polu atrybut jest wymagany, jeśli żadna z :wartości są obecne.',
    'same'                 => 'W :atrybut :innych musi być taka sama.',
    'size'                 => [
        'numeric' => 'W :atrybut musi być :Rozmiar.',
        'file'    => 'W :atrybut musi być :Rozmiar kilobajtów.',
        'string'  => 'W :atrybut musi być :wielkości znaków.',
        'array'   => 'W :atrybut powinien zawierać :Rozmiar elementów.',
    ],
    'string'               => 'W :atrybut musi być ciągiem znaków.',
    'timezone'             => 'W :atrybut musi być w dozwolonej strefie.',
    'unique'               => 'W :atrybut została już podjęta.',
    'url'                  => 'W :atrybut format jest nieprawidłowy.',

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
            'rule-name' => 'na zamówienie komunikat',
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
