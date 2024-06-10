<?php

class Database
{
  private $host = 'localhost';
  private $username = 'root';
  private $password = '';
  private $database = 'db_matkul_backendweb';
  protected $con;

  public function __construct()
  {
    return $this->con = mysqli_connect(
      $this->host,
      $this->username,
      $this->password,
      $this->database
    );
  }
}
