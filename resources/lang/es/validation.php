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

    'accepted'             => 'El :atributo debe ser aceptada.',
    'active_url'           => 'El :atributo no es una URL válida.',
    'after'                => 'El :atributo debe ser una fecha a partir de :fecha.',
    'alpha'                => 'El :atributo sólo puede contener letras.',
    'alpha_dash'           => 'El :atributo sólo puede contener letras, números y guiones.',
    'alpha_num'            => 'El :atributo sólo puede contener letras y números.',
    'array'                => 'El :atributo debe ser una matriz.',
    'before'               => 'El :atributo debe ser una fecha antes de :fecha.',
    'between'              => [
        'numeric' => 'El :atributo debe ser :entre min y max.',
        'file'    => 'El :atributo debe ser :entre min y max kilobytes.',
        'string'  => 'El :atributo debe estar entre :min y :máximo de caracteres.',
        'array'   => 'El :atributo debe tener entre :mín y máx elementos.',
    ],
    'boolean'              => 'El :campo de atributo debe ser verdadera o falsa.',
    'confirmed'            => 'El :atributo de confirmación no coinciden.',
    'date'                 => 'El :atributo no es una fecha válida.',
    'date_format'          => 'El :atributo no coincide con el formato :el formato.',
    'different'            => 'El :atributo y :los demás deben ser diferentes.',
    'digits'               => 'El :atributo debe ser :dígitos dígitos.',
    'digits_between'       => 'El :atributo debe ser :entre min y max dígitos.',
    'distinct'             => 'El :campo de atributo tiene un valor duplicado.',
    'email'                => 'El :atributo debe ser una dirección válida de correo electrónico.',
    'exists'               => 'El seleccionado :atributo no es válido.',
    'filled'               => 'El :atributo de campo es obligatorio.',
    'image'                => 'El :atributo debe ser una imagen.',
    'in'                   => 'El seleccionado :atributo no es válido.',
    'in_array'             => 'El :campo de atributo no existe en :otros.',
    'integer'              => 'El :atributo debe ser un entero.',
    'ip'                   => 'El :atributo debe ser una dirección IP válida.',
    'json'                 => 'El :atributo debe ser válido cadena JSON.',
    'max'                  => [
        'numeric' => 'El :atributo no puede ser mayor que :max.',
        'file'    => 'El :atributo no puede ser mayor que :max kilobytes.',
        'string'  => 'El :atributo no puede ser mayor que :máximo de caracteres.',
        'array'   => 'El :atributo no puede tener más de :max elementos.',
    ],
    'mimes'                => 'El :atributo debe ser un archivo de tipo: :los valores.',
    'min'                  => [
        'numeric' => 'El :atributo debe ser al menos de :min.',
        'file'    => 'El :atributo debe ser al menos de :min kilobytes.',
        'string'  => 'El :atributo debe ser al menos de :min caracteres.',
        'array'   => 'El :atributo debe tener al menos :min elementos.',
    ],
    'not_in'               => 'El seleccionado :atributo no es válido.',
    'numeric'              => 'El :atributo debe ser un número.',
    'present'              => 'El :campo de atributo debe estar presente.',
    'regex'                => 'El :formato de atributo no es válido.',
    'required'             => 'El :atributo de campo es obligatorio.',
    'required_if'          => 'El :atributo de campo es obligatorio cuando :otros :valor.',
    'required_unless'      => 'El :campo de atributo es requerido a menos que :otros :valores.',
    'required_with'        => 'El :atributo de campo es obligatorio cuando :valores está presente.',
    'required_with_all'    => 'El :atributo de campo es obligatorio cuando :valores está presente.',
    'required_without'     => 'El :atributo de campo es obligatorio cuando :los valores no está presente.',
    'required_without_all' => 'El :atributo de campo es obligatorio cuando ninguno de :los valores están presentes.',
    'same'                 => 'El :atributo y :los demás deben coincidir.',
    'size'                 => [
        'numeric' => 'El :atributo debe ser :el tamaño.',
        'file'    => 'El :atributo debe ser :el tamaño en kilobytes.',
        'string'  => 'El :atributo debe ser :el tamaño de los caracteres.',
        'array'   => 'El :atributo debe contener :tamaño de los artículos.',
    ],
    'string'               => 'El :atributo debe ser una cadena.',
    'timezone'             => 'El :atributo debe ser una zona válida.',
    'unique'               => 'El :atributo ya ha sido tomada.',
    'url'                  => 'El :formato de atributo no es válido.',

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
            'rule-name' => 'personalizado-mensaje',
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
