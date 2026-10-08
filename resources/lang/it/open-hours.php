<?php

return [
    'navigation_label' => 'Orari di apertura',
    'title' => 'Orari di apertura',
    'sections' => [
        'week' => [
            'heading' => 'Settimana',
            'description' => 'Fasce orarie per giorno. Un giorno senza fasce è chiuso.',
        ],
        'exceptions' => [
            'heading' => 'Festività e date speciali',
            'description' => 'Sostituisce la settimana in una data. Senza fasce = chiuso quel giorno.',
        ],
    ],
    'fields' => [
        'timezone' => 'Fuso orario',
        'timezone_default' => 'Fuso dell\'app (:timezone)',
        'add_range' => 'Aggiungi fascia',
        'ranges_help' => 'HH:MM-HH:MM, es. 09:00-12:00. Sono ammesse fasce notturne come 22:00-02:00.',
        'add_exception' => 'Aggiungi data',
        'date' => 'Data',
        'yearly' => 'Ogni anno',
        'hours' => 'Orari',
        'note' => 'Nota',
    ],
    'widget' => [
        'label' => 'Orari di apertura',
        'open' => 'Aperto',
        'closed' => 'Chiuso',
    ],
    'invalid' => 'Orari non validi',
];
