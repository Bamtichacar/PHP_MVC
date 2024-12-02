<?php
class DefaultDAO extends DAO implements CRUDInterface, RepositoryInterface {
// implementation des interfaces
    public function retrive($id){}
    public function create($array){}
    public function update($id){}
    public function delete($id){}

    public function getAll(){
            $pdo = $this->getPdo();
            $stmt = $pdo->query("SELECT * FROM animaux");
            $results = $stmt->fetchAll(PDO::FETCH_CLASS);
            //echo "Table: $tableName\n<br>";
            return $results;
    }

    public function getAllby($filter){}
            
    }






