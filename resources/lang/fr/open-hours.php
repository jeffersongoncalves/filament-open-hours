<?php

return [
    'navigation_label' => 'Horaires d\'ouverture',
    'title' => 'Horaires d\'ouverture',
    'sections' => [
        'week' => [
            'heading' => 'Semaine',
            'description' => 'Plages horaires par jour. Un jour sans plage est fermé.',
        ],
        'exceptions' => [
            'heading' => 'Jours fériés et dates spéciales',
            'description' => 'Remplace la semaine à une date. Sans plage = fermé ce jour-là.',
        ],
    ],
    'fields' => [
        'timezone' => 'Fuseau horaire',
        'timezone_default' => 'Fuseau de l\'application (:timezone)',
        'add_range' => 'Ajouter une plage',
        'ranges_help' => 'HH:MM-HH:MM, ex. 09:00-12:00. Les plages de nuit comme 22:00-02:00 sont autorisées.',
        'add_exception' => 'Ajouter une date',
        'date' => 'Date',
        'yearly' => 'Chaque année',
        'hours' => 'Horaires',
        'note' => 'Note',
    ],
    'widget' => [
        'label' => 'Horaires d\'ouverture',
        'open' => 'Ouvert',
        'closed' => 'Fermé',
    ],
    'invalid' => 'Horaires invalides',
];
