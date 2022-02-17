<?php

require "../bootstrap.php";

$qb = $entityManager->createQueryBuilder();

$qb
    ->select('I') // поля, которые достаем
    ->from('\IpEntity', 'I')
    ->where('I.ip LIKE :ipv6')
    ->setParameter('ipv6', '%44.67.85.126%')
;

$query = $qb->getQuery();
$result = $query->getResult();


echo "<hr><pre>";
var_dump($result);
echo "</pre>";



echo '<br><br><a href="/">Назад</a><br><br>';