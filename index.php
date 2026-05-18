<?php

$users = [
  ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB'],
];

$saluto = "Buongiorno". " " . $users[0]['name'] . " " . $users[0]['surname'];

echo $saluto;