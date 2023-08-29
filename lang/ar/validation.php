<?php

return [
    'first_name-required'=>'الاسم الاول مطلوب',
    'last_name-required'=>'الاسم الاخير مطلوب',
    'name-min'=>'يجب ان يكون الاسم 3 احرف على الاقل',
    'name-required' => 'الاسم مطلوب',
    'phone-required'=>'رقم الجوال مطلوب',
    'phone-unique'=>'رقم الهاتف مستخدم من قبل',
    'phone-invalid' =>'رقم الهاتف غير صحيح',
    'email-unique'=>'البريد الإلكترونى مستخدم من قبل',
    'phone-min' => 'أقل عدد لأرقام الهاتف 9 ارقام',
    "code-required" => "رمز التحقق مطلوب",
    "code-integer" => "يجب أن يكون رمز التحقق رقم صحيح",
    "verification-code-length" => "يجب أن يكون طول رمز التحقق مساويًا لـ 4 أرقام",
    'country_id-required'=>'الدولة مطلوبة',
    'area_id-required'=> 'المنطقة مطلوبة',
    'city_id-required'=> 'المدينة مطلوبة',
    'international_city-required' => 'المدينة مطلوبة',
    'category-required' => 'التصنيف مطلوب',
    'title-min' => 'العنوان يجب ان يكون اكثر من 3 أحرف',
    'invalid_type' => 'خطا فى نوع الشكوى',
    'title-required' => 'العنوان مطلوب',
    'description-required'=> 'الوصف مطلوب',
    'type-required'=> 'النوع مطلوب',
    'product-required' => 'لم يتم تحديد منتج',
    'quantity-required' => 'الكمية مطلوبة',
    'rate-required' => 'التقييم مطلوب',
    'comment-required' => 'الكومنت مطلوب',
    'some_field_missing' => 'بعض الحقول مطلوبة',
    'extra-size-file' => 'حجم الملف يجب ان يكون اقل من 25 ميجا بايت',
    'phone-not-valid' =>'رقم الهاتف غير صحيح',
    'wrong_password' =>'كلمة السر غير صحيحة',


    /*
    |--------------------------------------------------------------------------
    | Original Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Original Phrases in laravel
    |
    */
    'accepted' => 'يجب قبول السمة.',
    'active_url' => ': السمة ليست عنوان URL صالحًا.',
    // 'after' => 'يجب أن يكون :attribute تاريخًا بعد :date.',
    'after' => 'يجب أن يكون :attribute تاريخًا صحيحا.',
    'after_or_equal' => 'يجب أن يكون :attribute تاريخًا بعد أو يساوي :date.',
    'alpha' => 'قد يحتوي :attribute على أحرف فقط.',
    'alpha_dash' => 'لا يجوز أن تحتوي :attribute إلا على أحرف وأرقام وشرطات وشرطات سفلية.',
    'alpha_num' => 'لا يجوز أن يحتوي :attribute إلا على أحرف وأرقام.',
    'array' => 'يجب أن يكون :attribute مصفوفة.',
    'before' => 'يجب أن يكون :attribute تاريخًا قبل :date.',
    'before_or_equal' => 'يجب أن يكون :attribute تاريخًا يسبق أو يساوي :date.',
    "between" => [
        'numeric' => 'يجب أن يكون :attribute بين: min و: max.',
        'file' => 'يجب أن يكون :attribute بين: min و: max كيلوبايت.',
        'string' => 'يجب أن يكون :attribute بين: min و: max أحرف.',
        'array' => 'يجب أن تحتوي :attribute على ما بين: min و: max items.',
    ] ,
    'boolean' => 'يجب أن يكون حقل السمة صحيحًا أو خطأ.',
    'confirmed' => 'تأكيد السمة غير متطابق.',
    'date' => ' :attribute ليس تاريخًا صالحًا.',
    'date_equals' => 'يجب أن يكون :attribute تاريخًا مساويًا لـ :date.',
    'date_format' => ': السمة لا تطابق التنسيق :format.',
    'different' => 'يجب أن يكون :attribute و: other مختلفين.',
    'digits' => 'يجب أن يكون :attribute: digits digits.',
    'digits_between' => ' :attribute يجب أن تكون بين: min و: max digits.',
    'dimensions' => ': السمة لها أبعاد صورة غير صالحة.',
    'distinct' => 'يحتوي حقل السمة على قيمة مكررة.',
    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صالحًا.',
    'end_with' => ': يجب أن تنتهي السمة بواحد مما يلي: القيم.',
    'exists' => ':attribute غير موجود.',
    'file' => 'يجب أن يكون :attribute ملفًا.',
    'filled' => 'يجب أن يحتوي حقل السمة على قيمة.',
    'gt' => [
        'numeric' => 'يجب أن يكون :attribute أكبر من: value.',
        'file' => 'يجب أن تكون سمة :attribute أكبر من: value كيلوبايت.',
        'string' => 'يجب أن يكون :attribute أكبر من: value حرف.',
        'array' => 'يجب أن يحتوي :attribute على أكثر من: value items.',
    ] ,
    'gte' => [
        'numeric' => 'يجب أن يكون :attribute أكبر من أو يساوي: value.',
        'file' => 'يجب أن يكون :attribute أكبر من أو يساوي: value كيلوبايت.',
        'string' => 'يجب أن يكون :attribute أكبر من أو يساوي: value حرف.',
        'array' => 'يجب أن تحتوي :attribute على: value items أو أكثر.',
    ] ,
    'image' => 'يجب أن يكون :attribute صورة.',
    'in' => 'المحدد: السمة غير صالحة.',
    'in_array' => 'الحقل :attribute غير موجود في: other.',
    'integer' => 'يجب أن يكون :attribute عددًا صحيحًا.',
    'ip' => 'يجب أن يكون :attribute عنوان IP صالحًا.',
    'ipv4' => 'يجب أن يكون :attribute عنوان IPv4 صالحًا.',
    'ipv6' => 'يجب أن يكون :attribute عنوان IPv6 صالحًا.',
    'json' => 'يجب أن يكون :attribute سلسلة JSON صالحة.',
    'lt' => [
        'numeric' => 'يجب أن يكون :attribute أقل من: value.',
        'file' => 'يجب أن يكون حجم السمة: أقل من: value كيلوبايت.',
        'string' => 'يجب أن يكون :attribute أقل من: value حرف.',
        'array' => 'يجب أن يحتوي :attribute على أقل من: value items.',
    ] ,
    'lte' => [
        'numeric' => 'يجب أن يكون :attribute أقل من أو يساوي: value.',
        'file' => 'يجب أن يكون :attribute أقل من أو يساوي: value كيلوبايت.',
        'string' => 'يجب أن يكون :attribute أقل من أو يساوي: value حرف.',
        'array' => 'يجب ألا تحتوي :attribute على أكثر من: value items.',
    ] ,
    "max" => [
        'numeric' => ' :attribute قد لا تكون أكبر من:max.',
        'file' => 'قد لا يكون :attribute أكبر من:max كيلوبايت.',
        'string' => 'لا يجوز أن يكون :attribute أكبر من:max حرف.',
        'array' => 'لا يجوز أن تحتوي :attribute على أكثر من: max عنصر.',
    ] ,
    'mimes' => 'يجب أن يكون :attribute ملفًا من النوع المطلوب.',
    'mimetypes' => 'يجب أن يكون :attribute ملفًا من النوع:: values.',
    'min'                  => [
        'numeric' => 'يجب أن تكون قيمة الحقل :attribute مساوية أو أكبر لـ :min.',
        'file'    => 'يجب أن يكون حجم الملف :attribute على الأقل :min كيلوبايت',
        'string'  => 'يجب أن يكون طول نص :attribute على الأقل :min حروفٍ/حرفًا',
        'array'   => 'يجب أن يحتوي الحقل :attribute على الأقل على :min عُنصرًا/عناصر',
    ],
    'not_in' => 'السمة المحددة :attribute غير صالحة.',
    'not_regex' => 'تنسيق :attribute غير صالح.',
    'numeric' => 'يجب أن يكون :attribute رقمًا.',
    'password' => 'كلمة المرور غير صحيحة.',
    'present' => 'يجب أن يكون حقل :attribute موجودًا.',
    'regex' => 'تنسيق :attribute غير صالح.',
    'required' => ' :attribute مطلوب.',
    'required_if' => 'حقل :attribute مطلوب عندما تكون قيمة :other :value',
    'required_unless' => 'حقل :attribute مطلوب إلا إذا كان قيمة :other تساوي :values.',
    'required_with' => 'حقل :attribute مطلوب عندما :values موجودة.',
    'required_with_all' => 'حقل :attribute مطلوب عندما تكون :values موجودة.',
    'required_without' => 'حقل :attributes مطلوب عندماتكون :values غير موجودة.',
    'required_without_all' => 'حقل :attribute مطلوب في حالة عدم وجود أي من:values.',
    'same' => ':attribute و :other يجب ان تكونا متطابقتان',
    "size" => [
        'numeric' => 'يجب أن يكون: attribute: size.',
        'file' => 'يجب أن يكون: attribute: size كيلوبايت.',
        'string' => 'يجب أن يكون: attribute: حجم الأحرف.',
        'array' => 'يجب أن يحتوي: attribute على: size items.',
    ] ,
    'begin_with' => ': يجب أن تبدأ السمة بواحد مما يلي: القيم.',
    'string' => 'يجب أن يكون: attribute عبارة عن سلسلة.',
    'timezone' => 'يجب أن يكون: attribute منطقة صالحة.',
    'unique'   => 'قيمة الحقل :attribute مُستخدمة من قبل',
    'uploaded' => 'فشل تحميل: attribute.',
    'url' => 'تنسيق السمة غير صالح.',
    'uuid' => ': attribute يجب أن يكون UUID صالحًا.',


    'attributes' => [
        'username'              => 'اسم المُستخدم',
        'name'                  => 'اسم المُستخدم',
        'email'                 => 'البريد الالكتروني',
        'subject'               => 'العنوان',
        'first_name'            => 'الاسم',
        'last_name'             => 'اسم العائلة',
        'password'              => 'كلمة المرور',
        'password_confirmation' => 'تأكيد كلمة المرور',
        'country'               => 'الدولة',
        'area'                  => 'المنطقة',
        'city'                  => 'المدينة',
        'address'               => 'العنوان',
        'phone'                 => 'الهاتف',
        'mobile'                => 'الجوال',
        'age'                   => 'العمر',
        'sex'                   => 'الجنس',
        'gender'                => 'النوع',
        'day'                   => 'اليوم',
        'month'                 => 'الشهر',
        'year'                  => 'السنة',
        'hour'                  => 'ساعة',
        'minute'                => 'دقيقة',
        'second'                => 'ثانية',
        'content'               => 'المُحتوى',
        'description'           => 'الوصف',
        'excerpt'               => 'المُلخص',
        'date'                  => 'التاريخ',
        'time'                  => 'الوقت',
        'available'             => 'مُتاح',
        'size'                  => 'الحجم',
        'price'                 => 'السعر',
        'desc'                  => 'نبذه',
        'title'                 => 'العنوان',
        'q'                     => 'البحث',
        'link'                  => ' ',
        'slug'                  => ' ',
        'country_id'            => 'إختيار الدولة',
        'area_id'               => 'إختيار المنطقة',
        'city_id'               => 'إختيار المدينة',
        'offer_type'                  => 'نوع العرض',
        'condition_operation'                  => 'شرط العملية',
        'condition_type'                  => 'نوع الشرط',
        'condition'                  => 'الشرط',
        'expire_date'                  => 'تاريخ انتاء الصلاحية',
        'code'                  => 'الكود',
        'image'                  => 'صورة',
        'icon'                  => 'أيقونة',
        'message'                  => 'محتوي الرسالة',
        'bank_num'              =>'رقم الحساب البنكي',
        'ipan'                  =>'رقم اٌيبان',
        'old_password'                  =>'كلمة السر القديمة',
        'certificate_file'      =>'ملف الشهادة',
        'crd'                   =>'تاريخ السجل التجاري',
        'vendor_id'      =>'اسم المتجر',
        'role_id'      =>'دور المستخدم',
    ],
];
