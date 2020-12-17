<?php
require_once 'animal.php';
$sheep = new Animal("shaun","2",'false');

echo $sheep->name . '<br>'; // "shaun"
echo $sheep->legs . '<br>'; // 2
echo $sheep->cold_blooded .'<br>'; // false

// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())