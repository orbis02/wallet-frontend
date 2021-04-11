<?php

namespace App\Models;

use Core\Model;

class Account extends Model {

    public function __construct(){

        $this->pdo = $this->selectDatabase("Wallet");

    }


    public function newReg($params){

        $sql = "INSERT INTO 
        public.wallet_fund
      (
       
        amount,
        operation,
        id_account,
        status,
        id_category
      )
      VALUES (
      
      
        0$params[amount],
        '$params[operation]',
        0$params[account],
        TRUE,
        0$params[categories]
      )";

       $res = $this->exec($sql);
        /*foreach ($res as &$row) {
            $row['description']   = utf8_encode($row['description']);
           
        }*/
        return  'Ok';

    }

    public function getAccountBalance(){
      $sql = "SELECT 
                  wf.id_account,
                  UPPER(wus.name) as aname,
                  SUM((wf.operation || wf.amount)::numeric) as total
              FROM public.wallet_fund wf
              INNER JOIN public.wallet_account_user wus ON (wus.id_record = wf.id_account)
              WHERE TRUE
                AND wus.id_user = 0$_SESSION[id_record]
                  AND wus.status IS TRUE
              GROUP BY 1,2
              ORDER BY 1";
      
      $res = $this->exec($sql);
      return $res;

    }
   public function getbillsperMonth()
   {
    $sql = "SELECT 
      fc.description as name,
      SUM((wf.amount)::numeric) as y
  FROM public.wallet_fund wf
  LEFT JOIN public.wallet_account_user wus ON (wus.id_record = wf.id_account)
  LEFT JOIN public.fund_category fc ON (wf.id_category = fc.id_record)
  WHERE TRUE
    AND wf.datetime_inserted::DATE BETWEEN get_month_range('S',CURRENT_DATE) AND get_month_range('N',CURRENT_DATE)
    AND wus.id_user = 0$_SESSION[id_record]
      AND wus.status IS TRUE
      AND wf.operation = '-'
  GROUP BY 1
  ORDER BY 1";

$res = $this->exec($sql);
   foreach ($res as &$row) {
            $row['y']   = (int)$row['y'];
           
        }
return $res;

   }


   public function getbillsperMonthperAcount()
   {
    $sql = "SELECT 
      UPPER(wus.description) as name,
      SUM((wf.amount)::numeric) as y
  FROM public.wallet_fund wf
  LEFT JOIN public.wallet_account_user wus ON (wus.id_record = wf.id_account)
  LEFT JOIN public.fund_category fc ON (wf.id_category = fc.id_record)
  WHERE TRUE
    AND wf.datetime_inserted::DATE BETWEEN get_month_range('S',CURRENT_DATE) AND get_month_range('N',CURRENT_DATE)
    AND wus.id_user = 0$_SESSION[id_record]
      AND wus.status IS TRUE
      AND wf.operation = '-'
  GROUP BY 1
  ORDER BY 1";

$res = $this->exec($sql);
   foreach ($res as &$row) {
            $row['y']   = (int)$row['y'];
           
        }
return $res;
   }

   public function getIncomeperCategiries()
   {
    $sql = "SELECT 
    fc.description as name,
     SUM((wf.operation || wf.amount)::numeric) as data
  FROM public.wallet_fund wf
  LEFT JOIN public.wallet_account_user wus ON (wus.id_record = wf.id_account)
  LEFT JOIN public.fund_category fc ON (wf.id_category = fc.id_record)
  WHERE TRUE
    AND wf.datetime_inserted::DATE BETWEEN get_month_range('S',CURRENT_DATE) AND get_month_range('N',CURRENT_DATE)
    AND wus.id_user = 0$_SESSION[id_record] 
      AND wus.status IS TRUE
      AND wf.operation = '+'
  GROUP BY 1
  ORDER BY 1";

$res = $this->exec($sql);
 foreach ($res as &$row) {
          $row['data']   = (float)$row['data'];
         
      }
return $res;
   }
  }