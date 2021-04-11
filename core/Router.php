<?php

namespace Core;

class Router  {

  static function dispatch($params){

      unset($params[0]);
      unset($params[1]);
      (!isset($params[2])? $default_controller = 'Index' : ($params[2] == "" ? $default_controller = 'Index' : $default_controller = ucfirst($params[2])));
      (!isset($params[3])? $method = NULL : $method = $params[3]);

      /**
       * Verificando si la clase existe
       */

      $namespace = 'App\\Controllers\\' . $default_controller;

      if (class_exists($namespace))
        $controller = new $namespace();
      else 
        $controller = new \App\Controllers\Index();

      /**
       * Verificando si el método existe
       */

      if (method_exists($controller, $method))
          echo $controller->$method($params);
      else 
          echo $controller->Main($params);
          
  }

}