<?php 

namespace App\booksController;

class booksController {

function index(){
  $daftar_api = "
  -=-=-=-= Books Api =-=-=-=-\n 
  - /books/
  ";
    echo $daftar_api;
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
