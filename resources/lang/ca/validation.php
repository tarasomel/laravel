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

    'accepted'             => 'L\' :atribut ha de ser acceptat.',
    'active_url'           => 'L\' :atribut no és vàlid a l\'URL.',
    'after'                => 'L\' :atribut ha de ser un dia després :la data.',
    'alpha'                => 'L\' :atribut només pot contenir lletres.',
    'alpha_dash'           => 'L\' :atribut només poden contenir lletres, números i guions.',
    'alpha_num'            => 'L\' :atribut només pot contenir lletres i números.',
    'array'                => 'L\' :atribut ha de ser una matriu.',
    'before'               => 'L\' :atribut ha de ser una data abans :la data.',
    'between'              => [
        'numeric' => 'L\' :atribut ha de ser entre :min i max.',
        'file'    => 'L\' :atribut ha de ser entre :min i max kilobytes.',
        'string'  => 'L\' :atribut ha de ser entre :min i max personatges.',
        'array'   => 'L\' :atribut ha de tenir entre :min i max elements.',
    ],
    'boolean'              => 'L\' :atribut camp ha de ser true o false.',
    'confirmed'            => 'L\' :atribut de confirmació no coincideix.',
    'date'                 => 'L\' :atribut no és una data vàlida.',
    'date_format'          => 'L\' :atribut no coincideix amb el format :format.',
    'different'            => 'L\' :atribut i d\'altres han de ser diferents.',
    'digits'               => 'L\' :atribut ha de ser :dígits dígits.',
    'digits_between'       => 'L\' :atribut ha de ser entre :min i max dígits.',
    'distinct'             => 'L\' :atribut camp ha un duplicat de valor.',
    'email'                => 'L\' :atribut ha de ser una adreça de correu vàlida.',
    'exists'               => 'Seleccionats :atribut no és vàlid.',
    'filled'               => 'L\' :atribut camp és obligatori.',
    'image'                => 'L\' :atribut ha de ser una imatge.',
    'in'                   => 'Seleccionats :atribut no és vàlid.',
    'in_array'             => 'L\' :atribut camp no existeix en d\'altres.',
    'integer'              => 'L\' :atribut ha de ser un nombre enter.',
    'ip'                   => 'L\' :atribut ha de ser una adreça IP vàlida.',
    'json'                 => 'L\' :atribut ha de ser vàlid JSON cadena.',
    'max'                  => [
        'numeric' => 'L\' :atribut no pot ser superior a :max.',
        'file'    => 'L\' :atribut no pot ser superior a :max kilobytes.',
        'string'  => 'L\' :atribut no pot ser superior a :max personatges.',
        'array'   => 'L\' :atribut no pot tenir més d\' :max elements.',
    ],
    'mimes'                => 'L\' :atribut ha de ser un fitxer del tipus: :els valors.',
    'min'                  => [
        'numeric' => 'L\' :atribut ha de ser, com a mínim :min.',
        'file'    => 'L\' :atribut ha de ser, com a mínim :min kilobytes.',
        'string'  => 'L\' :atribut ha de ser, com a mínim :min personatges.',
        'array'   => 'L\' :atribut ha de tenir com a mínim :min elements.',
    ],
    'not_in'               => 'Seleccionats :atribut no és vàlid.',
    'numeric'              => 'L\' :atribut ha de ser un nombre.',
    'present'              => 'L\' :atribut camp ha de ser present.',
    'regex'                => 'L\' :atribut format no és vàlida.',
    'required'             => 'L\' :atribut camp és obligatori.',
    'required_if'          => 'L\' :atribut camp és requerit quan :altres :valor.',
    'required_unless'      => 'L\' :atribut camp és obligatori, llevat que :altres :els valors.',
    'required_with'        => 'L\' :atribut camp és requerit quan :valors és present.',
    'required_with_all'    => 'L\' :atribut camp és requerit quan :valors és present.',
    'required_without'     => 'L\' :atribut camp és requerit quan :valors no és present.',
    'required_without_all' => 'L\' :atribut camp és requerit quan cap d\' :els valors són presents.',
    'same'                 => 'L\' :atribut i d\'altres han de coincidir.',
    'size'                 => [
        'numeric' => 'L\' :atribut ha de ser :mida.',
        'file'    => 'L\' :atribut ha de ser :mida kilobytes.',
        'string'  => 'L\' :atribut ha de ser :mida personatges.',
        'array'   => 'L\' :atribut ha de contenir :la mida dels elements.',
    ],
    'string'               => 'L\' :atribut ha de ser una cadena.',
    'timezone'             => 'L\' :atribut ha de ser una zona vàlida.',
    'unique'               => 'L\' :atribut ja ha estat presa.',
    'url'                  => 'L\' :atribut format no és vàlida.',

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
            'rule-name' => 'a mida missatge',
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
