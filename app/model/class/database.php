<?php 
namespace App\model;
class Database{
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "cogipdb";


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