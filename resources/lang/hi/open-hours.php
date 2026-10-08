<?php

return [
    'navigation_label' => 'कार्य समय',
    'title' => 'कार्य समय',
    'sections' => [
        'week' => [
            'heading' => 'सप्ताह',
            'description' => 'हर दिन के समय-खंड। बिना समय-खंड वाला दिन बंद है।',
        ],
        'exceptions' => [
            'heading' => 'छुट्टियाँ और विशेष तिथियाँ',
            'description' => 'किसी तिथि पर साप्ताहिक समय की जगह लेता है। कोई समय-खंड नहीं = उस दिन बंद।',
        ],
    ],
    'fields' => [
        'timezone' => 'समय क्षेत्र',
        'timezone_default' => 'ऐप का समय क्षेत्र (:timezone)',
        'add_range' => 'समय-खंड जोड़ें',
        'ranges_help' => 'HH:MM-HH:MM, जैसे 09:00-12:00। 22:00-02:00 जैसे रात के समय-खंड की अनुमति है।',
        'add_exception' => 'तिथि जोड़ें',
        'date' => 'तिथि',
        'yearly' => 'हर साल',
        'hours' => 'समय',
        'note' => 'नोट',
    ],
    'widget' => [
        'label' => 'कार्य समय',
        'open' => 'खुला',
        'closed' => 'बंद',
    ],
    'invalid' => 'अमान्य समय-सारणी',
];
