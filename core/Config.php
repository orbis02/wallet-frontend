<?php

/**
 * Definiendo el archivo HOST, de modo de que todas las peticiones se realicen a esta ruta.
 */

if (DEV_MODE == TRUE)
    $host = 'http://localhost:8080/Wallet/';
else 
    $host = '';

define('HOST', $host);