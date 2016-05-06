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

    'accepted'             => ':Niteliği kabul edilmelidir.',
    'active_url'           => ':Özniteliği geçerli bir URL değil.',
    'after'                => ':Niteliği tarihinden sonraki bir tarih olması gerekir.',
    'alpha'                => 'Bu nitelik sadece harf içerebilir.',
    'alpha_dash'           => 'Bu öznitelik yalnızca harf, sayı ve tire içerebilir.',
    'alpha_num'            => 'Bu öznitelik yalnızca harf ve sayı içerebilir.',
    'array'                => 'Bu öznitelik bir dizi olmalıdır.',
    'before'               => ':Öznitelik önce bir randevu olmalıdır.',
    'between'              => [
        'numeric' => ':Nitelik :min ile :max arasında olmalıdır.',
        'file'    => ':Nitelik :min ve max kilobayt arasında olmalıdır.',
        'string'  => ':Nitelik :min ve max karakter arasında olmalıdır.',
        'array'   => ':Nitelik arasında :min ve max öğeleri olmalıdır.',
    ],
    'boolean'              => ':Öznitelik alanına doğru veya yanlış olması gerekir.',
    'confirmed'            => ':Öznitelik onay eşleşmiyor.',
    'date'                 => ':Özniteliği geçerli bir tarih değil.',
    'date_format'          => ':Öznitelik biçimi :biçim eşleşmiyor.',
    'different'            => ':Niteliği ve diğer farklı olmalıdır.',
    'digits'               => ':Niteliği basamak basamak olmalı.',
    'digits_between'       => ':Nitelik arasında olmalıdır :min ve max rakam.',
    'distinct'             => ':Öznitelik alanı yinelenen bir değeri vardır.',
    'email'                => 'Bu özniteliği geçerli bir e-posta adresi olmalıdır.',
    'exists'               => 'Seçilen özniteliği geçersiz.',
    'filled'               => ':Öznitelik alanı gereklidir.',
    'image'                => 'Bu öznitelik bir görüntü olmalı.',
    'in'                   => 'Seçilen özniteliği geçersiz.',
    'in_array'             => ':Öznitelik alan diğer mevcut değildir.',
    'integer'              => 'Bu özniteliği bir tamsayı olmalıdır.',
    'ip'                   => 'Bu özniteliği geçerli bir IP adresi olmalıdır.',
    'json'                 => 'Bu özniteliği geçerli bir JSON dize olması gerekir.',
    'max'                  => [
        'numeric' => ':Niteliği daha :max greater olmayabilir.',
        'file'    => ':Nitelik :max kilobayt daha büyük olabilir.',
        'string'  => ':Nitelik :max karakterden daha büyük olabilir.',
        'array'   => ':Niteliği daha :max öğeleri olabilir.',
    ],
    'mimes'                => ':Nitelik tür: değerlerin bir dosya olmalı.',
    'min'                  => [
        'numeric' => ':Niteliği dakika en az olmalıdır.',
        'file'    => ':Niteliği en azından :dk kilobayt olması gerekir.',
        'string'  => ':Niteliği en azından :min karakter olmalıdır.',
        'array'   => ':Niteliği en azından :dk öğeleri olmalıdır.',
    ],
    'not_in'               => 'Seçilen özniteliği geçersiz.',
    'numeric'              => 'Bu öznitelik bir sayı olmalıdır.',
    'present'              => ':Öznitelik alanının bulunması gerekir.',
    'regex'                => ':Öznitelik biçimi geçersiz.',
    'required'             => ':Öznitelik alanı gereklidir.',
    'required_if'          => ':Niteliği alanı değeri:: diğer gereklidir.',
    'required_unless'      => ':Öznitelik alanının diğer değerleri :sürece :gereklidir.',
    'required_with'        => ':Öznitelik alan değerler mevcut olduğunda :gereklidir.',
    'required_with_all'    => ':Öznitelik alan değerler mevcut olduğunda :gereklidir.',
    'required_without'     => ':Öznitelik alan değerleri olmadığında :gereklidir.',
    'required_without_all' => ':Öznitelik alanı hiçbiri gereklidir :değerler var.',
    'same'                 => ':Niteliği ve :other aynı olmalıdır.',
    'size'                 => [
        'numeric' => ':Öznitelik boyutu olmalıdır.',
        'file'    => ':Öznitelik boyutu kilobayt olması gerekir.',
        'string'  => ':Niteliği boyutta karakter olmalıdır.',
        'array'   => ':Öznitelik boyutu öğeleri içerir :gerekir.',
    ],
    'string'               => 'Bu öznitelik bir dize olması gerekir.',
    'timezone'             => 'Bu özniteliği geçerli bir alan olmalı.',
    'unique'               => ':Öznitelik zaten alınmıştır.',
    'url'                  => ':Öznitelik biçimi geçersiz.',

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
            'rule-name' => 'özel mesaj',
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
