<?php
require 'routes.php';
require 'classes/routing.php';
require 'classes/requests.php';
require 'classes/database.php';
require 'classes/login.php';

$conf = [];
$conf['conf'] = require 'config.php';
$conf['database'] = connect::make($conf['conf']['database']);
 ?>
