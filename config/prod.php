<?php

$app['log.level'] = Monolog\Logger::ERROR;
$app['api.endpoint'] = '/api';


/**
 * MySQL
 */
$app['db.options'] = array(
  'driver' => 'pdo_mysql',
  'user' => 'user',
  'password' => 'password',
  'dbname' => 'mydb',
  'host' => 'localhost',
);
