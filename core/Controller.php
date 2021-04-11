<?php 

namespace Core;
use Core\View;

/**
 * Controlador principal de la aplicación.
 */
class Controller {

	public $model;
	public $view;

   /**
	* Definiendo el Modelo y la Vista principal.
	*/
	function __construct(){

		$this->view = new View();

	}

	public function toDate($dte = ""){

		$date = new DateTime($dte);

		return $date->format('d/m/Y');

	}

}