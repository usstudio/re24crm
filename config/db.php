<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'pgsql:host=localhost;dbname=re24crm',
    'username' => 'admin',
    'password' => 'osural92',
    'charset' => 'utf8',
        'schemaMap' => [
        'pgsql' => [
            'class' => 'yii\db\pgsql\Schema',
            'defaultSchema' => 'public' //specify your schema here, public is the default schema
        ]
    ], // PostgreSQL
];
