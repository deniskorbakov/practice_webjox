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

  }

  public function get() {
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

  public function create($database) {
    try {
      $conn = new PDO("mysql:host=$this->host", $this->username, $this->password);

      $sql = "CREATE DATABASE $database";
      $conn->exec($sql);

      $conn->exec("USE $this->database");

      $sql = "CREATE TABLE IF NOT EXISTS users (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(30) NOT NULL,
        email VARCHAR(50) NOT NULL,
        password VARCHAR(255) NOT NULL
      )";

      $conn->exec($sql);

      echo "Таблица $database успешно создана!";

    } catch(PDOException $e) {
      echo "Ошибка: " . $e->getMessage();
    }
  }
}

$db = new DB();
$db->create("ggf1");
echo "<br><br>";
$db->get();


