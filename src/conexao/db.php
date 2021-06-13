<?php
namespace Church\conexao;

use PDO;

class db{

    private $conexao;

    public function __construct()
    {
        $this->conexao = new PDO("mysql:dbname=igreja_db;host=localhost", "root", "");
    }

    private function paramter($statement, $parameters = array()){

        foreach ($parameters as $key => $value) {
			$this->setParam($statement, $key, $value);
		}
    }

    private function setParam($statement, $key, $value){

		$statement->bindParam($key, $value);

	}


    public function query($query,$param= array()){
        $stm = $this->conexao->prepare($query);
        $this->paramter($stm,$param);
        $stm->execute();
        return $stm;
    }

    public function select($query,$param= array()){

        $stmt = $this->query($query,$param);
        
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}