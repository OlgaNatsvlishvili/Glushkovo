<?php

namespace core;

function getMenu()
{
    return [
        ['url' => 'index.php', 'name' => 'О нас'],
        ['url' => 'infrastructure.php', 'name' => 'Инфраструктура'],
        ['url' => 'plan.php', 'name' => 'Планировка', 'items' => [
            ['url' => 'plan.php#firs_floor_1', 'name' => 'I подъезд, I этаж'],
            ['url' => 'plan.php#second_floor_1', 'name' => 'I подъезд, II этаж'],
            ['url' => 'plan.php#second_floor_1', 'name' => 'I подъезд, III этаж'],
            ['url' => 'plan.php#firs_floor_2', 'name' => 'II подъезд, I этаж'],
            ['url' => 'plan.php#second_floor_2', 'name' => 'II подъезд, II этаж'],
            ['url' => 'plan.php#second_floor_2', 'name' => 'II подъезд, III этаж'],
        ]],
        ['url' => '#installment', 'name' => 'Рассрочка'],
        ['url' => '#contact', 'name' => 'Контакты'],
    ];
}