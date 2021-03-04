<?php

namespace App;

use PDO;

class Get {

    public static $pdo;
    public static $auth;
    
    public static function getPDO(): PDO
    {
        // !self si sa n'existe pas !!
        if (!self::$pdo){
            self::$pdo = $pdo = new PDO("sqlite:../data.sqlite", null, null, [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]);
        }
        return self::$pdo;
    }

    public static function getAuth(): Auth
    {
        // !self si sa n'existe pas
        if (!self::$auth){
            self::$auth = new Auth(self::getPDO(), '/login.php');
        }
        return self::$auth;
    }
}