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

    
        'accepted' => 'يجب قبول :attribute.',
        'accepted_if' => 'يجب قبول :attribute عندما يكون :other :value.',
        'active_url' => ':attribute ليس رابطًا صالحًا.',
        'after' => 'يجب أن يكون :attribute تاريخًا بعد :date.',
        'after_or_equal' => 'يجب أن يكون :attribute تاريخًا مساويًا أو بعد :date.',
        'alpha' => 'يجب أن يحتوي :attribute على حروف فقط.',
        'alpha_dash' => 'يجب أن يحتوي :attribute على حروف، أرقام، شرطات وشرطات سفلية فقط.',
        'alpha_num' => 'يجب أن يحتوي :attribute على حروف وأرقام فقط.',
        'array' => 'يجب أن يكون :attribute مصفوفة.',
        'ascii' => 'يجب أن يحتوي :attribute على أحرف وأرقام ورموز ASCII فقط.',
        'before' => 'يجب أن يكون :attribute تاريخًا قبل :date.',
        'before_or_equal' => 'يجب أن يكون :attribute تاريخًا قبل أو مساويًا لـ :date.',
        'between' => [
            'array' => 'يجب أن يحتوي :attribute على عدد عناصر بين :min و :max.',
            'file' => 'يجب أن يكون حجم الملف :attribute بين :min و :max كيلوبايت.',
            'numeric' => 'يجب أن تكون قيمة :attribute بين :min و :max.',
            'string' => 'يجب أن يكون طول النص :attribute بين :min و :max حرفًا.',
        ],
        'boolean' => 'يجب أن تكون قيمة :attribute صحيحة أو خاطئة.',
        'confirmed' => 'تأكيد :attribute غير متطابق.',
        'current_password' => 'كلمة المرور غير صحيحة.',
        'date' => ':attribute ليس تاريخًا صالحًا.',
        'date_equals' => 'يجب أن يكون :attribute تاريخًا مساويًا لـ :date.',
        'date_format' => ':attribute لا يتطابق مع التنسيق :format.',
        'decimal' => 'يجب أن يحتوي :attribute على :decimal منازل عشرية.',
        'declined' => 'يجب رفض :attribute.',
        'declined_if' => 'يجب رفض :attribute عندما يكون :other :value.',
        'different' => 'يجب أن يكون :attribute و :other مختلفين.',
        'digits' => 'يجب أن يحتوي :attribute على :digits أرقام.',
        'digits_between' => 'يجب أن يكون :attribute بين :min و :max أرقام.',
        'dimensions' => ':attribute يحتوي على أبعاد صورة غير صالحة.',
        'distinct' => 'حقل :attribute يحتوي على قيمة مكررة.',
        'doesnt_end_with' => ':attribute يجب ألا ينتهي بأحد القيم التالية: :values.',
        'doesnt_start_with' => ':attribute يجب ألا يبدأ بأحد القيم التالية: :values.',
        'email' => 'يجب أن يكون :attribute بريدًا إلكترونيًا صالحًا.',
        'ends_with' => 'يجب أن ينتهي :attribute بأحد القيم التالية: :values.',
        'enum' => ':attribute المختار غير صالح.',
        'exists' => ':attribute المختار غير صالح.',
        'file' => 'يجب أن يكون :attribute ملفًا.',
        'filled' => 'حقل :attribute مطلوب.',
        'gt' => [
            'array' => 'يجب أن يحتوي :attribute على أكثر من :value عناصر.',
            'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :value كيلوبايت.',
            'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :value.',
            'string' => 'يجب أن يكون طول النص :attribute أكبر من :value حرفًا.',
        ],
        'gte' => [
            'array' => 'يجب أن يحتوي :attribute على :value عناصر أو أكثر.',
            'file' => 'يجب أن يكون حجم الملف :attribute أكبر من أو يساوي :value كيلوبايت.',
            'numeric' => 'يجب أن تكون قيمة :attribute أكبر من أو تساوي :value.',
            'string' => 'يجب أن يكون طول النص :attribute أكبر من أو يساوي :value حرفًا.',
        ],
        'image' => 'يجب أن يكون :attribute صورة.',
        'in' => ':attribute المختار غير صالح.',
        'in_array' => 'حقل :attribute غير موجود في :other.',
        'integer' => 'يجب أن يكون :attribute عددًا صحيحًا.',
        'ip' => 'يجب أن يكون :attribute عنوان IP صالحًا.',
        'ipv4' => 'يجب أن يكون :attribute عنوان IPv4 صالحًا.',
        'ipv6' => 'يجب أن يكون :attribute عنوان IPv6 صالحًا.',
        'json' => 'يجب أن يكون :attribute نصًا بصيغة JSON صالحة.',
        'lowercase' => 'يجب أن يكون :attribute مكتوبًا بحروف صغيرة.',
        'lt' => [
            'array' => 'يجب أن يحتوي :attribute على أقل من :value عناصر.',
            'file' => 'يجب أن يكون حجم الملف :attribute أقل من :value كيلوبايت.',
            'numeric' => 'يجب أن تكون قيمة :attribute أقل من :value.',
            'string' => 'يجب أن يكون طول النص :attribute أقل من :value حرفًا.',
        ],
        'lte' => [
            'array' => 'يجب ألا يحتوي :attribute على أكثر من :value عناصر.',
            'file' => 'يجب أن يكون حجم الملف :attribute أقل من أو يساوي :value كيلوبايت.',
            'numeric' => 'يجب أن تكون قيمة :attribute أقل من أو تساوي :value.',
            'string' => 'يجب أن يكون طول النص :attribute أقل من أو يساوي :value حرفًا.',
        ],
        'mac_address' => 'يجب أن يكون :attribute عنوان MAC صالحًا.',
        'max' => [
            'array' => 'يجب ألا يحتوي :attribute على أكثر من :max عناصر.',
            'file' => 'يجب ألا يكون حجم الملف :attribute أكبر من :max كيلوبايت.',
            'numeric' => 'يجب ألا تكون قيمة :attribute أكبر من :max.',
            'string' => 'يجب ألا يكون طول النص :attribute أكبر من :max حرفًا.',
        ],
        'max_digits' => 'يجب ألا يحتوي :attribute على أكثر من :max أرقام.',
        'mimes' => 'يجب أن يكون :attribute ملفًا من النوع: :values.',
        'mimetypes' => 'يجب أن يكون :attribute ملفًا من النوع: :values.',
        'min' => [
            'array' => 'يجب أن يحتوي :attribute على الأقل على :min عناصر.',
            'file' => 'يجب أن يكون حجم الملف :attribute على الأقل :min كيلوبايت.',
            'numeric' => 'يجب ألا تكون قيمة :attribute أقل من :min.',
            'string' => 'يجب ألا يكون طول النص :attribute أقل من :min حرفًا.',
        ],
        'min_digits' => 'يجب أن يحتوي :attribute على الأقل على :min أرقام.',
        'missing' => 'حقل :attribute مطلوب أن يكون مفقودًا.',
        'not_in' => ':attribute المختار غير صالح.',
        'numeric' => 'يجب أن يكون :attribute رقمًا.',
        'regex' => 'صيغة :attribute غير صالحة.',
        'required' => 'حقل :attribute مطلوب.',
        'unique' => 'قيمة :attribute مستخدمة بالفعل.',
    ];
    

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

    return [
        'custom' => [
            'اسم-الخاصية' => [
                'اسم-القانون' => 'رسالة-مخصصة',
            ],
        ],
    
    
    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];

