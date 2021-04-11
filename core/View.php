<?php 

namespace Core;

class View {

	protected $values;
	
	public function setValues($keys = array(), $values = array()){

   	foreach ($keys as $key => $row) {

   		$this->values[$row] = $values[$key];


   	}

   }

	public function showView($views = array(), $params = array()){

		$content = '';

		foreach ($views as $view) {

			$file = 'app/Views/' . $view . '.php';

			if (!empty($this->values)){
				 
				$content .= str_replace(array_keys($this->values), array_values($this->values), file_get_contents($file)); 
			
			} else {
				
				(!empty($params) ? extract($params) : "");
				$content .= file_get_contents($file);
			
			}

		}

		return $content;

	}

	public function setView($views, $params = array()){

		$values = (is_array($views) ? $views : array($views));

			foreach ($values as $value) {

				if (!file_exists('app/Views/' . $value  . '.php'))
					die('Specified file does not exists.');
			}

		return $this->showView($values, $params);

	}

}