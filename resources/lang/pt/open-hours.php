<?php

return [
    'navigation_label' => 'Horário de funcionamento',
    'title' => 'Horário de funcionamento',
    'sections' => [
        'week' => [
            'heading' => 'Semana',
            'description' => 'Intervalos de horário por dia. Dia sem intervalo = fechado.',
        ],
        'exceptions' => [
            'heading' => 'Feriados e datas especiais',
            'description' => 'Substitui a semana numa data. Sem intervalo = fechado nesse dia.',
        ],
    ],
    'fields' => [
        'timezone' => 'Fuso horário',
        'timezone_default' => 'Fuso da aplicação (:timezone)',
        'add_range' => 'Adicionar intervalo',
        'ranges_help' => 'HH:MM-HH:MM, p. ex. 09:00-12:00. Intervalos noturnos como 22:00-02:00 são permitidos.',
        'add_exception' => 'Adicionar data',
        'date' => 'Data',
        'yearly' => 'Todos os anos',
        'hours' => 'Horários',
        'note' => 'Nota',
    ],
    'widget' => [
        'label' => 'Horário de funcionamento',
        'open' => 'Aberto',
        'closed' => 'Fechado',
    ],
    'invalid' => 'Horário inválido',
];
