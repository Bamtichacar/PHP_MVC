<?php
class DefaultDAO extends DAO implements CRUDInterface, RepositoryInterface {
// implementation des interfaces
    public function retrive($id){}
    public function create($array){}
    public function update($id){}
    public function delete($id){}

    public function getAll(){}
    public function getAllby($filter){}


    
/*     function __construct() {
        $content = file_get_contents($_SERVER['DOCUMENT_ROOT']."config/database.json");
        $objectcontent=json_decode($content);
        $this->pdo = new PDO("{$objectcontent->driver}:dbname={$objectcontent->dbname};host={$objectcontent->host};port={$objectcontent->port};charset=utf8", 
        "{$objectcontent->username}", 
        "{$objectcontent->password}");
    }
 */            
/*     protected function getpdo() : PDO{
            return DAO :: $pdo;
    }
 */    
    
    public function myMethod() {
        $pdo = $this->getpdo();
        // Utilisez $pdo pour interagir avec la base de données
    }

}