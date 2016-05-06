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

    'accepted'             => 'את :attribute חייב להיות מקובל.',
    'active_url'           => 'את :תכונה זו לא כתובת אתר חוקית.',
    'after'                => 'את :attribute חייב להיות דייט אחרי :תאריך.',
    'alpha'                => 'את :מאפיין יכול להכיל רק אותיות.',
    'alpha_dash'           => 'את :מאפיין יכול להכיל רק אותיות, מספרים ומקפים.',
    'alpha_num'            => 'את :מאפיין יכול להכיל רק אותיות ומספרים.',
    'array'                => 'את :attribute חייב להיות מערך.',
    'before'               => 'את :attribute חייב להיות תאריך קודם :תאריך.',
    'between'              => [
        'numeric' => 'את :attribute חייב להיות בין :min ו max.',
        'file'    => 'את :attribute חייב להיות בין :מין :מקס קילו-בתים.',
        'string'  => 'את :attribute חייב להיות בין :מין :מקס תווים.',
        'array'   => 'את :attribute חייב להיות בין :מין :מקס פריטים.',
    ],
    'boolean'              => 'את :תכונה שדה חייב להיות אמיתי או שקרי.',
    'confirmed'            => 'את :תכונה אישור לא מתאים.',
    'date'                 => 'את :התכונה אינה תקפה תאריך.',
    'date_format'          => 'את :תכונה אינו תואם את פורמט :פורמט.',
    'different'            => 'את :ובממשקי :השני חייב להיות שונה.',
    'digits'               => 'את :attribute חייב להיות :ספרות ספרות.',
    'digits_between'       => 'את :attribute חייב להיות בין :מין :מקס ספרות.',
    'distinct'             => 'את :תכונה יש תחום העתק ערך.',
    'email'                => 'את :attribute חייב להיות כתובת דוא " ל חוקית.',
    'exists'               => 'הנבחרת :מאפיין זה אינו תקף.',
    'filled'               => 'את :מאפיין השדה נדרש.',
    'image'                => 'את :attribute חייב להיות תמונה.',
    'in'                   => 'הנבחרת :מאפיין זה אינו תקף.',
    'in_array'             => 'את :תכונה שדה-לא קיים :אחרים.',
    'integer'              => 'את :attribute חייב להיות מספר שלם.',
    'ip'                   => 'את :attribute חייב להיות כתובת IP חוקית.',
    'json'                 => 'את :attribute חייב להיות בתוקף מחרוזת JSON.',
    'max'                  => [
        'numeric' => 'את :תכונה לא יכול להיות גדול מ :מקס.',
        'file'    => 'את :תכונה לא יכול להיות גדול מ :מקס קילו-בתים.',
        'string'  => 'את :תכונה לא יכול להיות גדול מ :מקס תווים.',
        'array'   => 'את :התכונה אולי לא צריך יותר מ :מקס פריטים.',
    ],
    'mimes'                => 'את :attribute חייב להיות קובץ מסוג: :ערכים.',
    'min'                  => [
        'numeric' => 'את :attribute חייב להיות לפחות :דקות.',
        'file'    => 'את :attribute חייב להיות לפחות :מין קילו-בתים.',
        'string'  => 'את :attribute חייב להיות לפחות :מין הדמויות.',
        'array'   => 'את :attribute חייב להיות לפחות :מין פריטים.',
    ],
    'not_in'               => 'הנבחרת :מאפיין זה אינו תקף.',
    'numeric'              => 'את :attribute חייב להיות מספר.',
    'present'              => 'את :תכונה שדה חייב להיות נוכח.',
    'regex'                => 'את :מאפיין פורמט לא חוקי.',
    'required'             => 'את :מאפיין השדה נדרש.',
    'required_if'          => 'את :מאפיין השדה נדרש כאשר :אחרים :ערך.',
    'required_unless'      => 'את :מאפיין השדה נדרש, אלא אם כן :השניה היא :ערכים.',
    'required_with'        => 'את :מאפיין השדה נדרש כאשר :הערכים קיים.',
    'required_with_all'    => 'את :מאפיין השדה נדרש כאשר :הערכים קיים.',
    'required_without'     => 'את :מאפיין השדה נדרש כאשר :הערכים, הוא לא נוכח.',
    'required_without_all' => 'את :מאפיין השדה נדרש כאשר אף אחד :ערכים קיימים.',
    'same'                 => 'את :ובממשקי :השני חייב להתאים.',
    'size'                 => [
        'numeric' => 'את :attribute חייב להיות :גודל.',
        'file'    => 'את :attribute חייב להיות :גודל קילו-בתים.',
        'string'  => 'את :attribute חייב להיות :גודל הדמויות.',
        'array'   => 'את :attribute חייב להכיל :גודל הפריטים.',
    ],
    'string'               => 'את :attribute חייב להיות מחרוזת.',
    'timezone'             => 'את :attribute חייב להיות תקף לאזור.',
    'unique'               => 'את :התכונה כבר תפוסה.',
    'url'                  => 'את :מאפיין פורמט לא חוקי.',

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
            'rule-name' => 'מותאם אישית-הודעה',
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
