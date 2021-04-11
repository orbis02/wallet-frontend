<?php 

namespace App\Controllers;

use Core\Controller;
use App\Models\User;



class Index extends Controller {

	function __construct(){

		parent::__construct();

	}

	public function Main($params = array()){



				$this->view->setValues(array(
					0 => '{{Host}}'
				), array(
					0 => HOST
				));

				return $this->view->setView(	
					array( 
						'Landig/View.Header',
						'Landig/View.Body',
						'Landig/View.Footer'
					)
				);

	}

	public function login(){
        $userInformation = new User();
        $userResult = $userInformation->loginUser($_POST);

        //SE ENCONTRO REGISTRO
        if (count($userResult)>0){
            //ESTA ACTIVO
            if ($userResult[0]['status'] == true){

                session_destroy();
                session_start();
                foreach ($userResult[0] as $key => $value){
                    $_SESSION[$key] = $value;
                }
                header('location:' . HOST.'Dashboard');
                return 'Ok';

            }
        }
        header('location:' . HOST);
        return 'Ok';




    }

    public function Logout(){
        session_destroy();
        header('location:' . HOST);
    }
    


}