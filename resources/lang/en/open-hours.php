<?php

return [
    'navigation_label' => 'Opening hours',
    'title' => 'Opening hours',
    'sections' => [
        'week' => [
            'heading' => 'Weekly schedule',
            'description' => 'Opening ranges per day. A day with no range is closed.',
        ],
        'exceptions' => [
            'heading' => 'Holidays and special dates',
            'description' => 'Override the weekly schedule on a date. No range = closed that day.',
        ],
    ],
    'fields' => [
        'timezone' => 'Timezone',
        'timezone_default' => 'App timezone (:timezone)',
        'add_range' => 'Add range',
        'ranges_help' => 'HH:MM-HH:MM, e.g. 09:00-12:00. Overnight ranges like 22:00-02:00 are allowed.',
        'add_exception' => 'Add date',
        'date' => 'Date',
        'yearly' => 'Every year',
        'hours' => 'Hours',
        'note' => 'Note',
    ],
    'widget' => [
        'label' => 'Opening hours',
        'open' => 'Open',
        'closed' => 'Closed',
    ],
    'invalid' => 'Invalid schedule',
];
