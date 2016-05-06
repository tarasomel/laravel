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

    'accepted'             => 'De :kenmerk moet worden geaccepteerd.',
    'active_url'           => 'De :attribuut is geen geldige URL.',
    'after'                => 'De :attribuut moet een datum na :datum.',
    'alpha'                => 'De :attribuut mag alleen letters bevatten.',
    'alpha_dash'           => 'De :attribuut mag alleen bestaan uit letters, cijfers en streepjes.',
    'alpha_num'            => 'De :attribuut kan alleen letters en nummers bevatten.',
    'array'                => 'De :attribuut moet een array.',
    'before'               => 'De :attribuut moet een datum voor : - date.',
    'between'              => [
        'numeric' => 'De :kenmerk moet worden tussen :min :max.',
        'file'    => 'De :kenmerk moet worden tussen :min :max kilobytes.',
        'string'  => 'De :kenmerk moet worden tussen :min :max tekens.',
        'array'   => 'De :attribuut moet tussen het min-en max-items.',
    ],
    'boolean'              => 'De :kenmerk veld moet true of false zijn.',
    'confirmed'            => 'De :kenmerk bevestiging behoeft niet overeen.',
    'date'                 => 'De :attribuut is geen geldige datum.',
    'date_format'          => 'De :kenmerk komt niet overeen met het formaat :het formaat.',
    'different'            => 'De :kenmerk en :andere moet anders.',
    'digits'               => 'De :kenmerk moet worden :cijfers cijfers.',
    'digits_between'       => 'De :kenmerk moet worden tussen :min :max cijfers.',
    'distinct'             => 'De :kenmerk veld heeft een dubbele waarde.',
    'email'                => 'De :attribuut moet een geldig e-mail adres.',
    'exists'               => 'De gekozen :kenmerk is ongeldig.',
    'filled'               => 'De :attribuut is een verplicht veld.',
    'image'                => 'De :kenmerk moet worden van een afbeelding.',
    'in'                   => 'De gekozen :kenmerk is ongeldig.',
    'in_array'             => 'De :kenmerk veld niet voorkomt in :andere.',
    'integer'              => 'De :attribuut moet een geheel getal zijn.',
    'ip'                   => 'De :attribuut moet een geldig IP-adres.',
    'json'                 => 'De :attribuut moet een geldig JSON-string.',
    'max'                  => [
        'numeric' => 'De :attribuut mag niet groter zijn dan :max.',
        'file'    => 'De :attribuut mag niet groter zijn dan :max kilobytes.',
        'string'  => 'De :attribuut mag niet groter zijn dan :max tekens.',
        'array'   => 'De :attribuut mag niet meer dan :max items.',
    ],
    'mimes'                => 'De :kenmerk moet worden een bestand van het type: :waarden.',
    'min'                  => [
        'numeric' => 'De :attribuut moet minimaal zijn :min.',
        'file'    => 'De :attribuut moet minimaal zijn :min kilobytes.',
        'string'  => 'De :attribuut moet minimaal zijn :min tekens.',
        'array'   => 'De :attribuut moet ten minste :min items.',
    ],
    'not_in'               => 'De gekozen :kenmerk is ongeldig.',
    'numeric'              => 'De :attribuut moet een getal zijn.',
    'present'              => 'De :kenmerk veld aanwezig moeten zijn.',
    'regex'                => 'De :attribuut formaat is ongeldig.',
    'required'             => 'De :attribuut is een verplicht veld.',
    'required_if'          => 'De :attribuut is een verplicht veld wanneer :andere :waarde.',
    'required_unless'      => 'De :kenmerk veld is vereist, tenzij :andere in :waarden.',
    'required_with'        => 'De :attribuut is een verplicht veld als :waarden aanwezig.',
    'required_with_all'    => 'De :attribuut is een verplicht veld als :waarden aanwezig.',
    'required_without'     => 'De :attribuut is een verplicht veld als :waarden niet aanwezig is.',
    'required_without_all' => 'De :attribuut is een verplicht veld wanneer er geen waarden aanwezig zijn.',
    'same'                 => 'De :kenmerk en :andere moeten overeenkomen.',
    'size'                 => [
        'numeric' => 'De :kenmerk moet worden :de grootte.',
        'file'    => 'De :kenmerk moet worden :grootte in kilobytes.',
        'string'  => 'De :kenmerk moet worden :grootte van de tekens.',
        'array'   => 'De :kenmerk moet bevatten :grootte items.',
    ],
    'string'               => 'De :attribuut moet een tekenreeks zijn.',
    'timezone'             => 'De :attribuut moet een geldige zone.',
    'unique'               => 'De :attribuut is al genomen.',
    'url'                  => 'De :attribuut formaat is ongeldig.',

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
            'rule-name' => 'maat bericht',
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
