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

    'accepted'             => 'Những :tin rằng tôi phải được chấp nhận.',
    'active_url'           => 'Những :cho rằng là không hợp lệ địa chỉ.',
    'after'                => 'Những :thuộc tính phải là một cuộc hẹn sau :hẹn hò.',
    'alpha'                => 'Những :thuộc tính có thể chỉ chứa lá thư.',
    'alpha_dash'           => 'Những :thuộc tính có thể chỉ chứa thư, số và dashes.',
    'alpha_num'            => 'Những :thuộc tính có thể chỉ chứa những bức thư và những con số.',
    'array'                => 'Những :thuộc tính chắc là cả một mạng ăng-ten.',
    'before'               => 'Những :thuộc tính phải là một cuộc hẹn trước đây :hẹn hò.',
    'between'              => [
        'numeric' => 'Những :cho rằng phải ở đâu đó giữa :anh min và :max.',
        'file'    => 'Những :cho rằng phải ở đâu đó giữa :anh min và :max kilobytes.',
        'string'  => 'Những :cho rằng phải ở đâu đó giữa :anh min và :max vật.',
        'array'   => 'Những :cho rằng phải có giữa :anh min và :max mục.',
    ],
    'boolean'              => 'Những :cho rằng trường hẳn phải là sự thật hay giả.',
    'confirmed'            => 'Những :thuộc tính xác nhận không khớp.',
    'date'                 => 'Những :cho rằng là không hợp lệ hẹn hò.',
    'date_format'          => 'Những :thuộc tính không khớp với những dạng thức :dạng.',
    'different'            => 'Những :thuộc tính và :khác phải là khác biệt.',
    'digits'               => 'Những :thuộc tính chắc là :số chữ số.',
    'digits_between'       => 'Những :cho rằng phải ở đâu đó giữa :anh min và :max con số.',
    'distinct'             => 'Những :cho rằng trường có một bản sao có giá trị.',
    'email'                => 'Những :thuộc tính phải là một hợp lệ địa chỉ email.',
    'exists'               => 'Đã chọn :cho rằng là không hợp lệ.',
    'filled'               => 'Những :cho rằng trường cần thiết.',
    'image'                => 'Những :thuộc tính phải là một hình ảnh.',
    'in'                   => 'Đã chọn :cho rằng là không hợp lệ.',
    'in_array'             => 'Những :cho rằng trường không tồn tại trong :khác.',
    'integer'              => 'Những :thuộc tính phải là một số nguyên.',
    'ip'                   => 'Những :thuộc tính phải là một hợp lệ địa chỉ IP.',
    'json'                 => 'Những :thuộc tính phải là một hợp lệ LANGUAGE dây.',
    'max'                  => [
        'numeric' => 'Những :cho rằng có lẽ không có nhiều hơn :max.',
        'file'    => 'Những :cho rằng có lẽ không có nhiều hơn :max kilobytes.',
        'string'  => 'Những :cho rằng có lẽ không có nhiều hơn :max vật.',
        'array'   => 'Những :cho rằng có lẽ không có nhiều hơn :max mục.',
    ],
    'mimes'                => 'Những :thuộc tính phải là một tập tin kiểu: :giá trị.',
    'min'                  => [
        'numeric' => 'Những :thuộc tính phải là ít nhất :min.',
        'file'    => 'Những :cho rằng ít ra phải là :anh min kilobytes.',
        'string'  => 'Những :cho rằng ít ra phải là :anh min vật.',
        'array'   => 'Những :tin rằng cần phải có ít nhất :anh min mục.',
    ],
    'not_in'               => 'Đã chọn :cho rằng là không hợp lệ.',
    'numeric'              => 'Những :thuộc tính phải là một con số.',
    'present'              => 'Những :cho rằng trường phải có mặt.',
    'regex'                => 'Những :thuộc tính, dạng là không hợp lệ.',
    'required'             => 'Những :cho rằng trường cần thiết.',
    'required_if'          => 'Những :cho rằng trường cần thiết khi :khác là :giá trị.',
    'required_unless'      => 'Những :cho rằng trường cần thiết trừ khi :khác là :giá trị.',
    'required_with'        => 'Những :cho rằng trường cần thiết khi :giá trị là món quà.',
    'required_with_all'    => 'Những :cho rằng trường cần thiết khi :giá trị là món quà.',
    'required_without'     => 'Những :cho rằng trường cần thiết khi :giá trị không phải là món quà.',
    'required_without_all' => 'Những :cho rằng trường cần thiết khi không :giá trị là món quà.',
    'same'                 => 'Những :thuộc tính và :khác phải thật hoàn hảo.',
    'size'                 => [
        'numeric' => 'Những :thuộc tính chắc là :cỡ.',
        'file'    => 'Những :thuộc tính chắc là :cỡ kilobytes.',
        'string'  => 'Những :thuộc tính chắc là :kích cỡ bình thường.',
        'array'   => 'Những :thuộc tính phải chứa :cỡ mục.',
    ],
    'string'               => 'Những :thuộc tính phải là một chuỗi.',
    'timezone'             => 'Những :thuộc tính phải là một chuỗi sự.',
    'unique'               => 'Những :cho rằng đã bị bắt rồi.',
    'url'                  => 'Những :thuộc tính, dạng là không hợp lệ.',

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
            'rule-name' => 'đặt lời nhắn',
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
