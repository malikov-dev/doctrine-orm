<?php
require "../bootstrap.php";

$puh = new IpEntity();
$puh->setName( 'Винни Пух' );
//$puh->setIp( '44.67.85.126' );
$puh->setIp( 'FE80:0000:0000:0000:0202:B3FF:FE1E:8329' );

$entityManager->persist($puh);

echo '<pre>';
var_dump($puh);
echo '</pre>';

$entityManager->flush();

echo '<br><br><a href="/">Назад</a><br><br>';
