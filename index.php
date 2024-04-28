<?php
use Patterns\Singleton\Singleton;
require 'vendor/autoload.php';

// <singleton>
$single = Singleton::getInstance();
$single->setProperties('key', 'val');
unset($single);
$sing = Singleton::getInstance();
echo $sing->getProperties('key');
// </singleton>


