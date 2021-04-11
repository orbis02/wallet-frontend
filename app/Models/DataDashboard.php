<?php

namespace App\Models;

use Core\Model;

class DataDashboard extends Model {

    public function __construct(){

        $this->pdo = $this->selectDatabase("Wallet");

    }




    public function getWalletAmount(){
        $sql = "SELECT 
        sum((wf.operation||wf.amount)::numeric) as total
        FROM 
          public.wallet_fund wf
          INNER JOIN public.wallet_account_user wus ON wus.id_record=wf.id_account
          WHERE wus.id_user=0$_SESSION[id_record]
          AND wus.status=TRUE;";
        $res = $this->exec($sql);
        $res =number_format((float)$res[0]['total'],2,",",".");
        return  $res;

    }

}