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

    'accepted'             => ':Attribut måste vara accepterade.',
    'active_url'           => ':- Attribut är inte en giltig URL.',
    'after'                => ':Attribut måste vara ett datum efter :datum.',
    'alpha'                => ':Attribut kan endast bestå av bokstäver.',
    'alpha_dash'           => ':Attribut kan endast innehålla bokstäver, siffror och bindestreck.',
    'alpha_num'            => ':Attribut kan endast bestå av bokstäver och siffror.',
    'array'                => ':Attribut måste vara en matris.',
    'before'               => ':Attribut måste vara ett datum före datum.',
    'between'              => [
        'numeric' => ':Attribut måste vara mellan min och max.',
        'file'    => ':Attribut måste vara mellan min och max kilobyte.',
        'string'  => ':Attribut måste vara mellan min och max tecken.',
        'array'   => ':Attributet måste ha mellan min-och max-objekt.',
    ],
    'boolean'              => ':Attributfält måste vara sanna eller falska.',
    'confirmed'            => ':Attribut bekräftelse stämmer inte.',
    'date'                 => ':- Attribut är inte ett giltigt datum.',
    'date_format'          => ':Attributet inte matcha format : - formatet.',
    'different'            => 'I :och attribut :andra måste vara olika.',
    'digits'               => ':Attribut måste vara siffror siffror.',
    'digits_between'       => ':Attribut måste vara mellan min och max siffror.',
    'distinct'             => ':Attribut området har ett värde.',
    'email'                => ':Attribut måste vara en giltig e-postadress.',
    'exists'               => 'De utvalda :attribut är ogiltig.',
    'filled'               => ':Attribut för fältet är obligatoriskt.',
    'image'                => ':Attribut måste vara en bild.',
    'in'                   => 'De utvalda :attribut är ogiltig.',
    'in_array'             => ':Attribut fältet inte finns i den andra.',
    'integer'              => ':Attribut måste vara ett heltal.',
    'ip'                   => ':Attribut måste vara en giltig IP-adress.',
    'json'                 => ':Attribut måste vara ett giltigt JSON-sträng.',
    'max'                  => [
        'numeric' => ':Attributet får inte vara större än max.',
        'file'    => ':Attributet får inte vara större än max kilobyte.',
        'string'  => ':Attributet får inte vara större än max tecken.',
        'array'   => ':Attributet får inte ha mer än max-objekt.',
    ],
    'mimes'                => ':Attribut måste vara en fil av typen: :värden.',
    'min'                  => [
        'numeric' => ':- Attribut måste vara minst :min.',
        'file'    => ':- Attribut måste vara minst :min kilobyte.',
        'string'  => ':- Attribut måste vara minst :min tecken.',
        'array'   => ':- Attribut måste ha minst :min poster.',
    ],
    'not_in'               => 'De utvalda :attribut är ogiltig.',
    'numeric'              => ':- Attribut måste vara ett nummer.',
    'present'              => ':Attributfält måste vara närvarande.',
    'regex'                => ':Attribut format är ogiltig.',
    'required'             => ':Attribut för fältet är obligatoriskt.',
    'required_if'          => ':Attribut för fältet är obligatoriskt när :andra är :värde.',
    'required_unless'      => ':Attribut för fältet är obligatoriskt om inte :övriga är :värderingar.',
    'required_with'        => ':Attribut för fältet är obligatoriskt när :värden är närvarande.',
    'required_with_all'    => ':Attribut för fältet är obligatoriskt när :värden är närvarande.',
    'required_without'     => ':Attribut för fältet är obligatoriskt när :värden är inte närvarande.',
    'required_without_all' => ':Attribut för fältet är obligatoriskt när inget av värdena som är närvarande.',
    'same'                 => 'I :och attribut :andra måste match.',
    'size'                 => [
        'numeric' => ':Attribut måste vara : - storlek.',
        'file'    => ':Attribut måste vara :storlek kilobyte.',
        'string'  => ':Attribut måste vara :storlek tecken.',
        'array'   => ':- Attributet måste innehålla :storlek poster.',
    ],
    'string'               => ':- Attribut måste vara en sträng.',
    'timezone'             => ':- Attribut måste vara en giltig tidszon.',
    'unique'               => ':- Attributet har redan vidtagits.',
    'url'                  => ':Attribut format är ogiltig.',

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
            'rule-name' => 'anpassad-meddelande',
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
