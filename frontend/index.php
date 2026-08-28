<?php

require_once __DIR__ . "/../vendor/autoload.php";

use App\db\db;

$controler = new db();

echo $controler->index();