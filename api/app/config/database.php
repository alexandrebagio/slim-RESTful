<?php
use Illuminate\Database\Capsule\Manager as Capsule;

// Bootstrap Eloquent ORM
$settings = array(
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'test',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
);

$capsule = new Capsule;
$capsule->addConnection($settings);
$capsule->bootEloquent();
