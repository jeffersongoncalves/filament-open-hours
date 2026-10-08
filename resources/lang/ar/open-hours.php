<?php

return [
    'navigation_label' => 'ساعات العمل',
    'title' => 'ساعات العمل',
    'sections' => [
        'week' => [
            'heading' => 'الأسبوع',
            'description' => 'فترات العمل لكل يوم. اليوم بلا فترات مغلق.',
        ],
        'exceptions' => [
            'heading' => 'العطل والتواريخ الخاصة',
            'description' => 'يستبدل جدول الأسبوع في تاريخ معيّن. بلا فترات = مغلق في ذلك اليوم.',
        ],
    ],
    'fields' => [
        'timezone' => 'المنطقة الزمنية',
        'timezone_default' => 'منطقة التطبيق (:timezone)',
        'add_range' => 'إضافة فترة',
        'ranges_help' => 'HH:MM-HH:MM، مثل 09:00-12:00. يُسمح بالفترات الليلية مثل 22:00-02:00.',
        'add_exception' => 'إضافة تاريخ',
        'date' => 'التاريخ',
        'yearly' => 'كل سنة',
        'hours' => 'الساعات',
        'note' => 'ملاحظة',
    ],
    'widget' => [
        'label' => 'ساعات العمل',
        'open' => 'مفتوح',
        'closed' => 'مغلق',
    ],
    'invalid' => 'جدول غير صالح',
];
