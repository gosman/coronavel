<?php

return [

    [
        'title' => 'Dashboard',
        'route' => '/',
        'icon' => 'mdi-view-dashboard',
        'exclude_roles' => [],
    ],
    [
        'title' => 'Nested Menu Item',
        'icon' => 'mdi-chart-areaspline',
        'submenu' => [
            [
                'title' => 'Submenu 1',
                'route' => '/submenu1',
            ],
            [
                'title' => 'Submenu 2',
                'route' => '/submenu2',
            ],
        ],
        'exclude_roles' => [],
    ],
    [
        'title' => 'Manage Users',
        'route' => '/manage-users',
        'icon' => 'mdi-account-group',
        'exclude_roles' => [2],
    ],

];
