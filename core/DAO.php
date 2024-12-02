<?php
use PDO;
abstract class DAO implements CRUDInterface, RepositoryInterface {
    static private $PDO;
    function __construct() {
/*         $DS = DIRECTORY_SEPARATOR;
        $directory = explode ($DS, __DIR__);*/
        $content = file_get_contents($_SERVER['DOCUMENT_ROOT']."config/database.json");
        $objectcontent=json_decode($content);
        $this->pdo = new PDO("{$objectcontent->driver}:dbname={$objectcontent->dbname};host={$objectcontent->host};port={$objectcontent->port};charset=utf8", 
        "{$objectcontent->username}", 
        "{$objectcontent->password}");



/*         $this->pdo = new PDO("{$objectcontent->driver}:
                              {$objectcontent->host};
                              dbname={$objectcontent->dbname};
                              charset=utf8,
                              {$objectcontent->username},
                              {$objectcontent->password}");
Dans le code PHP, les virgules sont utilisées pour séparer les différents arguments passés à une fonction ou à un constructeur. Dans votre exemple, la fonction new PDO prend plusieurs arguments :
La chaîne de connexion : "{$objectcontent->driver}:dbname={$objectcontent->dbname};host={$objectcontent->host};port={$objectcontent->port}"
Le nom d'utilisateur : "{$objectcontent->username}"
Le mot de passe : "{$objectcontent->password}"
Les virgules permettent de distinguer ces arguments les uns des autres. Voici comment cela fonctionne dans votre code :
Explication des arguments :
Premier argument : La chaîne de connexion qui contient le type de base de données, le nom de la base de données, l'hôte et le port.
Deuxième argument : Le nom d'utilisateur pour se connecter à la base de données.
Troisième argument : Le mot de passe pour se connecter à la base de données.
Les virgules sont donc essentielles pour séparer ces différents paramètres et permettre à la fonction PDO de les interpréter correctement.
Dans votre code PHP, les points-virgules (;) sont utilisés pour séparer les différents paramètres dans la chaîne de connexion PDO. Voici une explication détaillée :

Utilisation des points-virgules dans la chaîne de connexion PDO
Les points-virgules sont utilisés pour séparer les différents éléments de la chaîne de connexion, qui inclut :
Le type de base de données (driver)
Le nom de la base de données (dbname)
L'hôte (host)
Le port (port)
Exemple détaillé :
{$objectcontent->driver} : Le type de base de données (par exemple, mysql).
dbname={$objectcontent->dbname} : Le nom de la base de données.
host={$objectcontent->host} : L'adresse de l'hôte (par exemple, localhost).
port={$objectcontent->port} : Le numéro de port utilisé pour la connexion.
Les points-virgules (;) séparent ces différents paramètres dans la chaîne de connexion, permettant à PDO de les interpréter correctement.
Dans votre code PHP, les deux-points (:) sont utilisés pour séparer le type de base de données (driver) des autres paramètres dans la chaîne de connexion PDO. Voici une explication détaillée :

Utilisation des deux-points dans la chaîne de connexion PDO
Les deux-points (:) sont utilisés pour indiquer le début des paramètres spécifiques à la base de données après avoir spécifié le type de base de données. Voici comment cela se présente dans votre code :
    Exemple détaillé :
{$objectcontent->driver} : Le type de base de données (par exemple, mysql).
: : Sépare le type de base de données des autres paramètres.
dbname={$objectcontent->dbname} : Le nom de la base de données.
host={$objectcontent->host} : L'adresse de l'hôte (par exemple, localhost).
port={$objectcontent->port} : Le numéro de port utilisé pour la connexion.
Pourquoi les deux-points sont importants :
Séparation claire : Ils indiquent où commence la liste des paramètres spécifiques à la base de données.
Syntaxe correcte : Sans les deux-points, PDO ne pourrait pas interpréter correctement la chaîne de connexion, ce qui entraînerait des erreurs.
Les deux-points sont donc essentiels pour structurer correctement la chaîne de connexion et permettre à PDO de comprendre quel type de base de données utiliser et quels paramètres appliquer.

LE PORT N EST PAS OBLIGATOIRE A NOTER ICI CAR C EST TJS LE MEME PORT

$this->pdo = new PDO("{$objectcontent->driver}:dbname={$objectcontent->dbname};host={$objectcontent->host};port={$objectcontent->port}", 
                     "{$objectcontent->username}", 
                     "{$objectcontent->password}");

il peut être très pertinent d'ajouter charset=utf8 à votre chaîne de connexion PDO, surtout si vous travaillez avec des bases de données qui contiennent des caractères spéciaux ou des textes multilingues. Cela garantit que la connexion utilise l'encodage UTF-8, ce qui est essentiel pour éviter les problèmes de caractères.

Voici comment vous pouvez modifier votre chaîne de connexion pour inclure charset=utf8 :
    $this->pdo = new PDO("{$objectcontent->driver}:dbname={$objectcontent->dbname};host={$objectcontent->host};port={$objectcontent->port};charset=utf8", 
                     "{$objectcontent->username}", 
                     "{$objectcontent->password}");Explication :
charset=utf8 : Ajoute le paramètre de jeu de caractères UTF-8 à la chaîne de connexion, garantissant que toutes les communications avec la base de données utilisent cet encodage.
Ajouter charset=utf8 est une bonne pratique pour assurer la compatibilité et éviter les problèmes liés aux caractères spéciaux.
Exemple complet :
$this->pdo = new PDO("{$objectcontent->driver}:dbname={$objectcontent->dbname};host={$objectcontent->host};port={$objectcontent->port};charset=utf8", 
                     "{$objectcontent->username}", 
                     "{$objectcontent->password}");


 */
          
 

    }
 

    
    


    

    protected function getpdo() : PDO{
        return DAO :: $PDO;
    }

}
