<?php

return [
    'navigation_label' => '营业时间',
    'title' => '营业时间',
    'sections' => [
        'week' => [
            'heading' => '每周',
            'description' => '每天的营业时段。没有时段的日子为休息。',
        ],
        'exceptions' => [
            'heading' => '节假日和特殊日期',
            'description' => '在某个日期覆盖每周安排。没有时段 = 当天休息。',
        ],
    ],
    'fields' => [
        'timezone' => '时区',
        'timezone_default' => '应用时区 (:timezone)',
        'add_range' => '添加时段',
        'ranges_help' => 'HH:MM-HH:MM，例如 09:00-12:00。允许 22:00-02:00 这样的跨夜时段。',
        'add_exception' => '添加日期',
        'date' => '日期',
        'yearly' => '每年',
        'hours' => '时段',
        'note' => '备注',
    ],
    'widget' => [
        'label' => '营业时间',
        'open' => '营业中',
        'closed' => '已打烊',
    ],
    'invalid' => '营业时间无效',
];
