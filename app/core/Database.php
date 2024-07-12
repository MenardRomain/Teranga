<?php
namespace App\Core;

use PDO;
use PDOException;

class Database
{
    private static $instance;
    
    public static function getInstance()
    {
        if (self::$instance === null) {
            $config = App::get('config')['database'];

            try {
                self::$instance = new PDO(
                    $config['connection'] . ';dbname=' . $config['name'],
                    $config['username'],
                    $config['password'],
                    $config['options']
                );
            } catch (PDOException $e) {
                die($e->getMessage());
            }
        }

        return self::$instance;
    }
}
