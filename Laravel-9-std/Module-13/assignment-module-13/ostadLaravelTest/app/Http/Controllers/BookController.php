<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    private $books = [
        [
            'author'=>'Jane Austen',
            'title'=>'Pride and Prejudice'
        ],
        [
            'author'=>'F. Scott Fitzgerald',
            'title'=>'The Great Gatsby'
        ],
        [
            'author'=>'George Orwell',
            'title'=>'1984'
        ],
        [
            'author'=>'J.R.R Tolkien',
            'title'=>'The Lord of the Rings'
        ],
        [
            'author'=>'Harper Lee',
            'title'=>'To kill a Mockingbird'
        ]
    ];


    function books(Request $request){
        $limit = $request->query('limit',0);
        // return $limit;
        if($limit==0){

            return $this->books;
        }else{
          return  array_splice($this->books, 0, $limit);
        }
     
    }

    function getBook($id){
        $bookId = $id-1;
        return $this->books[$bookId];
    }

    function getBookField($id,$field){
        $bookId = $id-1;
        $book = $this->books[$bookId];
        return $book[$field];
    }

    
    function createBook(Request $request){
        $author = $request->get('author');
        $title = $request->get('title');

        return "Author = {$author} and Title = {$title}";
    }
    /*
    function createBook(){
        $author = request()->get('author');
        $title = request()->get('title');

        return "Author = {$author} and Title = {$title}";
    }
    */

    function getHeader(Request $request){
        $author = $request->get('author');
        $title = $request->get('title');
        $token = $request->header('token');

        return "Author = {$author} and Title = {$title} and Token = {$token}";
    }
}
