<?php

return [
    'admin-user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'edit_profile' => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ],

        'columns' => [
            'id' => 'ID',
            'last_login_at' => 'Last login',
            'first_name' => 'First name',
            'last_name' => 'Last name',
            'email' => 'Email',
            'password' => 'Password',
            'password_repeat' => 'Password Confirmation',
            'activated' => 'Activated',
            'forbidden' => 'Forbidden',
            'language' => 'Language',
                
            //Belongs to many relations
            'roles' => 'Roles',
                
        ],
    ],

    'pacient' => [
        'title' => 'Pacient',

        'actions' => [
            'index' => 'Pacient',
            'create' => 'New Pacient',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'nom' => 'Nom',
            'cognoms' => 'Cognoms',
            'telefon' => 'Telefon',
            'curs_escolar' => 'Curs escolar',
            'data_naixement' => 'Data naixement',
            'sex' => 'Sex',
            'esports' => 'Esports',
            'fecha' => 'Fecha',
            'referidor' => 'Referidor',
            
        ],
    ],

    'pacient' => [
        'title' => 'Pacient',

        'actions' => [
            'index' => 'Pacient',
            'create' => 'New Pacient',
            'edit' => 'Edit :name',
            'export' => 'Export',
        ],

        'columns' => [
            'id' => 'ID',
            'nom' => 'Nom',
            'cognoms' => 'Cognoms',
            'telefon' => 'Telefon',
            'curs_escolar' => 'Curs escolar',
            'data_naixement' => 'Data naixement',
            'sex' => 'Sex',
            'esports' => 'Esports',
            'fecha' => 'Fecha',
            'referidor' => 'Referidor',
            
        ],
    ],

    'full' => [
        'title' => 'Full',

        'actions' => [
            'index' => 'Full',
            'create' => 'New Full',
            'edit' => 'Edit :name',
            'export' => 'Export',
        ],

        'columns' => [
            'id' => 'ID',
            'pacient_id' => 'Pacient',
            'data_examen' => 'Data examen',
            'data_examen_mod' => 'Data examen mod',
            
        ],
    ],

    'admin-user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'edit_profile' => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ],

        'columns' => [
            'id' => 'ID',
            'last_login_at' => 'Last login',
            'first_name' => 'First name',
            'last_name' => 'Last name',
            'email' => 'Email',
            'password' => 'Password',
            'password_repeat' => 'Password Confirmation',
            'activated' => 'Activated',
            'forbidden' => 'Forbidden',
            'language' => 'Language',
                
            //Belongs to many relations
            'roles' => 'Roles',
                
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];