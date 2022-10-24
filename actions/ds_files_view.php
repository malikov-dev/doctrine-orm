<?php
require "../bootstrap.php";

$qb = $entityManager->createQueryBuilder();

$qb
    ->select('F') // поля, которые достаем
    ->from('\DsFilesEntity', 'F')
    ->leftJoin('\DsFilesTypeEntity', 'FT', 'WITH', 'FT.id = F.type_id')
    ->leftJoin('\DsFilesOsEntity', 'FO', 'WITH', 'FO.id = F.os_id')
    ->leftJoin('\DsFilesCustomerEntity', 'FC', 'WITH', 'FC.id = F.customer_id')
    ->where('FT.title = :type_title')
    ->andWhere('FO.title = :os_title')
    ->andWhere('FC.title = :customer_title')
    ->orderBy('F.version', 'DESC')
    ->setMaxResults(1)
    ->setParameter('type_title', 'distribute')
    ->setParameter('os_title', 'linux')
    ->setParameter('customer_title', 'zopa')
;

$query = $qb->getQuery();
//$result = $query->getResult();
$result = $query->getOneOrNullResult();


var_dump($qb->getDQL());


echo "<hr><pre>";
print_r($result);
echo "</pre>";