<?php

return [
    'navigation_label' => 'Openingstijden',
    'title' => 'Openingstijden',
    'sections' => [
        'week' => [
            'heading' => 'Week',
            'description' => 'Tijdvakken per dag. Een dag zonder tijdvak is gesloten.',
        ],
        'exceptions' => [
            'heading' => 'Feestdagen en speciale data',
            'description' => 'Vervangt de week op een datum. Geen tijdvak = die dag gesloten.',
        ],
    ],
    'fields' => [
        'timezone' => 'Tijdzone',
        'timezone_default' => 'App-tijdzone (:timezone)',
        'add_range' => 'Tijdvak toevoegen',
        'ranges_help' => 'HH:MM-HH:MM, bijv. 09:00-12:00. Nachttijden zoals 22:00-02:00 zijn toegestaan.',
        'add_exception' => 'Datum toevoegen',
        'date' => 'Datum',
        'yearly' => 'Elk jaar',
        'hours' => 'Tijden',
        'note' => 'Notitie',
    ],
    'widget' => [
        'label' => 'Openingstijden',
        'open' => 'Open',
        'closed' => 'Gesloten',
    ],
    'invalid' => 'Ongeldige openingstijden',
];
