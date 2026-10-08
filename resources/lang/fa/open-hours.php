<?php

return [
    'navigation_label' => 'ساعات کاری',
    'title' => 'ساعات کاری',
    'sections' => [
        'week' => [
            'heading' => 'هفته',
            'description' => 'بازه‌های کاری هر روز. روز بدون بازه تعطیل است.',
        ],
        'exceptions' => [
            'heading' => 'تعطیلات و تاریخ‌های ویژه',
            'description' => 'برنامه هفتگی را در یک تاریخ جایگزین می‌کند. بدون بازه = آن روز تعطیل.',
        ],
    ],
    'fields' => [
        'timezone' => 'منطقه زمانی',
        'timezone_default' => 'منطقه زمانی برنامه (:timezone)',
        'add_range' => 'افزودن بازه',
        'ranges_help' => 'HH:MM-HH:MM، مثلاً 09:00-12:00. بازه‌های شبانه مانند 22:00-02:00 مجازند.',
        'add_exception' => 'افزودن تاریخ',
        'date' => 'تاریخ',
        'yearly' => 'هر سال',
        'hours' => 'ساعت‌ها',
        'note' => 'یادداشت',
    ],
    'widget' => [
        'label' => 'ساعات کاری',
        'open' => 'باز',
        'closed' => 'بسته',
    ],
    'invalid' => 'برنامه نامعتبر',
];
