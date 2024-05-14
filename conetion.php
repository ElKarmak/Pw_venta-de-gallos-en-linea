<?php
class Database
{

  private static $host = "localhost";
  private static $db_name = "tienda";
  private static $username = "victor";
  private static $password = "manuel123";
  public static $conection;


public static function query(string $query){
  $instance = self::get_instance();
  return $instance->query($query);
}

  public static function get_instance()
  {
    try {
      if (!self::$conection) {
        self::$conection = new mysqli(self::$host, self::$username, self::$password, self::$db_name);
      }
      return self::$conection;
    } catch (Exception $th) {

      echo "Error" . $th->getMessage();
    }
  }
}


Database::get_instance();
