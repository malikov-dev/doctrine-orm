<?php
require "../bootstrap.php";

$puh = new IpEntity();
//$puh->setBlackIP( '55.44.67.85' );
$puh->setBlackIP( '44.67.85.130' );
//$puh->setBlackIP( '2001:0db8:85a3:0000:0000:8a2e:0370:7334' );

$entityManager->persist($puh);

echo '<pre>';
var_dump($puh);
echo '</pre>';

$entityManager->flush();

echo '<br><br><a href="/">Назад</a><br><br>';
