<?php

namespace App\Models;

use Core\Model;

class User extends Model {

    public function __construct(){

        $this->pdo = $this->selectDatabase("Wallet");

    }


    public function loginUser($params){

        $sql = "SELECT 
                  id_record,
                  firstname,
                  lastname,
                  INITCAP(get_short_name(id_record)) as full_name,
                  account,
                  password,
                  status
                FROM 
                  public.wallet_user 
                WHERE TRUE
                    AND account  = '$params[user]'
                    AND password = '$params[pass]'
                    AND status IS TRUE";

        $res = $this->exec($sql);
        foreach ($res as &$row) {
            $row['firstname']   = utf8_encode($row['firstname']);
            $row['lastname']    = utf8_encode($row['lastname']);
            $row['full_name']   = utf8_encode($row['full_name']);
        }
        return $res;

    }

    public function getWalletAccount(){
        $sql = "SELECT 
                    id_record,
                    name,
                    description,
                    datetime_inserted  
                FROM 
                    public.wallet_account_user 
                WHERE TRUE
                    AND id_user = 0$_SESSION[id_record]
                    AND status IS TRUE;";
        $res = $this->exec($sql);
        return $res;

    }

}