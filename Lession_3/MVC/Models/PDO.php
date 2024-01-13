<?php
require_once "env.php";
class Environment
{
  public static function connectDB()
  {
    try {
      $conn = new PDO("mysql:host=" . SERVERNAME . ";dbname=" . DBNAME . ";charset=" . CHARSET, USERNAME, PASSWORD);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      // echo "Connected successfully";
      return $conn;
    } catch (PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
      return null;
    }
  }
  public static function dataProcess($query, $getAll = true)
  {
    
    $conn = Environment::connectDB();
    // var_dump ($conn);
    $stmt = $conn->prepare($query);
    $stmt->execute();
    if ($getAll) {

      return $stmt->fetchAll();
    }
    return $stmt->fetch();
  }
}

