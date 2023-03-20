<?php

require_once 'Garden/Apple.php';
require_once 'Garden/Pear.php';
require_once 'Actions/Collector.php';

$apples = ['1' => 40, '2' => 45, '3' => 50, '4' => 42, '5' => 40, '6' => 48];
$pears = ['1' => 10, '2' => 15, '3' => 20, '4' => 14, '5' => 12, '6' => 8, '7' => 16];

$garden =[];

foreach ($apples as $regNumber => $apple) {
    $garden[] = new Apple($regNumber, $apple);
}
foreach ($pears as $regNumber => $pear) {
    $garden[] = new Pear($regNumber, $pear);
}
print_r($garden);
$newApple = new Apple('n1', 41);
$collector = new Collector();
$garden = $collector->addTree($garden, $newApple);
echo $collector->collectFruits($garden) . " фруктов всего собрано \n";
echo $collector->countFruits($garden, 'Apple') . " яблок\n";
echo $collector->countFruits($garden, 'Pear') . " груш\n";
echo $collector->weight($garden) . " килограмм весит весь урожай\n";
