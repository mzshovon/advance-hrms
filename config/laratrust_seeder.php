<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'superadmin' => [
            'payment' => 'c,r,u,d,rdl,a,rj,re',
            'payroll' => 'c,r,u,d,rdl,a,rj,re',
            'user' => 'c,r,u,d,rdl,a,rj,re',
        ],
        'admin' => [
            'payment' => 'c,r,u,d',
            'payroll' => 'c,r,u,d',
            'user' => 'c,r,u,d,rdl,a,rj,re',
        ],
        'hr_admin' => [
            'payment' => 'c,r,u,d',
            'payroll' => 'c,r,u,d',
            'user' => 'c,r,u,d,rdl,a,rj,re',
        ],
        'user' => [
            'user' => 'r,u',
        ],
    ],

    'permissions_map' => [
        '*' => 'all',
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete',
        'a' => 'approve',
        'rj' => 'reject',
        're' => 'review',
        'rdl' => 'report-download',
    ]
];
