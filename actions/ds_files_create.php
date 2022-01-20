<?php
require "../bootstrap.php";

class vinniPuh{
    public string $fileName = 'DataSunrise_Suite_7_7_7_77777.linux.64bit.run';
    public string $vendor = 'DataSunrise Suite';
    public string $version = '7.7.7.77777';
    public int    $versionFull = 7007007077777;
    public string $os = 'linux';
    public string $arch = '64bit';
    public string $extension = 'run';
    public bool   $releaseCandidate = false;
}


$vinniPuh = new vinniPuh();

$os = $entityManager->getRepository('\DsFilesOsEntity')->findOneBy( ['title' => 'windows123'] );
if (empty($os)) {
    $osCreate = new DsFilesOsEntity();
    $osCreate->setTitle('windows123');
    $entityManager->persist($osCreate);
    $entityManager->flush();
    $os = $osCreate->getId();
}
echo 'OS: ';
var_dump($os);
echo '<br>';

$puh = new DsFilesEntity();
$puh->setName( $vinniPuh->fileName );
$puh->setVersion( $vinniPuh->versionFull );
$puh->setTypeId( 1 );
$puh->setOsId( 1 );
$puh->setCustomerId( 0 );
$puh->setPath( 'vinni/' );
$puh->setCreatedAt( new DateTime() );

$entityManager->persist($puh);
//$entityManager->flush();











echo '<pre>';


var_dump( $puh );

echo '<hr>';
var_dump($vinniPuh);
echo '</pre>';