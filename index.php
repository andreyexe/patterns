<?php
require 'vendor/autoload.php';

use Patterns\Builder\AnothersqlBuilder;
use Patterns\Builder\MysqlBuilder;
use Patterns\Singleton\Singleton;


// <singleton>
$single = Singleton::getInstance();
$single->setProperties('key', 'val');
unset($single);
$sing = Singleton::getInstance();
echo $sing->getProperties('key'). '</br></br></br>';
// </singleton>


// <builder>
$queryBuilder = new MysqlBuilder();
$query = $queryBuilder
    ->select("users", ["name", "email", "password"])
    ->where("age", 18, ">")
    ->where("age", 30, "<")
    ->limit(10, 20)
    ->getSQL();
echo $query . '</br>';
$queryBuilder = new AnothersqlBuilder();
$query = $queryBuilder
    ->select("users", ["name", "email", "password"])
    ->where("age", 18, ">")
    ->where("age", 30, "<")
    ->limit(10, 20)
    ->getSQL();
echo $query . '</br>';
// </builder>