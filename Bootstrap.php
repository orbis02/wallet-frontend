<?php 

/**
 * Incluyendo el archivo que enrutará la peticion
 */

include_once 'vendor/autoload.php';

/**
 * Obteniendo la URL de la direccion a la cual se esta haciendo la peticion
 */

$request_url = $_SERVER['REQUEST_URI'];

/**
 * Rompiendo la URL y convirtiendola en un array
 */

$url = explode('/', $request_url);

/**
 * @param array // Arreglo de la URL
 * @param array // Arreglo del POST
 */

Core\Router::dispatch($url);