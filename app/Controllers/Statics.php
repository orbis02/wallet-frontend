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
                5 => '{{Today}}'
            ), array(
                0 => HOST,
                1 => isset($_SESSION['full_name']) ? $_SESSION['full_name'] : "Not user define",
                2 => $this->getCombCategories(2),
                3 => $this->getCombCategories(1),
                4 => $this->getCombWalletAccount(),
                5 => date("m/d/Y")
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
        $url = explode('/', $_POST['url']);
        $staticReport = $url[5];

        $arrayParams = array();
        foreach($_POST['data'] as $key => $value){
                $arrayParams[$value['name']] = $value['value'];
        }

        $arrayReports =array(
                                'Balance'   => $this->getBalanceReport($arrayParams),
                                'Panorama'  => $this->getPanoramaReport($arrayParams),
                                'CashFlow'  => $this->getCashFlowReport($arrayParams),
                                'Expenses'  => $this->getExpensesReport($arrayParams),
                                'Credit'    => $this->getCreditReport($arrayParams)
        );
        $arrayTittle =array(
                                'Balance'   => 'Reporte de balance',
                                'Panorama'  => 'Reporte del panorama',
                                'CashFlow'  => 'Reporte de flujo de efectivo',
                                'Expenses'  => 'Reporte de gastos',
                                'Credit'    => 'Reporte de credito'
        );

        return json_encode(array($arrayReports[$staticReport],$arrayTittle[$staticReport]));
    }

    public function getBalanceReport(){

        $categoriesData = new Categories();
        $categories = array();

        $int = 0;
        foreach ($categoriesData->combCategories(1) as $key =>$value){
            $categories[$int] = $value['description'];
            $int++;
        }


        $arrayData = array();
        for ($i =0;$i <10;$i++){
            $arrayData[$i]['name']  = $categories[rand(1,5)];
            $arrayData[$i]['y']     = rand(1,255);
        }

        $sumArray = [];

        foreach ($arrayData as $agentInfo) {

            // create new item in result array if pair 'id'+'name' not exists
            if (!isset($sumArray[$agentInfo['name']])) {
                $sumArray[$agentInfo['name']] = $agentInfo;
            } else {
                // apply sum to existing element otherwise
                $sumArray[$agentInfo['name']]['y'] += $agentInfo['y'];
            }
        }

        // optional action to flush keys of array
        $sumArray = array_values($sumArray);
        return $sumArray;
    }

    public function getPanoramaReport(){

        $categoriesData = new Categories();
        $categories = array();

        $int = 0;
        foreach ($categoriesData->combCategories(1) as $key =>$value){
            $categories[$int] = $value['description'];
            $int++;
        }


        $arrayData = array();
        for ($i =0;$i <10;$i++){
            $arrayData[$i]['name']  = $categories[rand(1,5)];
            $arrayData[$i]['y']     = rand(1,255);
        }

        $sumArray = [];

        foreach ($arrayData as $agentInfo) {

            // create new item in result array if pair 'id'+'name' not exists
            if (!isset($sumArray[$agentInfo['name']])) {
                $sumArray[$agentInfo['name']] = $agentInfo;
            } else {
                // apply sum to existing element otherwise
                $sumArray[$agentInfo['name']]['y'] += $agentInfo['y'];
            }
        }

        // optional action to flush keys of array
        $sumArray = array_values($sumArray);
        return $sumArray;
    }
    public function getCashFlowReport(){

        $categoriesData = new Categories();
        $categories = array();

        $int = 0;
        foreach ($categoriesData->combCategories(1) as $key =>$value){
            $categories[$int] = $value['description'];
            $int++;
        }


        $arrayData = array();
        for ($i =0;$i <10;$i++){
            $arrayData[$i]['name']  = $categories[rand(1,5)];
            $arrayData[$i]['y']     = rand(1,255);
        }

        $sumArray = [];

        foreach ($arrayData as $agentInfo) {

            // create new item in result array if pair 'id'+'name' not exists
            if (!isset($sumArray[$agentInfo['name']])) {
                $sumArray[$agentInfo['name']] = $agentInfo;
            } else {
                // apply sum to existing element otherwise
                $sumArray[$agentInfo['name']]['y'] += $agentInfo['y'];
            }
        }

        // optional action to flush keys of array
        $sumArray = array_values($sumArray);
        return $sumArray;
    }
    public function getExpensesReport(){

        $categoriesData = new Categories();
        $categories = array();

        $int = 0;
        foreach ($categoriesData->combCategories(1) as $key =>$value){
            $categories[$int] = $value['description'];
            $int++;
        }


        $arrayData = array();
        for ($i =0;$i <10;$i++){
            $arrayData[$i]['name']  = $categories[rand(1,5)];
            $arrayData[$i]['y']     = rand(1,255);
        }

        $sumArray = [];

        foreach ($arrayData as $agentInfo) {

            // create new item in result array if pair 'id'+'name' not exists
            if (!isset($sumArray[$agentInfo['name']])) {
                $sumArray[$agentInfo['name']] = $agentInfo;
            } else {
                // apply sum to existing element otherwise
                $sumArray[$agentInfo['name']]['y'] += $agentInfo['y'];
            }
        }

        // optional action to flush keys of array
        $sumArray = array_values($sumArray);
        return $sumArray;
    }
    public function getCreditReport(){

        $categoriesData = new Categories();
        $categories = array();

        $int = 0;
        foreach ($categoriesData->combCategories(1) as $key =>$value){
            $categories[$int] = $value['description'];
            $int++;
        }


        $arrayData = array();
        for ($i =0;$i <10;$i++){
            $arrayData[$i]['name']  = $categories[rand(1,5)];
            $arrayData[$i]['y']     = rand(1,255);
        }

        $sumArray = [];

        foreach ($arrayData as $agentInfo) {

            // create new item in result array if pair 'id'+'name' not exists
            if (!isset($sumArray[$agentInfo['name']])) {
                $sumArray[$agentInfo['name']] = $agentInfo;
            } else {
                // apply sum to existing element otherwise
                $sumArray[$agentInfo['name']]['y'] += $agentInfo['y'];
            }
        }

        // optional action to flush keys of array
        $sumArray = array_values($sumArray);
        return $sumArray;
    }


}