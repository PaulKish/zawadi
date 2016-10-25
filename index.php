<?php
session_start();

require 'vendor/autoload.php';
require 'config.php';

// register PDO
Flight::register('db', 'PDO',[
	"mysql:host={$config['db_server']};dbname={$config['db']}",
	$config['db_user'],
	$config['db_pass']]
);

// register FluentPOD
Flight::register('fpdo','FluentPDO',[Flight::db()]);

// register phpauth config
Flight::register('config', 'PHPAuth\Config',[Flight::db()]);

// register phpauth
Flight::register('auth', 'PHPAuth\Auth',[Flight::db(),Flight::config()]);

// register flash messages
Flight::register('flash','McKay\Flash');

// register phpmailer
Flight::register('mail', 'PHPMailer');

//Set page title
Flight::view()->set('site_name', 'Zawadi Africa | Education Fund');

// Require routes
$files = glob('route/*.php');
foreach ($files as $file) {
    include $file;   
}

// engine start :)
Flight::start();