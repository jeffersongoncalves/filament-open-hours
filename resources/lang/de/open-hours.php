<?php

return [
    'navigation_label' => 'Öffnungszeiten',
    'title' => 'Öffnungszeiten',
    'sections' => [
        'week' => [
            'heading' => 'Woche',
            'description' => 'Zeitfenster pro Tag. Ein Tag ohne Zeitfenster ist geschlossen.',
        ],
        'exceptions' => [
            'heading' => 'Feiertage und Sonderdaten',
            'description' => 'Ersetzt die Woche an einem Datum. Ohne Zeitfenster = an diesem Tag geschlossen.',
        ],
    ],
    'fields' => [
        'timezone' => 'Zeitzone',
        'timezone_default' => 'App-Zeitzone (:timezone)',
        'add_range' => 'Zeitfenster hinzufügen',
        'ranges_help' => 'HH:MM-HH:MM, z. B. 09:00-12:00. Nachtzeiten wie 22:00-02:00 sind erlaubt.',
        'add_exception' => 'Datum hinzufügen',
        'date' => 'Datum',
        'yearly' => 'Jedes Jahr',
        'hours' => 'Zeiten',
        'note' => 'Notiz',
    ],
    'widget' => [
        'label' => 'Öffnungszeiten',
        'open' => 'Geöffnet',
        'closed' => 'Geschlossen',
    ],
    'invalid' => 'Ungültige Öffnungszeiten',
];
