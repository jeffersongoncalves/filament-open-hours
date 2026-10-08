<?php

return [
    'navigation_label' => 'Horário de funcionamento',
    'title' => 'Horário de funcionamento',
    'sections' => [
        'week' => [
            'heading' => 'Semana',
            'description' => 'Faixas de horário por dia. Dia sem faixa = fechado.',
        ],
        'exceptions' => [
            'heading' => 'Feriados e datas especiais',
            'description' => 'Substitui a semana numa data. Sem faixa = fechado nesse dia.',
        ],
    ],
    'fields' => [
        'timezone' => 'Fuso horário',
        'timezone_default' => 'Fuso do app (:timezone)',
        'add_range' => 'Adicionar faixa',
        'ranges_help' => 'HH:MM-HH:MM, ex.: 09:00-12:00. Faixas que viram a noite, como 22:00-02:00, são permitidas.',
        'add_exception' => 'Adicionar data',
        'date' => 'Data',
        'yearly' => 'Todo ano',
        'hours' => 'Horários',
        'note' => 'Observação',
    ],
    'widget' => [
        'label' => 'Horário de funcionamento',
        'open' => 'Aberto',
        'closed' => 'Fechado',
    ],
    'invalid' => 'Horário inválido',
];
