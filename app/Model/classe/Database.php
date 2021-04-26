<?php 
namespace App\model\classe;

use App\model\Invoice;

class Database {
    private $host = "sql106.epizy.com";
    private $username = "epiz_28475251";
    private $password = "JNLor9Vq05LOMs";
    private $dbname = "epiz_28475251_adriencalckcogip";


    protected function connect()
    {
         try{
            $dsn = 'mysql:host='.$this->host.';dbname='.$this->dbname;
            $connect = new \PDO($dsn,$this->username,$this->password);
            $connect->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE,\PDO::FETCH_ASSOC);
            $connect->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            
        }catch(\Exception $e){

            die('error : '.$e->getMessage());
        }
        return $connect;
    }
}
?>