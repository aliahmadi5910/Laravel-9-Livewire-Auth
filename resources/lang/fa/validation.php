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
    | Translated By : LaravelForum.ir Abolfazl Talebi
    */

    'accepted' => ':attribute باید تایید شود.',
    'active_url' => ':attribute لینک وارد شده معتبر نیست.',
    'after' => ':attribute تاریخ باید بعد از :date باشد',
    'after_or_equal' => ':attribute تاریخ باید بعد یا مساوی با :date باشد.',
    'alpha' => ':attribute فقط حروف مجاز است.',
    'alpha_dash' => ':attribute فقط حروف ، اعداد ، خط تیره مانند - و _ مجاز است',
    'alpha_num' => ':attribute فقط حروف و اعداد مجاز است..',
    'array' => ':attribute فقط آرایه مجاز است.',
    'before' => ':attribute باید تاریخ قبل از :date باشد.',
    'before_or_equal' => ':attribute باید تاریخ قبل یا مساوی با :date باشد',
    'between' => [
        'numeric' => ':attribute باید مابین  :min و :max باشد',
        'file' => ':attribute باید مابین :min و :max کیلوبایت باشد.',
        'string' => ':attribute باید مابین :min و :max کاراکتر باشد.',
        'array' => ':attribute باید مابین :min و :max آیتم باشد.',
    ],
    'boolean' => ':attribute فیلد باید true یا false باشد.',
    'confirmed' => ':attribute فیلد تایید یکسان نیست.',
    'date' => ':attribute تاریخ معتبر وارد نشده است.',
    'date_equals' => ':attribute باید تاریخ یکسان با :date وارد شود',
    'date_format' => ':attribute فرمت باید به شکل :format وارد شود',
    'different' => 'مقدار :attribute و :other باید متفاوت باشند.',
    'digits' => ':attribute باید :digits رقم باشد.',
    'digits_between' => ':attribute باید مابین :min و :max رقم باشد.',
    'dimensions' => ':attribute طول و عرض تصویر معتبر نیست.',
    'distinct' => ':attribute دارای مقدار تکراری است.',
    'email' => ':attribute ایمیل آدرس معتبر نیست.',
    'ends_with' => ':attribute آخرین مقدار باید شامل این موارد باشد: :values',
    'exists' => ':attribute مورد انتخاب شده معتبر نیست.',
    'file' => ':attribute باید یک فایل انتخاب شود.',
    'filled' => ':attribute باید یک مقدار وارد شود.',
    'gt' => [
        'numeric' => ':attribute باید بزرگتر از :value باشد',
        'file' => ':attribute باید بزرگتر از  :value کیلوبایت باشد.',
        'string' => ':attribute باید بیشتر از :value کاراکتر باشد.',
        'array' => ':attribute باید بیشتر از :value آیتم باشد.',
    ],
    'gte' => [
        'numeric' => ':attribute باید بزرگتر یا مساوی با :value باشد',
        'file' => ':attribute باید بزرگتر یا مساوی با :value کیلوبایت باشد.',
        'string' => ':attribute باید بیشتر یا مساوی با :value کاراکتر باشد.',
        'array' => ':attribute باید حداقل :value آیتم یا بیشتر باشد.',
    ],
    'image' => ':attribute باید یک تصویر انتخاب شود.',
    'in' => ':attribute معتبر نیست.',
    'in_array' => ':attribute فیلد در :other موجود نیست',
    'integer' => ':attribute باید عدد وارد شود.',
    'ip' => ':attribute باید IP آدرس معتبر وارد شود.',
    'ipv4' => ':attribute باید IP آدرس وارد شده IPv4 باشد.',
    'ipv6' => ':attribute باید IP آدرس وارد شده IPv6 باشد.',
    'json' => ':attribute باید مقدار وارد شده JSON باشد.',
    'lt' => [
        'numeric' => ':attribute باید کمتر از :value وارد شود',
        'file' => ':attribute باید کمتر از :value کیلوبایت باشد.',
        'string' => ':attribute باید کمتر از :value کارکتر باشد.',
        'array' => ':attribute باید کمتر از  :value آیتم باشد.',
    ],
    'lte' => [
        'numeric' => ':attribute باید کمتر یا مساوی با :value باشد',
        'file' => ':attribute باید کمتر یا مساوی با :value کیلوبایت باشد.',
        'string' => ':attribute باید کمتر یا مساوی با :value کارکتر باشد.',
        'array' => ':attribute باید کمتر یا مساوی با :value آیتم باشد.',
    ],
    'max' => [
        'numeric' => ':attribute نباید بزرگتر از :max باشد',
        'file' => ':attribute نباید بزرگتر از :max کیلوبایت باشد.',
        'string' => ':attribute نباید بیشتر از :max کارکتر باشد.',
        'array' => ':attribute نباید بیشتر از :max آیتم باشد.',
    ],
    'mimes' => ':attribute پسوند و نوع فایل باید: :values باشد',
    'mimetypes' => ':attribute پسوند و نوع فایل باید: :values باشد',
    'min' => [
        'numeric' => ':attribute حداقل باید :min باشد',
        'file' => ':attribute حداقل باید :min کیلوبایت باشد.',
        'string' => ':attribute حداقل باید :min کارکتر باشد.',
        'array' => ':attribute حداقل باید :min آیتم باشد.',
    ],
    'not_in' => ':attribute معتبر نیست.',
    'not_regex' => ':attribute فرمت وارد شده معتبر نیست.',
    'numeric' => ':attribute باید یک عدد باشد.',
    'present' => ':attribute باید موجودیت داشته باشد.',
    'regex' => ':attribute فرمت قابل قبول نیست.',
    'required' => 'فیلد :attribute اجباری است.',
    'required_if' => 'فیلد :attribute اجباری است در صورتی که :other برابر با :value باشد',
    'required_unless' => 'فیلد :attribute اجباری است مگر اینکه :other برابر با :values باشد',
    'required_with' => 'فیلد :attribute اجباری است وقتی که :values موجود باشد.',
    'required_with_all' => 'فیلد :attribute اجباری است اگر :values موجود باشد.',
    'required_without' => 'فیلد :attribute اجباری است وقتی که :values موجود نباشد.',
    'required_without_all' => 'فیلد :attribute اجباری است اگر هیچ یک از :values موجود نباشد.',
    'same' => ':attribute و :other باید یکسان باشند.',
    'size' => [
        'numeric' => ':attribute باید :size باشد',
        'file' => ':attribute باید :size کیلوبایت باشد.',
        'string' => ':attribute باید :size کاراکتر باشد.',
        'array' => ':attribute باید شامل :size آیتم باشد.',
    ],
    'starts_with' => ':attribute باید با یکی از این موارد آغاز شده باشد: :values',
    'string' => ':attribute باید حروف باشد.',
    'timezone' => ':attribute زمان باید معتبر باشد.',
    'unique' => ':attribute این مقدار قبلا ثبت شده و تکراری است.',
    'uploaded' => ':attribute آپلود دچار اشکال شده است.',
    'url' => ':attribute فرمت قابل قبول نمیباشد.',
    'uuid' => ':attribute باید مقدار UUID معتبر باشد',
    'recaptcha' => 'ثابت کنید ربات نیستید.',

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
            'rule-name' => 'custom-message',
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

    'attributes' => [
        "name" => "نام",
        "username" => "نام کاربری",
        "email" => "آدرس ایمیل",
        "first_name" => "نام",
        "last_name" => "نام خانوادگی",
        "family" => "نام خانوادگی",
        "password" => "رمز عبور",
        "password_confirmation" => "تاییدیه ی رمز عبور",
        "city" => "شهر",
        "country" => "کشور",
        "address" => "نشانی",
        "phone" => "تلفن",
        "mobile" => "تلفن همراه",
        "codemelli" => "کدملی",
        "age" => "سن",
        "sex" => "جنسیت",
        "gender" => "جنسیت",
        "day" => "روز",
        "month" => "ماه",
        "year" => "سال",
        "hour" => "ساعت",
        "minute" => "دقیقه",
        "second" => "ثانیه",
        "title" => "عنوان",
        "text" => "متن",
        "content" => "محتوا",
        "description" => "توضیحات",
        "excerpt" => "گلچین کردن",
        "date" => "تاریخ",
        "time" => "زمان",
        "available" => "موجود",
        "notavailable" => "موجود نیست",
        "size" => "اندازه",
        "bio" => "بیوگرافی",
        "slug" => "لینک",
        "tags" => "تگ ها",
        "categories" => "دسته بندی ها",
        "image" => "عکس",
        "star" => "رتبه",
        "wallet" => "شماره حساب",
        "price" => "قیمت",
        "file" => "فایل",
        "projectCategory" => "دسته بندی",
        "social_category" => "نوع شبکه مجازی",
        "agree" => "قوانین",
        "phone_number" => "شماره موبایل",
        "code" => "کد تایید",
        "category_id" => "دسته بندی والد",
        "recaptcha" => "اثبات ربات نبودن",
        "data.name" => "نام",
        "data.phone_number" => "شماره موبایل",
        "data.password" => "رمز عبور",
        "data.agree" => "قوانین",
        "data.role" => "نقش کاربر",
        "data.verify_code" => "کد فعالسازی",
        "data.image" => "عکس",
        "data.tags" => "برچسب ها",
        "data.categories" => "دسته بندی ها",
        "data.text" => "متن",
        "data.title" => "عنوان",
        "data.slug" => "لینک",
        "data.description" => "توضیحات",
        "data.email" => "ایمیل",
        "data.message" => "متن پیام",
        "data.category_id" => "دسته بندی",
        "data.national_code" => "کد ملی",
        "data.address" => "آدرس",
        "data.points" => "محدوده روی نقشه",
        "data.city_id" => "شهر",
        "data.state_id" => "استان",
        "data.user_id" => "کاربر",
        "data.postal_code" => "کد پستی",
        "data.father_name" => "نام پدر",
        "data.birthday" => "تاریخ تولد",
        "data.job" => "شغل",
        "data.real_number" => "کد اقتصادی",
        "data.register_number" => "شماره ثبت",
        "data.national_register_number" => "شناسه ملی",
        "data.company_number" => "کد اقتصادی شرکت",
        "data.company_title" => "عنوان شرکت",
        "data.company_order" => "سمت",
        "data.job_number" => "کد پروانه کسب یا کد اصناف",
        "data.data_type" => "نوع داده",
        "data.field_order" => "ترتیب",
        "data.value_order" => "ترتیب",
        "data.value" => "مقدار",
        "data.price" => "قیمت",
        "data.unit_price" => "قیمت هر متر",
        "data.area" => "متراژ",
        "data.latitude" => "طول جغرافیایی",
        "data.longitude" => "عرض جغرافیایی",
        "data.branch_id" => "نام شعبه",
        "data.selected_users" => "کاربران",
        "data.advisor_id" => "املاک",
        "data.icon" => "آیکون",
        "data.content" => "محتوا",
        "data.amount" => "مبلغ",
        "data.reply" => "پاسخ",
        "data.category" => "دسته بندی",
        "data.unit_type" => "واحد پولی",
        "data.required" => "اجباری",
        "data.tag" => "برچسب",
        "data.place_holder" => "متن داخل کادر",
        "data.category_main" => "دسته بندی",
        "data.published" => "وضعیت انتشار",
        "data.complaint_number" => "شماره شکایت",
        "data.massage" => "پیام",
        "data.user_code" => "کد کاربری",
        "data.mac" => "مک آدرس",
        "data.ip" => "آی پی",
        "data.active" => "فعال بودن",
        "data.central" => "شعبه مرکزی",
        "data.old_password" => "رمز عبور قدیمی",
        "data.email_notification" => "اعلان ایمیل",
        "data.sms_notification" => "اعلان اس ام اس",
        "data.message_notification" => "اعلان مرکز پیام",
        "data.social_type" => "نوع شبکه اجتماعی",
        "data.chat_id" => "آیدی شبکه",
        "data.status" => "وضعیت",
    ],

];
