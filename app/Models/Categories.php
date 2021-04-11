<?php

namespace App\Models;

use Core\Model;

class Categories extends Model {

    public function __construct(){

        $this->pdo = $this->selectDatabase("Wallet");

    }


    public function combCategories($categoryType){

        $sql = "SELECT 
                    id_record,
                    description                
                FROM 
                    public.fund_category 
                WHERE TRUE
                    AND id_category_type = $categoryType";

        $res = $this->exec($sql);
        /*foreach ($res as &$row) {
            $row['description']   = utf8_encode($row['description']);
           
        }*/
        return $res;

    }

}