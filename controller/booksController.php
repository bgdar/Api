<?php 
namespace App\booksController;
require_once __DIR__."/../model/booksModel.php";
use BooksModel;

class booksController {

  private BooksModel $BooksModel ;

  public function __construct(){  

    $this->BooksModel = new BooksModel();
  }

function index(){
  $daftar_api = "
  -=-=-=-= Books Api =-=-=-=-\n 
  - /books/
  ";
    echo $daftar_api;
}

function getAllData (){

  $allData  = $this->BooksModel->GetAll();
  $response = [
    "status"=>"success",
    "data" => $allData,
  ];
  // perhatikakan spasi nya 
  header("Content-Type: application/json");
  echo json_encode($response,JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
}

/**
 * POST 
 */
function updateBooks(){

}

function error404(){

  echo "url | halaman tidak di temukan ";
}

}
