<?php

require_once __DIR__ . "/Models/Product.php";
require_once __DIR__ . "/Models/Food.php";
require_once __DIR__ . "/Models/Toy.php";
require_once __DIR__ . "/Models/Category.php";
require_once __DIR__ . "/Models/Bed.php";

$categoryForDog = new Category('Cane', 'dog.png');
$categoryForCat = new Category('Gatto', 'cat.png');

$products = [
    new Food('Tonno in Scatola', $categoryForCat, 3.50, 40 , '01-01-2037'),
    new Food('MioCane', $categoryForDog, 19.90, 75, '2088-01-01'),
    new Toy('Osso Giocattolo', $categoryForDog, 9.50, 20, 5 . ' cm', 30 . ' cm'),
    new Bed('Cuccia XXL', $categoryForDog, 99.99, 5, 'XXL'),
    new Food('Pollo in Salsa', $categoryForDog, 4.50, 25, '01-01-2039'),
    new Toy('Corda da Masticare', $categoryForDog, 7.25, 18, 20 . ' cm', 2 . ' cm'),
new Bed('Lettiera per Gatto', $categoryForCat, 9.90, 50, 'L'),
    new Bed('Cuccia Ergonomica', $categoryForCat, 89.99, 8, 'M'),
    new Toy('Pallina da Tennis', $categoryForDog, 5.75, 15, 3 . ' cm', 3 . ' cm'),
];

// $prod1 = new Product('MioCane', $categoryForDog, 19.90, 75);
// $prod2 = new Food('MioGatto', $categoryForCat, 3.50, 40 , '01-01-2037');
// $prod3 = new Toy('Osso Giocattolo', $categoryForDog, 9.50, 20, 5 . ' cm', 30 . ' cm');
// $prod4 = new Bed('Cuccia XXL', $categoryForDog, 99.99, 5, 'XXL');

// var_dump($prod1);
// var_dump($prod2);
// var_dump($prod3);
// var_dump($prod4);

// var_dump($products);