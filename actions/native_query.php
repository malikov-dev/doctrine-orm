<?php

require "../bootstrap.php";

/*
$sql = "SELECT id, title_book FROM books";
$rsm = new \Doctrine\ORM\Query\ResultSetMapping();
$rsm->addEntityResult('Book','b'); // имя класса и задаем ему аббревиатуру (псевдоним)
$rsm->addFieldResult('b','id','id');
$rsm->addFieldResult('b','title_book','title');
$query = $entityManager->createNativeQuery($sql, $rsm);
$books = $query->getResult();
*/

// способ напрямую с сущностью
/*
$sql = "SELECT * FROM books";
$rsm = new \Doctrine\ORM\Query\ResultSetMappingBuilder($entityManager);
$rsm->addRootEntityFromClassMetadata('Book','b');
$query = $entityManager->createNativeQuery($sql, $rsm);
$books = $query->getResult();
*/

// способ DQL
$sql = "SELECT b FROM \Book b WHERE b.id > :id_vinni";
//$sql = "SELECT b.id, b.title FROM \Book b WHERE b.id > :id";
$query = $entityManager->createQuery($sql);
$query->setParameter('id_vinni',1);
$books = $query->getResult();

echo "<pre>";
print_r($books);
echo "</pre>";

echo '<br><br><a href="/">Назад</a><br><br>';
