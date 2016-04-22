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

    'accepted'             => 'L\' :attribut doit être accepté.',
    'active_url'           => 'L\' :l\'attribut n\'est pas une URL valide.',
    'after'                => 'L\' :attribut doit être une date après :date.',
    'alpha'                => 'L\' :attribut ne peut contenir que des lettres.',
    'alpha_dash'           => 'L\' :attribut ne peut contenir que des lettres, des chiffres et des tirets.',
    'alpha_num'            => 'L\' :attribut ne peut contenir que des lettres et des chiffres.',
    'array'                => 'L\' :attribut doit être un tableau.',
    'before'               => 'L\' :attribut doit être une date avant le :date.',
    'between'              => [
        'numeric' => 'L\' :attribut doit être comprise entre :min et max.',
        'file'    => 'L\' :attribut doit être comprise entre :min et max kilo-octets.',
        'string'  => 'L\' :attribut doit être comprise entre :min et max des personnages.',
        'array'   => 'L\' :attribut doit avoir entre :min et max des éléments.',
    ],
    'boolean'              => 'L\' :champ d\'attribut doit être vrai ou faux.',
    'confirmed'            => 'L\' :attribut de confirmation ne correspond pas.',
    'date'                 => 'L\' :l\'attribut n\'est pas une date valide.',
    'date_format'          => 'L\' :attribut ne correspond pas au format :format.',
    'different'            => 'L\' :attribut et les autres doivent être différentes.',
    'digits'               => 'L\' :attribut doit être :chiffres chiffres.',
    'digits_between'       => 'L\' :attribut doit être comprise entre :min et max des chiffres.',
    'distinct'             => 'L\' :champ d\'attribut a une valeur en double.',
    'email'                => 'L\' :attribut doit être une adresse email valide.',
    'exists'               => 'Les sélectionnés :attribut n\'est pas valide.',
    'filled'               => 'L\' :champ d\'attribut est requis.',
    'image'                => 'L\' :attribut doit être une image.',
    'in'                   => 'Les sélectionnés :attribut n\'est pas valide.',
    'in_array'             => 'L\' :champ d\'attribut n\'existe pas dans :autres.',
    'integer'              => 'L\' :attribut doit être un entier.',
    'ip'                   => 'L\' :attribut doit être une adresse IP valide.',
    'json'                 => 'L\' :attribut doit être une chaîne JSON valide.',
    'max'                  => [
        'numeric' => 'L\' :l\'attribut ne peut pas être supérieure à :max.',
        'file'    => 'L\' :l\'attribut ne peut pas être supérieure à :max kilo-octets.',
        'string'  => 'L\' :l\'attribut ne peut pas être supérieure à :max caractères.',
        'array'   => 'L\' :l\'attribut ne peut pas avoir plus de :max d\'articles.',
    ],
    'mimes'                => 'L\' :attribut doit être un fichier de type: :les valeurs.',
    'min'                  => [
        'numeric' => 'L\' :attribut doit être d\'au moins :min.',
        'file'    => 'L\' :attribut doit être d\'au moins :min kilo-octets.',
        'string'  => 'L\' :attribut doit être d\'au moins :min caractères.',
        'array'   => 'L\' :attribut doit avoir au moins :min des éléments.',
    ],
    'not_in'               => 'Les sélectionnés :attribut n\'est pas valide.',
    'numeric'              => 'L\' :attribut doit être un nombre.',
    'present'              => 'L\' :champ d\'attribut doit être présent.',
    'regex'                => 'L\' :l\'attribut format n\'est pas valide.',
    'required'             => 'L\' :champ d\'attribut est requis.',
    'required_if'          => 'L\' :champ d\'attribut est requis lorsque :autre est la suivante :de valeur.',
    'required_unless'      => 'L\' :champ d\'attribut est requis, sauf si :autre :les valeurs.',
    'required_with'        => 'L\' :champ d\'attribut est requis lorsque :valeurs est présent.',
    'required_with_all'    => 'L\' :champ d\'attribut est requis lorsque :valeurs est présent.',
    'required_without'     => 'L\' :champ d\'attribut est requis lorsque :valeurs n\'est pas présent.',
    'required_without_all' => 'L\' :champ d\'attribut est requis lorsque aucun :les valeurs sont présents.',
    'same'                 => 'L\' :attribut et les autres doivent correspondre.',
    'size'                 => [
        'numeric' => 'L\' :attribut doit être :de la taille.',
        'file'    => 'L\' :attribut doit être :taille de kilo-octets.',
        'string'  => 'L\' :attribut doit être :la taille des caractères.',
        'array'   => 'L\' :attribut doit contenir :la taille des éléments.',
    ],
    'string'               => 'L\' :attribut doit être une chaîne de caractères.',
    'timezone'             => 'L\' :attribut doit être une zone valide.',
    'unique'               => 'L\' :attribut a déjà été prises.',
    'url'                  => 'L\' :l\'attribut format n\'est pas valide.',

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
            'rule-name' => 'personnalisé-message',
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
