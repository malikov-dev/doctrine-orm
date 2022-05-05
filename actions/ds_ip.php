<?php

require "../bootstrap.php";

$qb = $entityManager->createQueryBuilder();
$qb
    ->select('I') // поля, которые достаем
    ->from('\IpEntity', 'I')
    ->where('I.blackIP LIKE :ipv6')
    ->setParameter('ipv6', '44.67.85' . '%' )
;

$query = $qb->getQuery();
$result = $query->getResult();


echo "<hr><pre>";
var_dump($result);


echo '<hr>';
foreach ($result AS $val) {
    var_dump($val->getId());
    echo '<br>';
    var_dump($val->getBlackIP());
    echo '<br><br>';
}
echo "</pre>";



echo '<br><br><a href="/">Назад</a><br><br>';