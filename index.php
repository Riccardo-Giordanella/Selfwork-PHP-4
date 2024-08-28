<?php

$users = [
  ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'male'],
  ['name' => 'Anna', 'surname' => 'Ciaone', 'gender' => 'female' ],
  ['name' => 'Andrea', 'surname' => 'Andrei', 'gender' => 'n-binary']
];

foreach($users as $user){
  if($user['gender'] == 'male'){
    echo "Buongiorno Sig. {$user['name']} {$user['surname']}\n";
  }elseif($user['gender'] == 'female'){
    echo "Buongiorno Sig.ra {$user['name']} {$user['surname']}\n";
  }else{
    echo "Buongiorno {$user['name']} {$user['surname']}\n";
  }
}

?>