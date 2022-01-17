<?php
require "../bootstrap.php";

$files = $entityManager->getRepository('\DsFilesEntity')->findOneBy([]);


echo "<pre>";
print_r($files);
echo "</pre>";