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

    'accepted'             => ':سمة يجب أن تكون مقبولة.',
    'active_url'           => ':السمة ليست URL صالح.',
    'after'                => ':سمة يجب أن يكون موعد بعد :تاريخ.',
    'alpha'                => ':السمة قد تحتوي فقط على الحروف.',
    'alpha_dash'           => ':السمة قد تحتوي فقط على حروف وأرقام ، وشرطات.',
    'alpha_num'            => ':السمة قد تحتوي فقط على حروف وأرقام.',
    'array'                => ':سمة يجب أن يكون صفيف.',
    'before'               => ':سمة يجب أن يكون تاريخ قبل التاريخ.',
    'between'              => [
        'numeric' => ':سمة يجب أن يكون بين :مين :ماكس.',
        'file'    => ':سمة يجب أن يكون بين :مين :ماكس كيلو بايت.',
        'string'  => ':سمة يجب أن يكون بين :مين :ماكس الشخصيات.',
        'array'   => ':سمة يجب أن يكون بين :مين :ماكس البنود.',
    ],
    'boolean'              => ':السمة المجال يجب أن تكون صحيحة أو خاطئة.',
    'confirmed'            => ':السمة تأكيد لا تتطابق.',
    'date'                 => ':السمة ليست تاريخ صالح.',
    'date_format'          => ':السمة لا يطابق الشكل :الشكل.',
    'different'            => ':سمة :أخرى يجب أن تكون مختلفة.',
    'digits'               => ':سمة يجب أن يكون :أرقام أرقام.',
    'digits_between'       => ':سمة يجب أن يكون بين :مين :ماكس أرقام.',
    'distinct'             => ':السمة حقل يحتوي على قيمة مكررة.',
    'email'                => ':سمة يجب أن يكون عنوان بريد إلكتروني صالح.',
    'exists'               => 'المختارة :سمة غير صالحة.',
    'filled'               => ':السمة الحقل مطلوب.',
    'image'                => ':سمة يجب أن تكون صورة.',
    'in'                   => 'المختارة :سمة غير صالحة.',
    'in_array'             => ':حقل السمة لا توجد في غيرها.',
    'integer'              => ':سمة يجب أن يكون عدد صحيح.',
    'ip'                   => ':سمة يجب أن يكون عنوان IP صالح.',
    'json'                 => ':سمة يجب أن تكون صالحة سلسلة JSON.',
    'max'                  => [
        'numeric' => ':سمة قد لا تكون أكبر من :ماكس.',
        'file'    => ':سمة قد لا تكون أكبر من :ماكس كيلو بايت.',
        'string'  => ':سمة قد لا تكون أكبر من :ماكس الشخصيات.',
        'array'   => ':سمة قد لا يكون أكثر من :ماكس البنود.',
    ],
    'mimes'                => ':سمة يجب أن يكون الملف من نوع: :القيم.',
    'min'                  => [
        'numeric' => ':سمة يجب أن يكون على الأقل :دقيقة.',
        'file'    => ':سمة يجب أن يكون على الأقل :مين كيلو بايت.',
        'string'  => ':سمة يجب أن يكون على الأقل :مين الشخصيات.',
        'array'   => ':سمة يجب أن يكون على الأقل :مين البنود.',
    ],
    'not_in'               => 'المختارة :سمة غير صالحة.',
    'numeric'              => ':سمة يجب أن يكون عددا.',
    'present'              => ':السمة المجال يجب أن تكون موجودة.',
    'regex'                => ':السمة تنسيق غير صالح.',
    'required'             => ':السمة الحقل مطلوب.',
    'required_if'          => ':السمة الحقل مطلوب عند البعض هو :قيمة.',
    'required_unless'      => ':السمة الحقل مطلوب إلا إذا :هو :القيم.',
    'required_with'        => ':السمة الحقل مطلوب عندما :القيم الحالية.',
    'required_with_all'    => ':السمة الحقل مطلوب عندما :القيم الحالية.',
    'required_without'     => ':السمة الحقل مطلوب عندما :القيم غير موجودة.',
    'required_without_all' => ':السمة الحقل مطلوب عندما أيا من :القيم الحالية.',
    'same'                 => ':سمة :أخرى يجب أن تتطابق.',
    'size'                 => [
        'numeric' => ':سمة يجب أن يكون :حجم.',
        'file'    => ':سمة يجب أن يكون :حجم كيلو بايت.',
        'string'  => ':سمة يجب أن يكون :حجم الأحرف.',
        'array'   => ':سمة يجب أن تحتوي على :حجم العناصر.',
    ],
    'string'               => ':سمة يجب أن تكون سلسلة.',
    'timezone'             => ':سمة يجب أن تكون صالحة المنطقة.',
    'unique'               => ':السمة اتخذت بالفعل.',
    'url'                  => ':السمة تنسيق غير صالح.',

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
            'rule-name' => 'مخصص-رسالة',
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