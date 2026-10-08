<?php

return [
    'navigation_label' => 'Ish vaqti',
    'title' => 'Ish vaqti',
    'sections' => [
        'week' => [
            'heading' => 'Hafta',
            'description' => 'Har kun uchun vaqt oraliqlari. Oralig‘i yo‘q kun yopiq.',
        ],
        'exceptions' => [
            'heading' => 'Bayramlar va maxsus sanalar',
            'description' => 'Sanada haftalik jadvalni almashtiradi. Oraliq yo‘q = o‘sha kuni yopiq.',
        ],
    ],
    'fields' => [
        'timezone' => 'Vaqt mintaqasi',
        'timezone_default' => 'Ilova vaqt mintaqasi (:timezone)',
        'add_range' => 'Oraliq qo‘shish',
        'ranges_help' => 'SS:DD-SS:DD, masalan 09:00-12:00. 22:00-02:00 kabi tungi oraliqlarga ruxsat beriladi.',
        'add_exception' => 'Sana qo‘shish',
        'date' => 'Sana',
        'yearly' => 'Har yili',
        'hours' => 'Vaqtlar',
        'note' => 'Izoh',
    ],
    'widget' => [
        'label' => 'Ish vaqti',
        'open' => 'Ochiq',
        'closed' => 'Yopiq',
    ],
    'invalid' => 'Noto‘g‘ri jadval',
];
