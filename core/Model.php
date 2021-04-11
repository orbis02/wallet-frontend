<?php 

namespace Core;

/**
*  Modelo principal
*/

class Model
{
	
  protected $pdo;

  /**
   * Este método es para definir un arreglo con las diferentes bases de datos, en caso de que se vayan a utilizar.
   */

  public function selectDatabase($db = "Wallet"){

      $connections = array(
          'Wallet' => new \PDO('pgsql:host=localhost;port=5432;dbname=wallet_db', 'postgres','Kiara123', array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION))
      );

    return $connections[$db];

  }

  public function exec($sql){

    try {

        $result_sql = $this->pdo->prepare($sql);
        $result_sql->execute();
        $result = $result_sql->fetchAll(\PDO::FETCH_ASSOC);

      } catch (Exception $e) {
      
        $result = $e;
    }

    return $result;   

  }


}