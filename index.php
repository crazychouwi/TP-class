<?php
require_once("boisson.php");

$vodka = new Boisson();
var_dump($vodka);
$vodka->setPrice(15);
$vodka->setColor("no color");
$vodka->setBrand("Smirnoff");
var_dump($vodka);

$eau = new Boisson();
var_dump($eau);
$eau->setPrice(15);
$eau->setColor("no color");
$eau->setBrand("Smirnoff");
var_dump($eau);

$champagne = new Boisson();
var_dump($champagne);
$champagne->setPrice(32);
$champagne->setColor("ambre");
$champagne->setBrand("Tsarine");
var_dump($champagne);

$biere = new Boisson();
var_dump($biere);
$biere->setPrice(12);
$biere->setColor("brune");
$biere->setBrand("liedermann");
var_dump($biere);


 ?>
