<?php

return [
    'navigation_label' => 'İş saatları',
    'title' => 'İş saatları',
    'sections' => [
        'week' => [
            'heading' => 'Həftə',
            'description' => 'Hər gün üçün saat aralıqları. Aralığı olmayan gün bağlıdır.',
        ],
        'exceptions' => [
            'heading' => 'Bayramlar və xüsusi tarixlər',
            'description' => 'Tarixdə həftəlik qrafiki əvəz edir. Aralıq yoxdursa, həmin gün bağlıdır.',
        ],
    ],
    'fields' => [
        'timezone' => 'Saat qurşağı',
        'timezone_default' => 'Tətbiqin saat qurşağı (:timezone)',
        'add_range' => 'Aralıq əlavə et',
        'ranges_help' => 'SS:DD-SS:DD, məs. 09:00-12:00. 22:00-02:00 kimi gecə aralıqlarına icazə verilir.',
        'add_exception' => 'Tarix əlavə et',
        'date' => 'Tarix',
        'yearly' => 'Hər il',
        'hours' => 'Saatlar',
        'note' => 'Qeyd',
    ],
    'widget' => [
        'label' => 'İş saatları',
        'open' => 'Açıqdır',
        'closed' => 'Bağlıdır',
    ],
    'invalid' => 'Yanlış qrafik',
];
