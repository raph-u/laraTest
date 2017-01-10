<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
use DB; // Prev line eq...
use App\Article;


class CardsController extends Controller
{
    public function index() {
        /*$components = DB::select('select title from article where idarticle = ?', [14]);*/
        //$components = DB::select('select title from article', [14]);
        
        /*$articles = \App\Article::all();*/
        //or
        $articles = Article::all();

        return view('articles.index', compact('articles'));
    }

    //1st approach
/*    public function show($cardId) {

        $card = Article::find($cardId);
        return view('cards.show', compact('card'));

        return $card;
    }*/

    //2nd article
    public function show(Article $article) {
        return view('articles.show', compact('article'));
    }
}
