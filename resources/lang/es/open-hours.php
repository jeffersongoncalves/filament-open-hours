<?php

return [
    'navigation_label' => 'Horario de apertura',
    'title' => 'Horario de apertura',
    'sections' => [
        'week' => [
            'heading' => 'Semana',
            'description' => 'Franjas horarias por día. Un día sin franjas está cerrado.',
        ],
        'exceptions' => [
            'heading' => 'Festivos y fechas especiales',
            'description' => 'Sustituye la semana en una fecha. Sin franjas = cerrado ese día.',
        ],
    ],
    'fields' => [
        'timezone' => 'Zona horaria',
        'timezone_default' => 'Zona de la aplicación (:timezone)',
        'add_range' => 'Añadir franja',
        'ranges_help' => 'HH:MM-HH:MM, p. ej. 09:00-12:00. Se permiten franjas nocturnas como 22:00-02:00.',
        'add_exception' => 'Añadir fecha',
        'date' => 'Fecha',
        'yearly' => 'Cada año',
        'hours' => 'Horario',
        'note' => 'Nota',
    ],
    'widget' => [
        'label' => 'Horario de apertura',
        'open' => 'Abierto',
        'closed' => 'Cerrado',
    ],
    'invalid' => 'Horario no válido',
];
