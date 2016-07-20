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

    'accepted'             => 'В :атрибут должен быть принят.',
    'active_url'           => 'В :атрибут-это не действительный URL-адрес.',
    'after'                => 'В :атрибут должен быть после даты :Дата.',
    'alpha'                => 'В :атрибут может содержать только буквы.',
    'alpha_dash'           => 'В :атрибут может содержать только буквы, цифры и тире.',
    'alpha_num'            => 'В :атрибут может содержать только буквы и цифры.',
    'array'                => 'В :атрибут должен быть массивом.',
    'before'               => 'В :атрибут должен быть позже даты :Дата.',
    'between'              => [
        'numeric' => 'В :атрибут должен быть между мин и Макс.',
        'file'    => 'В :атрибут должен быть между :мин :макс килобайт.',
        'string'  => 'В :атрибут должен быть между :мин :макс. число символов.',
        'array'   => 'В :атрибут должен иметь между :мин :макс элементов.',
    ],
    'boolean'              => 'В поле атрибут должен иметь значение True или false.',
    'confirmed'            => 'В :подтверждение атрибута не совпадает.',
    'date'                 => 'В :атрибут не является допустимой датой.',
    'date_format'          => 'В :атрибут не соответствует формату :Формат.',
    'different'            => 'В :атрибут и :других должно быть иначе.',
    'digits'               => 'В :атрибут должен быть :цифры цифры.',
    'digits_between'       => 'В :атрибут должен быть между :мин :макс цифр.',
    'distinct'             => 'В поле атрибута имеет повторяющиеся значения.',
    'email'                => 'В :атрибут должен быть действительный адрес электронной почты.',
    'exists'               => 'Некоторые :атрибут является недействительным.',
    'filled'               => 'Требуется :поле атрибута.',
    'image'                => 'В :атрибут должен быть образ.',
    'in'                   => 'Некоторые :атрибут является недействительным.',
    'in_array'             => 'В поле атрибута не существует :другие.',
    'integer'              => 'В :атрибут должен быть целым числом.',
    'ip'                   => 'В :атрибут должен быть действительный IP-адрес.',
    'json'                 => 'В :атрибут должен быть допустимым json-строку.',
    'max'                  => [
        'numeric' => 'В :атрибут не может быть больше, чем :Макс.',
        'file'    => 'В :атрибут не может быть больше, чем :максимум килобайт.',
        'string'  => 'В :атрибут не может быть больше, чем :максимум персонажей.',
        'array'   => 'В :атрибут не может иметь более чем :максимум предметов.',
    ],
    'mimes'                => 'В :атрибут должен быть файл типа: :ценностей.',
    'min'                  => [
        'numeric' => 'В :атрибут должен быть не менее :мин.',
        'file'    => 'В :атрибут должен быть не менее :мин. килобайт.',
        'string'  => 'В :атрибут должен быть не менее :min характеры.',
        'array'   => 'В :атрибут должен иметь как минимум :минимум предметов.',
    ],
    'not_in'               => 'Некоторые :атрибут является недействительным.',
    'numeric'              => 'В :атрибут должен быть рядом.',
    'present'              => 'В поле атрибут должен присутствовать.',
    'regex'                => 'В :формат атрибут является недействительным.',
    'required'             => 'Требуется :поле атрибута.',
    'required_if'          => 'В поле атрибут является обязательным, если :другое :значение.',
    'required_unless'      => 'В поле атрибут является обязательным, если :другие в значения.',
    'required_with'        => 'В поле атрибут является обязательным, если :значения присутствует.',
    'required_with_all'    => 'В поле атрибут является обязательным, если :значения присутствует.',
    'required_without'     => 'В поле атрибут является обязательным, если :значения нет.',
    'required_without_all' => 'В поле атрибут является обязательным, если ни один из :значения присутствуют.',
    'same'                 => 'В :атрибут и :других должно совпадать.',
    'size'                 => [
        'numeric' => 'В :атрибут должен быть :Размер.',
        'file'    => 'В :атрибут должен быть :Размер килобайт.',
        'string'  => 'В :атрибут должен быть :размером символов.',
        'array'   => 'В :атрибут должен содержать :Размер элементов.',
    ],
    'string'               => 'В :атрибут должен быть строкой.',
    'timezone'             => 'В :атрибут должен быть в допустимой зоне.',
    'unique'               => 'В :атрибут уже принято.',
    'url'                  => 'В :формат атрибут является недействительным.',

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
            'rule-name' => 'на заказ сообщение',
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