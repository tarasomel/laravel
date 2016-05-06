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

    'accepted'             => ':특성을 허용하셔야 합니다.',
    'active_url'           => ':특성이 유효한 URL 니다.',
    'after'                => ':특성이어야 합 날짜:date 니다.',
    'alpha'                => ':특성을 포함할 수 있습니다.',
    'alpha_dash'           => ':특성을 포함할 수 있습니다 문자,숫자,그리고 대시니다.',
    'alpha_num'            => ':특성을 포함할 수 있습니다 문자와 숫자니다.',
    'array'                => ':특성을 배열이어야 합니다.',
    'before'               => ':특성이 있어야 하 날짜기:date 니다.',
    'between'              => [
        'numeric' => ':특성을 사이에 있어야 합:min:max.',
        'file'    => ':특성을 사이에 있어야 합:min:max kb 니다.',
        'string'  => ':특성을 사이에 있어야 합:min:max.',
        'array'   => ':속성이 있어야 사이:min:max.',
    ],
    'boolean'              => ':특성 분야 합 참 또는 거짓입니다.',
    'confirmed'            => ':특성을 확인과 일치하지 않습니다.',
    'date'                 => ':특성은 유효한 날짜.',
    'date_format'          => ':속성과 일치하지 않은 형식으로 포맷입니다.',
    'different'            => ':특성 및:기타야 합니다.',
    'digits'               => ':특성해야합니다:자리의 숫자입니다.',
    'digits_between'       => ':특성을 사이에 있어야 합:min 고:최대 자리입니다.',
    'distinct'             => ':특정 필드에는 값이 중복합니다.',
    'email'                => ':특성이 있어야 하는 유효한 전자 메일 주소입니다.',
    'exists'               => '선택한:특성이 잘못되었습니다.',
    'filled'               => '합성 필드가 필요합니다.',
    'image'                => ':특성을 해야 합니다.',
    'in'                   => '선택한:특성이 잘못되었습니다.',
    'in_array'             => ':특성 분야에 존재하지 않:니다.',
    'integer'              => ':특성을 정수여야 합니다.',
    'ip'                   => ':특성이 있어야 하는 유효한 IP 주소입니다.',
    'json'                 => ':특성이어야 합니다 JSON 문자열입니다.',
    'max'                  => [
        'numeric' => ':특성할 수 있을 초과할 수 없습니다:max.',
        'file'    => ':특성할 수 있을 초과할 수 없습니다:최대 kb 니다.',
        'string'  => ':특성할 수 있을 초과할 수 없습니다:max.',
        'array'   => ':특성을 가질 수 없는 것보다 더 많은:max.',
    ],
    'mimes'                => ':특성이 있어야 하는 파일의 종류::값이 있습니다.',
    'min'                  => [
        'numeric' => ':특성해야합니다 적어도:min.',
        'file'    => ':특성해야합니다 적어도:min kb 니다.',
        'string'  => ':특성해야합니다 적어도:min.',
        'array'   => ':속성이 있어야에서는 적어도:min.',
    ],
    'not_in'               => '선택한:특성이 잘못되었습니다.',
    'numeric'              => ':특성을 해야 합니다.',
    'present'              => ':속성 필드 표시해야 합니다.',
    'regex'                => ':특성 형식이 잘못되었습니다.',
    'required'             => '합성 필드가 필요합니다.',
    'required_if'          => ':특성 분야는 필요한 경우:기타:값입니다.',
    'required_unless'      => '합성 필드는 필요하지 않습니다.에서 다른 값입니다.',
    'required_with'        => ':특성 분야는 필요한 경우:값이 존재합니다.',
    'required_with_all'    => ':특성 분야는 필요한 경우:값이 존재합니다.',
    'required_without'     => ':특성 분야는 필요한 경우:값은 존재하지 않습니다.',
    'required_without_all' => '합성 필드가 필요 없을 때의 값이 존재한다.',
    'same'                 => ':특성 및:다른 일치해야 합니다.',
    'size'                 => [
        'numeric' => ':특성해야합니다:크기입니다.',
        'file'    => ':특성해야합니다:크기 kb 니다.',
        'string'  => ':특성해야합니다:문자 크기입니다.',
        'array'   => ':특성에는 다음이 포함되어야 합니다.니다.',
    ],
    'string'               => ':특성 문자열이어야 합니다.',
    'timezone'             => ':특성이어야 합니다.',
    'unique'               => ':특성이 있습니다.',
    'url'                  => ':특성 형식이 잘못되었습니다.',

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
            'rule-name' => '사용자 정의 메시지',
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
