<?php 
namespace App;

class auth{

    private $pdo;

    public function __construct(\PDO $pdo){
        $this->pdo = $pdo;
    }

    public function user(){

    }

    public function login(string $username, string $password){
        
    }

}
?>