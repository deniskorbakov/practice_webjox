<?php

class DB {
  private $host;
  private $username;
  private $password;
  private $database;

  public function __construct() {
    $this->host = 'localhost';
    $this->username = 'root';
    $this->password = '';
    $this->database = 'test2';

    try {
      $conn = new PDO("mysql:host=$this->host;dbname=$this->database", $this->username, $this->password);

      $sql = "SELECT * FROM users";
      $stmt = $conn->prepare($sql);
      $stmt->execute();

      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
      foreach ($result as $row) {
        echo "ID: " . $row['id'] . "<br>";
        echo "Name: " . $row['name'] . "<br>";
        echo "Password: " . $row['password'] . "<br><br>";
      }
    } catch(PDOException $e) {
      echo "Ошибка: " . $e->getMessage();
    }
  }
}

$db = new DB();



