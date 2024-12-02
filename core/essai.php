<?php
include "./autoLoader.php";
 
abstract class DAO implements CRUDInterface, RepositoryInterface {
    static private $PDO;
 
    function __construct() {
        $content = file_get_contents($_SERVER["DOCUMENT_ROOT"] . "/config/database.json");
        $objectContent = json_decode($content);
        self::$PDO = new PDO(
            "{$objectContent->driver}:host={$objectContent->host};port={$objectContent->port};dbname={$objectContent->dbname};charset=utf8",
            $objectContent->username,
            $objectContent->password
        );
    }
 
    protected function getPdo(): PDO {
        return self::$PDO;
    }
}