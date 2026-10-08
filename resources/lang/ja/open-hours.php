<?php

return [
    'navigation_label' => '営業時間',
    'title' => '営業時間',
    'sections' => [
        'week' => [
            'heading' => '週間スケジュール',
            'description' => '曜日ごとの営業時間帯。時間帯のない日は休業です。',
        ],
        'exceptions' => [
            'heading' => '祝日・特別日',
            'description' => '特定の日付で週間スケジュールを上書きします。時間帯なし = その日は休業。',
        ],
    ],
    'fields' => [
        'timezone' => 'タイムゾーン',
        'timezone_default' => 'アプリのタイムゾーン (:timezone)',
        'add_range' => '時間帯を追加',
        'ranges_help' => 'HH:MM-HH:MM（例: 09:00-12:00）。22:00-02:00 のような深夜帯も指定できます。',
        'add_exception' => '日付を追加',
        'date' => '日付',
        'yearly' => '毎年',
        'hours' => '時間',
        'note' => 'メモ',
    ],
    'widget' => [
        'label' => '営業時間',
        'open' => '営業中',
        'closed' => '営業時間外',
    ],
    'invalid' => '営業時間が正しくありません',
];
