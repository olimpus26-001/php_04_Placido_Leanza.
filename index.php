<?php

$users = [
  ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB'],
  ['name' => 'Priscilla', 'surname' => 'Malcontenta', 'gender' => 'S'],
  ['name' => 'James', 'surname' => 'Potter', 'gender' => 'M']
];

foreach ($users as $user) {
  if ($user['gender'] == 'M') {
    echo "buongiorno signor " . $user['name'] . " " . $user['surname'] . "\n";

  }elseif($user['gender'] == 'S'){
    echo "buongiorno signora " . $user['name'] . " " . $user['surname'] . "\n";

  }elseif ($user['gender'] == 'NB') {
    echo "buongiorno " . $user['name'] . " " .  $user['surname'] . "\n";
  }
  
};