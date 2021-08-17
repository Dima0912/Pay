<?php
declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require_once $_SERVER['DOCUMENT_ROOT']."/cash.php";
require_once $_SERVER['DOCUMENT_ROOT']."/card.php";
require_once $_SERVER['DOCUMENT_ROOT']."/interface.php";
require_once $_SERVER['DOCUMENT_ROOT']."/abstract.php";









$credit = new Card();

print_r($credit->SumAndCurency());

echo '<br>';

echo '<br>';

$cash = new Cash();
print_r($cash->SumAndCurency());