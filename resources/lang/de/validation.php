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

    'accepted'             => 'Die :Attribut muss akzeptiert werden.',
    'active_url'           => 'Die :Attribut ist keine gültige URL.',
    'after'                => 'Der :attribute muss ein Datum nach dem :date sein.',
    'alpha'                => 'Der :attribute darf nur Buchstaben enthalten.',
    'alpha_dash'           => 'Der :attribute darf nur aus Buchstaben, zahlen und Bindestriche.',
    'alpha_num'            => 'Der :attribute darf nur Buchstaben und zahlen enthalten.',
    'array'                => 'Die :Attribut muss ein array sein.',
    'before'               => 'Der :attribute muss ein Datum vor dem :date sein.',
    'between'              => [
        'numeric' => 'Die :Attribut muss zwischen min und max.',
        'file'    => 'Die :Attribut muss zwischen :min :max Kilobyte.',
        'string'  => 'Die :Attribut muss zwischen min und max Zeichen.',
        'array'   => 'Die :Attribut muss zwischen :min :max Elemente.',
    ],
    'boolean'              => 'Die :Attribut Feld muss true oder false sein.',
    'confirmed'            => 'Die :Attribut ist nicht bestaetigt.',
    'date'                 => 'Die :Attribut ist nicht ein gültiges Datum ist.',
    'date_format'          => 'Die :Attribut entspricht nicht dem format : - format.',
    'different'            => 'Die :Attribut und :der andere muss anders sein.',
    'digits'               => 'Die :Attribut muss :Ziffern Ziffern.',
    'digits_between'       => 'Die :Attribut muss zwischen min und max stellen.',
    'distinct'             => 'Die :Attribut-Feld hat einen doppelten Wert.',
    'email'                => 'Der : - Attribut muss eine gültige E-Mail-Adresse.',
    'exists'               => 'Die gewählten : - Attribut ist ungültig.',
    'filled'               => 'Die :Attribut Feld ist erforderlich.',
    'image'                => 'Die :Attribut muss ein Bild sein.',
    'in'                   => 'Die gewählten : - Attribut ist ungültig.',
    'in_array'             => 'Die :Attribut Feld nicht vorhanden in :anderen.',
    'integer'              => 'Der : - Attribut muss eine Ganzzahl sein.',
    'ip'                   => 'Der : - Attribut muss eine gültige IP-Adresse.',
    'json'                 => 'Der : - Attribut muss ein Gültiger JSON-string.',
    'max'                  => [
        'numeric' => 'Die :Attribut kann nicht größer als :max.',
        'file'    => 'Die :Attribut darf nicht größer sein als :max Kilobyte.',
        'string'  => 'Die :Attribut darf nicht größer sein als :max Zeichen.',
        'array'   => 'Die :Attribut darf nicht mehr als max Elemente.',
    ],
    'mimes'                => 'Der : - Attribut muss eine Datei vom Typ: :Werte.',
    'min'                  => [
        'numeric' => 'Die :Attribut muss mindestens :min.',
        'file'    => 'Die :Attribut muss mindestens :min Kilobyte.',
        'string'  => 'Die :Attribut muss mindestens min Zeichen.',
        'array'   => 'Die :Attribut muss mindestens :min-Elemente.',
    ],
    'not_in'               => 'Die gewählten : - Attribut ist ungültig.',
    'numeric'              => 'Der :attribute muss eine Zahl sein.',
    'present'              => 'Das :Feld Attribut muss vorhanden sein.',
    'regex'                => 'Der : - Attribut-format ist ungültig.',
    'required'             => 'Die :Attribut Feld ist erforderlich.',
    'required_if'          => 'Die :Attribut Feld ist erforderlich, wenn :die andere ist :Wert.',
    'required_unless'      => 'Die :Attribut Feld ist erforderlich, es sei denn :andere :Werte.',
    'required_with'        => 'Die :Attribut Feld ist erforderlich, wenn :Werte vorhanden ist.',
    'required_with_all'    => 'Die :Attribut Feld ist erforderlich, wenn :Werte vorhanden ist.',
    'required_without'     => 'Die :Attribut Feld ist erforderlich, wenn : - Werte ist nicht vorhanden.',
    'required_without_all' => 'Die :Attribut Feld ist erforderlich, wenn keiner der :Werte vorhanden sind.',
    'same'                 => 'Der :attribute und :other übereinstimmen muss.',
    'size'                 => [
        'numeric' => 'Der : - Attribut muss sein :die Größe.',
        'file'    => 'Der : - Attribut muss sein :Größe in Kilobyte.',
        'string'  => 'Der : - Attribut muss sein :Größe, Zeichen.',
        'array'   => 'Die :Attribut muss enthalten :die Größe der Elemente.',
    ],
    'string'               => 'Die :Attribut muss ein string sein.',
    'timezone'             => 'Der : - Attribut muss ein Gültiger zone.',
    'unique'               => 'Die :Attribut bereits genommen.',
    'url'                  => 'Der : - Attribut-format ist ungültig.',

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
            'rule-name' => 'custom-Nachricht',
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
