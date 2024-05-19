<?php


return [
    'required' => ':attribute الزامی می‌باشد.',
    'unique' => ' :attribute قبلا ساخته شده.',
    'not_regex' => 'فیلد :attribute اشتباه است.',
    'regex' => 'فیلد :attribute اشتباه است.',
    'confirmed' => 'نیست :attribute تکرار پسورد مطابق.',

    'attributes' => [
        'name' => 'نام',
        'family' => 'نام خانوادگی',
        'email' => ' ایمیل',
        'mobile' => 'موبایل',
        'role' => ' وضعیت',
        'password' => 'پسورد',
        'title' => 'عنوان',
        'type' => 'نوع',
        'dkp' => 'چهار حرف انتخابی',
        'count' => 'تعداد',
        'expire_time' => 'تاریخ انقضا',
        'product_category' => 'دسته بندی ',
        'owner_id' => 'کاربر',
        'product_serial' => 'شماره سریال',
    ],
    'min' => [
        'array' => 'فیلد :attribute باید حداقل :min آیتم داشته باشد.',
        'file' => 'فیلد :attribute باید حداقل :min کیلوبایت باشد.',
        'numeric' => 'فیلد :attribute باید حداقل :min باشد.',
        'string' => 'فیلد :attribute باید حداقل :min کاراکتر داشته باشد.',
        'unique' => ':attribute قبلا ثبت شده'
    ],
];
