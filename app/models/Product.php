<?php

namespace app\models;

use PDO;

class Product
{
    public static function getAll()
    {
        /**
         * Obviously, this is a very unsafe way to get DB creds, but this is done
         * for the sake of simplicity.
         */
        $host = 'localhost';
        $dbname = 'scandi';
        $username = 'root';
        $password = '';

        try {
            $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",
                          $username, $password);

            $stmt = $db->query('SELECT * FROM products');
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $results;
            
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}