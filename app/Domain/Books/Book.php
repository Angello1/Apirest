<?php
namespace App\Domain\Books;

use \Illuminate\Database\Eloquent\Model;

class Book extends Model
{

    protected $table = "books";
    protected $fillable = ['title','author','isbn'];

}