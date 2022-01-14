<?php

require "../bootstrap.php";

$book = new Book();

$book->setTitle('Гарри П');
$book->setPrice(15.76);
$book->setPages(150);
$book->setPublish(true);
$book->setCreated_at(new DateTime());
$book->setUpdated_at(new DateTime());

$obj = new stdClass();
$obj->x = 'x';
$obj->y = 'y';

$book->setParams($obj);
$book->setParams_a(['a'=>'a','b'=>'b']);
$book->setParams_s(['c'=>'c','d'=>'d']);
$book->setParams_j(['e'=>'e','f'=>'f']);

// готовим $user к занесению в БД
$entityManager->persist($book);
// сохраняем в БД
$entityManager->flush();

echo '<pre>';
var_dump($book);
echo '</pre>';

echo '<br><br><a href="/">Назад</a><br><br>';