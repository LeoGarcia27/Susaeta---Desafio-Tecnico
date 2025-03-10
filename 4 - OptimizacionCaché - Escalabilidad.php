<?php
$redis = new Redis();
$redis->connect('localhost', 5000);

$redis->set('libros_populares', json_encode($libros_populares)); // Aqui indicamos el almacen de resultados en caché para los libros populares 

$libros_populares = json_decode($redis->get('libros_populares'), true); // Aqui recuperamos los resultados de los libros populares

// Marvin Leonel Garcia Lemus
// leogarcia0027@gmail.com
// Desafio Tecnico Susaeta - Optimización Caché