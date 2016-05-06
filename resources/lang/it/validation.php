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

    'accepted'             => 'L\' :attribute deve essere accettato.',
    'active_url'           => 'L\' :attributo non è un URL valido.',
    'after'                => 'L\' :attributo deve essere una data dopo data.',
    'alpha'                => 'L\' :attributo può contenere solo lettere.',
    'alpha_dash'           => 'L\' :attributo può contenere solo lettere, numeri e trattini.',
    'alpha_num'            => 'L\' :attributo può contenere solo lettere e numeri.',
    'array'                => 'L\' :attributo deve essere un array.',
    'before'               => 'L\' :attributo deve essere una data precedente :data.',
    'between'              => [
        'numeric' => 'L\' :attribute deve essere compresa tra :min e max.',
        'file'    => 'L\' :attribute deve essere compresa tra :min e max kilobyte.',
        'string'  => 'L\' :attribute deve essere compresa tra :min e max di caratteri.',
        'array'   => 'L\' :attribute deve essere compresa tra :min e max di elementi.',
    ],
    'boolean'              => 'L\' :campo attributo deve essere true o false.',
    'confirmed'            => 'L\' :attributo di conferma non corrisponde.',
    'date'                 => 'L\' :attributo non è una data valida.',
    'date_format'          => 'L\' :attributo non corrisponde al formato :formato.',
    'different'            => 'L\' :attributo e :altri devono essere diversi.',
    'digits'               => 'L\' :attributo deve essere :cifre cifre.',
    'digits_between'       => 'L\' :attribute deve essere compresa tra :min e max cifre.',
    'distinct'             => 'L\' :campo attributo ha un valore duplicato.',
    'email'                => 'L\' :attributo deve essere un indirizzo email valido.',
    'exists'               => 'Selezionato :attributo non è valido.',
    'filled'               => 'L\' :attributo di campo è obbligatorio.',
    'image'                => 'L\' :attributo deve essere un\'immagine.',
    'in'                   => 'Selezionato :attributo non è valido.',
    'in_array'             => 'L\' :attributo di campo non esiste in:.',
    'integer'              => 'L\' :attributo deve essere un numero intero.',
    'ip'                   => 'L\' :attributo deve essere un indirizzo IP valido.',
    'json'                 => 'L\' :attributo deve essere un valido stringa JSON.',
    'max'                  => [
        'numeric' => 'L\' :attributo non può essere maggiore di :max.',
        'file'    => 'L\' :attributo non può essere superiore a :max kilobyte.',
        'string'  => 'L\' :attributo non può essere superiore :a) a caratteri max.',
        'array'   => 'L\' :attributo non può avere più di :elementi max.',
    ],
    'mimes'                => 'L\' :attributo deve essere un file di tipo: :i valori.',
    'min'                  => [
        'numeric' => 'L\' :attribute deve essere di almeno :min.',
        'file'    => 'L\' :attribute deve essere di almeno :min kilobyte.',
        'string'  => 'L\' :attribute deve essere di almeno :min caratteri.',
        'array'   => 'L\' :attributo deve avere almeno :min elementi.',
    ],
    'not_in'               => 'Selezionato :attributo non è valido.',
    'numeric'              => 'L\' :attributo deve essere un numero.',
    'present'              => 'L\' :attributo del campo deve essere presente.',
    'regex'                => 'L\' :attributo formato non è valido.',
    'required'             => 'L\' :attributo di campo è obbligatorio.',
    'required_if'          => 'L\' :attributo di campo è obbligatorio quando :altro :valore di.',
    'required_unless'      => 'L\' :attributo di campo è obbligatorio, a meno che :altri :i valori.',
    'required_with'        => 'L\' :attributo di campo è obbligatorio quando :valori è presente.',
    'required_with_all'    => 'L\' :attributo di campo è obbligatorio quando :valori è presente.',
    'required_without'     => 'L\' :attributo di campo è obbligatorio quando i valori non è presente.',
    'required_without_all' => 'L\' :attributo di campo è obbligatorio se nessuno dei valori presenti.',
    'same'                 => 'L\' :attributo e :altri devono corrispondere.',
    'size'                 => [
        'numeric' => 'L\' :attributo :dimensione.',
        'file'    => 'L\' :attributo :dimensione in kilobyte.',
        'string'  => 'L\' :attributo :dimensione caratteri.',
        'array'   => 'L\' :attributo deve contenere :elementi di formato.',
    ],
    'string'               => 'L\' :attributo deve essere una stringa.',
    'timezone'             => 'L\' :attributo deve essere una zona valida.',
    'unique'               => 'L\' :attributo è già stata presa.',
    'url'                  => 'L\' :attributo formato non è valido.',

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
            'rule-name' => 'custom-messaggio',
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
