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
                4 => '{{userAccount}}',
                5 => '{{TotalAmount}}',
                6 => '{{AccountInformation}}'
            ), array(
                0 => HOST,
                1 => isset($_SESSION['full_name']) ? $_SESSION['full_name'] : "Not user define",
                2 => $this->getCombCategories(2),
                3 => $this->getCombCategories(1),
                4 => $this->getCombWalletAccount(),
                5 => $this->getTotalWalletAmount(),
                6 => $this->getAccounts()
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

    public function getTotalWalletAmount()
    {

        $amountInformation = New DataDashboard();
        return json_encode($amountInformation->getWalletAmount());

    }


    public function newReg()
    {
        $accountInformation = New Account();
        return json_encode($accountInformation->newReg($_POST['data']));


    }

    public function getAccounts(){

        $accountInformation = New Account();

        $accountDashboardData = '';
        foreach($accountInformation->getAccountBalance() as  $key => $value){
            $accountDashboardData.= '<div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="card card-stats">
                                            <div class="card-header card-header-success card-header-icon">
                                                <div class="card-icon">
                                                    <i class="material-icons">attach_money</i>
                                                </div>
                                                <p class="card-category">'.$value['aname'].'</p>
                                                <h3 class="card-title">$'.number_format((float)$value['total'],2,",",".").'</h3>
                                            </div>
                                            <div class="card-footer">
                                                <div class="stats">
                                                    <!--<i class="material-icons text-success">add</i>
                                                    <a href="javascript:void(0);" class="addFund">Agregar Registro</a>-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
        }
        return $accountDashboardData;


    }

    public function getbillsperMonth()
    {
        $accountInformation = New Account();
        return json_encode($accountInformation->getbillsperMonth());
    }
    public function getbillsperMonthperAcount()
    {
        $accountInformation = New Account();
        return json_encode($accountInformation->getbillsperMonthperAcount());
    }

    public function getIncomeperCategiries()
    {
        $accountInformation = New Account();
        return json_encode($accountInformation->getIncomeperCategiries());
    }

}