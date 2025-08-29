<?php 
require __DIR__ . "/../controller/booksController.php";  // require manual  

use App\booksController\booksController;


$url = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
$method =$_SERVER["REQUEST_METHOD"];


$booksController  = new booksController();


switch ("$method $url"){
  case 'GET /books':
    // panggil function index dengan teknik modularitas
    $booksController->index();
    break;
  case 'GET /books/all':
    $booksController->getAllData();
  break;    
  case "POST /books/":
    $booksController->updateBooks();
  
default :
  http_response_code(404);

}




