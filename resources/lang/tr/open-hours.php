<?php

return [
    'navigation_label' => 'Çalışma saatleri',
    'title' => 'Çalışma saatleri',
    'sections' => [
        'week' => [
            'heading' => 'Hafta',
            'description' => 'Gün başına saat aralıkları. Aralığı olmayan gün kapalıdır.',
        ],
        'exceptions' => [
            'heading' => 'Tatiller ve özel günler',
            'description' => 'Bir tarihte haftalık programın yerine geçer. Aralık yok = o gün kapalı.',
        ],
    ],
    'fields' => [
        'timezone' => 'Saat dilimi',
        'timezone_default' => 'Uygulama saat dilimi (:timezone)',
        'add_range' => 'Aralık ekle',
        'ranges_help' => 'SS:DD-SS:DD, ör. 09:00-12:00. 22:00-02:00 gibi gece aralıklarına izin verilir.',
        'add_exception' => 'Tarih ekle',
        'date' => 'Tarih',
        'yearly' => 'Her yıl',
        'hours' => 'Saatler',
        'note' => 'Not',
    ],
    'widget' => [
        'label' => 'Çalışma saatleri',
        'open' => 'Açık',
        'closed' => 'Kapalı',
    ],
    'invalid' => 'Geçersiz program',
];
