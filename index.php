<?php
//autoloader
spl_autoload_register(function ($class) {
    include $class . '.php';
});

//soal Release 0
$sheep = new Animal("shaun");

echo $sheep->name . '<br>'; // "shaun"
echo $sheep->legs . '<br>'; // 2
var_dump ($sheep->cold_blooded) .'<br>'; // false

// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())

echo '<br>';
echo '<br>';
//soal Release 1

$sungokong = new Ape("kera sakti");
$sungokong->yell(); // "Auooo"
echo '<br>';
$kodok = new Frog("buduk");
$kodok->jump() ; // "hop hop"
echo '<br>';
echo $kodok->legs;
