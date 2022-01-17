<?php
require "../bootstrap.php";

// получаем сущность по идентификатору
//$book = $entityManager->find('\Book', 1);
$book = $entityManager->getRepository('\Book')->find(1);
$book = $entityManager->getRepository('\Book')->findBy([ 'id' => 3 ]);
$book = $entityManager->getRepository('\Book')->findBy(
    // условия
    [
        'id' => [2,3],
        //'title' => 'Гарри П'
    ],
    // сортировка
    [
        'id' => 'DESC'
    ],
    // лимит
    1,
    // Offset (смещение), по умолчанию 0
    1
);
// тоже самое что выше, с теми же параметрами, но возвращает ровно 1 объект без обертки в массив
$book = $entityManager->getRepository('\Book')->findOneBy(['id' => [1]]);
// тут вместо "Pages" вставь свое имя столбца
$book = $entityManager->getRepository('\Book')->findByPages(150);
// достаем всю таблицу
$book = $entityManager->getRepository('\Book')->findAll();

// вывод собственно написанного класса
$book = $entityManager->getRepository('\Book')->getAllMyBooks();

// остановился 12:00

// если нужно, то на лету что то обновляем
/*
$book->setTitle('Потный Гарри');
$entityManager->persist($book);
$entityManager->flush();
*/

// удаляем
/*
$entityManager->remove($book);
$entityManager->flush();
*/

echo "<pre>";
print_r($book);
echo "</pre>";

echo '<br><br><a href="/">Назад</a><br><br>';
