<?php

require "../bootstrap.php";

$user = new User();

$user->setName('Винни Пух');
$user->setEmail('vinni@vinni.ru');

// готовим $user к занесению в БД
$entityManager->persist($user);
// сохраняем в БД
$entityManager->flush();

echo '<pre>';
var_dump($user->getId());
var_dump($user);
echo '</pre>';

echo '<br><br><a href="/">Назад</a>';