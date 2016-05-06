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

    'accepted'             => 'A :atributo deve ser aceito.',
    'active_url'           => 'O atributo não é uma URL válida.',
    'after'                => 'A :atributo deve ser uma data após a data.',
    'alpha'                => 'A :atributo pode conter só letras.',
    'alpha_dash'           => 'A :atributo só pode conter letras, números e hífens.',
    'alpha_num'            => 'A :atributo pode conter só letras e números.',
    'array'                => 'A :atributo deve ser um array.',
    'before'               => 'A :atributo deve ser uma data antes da data.',
    'between'              => [
        'numeric' => 'A :atributo deve ser entre :min :max.',
        'file'    => 'A :atributo deve ser entre :min :max kilobytes.',
        'string'  => 'A :atributo deve ser entre :min :max caracteres.',
        'array'   => 'O atributo deve ter entre :min :max itens.',
    ],
    'boolean'              => 'A :campo de atributo deve ser true ou false.',
    'confirmed'            => 'A :atributo de confirmação não correspondem.',
    'date'                 => 'O atributo não é uma data válida.',
    'date_format'          => 'A :atributo não corresponder ao formato :formato.',
    'different'            => 'A :atributo e :outros devem ser diferentes.',
    'digits'               => 'A :atributo deve ser :dígitos dígitos.',
    'digits_between'       => 'A :atributo deve ser entre :min :max dígitos.',
    'distinct'             => 'A :campo de atributo tem um valor duplicado.',
    'email'                => 'A :atributo deve ser um endereço de email válido.',
    'exists'               => 'O selecionado :o atributo é inválido.',
    'filled'               => 'O atributo do campo é obrigatório.',
    'image'                => 'A :atributo deve ser uma imagem.',
    'in'                   => 'O selecionado :o atributo é inválido.',
    'in_array'             => 'A :campo de atributo não existir em :outros.',
    'integer'              => 'A :atributo deve ser um número inteiro.',
    'ip'                   => 'A :atributo deve ser um endereço IP válido.',
    'json'                 => 'A :atributo deve ser um válido string JSON.',
    'max'                  => [
        'numeric' => 'A :atributo não pode ser superior a :máx.',
        'file'    => 'A :atributo não pode ser maior que :máximo de kilobytes.',
        'string'  => 'A :atributo não pode ser superior a :max caracteres.',
        'array'   => 'A :atributo não pode ter mais do que :max itens.',
    ],
    'mimes'                => 'A :atributo deve ser um arquivo do tipo: valores.',
    'min'                  => [
        'numeric' => 'A :atributo deve ser de pelo menos :min.',
        'file'    => 'A :atributo deve ser de pelo menos :min kilobytes.',
        'string'  => 'A :atributo deve ser de pelo menos :min caracteres.',
        'array'   => 'O atributo deve ter pelo menos :min itens.',
    ],
    'not_in'               => 'O selecionado :o atributo é inválido.',
    'numeric'              => 'A :atributo deve ser um número.',
    'present'              => 'O atributo do campo deve estar presente.',
    'regex'                => 'A :atributo formato é inválido.',
    'required'             => 'O atributo do campo é obrigatório.',
    'required_if'          => 'A :campo de atributo é obrigatório quando :segunda :do valor.',
    'required_unless'      => 'O atributo do campo é necessária, a menos que :outros :valores.',
    'required_with'        => 'A :campo de atributo é obrigatório quando :valores está presente.',
    'required_with_all'    => 'A :campo de atributo é obrigatório quando :valores está presente.',
    'required_without'     => 'A :campo de atributo é obrigatório quando :valores não está presente.',
    'required_without_all' => 'A :campo de atributo é obrigatório quando nenhum :os valores estão presentes.',
    'same'                 => 'A :atributo e :o outro tem de corresponder.',
    'size'                 => [
        'numeric' => 'A :atributo deve ser :tamanho.',
        'file'    => 'A :atributo deve ser :tamanho kilobytes.',
        'string'  => 'A :atributo deve ser :caracteres de tamanho.',
        'array'   => 'A :atributo deve conter :itens de tamanho.',
    ],
    'string'               => 'A :atributo deve ser uma seqüência de caracteres.',
    'timezone'             => 'A :atributo deve ser uma zona válida.',
    'unique'               => 'A :atributo já foi tomada.',
    'url'                  => 'A :atributo formato é inválido.',

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
            'rule-name' => 'personalizado-mensagem',
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
