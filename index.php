<?php 
//Requerimos nuestro archivo principal de composer autoload.php
require __DIR__ .'/vendor/autoload.php';

var_dump(App\Validate::email('gabyugarte@@gmail.com'));