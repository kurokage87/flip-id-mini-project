<?php 
class Database{
 
    private static $host = "localhost";
    private static $db_name = "test_flip";
    private static $username = "root";
    private static $password = "";
    public static $conn;
 
    public function getConnection(){
        if(!isset(self::$conn)) {
            $pdo_opt[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            self::$conn = new PDO(
                'mysql:host='.self::$host.';dbname='.self::$db_name, self::$username, self::$password, $pdo_opt
            );
            return self::$conn;
        }
    }
}

 ?>