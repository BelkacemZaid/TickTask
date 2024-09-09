<?php

class Database extends PDO{

    static Database $db;

    public function __construct() {
        self::$db = parent::__construct("mysql:host=localhost;dbname=nom_base", 'utilisateur', 'mot_de_passe');
    }    
    
}

?>