<?php

return [
    'navigation_label' => 'Godziny otwarcia',
    'title' => 'Godziny otwarcia',
    'sections' => [
        'week' => [
            'heading' => 'Tydzień',
            'description' => 'Przedziały godzin dla każdego dnia. Dzień bez przedziału jest zamknięty.',
        ],
        'exceptions' => [
            'heading' => 'Święta i daty specjalne',
            'description' => 'Zastępuje tydzień w danym dniu. Brak przedziału = zamknięte tego dnia.',
        ],
    ],
    'fields' => [
        'timezone' => 'Strefa czasowa',
        'timezone_default' => 'Strefa aplikacji (:timezone)',
        'add_range' => 'Dodaj przedział',
        'ranges_help' => 'HH:MM-HH:MM, np. 09:00-12:00. Dozwolone są przedziały nocne, np. 22:00-02:00.',
        'add_exception' => 'Dodaj datę',
        'date' => 'Data',
        'yearly' => 'Co roku',
        'hours' => 'Godziny',
        'note' => 'Notatka',
    ],
    'widget' => [
        'label' => 'Godziny otwarcia',
        'open' => 'Otwarte',
        'closed' => 'Zamknięte',
    ],
    'invalid' => 'Nieprawidłowe godziny',
];
