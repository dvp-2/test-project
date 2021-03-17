<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=mariadb:3306;dbname=testdb',
    'username' => 'root',
    'password' => 'secret-pw',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
