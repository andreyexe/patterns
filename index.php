<?php
require 'vendor/autoload.php';

use Patterns\Builder\AnothersqlBuilder,
    Patterns\Builder\MysqlBuilder;

use Patterns\Singleton\Singleton;

use Patterns\Facade\Facade;

use Patterns\Factory\ConcreteCreator1,
    Patterns\Factory\ConcreteCreator2;


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

// <facade>
echo '</br></br>';
$facade = new Facade();
$facade->run();
// </facade>

// <factory>
echo '</br></br>';
$creator1 = new ConcreteCreator1();
echo "creator1:  " . $creator1->someOperation(). '</br>';
$creator2 = new ConcreteCreator2();
echo "creator2:  " . $creator2->someOperation(). '</br>';
// </factory>