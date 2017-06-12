<?php
namespace core\lib;

class model extends \PDO
{
    public function __construct()
    {
        $dsn='mysql:host=127.0.0.1;dbname=myrhb';
        $username='root';
        $password='root';
        try {
            parent::__construct($dsn, $username, $password);
        } catch (\PDOException $e) {
            p($e->getMessage());
        }
    }
}
