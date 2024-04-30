<?php

namespace App\Utils;

use PDO;

/**
 * Class DB
 * Manages database connections and queries using PDO.
 */
class DB
{
    /**
     * @var DB|null Database instance.
     */
    private static $instance;

    /**
     * @var PDO Database connection object.
     */
    private $pdo;

    /**
     * DB constructor.
     * Private constructor to prevent creating multiple instances.
     */
    private function __construct()
    {
        $dsn = 'mysql:dbname=phptest;host=127.0.0.1';
        $user = 'root';
        $password = '';
        $this->pdo = new PDO($dsn, $user, $password);
    }

    /**
     * Gets the instance of DB.
     * @return DB Instance of DB.
     */
    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * Executes a SELECT query.
     * @param string $sql The SQL query.
     * @param array $params Optional parameters for prepared statement.
     * @return array|null An array containing all rows or null on failure.
     */
    public function select($sql, $params = [])
    {
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
