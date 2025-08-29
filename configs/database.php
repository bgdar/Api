<?php 

/** use PDO; */
/* use PDOException; */

class Database {

  private $pdo = null;
  public function __construct($dbFile = __DIR__ . "/../configs/database.db"){
    try {
            $this->pdo = new PDO("sqlite:" . $dbFile);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }

    // jalanakan saat class di panggil
    $this->getPDO();
    if(!$this->cekTable("books")){
      $this->createtabel("books");
    }
  }

  /**
   * Kembalikan pdo , untuk mendapatkan koneksi ke dtabase
   */
  public function getPDO():PDO{
    return $this->pdo;
  }

  /**
   *fn query
   */
  public function query($sql, $params = []) {
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    }
  /**
   * function untuk cek table apakah ada
   */
  public function cekTable(string $table): bool {
    $stmt = $this->pdo->prepare("SELECT name FROM sqlite_master WHERE type='table' AND name = ?");
    $stmt->execute([$table]);
    return $stmt->fetch() !== false;
}


  /**
   * function untuk memebuat table 
   */
  public function createtabel(string $tableName):void{
    $books = "create table if not exists {$tableName}(
        id integer primary key autoincrement,
        title text not null,
        author text not null,
        published_year text,
        language text,
        catagory text,
        country text);";
  $this->pdo.exec($books);
  }

  /**
   * fake data untuk table 
   */
  public function fakeData(){
  $sql1 = "insert into books(title,author,published_year,language,catagory,country) values ('js','bgdar','2025,'indonesia','programing','indonesia');";

  $sql2 = "insert into books(title,author,published_year,language,catagory,country) values ('cpp and c','dar','2015','indonesia','programing','semarang');";
  $this->pdo->exec($sql1);
  $this->pdo.exec($sql2);
  }
}
