<?php

namespace App;
use PDO;
use PDOException;

class db{

  public  $host = 'localhost';
  public $db = 'oop_crud';
  public $user = 'root';
  public $password = '';
  public $pdo;

  public function __construct(){
    $dsn = "mysql:host=$this->host;dbname=$this->db;charset=UTF8";

try {
	$pdoOBJ = new PDO($dsn, $this->user, $this->password);

	if ($pdoOBJ) {
		// echo "Connected to the database successfully!";
        $this->pdo=$pdoOBJ;
	}
} catch (PDOException $e) {
	echo $e->getMessage();
}
  }
}

//  $db= new db;

?>