<?php

/*
 * This file is part of the Carbon package.
 *
 * (c) Brian Nesbitt <brian@nesbot.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [
    'year' => 'tinan ida|tinan :count',
    'month' => 'fulan ida|fulan :count',
    'day' => 'loron ida|loron :count',
    'hour' => 'oras ida|oras :count',
    'minute' => 'minutu ida|minutu :count',
    'second' => 'minutu balun|minutu :count',
    'ago' => ':time liuba',
    'from_now' => 'iha :time',
    'formats' => [
        'LT' => 'HH:mm',
        'LTS' => 'HH:mm:ss',
        'L' => 'DD/MM/YYYY',
        'LL' => 'D MMMM YYYY',
        'LLL' => 'D MMMM YYYY HH:mm',
        'LLLL' => 'dddd, D MMMM YYYY HH:mm',
    ],
    'calendar' => [
        'sameDay' => '[Ohin iha] LT',
        'nextDay' => '[Aban iha] LT',
        'nextWeek' => 'dddd [iha] LT',
        'lastDay' => '[Horiseik iha] LT',
        'lastWeek' => 'dddd [semana kotuk] [iha] LT',
        'sameElse' => 'L',
    ],
    'months' => ['Janeiru', 'Fevereiru', 'Marsu', 'Abril', 'Maiu', 'Juñu', 'Jullu', 'Agustu', 'Setembru', 'Outubru', 'Novembru', 'Dezembru'],
    'months_short' => ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
    'weekdays' => ['Domingu', 'Segunda', 'Tersa', 'Kuarta', 'Kinta', 'Sesta', 'Sabadu'],
    'weekdays_short' => ['Dom', 'Seg', 'Ters', 'Kua', 'Kint', 'Sest', 'Sab'],
    'weekdays_min' => ['Do', 'Seg', 'Te', 'Ku', 'Ki', 'Ses', 'Sa'],
];
