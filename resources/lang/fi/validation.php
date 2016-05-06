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

    'accepted'             => ':Ominaisuus on hyväksyttävä.',
    'active_url'           => ':Ominaisuus ei ole voimassa oleva URL.',
    'after'                => ':Ominaisuus on oltava päivämäärä jälkeen päivämäärä.',
    'alpha'                => 'Myös :määrite voi sisältää vain kirjaimia.',
    'alpha_dash'           => 'Myös :määrite voi sisältää vain kirjaimia, numeroita ja väliviivoja.',
    'alpha_num'            => 'Myös :määrite voi sisältää vain kirjaimia ja numeroita.',
    'array'                => ':Ominaisuus on array.',
    'before'               => ':Ominaisuus on oltava päivämäärä :päivämäärä.',
    'between'              => [
        'numeric' => ':Ominaisuus on oltava välillä :min :max.',
        'file'    => ':Ominaisuus on oltava välillä :min :max kilotavua.',
        'string'  => ':Ominaisuus on oltava välillä :min :max merkkiä.',
        'array'   => ':Ominaisuus on oltava välillä :min :max kohteita.',
    ],
    'boolean'              => ':Ominaisuus-kentässä on oltava tosi tai epätosi.',
    'confirmed'            => ':Ominaisuus vahvistus ei vastaa.',
    'date'                 => ':Ominaisuus ei ole kelvollinen päivämäärä.',
    'date_format'          => ':Ominaisuus ei vastaa :muotoa.',
    'different'            => ':Ominaisuus, ja :toinen on erilainen.',
    'digits'               => ':Ominaisuus on :numeroa numeroa.',
    'digits_between'       => ':Ominaisuus on oltava välillä :min :max numeroa.',
    'distinct'             => ':Ominaisuus-kentässä on päällekkäisiä arvo.',
    'email'                => ':Ominaisuus on voimassa oleva sähköpostiosoite.',
    'exists'               => 'Valittu :ominaisuus on virheellinen.',
    'filled'               => 'Myös :määrite on pakollinen kenttä.',
    'image'                => ':Ominaisuus tulee kuva.',
    'in'                   => 'Valittu :ominaisuus on virheellinen.',
    'in_array'             => ':Ominaisuus-kentässä ei ole olemassa :muut.',
    'integer'              => ':Ominaisuus on oltava kokonaisluku.',
    'ip'                   => ':Ominaisuus on voimassa oleva IP-osoite.',
    'json'                 => ':Ominaisuus on voimassa JSON merkkijono.',
    'max'                  => [
        'numeric' => ':Ominaisuus ei saa olla suurempi kuin :max.',
        'file'    => ':Ominaisuus ei saa olla suurempi kuin :max kilotavua.',
        'string'  => ':Ominaisuus ei saa olla suurempi kuin :max merkkiä.',
        'array'   => ':Ominaisuus ei ehkä ole enempää kuin :max kohteita.',
    ],
    'mimes'                => ':Ominaisuus on tiedoston tyyppi: :arvoja.',
    'min'                  => [
        'numeric' => ':Ominaisuus on oltava vähintään :min.',
        'file'    => ':Ominaisuus on oltava vähintään :min kilotavua.',
        'string'  => ':Ominaisuus on oltava vähintään :min merkkiä.',
        'array'   => ':Ominaisuus on oltava vähintään :min kohteita.',
    ],
    'not_in'               => 'Valittu :ominaisuus on virheellinen.',
    'numeric'              => ':Ominaisuus täytyy olla numero.',
    'present'              => ':Ominaisuus-kentässä on oltava läsnä.',
    'regex'                => 'Eu :ominaisuuden muoto on virheellinen.',
    'required'             => 'Myös :määrite on pakollinen kenttä.',
    'required_if'          => ':Ominaisuus kenttä on pakollinen, kun :toinen on :arvo.',
    'required_unless'      => ':Ominaisuus kenttä on pakollinen, paitsi jos toinen on : - arvoja.',
    'required_with'        => ':Ominaisuus kenttä on pakollinen, kun :arvot on läsnä.',
    'required_with_all'    => ':Ominaisuus kenttä on pakollinen, kun :arvot on läsnä.',
    'required_without'     => ':Ominaisuus kenttä on pakollinen, kun :arvot ei ole läsnä.',
    'required_without_all' => ':Ominaisuus kenttä on pakollinen, kun mikään :arvot ovat läsnä.',
    'same'                 => ':Ominaisuus ja :muiden on vastattava.',
    'size'                 => [
        'numeric' => ':Ominaisuus on :koko.',
        'file'    => ':Ominaisuus on :koko kilotavua.',
        'string'  => ':Ominaisuus on :koko merkkiä.',
        'array'   => ':Ominaisuus tulee sisältää :koko kohteita.',
    ],
    'string'               => ':Ominaisuus on oltava merkkijono.',
    'timezone'             => ':Ominaisuus on voimassa oleva vyöhyke.',
    'unique'               => ':Ominaisuus on jo otettu.',
    'url'                  => 'Eu :ominaisuuden muoto on virheellinen.',

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
            'rule-name' => 'custom-viesti',
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
