<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDO;
use App\Book;
use App\Author;
use App\Publisher;

class SearchController extends Controller
{
    public function index()
    {
        $books = Book::all();
//            ->select('books.title', 'first_name', 'last_name', 'name')
//            ->join('authors', 'books.author_id', '=', 'authors.id')
//            ->join('publishers', 'books.publisher_id', '=', 'publishers.id')
//            ->get();
//
 //I've linked up the relationships and created the models

        return view('books.index',[
            'books' => $books,

        ]);
    }
    public function search($bookID)
    {

        $reviews = DB::table('reviews')
            ->select('headline', 'body', 'rating')
            ->where('id', '=', "$bookID")
            ->get();
        $titles = DB::table('books')
            ->select('title')
            ->where('id', '=', "$bookID")
            ->get();
        $authors = DB::table('authors')
            ->select('first_name', 'last_name')
            ->where('id', '=', "$bookID")
            ->get();
        $publishers = DB::table('publishers')
//             ->select('name')

            ->select("publishers.name AS publisher_name")
            ->where('id', '=', "$bookID")
            ->get();

        return view('book-results',[
            'reviews' => $reviews,
            'titles' => $titles,
            'authors' => $authors,
            'publishers' => $publishers

        ]);

//        $sql = "
//            SELECT headline, body, rating, title, first_name, last_name
//            FROM reviews, books, authors
//            WHERE books.id = ?
//
//        ";
//
//
//        $statement = self::$pdo->prepare($sql);
//        $statement->bindParam(1, $bookID);
//        $statement->execute();



//
//
//        return $sql;
    }


}
