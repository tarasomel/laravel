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

    'accepted'             => 'Av :attributt må være akseptert.',
    'active_url'           => 'Av :attributt er ikke en gyldig URL.',
    'after'                => ':- Attributtet må være en dato etter :dato.',
    'alpha'                => 'Av :attributt kan bare inneholde bokstaver.',
    'alpha_dash'           => 'Av :attributt kan bare inneholde bokstaver, tall og bindestreker.',
    'alpha_num'            => 'Av :attributt kan bare inneholde bokstaver og tall.',
    'array'                => 'Av :attributt må være en matrise.',
    'before'               => ':- Attributtet må være en dato før :dato.',
    'between'              => [
        'numeric' => ':- Attributtet må være mellom :min og :maks.',
        'file'    => ':- Attributtet må være mellom :min og :maks kilobyte.',
        'string'  => ':- Attributtet må være mellom :min og :maks tegn.',
        'array'   => 'Av :attributt må ha mellom :min og :maks elementer.',
    ],
    'boolean'              => 'Av :attributt feltet må være sann eller usann.',
    'confirmed'            => 'Av :attributt bekreftelse ikke stemmer.',
    'date'                 => 'Av :attributt er ikke en gyldig dato.',
    'date_format'          => 'Av :attributt ikke samsvarer format :format.',
    'different'            => 'Av :attributt og :andre må være forskjellige.',
    'digits'               => 'Av :attributt må være :sifre sifre.',
    'digits_between'       => ':- Attributtet må være mellom :min og :maks sifre.',
    'distinct'             => 'Av :attributt feltet har en lik verdi.',
    'email'                => 'Av :attributt må være en gyldig e-postadresse.',
    'exists'               => 'Valgt :attributt er ugyldig.',
    'filled'               => 'Av :attributt feltet er obligatorisk.',
    'image'                => 'Av :attributt må være et bilde.',
    'in'                   => 'Valgt :attributt er ugyldig.',
    'in_array'             => 'Av :attributt feltet finnes ikke i andre.',
    'integer'              => ':- Attributtet må være et heltall.',
    'ip'                   => 'Av :attributt må være en gyldig IP-adresse.',
    'json'                 => ':- Attributtet må være en gyldig JSON-streng.',
    'max'                  => [
        'numeric' => 'Av :attributt kan ikke være større enn :maks.',
        'file'    => 'Av :attributt kan ikke være større enn :maks kilobyte.',
        'string'  => 'Av :attributt kan ikke være større enn :maks tegn.',
        'array'   => 'Av :attributt kan ikke ha mer enn :maks elementer.',
    ],
    'mimes'                => 'Av :attributt må være en fil av typen: :verdier.',
    'min'                  => [
        'numeric' => ':- Attributtet må være minst :min.',
        'file'    => ':- Attributtet må være minst :min kilobyte.',
        'string'  => ':- Attributtet må være minst :min tegn.',
        'array'   => 'Av :attributt må ha minst :min elementer.',
    ],
    'not_in'               => 'Valgt :attributt er ugyldig.',
    'numeric'              => ':- Attributtet må være et tall.',
    'present'              => 'Av :attributt feltet må være til stede.',
    'regex'                => 'Av :attributt-format er ugyldig.',
    'required'             => 'Av :attributt feltet er obligatorisk.',
    'required_if'          => 'Av :attributt feltet er påkrevd: - når andre er :verdi.',
    'required_unless'      => 'Av :attributt feltet er påkrevd uten at andre er i :verdier.',
    'required_with'        => 'Av :attributt feltet er påkrevd når :verdier som er tilstede.',
    'required_with_all'    => 'Av :attributt feltet er påkrevd når :verdier som er tilstede.',
    'required_without'     => 'Av :attributt feltet er påkrevd når :verdier som ikke er til stede.',
    'required_without_all' => 'Av :attributt feltet er påkrevd når ingen av :verdier som er tilstede.',
    'same'                 => 'Av :attributt og :andre må samsvare.',
    'size'                 => [
        'numeric' => 'Av :attributt må være : - størrelse.',
        'file'    => 'Av :attributt må være :størrelse kilobyte.',
        'string'  => 'Av :attributt må være :størrelse tegn.',
        'array'   => 'Av :attributt må inneholde :størrelse elementer.',
    ],
    'string'               => ':- Attributtet må være en streng.',
    'timezone'             => ':- Attributtet må være en gyldig sone.',
    'unique'               => 'Av :attributt har allerede blitt tatt.',
    'url'                  => 'Av :attributt-format er ugyldig.',

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
            'rule-name' => 'custom-melding',
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
