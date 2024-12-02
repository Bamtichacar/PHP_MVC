<?php
class DefaultDAO extends DAO implements CRUDInterface, RepositoryInterface {
// implementation des interfaces
    public function retrive($id){}
    public function create($array){}
    public function update($id){}
    public function delete($id){}

    public function getAll(){}
    public function getAllby($filter){}

    function __construct() {

        $this->pdo = new PDO("{$objectcontent->driver}:dbname={$objectcontent->dbname};host={$objectcontent->host};port={$objectcontent->port};charset=utf8", 
        "{$objectcontent->username}", 
        "{$objectcontent->password}");    
        }
    
        protected function getpdo() : PDO{
            return DAO :: $PDO;
        }
    
    }
    

