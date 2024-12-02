<?php
include './autoLoader.php';
//use PDO;
abstract class DAO implements CRUDInterface, RepositoryInterface {
    static private $pdo;
    function __construct() {
/*         $DS = DIRECTORY_SEPARATOR;
        $directory = explode ($DS, __DIR__);*/
        $content = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/config/database.json");
        $objectcontent=json_decode($content);
        self::$pdo = new PDO("{$objectcontent->driver}:dbname={$objectcontent->dbname};host={$objectcontent->host};port={$objectcontent->port};charset=utf8", 
        "{$objectcontent->username}", 
        "{$objectcontent->password}");
        echo "{$objectcontent->dbname}";
    }   
        protected function getPdo() : PDO{
         return self :: $pdo;
        }
 
}
