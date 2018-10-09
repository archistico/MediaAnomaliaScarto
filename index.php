<?php
require 'vendor/autoload.php';
$f3 = \Base::instance();
$f3->route('GET /', 'App\App->Iniziale');
$f3->run();