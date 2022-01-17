<?php
require "../bootstrap.php";

$qb = $entityManager->createQueryBuilder();

$qb
    ->select('F') // поля, которые достаем
    ->from('\DsFilesEntity', 'F')
    ->leftJoin('DsFilesOsEntity', 'FO', 'WITH', 'FO.id = F.os_id')
    ->where('FO.title = :os_title')
    ->setParameter('os_title', 'linux')
;

$query = $qb->getQuery();
$result = $query->getResult();


var_dump($qb->getDQL());


echo "<hr><pre>";
print_r($result);
echo "</pre>";