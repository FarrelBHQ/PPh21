<?php
require __DIR__.'/vendor/autoload.php';

use pph21\FirstRule;
use pph21\SecondRule;
use pph21\ThirdRule;
use pph21\FourthRule;
use pph21\Pph21Cals;

$first = new FirstRule();
$second = new SecondRule($first);
$third = new ThirdRule($second);
$fourth = new FourthRule($third);

$kalkulator = new Pph21Cals($first, $second, $third, $fourth);

echo $kalkulator->cals(40000000000);
echo PHP_EOL;


?>