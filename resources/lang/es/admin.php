<?php

return [
    'admin-user' => [
        'title' => 'Usuarios',

        'actions' => [
            'index' => 'Usuarios',
            'create' => 'Nuevo Usuario',
            'edit' => 'Editar :nmbreo',
            'edit_profile' => 'Editar perfil',
            'edit_password' => 'Editar contraseña',
        ],

        'columns' => [
            'id' => 'ID',
            'last_login_at' => 'Último acceso',
            'first_name' => 'Monbre',
            'last_name' => 'Apellido',
            'email' => 'Email',
            'password' => 'Contraseña',
            'password_repeat' => 'Confirmación de contraseña',
            'activated' => 'Activada',
            'forbidden' => 'Prohibida',
            'language' => 'Idioma',
                
            //Belongs to many relations
            'roles' => 'Roles',
                
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];