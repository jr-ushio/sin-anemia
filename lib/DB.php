<?php

/**
 *
 */
class DB
{

  private function __construct(){}

  public static function query($sql, $params = [])
  {
    $statement = static::conection()->prepare($sql);
    $statement->execute($params);
    $result = $statement->fetch();

    return $result;
  }
  public static function conection()
  {
    // return new PDO("mysql:host=localhost;dbname=test","root","");
  }
}
