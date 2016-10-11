<?php
session_start();

require 'vendor/autoload.php';

// register PDO
Flight::register('db', 'PDO',["mysql:host=localhost;dbname=zawadi", "root", "root"]);

// register FluentPOD
Flight::register('fpdo','FluentPDO',[Flight::db()]);

// register phpauth config
Flight::register('config', 'PHPAuth\Config',[Flight::db()]);

// register phpauth
Flight::register('auth', 'PHPAuth\Auth',[Flight::db(),Flight::config()]);

// register flash messages
Flight::register('flash','McKay\Flash');

//Set page title
Flight::view()->set('site_name', 'Zawadi Africa | Education Fund');

// Require routes
$files = glob('route/*.php');
foreach ($files as $file) {
    include $file;   
}

// engine start :)
Flight::start();