<?php 

require_once __DIR__."/../configs/database.php";

class BooksModel {

  private Database $db;
  private PDO $pdo  ;
 
  public function __construct(){

    $this->db = new Database();
    $this->pdo = $this->db->getPDO();;
  }

  /**
   * Kembalikan semua data dama bentuk array asosiatif
   */
  public function GetAll() :array{
    $books = $this->pdo->query("select * from books");
    return $books->fetchAll(PDO::FETCH_ASSOC);
  }

  /**
   * Inser 1 data ke tabel Boosk 
   */
  public function InsertOne(string $data){

  }
  

  
}


