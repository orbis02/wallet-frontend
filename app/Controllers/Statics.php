<?php

namespace App\Controllers;

use App\Models\Account;
use App\Models\Categories;
use App\Models\DataDashboard;
use Core\Controller;
use App\Models\User;


class Statics extends Controller {

    function __construct(){

        parent::__construct();

    }

    public function Main($params = array()){


        if(isset($_SESSION['full_name'])){

            $this->view->setValues(array(
                0 => '{{Host}}',
                1 => '{{User}}',
                2 => '{{combCategoriesInc}}',
                3 => '{{combCategoriesBil}}',
                4 => '{{userAccount}}'
            ), array(
                0 => HOST,
                1 => isset($_SESSION['full_name']) ? $_SESSION['full_name'] : "Not user define",
                2 => $this->getCombCategories(2),
                3 => $this->getCombCategories(1),
                4 => $this->getCombWalletAccount()
            ));

            return $this->view->setView(
                array(
                    'Statics/View.Header',
                    'Statics/View.Sidebar',
                    'Statics/View.Body',
                    'Statics/View.Footer'
                )
            );

        }else{
            //es necesario colocar la pagina de error BONITO
            header('location:' . HOST);
            return 'Por favor logearse';
        }


    }

    public function getCombCategories($categorieType){
        $categoriesInfo = New Categories();

        $selectOpt = '';
        foreach($categoriesInfo->combCategories($categorieType) as $key => $value){
            $selectOpt.=' <option value="'.$value['id_record'].'">'.$value['description'].'</option>';
        }
        return $selectOpt;


    }


    public function getCombWalletAccount(){
        $userInformation = New User();

        $selectOpt = '';
        foreach($userInformation->getWalletAccount()  as $key => $value){
            $selectOpt.=' <option value="'.$value['id_record'].'">'.$value['description'].'</option>';
        }
        return $selectOpt;

    }


    public function newReg()
    {
        $accountInformation = New Account();
        return json_encode($accountInformation->newReg($_POST['data']));

    }

    public function getStatics(){
        return json_encode(var_dump($_POST));
    }



}