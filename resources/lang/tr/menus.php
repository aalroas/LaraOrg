<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Menus Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in menu items throughout the system.
    | Regardless where it is placed, a menu item can be listed here so it is easily
    | found in a intuitive way.
    |
    */

    'backend' => [
        'access' => [
            'title' => 'Erişim Yönetimi',

            'roles' => [
                'all' => 'Tüm Roller',
                'create' => 'Rol Oluştur',
                'edit' => 'Rol Düzenle',
                'management' => 'Rol Yönetimi',
                'main' => 'Roller',
            ],

            'users' => [
                'all' => 'Tüm Kullanıcılar',
                'change-password' => 'Parolayı Değiştir',
                'create' => 'Kullanıcı Oluştur',
                'deactivated' => 'Pasif Kullanıcılar',
                'deleted' => 'Silinmiş Kullanıcılar',
                'edit' => 'Kullanıcıyı Düzenle',
                'main' => 'Kullanıcılar',
                'view' => 'Kullanıcıyı Görüntüle',
            ],
        ],

        'log-viewer' => [
            'main' => 'Log Görüntüleyici',
            'dashboard' => 'Kokpit',
            'logs' => 'Loglar',
        ],

        'sidebar' => [
            'dashboard' => 'Kokpit',
            'general' => 'Genel',
            'history' => 'History',
            'system' => 'Sistem',
        ],
    ],

    'language-picker' => [
        'language' => 'Dil',
        /*
         * Add the new language to this array.
         * The key should have the same language code as the folder name.
         * The string should be: 'Language-name-in-your-own-language (Language-name-in-English)'.
         * Be sure to add the new language in alphabetical order.
         */
        'langs' => [

            'ar' => 'Arapça (Arabic)',

            'en' => 'İngilizce (English)',


            'tr' => 'Türkçe (Turkish)',

        ],
    ],
];
