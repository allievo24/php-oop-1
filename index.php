<?php
require_once __DIR__ . '/classe/Movie.php';

//parte logica istanzio 2 ogetto Movie

$BulletTrain = new Movie('Bullet Train','David Leitch','Inglese','Bullet Train è basato sul romanzo giapponese scritto da Kōtarō Isaka ed è ambientato su un treno proiettile giapponese che viaggia ad alta velocità da Tokyo a Morioka ');
$BulletTrain->setYear(2020);

$NoBody = new Movie('Nobody','Billy MacLellan','Inglese','Hutch Mansell, padre e marito sottostimato e trascurato, è abituato a non reagire a nessuna umiliazione. Quando una notte due ladri irrompono nella sua abitazione in periferia, rifiuta di difendere se stesso o la sua famiglia');
$NoBody->setYear(2021);


echo $BulletTrain->getMovie();
echo $NoBody->getMovie();

/*var_dump($BulletTrain);
var_dump($NoBody);*/


?>