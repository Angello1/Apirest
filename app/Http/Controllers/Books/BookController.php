<?php
namespace App\Http\Controllers\Books;

use App\Domain\Books\Book;
use \App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BookController extends Controller
{
    public function getIndex()
    {
        return Book::all();
    }

    public function getShow($id)
    {
        $Response = new Response();
        $resource = Book::find($id);

        if (is_null($resource)) {
            $Response->setStatusCode(404);
        } else {
            $resource = json_encode($resource, JSON_PRETTY_PRINT);
        }

        $Response->header('Content-type', 'application/json');

        return $Response->setContent($resource);
    }
    public function postStore(Request $request)
    {
        $book = Book::create(['title' => $request->title,'author' => $request->author,'isbn' => $request->isbn]);
        return $book;
    }
}