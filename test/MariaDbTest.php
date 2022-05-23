<?php
include_once('src/includes/mariadb.php');

echo 'kapcsolat teszt....';
$mariadb =new Mariadb();
$con = $mariadb->connectDb();
$mariadb->closeDb();
echo 'kapcsolat teszt vége';