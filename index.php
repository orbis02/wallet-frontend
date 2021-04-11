<?php

session_start();

define('DEV_MODE', TRUE);

/**
 * Incluyendo el archivo que tiene la configuracion del Host
 */
include_once 'core/Config.php';

/**
 * Incluyendo el archivo que tiene la configuracion de arranque
 */
include_once 'Bootstrap.php';