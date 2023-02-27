<?php

return [

   /*
     * Las líneas del lenguaje serán obtenidas por estos cargadores.Puedes poner cualquier clase aquí que implementa
     * The Brackets \ Admintranslations \ TranslationLoaders \ TranslationLoader-Interface.
     */
    'translation_loaders' => [
        Brackets\AdminTranslations\TranslationLoaders\Db::class,
    ],

    /*
     * This is the model used by the Db Translation loader. You can put any model here
     * that extends Brackets\AdminTranslations\Translation.
     */
    'model' => Brackets\AdminTranslations\Translation::class,

    /*
     * This is the translation manager which overrides the default Laravel `translation.loader`
     */
    'translation_manager' => Brackets\AdminTranslations\TranslationLoaderManager::class,

    /*
     * This option controls if package routes are used or not
     */
    'use_routes' => true,

    'scanned_directories' => [
        app_path(),
        resource_path('views'),
        // here you can add your own directories
        // base_path('routes'), // uncomment if you have translations in your routes i.e. you have localized URLs
        base_path('vendor/brackets/admin-auth/src'),
        base_path('vendor/brackets/admin-auth/resources'),
        base_path('vendor/brackets/admin-ui/resources'),
        base_path('vendor/brackets/admin-translations/resources'),
    ],

];