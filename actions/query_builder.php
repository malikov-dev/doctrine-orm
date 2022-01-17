<?php

require "../bootstrap.php";

$qb = $entityManager->createQueryBuilder();

$qb
    ->select('b') // поля, которые достаем
    ->from('\Book', 'b')
    ->where('b.id > ?1')
    ->orderBy('b.id', 'DESC')
    ->setFirstResult(1) // аналог OFFSET
    ->setMaxResults(1)
    ->setParameter(1,1);

$query = $qb->getQuery();
$result = $query->getResult();
//$result = $query->getArrayResult(); // вернет не объекты, а массивы
//$result = $query->getSingleResult(); // тоелько если результат один


// тип запроса: select = 0, delete = 1, update = 2
//var_dump($qb->getType());

// отобразить сформированное DQL выражение
var_dump($qb->getDQL());


echo "<hr><pre>";
print_r($result);
echo "</pre>";

echo '<br><br><a href="/">Назад</a><br><br>';