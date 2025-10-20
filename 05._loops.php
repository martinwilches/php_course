<?php

// ciclo for
for ($x = 0; $x <= 10; $x++) {
    // echo $x;
}

// ciclo while
$x = 5;
while($x <= 50) {
    // echo "Number $x";
    // echo '<br>';
    // $x++;
}

// ciclo do while // se ejecuta al menos una vez
$y = 5;
do {
    // echo $y;
    // $y++;
} while($y < 5);

// ciclo foreach
$posts = ['First post', 'Second post'];

foreach($posts as $post) {
    // echo $post;
    // echo '<br>';
}

// iterar un arreglo asociativo a traves de un foreach
$person = [
    'name' => 'Martin',
    'age' => 31
];

foreach($person as $key => $data) {
    echo $key . ' - ' . $data;
    echo '<br>';
}
