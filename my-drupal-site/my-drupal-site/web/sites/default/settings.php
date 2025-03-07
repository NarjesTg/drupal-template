<?php
$settings['config_sync_directory'] = '../config';
$databases['default']['default'] = [
    'database' => getenv('DRUPAL_DB_NAME'),
    'username' => getenv('DRUPAL_DB_USER'),
    'password' => getenv('DRUPAL_DB_PASSWORD'),
    'host' => getenv('DRUPAL_DB_HOST'),
    'port' => getenv('DRUPAL_DB_PORT'),
    'driver' => 'mysql',
    'prefix' => '',
    'collation' => 'utf8mb4_general_ci',
];
$databases['default']['default'] = array (
  'database' => 'drupal',
  'username' => 'drupal',
  'password' => 'drupalpass',
  'prefix' => '',
  'host' => 'db',
  'port' => '3306',
  'isolation_level' => 'READ COMMITTED',
  'driver' => 'mysql',
  'namespace' => 'Drupal\\mysql\\Driver\\Database\\mysql',
  'autoload' => 'core/modules/mysql/src/Driver/Database/mysql/',
);
$settings['hash_salt'] = 'VjX5HP3HG55-_efNTYIRaL08f5E51CPiN2IGY5WNWCsN6idlDjI9A5xcEsq6zqCYhRb4F2i-vg';
