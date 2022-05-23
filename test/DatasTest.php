<?php

include_once('src/includes/datas.php');


$datas = new Datas();

// $datas->insertEmployees('Penge László', 'Szeged', 385);

$employeeArray = $datas->getEmployees();

echo $employeeArray[0]->name;