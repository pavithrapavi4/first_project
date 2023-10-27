<?php
class DatabaseConnection {
    private static $instance;
    private $connection;


    private function __construct() {
     
        $this->connection = new PDO('mysql:host=localhost;dbname=mydb', 'username', 'password');
    }


    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new DatabaseConnection();
        }
        return self::$instance;
    }


    public function getConnection() {
        return $this->connection;
    }
}




$dbInstance1 = DatabaseConnection::getInstance();
$dbInstance2 = DatabaseConnection::getInstance();


?>


